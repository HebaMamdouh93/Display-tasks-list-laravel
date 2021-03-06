<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $tasks=Task::All();
        return view('tasks.home',[
            'tasks' => $tasks,  
        ]);
    }
}
