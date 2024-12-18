<?php

namespace Daw2\MvcTestPhp\Controllers;

use stdClass;
use Daw2\MvcTestPhp\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        echo $this->blade->view()->make('user.index', compact('users'))->render();
    }

    public function show($id)
    {   
        $data = [
            'user' => $user = User::find($id),
            'title' => 'Detalles de usuario'
        ];
        echo $this->blade->view()->make('user.show', $data)->render();
    }
}
