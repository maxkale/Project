@section('header')
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Mahesh Kale</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href='javascript:void(0);'>
        <i class="fa fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href='javascript:void(0);' id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">

                <a class="dropdown-item" href='javascript:void(0);'>Action</a>
                <a class="dropdown-item" href='javascript:void(0);'>Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href='javascript:void(0);'>Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href='javascript:void(0);' id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="">Action</a>
                <a class="dropdown-item" href='javascript:void(0);'>Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href='javascript:void(0);'>Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href='javascript:void(0);' id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="https://lh3.googleusercontent.com/-ZnMNrm3Odfs/W2NCZeKSO1I/AAAAAAAABMg/XbCTqkyU6-0auxTqqXdsFLTlEi_NYYU2wCEwYBhgL/w139-h140-p/IMG_20161204_103545.jpg" style="border-radius:20px" height="25px" width="25px">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" ui-sref='profile'>Profile</a>
                <a class="dropdown-item" href='javascript:void(0);'>Settings</a>
                <a class="dropdown-item" href='javascript:void(0);'>Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href='javascript:void(0);' data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
        </li>
    </ul>
</nav>
@extends('frontend.layouts.sidebar')
@section('sidebar')
@endsection	






