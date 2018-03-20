<div class="form-check">
  {{ Form::checkbox($name, $value, $checked, array_merge(['class' => 'form-check-input'], $attributes)) }}
  {{ Form::label($name, $label, ['class' => 'form-check-label']) }}
  @if (!empty($help))
    <small class="form-text text-muted">{{ $help }}</small>
  @endif
  @if (!is_null($errors) && $errors->has($name))
    <div class="invalid-feedback">{{ $errors->first($name) }}</div>
  @endif
</div>
