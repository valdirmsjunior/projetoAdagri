@extends('tablar::page')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">                    
                    <h2 class="page-title">
                        CADASTRO DE VAGAS
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
                    subtitle="Novo"
                    :action="route('admin.vagas.store')"
                    method="post"
                    :routeBack="route('admin.vagas.index')"
                >
                    @include('admin.vagas.partials.form')
                </x-form>
            </div>
        </div>
    </div>
@endsection
