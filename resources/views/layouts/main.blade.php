<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$title}}</title>


    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->


    <link href="{{asset('css/gallery-grid.css')}}">
    <!-- Bootstrap core CSS -->


    <!-- galeray -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    <!--table CSS -->
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->

    <link href="{{asset('css/gallery-grid.css')}}">

    <!-- Bootstrap core CSS -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css"
          rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <!-- Custom styles for this template -->
    <link href="http://bootstrap-3.ru/examples/offcanvas/offcanvas.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">

    <!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--Yandex -->
    <meta name="yandex-verification" content="af4168af7d682a89"/>
    <style>
        .row.no-gutter {
            margin-left: 0;
            margin-right: 0;
        }

        .row.no-gutter [class*='col-']:not(:first-child),
        .row.no-gutter [class*='col-']:not(:last-child) {
            padding-right: 0;
            padding-left: 0;
        }
    </style>

</head>

<body>


<script src="{{ asset('/js/axios.min.js') }}"></script>


<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">

            <div class="row">
                @yield('content')
            </div>
        </div>

        <div class="col-xs-3 col-sm-3  sidebar-offcanvas" id="sidebar" role="navigation">

        </div>
    </div><!--/span-->
</div><!--/row-->


</div>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
<script src="http://bootstrap-3.ru/examples/offcanvas/offcanvas.js"></script>
<!-- скрипт для галлереи -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');

    function relocate_home() {
        location.href = "www.yoursite.com";
    }
</script>
</body>
</html>