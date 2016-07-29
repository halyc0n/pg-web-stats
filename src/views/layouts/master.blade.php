<!DOCTYPE html>
<html>
<head>
    <title>pg web stats</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
        body {
            padding-top: 60px;
        }

        .table > tbody > tr > td {
            font-size: 14px;
            padding: 4px;
            line-height: 16px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/pg_web_stats">pg web stats</a>
        </div>
    </div>
</nav>
<div class="container-fluid">
    @yield('content')
</div>
</body>
</html>