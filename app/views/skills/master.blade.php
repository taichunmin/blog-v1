@extends('layout')

@section('content-fluid')
<div class="row">
	<div class="jumbotron">
		<div class="container">
			<h1><span class="fa fa-bar-chart-o fa-rotate-90 fa-fw"></span> 技能</h1>
			<p class="lead">
				本頁列出了我學過的程式語言，並大略的分成三個熟悉程度：精通、中等及略懂。
			</p>
		</div>
	</div>
</div>
@stop


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
