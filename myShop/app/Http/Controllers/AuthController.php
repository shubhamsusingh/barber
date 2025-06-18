<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;
// use App\Models\User; // Make sure User model is imported
// use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
 public function index(Request $request)
    {
        return view('auth.register');
    }
    public function register(Request $request){
        $name = $request->input('name');
        echo $name;
        exit;

    }
}
?>
