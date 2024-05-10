@extends('layouts.admin')
@section('title') Availability @endsection
@section('extra-css') 
<link rel="stylesheet" href="{{asset('assets/css/schedule.css')}}" />
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTab les.dataTables.css" />
@endsection
@section('main-content')
<div class="action-box">
    <div class="btns-availibilty-box">
        <button class="btn btn-tab" >Date Range</button>
        <button class="btn btn-tab">Repeat Weekly</button>
    </div>
    <button class="btn btn--purple">Save & Push</button>
</div>
<div class="card card-main">
</div>

        
       
@endsection 
@section('extra-js')
<script src="{{asset('assets/js/appointments.js')}}"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
@endsection