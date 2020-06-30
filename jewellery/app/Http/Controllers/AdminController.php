<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\User;
use App\Models\Product;
use App\Models\Conversation_Detail;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    

    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.pages.index');
    }
    public function my_account()
    {
        return view('admin.pages.my_account');
    }
    public function chat(Request $request)
    {
        $conv_rst = Conversation::leftJoin('user', 'user.id', '=', 'conversation.sender_id')->where([['reciever_id', $request->u_id],['type', 'admin']])->orderBy('updated_at', 'desc')->get();
        if ($conv_rst) {
            foreach ($conv_rst as $key=>$value) {
                 // $info_rst = User::select('first_name', 'last_name', 'profile_pic')->where('id', '=', $value['reciever_id'])->first();
                 $conv_rst[$key]['name'] = ucfirst($value['first_name'].' '.$value['last_name']);
                 // $value['profile_pic'] = $info_rst['profile_pic'];
            }
        }
        return view('admin.pages.chat',['temp_convs' => $conv_rst]);
    }
    public function sendMessage(Request $request)
    {
        $conv_dtl = new Conversation_Detail;
        if ($request->file('chat-file-upload')) {
            $ldate = date('Y-m-d-H-i-s');
            $imageName = strval('C'.$request->conv_id.'_'.$ldate).'.'.$request->file('chat-file-upload')->getClientOriginalExtension();
            $request->file('chat-file-upload')->move(public_path('/img/chat'), $imageName);
            $conv_dtl->src = '/img/chat/'.$imageName;
            $conv_dtl->type = 1;
        //   return response()->json([
        //  'name'   => '/img/chat/'.$imageName,
        //  'id' => $request->conv_id
        // ]);
        } else {
            $conv_dtl->src = null;
            $conv_dtl->type = 0;
        }
        
        $conv_dtl->content = $request->message;
        $conv_dtl->r_status = 1;
        $conv_dtl->s_status = 0;
        $conv_dtl->send_o_recieve = 1;
        $conv_dtl->conv_id = $request->conv_id;
        $conv_dtl->save();
        Conversation::find($request->conv_id)->touch();
        $conv_dtl['status'] = 1;
        return $conv_dtl;
    }
    public function viewConversation(Request $request)
    {
        $temp_conv = Conversation::leftJoin('user', 'user.id', '=', 'conversation.sender_id')->where([
                ['conv_id', '=', $request->conv_id],
                ['reciever_id', '=', Auth::id()]
        ])->first();
        if ($temp_conv) {
            $temp_conv['name'] = ucfirst($temp_conv['first_name'].' '.$temp_conv['last_name']);
    //     if ($temp_conv['type'] == 'company')
    //     {
    //          $info_rst = User::select('name','profile_pic')->where('id', '=', $temp_conv['sender_id'])->first();
    //          $temp_conv['name'] = ucfirst($info_rst['name']);
    //          $temp_conv['profile_pic'] = $info_rst['profile_pic'];
    //     }
            // if ($temp_conv['type'] == 'admin')
            // {
            //     $info_rst = Admin::select('name')->where('id', '=', $temp_conv['reciever_id'])->first();
            //     $temp_conv['name'] = ucfirst($info_rst['name']);
            //     $temp_conv['profile_pic'] = '/img/admin.png';
            // }
            $temp_conv_rst = Conversation_Detail::where('conv_id', '=',$request->conv_id)->get();
            Conversation_Detail::where(['conv_id' => $request->conv_id])->update(['s_status'=>0]);
            return view('admin.partials.chat_detail',['info_rst' => $temp_conv, 'temp_conv_rst' => $temp_conv_rst ]);
        }
        // if ($temp_conv)
        // {
        //     $temp_conv_rst = Conversation_Detail::get();
        //     Conversation_Detail::where(['conv_id' => $request->conv_id])->update(['r_status'=>0]);
        //     return $temp_conv_rst;
        // }
        // else
        // {
        //     return "";
            // }
    }

    public function getMessage(Request $request)
    {
        $temp_conv_rst = null;
        $temp_ttl_noti = 0;
        if ($request -> message == 1)
        {
            $temp_conv_rst = Conversation_Detail::where([
                    ['conv_id','=',$request->conv_id],
                    ['s_status','=',1]
            ])->get();
            Conversation_Detail::where(['conv_id' => $request->conv_id])->update(['s_status'=>0]);
        }
        $temp_conv_alert = Conversation::where([
            ['reciever_id','=',Auth::id()],
            ['type','=','admin'],
        ])->get();
        if ($temp_conv_alert) {
            foreach ($temp_conv_alert as $key => $value) {
                    $pending = Conversation_Detail::where([['s_status','=',1],['conv_id','=',$value->conv_id]])->groupBy('conversation_detail.conv_id')->sum('s_status');
                    $temp_conv_alert[$key]['pending'] = $pending;
                    $temp_ttl_noti += $pending;
            }
        }
        return response()->json(['status'=>1,'message'=>'Message sent successfully','data'=>$temp_conv_rst,'alert' => $temp_conv_alert, 'notification' => $temp_ttl_noti]);
    }
}
