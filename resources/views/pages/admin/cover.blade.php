@extends('admin_master')
@section('content')
 <script type="text/javascript">
      $(document).ready(function() {
      $('#selected-page').multiselect({
        enableFiltering: true,
        filterBehavior: 'value',
        maxHeight: 300
        });
      });
    </script>
 
<div id="page-wrapper">
    <div class="container-fluid">
    	<h2>จัดการ Slider</h2>
        <div class="row">
        <div class="col-sm-12">
        <div class="col-sm-3">
        <button id="btn-add-countries" name="btn-add-countries" class="btn btn-primary">เพิ่ม Slider ใหม่</button>
        </div>
        <div class="col-sm-3">
            <select class="form-control" name="selected-page" id="selected-page">
                <option selected disabled>เลือกหน้าที่ต้องการแก้ไข</option>
                <option id="pageHome" value="Home1,หน้าหลัก">หน้าหลัก</option>
                @foreach ($countries as $country)
                    <option id="pageCountry{{$country->id}}" value="Country{{$country->id}},{{$country->country}}">{{$country->country}}</option>
                    
                @endforeach
                @foreach ($locates as $locate)
                    <option id="pageLocate{{$locate->id}}" value="Locate{{$locate->id}},{{$locate->locate}}">{{$locate->locate}}</option>
                    
                @endforeach                    
            </select>
            @foreach ($countries as $country)
                <input type="hidden" id="pageImageCountry{{$country->id}}" name="locate_id" value="{{$country->pic_url}}">
                <input type="hidden" id="pageNameCountry{{$country->id}}" name="locate_id" value="{{$country->country}}">
            @endforeach
            @foreach ($locates as $locate)
                <input type="hidden" id="pageImageLocate{{$locate->id}}" name="locate_id" value="{{$locate->pic_url}}">
                <input type="hidden" id="pageNameLocate{{$locate->id}}" name="locate_id" value="{{$locate->locate}}">
            @endforeach
                <input type="hidden" id="pageImageHome1" name="locate_id" value="">
                <input type="hidden" id="pageNameHome1" name="locate_id" value="หน้าหลัก">
        </div>
        </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>หน้า</th>
                        <th>รูป</th>
                        <th>ลิ้งไปยัง</th>
                        <th>ลำดับแสดง</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="pages-list" name="pages-list">
                    @foreach ($covers as $cover)
                    <tr id="page{{$cover->id}}">
                        <td>{{$cover->id}}</td>
                        <td class="td_page">{{$cover->page}}</td>
                        <td><img style="width: 40px;" src="{{$cover->pic_url}}" alt=""></td>
                        <td>{{$cover->href_url}}</td>
                        <td>{{$cover->order}}</td>
                        <td>{{$cover->created_at}}</td>
                        <td>
                            <button class="btn btn-warning btn-xs btn-detail open-modal-covers" value="{{$cover->id}}">Edit</button>
                            <button class="btn btn-danger btn-xs btn-delete delete-cover" value="{{$cover->id}}">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>  
            <!-- Modal (Pop up when detail button clicked) -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Slider Editor</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmTasks" name="frmTasks" class="form-horizontal" novalidate="" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">หน้า</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="page-f" name="page-f" placeholder="หน้า" value="" disabled="">
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">ลิ้งรูปภาพ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="page-img-input" name="page-img-input" placeholder="ลิ้งรูปภาพ" value="" disabled="">
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">รูป</label>
                                    <div class="col-sm-2">
                                        <img style="width: 40px;" id="page-img" src="" alt="">
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

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">ลิ้งไปยังหน้าที่ Promote</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="href-url" name="href-url" placeholder="http://www.dwatravels.com/program?query=&country=%ญี่ปุ่น" value="">
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">ลำดับที่แสดง</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="order" name="order" placeholder="1 - 10" value="">
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancel</button>
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                            <input type="hidden" id="page_id" name="page_id" value="0">
                        </div>
                    </div>
                </div>
            </div> 
        </div>
		
	</div>
</div>
    <script src="{{asset('js/admin/Admin_covers.js')}}"></script>
@stop