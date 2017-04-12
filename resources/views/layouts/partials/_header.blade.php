<!-- HEADER -->
	<section id="header">
		<nav class="navbar st-navbar navbar-fixed-top" >
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#st-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
					</button>
					<a class="st-item logo" href="/"><img src="images/home/logo.png" alt=""></a>
				</div>

				<div class="collapse navbar-collapse" id="st-navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
				    	<li><a href="/">หน้าหลัก</a></li>
				    	<li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">แพ็คเกจทัวร์<b class="caret"></b></a>
	            <ul class="dropdown-menu multi-column columns-2">
	            	
		            <div class="row">

			            <div class="col-lg-6">
				            <ul class="multi-column-dropdown">	@foreach($countries as $country)
					            @if ($country->id%2 === 1)
					            <li>
					            	<div class="row" style="height: 40px;">
					            		<div class="col-lg-12" >
					            			<a href="/program?query=&country={{$country->country}}" >
					            				<img style="width: 40px;" src="{{$country->pic_url}}" alt=""> {{$country->country}}
					            			</a>
					            		</div>
					            	
					            	</div>
					            </li>
					            @endif
					            @endforeach
					            <li class="divider"></li>
				            </ul>
			            </div>
			           
			            <div class="col-lg-6">
				            <ul class="multi-column-dropdown">
				            	@foreach($countries as $country)
					            @if ($country->id%2 === 0)
					            <li>
					            	<div class="row" style="height: 40px;">
					            		<div class="col-lg-12" >
					            			<a href="/program?query=&country={{$country->country}}" >
					            				<img style="width: 40px;" src="{{$country->pic_url}}" alt=""> {{$country->country}}
					            			</a>
					            		</div>
					            	
					            	</div>
					            </li>
					            @endif
					            @endforeach
					            <li class="divider"></li>
				            </ul>
			            </div>
		            </div>
		            
	            </ul>
	        </li>
				    	<li><a href="#our-works">สถานที่ยอดนิยม</a></li>
				    	<li><a href="#pricing">บทความ</a></li>
				    	<li><a href="#our-team">เกี่ยวกับ</a></li>
				    	<li><a href="#contact">ติดต่อ</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav>
	</section>
	<!-- /HEADER -->
	