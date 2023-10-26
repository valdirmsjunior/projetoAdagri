<?php

namespace App\Repositories;

use App\Models\TipoContrato;

class TipoContratoRepository 
{
    protected $model = TipoContrato::class;

    public function selecteOption()
    {
        try {
            return $this->model
                ->all()
                ->sortBy('nome')
                ->pluck('nome', 'id')
                ->prepend('Escolha a opção');
        } catch (Exception $e) {
            return [
                '' => $e->getMessage()
            ];
        }
    }
}