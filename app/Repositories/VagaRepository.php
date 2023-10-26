<?php

namespace App\Repositories;

use Exception;
use DB;

use Illuminate\Support\Str;

use App\Models\Vaga;


class VagaRepository 
{
    protected $model;

    public function __construct(Vaga $model)
    {
        $this->model = $model;
    }

    public function paginate($paginate = 10, $orderBy, $sort = 'ASC')
    {
        try {
            $query = $this->model->query();
            $query->select('vagas.*');
            $query->join('tipo_contratos', 'tipo_contratos.id', '=', 'vagas.tipo_contratos_id');
            $query->orderBy($orderBy, $sort);
    
            return $query->paginate($paginate);
        } catch (Exception $e) {
            return [];
        }
    }

    public function store($data)
    { dd($data); 
        try {
            DB::beginTransaction();

            $vaga = new $this->model($data);
            $vaga->save();

            DB::commit();

            return true;
        } catch (Exception $e) {
            DB::rollBack();

            return $e->getMessage();
        }
    }
}