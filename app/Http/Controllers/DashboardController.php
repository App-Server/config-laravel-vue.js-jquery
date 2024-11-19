<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Simulação de dados (substitua com dados do banco de dados)
        $salesData = [
            ['y' => 100, 'label' => 'January'],
            ['y' => 200, 'label' => 'February'],
            ['y' => 300, 'label' => 'March'],
        ];

        // return response()->json($salesData); 
        return view('dashboard');
    }
}
