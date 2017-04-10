@extends('master')
@section('content')
	@foreach($programs as $program)
		@if ($program->pdf_mode === 1)
		<div style="height: 500px">
			<object data="{{$program->pdf}}" type="application/pdf" width="100%" height="100%">
			alt : <a href="{{$program->pdf}}">Download</a>
			</object>
		</div> 
		@else
    		<?php echo $program->description ?>
		@endif
	@endforeach
@stop