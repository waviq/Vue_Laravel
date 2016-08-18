<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        //dd($tasks);
        return view('welcome', compact('tasks'));
    }
}
