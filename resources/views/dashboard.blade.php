@extends('layouts.admin')
@section('title') Dashboard @endsection
@section('extra-css') 
<link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}" />
@endsection
@section('main-content')
        <div class="grid main-content-wrapper">
          <div class="stats-box">
            <div class="dr-container">
              <h4 class="greetings-text">Good Morning,</h4>
              <p class="dr-name text--purple">Dr. Meg Summer</p>
              <p class="dr-desc">
                Here your important reports and task please <br />
                check your appointment
              </p>
              <img src="/assets/images/dr-image.svg" class="dr-image" alt="" />
            </div>
            <div class="stats-cards">
              <div class="stat stats-patients">
                <img src="/assets/images/stats-icon.svg" alt="" />
                <span class="number">2100</span>
                <p class="stat-title">Total Patient</p>
                <p class="date-utill">Till Today</p>
              </div>
              <div class="stat stats-appointments">
                <img src="/assets/images/Calendar.svg" alt="" />
                <span class="number">2100</span>
                <p class="stat-title">Total Patient</p>
                <p class="date-utill">Till Today</p>
              </div>
              <div class="stat stats-consulted">
                <img src="/assets/images/patients-stat-icon.svg" alt="" />
                <span class="number">2100</span>
                <p class="stat-title">Total Patient</p>
                <p class="date-utill">Till Today</p>
              </div>
            </div>
          </div>
          <div class="booking-box">
            <div id="calendar-container"></div>
            <div class="list-timeline-wrapper">
              <ul class="list list-timeline timeline">
                <li class="list-item">
                  <div class="appointed-time">09:00 AM</div>
                  <div class="consultation-card-wrapper">
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
                    </div>
                  </div>
                </li>
                <li class="list-item">
                  <div class="appointed-time">09:00 AM</div>
                  <div class="consultation-card-wrapper">
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
                    </div>
                  </div>
                </li>
                <li class="list-item">
                  <div class="appointed-time">09:00 AM</div>
                  <div class="consultation-card-wrapper">
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
                    </div>
                  </div>
                </li>
                <li class="list-item">
                  <div class="appointed-time">09:00 AM</div>
                </li>
                <li class="list-item">
                  <div class="appointed-time">09:00 AM</div>
                  <div class="consultation-card-wrapper">
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
                        <span>Medication Management</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-item next-appointment">
                  <div class="appointed-time">09:00 AM</div>
                  <div class="consultation-card-wrapper">
                    <div class="card consultation-card">
                      <div class="pet-img-box">
                        <img
                          src="/assets/images/taylor-8Vt2haq8NSQ-unsplash 2.png"
                          alt=""
                        />
                      </div>
                      <div class="consultation-info">
                        <span>Pet name</span>
                        <span class="dot">&#x2022;</span>
                        <span>Medication Management</span>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-item">
                  <div class="appointed-time next-appointment">09:00 AM</div>
                  <div class="consultation-card-wrapper">
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
                        <span>Medication Management</span>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="list list-appointments">
                <li class="list-item">
                  <div class="time">09:00 AM</div>
                  <div class="consultation-card-wrapper">
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
                    </div>
                  </div>
                </li>
              </ul>
              <div class="total-appointments">
                <div class="total">
                  <span class="num">15</span> Appointments today
                </div>
                <a href="#" class="link text--purple">View all</a>
              </div>
            </div>
          </div>
        </div>
@endsection
@section('extra-js')
<script src="{{asset('assets/js/calender.js')}}"></script>
@endsection
