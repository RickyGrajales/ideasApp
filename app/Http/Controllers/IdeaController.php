<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;
use Illuminate\Support\Facades\DB;

class IdeaController extends Controller
{
    //
    public function index()
    {
      $ideas = DB::table('ideas')->get(); // esto seria un select * from ideas 
        return view('ideas.index', ['ideas' => $ideas]);
    }
}
