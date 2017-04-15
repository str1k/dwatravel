@extends('master')
@section('content')
@include('layouts.partials._cover')
<!-- FLAGS -->

<!-- /FLAGS-->
<section id="flaging">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>โปรแกรมทัวร์เอเชีย</h1>
					</div>
				</div>
				@foreach($countries as $country)
				@if ($country->region === "ทัวร์เอเชีย")
				<div class="col-sm-4 col-md-3 col-xs-4">
					<div  class="flag-container flag-hov">
						<div class="flag-image col-lg-4 col-xs-12">
							<a href="/program?query=&country={{$country->country}}"><img src="{{$country->pic_url}}" alt=""></a>
						</div>
						<div class="flag-text2 ">
						<a  href="/program?query=&country={{$country->country}}">{{$country->country}}</a>
						</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>
		</div>
</section>

<section id="flaging2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>โปรแกรมทัวร์ยุโรป , อเมริกา , แอฟริกาใต้</h1>
					</div>
				</div>
				@foreach($countries as $country)
				@if ($country->region === "ทัวร์ยุโรป , อเมริกา , แอฟริกาใต้")
				<div class="col-sm-4 col-md-3 col-xs-4">
					<div  class="flag-container flag-hov">
						<div class="flag-image col-lg-4 col-xs-12">
							<a href="/program?query=&country={{$country->country}}"><img src="{{$country->pic_url}}" alt=""></a>
						</div>
						<div class="flag-text2">
						<a href="/program?query=&country={{$country->country}}">{{$country->country}}</a>
						</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>
		</div>
</section>



<!-- HOLIDAYS -->
	<section id="our-team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>แพ็คเกจทัวร์เที่ยวตามวันหยุด</h1>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" src="images/holidays/cur-songkran01.png" alt="">
							<div class="member-social">
							</div>
						</div>
						<div class="member-info">
							<h4>ทัวร์สงกราน</h4>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" src="images/holidays/cur-sakura-season03.png" alt="">
						</div>
						<div class="member-info">
							<h4>ทัวร์ชมดอกซากุระ</h4>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" src="images/holidays/cur-labour-day.png" alt="">
							
						</div>
						<div class="member-info">
							<h4>ทัวร์วันแรงงาน</h4>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="team-member">
						<div class="member-image">
							<img class="img-responsive" src="images/holidays/cur-summer-season.png" alt="">
						</div>
						<div class="member-info">
							<h4>ทัวร์ช่วงปิดเทอมฤดูร้อน</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /HOLIDAYS-->

	<!-- OUR WORKS -->
	<section id="our-works">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>แพ็คเกจทัวร์ล่าสุด</h1>
					</div>
				</div>

				<div class="portfolio-wrapper" >
					<div class="col-md-12">
						<ul class="filter">  			
							<li><a class="active" href="#" data-filter="*">ทั้งหมด</a></li>	
							<li><a href="#" data-filter=".เกาหลี">เกาหลี</a></li>
							<li><a href="#" data-filter=".ญี่ปุ่น">ญี่ปุ่น</a></li>
							<li><a href="#" data-filter=".ฮ่องกง">ฮ่องกง</a></li>
							<li><a href="#" data-filter=".จีน">จีน</a></li>
							<li><a href="#" data-filter=".ยุโรป">ยุโรป</a></li>
						</ul><!--/#portfolio-filter-->
					</div>
					<div class="portfolio-items" >
						@foreach($programs as $program)
						<div class="col-md-4 col-sm-6 work-grid {{$program->country}}" style="flex: 1;">
							<div class="portfolio-content">
								<div class="fixed-name">
								<a href="detail?query=&program_id={{$program->id}}" target="_blank"><h5>{{$program->name}}</h5></a>
								</div>
								<div class="fixed-pic">
								<a href="detail?query=&program_id={{$program->id}}" target="_blank"><img class="img-responsive" src="{{$program->tour_pic}}" alt=""></a>
								</div>
								<div class="portfolio-overlay">
									
									<a href="detail?query=&program_id={{$program->id}}" target="_blank"><h5>{{$program->name}}</h5></a>
									<a href="detail?query=&program_id={{$program->id}}" target="_blank"><h5>ราคาเริ่มต้น: {{$program->starting_price}} บาท</h5></a>
									<a href="detail?query=&program_id={{$program->id}}" target="_blank"><i class="fa fa-camera-retro"></i> รายละเอียด คลิก</a>
								</div>
								<a href="detail?query=&program_id={{$program->id}}" style="color: red;text-align: right;" target="_blank"><h3>เริ่มต้น {{$program->starting_price}} บาท</h3></a>

							</div>	
						</div>

						@endforeach
						
					</div>				
				</div>

			</div>
		</div>
	</section>
	<!-- /OUR WORKS -->

	<!-- DISCOUNT -->
	<!--
	<section id="about-us">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-5">
					<div class="about-us text-center">
						<h4>Morem ipsum dolor sit amet.</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum aliquid obcaecati deleniti minus quisquam quis magnam reprehenderit quaerat molestias rerum, excepturi autem fugiat corporis quidem a ipsum quos beatae! Ut!</p>
						<a href="" class="btn btn-send">View More</a>
					</div>
				</div>
				<div class="col-sm-7 our-office">
					<div id="office-carousel" class="carousel slide" data-ride="carousel">			
						<div class="carousel-inner">
							<div class="item active">
								<img src="images/office/04.jpg" alt="">
							</div>
							<div class="item">
								<img src="images/office/02.jpg" alt="">			
							</div>
							<div class="item">
								<img src="images/office/03.jpg" alt="">			
							</div>
							
							<a class="office-carousel-left" href="#office-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
							<a class="office-carousel-right" href="#office-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						</div>		
					</div>  
				</div>
			</div>
		</div>
	</section>
	-->
	<!-- /DISCOUNT -->
@stop