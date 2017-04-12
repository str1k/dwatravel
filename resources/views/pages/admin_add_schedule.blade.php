@extends('admin_master')
@section('content')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            เพิ่มโปรแกรมท่องเที่ยวตามช่วงเวลา
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="/admin">หน้าแรก</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> เพิ่มโปรแกรมท่องเที่ยวตามช่วงเวลา
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <!--<form action = "/admin_add_schedule" method = "post">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">-->
                        {!! Form::open(array('url'=>'/admin_add_schedule','method'=>'POST', 'files'=>true)) !!}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>เลือกชื่อโปรแกรมทัวร์</label>
                                    </div>
                                    <div class="col-lg-12">  
                                        <select id="country" multiple class="form-control" name="program" >
                                            @foreach($programs as $program)
                                            <option value="{{$program->id}}">{{$program->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>จำนวนที่ว่าง</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <input class="form-control" placeholder="คน" name="seat">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>วันเดินทางไป</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>วันเดินทางกลับ</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">        
                                        <div class='input-group date' id='departure' >
                                            <input type='text' class="form-control" placeholder="ไป" name="departure"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">        
                                        <div class='input-group date' id='arrival' >
                                            <input type='text' class="form-control" placeholder="กลับ" name="arrival"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="is_discount"> ลดราคา
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>ราคาผู้ใหญ่</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>ลดราคา</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <input class="form-control" placeholder="จำนวน" name="adult_price">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" placeholder="จำนวน" name="adult_discount">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>ราคาเด็ก</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>ลดราคา</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <input class="form-control" placeholder="จำนวน" name="child_price">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" placeholder="จำนวน" name="child_discount">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>ราคาเด็กเล็ก</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <input class="form-control" placeholder="จำนวน" name="infant_price">
                                    </div>
                                </div>
                                
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
                                            <input type='text' class="form-control" name="show_until"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-1">
                                        {!! Form::submit('เพิ่ม', array('class'=>'btn btn-primary')) !!}
                                    </div>
                                    <div class="col-lg-1">
                                        <a href="/admin_all_schedule" class="btn btn-default" role="button">ยกเลิก</a>
                                    </div>
                                </div>
                            </div>

                        {!! Form::close() !!}
                        <!--</form>-->
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
@stop