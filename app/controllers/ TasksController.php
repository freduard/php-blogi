<?php

namespace App\Controllers;

use App\Core\App;
use PDO;

class TasksController {

    public function index () {

        $tasks = App::get('database')->selectAll('tasks');

        return view('tasks', ['tasks' => $tasks]);        

    }

    public function store () {

        App::get('database')->insert('tasks', [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'date' => date('Y-m-d H:i:s'),
        ]);
        return redirect('tasks');
    }

    public function delete(){
        $id=$_POST['id'];

        App::get('database')->delete('tasks', "id = $id");

        return redirect('tasks');

    }

    public function edit(){
        $id=$_POST['id'];
        $title=$_POST['title'];
        $description=$_POST['description'];
        $date=$_POST['date'];
        App::get('database')->update('tasks','title', "$title" ,"id = $id",);
        App::get('database')->update('tasks','description', "$description" ,"id = $id",);
        App::get('database')->update('tasks','date', "$date" ,"id = $id",);
        

        return redirect('tasks');
    }
}