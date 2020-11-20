<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="hal1.css">
    <script src="https://kit.fontawesome.com/d0ee1fa2b0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{url('public')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

    <title>Beranda</title>
</head>
<body>
    @include('client.section.header')
    <div class="row mt-5">
        <div class="col-md-3 bg-light">
            @include('client.section.sidebar')
        </div>
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
    @include('client.section.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <script src="{{url('public')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{url('public')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{url('public')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{url('public')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{url('public')}}/dist/js/adminlte.js"></script>
    <script>
        $(".table-datatable").DataTable();
    </script>
</body>
</html>