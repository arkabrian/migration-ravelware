{{-- <h1>{{$heading}}</h1>
@foreach($resources as $resource)
<h2>
  <a href="/resources/{{$resource['id']}}">{{$resource['title']}}</a>
</h2>
<p>Posted on {{$resource['date']}}</p>
{!!$resource['content'] !!}
<p>Tagged: {{ implode(', ', $resource['tags']) }}</p>
<br>
@endforeach --}}

@php
    session(['activeMenu' => 'resources']);
@endphp

@extends('layout')
@section('content')
    <div class="content">
      <div class="py-5">
        <div class="container">
          <div class="row align-items-center mb-5">
            <div class="col-md-5">
              <h2 class="title title-xl mb-0 text-capitalize">Insights to keep you informed & inspired.</h2>
            </div>
            <div class="col-md-7 ps-5">
              <p class="mb-0">Insights to keep you informed and inspired on your journey to create organisational change.</p>
            </div>
          </div>
          <hr class="b-bottom-primary-100 border-bottom-0 opacity-100">
          <div class="mt-5 resources-tabs">
            <div class="d-flex align-items-center">
              <ul class="nav nav-tabs mb-5 flex-nowrap overflow-auto" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="color-primary-neutral-100 title title-xl weight-400 nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">All Resources</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="color-primary-neutral-100 title title-xl weight-400 nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#article-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Article</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="color-primary-neutral-100 title title-xl weight-400 nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#news-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">News</button>
                </li>
              </ul>
            </div>
            <hr class="b-bottom-primary-100 border-bottom-0 opacity-100">
            <div class="tab-content mt-5" id="myTabContent">

              {{-- ALL --}}
              <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="tags d-flex align-items-center">
                  <h5 class="mb-0 weight-700">Tags :</h5>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><input type="checkbox" id="tags-01" checked /><label for="tags-01">All</label></li>
                    <li><input type="checkbox" id="tags-02" /><label for="tags-02">Industry 4.0</label></li>
                    <li><input type="checkbox" id="tags-03" /><label for="tags-03">Big Data</label></li>
                    <li><input type="checkbox" id="tags-04" /><label for="tags-04">Automation</label></li>
                    <li><input type="checkbox" id="tags-05" /><label for="tags-05">Internet Of Thing’s</label></li>
                    <li><input type="checkbox" id="tags-06" /><label for="tags-06">RFID</label></li>
                    <li><input type="checkbox" id="tags-07" /><label for="tags-07">Total Productive Maintenance</label></li>
                  </ul>
                </div>
                <div class="row mt-5">
                  <div class="col-md-8">
                    <ul id="resourceContainer" class="list-unstyled list-resource">
                      @foreach($resources as $resource)
                        @include('components.resources-display')
                      @endforeach
                    </ul>
                  </div>
                  @include('components.resources-side-display')
                </div>
              </div>

              {{-- ARTICLE --}}
              <div class="tab-pane fade" id="article-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="tags d-flex align-items-center">
                  <h5 class="mb-0 weight-700">Tags :</h5>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><input type="checkbox" id="tags-08" checked /><label for="tags-08">All</label></li>
                    <li><input type="checkbox" id="tags-09" /><label for="tags-09">Industry 4.0</label></li>
                    <li><input type="checkbox" id="tags-10" /><label for="tags-10">Big Data</label></li>
                    <li><input type="checkbox" id="tags-11" /><label for="tags-11">Automation</label></li>
                    <li><input type="checkbox" id="tags-12" /><label for="tags-12">Internet Of Thing’s</label></li>
                    <li><input type="checkbox" id="tags-13" /><label for="tags-13">RFID</label></li>
                    <li><input type="checkbox" id="tags-14" /><label for="tags-14">Total Productive Maintenance</label></li>
                  </ul>
                </div>
                <div class="row mt-5">
                  <div class="col-md-8">
                    <ul class="list-unstyled list-resource">
                      @foreach($resources as $resource)
                        @if($resource['type'] === 'article')
                          @include('components.resources-display')
                        @endif
                      @endforeach
                    </ul>
                  </div>
                  @include('components.resources-side-display')
                </div>
              </div>

              {{-- NEWS --}}
              <div class="tab-pane fade" id="news-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <div class="tags d-flex align-items-center">
                  <h5 class="mb-0 weight-700">Tags :</h5>
                  <ul class="list-unstyled d-flex align-items-center mb-0">
                    <li><input type="checkbox" id="tags-15" checked /><label for="tags-15">All</label></li>
                    <li><input type="checkbox" id="tags-16" /><label for="tags-16">Industry 4.0</label></li>
                    <li><input type="checkbox" id="tags-17" /><label for="tags-17">Big Data</label></li>
                    <li><input type="checkbox" id="tags-18" /><label for="tags-18">Automation</label></li>
                    <li><input type="checkbox" id="tags-19" /><label for="tags-19">Internet Of Thing’s</label></li>
                    <li><input type="checkbox" id="tags-20" /><label for="tags-20">RFID</label></li>
                    <li><input type="checkbox" id="tags-21" /><label for="tags-21">Total Productive Maintenance</label></li>
                  </ul>
                </div>
                <div class="row mt-5">
                  <div class="col-md-8">
                    <ul class="list-unstyled list-resource">
                      @foreach($resources as $resource)
                        @if($resource['type'] === 'news')
                          @include('components.resources-display')
                        @endif
                      @endforeach
                    </ul>
                  </div>
                  @include('components.resources-side-display')
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
  <script>
    let page = 1; // Track the current page
    const perPage = 5; // Number of articles to load per page
  
    $(window).scroll(function() {
      if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
        $.ajax({
          url: '/load-more-articles?page=' + page,
          method: 'GET',
          dataType: 'html',
          success: function(data) {
            $('#articleContainer').append(data);
            page++; // Increment the page count for the next load
          }
        });
      }
    });
  </script>
  

@endsection