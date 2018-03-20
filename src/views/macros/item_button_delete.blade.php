<div class="btn-group">
  {{ Form::open(['method' => 'DELETE', 'url' => $url]) }}
  {{ Form::submit(trans('general.delete'), $attributes) }}
  {{ Form::close() }}
</div>
