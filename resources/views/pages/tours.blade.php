@extends('master')
@section('content')
@include('layouts.partials._cover')
<div class="container-fluid" style="background-color: #EEEEEE;">
	<div class="row">
		<div class="col-xs-12 col-xs-12" style="background-color: #0896D6; ">
			<div class="row">
				<div class="col-lg-1 col-xs-1">
					
				</div>
				<div style="padding-top: 15px;" class="col-lg-1 col-xs-1">
					<img class="img-responsive" src="{{$content_query->pic_url}}">	
				</div>
				<div class="col-lg-4 col-xs-4">
					<h1 style="color: #FFFFFF; padding-bottom: 10px;">
						@if ($query_by === 1 )
							{{$content_query->country}}
						@else
							{{$content_query->region}}
						@endif
					</h1>
				</div>
				<div class="col-lg-2 col-xs-2">
					<h3 style="color: #FFFFFF; padding-top: 10px;">พบทั้งหมด</h3>
				</div>
				<div class="col-lg-1 col-xs-1">
					<h2 style="color: #FFFFFF; padding-top: 5px;">{{$found_count}}</h2>
				</div>
				<div class="col-lg-3 col-xs-3">
					<h3 style="color: #FFFFFF; padding-top: 10px;">รายการ</h3>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-xs-12" style="background: white; padding-top: 20px; padding-bottom: 10px;">
			<div class="row">
				<div class="col-lg-1 col-xs-1">
					
				</div>
				<div class="col-lg-10 col-xs-10">
					<?php echo $content_query->content;?>
				</div>
				<div class="col-lg-1 col-xs-1">
					
				</div>
			</div>
			
		</div>
		<div class="col-lg-1 col-xs-1">
		</div>	
		<div class="col-lg-10 col-xs-10">
			<div class="row" style="margin-top: 20px; margin-bottom: 20px; background: white;">
			@foreach($locates as $locate)
				
					<div class="col-lg-2 col-xs-4" style="margin-bottom: 10px;" >
						<div class="flag-image2">
						<a href="/program?query=&locate_query={{$locate->locate}}" ><img class="img-responsive" src="{{$locate->pic_url}}"></a>
						</div>
					</div>
				
			@endforeach
			</div>
			@foreach($programs as $program)
			<div class="row" style="border: 1px solid #DDDDDD; background-color:white; margin-bottom: 20px; ">
			 	<div class="col-lg-3 col-xs-12">
			 		<img class="img-responsive" src="{{$program->tour_pic}}" alt="" style="margin-left: -15px; ">
			 	</div>
			 	<div class="col-lg-9 col-xs-12">
					<div class="row" style="">
						
						<div class="row">
							<div class="col-lg-12 col-xs-12">
								<div class="col-lg-9 col-xs-12">
									<h3 style="color: #0896D6;">{{$program->name}}</h3>
								</div>
								<div class="col-lg-3 col-xs-12" align="right" style="">
									<a href="detail?query=&program_id={{$program->id}}" style="color: red;text-align: right;" ><h3>฿ {{number_format($program->starting_price)}}</h3></a>
								</div>	
							</div>
							<div class="col-lg-12 col-xs-12 fix-tour-h" style="padding: 40px;">
								<div class="row">
									<div class="col-lg-3 col-xs-3 fix-tour-h" style="border-top: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD;  padding: 8px; ">
										<img class="img-responsive" src="/images/home/Airline-1508270729400001.jpg" alt="" style="max-height: 300px;">
									</div>
									<div class="col-lg-3 col-xs-5 fix-tour-h" style="padding: 0px; border: 1px solid #DDDDDD;  ">
										<div class="col-lg-12 col-xs-12 text-intour"  style="">
										<span class="glyphicon glyphicon-time" style="color: #FF983E;"> </span>
										<p style="color: #0896D6;"> ระยะเวลา</p>	
										</div>
										<div class="col-lg-12 col-xs-12" style="display:flex; margin-top: -5px; margin-left: 10px;">
										<p style="color: #929292;">{{$program->day_count}} วัน {{$program->night_count}} คืน</p>	
										</div>
										
										
								
									</div>
									<div class="col-lg-6 col-xs-4 fix-tour-h" style="padding: 0px; border-top: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD;  ">
										<div class="col-lg-12 col-xs-12 text-intour"  style="">
										<span class="glyphicon glyphicon-map-marker" style="color: #FF983E;"> </span>
										<p style="color: #0896D6;"> ประเทศ</p>	
										</div>
										<div class="col-lg-12 col-xs-12" style="display:flex; margin-top: -5px; margin-left: 10px;">
										<p style="color: #929292;">{{$program->country}}</p>	
										</div>
								
									</div>	
								</div>
								
							</div>
						</div>
						<br></br>
						<div class="col-lg-12 col-xs-12" style="display:flex; margin-top: -5px; margin-left: 10px;">
							<p style="color: #AFCB67;">รหัสทัวร์ : {{$program->tour_id}}</p>	
						</div>
						
						<?php echo $program->content ?>
						<br></br>
						<div class="row">
							<div class="col-lg-3 col-xs-12" align="center" style="margin-bottom: 10px;">
							<a href="/detail?query=&program_id={{$program->id}}#description"  class="btn btn-primary">ดูรายละเอียดโปรแกรมทัวร์</a>
							</div>
							<div class="col-lg-3 col-xs-12" align="center" style="margin-bottom: 10px;">
							<a href="detail?query=&program_id={{$program->id}}#book" class="btn btn-success">จองทัวร์คลิก</a>
							</div>
							
						</div>
					</div>	
			 	</div>

			</div>
			@endforeach
		</div>
		<div class="col-lg-1 col-xs-1">
			<div class="row">
				<div class="col-lg-12" >

			 	</div>
			</div>
		</div>
	</div>
</div>
@stop