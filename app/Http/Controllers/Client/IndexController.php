<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // функция для открытия главной страницы
    public function index() {
        return view('client.index');
    }
}
