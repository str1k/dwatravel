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

                <div class="row">
                    <div class="col-lg-8">

                        <form role="form">


                            <div class="form-group">
                                <label>ชื่อโปรแกรมทัวร์</label>
                                <input class="form-control" placeholder="ใส่ชื่อโปรแกรมทัวร์ที่นี่" name=''>
                            </div>

                            

                            <div class="form-group">
                                <label>รายละเอียดโปรแกรม</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>อัพโหลด PDF</label>
                                <input type="file">
                            </div>
                            <button type="submit" class="btn btn-success">เพิ่มโปรแกรมทัวร์</button>

                        </form>

                    </div>
                    <div class="col-lg-4">
                        <h1>ทัวร์ประเทศ</h1>
                        <form role="form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>เลือกประเทศ</label>
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
                                        <input class="form-control" placeholder="วัน">
                                    </div>
                                    <div class="col-lg-4">
                                        <input class="form-control" placeholder="คืน">
                                    </div>
                                </div>
                        </form>
                        <h1>สายการบิน</h1>
                        <form role="form">
                            <div class="form-group">
                                <label>อัพโหลด รูปสายการบิน</label>
                                <input type="file">
                            </div>
                        </form>

                        <h1>Tags</h1>

                        <form role="form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>เลือกป้ายกำกับ</label>
                                    </div>
                                    <div class="col-lg-12">  
                                        <select id="taging" multiple class="form-control" >
                                            <option value="ซากูระ">ซากูระ</option>
                                            <option value="ขาปูยักศ์">ขาปูยักศ์</option>
                                            <option value="โอซาก้า">โอซาก้า</option>
                                            <option value="หิมะ">หิมะ</option>
                                            <option value="เล่นสกี">เล่นสกี</option>
                                            <option value="ไลน์ช๊อบ">ไลน์ช๊อบ</option>
                                        </select>

                                    </div>
                                </div>
                            </div>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
@stop