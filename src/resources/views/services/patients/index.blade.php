@extends('layouts.app')

@section('headExtra')
<link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
<script src="js/vendor/angular.min.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Patients</h1>

			<div class="dashboard-container" ng-app>
                <div class="dashboard-header">
                    <span>Patients Dashboard</span>
                    <hr>
                </div>
                <div class="dashboard-sidebar">

                </div>
                <div class="dashboard-main">

                </div>
                <i class="fa fa-arrows-alt fa-lg dashboard-fullscreen" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extraScripts')
<script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
