@extends('layout')

@section('content-fluid')

<div id="timeline-experiences"></div>

@stop

@section('css')
	@parent

	<style>
		html, body, .container-fluid{
		    height: 99%;
		    min-height:99%;
		}
	</style>

@stop

@section('js')
	@parent
<script type="text/javascript">
    var timeline_config = {
        width:              '100%',
        height:             '100%',
        source:             'https://docs.google.com/spreadsheet/pub?key=0AjnpyNtDfRWndHZFLVBSdUhpZmthOV9mdWU1d2FDQ0E&output=html',
        embed_id:           'timeline-experiences',               //OPTIONAL USE A DIFFERENT DIV ID FOR EMBED
        start_at_end:       true,                          //OPTIONAL START AT LATEST DATE
        // start_at_slide:     '4',                            //OPTIONAL START AT SPECIFIC SLIDE
        // start_zoom_adjust:  '3',                            //OPTIONAL TWEAK THE DEFAULT ZOOM LEVEL
        hash_bookmark:      true,                           //OPTIONAL LOCATION BAR HASHES
        // font:               'Lekton-Molengo',             //OPTIONAL FONT
        debug:              true,                           //OPTIONAL DEBUG TO CONSOLE
        lang:               'zh-tw',                           //OPTIONAL LANGUAGE
        maptype:            'ROADMAP',                   //OPTIONAL MAP STYLE
        // css:                'path_to_css/timeline.css',     //OPTIONAL PATH TO CSS
        // js:                 'path_to_js/timeline-min.js'    //OPTIONAL PATH TO JS
    }
</script>
<script type="text/javascript" src="//cdn.knightlab.com/libs/timeline/latest/js/storyjs-embed.js"></script>
<style>
	/*
	    TimelineJS - ver. 2.33.1 - 2014-06-24
	    Copyright (c) 2012-2013 Northwestern University
	    a project of the Northwestern University Knight Lab, originally created by Zach Wise
	    https://github.com/NUKnightLab/TimelineJS
	    This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0.
	    If a copy of the MPL was not distributed with this file, You can obtain one at http://mozilla.org/MPL/2.0/.
	*/
	.vco-storyjs{font-family:\5FAE\8EDF\6B63\9ED1\9AD4,Microsoft JhengHei,MingLiU,sans-serif;}
	.vco-storyjs .twitter,.vco-storyjs .vcard,.vco-storyjs .messege,.vco-storyjs .credit,.vco-storyjs .caption,.vco-storyjs .zoom-in,.vco-storyjs .zoom-out,.vco-storyjs .back-home,.vco-storyjs .time-interval div,.vco-storyjs .time-interval-major div,.vco-storyjs .nav-container{font-family:\5FAE\8EDF\6B63\9ED1\9AD4,Microsoft JhengHei,MingLiU,sans-serif !important}
	.vco-storyjs .vco-feature h1.date,.vco-storyjs .vco-feature h2.date,.vco-storyjs .vco-feature h3.date,.vco-storyjs .vco-feature h4.date,.vco-storyjs .vco-feature h5.date,.vco-storyjs .vco-feature h6.date{font-family:\5FAE\8EDF\6B63\9ED1\9AD4,Microsoft JhengHei,MingLiU,sans-serif !important}
	.vco-storyjs .timenav h1,.vco-storyjs .flag-content h1,.vco-storyjs .era h1,.vco-storyjs .timenav h2,.vco-storyjs .flag-content h2,.vco-storyjs .era h2,.vco-storyjs .timenav h3,.vco-storyjs .flag-content h3,.vco-storyjs .era h3,.vco-storyjs .timenav h4,.vco-storyjs .flag-content h4,.vco-storyjs .era h4,.vco-storyjs .timenav h5,.vco-storyjs .flag-content h5,.vco-storyjs .era h5,.vco-storyjs .timenav h6,.vco-storyjs .flag-content h6,.vco-storyjs .era h6{font-family:\5FAE\8EDF\6B63\9ED1\9AD4,Microsoft JhengHei,MingLiU,sans-serif !important}
	.vco-storyjs p,.vco-storyjs blockquote,.vco-storyjs blockquote p,.vco-storyjs .twitter blockquote p{font-family:\5FAE\8EDF\6B63\9ED1\9AD4,Microsoft JhengHei,MingLiU,sans-serif !important}
	.vco-storyjs .vco-feature h1,.vco-storyjs .vco-feature h2,.vco-storyjs .vco-feature h3,.vco-storyjs .vco-feature h4,.vco-storyjs .vco-feature h5,.vco-storyjs .vco-feature h6{font-family:\5FAE\8EDF\6B63\9ED1\9AD4,Microsoft JhengHei,MingLiU,sans-serif}
	.timeline-tooltip{font-family:\5FAE\8EDF\6B63\9ED1\9AD4,Microsoft JhengHei,MingLiU,sans-serif}
</style>
@stop
