@extends('master')
@section('content')

<div class="container-fluid" style="background-color: #edeaea;">
	<div class="row">
		<div class="col-lg-1">
		</div>	
		<div class="col-lg-8">
	@foreach($programs as $program)
		@if ($program->pdf_mode === 1)
		<div class="row" style="border: 1px solid black; background-color:white; margin-bottom: 20px; ">
			<div style="padding-left: 2%;
		padding-right: 5%;
		padding-top: 2%;padding-bottom: 2%; height: 800px;">
			<h3 style="background-color :#edeaea; color:red;">{{$program->name}}</h3>
			<object data="{{$program->pdf}}" type="application/pdf" width="100%" height="80%">
			alt : <a href="{{$program->pdf}}">Download</a>
			</object>
			</div>
		</div> 
		@else
			<div class="row" style="border: 1px solid black; background-color:white; margin-bottom: 20px;">
    			<div class="col-lg-12">
					<div style="padding-left: 2%;
		padding-right: 5%;
		padding-top: 2%;padding-bottom: 2%;">
				<h3 style="background-color :#edeaea; color:red;">{{$program->name}}</h3>
    			<?php echo $program->description ?>
    			</div>
    		</div>
    	</div>
		@endif
	@endforeach
		
	</div>
	<div class="col-lg-3">
		<div class="row" >
			<div class="col-lg-9">
				<div class="row text-center" style="background-color:white; margin-bottom: 20px; margin-top: 10px; margin-left: 10px;" >
				<h4> ต้องการความช่วยเหลือ?</h4>
				<h5 class="text-left" style="padding-left: 10px; color:#a09b92;">DWATRAVEL.COM CO.,LTD.
เวลาทำการ 
วันจันทร์-วันเสาร์ 10.00 - 17.30 น. </h5>
				<h5 class="text-left" style="padding-left: 10px;">Hotline:</h5>
				<p><a href="tel:090-807-7720"><span class="glyphicon glyphicon-phone" style="color: #03c129;"">
				</span>090-807-7720</a></p>
				
				<p><a href="tel:090-807-7730"><span class="glyphicon glyphicon-phone" style="color: #03c129;">
				</span>090-807-7730</a></p>
				<p><a href="tel:02-1071333" style="color: #f9b804; font-size:25px;"><span class="glyphicon glyphicon-earphone" style="color: #03c129; font-size:25px;"></span> 02-1071333 </a><p>
				<p><a target="_blank" href="https://line.me/ti/p/~0908077720" style="font-size:20px"> LINE: 0908077720 </a></p>
				</div>
				<div class="row text-center" style="background-color:white; margin-left: 10px;" >
				<h4> แพคเกจทัวร์ล่าสุด</h4>

				</div>
			</div>
			<div class="col-lg-3">
			</div>
		</div>
	</div>

</div>

@stop