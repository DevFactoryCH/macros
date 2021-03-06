{{$file = null}}
<div class="form-group">
  {!! Form::label($name, $label, array('class' => 'col-sm-2 control-label')) !!}

  <div class="col-sm-10">

    <div class="image-upload"{!! is_null($file) ? '' : ' style="display:none;"' !!}>
      {!! Form::file($name) !!}
      {!! $errors->has($name) ? Form::label('error', $errors->first($name), array('class' => 'control-label')) : '' !!}
      {{ $errors->has($name) ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' }}
    </div>

    @if (!is_null($file))
      <div class="row image-display" data-id="{{ $file->id }}" data-scope="{{ $type }}" data-model-id="{{ is_null($model) ? '' : $model->id }}" data-model-name="{{ $model_name }}">
        @if (!empty($image->img_nosize))
          <div class="col-sm-2">
            {!! $image->img_nosize !!}
          </div>
        @endif
        <div class="col-sm-{!! (!empty($image->img_nosize)) ? '8' : '10' !!}">
          <div class="input-group">
            <span class="input-group-addon">Alt</span>
            {!! Form::text('media_alt', $file->alt, ['class' => 'alt form-control', 'data-type' => 'alt', 'autocomplete' => 'off']) !!}
          </div>
          <div class="input-group" style="margin-top:10px">
            <span class="input-group-addon">Title</span>
            {!! Form::text('media_title', $file->title, ['class' => 'title form-control', 'data-type' => 'title', 'autocomplete' => 'off']) !!}
          </div>
        </div>

        <div class="col-sm-2 text-right">
          <a href="#" class="btn btn-danger remove-single-image">
            <i class="glyphicon glyphicon-trash"></i>&nbsp;
            <span>{{ trans('general.delete') }}</span>
          </a>
        </div>

        {!! Form::hidden('old_file_'. $name, TRUE) !!}

      </div>

    @endif

  </div>

</div>
