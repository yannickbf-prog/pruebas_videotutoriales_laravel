<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function index(){
        echo "hola mundo";
        
        $portfolio = [
            ["title" => "Proyecto #1"],
            ["title" => "Proyecto #2"],
            ["title" => "Proyecto #3"],
            ["title" => "Proyecto #4"],
        ];
        
        return view('portfolio', compact("portfolio"));

    }
    
}
