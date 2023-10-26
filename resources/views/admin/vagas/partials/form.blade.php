<div class="mb-3 row">
    <div class="col-md-4">
        <x-form-label for="name" class="form-label" name="Vaga" required />
        {!!
            Form::text('name', old('name', isset($vaga) ? $vaga->vagas : ''), [
                'id' => 'name',
                'class' => 'form-control '.($errors->has('name') ? 'is-invalid' : '')
            ])
        !!}
        <x-form-error :message="$errors->first('name')" />
    </div>

    <div class="col-md-4">
        <x-form-label for="tipo_contrato_id" class="form-label" name="Tipo Contrato" required />
        {!!
            Form::text('tipo_contrato_id', old('tipo_contrato_id', isset($vaga) ? $vaga->vagas : ''), [
                'id' => 'name',
                'class' => 'form-control '.($errors->has('tipo_contrato_id') ? 'is-invalid' : '')
            ])
        !!}
        <x-form-error :message="$errors->first('tipo_contrato_id')" />
    </div>

    <div class="col-md-4">
        <x-form-label for="qtd_vagas" class="form-label" name="Quantidade de Vagas" required />
        {!!
            Form::text('qtd_vagas', old('qtd_vagas', isset($vaga) ? $vaga->quantidade_vagas : ''), [
                'id' => 'qtd_vagas',
                'class' => 'form-control '.($errors->has('qtd_vagas') ? 'is-invalid' : '')
            ])
        !!}
        <x-form-error :message="$errors->first('qtd_vagas')" />
    </div>
</div>