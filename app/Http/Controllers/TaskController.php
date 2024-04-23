<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getAllTasks()
    {
        return "get all tasks";
    }

    public function createTask()
    {
        return "create a task";
    }

    public function getTask($id)
    {
        return "get task with id $id";
    }

    public function updateTask($id)
    {
        return "update task with id $id";
    }

    public function deleteTask($id)
    {
        return "delete task with id $id";
    }
    
}
