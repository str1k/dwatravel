
	<!-- SLIDER -->
	<section id="slider">
		<div id="home-carousel" class="carousel slide" data-ride="carousel">			
			<div class="carousel-inner">
			 	<?php $pos=1 ?>
				@foreach ($covers as $cover)
					@if ($pos === 1)
					<div class="item active" style="background-image: url({{$cover->pic_url}})" ></div>
					@else
					<div class="item" style="background-image: url({{$cover->pic_url}})" ></div>
					@endif
				<?php $pos++ ?>
				@endforeach
				<!--<div class="item" style="background-image: url(images/cover/cover_2.PNG)">				
				</div>
				<div class="item" style="background-image: url(images/cover/add-line1600.JPG)">				
				</div>-->
				<!--<div class="item" style="background-image: url(images/cover/cover_3.jpg)">
					<div class="carousel-caption container">
						<div class="row">
							<div class="col-sm-7">-->
								<!--<h1>You are entire </h1>-->
								<!--<h2>creative world</h2>-->
								<!--<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor. Aenean sollicitudin, lorem quis bibendum auctor.</p>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--	</div>-->					
				<!--</div>-->
				<a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
			</div>		
		</div> <!--/#home-carousel--> 
    </section>
	<!-- /SLIDER -->