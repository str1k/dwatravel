@extends('admin_master')
@section('content')
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Test
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">หน้าแรก</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Testing
                            </li>
                        </ol>
                    </div>
                </div>
          	<div class="row">
          	<div class="example">
                                        <div class="btn-group">
                                            <script type="text/javascript">
                                                $(document).ready(function() {
                                                    $('#example-select').multiselect();

                                                    $('#example-select-button').on('click', function() {
                                                        $('#example-select').multiselect('select', ['1', '2', '4']);

                                                        alert('Selected 1, 2 and 4.');
                                                    });
                                                });
                                            </script>
                                            <div class="btn-group">
                                                <select id="example-select" multiple="multiple">
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option>
                                                    <option value="4">Option 4</option>
                                                    <option value="5">Option 5</option>
                                                    <option value="6">Option 6</option>
                                                </select>
                                                <button id="example-select-button" class="btn btn-default">Select some options...</button>
                                            </div>
                                        </div>
                                    </div>
          	</div>

          </div>
</div>
@stop