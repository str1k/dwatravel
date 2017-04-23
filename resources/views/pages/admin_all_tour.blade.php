@extends('admin_master')
@section('content')
<script>tinymce.init({
  selector: 'textarea',
  height: 300,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc responsivefilemanager'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link',
  toolbar2: 'responsivefilemanager | print preview media | forecolor backcolor emoticons | sizeselect | fontselect |  fontsizeselect' ,
  toolbar3: '',
  external_filemanager_path:"/pic_upload/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "plugins/responsivefilemanager/plugin.min.js"},
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//fonts.googleapis.com/css?family=Kanit',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });</script>
<div id="page-wrapper">

            <div class="container-fluid">

            <div class="row">
        <div class="col-sm-12">
        <h2>จัดการสถานที่</h2>
        </div>
        <div class="col-sm-3">
        <a id="btn-add-programs" name="btn-add-programs"  class="btn btn-primary btn-xs">เพิ่มโปรแกรมใหม่</a>
        </div>
        <div class="col-sm-3">
            <select class="form-control" name="selected-country" id="selected-country">
                <option selected disabled>กรุณาเลือกประเทศ</option>
                @foreach ($countries as $country)
                    <option id="country{{$country->id}}" value="{{$country->id}}">{{$country->country}}</option>
                    
                @endforeach                    
            </select>
            @foreach ($countries as $country)
                <input type="hidden" id="countryImage{{$country->id}}" name="locate_id" value="{{$country->pic_url}}">
                <input type="hidden" id="countryName{{$country->id}}" name="locate_id" value="{{$country->country}}">
            @endforeach
        </div>
        <div class="col-sm-3">
            <img style="width: 40px;" id="country-img" src="" alt="">
        </div>
        </div>

            
            
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>รหัสทัวร์</th>
                            <th>ชื่อทัวร์</th>
                            <th>ราคาเริ่มต้น</th>
                            <th>ประเทศ</th>
                            <th>แสดงจนถึง</th>
                            <th>เพิ่มเมื่อวันที่</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="program-list" name="program-list">
                        @foreach ($programs as $program)
                        <tr id="program{{$program->id}}">
                            <td>{{$program->id}}</td>
                            <td>{{$program->name}}</td>
                            <td>{{$program->starting_price}}</td>
                            <td class="td_country">{{$program->country}}</td>
                            <td>{{$program->show_until}}</td>
                            <td>{{$program->created_at}}</td>
                            <td>
                                <button class="btn btn-warning btn-xs btn-detail open-modal-programs" value="{{$program->id}}">แก้ไข</button>
                                <button class="btn btn-danger btn-xs btn-delete delete-program" value="{{$program->id}}">ลบ</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Modal (Pop up when detail button clicked) -->
            <div class="modal fade dwamodal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Program Editor</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmTasks" name="frmTasks" class="form-horizontal" novalidate="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-9">
                            
                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-2 control-label">ชื่อโปรแกรม</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control has-error" id="locate-form" name="locate-form" placeholder="ชื่อโปรแกรม" value="">
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-2 control-label">ลิ้งรูปภาพ</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control has-error" id="locate-img-input" name="locate-img-input" placeholder="ลิ้งรูปภาพ" value="" disabled="">
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-2 control-label">รูปทัวร์</label>
                                    <div class="col-sm-5">
                                        <img style="width: 300px;" id="locate-img" src="" alt="">
                                    </div>
                                    <div class="col-sm-3">
                                        
                                        <input class="pic-country" id="pic-country" name="pic-country" type="file" />
                                    </div>
                                    <div class="col-sm-2">
                                        
                                        <input class="upload-pic" type="button" value="Upload" />
                                    </div>
                                    <div class="col-sm-10" align="center">
                                        <progress></progress>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">เนื้อหาแบบย่อ</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="3" id='tour_content' name='tour_content' ></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">เนื้อหาแบบยาว</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="3" id='tour_desc' name='tour_desc' ></textarea>
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <div class="col-sm-2">
                                        
                                    </div>
                                    <div class="checkbox col-sm-10">
                                        <label>
                                            <input type="checkbox" name="pdf_mode" id="pdf_mode"> แสดงคำอธิบายโปรแกรมจาก PDF
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-2 control-label">ไฟล์ PDF</label>
                                    <div class="col-sm-3">
                                        
                                        <input class="pdf_upload" id="pdf_upload" name="pdf_upload" type="file" />
                                    </div>
                                    <div class="col-sm-3">
                                        
                                        <input class="pdf_upload-but" type="button" value="Upload" />
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control has-error" id="pdf-input" name="pdf-input" placeholder="ลิ้ง PDF" value="" disabled="">
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-3">
                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-6 control-label" style="text-align: left">จำนวนวัน</label>
                                    <label for="inputTask" class="col-sm-6 control-label" style="text-align: left">จำนวนคืน</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control has-error" id="day-count" name="day-count" placeholder="วัน" value="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control has-error" id="night-count" name="night-count" placeholder="คืน" value="">
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-6 control-label" style="text-align: left">เวลาโปรแกรมแรก</label>
                                    <label for="inputTask" class="col-sm-6 control-label" style="text-align: left">เวลาโปรแกรมสุดท้าย</label>
                                    <div class="col-sm-6">
                                        <div class='input-group date' id='departure' >
                                            <input type='text' class="form-control" name="program_start" value="{{ old('program_start') }}" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class='input-group date' id='arrival' >
                                            <input type='text' class="form-control" name="program_end" value="{{ old('program_end') }}"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-4 control-label">ราคาทัวร์</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control has-error" id="price-form" name="price-form" placeholder="" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">ประเทศ</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control has-error" id="country-f" name="country-f" placeholder="ประเทศ" value="" disabled="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">สถานที่</label>
                                    <div class="col-sm-8">
                                        <select id="locate" multiple class="form-control select-locate" name='locate_list[]'>
                                            @foreach ($locates as $locate)
                                            <option  value="{{ $locate->locate }},{{ $locate->country }}"> {{ $locate->locate }}</option>
                                            
                                            @endforeach 
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-4 control-label">สายการบิน</label>
                                    <div class="col-sm-8">
                                        <select id="select-airline" class="form-control select-airline" name='select-airline' >
                                            @foreach ($airlines as $airline)
                                            <option  value="{{ $airline->id }}"> {{ $airline->airline_name }}</option>
                                            @endforeach 
                                        </select>
                                        @foreach ($airlines as $airline)
                                        <input type="hidden" id="airlineImage{{$airline->id}}" name="airline_id" value="{{$airline->pic_url}}">
                                        <input type="hidden" id="airlineName{{$airline->id}}" name="airline_id" value="{{$airline->airline_name}}">
                                        @endforeach 
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-4 control-label">แสดงถึง</label>
                                    <div class="col-sm-8">
                                        <div class='input-group date' id='datetimepicker1' >
                                            <input type='text' class="form-control" name="show_until" value="{{ old('show_until') }}"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                    
                                </div>

                            </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancel</button>
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                            <input type="hidden" id="locate_id" name="locate_id" value="0">
                        </div>
                    </div>
                </div>
            </div> 
            </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        
        <script src="{{asset('js/admin/Admin_program.js')}}"></script>
@stop