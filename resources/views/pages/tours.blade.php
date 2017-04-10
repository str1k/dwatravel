@extends('master')
@section('content')
<div class="container-fluid" style="background-color: #edeaea;">
	<div class="row">
		<div class="col-lg-1">
		</div>	
		<div class="col-lg-8">
			@foreach($programs as $program)
			<div class="row" style="border: 1px solid black; background-color:white; margin-bottom: 20px; ">
			 	<div class="col-lg-12">
					<div style="padding-left: 2%;
		padding-right: 5%;
		padding-top: 2%;padding-bottom: 2%;">
						<h3 style="background-color :#edeaea; color:red;">{{$program->name}}</h3>
						<a><img src="{{$program->tour_pic}}" alt=""></a>
						<?php echo $program->content ?>
						<div class="row">
							<div class="col-lg-6 text-right">
							<a href="" class="btn btn-success">จองทัวร์ที่นี่</a>
							</div>
							<div class="col-lg-6 text-left">
							<a href="/detail?query=&program_id={{$program->id}}" target="_blank" class="btn btn-primary">ดูลายระเอียดโปรแกรมทัวร์</a>
							</div>
						</div>
					</div>	
				
			 	</div>
			</div>
			@endforeach
		</div>
		<div class="col-lg-3">
			<div class="row">
				<div class="col-lg-12" >

			 	</div>
			</div>
		</div>
	</div>
</div>
@stop