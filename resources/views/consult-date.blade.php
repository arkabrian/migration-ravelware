<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SSI X Ravelware</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link href="{{asset('css/component.css')}}" rel="stylesheet">
  <link href="{{asset('css/custom.css')}}" rel="stylesheet">
</head>
<body>
  @php
    session(['activeMenu' => 'consultation']);
  @endphp
  <div class="wrapper">
    @include('components.navbar')

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
                    <div class="mb-5 col-md-12">
                      <label for="" class="form-label">Tell Us Your Needs</label>
                      <br>
                      <select id="cars" name="carlist" form="carform">
                        <option value="monitoring">Monitoring</option>
                        <option value="analytics">Analytics</option>
                        <option value="enterprise">Enterprise</option>
                        <option value="sapu">Safety Assurance Productivity Up (SAPU)</option>
                        <option value="general">General Consultation</option>
                        <option value="others">Others</option>
                      </select>
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

    <!-- Footer -->
    <footer class="bg-primary-neutral-100 footer">
      <div class="footer-bottom">
        <div class="container">
          <div class="b-bottom-accent-1-base d-flex pb-5 mb-5 row mx-0">
            <div class="col-md-4 p-0">
              <h3 class="font-hero title-md color-primary-neutral-10">Ravelware Technology</h3>
              <h5 class="font-hero title-sm color-accent-1-base">Industry 4.0 Specialist</h5>
            </div>
            <div class="col-md-8 p-0">
              <p class="mb-0 color-primary-neutral-10">
                Welcome to PT Ravelware Technology Indonesia, where the possibilities of <strong>Industry 4.0</strong> technologies merge seamlessly with groundbreaking <strong>deep-tech innovations</strong>. Dive into our <strong>One-Stop Solution Automation Service</strong>, tailor-made to meet the unique demands of businesses across various sectors. Our commitment is not just to technology, but to a smarter, more efficient future for all.
                <br>
                <br>
                At <strong>Ravelware</strong>, we're pioneering the future with Industry 4.0 innovations. Our commitment to lean design ensures we craft tailored automation solutions, empowering businesses to thrive in an ever-evolving digital landscape. Experience technology that truly understands and adapts to your unique needs.
              </p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-5">
              <p class="mb-0 font-sm color-primary-neutral-10">
                Ruko Bekasi Town Square,<br>
                Jl. Cut Meutia Raya, Margahayu Blok J-01,<br>
                Bekasi Timur, RT003/009, Margahayu,<br>
                Kecamatan Bekasi Timur, Bekasi.<br>
                Jawa Barat 17113
              </p>

              <p class="mt-5 mb-0 title-sm color-primary-neutral-10">(+62)21 869 9297</p>
              <p class="mb-0 title-sm color-primary-neutral-10">(+62)822 6000 9297</p>
              <div class="mt-5"><a href="" class="mt-5 title-sm color-primary-neutral-10">Contact@revelware.co</a></div>
            </div>
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-5">
                  <h3 class="mb-3 title-sm color-primary-neutral-10 weight-700 d-flex align-items-center">Product & Solutions</h3>
                  <ul class="list-unstyled">
                    <li class="mb-3"><a href="" class="font-sm color-primary-neutral-10 text-decoration-none">Intelligent Manufacture System</a></li>
                    <li class="mb-3"><a href="" class="font-sm color-primary-neutral-10 text-decoration-none">Software Capability</a></li>
                    <li class="mb-3"><a href="" class="font-sm color-primary-neutral-10 text-decoration-none">Hardware Supply</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <h3 class="mb-3 title-sm color-primary-neutral-10 weight-700 d-flex align-items-center">Company</h3>
                  <ul class="list-unstyled">
                    <li class="mb-3"><a href="" class="font-sm color-primary-neutral-10 text-decoration-none">About Us</a></li>
                    <li class="mb-3"><a href="" class="font-sm color-primary-neutral-10 text-decoration-none">Consultacy</a></li>
                    <li class="mb-3"><a href="" class="font-sm color-primary-neutral-10 text-decoration-none">Career</a></li>
                    <li class="mb-3"><a href="" class="font-sm color-primary-neutral-10 text-decoration-none">Partner</a></li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <h3 class="mb-3 title-sm color-primary-neutral-10 weight-700 d-flex align-items-center">Resources</h3>
                  <ul class="list-unstyled">
                    <li class="mb-3"><a href="" class="font-sm color-primary-neutral-10 text-decoration-none">Blog</a></li>
                    <li class="mb-3"><a href="" class="font-sm color-primary-neutral-10 text-decoration-none">Case Study</a></li>
                    <li class="mb-3"><a href="" class="font-sm color-primary-neutral-10 text-decoration-none">F.A.Q</a></li>
                    <li class="mb-3"><a href="" class="font-sm color-primary-neutral-10 text-decoration-none">E-Book Catalogue</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-4">
              <ul class="list-unstyled d-flex align-items-center">
                <li class="me-4"><a href=""><img src="{{asset('img/icon/instagram.svg')}}"></a></li>
                <li class="me-4"><a href=""><img src="{{asset('img/icon/facebook.svg')}}"></a></li>
                <li class="me-4"><a href=""><img src="{{asset('img/icon/linkedin.svg')}}"></a></li>
              </ul>
            </div>
            <div class="col-md-8">
              <ul class="list-unstyled d-flex align-items-center justify-content-end">
                <li class="me-4"><a href="" class="color-accent-1-base text-decoration-none">Privacy Policy</a></li>
                <li class="me-4"><span class="color-accent-1-base text-decoration-none">|</span></li>
                <li class="me-4"><a href="" class="color-accent-1-base text-decoration-none">Terms & Conditions</a></li>
                <li class="me-4"><span class="color-accent-1-base text-decoration-none">|</span></li>
                <li class="me-4"><a href="" class="color-accent-1-base text-decoration-none">Ravelware Technology 2023</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

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
</body>
</html>