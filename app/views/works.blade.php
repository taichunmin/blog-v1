@extends('layout')

@section('content-fluid')
	<div class="row">
		<div class="jumbotron">
			<div class="container">
				<h1><span class="fa fa-file-code-o fa-fw"></span> 作品集</h1>
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
		'website'   => ['http://nchuir.lib.nchu.edu.tw/', '網站'],
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
	[
		'title'     => '個人本體論新聞推薦',
		'image'     => '個人本體論新聞推薦0.png',
		'describe'  => '大學畢業專題，參加校外比賽榮獲銅牌',
		'img'       => [
			[
				'src'     => '個人本體論新聞推薦0.png',
				'caption' => '<p>系上畢業專題比賽時的展示頁面<br/>左邊的是專案的簡介，右側是使用 jQueryMobile 所寫的頁面。<br />(Android APP 是後來去參加校外比賽時才寫的)</p>',
			],
			[
				'src'     => '個人本體論新聞推薦1.png',
				'caption' => '<p>系上畢業專題比賽時所做的海報</p>',
			],
			[
				'src'     => '個人本體論新聞推薦2.png',
				'caption' => '<p>jQueryMobile 的登入及註冊頁面</p>',
			],
			[
				'src'     => '個人本體論新聞推薦3.png',
				'caption' => '<p>系上畢業專題比賽入圍決賽的名單</p>',
			],
			[
				'src'     => '個人本體論新聞推薦4.png',
				'caption' => '<p>使用 Git 進行程式碼的版本管理，此為 Github 程式的專案截圖。</p>',
			],
			[
				'src'     => '個人本體論新聞推薦5.png',
				'caption' => '<p>此為新聞推薦功能說明用頁面，詳細列出各項推薦參數及結果。</p>',
			],
			[
				'src'     => '個人本體論新聞推薦6.png',
				'caption' => '<p>此為瀏覽所有新聞的介面，採用清單呈現。</p>',
			],
			[
				'src'     => '個人本體論新聞推薦7.png',
				'caption' => '<p>資料庫內所抓取的新聞，此為 HeidiSQL 程式連至資料庫的截圖。</p>',
			],
			[
				'src'     => '個人本體論新聞推薦8.png',
				'caption' => '<p>此為後來參加校外比賽時所寫的 Android App，該校外比賽榮獲銅牌的佳績。</p>',
			],
			[
				'src'     => '個人本體論新聞推薦9.png',
				'caption' => '<p>由左到右依序為：<br>推薦的參數設定、將新聞斷詞分析後的結果、Android App 內新聞的瀏覽頁面</p>',
			],
			[
				'src'     => '個人本體論新聞推薦10.png',
				'caption' => '<p>校外比賽時，組員和學長的合照</p>',
			],
			[
				'src'     => '個人本體論新聞推薦11.png',
				'caption' => '<p>校外比賽的銅牌獎狀</p>',
			],
		],
	],
	[
		'title'     => '中興大學 DSpace 系統',
		'image'     => '中興大學DSpace系統0.png',
		'describe'  => '<a href="http://www.dspace.org/" target="_blank"><u>DSpace</u></a>系統建置及遷移 (Migrate)',
		'img'       => [
			[
				'src'     => '中興大學DSpace系統0.png',
				'caption' => '<p>中興大學 DSpace 系統首頁</p>',
			],
			[
				'src'     => '中興大學DSpace系統1.png',
				'caption' => '<p>繁體中文翻譯<a href="https://github.com/DSpace/dspace-api-lang/commit/ac0931c1567e541a831fd4ccf55f71ad4c13b7b1">https://github.com/DSpace/dspace-api-lang/commit/ac0931c1567e541a831fd4ccf55f71ad4c13b7b1</a></p>',
			],
			[
				'src'     => '中興大學DSpace系統2.png',
				'caption' => '<p>繁體中文翻譯<a href="https://github.com/DSpace/dspace-api-lang/commit/ac0931c1567e541a831fd4ccf55f71ad4c13b7b1">https://github.com/DSpace/dspace-api-lang/commit/ac0931c1567e541a831fd4ccf55f71ad4c13b7b1</a></p>',
			],
			[
				'src'     => '中興大學DSpace系統3.png',
				'caption' => '<p>遷移舊機典系統的工具，匯出成 DSpace 的 Simple Archive Format，以便直接匯入 DSpace 系統。</p>',
			],
			[
				'src'     => '中興大學DSpace系統4.png',
				'caption' => '<p>匯入文件時所寫的輔助小程式 (Bash)。</p>',
			],
			[
				'src'     => '中興大學DSpace系統5.png',
				'caption' => '<p>總共移轉的資料量</p>',
			],
		],
	],
	[
		'title'     => '世界大學網路排名',
		'image'     => '世界大學網路排名0.png',
		'describe'  => '<a href="http://www.webometrics.info/" target="_blank"><u>Ranking Web of Universities</u></a> 輔助工具',
		'img'       => [
			[
				'src'     => '世界大學網路排名0.png',
				'caption' => '<p>世界大學網路排名網站 [<a href="http://zh.wikipedia.org/wiki/%E4%B8%96%E7%95%8C%E5%A4%A7%E5%AD%B8%E7%B6%B2%E8%B7%AF%E6%8E%92%E5%90%8D" target="_blank">維基百科</a>]</p>',
			],
			[
				'src'     => '世界大學網路排名1.png',
				'caption' => '<p>每天定時抓取各大學機構典藏的數量資料。</p>',
			],
			[
				'src'     => '世界大學網路排名2.png',
				'caption' => '<p>可以用圖表顯示趨勢，追蹤其他學校的機構典藏狀況。</p>',
			],
			[
				'src'     => '世界大學網路排名3.png',
				'caption' => '<p>圖表套件的應用，將滑鼠移動到圖表上可查看詳細數值。</p>',
			],
			[
				'src'     => '世界大學網路排名4.png',
				'caption' => '<p>中興大學的排名</p>',
			],
		],
	],
	[
		'title'     => '中興大學興湖記事',
		'image'     => '中興大學興湖記事0.png',
		'describe'  => '網站從舊系統遷移至 Joomla 2.5',
		'website'   => ['http://archive.nchu.edu.tw/', '網站'],
		'img'       => [
			[
				'src'     => '中興大學興湖記事0.png',
				'caption' => '<p>舊系統當初是與廠商外包所做，因年久失修，所以決定直接以 Joomla 2.5 重新架設，並且人工遷移所有資料。本圖為新網站的最終成果。</p>',
			],
			[
				'src'     => '中興大學興湖記事1.png',
				'caption' => '<p>於 Joomla 內套用 Timeline JS 製作成大世紀。並稍微修改樣式</p>',
			],
			[
				'src'     => '中興大學興湖記事2.png',
				'caption' => '<p>於 Joomla 內套用 Timeline JS 製作成歷屆校長，並稍微修改樣式。</p>',
			],
			[
				'src'     => '中興大學興湖記事3.png',
				'caption' => '<p>於網站中嵌入校歌外掛及歌詞</p>',
			],
			[
				'src'     => '中興大學興湖記事4.png',
				'caption' => '<p>於網站中嵌入 Youtube 影片</p>',
			],
			[
				'src'     => '中興大學興湖記事5.png',
				'caption' => '<p>將舊有校史書籍放置為電子書可供欣賞。</p>',
			],
			[
				'src'     => '中興大學興湖記事6.png',
				'caption' => '<p>校史資料徵集網站製作，內含檔案上傳，最高可上傳高達 2GB 的檔案，簡易後台管理，同意書印製。</p>',
			],
		],
	],
	[
		'title'     => '中興大學圖書館',
		'image'     => '中興大學圖書館0.png',
		'describe'  => 'Joomla 1.5 升至 Joomla 3',
		'website'   => ['http://newwww.lib.nchu.edu.tw/', '網站'],
		'img'       => [
			[
				'src'     => '中興大學圖書館0.png',
				'caption' => '<p>特別套用最新的 RWD 框架 Bootstrap，此為電腦及平板橫放畫面。</p>',
			],
			[
				'src'     => '中興大學圖書館1.png',
				'caption' => '<p>此為平板直放畫面</p>',
			],
			[
				'src'     => '中興大學圖書館2.png',
				'caption' => '<p>此為 iPhone 畫面。</p>',
			],
			[
				'src'     => '中興大學圖書館3.png',
				'caption' => '<p>現有網站的截圖。新網站正在調整中，尚未正式上線。</p>',
			],
		],
	],
	[
		'title'     => '前瞻無線資訊網路實驗室',
		'image'     => '前瞻無線資訊網路實驗室0.png',
		'describe'  => '與綠能相關的網站 (完整度均不高)',
		'img'       => [
			[
				'src'     => '前瞻無線資訊網路實驗室0.png',
				'caption' => '<p>利用歷史用電資料，試算各種電費的價格。</p>',
			],
			[
				'src'     => '前瞻無線資訊網路實驗室1.png',
				'caption' => '<p>使用 Highcharts 可以合併線條說明文字，並且可在電腦和移動設備觀看。</p>',
			],
			[
				'src'     => '前瞻無線資訊網路實驗室2.png',
				'caption' => '<p>電費試算</p>',
			],
			[
				'src'     => '前瞻無線資訊網路實驗室3.png',
				'caption' => '<p>電量預測系統: 登入頁面。</p>',
			],
			[
				'src'     => '前瞻無線資訊網路實驗室4.png',
				'caption' => '<p>裝置清單，左邊顯示裝置是否成功連線。</p>',
			],
			[
				'src'     => '前瞻無線資訊網路實驗室5.png',
				'caption' => '<p>顯示用電量的歷史紀錄。</p>',
			],
			[
				'src'     => '前瞻無線資訊網路實驗室6.png',
				'caption' => '<p>使用 SMA 來預測接下來的用電量，以便關掉一些電器避免超出預算。</p>',
			],
		],
	],
];
?>
	<div class="row work-summary">
@foreach ($works as $work_id => $work)
@if( $work_id )
	@if ( $work_id % 6 == 0 )
		<div class="clearfix hidden-xs"></div>
	@elseif ( $work_id % 3 == 0 )
		<div class="clearfix hidden-xs hidden-sm"></div>
	@elseif ( $work_id % 2 == 0 )
		<div class="clearfix visible-sm-block"></div>
	@endif
@endif
		<div class="col-md-4 col-sm-6">
			<div class="panel panel-default">
			  <div class="panel-heading">
			  	<img src="{{ asset( $images_base.$work['image'] ) }}">
			  </div>
			  <div class="panel-body text-center">
			    <h4>{{{ $work['title'] }}}</h4>
			    <p>{{ $work['describe'] }}</p>
			    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#work-modal-{{ $work_id }}">More <span class="glyphicon glyphicon-chevron-right"></span></button>
@if( !empty( $work['website'] ) )
			    <a href="{{ $work['website'][0] }}" target="_blank" class="btn btn-primary">{{ $work['website'][1] }} &nbsp;<span class="glyphicon glyphicon-new-window"></span></a>
@endif
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
			        <button type="button" class="btn btn-info caption-toggle">開關圖片說明</button>
@if( !empty( $work['website'] ) )
			        <a href="{{ $work['website'][0] }}" target="_blank" class="btn btn-primary">{{ $work['website'][1] }} &nbsp;<span class="glyphicon glyphicon-new-window"></span></a>
@endif
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
		.work-summary .panel-body{
			background-color: #f5f5f5;
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
		.carousel-inner img{
			margin: 0 auto;
		}
		.carousel-indicators{
			white-space: nowrap;
		}
	</style>
@stop

@section('js')
	@parent
	<script>
		$(function(){
			$('.work-summary').delegate('.caption-toggle','click',function(){
				$('.carousel-caption,.carousel-indicators').toggle();
			});
		});
	</script>
@stop
