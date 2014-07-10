@extends('layout')

@section('content')

<?php
	$openSources = [
		[
			'name'     => 'Laravel',
			'HomePage' => 'http://laravel.com/',
			'Licence'  => 'http://opensource.org/licenses/MIT',
			'describe' => 'Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.',
		],
		[
			'name'     => 'Bootstrap',
			'HomePage' => 'http://getbootstrap.com/',
			'Licence'  => 'https://github.com/twbs/bootstrap/blob/master/LICENSE',
			'describe' => 'Originally created by a designer and a developer at Twitter, Bootstrap has become one of the most popular front-end frameworks and open source projects in the world.',
		],
		[
			'name'     => 'Font Awesome',
			'HomePage' => 'http://fontawesome.io',
			'Licence'  => 'https://github.com/FortAwesome/Font-Awesome#license',
			'describe' => 'Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop shadow, and anything that can be done with the power of CSS.',
		],
		[
			'name'     => 'Han',
			'HomePage' => 'http://css.hanzi.co/',
			'Licence'  => 'http://css.hanzi.co/license.md',
			'describe' => '「漢字標準格式」是基於樣式「重設」及「標準化」二個概念寫成的CSS3排版框架。由於現今的瀏覽器預設樣式皆以西文顯示為主，未能周詳地考慮到其與漢字排版間的差異，嚴重影響美觀度，造成網頁設計師的誤用，更使得內容編者無從依照語意正確使用字級元素。',
		],
		[
			'name'     => 'Github',
			'HomePage' => 'https://github.com/',
			'Licence'  => 'https://help.github.com/articles/github-terms-of-service',
			'describe' => 'GitHub is the best place to share code with friends, co-workers, classmates, and complete strangers. Over six million people use GitHub to build amazing things together.',
		],
		[
			'name'     => 'CentOS',
			'HomePage' => 'https://www.centos.org/',
			'Licence'  => 'https://www.centos.org/legal/',
			'describe' => 'The CentOS Linux distribution is a stable, predictable, manageable and reproduceable platform derived from the sources of Red Hat Enterprise Linux (RHEL).',
		],
		[
			'name'     => 'Nginx',
			'HomePage' => 'http://nginx.org/',
			'Licence'  => 'http://nginx.org/LICENSE',
			'describe' => 'nginx is an HTTP and reverse proxy server, as well as a mail proxy server, written by <a href="http://sysoev.ru/en/">Igor Sysoev</a>. For a long time, it has been running on many heavily loaded Russian sites including <a href="http://www.yandex.ru">Yandex</a>, <a href="http://www.mail.ru">Mail.Ru</a>, <a href="http://vkontakte.ru">VKontakte</a>, and <a href="http://www.rambler.ru">Rambler</a>. According to Netcraft nginx served or proxied <a href="http://news.netcraft.com/archives/2014/06/06/june-2014-web-server-survey.html">19.21% busiest sites in June 2014</a>. Here are some of the success stories: <a href="https://signup.netflix.com/openconnect/software">Netflix</a>, <a href="http://nginx.com/cs/nginx-automattic.html">Wordpress.com</a>, <a href="http://blog.fastmail.fm/2007/01/04/webimappop-frontend-proxies-changed-to-nginx/">FastMail.FM</a>.',
		],
	];
?>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">開放原始碼授權</h3>
  </div>
  <div class="panel-body">
    在這裡列出本站所使用到的開放原始碼資源。
  </div>
  <ul class="list-group" id="openSources">
@foreach ( $openSources as $openSource )
  	<li class="list-group-item">
  		<h4 class="list-group-item-heading">
  			{{{$openSource['name']}}}
  			<div class="btn-group pull-right hidden-xs"><a href="{{{$openSource['HomePage']}}}" class="btn btn-success btn-xs" target="_blank"><span class="glyphicon glyphicon-home"></span> HomePage</a><a href="{{{$openSource['Licence']}}}" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-copyright-mark"></span> ShowLicence</a></div>
  		</h4>
  		<div class="btn-group visible-xs-inline-block" style="margin-bottom:5px"><a href="{{{$openSource['HomePage']}}}" class="btn btn-success btn-xs" target="_blank"><span class="glyphicon glyphicon-home"></span> HomePage</a><a href="{{{$openSource['Licence']}}}" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-copyright-mark"></span> ShowLicence</a></div>
  		<p class="list-group-item-text">{{$openSource['describe']}} </p>
  	</li>
@endforeach
  </ul>
</div>

@stop

@section('css')
@parent
<style>
	#openSources{
		padding-left: 0; // Overwrite han.css
	}
</style>
@stop
