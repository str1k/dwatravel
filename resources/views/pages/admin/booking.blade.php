@extends('admin_master')
@section('content')


 
<div id="page-wrapper">
    <div class="container-fluid">
      <h2>จัดการ การจองทัวร์</h2>
        <button id="btn-add-airlines" name="btn-add-airlines" class="btn btn-primary btn-xs">เพิ่มรายการจองใหม่</button>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>ชื่อโปรแกรม</th>
                        <th>ชื่อลูกค้า</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล</th>
                        <th>รูปพาสปอร์ต</th>
                        <th>สถานะการจอง</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="countries-list" name="countries-list">
                    @foreach ($bookings as $booking)
                    <tr id="country{{$booking->id}}">
                        
                        <td>{{$booking->id}}</td>
                        @foreach ($programs as $program)
                            @if ($program->id == $booking->program_id )
                                <td>{{$program->name}}</td>
                            @endif
                        @endforeach
                        <td>{{$booking->customer_name}}</td>
                        <td>{{$booking->customer_tel}}</td>
                        <td>{{$booking->customer_email}}</td>
                        <td><img id="myImg" style="width: 40px;" src="{{$booking->customer_passport}}" alt=""></td>
                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-dialog modal-admin">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Passport Picture</h4>
                        </div>
                        <div class="modal-body">
                            <img class="modal-content" id="img01">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
                        @if ($booking->confirm == 0)
                            <td><i style="color: red;" class="fa fa-fw fa-close"></i></td>
                        @else
                            <td><i style="color: green;" class="fa fa-fw fa-check"></i></td>
                        @endif
                        <td>
                            <button class="btn btn-warning btn-xs btn-detail open-modal-countries" value="{{$booking->id}}">แก้ไข</button>
                            <button class="btn btn-danger btn-xs btn-delete delete-country" value="{{$booking->id}}">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>  
            <!-- Modal (Pop up when detail button clicked) -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                <div class="modal-dialog modal-admin">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Country Editor</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmTasks" name="frmTasks" class="form-horizontal" novalidate="" enctype="multipart/form-data">

                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">ชื่อสายการบิน</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="airline-form" name="airline-form" placeholder="สายการบิน" value="">
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
                                        <input class="pic-country" id="pic-country" name="pic-country" type="file" />
                                    </div>
                                    <div class="col-sm-3">
                                        
                                        <input class="upload-pic" type="button" value="Upload" />
                                        
                                    </div>
                                    <div class="col-sm-9" align="center">
                                        <progress></progress>
                                    </div>
                                </div>


                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Cancel</button>
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                            <input type="hidden" id="country_id" name="country_id" value="0">
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    
  </div>
</div>
    <script src="{{asset('js/admin/Admin_booking.js')}}"></script>
    <script>
// Get the modal
var modal = document.getElementById('myModal2');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    $('#myModal2').modal('show');
    modalImg.src = this.src;
}


</script>
@stop