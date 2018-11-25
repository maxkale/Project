
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Max Dahsbord</title>

        <!-- Angular Dependacy -->
        <script src="angular/angular.min.js"></script>
        <script src="angular/angular-ui-router.js"></script>
        <script src="angular/ocLazyLoad.js"></script>
        <script src="angular/angular-messages.min.js"></script>
        <script src="controller/app.js"></script>
        <script src="controller/MainController.js"></script>
        <script src="factory/commonFactory.js"></script>
        <script src="router/router.js"></script>
        <!-- Bootstrap core CSS-->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="css/all.min.css" rel="stylesheet" type="text/css">
        <link href="css/all.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/fontawesome/css/all.css"  crossorigin="anonymous">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">
    </head>
    <body id="page-top" ng-app='app' ng-controller='MainController'>


        @extends('frontend.layouts.heder')
        @section('header')
        @endsection

        @extends('frontend.layouts.footer')
        @section('footer')

        @endsection