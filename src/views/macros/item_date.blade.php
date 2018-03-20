<div class="form-group">
  {{ Form::label($name, $label, ['class' => 'control-label']) }}
  {{ Form::date($name, $value, $attributes) }}
  @if (!empty($help))
    <small class="form-text text-muted">{{ $help }}</small>
  @endif
  @if (!is_null($errors) && $errors->has($name))
    <div class="invalid-feedback">{{ $errors->first($name) }}</div>
  @endif
</div>
