@extends('master')
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
@foreach($aboutUs as $aboutUsF)
    <?php $tmp_aboutUs = $aboutUsF ?>
@endforeach
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div class="row">
				<div class="col-lg-12">
					<h1>สาส์นจากประธานกรรมการบริษัท</h1>
				</div>
			<div class="col-lg-3">
				<img class="img-responsive" src="{{$tmp_aboutUs->ceo_pic}}" alt="">
				<br></br>
				<p style="text-align: center;">{{$tmp_aboutUs->ceo_name}}</p>
				<p style="text-align: center;">CEO</p>
			</div>
			<div class="col-lg-9">
			<?php echo $tmp_aboutUs->content ?>
			</div>
		</div>
	</div>
	<div class="col-lg-1"></div>
	</div>
</div>
@stop