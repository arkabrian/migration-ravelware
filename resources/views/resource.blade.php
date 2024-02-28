@php
  $tags = explode(',', $resource['tags']);
@endphp

@extends('layout')
@section('content')
@section('title')
    {{ $resource['title'] }} | Ravelware Technology Indonesia
@endsection
<div class="content">
  <div class="detail-resources">
    <div class="top-resources tags">
      <div class="container position-relative py-5">
        <ul class="list-unstyled d-flex align-items-center mb-4 w-100 justify-content-center tags-white">
          <li><input type="checkbox" id="" readonly><label for="">Article</label></li>
        </ul>
        <h2 class="title title-lg color-primary-neutral-10 mb-4">{{ $resource['title'] }}</h2>
        @auth
          <form action="/resources/{{$resource['id']}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="text-red-500">Delete</button>
          </form>
        @endauth
        <p class="mb-4 text-wrap border-0 color-primary-neutral-10 mb-4">Posted on <span class="color-accent-1-base ms-2">{{ $resource['date'] }}</span></p>
        <ul class="list-unstyled d-flex align-items-center mb-5 w-100 justify-content-center tags-white">
          @foreach($tags as $tag)
          <li><input type="checkbox" id="" readonly><label for="">{{$tag}}</label></li>
          @endforeach
        </ul>
        <img src="{{ Str::contains($resource['img-path'], 'thumbnail/') ? asset('storage/' . $resource['img-path']) : $resource['img-path']}}" class="w-100">
      </div>
    </div>
    <div class="middle-resources">
      <div class="container">
        <div class="px-100">
          {!! $resource['content'] !!}
          <p class="mt-5">Copyrighted By PT Ravelware Technology Indonesia</p>
        </div>
        {{-- <div class="mt-5 p-5 bg-primary-neutral-100 black-info">
          <div class="row">
            <div class="col-md-6">
              <div class="d-flex align-items-center">
                <span class="box-img-user"></span>
                <h4 class="title-sm weight-700 ps-3 mb-0 color-primary-neutral-10">
                  <span class="d-block mb-2 weight-400">Published by</span>
                  Ravelware Technology
                </h4>
              </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
              <div class="row w-100 justify-content-end">
                <div class="col-md-4">
                  <h3 class="font-sm color-primary-neutral-10 mb-3">Share on</h3>
                  <div class="list-unstyled d-flex align-items-center mb-0">
                    <div class="me-4"><a href="https://www.instagram.com/ravelwaretechnology"><img src="{{asset('img/icon/instagram.svg')}}"></a></div>
                    <div class="me-4"><a href="https://www.facebook.com/RavelwareTechnology"><img src="{{asset('img/icon/facebook.svg')}}"></a></div>
                    <div class="me-4"><a href="https://www.linkedin.com/company/pt-ravelware-technology-indonesia/mycompany/"><img src="{{asset('img/icon/linkedin.svg')}}"></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <center>
        <form class="my-5" id='contactForm' action={{ route('send.mail.resource') }} method="post">
          @csrf
          <input type="hidden" name="article_title" value="{{ $resource['title'] }}">
          <input type="hidden" name="article_id" value="{{ $resource['id'] }}">

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
            <label for="" class="form-label">Tell Us Your Needs*</label>
            <br>
            <select class="form-select" id="resourcetype" name="resourcetype" aria-label="Default select example">
              <option value="monitoring">Paper</option>
              <option value="analytics">Case Study</option>
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
        </center>
        <hr class="b-bottom-primary-100 border-bottom-0 opacity-100">
        {{-- <div class="row justify-content-between my-5">
          <div class="col-md-4">
            <a href="" class="card text-decoration-none b-bottom-primary-100">
              <div class="mb-3">
                <span class="btn-black px-4 d-inline-flex align-items-center position-relative px-4 weight-400 py-2 border-0">Previous Article</span>
              </div>
              <div class="card-body p-0">
                <p class="mb-3 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="" class="card text-decoration-none b-bottom-primary-100 align-items-end">
              <div class="mb-3">
                <span class="btn-black px-4 d-inline-flex align-items-center position-relative px-4 weight-400 py-2 border-0">Next Article</span>
              </div>
              <div class="card-body p-0 text-end">
                <p class="mb-3 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
              </div>
            </a>
          </div>
        </div> --}}
      </div>
    </div>
    <div class="bottom-resources container mt-5">
      <h2 class="mb-0 title title-xl color-primary-neutral-100 weight-700 d-flex align-items-center">Related Article</h2>
      <div class="row mt-5">
        <div class="col-md-4">
          <div class="general-card">
            <div class="card border-0">
              <img src="{{asset('img/product/resource-01.jpg')}}" class="card-img-top card-img-column" alt="...">
              <div class="card-body pt-4 px-0">
                <div class="tags d-flex align-items-center mb-4">
                  <h5 class="mb-0 weight-700 title-sm w-auto me-2">Tags :</h5>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><input type="checkbox" id="tags-02" checked="" readonly=""><label class="title-sm" for="tags-02">Industry 4.0</label></li>
                  </ul>
                </div>
                <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">3 PEMANFAATAN BIG DATA PADA MANUFAKTUR</h2>
                <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 27, 2023</span></p>
                <p class="mb-0 mb-4 text-wrap border-0 info">Big data manufaktur mengacu pada penggunaan dan penerapan teknologi analisis data besar dan kompleks dalam konteks industri manufaktur. Dalam sistem ini melibatkan pengumpulan, penyimpanan, pengolahan serta analisis data yang dihasilkan oleh berbagai perangkat maupun sensor yang ada dalam sistem maupun lingkungan manufaktur tersebut. Tujuannya adalah untuk mendapatkan wawasan yang lebih dalam, meningkatkan efisiensi, mengoptimalkan proses</p>
                <div class="d-flex justify-content-between">
                  <span class="title-sm weight-700">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="general-card">
            <div class="card border-0">
              <img src="{{asset('img/product/resource-01.jpg')}}" class="card-img-top card-img-column" alt="...">
              <div class="card-body pt-4 px-0">
                <div class="tags d-flex align-items-center mb-4">
                  <h5 class="mb-0 weight-700 title-sm w-auto me-2">Tags :</h5>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><input type="checkbox" id="tags-02" checked="" readonly=""><label class="title-sm" for="tags-02">Industry 4.0</label></li>
                  </ul>
                </div>
                <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">3 PEMANFAATAN BIG DATA PADA MANUFAKTUR</h2>
                <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 27, 2023</span></p>
                <p class="mb-0 mb-4 text-wrap border-0 info">Big data manufaktur mengacu pada penggunaan dan penerapan teknologi analisis data besar dan kompleks dalam konteks industri manufaktur. Dalam sistem ini melibatkan pengumpulan, penyimpanan, pengolahan serta analisis data yang dihasilkan oleh berbagai perangkat maupun sensor yang ada dalam sistem maupun lingkungan manufaktur tersebut. Tujuannya adalah untuk mendapatkan wawasan yang lebih dalam, meningkatkan efisiensi, mengoptimalkan proses</p>
                <div class="d-flex justify-content-between">
                  <span class="title-sm weight-700">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="general-card">
            <div class="card border-0">
              <img src="{{asset('img/product/resource-01.jpg')}}" class="card-img-top card-img-column" alt="...">
              <div class="card-body pt-4 px-0">
                <div class="tags d-flex align-items-center mb-4">
                  <h5 class="mb-0 weight-700 title-sm w-auto me-2">Tags :</h5>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><input type="checkbox" id="tags-02" checked="" readonly=""><label class="title-sm" for="tags-02">Industry 4.0</label></li>
                  </ul>
                </div>
                <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">3 PEMANFAATAN BIG DATA PADA MANUFAKTUR</h2>
                <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 27, 2023</span></p>
                <p class="mb-0 mb-4 text-wrap border-0 info">Big data manufaktur mengacu pada penggunaan dan penerapan teknologi analisis data besar dan kompleks dalam konteks industri manufaktur. Dalam sistem ini melibatkan pengumpulan, penyimpanan, pengolahan serta analisis data yang dihasilkan oleh berbagai perangkat maupun sensor yang ada dalam sistem maupun lingkungan manufaktur tersebut. Tujuannya adalah untuk mendapatkan wawasan yang lebih dalam, meningkatkan efisiensi, mengoptimalkan proses</p>
                <div class="d-flex justify-content-between">
                  <span class="title-sm weight-700">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection