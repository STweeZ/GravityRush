<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function deconnexion()
{
    auth()->logout();

    return redirect('/');
}
}
