@extends('layouts.owner')
@section('title')Profile @endsection
@section('extra-css') 
  <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}" />
@endsection
@section('main-content')
    <section class="section-book-appointment mt-3">
      <div class="container">
        <div class="auth-profile-layout">
          <header class="section-header">
            <h2 class="secondary-heading">Book Your Appointment</h2>
            <p class="short-desc">
              Lorem ipsum dolor sit amet consectetur. Sed donec purus
              pellentesque aliquet nunc.
            </p>
          </header>
          <div class="card mb-5 card-content-wrapper">
            <div class="steps-container">
              <div class="step step-1 step-active">
                <span class="step-num-box">1 </span>
                <div class="step-title">Pet-profile</div>
              </div>
              <div class="step step-2">
                <span class="step-num-box">2 </span>
                <div class="step-title">Appointment</div>
              </div>
              <div class="step step-3">
                <span class="step-num-box">3 </span>
                <div class="step-title">Payment</div>
              </div>
              <div class="step step-4">
                <span class="step-num-box">4 </span>
                <div class="step-title">Confirmation</div>
              </div>
            </div>

            <!-- STEP CONTENT 1 -->
            <div class="step-content step-content-1 mb-5">
              <h2 class="detail-title">Pet Details</h2>
              <p class="detail-desc">
                Lorem ipsum dolor sit amet consectetur adipisc.
              </p>
              <form action="">
                <div class="grid grid--2-cols grid-gap">
                  <div class="input-wrapper">
                    <label for="name" class="form-label">Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="Pet name"
                    />
                  </div>
                  <div class="input-wrapper">
                    <label for="age" class="form-label">Age</label>
                    <input
                      type="number"
                      class="form-control"
                      id="age"
                      placeholder="Pet age"
                    />
                  </div>
                  <div class="input-wrapper">
                    <label for="breed" class="form-label">breed</label>
                    <input
                      type="text"
                      class="form-control"
                      id="breed"
                      placeholder="Pet breed"
                    />
                  </div>
                  <div class="input-wrapper">
                    <label for="history" class="form-label">Medical History</label>
                    <div class="form-control input-group mb-3">
                      <input type="text" class="form-control medical-history-filename" placeholder="Filename" aria-label="filename" aria-describedby="button-addon2" readonly/>
                      <span class="btn btn--lightgray medical-history-area medical-history-btn"><img src="{{asset('assets/images/attach.svg')}}" alt="" /></span>
                      <input type="file" class="d-none"  name="medical-history" id="medical-history" onchange="handleFileChange(event)">
                    </div>

                    <!-- <div class="form-control input-group mb-3  medical-history-area medical-history-btn d-flex justify-content-center py-3">
                      <button type="button" class="btn btn--lightgray"><img  src="/assets/images/attach.svg" alt="" /></button>
                      <input type="file" class="d-none" name="medical-histor" id="medical-history">
                    </div> -->
                  </div>
                </div>
              </form>
              <div class="title size-image-text">
                <!-- <h4 class="title">Pictures (1/5)</h4> -->
                <p class="title">(Picture Size should not greater then 5mb)</p>
              </div>
              <div class="upload">
              <div id="pet-pictures" class="dropzone"></div>
                <!-- <div id="image-container"></div>
                <label for="file-input" class="add-btn-upload">
                  <img src="/assets/images/add-outline.svg" alt="" />
                </label>
                <input type="file" class="d-none" id="file-input" accept="image/*" multiple/> -->
              </div>
              <h4 class="title">
                Has your pet been physically seen by Dr. Summers before?
              </h4>
              <div class="already-seen-box my-2">
                <div>
                  <input type="radio" name="already-seen" id="yes" value="yes"/>
                  <label for="yes" class="check">Yes</label>
                </div>
                <div>
                  <input type="radio" name="already-seen" id="no" value="no" checked/>
                  <label for="no" class="check">No</label>
                </div>
              </div>
              @php
                $previousDate = \Carbon\Carbon::now()->subDay(1)->format('Y-m-d');
              @endphp 
              <input type="date" class="form-control date-input" id="previous-appointment-date" max="{{$previousDate}}"/>
            </div>

            <!-- STEP CONTENT 2 -->
            <div class="step-content step-content-2 mb-5 d-none">
              <h2 class="detail-title">Appointment Date</h2>
              <p class="detail-desc">
                Lorem ipsum dolor sit amet consectetur adipisc.
              </p>
              <!-- Slider main container -->
              <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper slider-appointments">
                  <!-- Slides -->
                  @php    
                    $today = \Carbon\Carbon::now()->format('Y-m-d');
                    $futureDate = \Carbon\Carbon::now()->addDays(6)->format('Y-m-d');
                    $dateRange = \Carbon\CarbonPeriod::create($today, $futureDate);
                  @endphp
                  @foreach($dateRange as $index => $dr)
                    @php
                      $currentDate = $dr->format('Y-m-d');
                      $dayOfWeek = $dr->format('l');
                      $availableSchedule = $availabilityScheduleCount->first(function($schedule) use ($currentDate){
                                                  return $schedule->date == $currentDate;
                                          });
                                        
                      $totalSchedule = 0;
                      if(!is_null($availableSchedule))
                      {
                        $totalSchedule = $availableSchedule->totalAppointments;
                      }else{
                        $daySchedule = $weeklyScheduleCount->first(function($schedule) use ($dayOfWeek){
                                                  return $schedule->weekday == $dayOfWeek;
                                          });

                        if(!is_null($daySchedule))
                        {
                          $totalSchedule = $daySchedule->totalAppointments;
                        }
                      }                             
                  @endphp 


                  <div class="swiper-slide">
                    <div class="card appoinment-date-card appointment-date @if($index ==0) appointment-selected @endif" data-appointment-date="{{$dr->format('y-m-d')}}">
                      <span class="date">{{ $dr->format('d M, Y | D') }}</span>
                      <span class="slots-text text--green" >{{ $totalSchedule }} lots available</span>
                    </div>
                  </div>
                  @endforeach
                  
                </div>
              </div>
              <!-- If we need navigation buttons -->
              <div class="navigation-btns-container">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
              </div>

              <div class="appointment-section">
              
              <div class="seleted-apointment-date">
                <p class="mb-0">{{\Carbon\Carbon::now()->format('d M, Y | D') }}</p>
              </div>
                    

              <div class="appointment-time-box">
                
              @if(($todaySchedule->count() == 0 && $todayWeekSchedule->count() == 0 ) ||  ($todaySchedule->count() && $todaySchedule[0]->is_available == 0) )
                  <div class="time-afternoon">    
                    <h3>No Slot Available</h3>
                  </div>
                @else

                    

                  @php 
                     $schedules = $todaySchedule->count() ? $todaySchedule : $todayWeekSchedule;
                     $morning = \Carbon\Carbon::parse("06:00:00");
                     $afternoon = \Carbon\Carbon::parse("12:00:00");
                     $evening = \Carbon\Carbon::parse("18:00:00");
                     $night = \Carbon\Carbon::parse("21:00:00");
                  @endphp
                    

                  @php
                      $scheduleList = [];
                      foreach( $schedules as $schedule )
                      {
                        $scheduleTime = \Carbon\Carbon::parse($schedule->time);
                        if($scheduleTime->gt(\Carbon\Carbon::parse('05:59:00')) &&  $scheduleTime->lt($afternoon)){

                                $scheduleList['morning'][] = [
                                                                'time' => $schedule->time , 
                                                                'wk_id' => $schedule->day ? $schedule->id : null,
                                                                'as_id' => $schedule->day ? null : $schedule->id
                                                          ];

                        
                        
                        }elseif($scheduleTime->gt($afternoon) && $scheduleTime->lt($evening)){
                                $scheduleList['afternoon'][] =  [         
                                                                'time' => $schedule->time , 
                                                                'wk_id' => $schedule->day ? $schedule->id : null,
                                                                'as_id' => $schedule->day ? null : $schedule->id
                                                            ];
                        }elseif($scheduleTime->gt($evening) && $scheduleTime->lt($night)){
                                $scheduleList['evening'][] =  [
                                                                        'time' => $schedule->time , 
                                                                        'wk_id' => $schedule->day ? $schedule->id : null,
                                                                        'as_id' => $schedule->day ? null : $schedule->id
                                                            ];
                        }else{
                                $scheduleList['night'][] =  [
                                                                'time' => $schedule->time , 
                                                                'wk_id' => $schedule->day ? $schedule->id : null,
                                                                'as_id' => $schedule->day ? null : $schedule->id
                                                            ];
                        }
                      }

                @endphp 


                @if(array_key_exists('morning' , $scheduleList) && count($scheduleList['morning']) > 0)
                  <div class="time-afternoon">
                      <div class="time-afternoon-box">
                        <img src="{{asset('assets/images/morning.png')}}" width="36px" alt="" />
                        <span class="slot">Morning</span>
                      </div>
                      <div class="time-slots">
                        @foreach($scheduleList['morning'] as $routine)
                          @php
                            $time = \Carbon\Carbon::parse($routine['time'])->format('g:i A');
                          @endphp
                        <span class="slot slot-list" data-wk-id="{{$routine['wk_id']}}" data-as-id="{{$routine['as_id']}}">{{$time}}</span>
                        @endforeach
                      </div>
                  </div>
                  @endif

                  @if(array_key_exists('afternoon' , $scheduleList) && count($scheduleList['afternoon']) > 0)
                  <div class="time-afternoon">
                      <div class="time-afternoon-box">
                          <img src="{{asset('assets/images/sun.svg')}}" alt="" />
                          <span class="slot">Afternoon</span>
                      </div>
                      <div class="time-slots">
                        @foreach($scheduleList['afternoon'] as $routine)
                          @php
                            $time = \Carbon\Carbon::parse($routine['time'])->format('g:i A');
                          @endphp
                        <span class="slot slot-list" data-wk-id="{{$routine['wk_id']}}" data-as-id="{{$routine['as_id']}}">{{$time}}</span>
                        @endforeach
                      </div>
                  </div>
                  @endif

                  @if(array_key_exists('evening' , $scheduleList) && count($scheduleList['evening']) > 0)
                  <div class="time-afternoon">
                      <div class="time-afternoon-box">
                          <img src="{{asset('assets/images/cloud-fog.svg')}}" alt="" />
                          <span class="slot">Evening</span>
                      </div>
                      <div class="time-slots">
                        @foreach($scheduleList['evening'] as $routine)
                          @php
                            $time = \Carbon\Carbon::parse($routine['time'])->format('g:i A');
                          @endphp
                        <span class="slot slot-list" data-wk-id="{{$routine['wk_id']}}" data-as-id="{{$routine['as_id']}}">{{$time}}</span>
                        @endforeach
                      </div>
                  </div>
                  @endif

                  @if(array_key_exists('night' , $scheduleList) && count($scheduleList['night']) > 0)
                  <div class="time-afternoon">
                      <div class="time-afternoon-box">
                        <img src="{{asset('assets/images/cloud-fog.svg')}}" alt="" />
                        <span class="slot">Evening</span>
                      </div>
                      @foreach($scheduleList['night'] as $routine)
                          @php
                            $time = \Carbon\Carbon::parse($routine['time'])->format('g:i A');
                          @endphp
                          <span class="slot slot-list" data-wk-id="{{$routine['wk_id']}}" data-as-id="{{$routine['as_id']}}">{{$time}}</span>
                      @endforeach
                  </div>
                  @endif
                  
                  

              </div>

              @endif

              </div>

    

            <!-- STEP CONTENT 3 -->
            <div class="step-content step-content-3 mb-5 d-none">
              <h2 class="detail-title">Appointment Summary</h2>
              <p class="detail-desc">
                Please review your appointment details before proceeding to
                payment.
              </p>
              <div class="card remote-consultation-card">
                <h3 class="title-consultation">Remote Consultations</h3>
                <span class="badge badge--light-blue">
                  <span class="consultation-date">13 Mar, 2024 | Wed</span>
                  <span class="consultation-time">06:30 PM</span>
                </span>
                <div class="plan-subs-detail-box">
                  <p>Subscription Plan</p>
                  <p>Comprehensive</p>
                </div>
                <div class="plan-total-amount-box">
                  <p class="amount-label">
                    Total <span>(Inclusive of VAT)</span>
                  </p>
                  <p class="total-amount">$40.00</p>
                </div>
              </div>
              <div class="form-check term-condition-wrapper">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="flexCheckDefault"
                />
                <label
                  class="form-check-label term-condition-label"
                  for="flexCheckDefault"
                >
                  I have read and agree to our
                  <a href="#" class="link term-link">terms & conditions</a> and
                  <a href="#" class="link term-link">privacy policy</a>
                </label>
              </div>
            </div>

            <!-- STEP CONTENT 4 -->
            <div class="step-content step-content-4 mb-5 d-none">
              <h2 class="detail-title">Payment</h2>
              <p class="detail-desc">
                Please review your appointment details before proceeding to
                payment.
              </p>
            </div>

            <!-- STEP CONTENT 5 -->
            <div class="step-content step-content-5 mb-5 d-none">
              <header class="step-header">
                <img
                  src="/assets/images/appointment-completed-icon.svg"
                  alt=""
                />
                <h2 class="detail-title">Your Appointment is Booked</h2>
                <p class="detail-desc">
                  Your appointment details have been sent to you by SMS/Email
                </p>
              </header>
              <div class="card card-appointment-booked">
                <div class="card-header">Appointment Details</div>
                <div class="card-body">
                  <div class="grid media-info">
                    <img src="/assets/images/pet-icon.svg" alt="" />
                    <p class="info-title">Pet Name</p>
                    <p class="info-desc">Hachiko</p>
                  </div>
                  <div class="grid media-info">
                    <img src="/assets/images/ion_calendar-outline.svg" alt="" />
                    <p class="info-title">Appointment Time</p>
                    <p class="info-desc">13 Mar, 2024 | Wed, 06:30 PM</p>
                  </div>
                  <div class="grid media-info">
                    <img src="/assets/images/pet-icon.svg" alt="" />
                    <p class="info-title">Doctor Name</p>
                    <div class="info-desc">
                      Dr. Meg Summer at Clinic Name (Location)
                    </div>
                  </div>
                  <div class="grid media-info">
                    <img src="/assets/images/pet-icon.svg" alt="" />
                    <p class="info-title">Pet Name</p>
                    <div class="info-desc">
                      $40 <span class="isPaid">Paid</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="step-navigator-buttons mb-5">
            <button class="btn btn-exit">Exit</button>
            <button class="btn btn--purple-outline btn-perv d-none">
              Previous step
            </button>
            <button class="btn btn--purple btn-next mx-3">Next<i class="fa-solid fa-spinner fa-spin mx-2 progress d-none"></i></button>
          </div>
          <div class="appoitment-booked-action-box mb-5 d-none">
            <button class="btn btn--icon btn-cancel-appointment">
              <span class="icon">&times;</span> Cancel Appointment
            </button>
            <button class="btn btn--icon">
              <span class="icon"
                ><img
                  src="/assets/images/ion_calendar-outline.svg"
                  alt="" /></span
              >Reschedule
            </button>
            <button class="btn btn--purple">Return to Home</button>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('extra-js') 
  @include('js.profile')
  <script>
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#pet-pictures", {
      url : "#",
      autoProcessQueue: false, 
      parallelUploads: 5, 
      maxFiles: 5, 
      acceptedFiles: 'image/*', 
      addRemoveLinks: true, 
    });
    

    function handleFileChange(e)
    {
      let filename = e.target.files[0].name;
      document.querySelector(".medical-history-filename").value = filename; 
    }

    $(document).on("click" , ".appointment-date" , function(e){
      alert("I am clicked")
      let appointmentDate = this.dataset.appointmentDate;
      let url = "{{route('getAppointments')}}";
      let form = new FormData;
      let html = document.querySelector(".appointment-section")
      form.append('appointmentDate' , appointmentDate );
      updateFormData(url , form ,  2 , null  , null , null , html)
    });


  </script>
@endsection