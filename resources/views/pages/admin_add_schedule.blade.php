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
                                <i class="fa fa-dashboard"></i>  <a href="/">หน้าแรก</a>
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
                        <form role="form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>เลือกชื่อโปรแกรมทัวร์</label>
                                    </div>
                                    <div class="col-lg-12">  
                                        <select id="country" multiple class="form-control" >
                                            <option value="ทัวร์เกาหลี">ทัวร์เกาหลี</option>
                                            <option value="ทัวร์ญี่ปุ่น">ทัวร์ญี่ปุ่น</option>
                                            <option value="ทัวร์จีน">ทัวร์จีน</option>
                                            <option value="ทัวร์ฮ่องกง">ทัวร์ฮ่องกง</option>
                                            <option value="ทัวร์ยุโรป">ทัวร์ยุโรป</option>
                                            <option value="ทัวร์เยอรมัน">ทัวร์เยอรมัน</option>
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
                                        <input class="form-control" placeholder="คน">
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
                                        <input class="form-control" placeholder="ไป">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" placeholder="กลับ">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value=""> มีลดราคา
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>ราคาผู้ใหญ่</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>ราคาผู้ใหญ่ลดราคา</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <input class="form-control" placeholder="จำนวน">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" placeholder="จำนวน">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>ราคาเด็ก</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>ราคาเด็กลดราคา</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <input class="form-control" placeholder="จำนวน">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" placeholder="จำนวน">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>ราคาเด็กเล็ก</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <input class="form-control" placeholder="จำนวน">
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
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" />
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
                                        <button type="submit" class="btn btn-primary">เพิ่ม</button>
                                    </div>
                                    <div class="col-lg-1">
                                        <a href="/admin_all_schedule" class="btn btn-default" role="button">ยกเลิก</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
@stop