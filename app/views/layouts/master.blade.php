<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simplicity</title>

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('/vendor/bootstrap/dist/css/bootstrap.min.css') }}

    <!-- Custom Fonts -->
    {{ HTML::style('/vendor/font-awesome/css/font-awesome.min.css') }}

    <!-- SweetAlert -->
    {{ HTML::style('/vendor/sweetalert/dist/sweetalert.css') }}

    <!-- Custom Css -->
    <style>
        body{
            background-color: lightblue;
        }

    </style>
    @yield('css','')

            <!-- jQuery -->
    {{ HTML::script('/vendor/jquery/dist/jquery.min.js') }}

            <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('/vendor/bootstrap/dist/js/bootstrap.min.js') }}

            <!-- Sweetalert JavaScript -->
    {{ HTML::script('/vendor/sweetalert/dist/sweetalert.min.js') }}

    @yield('js','')

    {{ HTML::style('/vendor/bootstrap-multiselect/dist/css/bootstrap-multiselect.css') }}

    {{ HTML::script('/vendor/bootstrap-multiselect/dist/js/bootstrap-multiselect.js') }}

</head>

<body>

<div class="container">

@yield('content')

</div>
<!-- /#wrapper -->


</body>

</html>
