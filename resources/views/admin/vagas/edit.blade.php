@extends('tablar::page')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">                    
                    <h2 class="page-title">
                        EDITAR VAGA
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="row">
            <div class="col-lg-12">
                <x-form
                    title="Vagas"
                    subtitle="Edição"
                    :action="route('admin.vagas.update', $vagas)"
                    method="PUT"
                    :routeBack="route('admin.vagas.index')"
                >
                    @include('admin.vagas.partials.form')
                </x-form>
            </div>
        </div>
    </div>
    
@endsection