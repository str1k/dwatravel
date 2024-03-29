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
					padding-top: 2%;padding-bottom: 2%; ">
						<h3 style="background-color :#edeaea; color:red;">{{$program->name}}</h3>
						<div class="row">
							<div class="col-lg-10">
								<a><img class="img-responsive" src="{{$program->tour_pic}}" alt=""></a>
							</div>
						</div>
						<br></br>
						
						<?php echo $program->content ?>
						{!! Form::open(array('url'=>'/detail','method'=>'POST', 'files'=>true)) !!}
						<br></br>
						<h2 style="color:red; text-align: center;">ราคาเริ่มต้นที่ {{$program->starting_price}} บาท</h2>
                        <section id="description">
                        	<br></br>
							<h2 >รายละเอียดเพิ่มเติม</h2>
						<iframe src="http://docs.google.com/gview?url=http://www.dwatravels.com/{{$program->pdf}}&embedded=true" style="width:100%; height:800px;" frameborder="0"></iframe>
						</section>
						<div class="row">
							<div class="col-lg-12" align="center">
								<div class="col-lg-12 col-xs-12" align="center" style="margin-bottom: 10px;">
									<a href="booking?query=&program_id={{$program->id}}#book" class="btn btn-success">จองทัวร์คลิก</a>
								</div>
							</div>
							
						</div>
						
					</div>
				</div> 
			@else
				<div class="row" style="border: 1px solid black; background-color:white; margin-bottom: 20px;">
    				<div class="col-lg-12">
						<div style="padding-left: 2%;
						padding-right: 5%;
						padding-top: 2%;padding-bottom: 2%;">
							<h3 style="background-color :#edeaea; color:red;">{{$program->name}}</h3>
							<div class="row">
							<div class="col-lg-10">
								<a><img class="img-responsive" src="{{$program->tour_pic}}" alt=""></a>
							</div>
						</div>
							<br></br>
							<?php echo $program->content ?>
							<br></br>
								<h2 style="color:red">ราคาเริ่มต้นที่ {{$program->starting_price}}</h2>
							
                        	<section id="description">
                        	<br></br>
							<h2 >รายละเอียดเพิ่มเติม</h2>
    						<?php echo $program->description ?>
    						</section>
    						<div class="row">
							<div class="col-lg-12" align="center">
								<!--<input type="button" onClick="document.getElementById('book').scrollIntoView();" class="btn btn-success" value="คลิกที่นี่เพื่อจองทัวร์" /> -->
								<div class="col-lg-12 col-xs-12" align="center" style="margin-bottom: 10px;">
									<a href="booking?query=&program_id={{$program->id}}#book" class="btn btn-success">จองทัวร์คลิก</a>
								</div>
							</div>
							
						</div>
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
						<p><a href="tel:0908077720"><span class="glyphicon glyphicon-phone" style="color: #03c129;"">
						</span>090-807-7720</a></p>
						<p><a href="tel:0908077730"><span class="glyphicon glyphicon-phone" style="color: #03c129;">
						</span>090-807-7730</a></p>
						<p><a href="tel:021071333" style="color: #f9b804; font-size:25px;"><span class="glyphicon glyphicon-earphone" style="color: #03c129; font-size:25px;"></span> 02-1071333 </a></p>
						<p><a target="_blank" href="https://line.me/ti/p/@dwatravel.com" style="font-size:20px"> LINE: @dwatravel.com </a></p>
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
</div>
@stop