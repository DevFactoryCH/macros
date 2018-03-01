<div class="form-group{{ (!is_null($errors) && $errors->has($name)) ? ' has-error' : '' }}">
  {{ Form::label($name, $label, ['class' => 'control-label']) }}
  {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
  @if (!empty($help))
    <small class="form-text text-muted">{{ $help }}</small>
    <p class="help-block"></p>
  @endif
  {{ $errors->has($name) ? '<div class="invalid-feedback">' . $errors->first($name) . '</div>' : '' }}
</div>
