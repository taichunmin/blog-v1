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
$images_base = 'images/works/';
$works = [
	[
		'title'     => '中興大學機構典藏',
		'image'     => '中興大學機構典藏0.png',
		'describe'  => '<a href="http://tair.org.tw/" target="_blank"><u>臺灣學術機構典藏系統</u></a>維護與功能新增',
		'website'   => ['http://nchuir.lib.nchu.edu.tw/', 'Website'],
		'img'       => [
			[
				'src'     => '中興大學機構典藏0.png',
				'caption' => '<p>中興大學機構典藏 首頁</p>',
			],
			[
				'src'     => '中興大學機構典藏1.png',
				'caption' => '<p>從校內碩博士論文系統轉檔匯入</p>',
			],
			[
				'src'     => '中興大學機構典藏2.png',
				'caption' => '<p>從教育部 GRB 系統轉檔匯入</p>',
			],
			[
				'src'     => '中興大學機構典藏3.png',
				'caption' => '<p>替教師著作排行加上簡易的姓名權威</p>',
			],
			[
				'src'     => '中興大學機構典藏4.png',
				'caption' => '<p>替系統維護所寫的需多小工具程式</p>',
			],
			[
				'src'     => '中興大學機構典藏5.png',
				'caption' => '<p>替系統加上 Google Analytics</p>',
			],
			[
				'src'     => '中興大學機構典藏6.png',
				'caption' => '<p>社群網站推薦按鈕，檢視 DOI 紀錄，匯出 EndNote、純文字格式等功能。</p>',
			],
		],
	],
];
?>
	<div class="row work-summary">
@foreach ($works as $work_id => $work)
		<div class="col-md-4 col-sm-6">
			<div class="panel panel-default">
			  <div class="panel-heading">
			  	<img src="{{ asset( $images_base.$work['image'] ) }}">
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
			      <div class="modal-body">
			        <div id="work-carousel-{{ $work_id }}" class="carousel slide" data-ride="carousel" data-interval="false">
			          <!-- Indicators -->
			          <ol class="carousel-indicators">
@foreach ($work['img'] as $item_id => $item)
			            <li data-target="#work-carousel-{{ $work_id }}" data-slide-to="{{ $item_id }}"{{ ($item_id==0) ? ' class="active"' : '' }}></li>
@endforeach
			          </ol>

			          <!-- Wrapper for slides -->
			          <div class="carousel-inner">
@foreach ($work['img'] as $item_id => $item)
			            <div class="item{{ ($item_id==0)?' active':'' }}">
			              <img src="{{ asset( $images_base.$item['src'] ) }}">
			              <div class="carousel-caption">{{ $item['caption'] }}</div>
			            </div>
@endforeach
			          </div>

			          <!-- Controls -->
			          <a class="left carousel-control" href="#work-carousel-{{ $work_id }}" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left"></span>
			          </a>
			          <a class="right carousel-control" href="#work-carousel-{{ $work_id }}" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right"></span>
			          </a>
			        </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-info caption-toggle">切換圖片說明</button>
			        <a href="http://nchuir.lib.nchu.edu.tw/" target="_blank" class="btn btn-primary">Website &nbsp;<span class="glyphicon glyphicon-new-window"></span></a>
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
		.carousel-caption{
			/* Fallback for web browsers that don't support RGBa */
			background-color: rgb(0, 0, 0);
			/* RGBa with 0.6 opacity */
			background-color: rgba(0, 0, 0, 0.6);
			/* For IE 5.5 - 7*/
			filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
			/* For IE 8*/
			-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
		}
	</style>
@stop

@section('js')
	@parent
	<script>
		$(function(){
			$('.work-summary').delegate('.caption-toggle','click',function(){
				$('.carousel-caption').toggle();
			});
		});
	</script>
@stop
