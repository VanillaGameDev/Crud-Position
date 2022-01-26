<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        // masih binggung bang
        $task = DB::table('tasks')->get();
        // dd($task);
        return view('tasks.index', compact('tasks'));
    }
}
