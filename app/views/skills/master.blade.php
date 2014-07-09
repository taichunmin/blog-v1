@extends('layout')

@section('content')
<div class="row">
	<div class="col-sm-6">
		{{ $contentLeft }}
	</div>
	<div class="col-sm-6">
		{{ $contentRight }}
	</div>
</div>
@stop

@section('css')
	@parent
	<style>
		.pgbar-title{
			white-space: nowrap;
			text-overflow:ellipsis;
			overflow: hidden;
			padding-right: 0;
		}
	</style>
@stop

@section('js')
	@parent
	<script>
	(function($){$(function(){$('[data-toggle="tooltip"]').tooltip()})})(jQuery);
	</script>
@stop
