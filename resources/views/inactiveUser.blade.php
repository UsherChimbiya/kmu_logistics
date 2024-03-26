@include('layouts.welcome')
<div class="flex-center position-ref full-height">
    <div class="top-right links color-white">
            <a style="color: white" href="{{ route('logout') }}">Logout</a>
    </div>
    <div class="content">
        <div class="title m-b-md">
            <center> <h1>KMU - Computer Lab Management System</h1></center>
            <div class="clockStyle" id="clock">123</div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Inactive User</div>
                        <div class="card-body">
                            Your account is inactive. Please contact the administrator for assistance.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- resources/views/inactive.blade.php
@extends('layouts.app')
@section('content')
    
@endsection
 -->