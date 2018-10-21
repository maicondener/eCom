<?php

namespace eCom\Http\Controllers\painel;

use Illuminate\Http\Request;
use eCom\Http\Controllers\Controller;

class crtDashboard extends Controller
{
    //Bloqueia o painel para acessar somente com login
    public function __contruct(){
        $this->middleware('auth');
    }

    //Página inicial do Dashboard
    public function index(){
        return view('painel.dashboard');
    }


}
