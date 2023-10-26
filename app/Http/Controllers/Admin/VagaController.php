<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\TipoContratoRepository;
use App\Repositories\VagaRepository;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    public function __construct(
        VagaRepository $vagaRepository,
        TipoContratoRepository $tipoContratoRepository
    )
    {
        $this->vagaRepository = $vagaRepository;
        $this->tipoContratoRepository = $tipoContratoRepository;
    }

    public function index(Request $request)
    {
        if (count($request->all()) > 0) {
            $vagas = $this->vagaRepository->paginateWhere(10, 'vaga', 'ASC', $request->except(['_token', 'page']));
        } else {
            $vagas = $this->vagaRepository->paginate(10, 'vaga'); 
        }
        return view('admin.vagas.index', [
            'vagas' => $vagas
        ]);
    }

    public function create()
    {
        return view('admin.vagas.create', [
            'tipo_contratos' => $this->tipoContratoRepository->selectOption()
        ]);
    }

    public function store(Request $request)
    {// dd($request->all());
        $result = $this->vagaRepository->store($request->except(['_token']));

        if ($result === true) {
            flash('Vaga cadastrada com sucesso!')->success();

            return redirect()->route('admin.vagas.create');
        }

        flash('Erro ao cadastrar a vaga! '.$result)->error();

        return redirect()->route('admin.vagas.create');
    }
}
