<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;
use App\Models\User; // Make sure User model is imported
// use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Session;
use Jenssegers\Agent\Agent;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = new User();
        // $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password')); // Always hash passwords
        $user->save();
        return redirect()->back();
    }
    public function getloginPage(Request $request)
    {
        return view('auth.login');
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->input('email'))->first();
        if ($user && Hash::check($request->input('password'), $user->password)) {
            // Store user info in session
            Session::put('user_id', $user->id);
            Session::put('user_name', $user->name);
            Session::put('user_email', $user->email);
            $agent = new Agent();
            Session::put('device', $agent->device());
            Session::put('browser', $agent->browser());
            Session::put('platform', $agent->platform());
            \Log::info('Login detected', [
    'user_id' => $user->id,
    'device' => $agent->device(),
    'browser' => $agent->browser(),
    'platform' => $agent->platform(),
    'ip' => $request->ip()
]);


            return redirect('/');
        } else {
            return back()->with('error', 'Invalid email or password.');
        }
        // print_r($user);
        // exit;
    }
}
?>
