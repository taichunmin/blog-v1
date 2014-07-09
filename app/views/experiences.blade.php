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
        font:               'Lekton-Molengo',             //OPTIONAL FONT
        debug:              false,                           //OPTIONAL DEBUG TO CONSOLE
        lang:               'zh-tw',                           //OPTIONAL LANGUAGE
        maptype:            'ROADMAP',                   //OPTIONAL MAP STYLE
        // css:                'path_to_css/timeline.css',     //OPTIONAL PATH TO CSS
        // js:                 'path_to_js/timeline-min.js'    //OPTIONAL PATH TO JS
    }
</script>
<script type="text/javascript" src="//cdn.knightlab.com/libs/timeline/latest/js/storyjs-embed.js"></script>
@stop
