<div class="form-group">
  {{ Form::label($name, $label, ['class' => 'control-label']) }}
  {{ Form::select($name, $options, $value, array_merge(['class' => 'form-control'], $attributes)) }}
  @if (!empty($help))
    <small class="form-text text-muted">{{ $help }}</small>
  @endif
  {!! $errors->has($name) ? '<span class="text-danger">' . $errors->first($name) . '</span>' : '' !!}
</div>
