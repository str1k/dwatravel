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
                <form action = "/admin_new_tour" method = "post">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <div class="row">
                    <div class="col-lg-8">

                        <!--<form role="form">-->


                            <div class="form-group">
                                <label>ชื่อโปรแกรมทัวร์</label>
                                <input class="form-control" placeholder="ใส่ชื่อโปรแกรมทัวร์ที่นี่" name='program_name'>
                            </div>

                            

                            <div class="form-group">
                                <label>รายละเอียดโปรแกรม</label>
                                <textarea class="form-control" rows="3" name='program_content'></textarea>
                            </div>

                            <div class="form-group">
                                <label>อัพโหลด PDF</label>
                                <input type="file">
                            </div>
                            <button type="submit" class="btn btn-success">เพิ่มโปรแกรมทัวร์</button>

                        <!--</form>-->

                    </div>
                    <div class="col-lg-4">
                        <h1>ทัวร์ประเทศ</h1>
                        <!--<form role="form">-->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>เลือกประเทศ</label>
                                    </div>
                                    <div class="col-lg-12">  
                                        <select id="country" multiple class="form-control" name="country" >
                                            <option value="เกาหลี">เกาหลี</option>
                                            <option value="ญี่ปุ่น">ญี่ปุ่น</option>
                                            <option value="ทัวร์จีน">ทัวร์จีน</option>
                                            <option value="ทัวร์ฮ่องกง">ทัวร์ฮ่องกง</option>
                                            <option value="ทัวร์ยุโรป">ทัวร์ยุโรป</option>
                                            <option value="ทัวร์เยอรมัน">ทัวร์เยอรมัน</option>
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
                                        <input class="form-control" placeholder="วัน" name='day_count'>
                                    </div>
                                    <div class="col-lg-4">
                                        <input class="form-control" placeholder="คืน" name='night_count'>
                                    </div>
                                </div>
                        <!--</form>-->
                        <h1>สายการบิน</h1>
                        <!--<form role="form">-->
                            <div class="form-group">
                                <label>อัพโหลด รูปสายการบิน</label>
                                <input type="file">
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
                                            @foreach ($db_tag as $tag)
                                            <option value="{{$tag}}" {{$tag}}</option>
                                            
                                            @endforeach
                                        </select>

                                        </form>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                <!-- /.row -->
                </form>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
@stop