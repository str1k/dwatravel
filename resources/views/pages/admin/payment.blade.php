@extends('admin_master')
@section('content')
<script>tinymce.init({
  selector: 'textarea',
  height: 800,
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
<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                แก้ไขหน้าเกี่ยวกับเรา
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="/admin">หน้าแรก</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-edit"></i> แก้ไขหน้าเกี่ยวกับเรา
                    </li>
                </ol>
            </div>
       	</div>
<!-- /.row -->
		{!! Form::open(array('url'=>'/admin_about-us','method'=>'POST', 'files'=>true)) !!}
		<div class="row">
			<div class="col-lg-12">
				@if ($errors->any())
                    <?php echo implode('', $errors->all('<div class="form-group"><span  class="label label-danger">:message</span></div>')) ?>
                    <?php $tmp_aboutUs->content = old('content')?>
                @else
                	@foreach($aboutUs as $aboutUsF)
                	<?php $tmp_aboutUs = $aboutUsF ?>
                	@endforeach
                @endif
			</div>
			<div class="col-lg-3">
				<div class="row">
					<div class="col-lg-12">

					<img class="img-responsive" src="{{$tmp_aboutUs->ceo_pic}}" alt="">
					</div>
					<div class="col-lg-12 form-group">
                        <label>อัพโหลดรูป CEO</label>
                        {!! Form::file('ceo_pic') !!}
					</div>
					<div class="col-lg-12">
						<label>ชื่อประธาน</label>
                            <input class="form-control" name='ceo_name' value="{{ $tmp_aboutUs->ceo_name }}">
                        <br></br>
					</div>
					<div class="col-lg-12">
						{!! Form::submit('แก้ไขหน้านี้', array('class'=>'btn btn-success')) !!}
					</div>
					
				</div>
			</div>
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-12">
						<label>คำอธิบายหน้าเกี่ยวกับเรา</label>
                                <textarea class="form-control" rows="3" name='content' >{{ $tmp_aboutUs->content }}</textarea>
					</div>
				</div>
			</div>

		</div>
	</div>
	{!! Form::close() !!}
</div>
@stop