<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ServicsController extends Controller{
public function index(Request $request)
    {
        return view('service.index');
    }
}

?>
