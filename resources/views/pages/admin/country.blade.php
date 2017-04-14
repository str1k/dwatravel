@extends('admin_master')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
    	<h2>จัดการประเทศ</h2>
        <button id="btn-add-countries" name="btn-add-countries" class="btn btn-primary btn-xs">เพิ่มประเทศใหม่</button>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ประเทศ</th>
                        <th>รูป</th>
                        <th>ภูมิภาค</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="countries-list" name="countries-list">
                    @foreach ($countries as $country)
                    <tr id="country{{$country->id}}">
                        <td>{{$country->id}}</td>
                        <td>{{$country->country}}</td>
                        <td><img style="width: 40px;" src="{{$country->pic_url}}" alt=""></td>
                        <td>{{$country->region}}</td>
                        <td>{{$country->created_at}}</td>
                        <td>
                            <button class="btn btn-warning btn-xs btn-detail open-modal-countries" value="{{$country->id}}">Edit</button>
                            <button class="btn btn-danger btn-xs btn-delete delete-country" value="{{$country->id}}">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>  
            <!-- Modal (Pop up when detail button clicked) -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Country Editor</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmTasks" name="frmTasks" class="form-horizontal" novalidate="">

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">ประเทศ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="country-form" name="country-form" placeholder="ประเทศ" value="">
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">ลิ้งรูปภาพ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="country-img-input" name="country-img-input" placeholder="ลิ้งรูปภาพ" value="" disabled="">
                                    </div>
                                </div>

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">รูป</label>
                                    <div class="col-sm-2">
                                        <img style="width: 40px;" id="country-img" src="" alt="">
                                    </div>
                                    <div class="col-sm-4">
                                        <form enctype="multipart/form-data">
                                        <input class="pic-country" id="pic-country" name="pic-country" type="file" />
                                    </div>
                                    <div class="col-sm-3">
                                        
                                        <input class="upload-pic" type="button" value="Upload" />
                                        </form>
                                    </div>
                                    <div class="col-sm-9" align="center">
                                        <progress></progress>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">ภูมิภาค</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="region" id="region">
                                        <option disabled>กรุณาเลือกภูมิภาค</option>     
                                        </select>
                                    </div>
                                </div>


                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                            <input type="hidden" id="country_id" name="country_id" value="0">
                        </div>
                    </div>
                </div>
            </div> 
        </div>
		
	</div>
</div>
    <script src="{{asset('js/admin/Admin_countries.js')}}"></script>
@stop