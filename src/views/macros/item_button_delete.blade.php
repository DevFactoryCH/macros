<div class="btn-group">
  {{ Form::open(['method' => 'DELETE', 'url' => $url]) }}
  {{ Form::button($text, $attributes) }}
  {{ Form::close() }}
</div>
