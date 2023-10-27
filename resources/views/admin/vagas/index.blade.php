@extends('tablar::page')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">                    
                    <h2 class="page-title">
                        VAGAS
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                
                        <a href="{{route('admin.vagas.create')}}" class="btn btn-primary d-none d-sm-inline-block" >
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Cadastrar Vagas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <x-table title="" subtitle="Listagem de Vagas"
                :headers="['Vaga', 'Quantidade de Vagas', 'Tipo de Contrato', 'Status', 'Ações']"
                :records="$vagas"
            >

            <x-slot name="slot">
                @forelse ($vagas as $vagaKey => $vaga)
                <tr class="text-center align-middle">
                    <td>{{ $vaga->vaga }}</td>
                    <td>{{ $vaga->quantidade_vagas }}</td>
                    <td>{{ $vaga->tipo_contrato_id ? $vaga->tipoContrato->nome : ""}}</td>
                    <td></td>
                    
                    <td>
                        <div class="dropdown dropup">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu-{{ $vagaKey }}" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu-{{ $vagaKey }}" style="">
                                <a
                                    class="dropdown-item"
                                    href="{{ route('admin.vagas.edit', $vaga) }}"
                                >
                                    <i class="fas fa-pencil-alt"></i> Editar
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                    
                @empty
                    
                @endforelse
            </x-slot>
                
            </x-table>
        </div>
    </div>
@endsection
