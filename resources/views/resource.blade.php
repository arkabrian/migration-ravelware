@props(['tagsCSV'])
@php

@endphp

@extends('layout')
@section('content')
<div class="content">
  <div class="detail-resources">
    <div class="top-resources tags">
      <div class="container position-relative py-5">
        <ul class="list-unstyled d-flex align-items-center mb-4 w-100 justify-content-center tags-white">
          <li><input type="checkbox" id="" readonly><label for="">Article</label></li>
        </ul>
        <h2 class="title title-lg color-primary-neutral-10 mb-4">{{ $resource['title'] }}</h2>
        <p class="mb-4 text-wrap border-0 color-primary-neutral-10 mb-4">Posted on <span class="color-accent-1-base ms-2">{{ $resource['date'] }}</span></p>
        <ul class="list-unstyled d-flex align-items-center mb-5 w-100 justify-content-center tags-white">
          @foreach($resource['tags'] as $tag)
          <li><input type="checkbox" id="" readonly><label for="">{{$tag}}</label></li>
          @endforeach
        </ul>
        <img src="{{ $resource['img-path'] }}" class="w-100">
      </div>
    </div>
    <div class="middle-resources">
      <div class="container">
        <div class="px-100">
          {!!$resource['content'] !!}
          <p class="mt-5">Copyrighted By PT Ravelware Technology Indonesia</p>
        </div>
        <div class="mt-5 p-5 bg-primary-neutral-100 black-info">
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
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li class="me-4"><a href=""><img src="{{asset('img/icon/instagram.svg')}}"></a></li>
                    <li class="me-4"><a href=""><img src="{{asset('img/icon/facebook.svg')}}"></a></li>
                    <li class="me-4"><a href=""><img src="{{asset('img/icon/linkedin.svg')}}"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <form class="my-5">
          <h2 class="mb-4 title title-lg color-primary-neutral-100 weight-700 d-flex align-items-center">Leave a Reply</h2>
          <div class="mb-4">
            <textarea class="form-control" id="" aria-describedby="" placeholder="Write a comment..." rows="4"></textarea>
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn-lg btn-black px-4 d-inline-flex align-items-center position-relative px-5 border-0">Reply</button>
          </div>
        </form>
        <hr class="b-bottom-primary-100 border-bottom-0 opacity-100">
        <div class="row justify-content-between my-5">
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
        </div>
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