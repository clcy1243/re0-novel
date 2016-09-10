<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','首页')</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css"/>
    @section('html_head')
    @show
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @section('content')
            @show
        </div>
    </div>
</div>
</body>
@section('script')
    <script src="/js/app.js"></script>
@show
</html>