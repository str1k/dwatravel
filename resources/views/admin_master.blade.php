<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--<script src="js/jquery.js"></script>-->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


    <!--<link rel="stylesheet" href="docs/css/bootstrap-3.3.2.min.css" type="text/css">-->

    <link rel="stylesheet" href="docs/css/bootstrap-example.css" type="text/css">
    <link rel="stylesheet" href="docs/css/prettify.css" type="text/css">

    <script type="text/javascript" src="docs/js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="docs/js/bootstrap-3.3.2.min.js"></script>
    <script type="text/javascript" src="docs/js/prettify.js"></script>

    <link rel="stylesheet" href="dist/css/bootstrap-multiselect.css" type="text/css">
    <script type="text/javascript" src="dist/js/bootstrap-multiselect.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        window.prettyPrint() && prettyPrint();
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function() {
      $('#country').multiselect({
        enableFiltering: true,
        filterBehavior: 'value',
        maxHeight: 200
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
      $('#taging').multiselect({
        enableFiltering: true,
        filterBehavior: 'value',
        maxHeight: 200
        });
      });
    </script>


    <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
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
  toolbar2: 'responsivefilemanager | print preview media | forecolor backcolor emoticons | codesample',
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
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });</script>
 


</head>

<body>

    <div id="wrapper">
    @include('layouts.partials._admin_nav')
    @yield('content')

        

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    
</body>

</html>
