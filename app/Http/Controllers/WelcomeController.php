<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $user = User::query()->create([
            'name' => 'John Doe',
            'email' => 'john@doee.com',
            'password' => bcrypt('password')
        ]);

        return view('welcome');
    }
}
