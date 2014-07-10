@extends('layout')

@section('content-fluid')
<?php
	$otherlinks = [
		['Twitter','https://twitter.com/taichunmin'],
		['Logdown','http://taichunmin.logdown.com/'],
		['Pixnet','http://taichunmin.pixnet.net/'],
		['Hackpad','https://hackpad.com/ep/profile/wk2EBYHTON5'],
		['Slideshare','http://www.slideshare.net/taichunmin'],
		['Aboutme','http://about.me/taichunmin'],
		['Gravatar','http://en.gravatar.com/taichunmin'],
		['Disqus','https://disqus.com/taichunmin/'],
		['Openfoundry','http://www.openfoundry.org/tw/community/userprofile/taichunmin'],
		['Wikipedia','http://zh.wikipedia.org/wiki/User:Taichunmin'],
		['Gitbook','https://www.gitbook.io/@taichunmin'],
		['Ruten','http://class.ruten.com.tw/user/index00.php?s=taichunmin'],
		['巴哈姆特','http://home.gamer.com.tw/homeindex.php?owner=taichunmin'],
		['SPOJ','http://www.spoj.com/users/taichunmin/'],
		['KKTIX','https://kktix.com/user/taichunmin'],
		['Murmur','http://murmur.tw/taichunmin'],
		['Plurk','http://www.plurk.com/taichunmin'],
		['Koding','https://koding.com/taichunmin'],
		['Website','http://taichunmin.idv.tw/'],
		['Zerojudge','http://zerojudge.tw/UserStatistic?account=taichunmin'],
		['UVa','http://uva.onlinejudge.org/index.php?option=onlinejudge&Itemid=20&page=show_authorstats&userid=4530'],
	];
	usort( $otherlinks, function($a,$b){
		return strcmp( strtolower($a[0].$a[1]), strtolower($b[0].$b[1]) );
	} );
?>
	<div class="row" id="about-me-row">
		<div class="jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 text-center">
						<div class="hidden-xs" style="height:20px">&nbsp;</div>
						<img src="images/gavatar_20131117.jpg" alt="和風信使" style="width:150px; height:150px" class="img-circle">
					</div>
					<div class="col-sm-9">
						<h1>和風信使</h1>
						<p>從高中因為社團接觸 C++ 的 ACM 演算法世界，然後大學開始自學 PHP 以及網頁相關的技術。主要是後端工程師，前端略有涉略，美工超級不擅長，除了程式之外，還喜歡看小說，偶爾陪朋友玩遊戲，換句話說，死宅男一枚。</p>
						<p>請大家多多指教。</p>
					</div>
					<div id="about-me-social" class="col-sm-9 col-sm-offset-3">
						<a class="btn btn-lg" href="http://fb.me/taichunmin" target="_blank"><span class="fa fa-facebook-square fa-2x fa-fw"></span></a>
						<a class="btn btn-lg" href="mailto:taichunmin@gmail.com" target="_blank"><span class="glyphicon glyphicon-envelope fa-2x fa-fw"></span></a>
						<a class="btn btn-lg" href="https://www.google.com/+%E6%88%B4%E5%9D%87%E6%B0%91" target="_blank"><span class="fa fa-google-plus fa-2x fa-fw"></span></a>
						<a class="btn btn-lg" href="https://github.com/taichunmin" target="_blank"><span class="fa fa-github fa-2x fa-fw"></span></a>
						<a class="btn btn-lg" href="http://bitbucket.taichunmin.idv.tw/" target="_blank"><span class="fa fa-bitbucket fa-2x fa-fw"></span></a>
						<a class="btn btn-lg" href="https://trello.com/taichunmin" target="_blank"><span class="fa fa-trello fa-2x fa-fw"></span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<h1>OTHER LINKS</h1>
			<div class="table-responsive" id="about-me-links">
				<table class="table table-striped table-hover">
@foreach ($otherlinks as $link)
					<tr>
						<th>{{{$link[0]}}}</th>
						<td><a href="{{{$link[1]}}}" target="_blank">{{{$link[1]}}}</a></td>
					</tr>
@endforeach
				</table>
			</div>
		</div>
	</div>
@stop

@section('css')
	@parent
	<style>
		#about-me-social{
			padding-right: 5px;
		}
		#about-me-social a.btn{
			margin-bottom: 10px;
			margin-right: 10px;
			padding: 14px 9px;
			border-radius: 50%;
			background-color: #ccc;
			border: 2px solid #ccc;
			color: #444;
			width: 68px;
			height: 68px;
		}
		#about-me-social a.btn:hover{
			border: 2px solid #000;
		}
		#about-me-row{
			margin-top: -9px;
		}
		#about-me-links th{
			text-align: right;
		}
	</style>
@stop
