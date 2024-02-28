@php
    session(['activeMenu' => 'case_study']);
@endphp

@extends('layout')

@section('content')
@section('title', 'Case Studies | Ravelware Technologies Indonesia');
    <div class="content">
      <div class="case-study">
        <div class="banner">
          <img src="{{asset('img/banner-case-study-01.jpg')}}" class="w-100 h-100 object-fit-cover">
        </div>
        <div class="container">
          <div class="my-100">
            <div class="d-flex align-items-start">
              <div class="left">
                <h3 class="title title-md weight-700 mb-5">Case Study</h3>
                <div class="wrapper-sticky">
                  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-01-tab" data-bs-toggle="pill" data-bs-target="#v-pills-01" type="button" role="tab" aria-controls="v-pills-01" aria-selected="true">All Case Study</button>
                    @foreach($case_studies->reverse() as $case_study)
                      <a class="nav-link" id="v-pills-05-tab" href="case-study/{{$case_study['id']}}">{{$case_study['title']}}</a>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="right">
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-01" role="tabpanel" aria-labelledby="v-pills-01-tab" tabindex="0">
                    <div class="d-flex align-items-center justify-content-between mb-5">
                      {{-- <form>
                        <div class="form-search position-relative">
                          <input type="text" class="form-control" placeholder="Search Case Study" name="">
                          <button type="submit"><img src="{{asset('img/icon/search-normal.svg')}}"></button>
                        </div>
                      </form> --}}
                      <p class="mb-0 weight-700">20 Case Studies Result</p>
                    </div>
                    <h2 class="title title-lg weight-700 mb-5">All Case Study</h2>
                    <ul class="list-unstyled list-resource row">
                      @foreach($case_studies->reverse() as $case_study)
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="case-study/{{$case_study['id']}}" class="card border-0 text-decoration-none">
                            <img src="{{ $case_study['thumbnail'] }}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">{{ $case_study['title'] }}</h2>
                              {{-- <p class="mb-0 mb-4 text-wrap border-0 info">Ravelfleet is one of the solution for activities in the industry. The purpose of our system is to provide a system which can monitor the activity of the truck inside factory parking area and automate the administration process for the fleet activity report.</p> --}}
                              <p class="mb-0 mb-4 text-wrap border-0 info">
                                @if (preg_match("/<p>(.*?)<\/p>/s", $case_study['overview'], $matches))
                                  @php
                                      $content = strip_tags($matches[0]); // Extract content within <p> tags and remove HTML tags
                                      $trimmed_content = mb_substr($content, 0, 285); // Trim content to 285 characters
                                      $display_content = strlen($trimmed_content) < 285 ? $trimmed_content : rtrim($trimmed_content) . '...'; // Add ellipsis if content is longer
                                  @endphp
                                  {!! $display_content !!}
                              @endif
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </div>

                  <div class="tab-pane fade" id="v-pills-02" role="tabpanel" aria-labelledby="v-pills-02-tab" tabindex="0">
                    <h2 class="title title-lg weight-700 mb-3">Smart Factory Safety System</h2>
                    <div id="carouselExampleIndicators" class="carousel slide col-md-6" data-bs-ride="true">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="https://www.ravelware.co/images/image_solution/preview/WhatsApp%20Image%202019-09-10%20at%2010.26.57%20AM%20(4).jpeg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://www.ravelware.co/storage/images/image_solution/original/WhatsApp%20Image%202019-09-10%20at%2010.26.57%20AM%20(4).jpeg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://www.ravelware.co/storage/images/image_solution/original/WhatsApp%20Image%202019-09-10%20at%2010.26.57%20AM%20(3).jpeg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://www.ravelware.co/storage/images/image_solution/original/WhatsApp%20Image%202019-09-10%20at%2010.26.55%20AM.jpeg" alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://www.ravelware.co/storage/images/image_solution/original/WhatsApp%20Image%202019-09-10%20at%2010.26.55%20AM%20(1).jpeg" alt="Fifth slide">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                    <div class="mb-5">
                      <h3 class="title title-md weight-700 mb-2 mt-5">Overview</h3>
                      <p>The concern of safety in the industry is one of the top management priorities. Inside the factory, there are lots of forklifts, gates, and areas where safety aspects need improvement. Ravelzen is a comprehensive solution that focuses on increasing the safety of the work environment in your company.</p>
                    </div>
                    <div class="mb-5">
                      <h3 class="title title-md weight-700 mb-2">Issue</h3>
                      <p>We integrated forklift automation, rolling door, and authentication technology. With our innovation, we can address the following issues:</p>
                        <ol>
                            <li><p>Increase the safety of the forklifts to minimize collisions between forklifts or with humans.</p></li>
                            <li><p>Minimize unauthorized personnel from entering desired areas.</p></li>
                            <li><p>Improve the Standard Operational Procedure (SOP) of areas that need to assort the working elements.</p></li>
                        </ol>
                    </div>
                    <div class="mb-5">
                      <h3 class="title title-md weight-700 mb-2">Solution</h3>
                      <p>Ravelzen offers solutions through the integration of forklift automation, rolling door, and authentication technology to achieve the following:</p>
                      <ul class="list-number">
                        <li><p>Enhanced safety for forklifts to reduce collisions.</p></li>
                        <li><p>Restriction of unauthorized personnel from entering specific areas.</p></li>
                        <li><p>Improvement in Standard Operational Procedures (SOP) for better organization of working elements.</p></li>
                      </ul>
                    </div>
                  </div>
                  
                  <div class="tab-pane fade" id="v-pills-03" role="tabpanel" aria-labelledby="v-pills-03-tab" tabindex="0">
                    <h2 class="title title-lg weight-700 mb-3">Smart Logistic System</h2>
                    <div id="carouselExampleIndicators" class="carousel slide col-md-6" data-bs-ride="true">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="https://www.ravelware.co/images/image_solution/preview/Screen%20Shot%202019-09-10%20at%2010.34.59.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://www.ravelware.co/storage/images/image_solution/original/WhatsApp%20Image%202019-09-10%20at%2010.55.24%20AM.jpeg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://www.ravelware.co/storage/images/image_solution/original/Screen%20Shot%202019-09-10%20at%2010.35.34.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://www.ravelware.co/storage/images/image_solution/original/WhatsApp%20Image%202019-09-10%20at%2010.26.56%20AM%20(3).jpeg" alt="Fourth slide">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                    <div class="mb-5">
                      <h3 class="title title-md weight-700 mb-2 mt-5">Overview</h3>
                      <p>Ravellog is a Smart Logistic System that integrates RFID technology and Internet of Things (IoT) technology. It can be seamlessly integrated with Lean Manufacturing, Lean Warehousing, or the Toyota Production System within a company. This lean-focused solution aims to increase accuracy, reduce human error, and decrease the cycle time of logistics activities.</p>
                    </div>
                    <div class="mb-5">
                      <h3 class="title title-md weight-700 mb-2">Issue</h3>
                      <p>The primary goals of Ravellog are to address the following issues in the logistics domain:</p>
                        <ol>
                            <li><p>Increasing accuracy in logistics operations.</p></li>
                            <li><p>Reducing human errors associated with logistic activities.</p></li>
                            <li><p>Decreasing the cycle time of logistics processes within the company.</p></li>
                        </ol>
                    </div>
                    <div class="mb-5">
                      <h3 class="title title-md weight-700 mb-2">Solution</h3>
                      <p>The impact which we offer in our solution are :/p>
                      <ul class="list-number">
                        <li><p>Seamless integration with legacy or existing applications in our client's system.</p></li>
                        <li><p>Option to operate as a standalone system, providing flexibility in implementation.</p></li>
                      </ul>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-04" role="tabpanel" aria-labelledby="v-pills-04-tab" tabindex="0">
                    <h2 class="title title-lg weight-700 mb-5">Fleet Parking Management System</h2>
                    <div id="carouselExampleIndicators" class="carousel slide col-md-6" data-bs-ride="true">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="https://www.ravelware.co/storage/images/image_solution/original/WhatsApp%20Image%202019-08-23%20at%208.27.05%20PM.jpeg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://www.ravelware.co/storage/images/image_solution/original/WhatsApp%20Image%202019-08-23%20at%208.27.35%20PM.jpeg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://www.ravelware.co/storage/images/image_solution/original/WhatsApp%20Image%202019-08-23%20at%208.27.58%20PM.jpeg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://www.ravelware.co/storage/images/image_solution/original/WhatsApp%20Image%202019-08-23%20at%208.25.44%20PM%20(1).jpeg" alt="Fourth slide">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                    <div class="mb-5">
                      <h3 class="title title-md weight-700 mb-2">Overview</h3>
                      <p>Ravelfleet is a comprehensive solution designed for industry activities, specifically focusing on monitoring truck activities within the factory parking area and automating the administration process for fleet activity reporting.</p>
                    </div>
                    <div class="mb-5">
                      <h3 class="title title-md weight-700 mb-2">Issue</h3>
                      <p>The key issues addressed by Ravelfleet include the need for:</p>
                        <ol>
                            <li><p>Monitoring truck activities efficiently within the factory parking area.</p></li>
                            <li><p>Streamlining and automating the administration process for fleet activity reports.</p></li>
                        </ol>
                    </div>
                    <div class="mb-5">
                      <h3 class="title title-md weight-700 mb-2">Solution</h3>
                      <p>Ravelfleet offers impactful solutions that include:</p>
                      <ul class="list-number">
                        <li><p>Faster data input for improved efficiency.</p></li>
                        <li><p>Optimized parking and loading processes, reducing time and enhancing efficiency.</p></li>
                        <li><p>Shifting from reactive management to progress management in fleet activity.</p></li>
                        <li><p>Minimizing human errors in the administration process.</p></li>
                      </ul>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-05" role="tabpanel" aria-labelledby="v-pills-05-tab" tabindex="0">
                    <h2 class="title title-lg weight-700 mb-5">Smart Lighting System</h2>
                    <div id="carouselExampleIndicators" class="carousel slide col-md-6" data-bs-ride="true">
                      <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                      </div>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="https://www.ravelware.co/images/image_solution/preview/WhatsApp%20Image%202019-08-23%20at%207.59.11%20PM.jpeg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://www.ravelware.co/storage/images/image_solution/original/sega-2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://www.ravelware.co/storage/images/image_solution/original/WhatsApp%20Image%202019-08-23%20at%207.59.30%20PM.jpeg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="https://www.ravelware.co/storage/images/image_solution/original/download.jpeg" alt="Fourth slide">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                    <div class="mb-5">
                      <h3 class="title title-md weight-700 mb-2">Overview</h3>
                      <p>The Smart Lighting System goes beyond typical remote-controlled lighting by offering dynamic adaptive operational levels. Unlike common LEDs and Traditional Lightings that are either on or off, our innovation focuses on maintaining stable lux levels in designated areas based on specific requests. The primary goal of this smart lighting solution is to enhance productivity, safety, energy efficiency, and user comfort in industrial and workplace settings.</p>
                    </div>
                    <div class="mb-5">
                      <h3 class="title title-md weight-700 mb-2">Issue</h3>
                      <p>The challenges addressed by the Smart Lighting System include the limitations of common LEDs and Traditional Lightings, which lack dynamic adaptive operational levels. Additionally, the importance of good lighting for optical task performance in the workplace, especially considering a progressively aging workforce, is recognized.</p>
                    </div>
                    <div class="mb-5">
                      <h3 class="title title-md weight-700 mb-2">Solution</h3>
                      <p>The Smart Lighting System provides innovative solutions to these challenges, aiming to:</p>
                      <ul class="list-number">
                        <li><p>Maintain stable lux levels in designated areas to meet specific requests.</p></li>
                        <li><p>Enhance productivity, safety, and comfort in industrial and workplace environments.</p></li>
                        <li><p>Achieve energy savings through efficient lighting practices.</p></li>
                      </ul>
                    </div>
                  </div>

                  <form class="my-5" id='contactForm' action={{ route('send.mail.case') }} method="post">
                    @csrf
                    <h2 class="mb-4 title title-md color-primary-neutral-100 weight-700 align-items-center">Request for Full Paper Version or Relevant Case Study</h2>
                    <div class="mb-4 col-md-6">
                      <label for="" class="form-label">Full Name*</label>
                      <input type="text" class="form-control" name="fullname" id="fullname" aria-describedby="" placeholder="Your Full Name">
                    </div>
                    <div class="mb-4 col-md-6">
                      <label for="" class="form-label">Company Email*</label>
                      <input type="email" class="form-control" name="companymail" id="companymail" aria-describedby="" placeholder="Your Email">
                    </div>
                    <div class="mb-5 col-md-6">
                      <label for="" class="form-label">Company Name*</label>
                      <input type="text" class="form-control" name="companyname" id="" aria-describedby="" placeholder="Your company Name">
                    </div>
                    <div class="mb-5 col-md-6">
                      <label for="" class="form-label">Tell Us Your Case Study Needs*</label>
                      <br>
                      <select class="form-select" id="case_study_type" name="case_study_type" aria-label="Default select example">
                        <option value="Smart Lighting System">Smart Lighting System</option>
                        <option value="Fleet Parking Management System">Fleet Parking Management System</option>
                        <option value="Smart Logistic System">Smart Logistic System</option>
                        <option value="Smart Factory Safety System">Smart Factory Safety System</option>
                      </select>
                    </div>
                    <div class="mb-5 col-md-6">
                      <label for="" class="form-label">Other Remarks</label>
                      <input type="text" class="form-control" name="remarks" id="remarks" aria-describedby="" placeholder="Remarks">
                    </div>
                    <p><i>We will send your requests to your company email</i></p>
                    <div class="justify-content-between align-items-center">
                      <button type="submit" name="submit" id="submit" class="btn-lg btn-black px-5 d-flex align-items-center position-relative border-0">Send</button>
                    </div>
                    <p><i>* required</i></p>
                  </form>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/js/jquery.sticky-sidebar.js"></script>
  <script type="text/javascript" src="js/mdb.umd.min.js"></script>
  <script>
  $('.case-study .left').stickySidebar({
      topSpacing: 100,
      bottomSpacing: 0
    });
  </script>
@endsection