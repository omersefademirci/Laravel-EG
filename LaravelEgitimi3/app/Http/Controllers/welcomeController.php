<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function __invoke(){
        echo 'method belirtmeyince burası çalışıyor';
    }
    public function index(){
        echo 'deneme';
    }
}
