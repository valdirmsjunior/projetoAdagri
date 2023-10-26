<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.vagas.index');
    }

    public function create()
    {
        return view('admin.vagas.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.vagas.create');
    }
}
