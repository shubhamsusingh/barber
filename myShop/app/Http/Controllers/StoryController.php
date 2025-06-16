<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
class StoryController extends Controller{
public function index(Request $request)
    {
        return view('story.index');
    }
}

?>
