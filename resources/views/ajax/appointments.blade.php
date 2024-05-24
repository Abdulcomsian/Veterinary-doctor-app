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
                      <span  class="slot slot-list" data-wk-id="{{$routine['wk_id']}}" data-as-id="{{$routine['as_id']}}">{{$time}}</span>
                      @endforeach
                  </div>
                  @endif
                  
                  

              </div>

              @endif