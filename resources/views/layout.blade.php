<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
  <!-- <link rel="stylesheet" href="{{ secure_asset('/css/app.css') }}> -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' >
  <title>Circulation</title>
  <style>
    body {padding: 80px;}
    .col-md-6{
    padding-right: 15px;
    padding-left: 15px;
    border: 5px #fff solid;
    }
  </style>
</head>
<body>
  <nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>
  </nav>
  <div class='container'>
    @yield('content')
  </div>
</body>
</html>