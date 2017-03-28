<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript" src="docs/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="js/daterangepicker.js"></script>
<link rel="stylesheet" href="css/daterangepicker.css" type="text/css">
</head>
<body>

    <div class="row">
        <div class="col-md-4 col-md-offset-2 demo">
            <input type="text" id="demo" class="form-control">
        </div>
        <script type="text/javascript">
            $('#demo').daterangepicker({
    "autoApply": true,
    "alwaysShowCalendars": true,
    "startDate": "03/08/2017",
    "endDate": "03/14/2017"
}, function(start, end, label) {
  console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
});
        </script>
    </div>
</body>
</html>