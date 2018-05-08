<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 2/27/2018
 * Time: 9:44 PM
 */

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UsersController extends Controller
{
    public function getRegister()
    {
        return view('Backend.Users.register');
    }

    public function getLogin()
    {
        return view('Backend.Users.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);
        $user = User::WHERE('email', $request->input('email'))
            ->first();
        if ($user) {
            if ($user->activation_token == null && $user->status == 'active') {

                if (Auth::attempt([
                    'email' => $request->input('email'),
                    'password' => $request->input('password')
                ])
                ) {
                    $notification = array('message' => 'Login Successful',
                        'alert-type' => 'success');

                    if($user->type=='admin'){
                        return redirect()->route('dashboard')->with($notification);
                    }elseif ($user->type=='sub_admin'){
                        return redirect()->route('dashboard')->with($notification);
                    }elseif ($user->type=='agent'){
                        return redirect()->route('dashboard')->with($notification);
                    }elseif ($user->type=='member'){
                        return redirect()->route('dashboard')->with($notification);
                    }else
                        return redirect()->route('dashboard')->with($notification);
                }

            } else {
                $notification = array('message' => 'Sorry you have not been activated',
                    'alert-type' => 'warning');
                return redirect()->back()->with($notification);
            }
        }
        $notification = array('message' => 'Sorry you have some error',
            'alert-type' => 'error');
        return redirect()->back()->with($notification);


    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);
        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'activation_token' => str_random(60)
        ]);
        $user->save();
        $user->SendVerification();
        // Auth::login( $user );
        $notification = array('message' => 'User has been succesfully Created please check your email for further action .',
            'alert-type' => 'info');
        return redirect()->back()->with($notification);
    }

    public function getLogout()
    {

        Auth::logout();
        $notification = array('message' => 'Your Account has been successfully Loged out!',
            'alert-type' => 'success');
        return redirect()->route('login')->with($notification);
    }

    public function confirm($token)
    {
        $token = User::where('activation_token', $token)->firstOrFail();
        $token->update([
            'activation_token' => NULL,
        ]);
        $notification = array('message' => 'Your Account is Verified now . Please contact to activate',
            'alert-type' => 'warning');
        return redirect()->back()->with($notification);
    }

    public function getPasswordRequest()
    {

    }

    public function getUsersList(){
        $user=User::paginate(20);
        return view('Backend.Users.listUsers')->withUsers($user);
    }
}