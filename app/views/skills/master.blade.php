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
		}
	</style>
@stop