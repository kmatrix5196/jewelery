<?php

namespace App\Http\Controllers\Auth;
use App\Models\Company;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class CompanyRegisterController extends Controller
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
        $this->middleware('guest:company');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    
    protected function validatorCompany(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:company'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function showCompanyRegisterForm()
    {
        return view('client.pages.register', ['url' => 'company']);
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
    protected function createCompany(Request $request)
    {
        // echo $request->all();
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:company'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        // $this->validatorCompany($request->all())->validate();
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
}
