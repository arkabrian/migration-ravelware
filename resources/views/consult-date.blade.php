@php
    session(['activeMenu' => 'consultation']);
@endphp

@extends('layout')
@section('content')
    <div class="content">
      <div class="consultation consultation-step">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <h2 class="mt-100 title title-2xl mb-4">Talk to an expert</h2>
              <p>Our customer success team will gladly help you figure out how Worximity can empower you and your team with data that works. Tools to help you get more done.</p>
            </div>
            <div class="col-md-6 offset-md-1">
              <div class="p-4 bg-primary-neutral-20" id="step-1">
                <label class="font-sm mb-3">Select D Day for meeting</label>
                <div class="calendar-event">
                  <div id="calendar"></div>
                </div>
              </div>

              <div class="p-4 d-none-step" id="step-2">
                <div class="row contact-us">
                  <div class="mb-4 col-md-12">
                    <label for="" class="form-label">Meeting Duration</label>
                    <input type="text" class="form-control color-primary-neutral-70" id="" aria-describedby="" value="30 Minutes" readonly="">
                  </div>
                  <div class="mb-4 col-md-12">
                    <label for="" class="form-label">What time work best?</label>
                    <div class="row time-list">
                      <div class="col-md-3">
                        <input id="01" type="radio" name="time" value="1"  />
                        <label for="01">7.00 AM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="02" type="radio" name="time" value="1" />
                        <label for="02">7.30 AM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="03" type="radio" name="time" value="1"  />
                        <label for="03">8.00 AM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="04" type="radio" name="time" value="1" />
                        <label for="04">8.30 AM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="05" type="radio" name="time" value="1"  />
                        <label for="05">9.00 AM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="06" type="radio" name="time" value="1" />
                        <label for="06">9.30 AM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="07" type="radio" name="time" value="1"  />
                        <label for="07">10.00 AM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="08" type="radio" name="time" value="1" />
                        <label for="08">10.30 AM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="09" type="radio" name="time" value="1"  />
                        <label for="09">11.00 AM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="10" type="radio" name="time" value="1" />
                        <label for="10">11.30 AM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="11" type="radio" name="time" value="1"  />
                        <label for="11">12.00 PM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="12" type="radio" name="time" value="1" />
                        <label for="12">12.30 PM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="13" type="radio" name="time" value="1"  />
                        <label for="13">1.00 PM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="14" type="radio" name="time" value="1" />
                        <label for="14">1.30 PM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="15" type="radio" name="time" value="1"  />
                        <label for="15">2.00 PM</label>
                      </div>
                      <div class="col-md-3">
                        <input id="16" type="radio" name="time" value="1" />
                        <label for="16">2.30 PM</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mt-100">
                  <a href="#" id="back-2" class="weight-700 d-flex align-items-center text-decoration-none color-primary-neutral-100"><img src="{{asset('img/icon/arrow-right-block.svg')}}" class="rotate-180 me-2">Back</a>
                </div>
              </div>

              <div class="b-primary-20 p-4 d-none-step form-info" id="time1">
                <h2 class="title title-md weight-700 mb-4">Your Information</h2>
                <div class="d-flex justify-content-between">
                  <h4 class="title mb-0 weight-700 title-sm">Thursday, October 10, 2023 | 10.00 Am</h4>
                  <h4 class="title mb-0 weight-700 title-sm d-flex align-items-center"><img src="{{asset('img/icon/location.svg')}}" class="me-2">Zoom Meeting</h4>
                </div>
                <div class="contact-us mt-4">
                  <div class="row">
                    <div class="mb-4 col-md-6">
                      <label for="" class="form-label">First Name*</label>
                      <input type="text" class="form-control" id="" aria-describedby="" placeholder="Your First Name">
                    </div>
                    <div class="mb-4 col-md-6">
                      <label for="" class="form-label">Last Name*</label>
                      <input type="text" class="form-control" id="" aria-describedby="" placeholder="Your Last Name">
                    </div>
                    <div class="mb-4 col-md-6">
                      <label for="" class="form-label">Email*</label>
                      <input type="email" class="form-control" id="" aria-describedby="" placeholder="Your Email">
                    </div>
                    <div class="mb-4 col-md-6">
                      <label for="" class="form-label">Phone Number*</label>
                      <input type="text" class="form-control" id="" aria-describedby="" placeholder="Your Phone Number">
                    </div>
                    <div class="mb-5 col-md-12">
                      <label for="" class="form-label">Company Name</label>
                      <input type="text" class="form-control" id="" aria-describedby="" placeholder="Your company Name">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <a href="#" id="back-3" class="weight-700 d-flex align-items-center text-decoration-none color-primary-neutral-100"><img src="{{asset('img/icon/arrow-right-block.svg')}}" class="rotate-180 me-2">Back</a>
                      <button type="submit" class="btn-lg btn-black px-5 d-flex align-items-center position-relative border-0">Send</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="step-consultation bg-primary-neutral-100 py-5">
          <div class="container">
            <ul class="row mb-0 list-unstyled">
              <li class="col-md-2 d-flex align-items-start justify-content-between">
                <div>
                  <span class="bg-primary-neutral-10 p-2 color-primary-neutral-90">Step 1</span>
                  <h2 class="title title-md weight-700 color-primary-neutral-10 mb-0 mt-4">Schedule Your Consultation</h2>
                </div>
                <img src="{{asset('img/icon/arrow-right-white-sm.svg')}}">
              </li>
              <li class="col-md-2 d-flex align-items-start justify-content-between">
                <div>
                  <span class="bg-primary-neutral-10 p-2 color-primary-neutral-90">Step 2</span>
                  <h2 class="title title-md weight-700 color-primary-neutral-10 mb-0 mt-4">Get Visited for Demo</h2>
                </div>
                <img src="{{asset('img/icon/arrow-right-white-sm.svg')}}">
              </li>
              <li class="col-md-2 d-flex align-items-start justify-content-between">
                <div>
                  <span class="bg-primary-neutral-10 p-2 color-primary-neutral-90">Step 3</span>
                  <h2 class="title title-md weight-700 color-primary-neutral-10 mb-0 mt-4">Proof of Concept (POC) Testing</h2>
                </div>
                <img src="{{asset('img/icon/arrow-right-white-sm.svg')}}">
              </li>
              <li class="col-md-2 d-flex align-items-start justify-content-between">
                <div>
                  <span class="bg-primary-neutral-10 p-2 color-primary-neutral-90">Step 4</span>
                  <h2 class="title title-md weight-700 color-primary-neutral-10 mb-0 mt-4">Price Quotation</h2>
                </div>
                <img src="{{asset('img/icon/arrow-right-white-sm.svg')}}">
              </li>
              <li class="col-md-2 d-flex align-items-start justify-content-between">
                <div>
                  <span class="bg-primary-neutral-10 p-2 color-primary-neutral-90">Step 5</span>
                  <h2 class="title title-md weight-700 color-primary-neutral-10 mb-0 mt-4">Implementation & Deployment</h2>
                </div>
                <img src="{{asset('img/icon/arrow-right-white-sm.svg')}}">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>

  <script>
    $(document).ready(function() {
      $("input[name$='time']").click(function() {
        var test = $(this).val();

        $("div.form-info").hide();
        $("#time" + test).show();
        $("#step-2").hide();
      });

      $("#calendar").datepicker({
        isRTL: true
        }).on('changeDate', function (ev) {
          $("#step-1").hide();
          $("#step-2").show();
      });

      $("#back-2").click(function(){
        $("#step-1").show();
        $("#step-2").hide();
      })

      $("#back-3").click(function(){
        $("#step-2").show();
        $(".form-info").hide();
      })
    });
  </script>

@endsection