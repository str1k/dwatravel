<!-- HEADER -->
	
	<section id="header">
		<nav class="navbar st-navbar navbar-fixed-top" >
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">		
						<span class="sr-only">Toggle navigation</span>
						<a style="font-size:20px; font-weight: 800;">เมนู</a>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
					</button>
					<a class="st-item logo" href="/"><img src="images/home/LOGO-DwaTravel.jpg" alt=""></a>
				</div>

				<div class="collapse navbar-collapse" id="st-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
				    	<li><a href="/">หน้าหลัก</a></li>
				    	<li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ทัวร์ต่างประเทศ<b class="caret"></b></a>
	            <ul class="dropdown-menu multi-column columns-6 scrollable-menu">
	            	
		            <div class="row" align="center">

			            <div class="col-lg-2 col-xs-6">
				            <ul class="multi-column-dropdown ">
				            	@foreach($countries as $country)
					            @if ($country->country === "ญี่ปุ่น")
					            <li ">
					            		
					            			<a href="/program?query=&country={{$country->country}}" style="overflow: hidden;
    										white-space: nowrap;" >
					            				<img style="width: 40px;" src="{{$country->pic_url}}" alt=""> ทัวร์{{$country->country}}
					            			</a>
					            							            	
					            </li>
					            @endif
					        @endforeach
					        @foreach($locate_bars as $locate_bar)
					        	@if ($locate_bar->country === "ญี่ปุ่น")
					            <li ">
					            		
					            			<a href="/program?query=&locate_query={{$locate_bar->locate}}" style="overflow: hidden;
    										white-space: nowrap;" >
					            				<img style="width: 40px;" src="{{$locate_bar->pic_url}}" alt=""> {{$locate_bar->locate}}
					            			</a>
					            		
					            </li>
					            @endif
					        @endforeach
					            <li class="divider" "></li>
				            </ul>
			            </div>
			           
			            <div class="col-lg-2 col-xs-6">
				            <ul class="multi-column-dropdown " >	@foreach($countries as $country)
					            @if ($country->country === "เกาหลี")
					            <li ">
					            		
					            			<a href="/program?query=&country={{$country->country}}" style="overflow: hidden;
    										white-space: nowrap;" >
					            				<img style="width: 40px;" src="{{$country->pic_url}}" alt=""> ทัวร์{{$country->country}}
					            			</a>
					            		
					            </li>
					            @endif
					        @endforeach
					        @foreach($locate_bars as $locate_bar)
					        	@if ($locate_bar->country === "เกาหลี")
					            <li ">
					            			<a href="/program?query=&locate_query={{$locate_bar->locate}}" style="overflow: hidden;
    										white-space: nowrap;" >
					            				<img style="width: 40px;" src="{{$locate_bar->pic_url}}" alt=""> {{$locate_bar->locate}}
					            			</a>
					            </li>
					            @endif
					        @endforeach
					            <li class="divider" "></li>
				            </ul>
			            </div>
		            	
		            	<div class="col-lg-2 col-xs-6">
				            <ul class="multi-column-dropdown " >	@foreach($countries as $country)
					            @if ($country->country === "จีน")
					            <li ">
					            		
					            			<a href="/program?query=&country={{$country->country}}" style="overflow: hidden;
    										white-space: nowrap;" >
					            				<img style="width: 40px;" src="{{$country->pic_url}}" alt=""> ทัวร์{{$country->country}}
					            			</a>
					            		
					            </li>
					            @endif
					        @endforeach
					        @foreach($locate_bars as $locate_bar)
					        	@if ($locate_bar->country === "จีน")
					            <li ">
					            			<a href="/program?query=&locate_query={{$locate_bar->locate}}" style="overflow: hidden;
    										white-space: nowrap;" >
					            				<img style="width: 40px;" src="{{$locate_bar->pic_url}}" alt=""> {{$locate_bar->locate}}
					            			</a>
					            </li>
					            @endif
					        @endforeach
					            <li class="divider" "></li>
				            </ul>
			            </div>
			            <div class="col-lg-2 col-xs-6">
				            <ul class="multi-column-dropdown " >	
					            <li ">
					            			<a href="" style="overflow: hidden;
    										white-space: nowrap;" >
					            				 เที่ยวโซนยุโรป
					            			</a>	
					            </li>
					        @foreach($countries as $country)
					        	@if ($country->region === "ยุโรป")
					            <li ">
					            			<a href="/program?query=&country={{$country->country}}" style="overflow: hidden;
    										white-space: nowrap;" >
					            				<img style="width: 40px;" src="{{$country->pic_url}}" alt=""> ทัวร์{{$country->country}}
					            			</a>
					            </li>
					            @endif
					        @endforeach
					            <li class="divider" "></li>
				            </ul>
			            </div>
			            <div class="col-lg-2 col-xs-6">
				            <ul class="multi-column-dropdown " >	
					            <li ">
					            			<a href="" style="overflow: hidden;
    										white-space: nowrap;" >
					            				เที่ยวโซนอเมริกา
					            			</a>	
					            </li>
					        @foreach($countries as $country)
					        	@if ($country->region === "อเมริกา")
					            <li ">
					            			<a href="/program?query=&country={{$country->country}}" style="overflow: hidden;
    										white-space: nowrap;" >
					            				<img style="width: 40px;" src="{{$country->pic_url}}" alt=""> ทัวร์{{$country->country}}
					            			</a>
					            </li>
					            @endif
					        @endforeach
					            <li class="divider" "></li>
					            <li ">
					            			<a href="" style="overflow: hidden;
    										white-space: nowrap;" >
					            				เที่ยวโซนแอฟริกา
					            			</a>	
					            </li>
					            @foreach($countries as $country)
					        	@if ($country->region === "แอฟริกา")
					            <li ">
					            			<a href="/program?query=&country={{$country->country}}" style="overflow: hidden;
    										white-space: nowrap;" >
					            				<img style="width: 40px;" src="{{$country->pic_url}}" alt=""> ทัวร์{{$country->country}}
					            			</a>
					            </li>
					            @endif
					        @endforeach
					        	<li class="divider" "></li>
					            <li ">
					            			<a href="" style="overflow: hidden;
    										white-space: nowrap;" >
					            				เที่ยวโซนออสเตรเลีย
					            			</a>	
					            </li>
					        @foreach($countries as $country)
					        	@if ($country->region === "ออสเตรเลีย")
					            <li ">
					            			<a href="/program?query=&country={{$country->country}}" style="overflow: hidden;
    										white-space: nowrap;" >
					            				<img style="width: 40px;" src="{{$country->pic_url}}" alt=""> ทัวร์{{$country->country}}
					            			</a>
					            </li>
					            @endif
					        @endforeach
					        	<li class="divider" "></li>
				            </ul>
			            </div>
			            <div class="col-lg-2 col-xs-6">
				            <ul class="multi-column-dropdown " >	
					            <li ">
					            			<a href="" style="overflow: hidden;
    										white-space: nowrap;" >
					            				 เที่ยวโซนเอเชีย
					            			</a>	
					            </li>
					        @foreach($countries as $country)
					        	@if ($country->region === "เอเชีย")
					            <li ">
					            			<a href="/program?query=&country={{$country->country}}" style="overflow: hidden;
    										white-space: nowrap;" >
					            				<img style="width: 40px;" src="{{$country->pic_url}}" alt=""> ทัวร์{{$country->country}}
					            			</a>
					            </li>
					            @endif
					        @endforeach
					            <li class="divider" "></li>
				            </ul>
			            </div>
	            </ul>
	        </li>
				    	<li><a href="#our-works">ล่องเรือสำราญ</a></li>
				    	<li><a href="#pricing">จองทัวร์และชำระเงิน</a></li>
				    	<li><a href="/about-us">เกี่ยวกับเรา</a></li>
				    	<li><a href="#contact">ติดต่อเรา</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
	</section>
	<!-- /HEADER -->
	