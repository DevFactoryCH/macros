<div class="form-group">
  {{ Form::label($name, $label, ['class' => 'control-label']) }} 
  <b>{!! isset($attributes['required']) && $attributes['required'] ? ' <span class="text-danger">*</span>' : '' !!}</b>
  {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
  @if (!empty($help))
    <small class="form-text text-muted">{{ $help }}</small>
  @endif
  {!! $errors->has($name) ? '<span class="text-danger">' . $errors->first($name) . '</span>' : '' !!}
</div>