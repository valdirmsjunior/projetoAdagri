<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\TipoContratoRepository;
use Illuminate\Http\Request;

class TipoContratoController extends Controller
{
    public function __construct(TipoContratoRepository $tipoContratoRepository)
    {
        $this->tipoContratoRepository = $tipoContratoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (count($request->all()) > 0) {
            $tiposContrato = $this->tipoContratoRepository->paginateWhere(10, 'nome', 'ASC', $request->except(['_token', 'page']));
        } else {
            $tiposContrato = $this->tipoContratoRepository->paginate(10, 'nome');
        }

        return view('admin.vagas.index', [
            'tiposContrato' => $tiposContrato
        ]);
    }
}
