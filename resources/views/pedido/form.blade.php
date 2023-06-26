<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cancion') }}
            {{ Form::text('cancion', $pedido->cancion, ['class' => 'form-control' . ($errors->has('cancion') ? ' is-invalid' : ''), 'placeholder' => 'Cancion']) }}
            {!! $errors->first('cancion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('artista') }}
            {{ Form::text('artista', $pedido->artista, ['class' => 'form-control' . ($errors->has('artista') ? ' is-invalid' : ''), 'placeholder' => 'Artista']) }}
            {!! $errors->first('artista', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mesa') }}
            {{ Form::text('mesa', $pedido->mesa, ['class' => 'form-control' . ($errors->has('mesa') ? ' is-invalid' : ''), 'placeholder' => 'Mesa']) }}
            {!! $errors->first('mesa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $pedido->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cliente_id') }}
            {{ Form::text('cliente_id', $pedido->cliente_id, ['class' => 'form-control' . ($errors->has('cliente_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente Id']) }}
            {!! $errors->first('cliente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>