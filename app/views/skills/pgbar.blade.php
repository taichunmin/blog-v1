<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">{{{ $skill['name'] }}}</h3>
  </div>
  <div class="panel-body">
    @foreach ( $skill['data'] as $sk )
		<div class="col-sm-3 pgbar-title" title="{{{ $sk[0] }}}">{{{ $sk[0] }}}</div>
		<div class="col-sm-9">
    		@if ( $sk[1] == 1 )
    		<div class="progress">
    		  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="4" style="width: 25%; min-width: 30px;">
    		    略懂
    		  </div>
    		</div>
    		@elseif ( $sk[1] == 2 )
			<div class="progress">
			  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="4" style="width: 50%">
			    中等
			  </div>
			</div>
			@elseif ( $sk[1] == 3 )
			<div class="progress">
			  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="4" style="width: 75%">
			    精通
			  </div>
			</div>
			@endif
		</div>
    @endforeach
  </div>
</div>
