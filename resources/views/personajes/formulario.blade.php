          <div class="mb-3 form-group">
            {{ Form::label('Url Imagen') }}
            {{ Form::text('image', $personaje->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Imgagen']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
          </div>
          <div class="mb-3 form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $personaje->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
          </div>
          <div class="mb-3 form-group">
            {{ Form::label('Status') }}
            {{ Form::text('status', $personaje->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
          </div>
          <div class="mb-3 form-group">
            {{ Form::label('Species') }}
            {{ Form::text('species', $personaje->species, ['class' => 'form-control' . ($errors->has('species') ? ' is-invalid' : ''), 'placeholder' => 'Species']) }}
            {!! $errors->first('species', '<div class="invalid-feedback">:message</div>') !!}
          </div>
          <div class="mb-3 form-group">
            {{ Form::label('Type') }}
            {{ Form::text('type', $personaje->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
          </div>
          <div class="mb-3 form-group">
            {{ Form::label('Gender') }}
            {{ Form::text('gender', $personaje->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }}
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
          </div>
          <div class="mb-3 form-group">
            {{ Form::label('Origin name') }}
            {{ Form::text('origin_name', $personaje->origin_name, ['class' => 'form-control' . ($errors->has('origin_name') ? ' is-invalid' : ''), 'placeholder' => 'Origin name']) }}
            {!! $errors->first('origin_name', '<div class="invalid-feedback">:message</div>') !!}
          </div>
          <div class="mb-3 form-group">
            {{ Form::label('Origin url') }}
            {{ Form::text('origin_url', $personaje->origin_url, ['class' => 'form-control' . ($errors->has('origin_url') ? ' is-invalid' : ''), 'placeholder' => 'Origin url']) }}
            {!! $errors->first('origin_url', '<div class="invalid-feedback">:message</div>') !!}
          </div>