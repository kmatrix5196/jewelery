<?php

namespace App\Http\Controllers\Auth;
use App\Models\Admin;
use App\Models\Writer;
use App\Models\Company;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:writer');
        $this->middleware('guest:company');
        $this->middleware('guest:user');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validatorAdmin(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admin'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    protected function validatorWriter(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:writer'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    protected function validatorCompany(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:company'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    protected function validatorUser(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function showAdminRegisterForm()
    {
        return view('admin.pages.register', ['url' => 'admin']);
    }

    public function showWriterRegisterForm()
    {
        return view('admin.pages.register', ['url' => 'writer']);
    }

    public function showCompanyRegisterForm()
    {
        return view('client.pages.register', ['url' => 'company']);
    }

    public function showUserRegisterForm()
    {
        return view('client.pages.register', ['url' => 'user']);
    }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\Admin
    //  */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
    protected function createAdmin(Request $request)
    {
        $this->validatorAdmin($request->all())->validate();
        $admin = Admin::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('admin/login');
    }
    protected function createWriter(Request $request)
    {
        $this->validatorWriter($request->all())->validate();
        $writer = Writer::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('writer/login');
    }
    protected function createCompany(Request $request)
    {
        $this->validatorCompany($request->all())->validate();
        $company = new Company;
        $company->first_name=$request->fname;
        $company->last_name=$request->lname;
        $company->password=Hash::make($request->password);
        $company->email=$request->email;
        $company->phone=$request->tel;
        $company->address=$request->address;   
        $company->save();
        if ($company->save()) {
            if ($request->file('b_img') == null) {
                $file = "";
            }
            else{
            $company
            ->where('id',$company->max('id'))
            ->update(['profile_pic' => "/img/profile/".strval($company->id).".".$request->file('b_img')->extension()]);

                $imageName = strval($company->id).'.'.$request->file('b_img')->getClientOriginalExtension();
                $request->file('b_img')->move(public_path('/img/profile'), $imageName);
                $company->save();
            };
        };
        return redirect()->intended('company/login');
    }
    protected function createUser(Request $request)
    {
        $this->validatorUser($request->all())->validate();
        $user = new User;
        $user->first_name=$request->fname;
        $user->last_name=$request->lname;
        $user->password=Hash::make($request->password);
        $user->email=$request->email;
        $user->phone=$request->tel;
        $user->address=$request->address;   
        $user->save();
        if ($user->save()) {
            if ($request->file('b_img') == null) {
                $file = "";
            }
            else{
            $user
            ->where('id',$user->max('id'))
            ->update(['profile_pic' => "/img/profile/".strval($user->id).".".$request->file('b_img')->extension()]);

                $imageName = strval($user->id).'.'.$request->file('b_img')->getClientOriginalExtension();
                $request->file('b_img')->move(public_path('/img/profile'), $imageName);
                $user->save();
            };
        };
        return redirect()->intended('user/login');
    }
}
