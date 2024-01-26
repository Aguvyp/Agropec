<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function profile(User $user)
    {
        $productList = $user->products;

        return view(('userProducts'), [
            'user' => $user,
            'productList' => $productList
        ]);
    }
}
