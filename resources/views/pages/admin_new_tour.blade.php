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
                                <i class="fa fa-dashboard"></i>  <a href="index.html">หน้าแรก</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> สร้างโปรแกรมทัวร์ใหม่
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-9">

                        <form role="form">


                            <div class="form-group">
                                <label>ชื่อโปรแกรมทัวร์</label>
                                <input class="form-control" placeholder="ใส่ชื่อโปรแกรมทัวร์ที่นี่">
                                <p class="help-block">ชื่อโปรแกรมทัวร์ห้ามเกิน 50 ตัวอักษร</p>
                            </div>

                            

                            <div class="form-group">
                                <label>รายละเอียดโปรแกรม</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>อัพโหลด PDF</label>
                                <input type="file">
                            </div>

                            <div class="form-group">
                                <label>Checkboxes</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 1
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 2
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Checkbox 3
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Inline Checkboxes</label>
                                <label class="checkbox-inline">
                                    <input type="checkbox">1
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox">2
                                </label>
                                <label class="checkbox-inline">
                                    <input type="checkbox">3
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Radio Buttons</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Inline Radio Buttons</label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Selects</label>
                                <select class="form-control">
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            

                            <button type="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>
                    <div class="col-lg-3">
                        <form role="form">
                            <div class="form-group">
                                <label>ประเทศของโปรแกรมทัวร์</label>  
                                    <select id="country" multiple class="form-control" >
                                        <option value="ทัวร์เกาหลี">ทัวร์เกาหลี</option>
                                        <option value="ทัวร์ญี่ปุ่น">ทัวร์ญี่ปุ่น</option>
                                        <option value="ทัวร์จีน">ทัวร์จีน</option>
                                        <option value="ทัวร์ฮ่องกง">ทัวร์ฮ่องกง</option>
                                        <option value="ทัวร์ยุโรป">ทัวร์ยุโรป</option>
                                        <option value="ทัวร์เยอรมัน">ทัวร์เยอรมัน</option>            
                                    </select>
                            </div>
                            <div class="form-group">
                            <label class="control-label" for="new_country">เพิ่มประเทศใหม่</label>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="new_country">
                                    </div>
                                    <div class="col-lg-4">
                                        <button type="submit" class="btn btn-default">เพิ่ม</button>            
                                    </div>
                            </div>


                        </form>

                        <h1>Form Validation</h1>

                        <form role="form">

                            <div class="form-group">
                                <label class="control-label" for="new_country">Input with success</label>
                                <input type="text" class="form-control" id="new_country">
                            </div>

                        </form>

                        <h1>Input Groups</h1>

                        <form role="form">

                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>

                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-eur"></i></span>
                                <input type="text" class="form-control" placeholder="Font Awesome Icon">
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>

                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                            </div>

                        </form>

                        <p>For complete documentation, please visit <a href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a>.</p>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
@stop