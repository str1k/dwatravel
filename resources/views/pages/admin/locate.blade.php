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
  <script type="text/javascript">$(document).on('focusin', function(e) {
    if ($(event.target).closest(".mce-window").length) {
        e.stopImmediatePropagation();
    }
});</script>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12">
    	<h2>จัดการสถานที่</h2>
        </div>
        <div class="col-sm-3">
        <button id="btn-add-locates" name="btn-add-locates" class="btn btn-primary">เพิ่มสถานที่ใหม่</button>
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
                        <th>ID</th>
                        <th>สถานที่</th>
                        <th>รูป</th>
                        <th>ประเทศ</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="locates-list" name="locates-list">
                    @foreach ($locates as $locate)
                    <tr id="locate{{$locate->id}}">
                        <td>{{$locate->id}}</td>
                        <td>{{$locate->locate}}</td>
                        <td><img style="width: 40px;" src="{{$locate->pic_url}}" alt=""></td>
                        <td class="td_country">{{$locate->country}}</td>
                        <td>{{$locate->created_at}}</td>
                        <td>
                            <button class="btn btn-warning btn-xs btn-detail open-modal-locates" value="{{$locate->id}}">Edit</button>
                            <button class="btn btn-danger btn-xs btn-delete delete-locate" value="{{$locate->id}}">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>  
            <!-- Modal (Pop up when detail button clicked) -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-admin" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Locate Editor</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmTasks" name="frmTasks" class="form-horizontal" novalidate="" enctype="multipart/form-data">

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">สถานที่</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="locate-form" name="locate-form" placeholder="สถานที่" value="">
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">ลิ้งรูปภาพ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="locate-img-input" name="locate-img-input" placeholder="ลิ้งรูปภาพ" value="" disabled="">
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">รูป</label>
                                    <div class="col-sm-2">
                                        <img style="width: 40px;" id="locate-img" src="" alt="">
                                    </div>
                                    <div class="col-sm-4">
                                        
                                        <input class="pic-country" id="pic-country" name="pic-country" type="file" />
                                    </div>
                                    <div class="col-sm-3">
                                        
                                        <input class="upload-pic" type="button" value="Upload" />
                                    </div>
                                    <div class="col-sm-9" align="center">
                                        <progress></progress>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">ประเทศ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="country-f" name="country-f" placeholder="ประเทศ" value="" disabled="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">เนื้อหา</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="3" id='locate_content' name='locate_content' ></textarea>
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
</div>
    <script src="{{asset('js/admin/Admin_locates.js')}}"></script>
@stop