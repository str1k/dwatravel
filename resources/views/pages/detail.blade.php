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
						<br></br>
						<section id="book">
							<div class="row" >
								<div class="col-lg-12">
									<br></br>
									<h2 >จองทัวร์</h2>
								</div>
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<h4 style="color: #e0881d;" for="disabledSelect">รหัสโปรแกรมทัวร์</h4>
										</div>
										<div class="col-lg-3">
											<input class="form-control" id="disabledInput" type="text" value="{{$program->id}}" name="program_id" disabled>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<h4 style="color: #e0881d;" for="disabledSelect">ชื่อโปรแกรมทัวร์</h4>
										</div>
										<div class="col-lg-9">
											<input class="form-control" id="disabledInput" type="text" value="{{$program->name}}" name="program_name" disabled>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<h4 style="color: #e0881d;" for="disabledSelect">สายการบิน</h4>
										</div>
										<div class="col-lg-3">
											<input class="form-control" id="disabledInput" type="text" value="{{$program->airline_image}}" name="airline" disabled>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<h4 for="disabledSelect">วันเดินทาง</h4>
										</div>
										<div class="col-lg-3">
											<div class='input-group date' id='departure' >
                                            	<input type='text' class="form-control" name="departure"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        	</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<h4 for="disabledSelect">ผู้ใหญ่</h4>
											<select class="form-control" name="adult">
												@for ($i = 0; $i <= 10; $i++)
        											<option value="{{ $i }}">{{ $i }}</option>
    											@endfor
											</select>
										</div>
										<div class="col-lg-3">
											<h4 for="disabledSelect">เด็กมีเตียง</h4>
											<select class="form-control" name="children_bed">
												@for ($i = 0; $i <= 10; $i++)
        											<option value="{{ $i }}">{{ $i }}</option>
    											@endfor
											</select>
										</div>
										<div class="col-lg-3">
											<h4 for="disabledSelect">เด็กไม่มีเตียง</h4>
											<select class="form-control" name="children_no_bed">
												@for ($i = 0; $i <= 10; $i++)
        											<option value="{{ $i }}">{{ $i }}</option>
    											@endfor
											</select>
										</div>
										<div class="col-lg-3">
											<h4 for="disabledSelect">เด็กทารก</h4>
											<select class="form-control" name="infant">
												@for ($i = 0; $i <= 10; $i++)
        											<option value="{{ $i }}">{{ $i }}</option>
    											@endfor
											</select>
										</div>
										<div class="col-lg-3">
											<h4 for="disabledSelect">พักเดี่ยว</h4>
											<select class="form-control" name="single_room">
												@for ($i = 0; $i <= 10; $i++)
        											<option value="{{ $i }}">{{ $i }}</option>
    											@endfor
											</select>
										</div>
										<div class="col-lg-3">
											<h4 for="disabledSelect">จอยแลนด์</h4>
											<select class="form-control" name="join_land">
												@for ($i = 0; $i <= 10; $i++)
        											<option value="{{ $i }}">{{ $i }}</option>
    											@endfor
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-12">
											<h4 style="text-align: center; color: #717477;">รายละเอียดสำหรับติดต่อกลับ</h4>
										</div>
										<div class="col-lg-12">
											<div class="col-lg-6">
												<h4>ชื่อนาม-สกุล*</h4>
												<input class="form-control" placeholder="ชื่อนาม-สกุล" name='customer_name' value="{{ old('customer_name') }}">
											</div>
											<div class="col-lg-6">
												<h4>เบอร์โทรศัพท์*</h4>
												<input class="form-control" placeholder="เบอร์โทรสำหรับติดต่อกลับ" name='customer_tel' value="{{ old('customer_tel') }}">
											</div>
											<div class="col-lg-6">
												<h4>อีเมล*</h4>
												<input class="form-control" placeholder="เกรุณาใส่มีอีเมล" name='customer_email' value="{{ old('customer_email') }}">
											</div>
											<div class="col-lg-6">
												<h4>สำเนาพาสปอร์ตผู้จองอย่างน้อย 1 ท่าน</h4>
												{!! Form::file('customer_passport') !!}
											</div>
											<div class="col-lg-12">
												<h4>หมายเหตุเพิ่มเติม</h4>
												<textarea class="form-control" name="customer_more" placeholder="การแพ้อาหาร โรคประจำตัว หรือคำขออื่น"></textarea>
											</div>
											<div class="col-lg-12" align="center">
												<br></br>
												{!! Form::submit('ส่งแบบฟอร์มการจอง', array('class'=>'btn btn-success')) !!}
											</div>
										</div>
									</div>

								</div>
								
                        	</div>
                        </section>
                        <section id="description">
                        	<br></br>
							<h2 >รายละเอียดเพิ่มเติม</h2>
						<iframe src="http://docs.google.com/gview?url=http://www.dwatravels.com/{{$program->pdf}}&embedded=true" style="width:100%; height:800px;" frameborder="0"></iframe>
						</section>
						<div class="row">
							<div class="col-lg-12" align="center">
								<input type="button" onClick="document.getElementById('book').scrollIntoView();" class="btn btn-success" value="คลิกที่นี่เพื่อจองทัวร์" />
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
							<br></br>
							<section id="book">
							<div class="row" >
								<div class="col-lg-12">
									<br></br>
									<h2 >จองทัวร์</h2>
								</div>
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<h4 style="color: #e0881d;" for="disabledSelect">รหัสโปรแกรมทัวร์</h4>
										</div>
										<div class="col-lg-3">
											<input class="form-control" id="disabledInput" type="text" value="{{$program->id}}" name="program_ID" disabled>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<h4 style="color: #e0881d;" for="disabledSelect">ชื่อโปรแกรมทัวร์</h4>
										</div>
										<div class="col-lg-9">
											<input class="form-control" id="disabledInput" type="text" value="{{$program->name}}" name="program_name" disabled>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<h4 style="color: #e0881d;" for="disabledSelect">สายการบิน</h4>
										</div>
										<div class="col-lg-3">
											<input class="form-control" id="disabledInput" type="text" value="{{$program->airline_image}}" name="airline" disabled>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<h4 for="disabledSelect">วันเดินทาง</h4>
										</div>
										<div class="col-lg-3">
											<div class='input-group date' id='departure' >
                                            	<input type='text' class="form-control" name="departure"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        	</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-3">
											<h4 for="disabledSelect">ผู้ใหญ่</h4>
											<select class="form-control" name="adult">
												@for ($i = 0; $i <= 10; $i++)
        											<option value="{{ $i }}">{{ $i }}</option>
    											@endfor
											</select>
										</div>
										<div class="col-lg-3">
											<h4 for="disabledSelect">เด็กมีเตียง</h4>
											<select class="form-control" name="children_bed">
												@for ($i = 0; $i <= 10; $i++)
        											<option value="{{ $i }}">{{ $i }}</option>
    											@endfor
											</select>
										</div>
										<div class="col-lg-3">
											<h4 for="disabledSelect">เด็กไม่มีเตียง</h4>
											<select class="form-control" name="children_no_bed">
												@for ($i = 0; $i <= 10; $i++)
        											<option value="{{ $i }}">{{ $i }}</option>
    											@endfor
											</select>
										</div>
										<div class="col-lg-3">
											<h4 for="disabledSelect">เด็กทารก</h4>
											<select class="form-control" name="infant">
												@for ($i = 0; $i <= 10; $i++)
        											<option value="{{ $i }}">{{ $i }}</option>
    											@endfor
											</select>
										</div>
										<div class="col-lg-3">
											<h4 for="disabledSelect">พักเดี่ยว</h4>
											<select class="form-control" name="single_room">
												@for ($i = 0; $i <= 10; $i++)
        											<option value="{{ $i }}">{{ $i }}</option>
    											@endfor
											</select>
										</div>
										<div class="col-lg-3">
											<h4 for="disabledSelect">จอยแลนด์</h4>
											<select class="form-control" name="join_land">
												@for ($i = 0; $i <= 10; $i++)
        											<option value="{{ $i }}">{{ $i }}</option>
    											@endfor
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="row">
										<div class="col-lg-12">
											<h4 style="text-align: center; color: #717477;">รายละเอียดสำหรับติดต่อกลับ</h4>
										</div>
										<div class="col-lg-12">
											<div class="col-lg-6">
												<h4>ชื่อนาม-สกุล*</h4>
												<input class="form-control" placeholder="ชื่อนาม-สกุล" name='customer_name' value="{{ old('customer_name') }}">
											</div>
											<div class="col-lg-6">
												<h4>เบอร์โทรศัพท์*</h4>
												<input class="form-control" placeholder="เบอร์โทรสำหรับติดต่อกลับ" name='customer_tel' value="{{ old('customer_tel') }}">
											</div>
											<div class="col-lg-6">
												<h4>อีเมล*</h4>
												<input class="form-control" placeholder="เกรุณาใส่มีอีเมล" name='customer_email' value="{{ old('customer_email') }}">
											</div>
											<div class="col-lg-6">
												<h4>สำเนาพาสปอร์ตผู้จองอย่างน้อย 1 ท่าน</h4>
												{!! Form::file('customer_passport') !!}
											</div>
											<div class="col-lg-12">
												<h4>หมายเหตุเพิ่มเติม</h4>
												<textarea class="form-control" name="customer_more" placeholder="การแพ้อาหาร โรคประจำตัว หรือคำขออื่นๆ"></textarea>
											</div>
											<div class="col-lg-12 align="center"">
												<br></br>
												{!! Form::submit('ส่งแบบฟอร์มการจอง', array('class'=>'btn btn-success')) !!}
											</div>
										</div>
									</div>

								</div>
								
                        	</div>
                        </section>
                        	<section id="description">
                        	<br></br>
							<h2 >รายละเอียดเพิ่มเติม</h2>
    						<?php echo $program->description ?>
    						</section>
    						<div class="row">
							<div class="col-lg-12" align="center">
								<input type="button" onClick="document.getElementById('book').scrollIntoView();" class="btn btn-success" value="คลิกที่นี่เพื่อจองทัวร์" />
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