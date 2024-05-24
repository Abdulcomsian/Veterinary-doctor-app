@extends('layouts.admin')
@section('title') Dashboard @endsection
@section('extra-css') 
<link rel="stylesheet" href="{{asset('assets/css/appointment.css')}}" />
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
@endsection
@section('main-content')
<div class="search-filter-box">
    <div class="icon-input">
      <img src="/assets/images/searchIcon.svg" alt="" />
      <input
        class="form-control serachAppointments"
        type="search"
        placeholder="Search by pet name/Mobile No. "
      />
    </div>
    <select class="form-select" aria-label="Default select example">
      <option selected>Today</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
</div>
<div class="card card-main">
  <div class="card appointment-content">
    <div class="appointment-box">
      <div class="appointment-time">
        <p class="time">08th June 2024, Wednesday</p>
        <p class="total-appointments">(15 Appointments)</p>
      </div>
      <div class="appointment-status">
        <p class="status status-consulted">Consulted</p>
        <p class="status status-running">Running</p>
        <p class="status status-upcoming">Upcoming</p>
        <div class="calender-icon">
          <img src="/assets/images/Calendar-purple.svg" alt="" />
        </div>
      </div>
    </div>

    <ul class="list list-appointments">
      <li class="list-item item-appointment">
        <div class="time">09:00 AM</div>
        <div class="item-content-box isExpended">                
          <div class="consultation-card-wrapper expendable ">
            <div class="card consultation-card left-border-green">
              <div class="pet-img-box">
                <img
                  src="/assets/images/taylor-8Vt2haq8NSQ-unsplash 2.png"
                  alt=""
                />
              </div>
              <div class="consultation-info">
                <span>Pet name</span>
                <span class="dot">&#x2022;</span>
                <span>Remote Consultations</span>
              </div>
              <span class="chevron-down-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-chevron-down"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"
                  />
                </svg>
              </span>
            </div>
          </div>
          <div class="appointment-card-body">
              <div>
                <p class="title">Pet Name</p>
                <p class="desc">Hachiko</p>
              </div>
              <div>
                <p class="title">Medical History</p>
                <p class="desc">N/A</p>
              </div>
              <div>
                <p class="title">Mobile No.</p>
                <p class="desc">+1 9876543210</p>
              </div>
              <div>
                <p class="title">Age</p>
                <p class="desc">5 Years</p>
              </div>
              <div class="img-col">
                <p class="title">Picture</p>
                <div class="pictures-box">
                  <img
                    src="/assets/images/taylor-8Vt2haq8NSQ-unsplash 2.png"
                    alt=""
                  />
                </div>
              </div>
              <div class="btn-col">
                <button class="btn btn--purple-outline">Follow up</button>
              </div>
              <div>
                <p class="title">Breed</p>
                <p class="desc">Golden Retriever</p>
              </div>
            </div>
        </div>
      </li>
      <li class="list-item item-appointment">
        <div class="time">09:00 AM</div>
        <div class="item-content-box ">
          <div class="consultation-card-wrapper expendable">
            <div class="card consultation-card left-border-green">
              <div class="pet-img-box">
                <img
                  src="/assets/images/taylor-8Vt2haq8NSQ-unsplash 2.png"
                  alt=""
                />
              </div>
              <div class="consultation-info">
                <span>Pet name</span>
                <span class="dot">&#x2022;</span>
                <span>Remote Consultations</span>
              </div>
              <div class="badge badge--light-blue">Basic</div>
              <span class="chevron-down-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-chevron-down"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"
                  />
                </svg>
              </span>
            </div>
          </div>
          <div class="appointment-card-body">
            <div>
              <p class="title">Pet Name</p>
              <p class="desc">Hachiko</p>
            </div>
            <div>
              <p class="title">Medical History</p>
              <p class="desc">N/A</p>
            </div>
            <div>
              <p class="title">Mobile No.</p>
              <p class="desc">+1 9876543210</p>
            </div>
            <div>
              <p class="title">Age</p>
              <p class="desc">5 Years</p>
            </div>
            <div class="img-col">
              <p class="title">Picture</p>
              <div class="pictures-box">
                <img
                  src="/assets/images/taylor-8Vt2haq8NSQ-unsplash 2.png"
                  alt=""
                />
              </div>
            </div>
            <div class="btn-col">
              <button class="btn btn--purple-outline">Follow up</button>
            </div>
            <div>
              <p class="title">Breed</p>
              <p class="desc">Golden Retriever</p>
            </div>
          </div>  
        </div>
      </li>
      <li class="list-item item-appointment">
        <div class="time">09:00 AM</div>
        <div class="item-content-box ">
          <div class="consultation-card-wrapper expendable">
            <div class="card consultation-card left-border-orange">
              <div class="pet-img-box">
                <img
                  src="/assets/images/taylor-8Vt2haq8NSQ-unsplash 2.png"
                  alt=""
                />
              </div>

              <div class="consultation-info">
                <span>Pet name</span>
                <span class="dot">&#x2022;</span>
                <span>Remote Consultations</span>
              </div>
              <div class="badge badge--green">Comprehensive</div>
              <div class="badge badge--orange">Premium</div>
              <span class="chevron-down-icon">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-chevron-down"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"
                  />
                </svg>
              </span>
            </div>
          </div>
          <div class="appointment-card-body">
            <div>
              <p class="title">Pet Name</p>
              <p class="desc">Hachiko</p>
            </div>
            <div>
              <p class="title">Medical History</p>
              <p class="desc">N/A</p>
            </div>
            <div>
              <p class="title">Mobile No.</p>
              <p class="desc">+1 9876543210</p>
            </div>
            <div>
              <p class="title">Age</p>
              <p class="desc">5 Years</p>
            </div>
            <div class="img-col">
              <p class="title">Picture</p>
              <div class="pictures-box">
                <img
                  src="/assets/images/taylor-8Vt2haq8NSQ-unsplash 2.png"
                  alt=""
                />
              </div>
            </div>
            <div class="btn-col">
              <button class="btn btn--purple-outline">Follow up</button>
            </div>
            <div>
              <p class="title">Breed</p>
              <p class="desc">Golden Retriever</p>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <table id="appointments-Table" class="display" >
          <thead>
            <tr>
              <th class="header">Patient Name</th>
              <th class="header"></th>
              <th class="header">ID</th>
              <th class="header">Appointment</th>
              <th class="header">Service</th>
              <th class="header">Mobile No.</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="img-col">
                <figure class="image-box">
                  <img src="{{asset('assets/images/table-appointment.png')}}" alt="">
                </figure>
                <span class="petname">Pet Name</span>
              </td>
              <td class="badge-col">
                <div class="badge badge--light-blue">Basic</div>
              </td>
              <td>#54261</td>
              <td>09/07/2022 | 9:00 AM</td>
              <td>Remote Consultations</td>
              <td>+1 9876543210</td>
            </tr>
            <tr>
              <td class="img-col">
                <figure class="image-box">
                  <img src="{{asset('assets/images/table-appointment.png')}}" alt="">
                </figure>
                <span class="petname">Pet Name</span>
              </td>
              <td class="badge-col">
                <div class="badge badge--green">Comprehensive</div>
              </td>
              <td>#54261</td>
              <td>09/07/2022 | 9:00 AM</td>
              <td>Remote Consultations</td>
              <td>+1 9876543210</td>
            </tr>
            <tr>
              <td class="img-col">
                <figure class="image-box">
                  <img src="{{asset('assets/images/table-appointment.png')}}" alt="">
                </figure>
                <span class="petname">Pet Name</span>
              </td>
              <td class="badge-col">
                <div class="badge badge--orange">Premium</div>
              </td>
              <td>#54261</td>
              <td>09/07/2022 | 9:00 AM</td>
              <td>Remote Consultations</td>
              <td>+1 9876543210</td>
            </tr>
          </tbody>
        </table>
</div>

        
       
@endsection 
@section('extra-js')
<script src="{{asset('assets/js/appointments.js')}}"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
@endsection