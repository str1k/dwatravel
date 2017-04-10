@extends('admin_master')
@section('content')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            สร้างโปรแกรมทัวร์ใหม่
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="/">หน้าแรก</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> สร้างโปรแกรมทัวร์ใหม่
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!--<form action = "/admin_new_tour" method = "post">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">-->
                {!! Form::open(array('url'=>'/admin_new_tour','method'=>'POST', 'files'=>true)) !!}
                <div class="row">
                    <div class="col-lg-9">

                        <!--<form role="form">-->
                            @if ($errors->any())
                            <?php echo implode('', $errors->all('<div class="form-group"><span  class="label label-danger">:message</span></div>')) ?>
                            @endif
                            @if(Session::has('success'))
                            <div class="alert-box success">
                            <span  class="label label-success">{!! Session::get('success') !!}</span>
                            </div>
                            @endif
                            @if(Session::has('error'))
                            <p class="errors">{!! Session::get('error') !!}</p>
                            @endif
                            <div class="form-group">
                                <label>ชื่อโปรแกรมทัวร์</label>
                                <input class="form-control" placeholder="ใส่ชื่อโปรแกรมทัวร์ที่นี่" name='program_name' value="{{ old('program_name') }}">
                            </div>
                            <div class="form-group">
                                <label>ราคาทัวร์เริ่มต้น</label>
                                <input class="form-control" placeholder="ใส่ราคาเริ่มต้น" name='starting_price' value="{{ old('starting_price') }}">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>เวลาเริ่มต้นโปรแกรม</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>เวลาโปรแกรมสุดท้าย</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">        
                                        <div class='input-group date' id='departure' >
                                            <input type='text' class="form-control" name="program_start" value="{{ old('program_start') }}" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">        
                                        <div class='input-group date' id='arrival' >
                                            <input type='text' class="form-control" name="program_end" value="{{ old('program_end') }}"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>รายละเอียดโปรแกรมแบบย่อ(แสดงบนหน้าค้นหา)</label>
                                <textarea class="form-control" rows="3" name='program_content' >{{ old('program_content') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>คำอธิบายโปรแกรม(หน้าแสดงรายละเอียดโปรแกรม)</label>
                                <textarea class="form-control" rows="3" name='description' >{{ old('description') }}</textarea>
                            </div>
                            <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="pdf_mode"> แสดงคำอธิบายโปรแกรมจาก PDF
                                    </label>
                                </div>
                            <div class="form-group">
                                <label>อัพโหลด PDF</label>
                                {!! Form::file('pdf_file') !!}
                                <p class="errors">{!!$errors->first('pdf_file')!!}</p>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>แสดงจนถึง</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">        
                                        <div class='input-group date' id='datetimepicker1' >
                                            <input type='text' class="form-control" name="show_until" value="{{ old('show_until') }}"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--<button type="submit" class="btn btn-success">เพิ่มโปรแกรมทัวร์</button>-->
                            {!! Form::submit('เพิ่มโปรแกรมทัวร์', array('class'=>'btn btn-success')) !!}

                        <!--</form>-->

                    </div>
                    <div class="col-lg-3">
                        <h1>ทัวร์ประเทศ</h1>
                        <!--<form role="form">-->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>เลือกประเทศ</label>
                                    </div>
                                    <div class="col-lg-12">  
                                        <select id="country" multiple class="form-control" name="country" value="{{ old('country') }}" >
                                            @foreach($countries as $country)
                                            <option value="{{$country->country}}">{{$country->country}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-lg-4">
                                        <label>จำนวนวัน</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>จำนวนคืน</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input class="form-control" placeholder="วัน" name='day_count' value="{{ old('day_count') }}">
                                    </div>
                                    <div class="col-lg-4">
                                        <input class="form-control" placeholder="คืน" name='night_count' value="{{ old('night_count') }}">
                                    </div>
                                </div>

                        <h1>รูปทัวร์</h1>
                        <!--<form role="form">-->
                            <div class="form-group">
                                <label>อัพโหลด รูปทัวร์</label>
                                {!! Form::file('tour_image') !!}
                                <p class="errors">{!!$errors->first('tour_image')!!}</p>
                            </div>

                        <!--</form>-->
                        <h1>สายการบิน</h1>
                        <!--<form role="form">-->
                            <div class="form-group">
                                <label>อัพโหลด รูปสายการบิน</label>
                                {!! Form::file('airline_image') !!}
                                <p class="errors">{!!$errors->first('airline_image')!!}</p>
                            </div>
                        <!--</form>-->



                        <h1>Tags</h1>

                        <!--<form role="form">-->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>เลือกป้ายกำกับ</label>
                                    </div>
                                    <div class="col-lg-12">  
                                        <form action="#" method="post">
                                        <select id="taging" multiple class="form-control" name='tag_list[]' >
                                            @foreach ($tags as $tag)
                                            <option value="{{ $tag->tag }}"> {{ $tag->tag }}</option>
                                            
                                            @endforeach 
                                        </select>

                                        </form>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                <!-- /.row -->
                {!! Form::close() !!}
                <!--</form>-->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
@stop