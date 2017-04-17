@extends('master')
@section('content')
@foreach($aboutUs as $aboutUsF)
    <?php $tmp_aboutUs = $aboutUsF ?>
@endforeach
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div class="row">
				<div class="col-lg-12">
					<h1>สาส์นจากประธานกรรมการบริษัท</h1>
				</div>
			<div class="col-lg-3">
				<img class="img-responsive" src="{{$tmp_aboutUs->ceo_pic}}" alt="">
				<br></br>
				<p style="text-align: center;">{{$tmp_aboutUs->ceo_name}}</p>
				<p style="text-align: center;">CEO</p>
			</div>
			<div class="col-lg-9">
			<?php echo $tmp_aboutUs->content ?>
			</div>
		</div>
	</div>
	<div class="col-lg-1"></div>
	</div>
</div>
@stop