@extends('layout')

@section('content-fluid')
	<div class="row" id="works-row">
		<div class="jumbotron">
			<div class="container">
				<h1>作品集</h1>
				<p class="lead">包含網頁，小工具，程式作業以及其他作品。</p>
			</div>
		</div>
	</div>
@stop

@section('content')
<?php
$works = [
	[
		'title'     => '中興大學機構典藏',
		'image'     => 'images/works/中興大學機構典藏.png',
		'describe'  => '<a href="http://tair.org.tw/" target="_blank"><u>臺灣學術機構典藏系統</u></a>維護與功能新增',
		'website'   => ['http://nchuir.lib.nchu.edu.tw/', 'Website'],
		'flashvars' => 'host=picasaweb.google.com&captions=1&noautoplay=1&hl=zh_TW&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F101162932021298598667%2Falbumid%2F6034821175115819729%3Falt%3Drss%26kind%3Dphoto%26hl%3Dzh_TW',
		'picasaweb' => 'https://picasaweb.google.com/101162932021298598667/tAnEAJ?authuser=0&feat=flashalbum',
	],
];
?>
	<div class="row work-summary">
@foreach ($works as $work_id => $work)
		<div class="col-md-4 col-sm-6">
			<div class="panel panel-default">
			  <div class="panel-heading">
			  	<img src="{{ asset( $work['image'] ) }}" alt="">
			  </div>
			  <div class="panel-body text-center">
			    <h4>{{{ $work['title'] }}}</h4>
			    <p>{{ $work['describe'] }}</p>
			    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#work-modal-{{ $work_id }}">More <span class="glyphicon glyphicon-chevron-right"></span></button>
			    <a href="http://nchuir.lib.nchu.edu.tw/" target="_blank" class="btn btn-primary">Website &nbsp;<span class="glyphicon glyphicon-new-window"></span></a>
			  </div>
			</div>
			<div class="modal fade" id="work-modal-{{ $work_id }}">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <h4 class="modal-title">作品集：{{{ $work['title'] }}}</h4>
			      </div>
			      <div class="modal-body background-loader">
			        <embed type="application/x-shockwave-flash" src="https://photos.gstatic.com/media/slideshow.swf" width="100%" height="675" flashvars="{{ $work['flashvars'] }}" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <a href="{{ $work['picasaweb'] }}" class="btn btn-primary" target="_blank">查看相簿 <span class="glyphicon glyphicon-picture"></span></a>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
@endforeach
	</div>
@stop

@section('css')
	@parent
	<style>
		#works-row{
			margin-top: -9px;
		}
		.work-summary .panel-heading img{
			width: 100%;
			border-top-left-radius: 4px;
			border-top-right-radius: 4px;
			-webkit-border-top-left-radius: 4px;
			-webkit-border-top-right-radius: 4px;
			-moz-border-top-left-radius: 4px;
			-moz-border-top-right-radius: 4px;
		}
		.work-summary .panel-heading{
			width: 100%;
			padding: 0;
		}
		.work-summary .panel-body h4{
			margin-top: 0;
		}
		.background-loader{
			background-image: url({{ asset('images/ajax-loader.gif') }});
			background-size: 50px 50px;
			background-repeat: no-repeat;
			background-position: center center;
		}
	</style>
@stop
