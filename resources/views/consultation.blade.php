@php
    session(['activeMenu' => 'consultation']);
@endphp

@extends('layout')
@section('content')
@section('title', 'Consultation | Ravelware Technology Indonesia');
    <div class="content">
      <div class="consultation py-5">
        <div class="container">
          <div class="row">
            <h2 class="title title-xl color-primary-neutral-100 text-center mb-5 col-md-6 offset-md-3">GET MORE DONE WITH THE RIGHT PACKAGE</h2>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="box p-5">
                <h3 class="title title-lg text-center weight-700 mb-4">Monitoring</h3>
                <p class="mb-4 text-center">Everything you need to get more done with what you already have.</p>
                <div class="mb-4 text-center">
                  <a href="/consult-date" class="btn-lg btn-black px-4 d-inline-flex align-items-center position-relative">Contact Now</a>
                </div>
                <ul class="list-unstyled mb-0">
                  <li>
                    <p class="mb-0 d-flex align-items-start">
                      <img src="{{asset('img/tick-square.svg')}}">
                      <span>Real-time monitoring of shop floor operations on any device.</span>
                    </p>
                  </li>
                  <li>
                    <p class="mb-0 d-flex align-items-start">
                      <img src="{{asset('img/tick-square.svg')}}">
                      <span>Comprehensive monitoring of production efficiency: OEE, throughput , downtime cause and quality.</span>
                    </p>
                  </li>
                  <li>
                    <p class="mb-0 d-flex align-items-start">
                      <img src="{{asset('img/tick-square.svg')}}">
                      <span>Thorough reporting and alerting capabilities with customizable roles and permissions.</span>
                    </p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box p-5">
                <h3 class="title title-lg text-center weight-700 mb-4">Analytics</h3>
                <p class="mb-4 text-center">Analytical capacities that go above and beyond to get your data working for you.</p>
                <div class="mb-4 text-center">
                  <a href="/consult-date" class="btn-lg btn-black px-4 d-inline-flex align-items-center position-relative">Contact Now</a>
                </div>
                <ul class="list-unstyled mb-0">
                  <li>
                    <p class="mb-0 d-flex align-items-start">
                      <img src="{{asset('img/tick-square.svg')}}">
                      <span>Real-time monitoring of your shop floor. Plus a detailed overview of your operations with charts, trends, and reports.</span>
                    </p>
                  </li>
                  <li>
                    <p class="mb-0 d-flex align-items-start">
                      <img src="{{asset('img/tick-square.svg')}}">
                      <span>Automated email reports, business intelligence APIs, ERPs and BI integration.</span>
                    </p>
                  </li>
                  <li>
                    <p class="mb-0 d-flex align-items-start">
                      <img src="{{asset('img/tick-square.svg')}}">
                      <span>Quartely business review (QBR) with an expert in operational data.</span>
                    </p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box p-5">
                <h3 class="title title-lg text-center weight-700 mb-4">Enterprise</h3>
                <p class="mb-4 text-center">Prioritized opportunities and automated roadmaps to get your data working for you.</p>
                <div class="mb-4 text-center">
                  <a href="/consult-date" class="btn-lg btn-black px-4 d-inline-flex align-items-center position-relative">Contact Now</a>
                </div>
                <ul class="list-unstyled mb-0">
                  <li>
                    <p class="mb-0 d-flex align-items-start">
                      <img src="{{asset('img/tick-square.svg')}}">
                      <span>Insight engine to find and prioritize improvement opportunities in your data.</span>
                    </p>
                  </li>
                  <li>
                    <p class="mb-0 d-flex align-items-start">
                      <img src="{{asset('img/tick-square.svg')}}">
                      <span>Automated roadmaps and action plans to achieve efficiency gains.</span>
                    </p>
                  </li>
                  <li>
                    <p class="mb-0 d-flex align-items-start">
                      <img src="{{asset('img/tick-square.svg')}}">
                      <span>Thorough monitoring and robust reporting with customizable roles and permissions.</span>
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="step-consultation bg-primary-neutral-100 py-5 mt-100">
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
              </li>
            </ul>
          </div>
        </div>
        <div class="container">
          <div class="row faq mt-100">
            <div class="col-md-4">
              <span class="btn-md btn-black px-3 d-inline-flex align-items-center weight-400">Client</span>
              <h2 class="title title-xl color-primary-neutral-100 mt-4">Frequently Asked Questions</h2>
            </div>
            <div class="col-md-7 offset-md-1">
              <div class="accordion" id="accordionConsultation">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      I have more questions. Who can I speak to?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionConsultation">
                    <div class="accordion-body">
                      If you have more questions - reach out to your supervisor, human resources team, or work, health and safety representative.
                      <br>
                      Alternatively, you can send us your questions at <a href="" class="color-primary-neutral-100">support@ravelware.co</a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      How can I feel confident that my responses will actually be used to effect change?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionConsultation">
                    <div class="accordion-body">
                      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How will we receive the results of the survey?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionConsultation">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      What will survey responses be used for?
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionConsultation">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Are survey responses kept confidential?
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionConsultation">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection