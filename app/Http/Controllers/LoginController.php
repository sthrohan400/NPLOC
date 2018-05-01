<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Session;
class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login.login');
    }
    public function processLogin(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('/go/login')
                        ->withErrors($validator)
                        ->withInput();
        }
        $credentials  =  $request->all();
        $username = $credentials['username'];
        $password = $credentials['password'];
        if (Auth::attempt(['username' => $username, 'password' => $password , 'status'=>1,'verified' => 1])) {
            session(['KCFINDER' => ['disabled' => false]]);
            return redirect('/go/verify/otp');
        }
        else{
            Session()->flash('error', 'Please Try Again. Username and Password didnot Match.');
            return redirect('/go/login');
        }
    }
    public function passwordReset()
    {
        return view('login.passwordreset');
    }
    public function oneTimePassword(){
        return view('login.otp');
    }
    public function processOneTimePassword(){

    }
    public function logout(Request $request){
        Auth::logout();
        Session::flush();
        ob_clean();
        return redirect('/go/login');
    }
}
