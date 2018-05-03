<div class="btn-group">
  {{ Form::open(['method' => 'GET', 'url' => $url]) }}
  {{ Form::button($text, $attributes) }}
  {{ Form::close() }}
</div>
