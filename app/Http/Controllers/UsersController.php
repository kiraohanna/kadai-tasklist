<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        $user=User::find($id);
        
        $data = [
            'user'=>$user,
            'tasks'=>$user->tasks,
        ];
        
        return view('users.show', $data);
    }
} 
