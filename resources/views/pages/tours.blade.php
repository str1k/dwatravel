@extends('master')
@section('content')
<div class="container-fluid" style="background-color: #edeaea;">
	<div class="row">
		<div class="col-lg-1 col-xs-1">
		</div>	
		<div class="col-lg-8 col-xs-8">
			<div class="row" style="margin-top: 20px; margin-bottom: 20px; background: white;">
			@foreach($locates as $locate)
				
					<div class="col-lg-2 col-xs-3" style="margin-bottom: 10px;" >
						<div class="flag-image2">
						<a href="/program?query=&locate_query={{$locate->locate}}" ><img class="img-responsive" src="{{$locate->pic_url}}"></a>
						</div>
					</div>
				
			@endforeach
			</div>
			@foreach($programs as $program)
			<div class="row" style="border: 1px solid black; background-color:white; margin-bottom: 20px; ">
			 	<div class="col-lg-12">
					<div style="padding-left: 2%;
		padding-right: 5%;
		padding-top: 2%;padding-bottom: 2%;">
						<h3 style="background-color :#edeaea; color:red;">{{$program->name}}</h3>
						<div class="row">
							<div class="col-lg-10 col-xs-10">
								<a><img class="img-responsive" src="{{$program->tour_pic}}" alt=""></a>
							</div>
						</div>
						<br></br>
						<?php echo $program->content ?>
						<br></br>
						<div class="row">
							<div class="col-lg-3 col-xs-3">
							<a href="detail?query=&program_id={{$program->id}}#book" target="_blank" class="btn btn-success">จองทัวร์คลิก</a>
							</div>
							<div class="col-lg-3 col-xs-3">
							<a href="/detail?query=&program_id={{$program->id}}#description" target="_blank" class="btn btn-primary">ดูรายละเอียดโปรแกรมทัวร์</a>
							</div>
						</div>
					</div>	
				
			 	</div>
			</div>
			@endforeach
		</div>
		<div class="col-lg-3 col-xs-3">
			<div class="row">
				<div class="col-lg-12" >

			 	</div>
			</div>
		</div>
	</div>
</div>
@stop