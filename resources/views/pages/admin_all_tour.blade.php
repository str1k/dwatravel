@extends('admin_master')
@section('content')
<div id="page-wrapper">

            <div class="container-fluid">
            <a href="/admin_new_tour"  class="btn btn-primary btn-xs">เพิ่มโปรแกรมใหม่</a>
            <div>
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
                            <td>{{$program->country}}</td>
                            <td>{{$program->show_until}}</td>
                            <td>{{$program->created_at}}</td>
                            <td>
                                <button class="btn btn-warning btn-xs btn-detail open-modal" value="{{$program->id}}">แก้ไข</button>
                                <button class="btn btn-danger btn-xs btn-delete delete-program" value="{{$program->id}}">ลบ</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Program Editor</h4>
                        </div>
                        <div class="modal-body">
                            <form id="frmprogram" name="frmTasks" class="form-horizontal" novalidate="">
                                <div class="form-group error">
                                    <label for="inputTask" class="col-sm-3 control-label">Program Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="program_name" name="program_name" placeholder="program_name" value="">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea class="form-control" rows="3" name='testcontent' id="testcontent" name="testcontent" ></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                            <input type="hidden" id="program_id" name="task_id" value="0">
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