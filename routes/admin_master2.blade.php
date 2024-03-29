<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_token" content="{{ csrf_token() }}" />

    <title>Dwatravel Admin Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.css" type="text/css">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="docs/js/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/moment-with-locales.js"></script>
    <script type="text/javascript" src="js/transition.min.js"></script>

    <!--<link rel="stylesheet" href="docs/css/bootstrap-3.3.2.min.css" type="text/css">-->

    <link rel="stylesheet" href="docs/css/bootstrap-example.css" type="text/css">
    <link rel="stylesheet" href="docs/css/prettify.css" type="text/css">


    <script src="js/bootstrap-datetimepicker.js"></script>
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
      $('#select-airline').multiselect({
        enableFiltering: true,
        filterBehavior: 'value',
        maxHeight: 200
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
      $('#locate').multiselect({
        enableFiltering: true,
        filterBehavior: 'value',
        maxHeight: 200
        });
      });
    </script>
    <script type="text/javascript">
            $(function () {
                $('#departure').datetimepicker({
                    format: 'YYYY-MM-DD',
                    locale: 'th'
                });
            });
    </script>
    <script type="text/javascript">
            $(function () {
                $('#arrival').datetimepicker({
                    format: 'YYYY-MM-DD',
                    locale: 'th'
                });
            });
    </script>
    <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
                    format: 'YYYY-MM-DD',
                    locale: 'th'
                });
            });
    </script>


    <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="js/tinymce/jquery.tinymce.min.js"></script>
    


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
