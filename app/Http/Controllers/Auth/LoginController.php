<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Brian2694\Toastr\Facades\Toastr;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo(){
        if(Auth()->user()->role=="admin"){
            Toastr::success('Login Successfully', 'Success');
            return route('admin.dashboard');
        }
        elseif(Auth()->user()->role=="cashier"){
            Toastr::success('Login Successfully', 'Success');
            return route('cashier.dashbord');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $input = $request->all();
        $this->validate($request,[
        'email'=>'required|email|exists:users,email',
        'password'=>'required'
        ],[
            'email.exists'=>'This email does not exists in admins table'
        ]);

        if(auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password']))){
            if(auth()->user()->role=='admin'){
                Toastr::success('Something went wrong, failed to register', 'Success');
                return redirect()->route('admin.dashboard');
            }elseif(auth()->user()->role=='cashier'){
                return redirect()->route('cashier.dashboard');
            }

        }else{
            Toastr::error('Something went wrong, failed to register', 'Error');
            return redirect()->back();
        }
    }
}
