@extends('layout')
@section('content')
    <div class="content">
      <div class="contact-us py-5">
        <div class="container">
          <div class="row align-items-start mb-5">
            <div class="col-md-6">
              <h2 class="title title-xl mb-0">GET CONNECTED<br>WITH US</h2>
            </div>
            <div class="col-md-6 ps-5">
              <p class="mb-0">At PT Ravelware Technology Indonesia, we believe in the power of connection, not just through our advanced RFID, NFC, and interconnected database capabilities, but in forging strong relationships with our clients. If you're seeking customizable software development experiences or wish to explore the full potential of Industry 4.0 technologies or deep-tech innovations, we're here to guide and support. Let's connect and co-create solutions that shape the future!</p>
            </div>
          </div>
          <hr>
          <div class="row my-5">
            <div class="col-md-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.057706920765!2d107.00694167605671!3d-6.256128493732345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f9255b54a7f%3A0xd5f889fe9d55a983!2sPT%20RAVELWARE%20TECHNOLOGY%20INDONESIA!5e0!3m2!1sen!2sid!4v1702868285109!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <div class="mt-5">
                <h2 class="title title-md mb-4">Get in touch</h2>
                <ul class="list-unstyled">
                  <li class="d-flex align-items-start mb-4">
                    <span class="me-3"><img src="{{asset('img/icon/buildings.svg')}}"></span>
                    <p class="font-sm mb-0">
                      Ruko Bekasi Town Square,Jl. Cut Meutia Raya, Margahayu Blok J-01<br>
                      Bekasi Timur, RT003/009, Margahayu, Kecamatan Bekasi Timur,<br>
                      Bekasi. Jawa Barat 17113<br>
                    </p>
                  </li>
                  <li class="d-flex align-items-center mb-4">
                    <span class="me-3"><img src="{{asset('img/icon/call.svg')}}"></span>
                    <p class="mb-0">
                      (+62)21 869 9297 <span class="mx-3">|</span> (+62)822 6000 9297
                    </p>
                  </li>
                  <li class="d-flex align-items-center">
                    <span class="me-3"><img src="{{asset('img/icon/sms.svg')}}"></span>
                    <a href="" class="text-decoration-none color-primary-neutral-100">
                      Contact@revelware.co
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 ps-5">
              <form class="row" id='contactForm'>
                <div class="mb-5 col-md-6">
                  <label for="" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" aria-describedby="" placeholder="Enter your name">
                </div>
                <div class="mb-5 col-md-6">
                  <label for="" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="" placeholder="Enter your email">
                </div>
                <div class="mb-5 col-md-6">
                  <label for="" class="form-label">Job Title</label>
                  <input type="text" class="form-control" id="job" aria-describedby="" placeholder="Enter your job title">
                </div>
                <div class="mb-5 col-md-6">
                  <label for="" class="form-label">Company</label>
                  <input type="text" class="form-control" id="company" aria-describedby="" placeholder="Enter your company">
                </div>
                <div class="mb-5 col-md-6">
                  <label for="" class="form-label">Company Size (Employees)</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Enter company size</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="mb-5 col-md-6">
                  <label for="" class="form-label">Industry Fields</label>
                  <input type="text" class="form-control" id="industry" aria-describedby="" placeholder="Enter your industry fields">
                </div>
                <div class="mb-5 col-md-12">
                  <label for="" class="form-label">Company Location</label>
                  <input type="text" class="form-control" id="location" aria-describedby="" placeholder="Enter your company location">
                </div>
                <div class="mb-5 col-md-12">
                  <label for="" class="form-label">Test Subject</label>
                  <input type="text" class="form-control" id="subject" aria-describedby="" placeholder="Enter your company location">
                </div>
                <div class="mb-5 col-md-12">
                  <label for="" class="form-label">Any Notes? (Optional)</label>
                  <input type="text" class="form-control" id="body" aria-describedby="" placeholder="Enter your company location">
                </div>
                <div class="mb-5 col-md-12">
                  <div class="form-checkbox">
                    <input type="checkbox" id="update">
                    <label for="update"><span>Would you like to get update on Ravelware tech news?</span></label>
                  </div>
                </div>
                <div>
                  <button type="submit" onclick="sendEmail()" class="btn-lg btn-black px-5 d-flex align-items-center position-relative border-0">Send Message</button>
                </div>
              </form>
            </div>
          </div>

          <div class="mt-5 p-5 cta-contact black-info">
            <div class="row">
              <div class="col-md-6">
                <h2 class="mb-0 title title-lg text-uppercase color-primary-neutral-10">Get more done with the right package</h2>
              </div>
              <div class="col-md-6 d-flex justify-content-end align-items-center">
                <a href="/consultation" class="d-inline-flex btn-lg align-items-center btn-white-outline px-4 position-relative text-decoration-none">Consultation Now <img src="{{asset('img/icon/arrow-right-white-sm.svg')}}" class="ms-2"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript">
    function sendEmail(){
      var name = $("#name");
      var email = $("#email");
      var subject = $("#subject");
      var body = $("#body");

      if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
        $.ajax({
          url: 'sendEmail.php',
          method: 'POST',
          dataType: 'json',
          data:{
            name: name.val(),
            email: email.val(),
            subject: subject.val(),
            body: body.val()
          }, success: function(response){
            $('#contactForm')[0].reset();
          }
        })
      }
    }

    function isNotEmpty(caller){
      if(caller.val()=""){
        caller.css('border', '1px solid red');
        return false;
      }
      else{
        caller.css('border', '');
        return true;
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

@endsection