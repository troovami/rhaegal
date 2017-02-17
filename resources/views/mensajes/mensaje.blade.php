@if (Session::has('exito'))
<div class="alert alert-success margin-bottom-30"><!-- SUCCESS -->
	<button type="button" class="close" data-dismiss="alert">
		<span aria-hidden="true" style="color:black">×</span>
		<span class="sr-only">Close</span>
	</button>
	{{ Session::get('exito') }}
</div>
@elseif  (Session::has('error'))
<div class="alert alert-danger margin-bottom-30"><!-- SUCCESS -->
	<button type="button" class="close" data-dismiss="alert">
		<span aria-hidden="true" style="color:black">×</span>
		<span class="sr-only">Close</span>
	</button>
	{{ Session::get('error') }}
</div>
@endif