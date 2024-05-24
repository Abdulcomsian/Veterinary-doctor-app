@extends('layouts.admin')
@section('title') Availability @endsection
@section('extra-css') 
<link rel="stylesheet" href="{{asset('assets/css/schedule.css')}}" />
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
@endsection
@section('main-content')
<div class="btn-action-wrapper mb-4">
    <div class="btn-filter-setting d-flex align-items-center">
        <div class="btn-group btns-availibilty-box" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
          <label class="btn btn-outline-primary label-btn" for="btnradio1">Date Range</label>
        
          <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
          <label class="btn btn-outline-primary label-btn" for="btnradio2">Repeat Weekly</label>
        </div>
        <div class="select-input-wrapper">
            <img src="{{asset('assets/images/calendar-outline.svg')}}" class="icon" alt="">
            <select class="form-select" aria-label="Default select example">
              <option selected>Mar 14, 2024 - Mar 20, 204</option>
              <option >Mar 14, 2024 - Mar 20, 204</option>
              <option >Mar 14, 2024 - Mar 20, 204</option>
              <option >Mar 14, 2024 - Mar 20, 204</option>
            </select>
        </div>
    </div>
    <button class="btn btn--purple btn-save">Save & Publish</button>
</div>
<div class="card card-availibility card-date-range">
    <div class="setting-row"> 
        <div class="date-col">
            <span>Thursday</span>
            <span>03/14</span>
        </div>
        <div class="availibility-col">
            <span class="unavailable-text">Unavailable</span>
            <div class="action-box">
                <span class="icon"><img src="{{asset('assets/images/add.svg')}}" alt=""></span>
                <span class="icon"><img src="{{asset('assets/images/copy-outline.svg')}}" alt=""></span>
            </div>
        </div>
    </div>
    <div class="setting-row">
        <div class="date-col">
            <span>Thursday</span>
            <span>03/14</span>
        </div>
        <div class="availibility-col">
            <span class="unavailable-text">Unavailable</span>
            <div class="action-box">
                <span class="icon"><img src="{{asset('assets/images/add.svg')}}" alt=""></span>
                <span class="icon"><img src="{{asset('assets/images/copy-outline.svg')}}" alt=""></span>
            </div>
        </div>
    </div>
    <div class="setting-row">
        <div class="date-col">
            <span>Tuesday</span>
            <span>03/14</span>
        </div>
        <div class="availibility-col">
            <ul class="list availibility-times-list">
                <li>
                    <div class="time-box">
                        <!-- <input type="time" id="timeInput" name="time"> -->
                        <span class="time">09:00 AM</span>
                        <span class="close-icon">&times;</span>
                    </div>
                </li>
                <li>
                    <div class="time-box">
                        <span class="time">09:00 AM</span>
                        <span class="close-icon">&times;</span>
                    </div>
                </li>
                <li>
                    <div class="time-box">
                        <span class="time">09:00 AM</span>
                        <span class="close-icon">&times;</span>
                    </div> 
                </li>
            </ul>
            <div class="action-box">
                <span class="icon"><img src="{{asset('assets/images/add.svg')}}" alt=""></span>
                <span class="icon"><img src="{{asset('assets/images/copy-outline.svg')}}" alt=""></span>
            </div>
        </div>
    </div>
</div>
<div class="card card-availibility card-report-weekly d-none">
    <div class="setting-row"> 
        <div class="date-col">
            <span>Monday</span>
        </div>
        <div class="availibility-col">
            <span class="unavailable-text">Unavailable</span>
            <div class="action-box">
                <span class="icon"><img src="{{asset('assets/images/add.svg')}}" alt=""></span>
                <span class="icon"><img src="{{asset('assets/images/copy-outline.svg')}}" alt=""></span>
            </div>
        </div>
    </div>
    <div class="setting-row">
        <div class="date-col">
            <span>Tuesday</span>
        </div>
        <div class="availibility-col">
            <span class="unavailable-text">Unavailable</span>
            <div class="action-box">
                <span class="icon"><img src="{{asset('assets/images/add.svg')}}" alt=""></span>
                <span class="icon"><img src="{{asset('assets/images/copy-outline.svg')}}" alt=""></span>
            </div>
        </div>
    </div>
    <div class="setting-row">
        <div class="date-col">
            <span>Wednesday</span>
        </div>
        <div class="availibility-col">
            <ul class="list availibility-times-list">
                <li>
                    <div class="time-box">
                        <span class="time">09:00 AM</span>
                        <span class="close-icon">&times;</span>
                    </div>
                </li>
                <li>
                    <div class="time-box">
                        <span class="time">09:00 AM</span>
                        <span class="close-icon">&times;</span>
                    </div>
                </li>
                <li>
                    <div class="time-box">
                        <span class="time">09:00 AM</span>
                        <span class="close-icon">&times;</span>
                    </div> 
                </li>
            </ul>
            <div class="action-box">
                <span class="icon"><img src="{{asset('assets/images/add.svg')}}" alt=""></span>
                <span class="icon"><img src="{{asset('assets/images/copy-outline.svg')}}" alt=""></span>
            </div>
        </div>
    </div>
</div>
<button class="btn btn-add-schedule">&plus; Add another schedule</button>

        
       
@endsection 
@section('extra-js')
<script src="{{asset('assets/js/schedule.js')}}"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
@endsection