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
                  <button class="color-primary-neutral-100 title title-xl weight-400 nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">All Resources</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="color-primary-neutral-100 title title-xl weight-400 nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Article</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="color-primary-neutral-100 title title-xl weight-400 nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">News</button>
                </li>
              </ul>
            </div>
            <hr class="b-bottom-primary-100 border-bottom-0 opacity-100">
            <div class="tab-content mt-5" id="myTabContent">
              <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
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
                    <ul class="list-unstyled list-resource">
                      <li>
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-01.jpg')}}" class="card-img-top card-img-blog" alt="...">
                            <div class="card-body pt-5 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <h5 class="mb-0 weight-700">Tags :</h5>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                  <li><input type="checkbox" id="tags-02" checked readonly /><label for="tags-02">Industry 4.0</label></li>
                                  <li><input type="checkbox" id="tags-03" checked readonly /><label for="tags-03">Big Data</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-lg color-primary-neutral-100 my-3 h-auto d-block overflow-visible">3 PEMANFAATAN BIG DATA PADA MANUFAKTUR</h2>
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 27, 2023</span></p>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Big data manufaktur mengacu pada penggunaan dan penerapan teknologi analisis data besar dan kompleks dalam konteks industri manufaktur. Dalam sistem ini melibatkan pengumpulan, penyimpanan, pengolahan serta analisis data yang dihasilkan oleh berbagai perangkat maupun sensor yang ada dalam sistem maupun lingkungan manufaktur tersebut. Tujuannya adalah untuk mendapatkan wawasan yang lebih dalam, meningkatkan efisiensi, mengoptimalkan proses</p>
                              <div class="d-flex justify-content-between">
                                <span class="title-sm weight-700">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                          <div class="mt-2">
                            <input type="email" class="form-control" id="" aria-describedby="" placeholder="Leave a comment...">
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top card-img-blog" alt="...">
                            <div class="card-body pt-5 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <h5 class="mb-0 weight-700">Tags :</h5>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                  <li><input type="checkbox" id="tags-02" checked readonly /><label for="tags-02">Automation</label></li>
                                  <li><input type="checkbox" id="tags-03" checked readonly /><label for="tags-03">Internet on thing’s</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-lg color-primary-neutral-100 my-3 h-auto d-block overflow-visible">RAVELWARE : PENANDATANGANAN NOTA KESEPAHAMAN DENGAN AWINA</h2>
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 27, 2023</span></p>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Senin, 25 September 2023, Ravelware Technology kembali mendapatkan kesempatan yang terhormat untuk dipercaya menjalin kerjasama strategis di bidang teknologi terapan Industry 4.0 dengan perusahaan global. Penandatanganan Nota Kesepahaman (MoU) antara PT. Awina Sinergi International (AWINA) dan PT Ravelware Technology Indonesia yang dilakukan oleh Bpk. Ananda Setiyo Ivananto, Presiden Direktur AWINA dan Randy Wicaksono, CEO Ravelware</p>
                              <div class="d-flex justify-content-between">
                                <span class="title-sm weight-700">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                          <div class="mt-2">
                            <input type="email" class="form-control" id="" aria-describedby="" placeholder="Leave a comment...">
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-03.jpg')}}" class="card-img-top card-img-blog" alt="...">
                            <div class="card-body pt-5 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <h5 class="mb-0 weight-700">Tags :</h5>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                  <li><input type="checkbox" id="tags-02" checked readonly /><label for="tags-02">Industry 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-lg color-primary-neutral-100 my-3 h-auto d-block overflow-visible">RAVELWARE : WAREHOUSE MANAGEMENT SYSTEM</h2>
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 27, 2023</span></p>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Warehouse Management System (WMS) adalah perangkat lunak atau sistem yang digunakan untuk mengelola dan mengoptimalkan operasi penyimpanan dan distribusi dalam gudang atau pusat distribusi. Tujuan utama dari WMS adalah meningkatkan efisiensi, akurasi, dan produktivitas dalam mengelola inventaris dan pengiriman barang.</p>
                              <div class="d-flex justify-content-between">
                                <span class="title-sm weight-700">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                          <div class="mt-2">
                            <input type="email" class="form-control" id="" aria-describedby="" placeholder="Leave a comment...">
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4 ps-5">
                    <h2 class="mb-4 title title-lg color-primary-neutral-100 weight-700 d-flex align-items-center">Recent Post</h2>
                    <ul class="list-unstyled mb-0 list-recent-post">
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              {{-- ARTICLE --}}
              <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
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
                      <li>
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/case-08.jpg')}}" class="card-img-top card-img-blog" alt="...">
                            <div class="card-body pt-5 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <h5 class="mb-0 weight-700">Tags :</h5>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                  <li><input type="checkbox" id="tags-02" checked readonly /><label for="tags-02">Industry 4.0</label></li>
                                  <li><input type="checkbox" id="tags-03" checked readonly /><label for="tags-03">Big Data</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-lg color-primary-neutral-100 my-3 h-auto d-block overflow-visible">BIG DATA : BUSINESS INTELLIGENT UNTUK BISNIS AKURAT</h2>
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 27, 2023</span></p>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Berbagai jenis teknologi dimanfaatkan untuk terus berkembang dalam mencapai tujuan bisnis. Salah satu yang sering sekali diperbincangkan saat ini adalah Business Intelligence atau BI. Teknologi satu ini juga sudah banyak diadaptasi di berbagai bisnis Indonesia tentunya dalam bidnag bisnis maupun pada bidang lainnya.</p>
                              <div class="d-flex justify-content-between">
                                <span class="title-sm weight-700">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                          <div class="mt-2">
                            <input type="email" class="form-control" id="" aria-describedby="" placeholder="Leave a comment...">
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top card-img-blog" alt="...">
                            <div class="card-body pt-5 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <h5 class="mb-0 weight-700">Tags :</h5>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                  <li><input type="checkbox" id="tags-02" checked readonly /><label for="tags-02">Automation</label></li>
                                  <li><input type="checkbox" id="tags-03" checked readonly /><label for="tags-03">Internet on thing’s</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-lg color-primary-neutral-100 my-3 h-auto d-block overflow-visible">RAVELWARE : PENANDATANGANAN NOTA KESEPAHAMAN DENGAN AWINA</h2>
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 27, 2023</span></p>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Senin, 25 September 2023, Ravelware Technology kembali mendapatkan kesempatan yang terhormat untuk dipercaya menjalin kerjasama strategis di bidang teknologi terapan Industry 4.0 dengan perusahaan global. Penandatanganan Nota Kesepahaman (MoU) antara PT. Awina Sinergi International (AWINA) dan PT Ravelware Technology Indonesia yang dilakukan oleh Bpk. Ananda Setiyo Ivananto, Presiden Direktur AWINA dan Randy Wicaksono, CEO Ravelware</p>
                              <div class="d-flex justify-content-between">
                                <span class="title-sm weight-700">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                          <div class="mt-2">
                            <input type="email" class="form-control" id="" aria-describedby="" placeholder="Leave a comment...">
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-03.jpg')}}" class="card-img-top card-img-blog" alt="...">
                            <div class="card-body pt-5 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <h5 class="mb-0 weight-700">Tags :</h5>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                  <li><input type="checkbox" id="tags-02" checked readonly /><label for="tags-02">Industry 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-lg color-primary-neutral-100 my-3 h-auto d-block overflow-visible">RAVELWARE : WAREHOUSE MANAGEMENT SYSTEM</h2>
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 27, 2023</span></p>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Warehouse Management System (WMS) adalah perangkat lunak atau sistem yang digunakan untuk mengelola dan mengoptimalkan operasi penyimpanan dan distribusi dalam gudang atau pusat distribusi. Tujuan utama dari WMS adalah meningkatkan efisiensi, akurasi, dan produktivitas dalam mengelola inventaris dan pengiriman barang.</p>
                              <div class="d-flex justify-content-between">
                                <span class="title-sm weight-700">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                          <div class="mt-2">
                            <input type="email" class="form-control" id="" aria-describedby="" placeholder="Leave a comment...">
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4 ps-5">
                    <h2 class="mb-4 title title-lg color-primary-neutral-100 weight-700 d-flex align-items-center">Recent Post</h2>
                    <ul class="list-unstyled mb-0 list-recent-post">
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
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
                      <li>
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/news-03.jpg')}}" class="card-img-top card-img-blog" alt="...">
                            <div class="card-body pt-5 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <h5 class="mb-0 weight-700">Tags :</h5>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                  <li><input type="checkbox" id="" checked readonly /><label for="tags-02">Industry 4.0</label></li>
                                  <li><input type="checkbox" id="" checked readonly /><label for="tags-03">Big Data</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-lg color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Training Demo Alat Peraga Lean Monozukuri Dengan PIDI 4.0</h2>
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 27, 2023</span></p>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Kamis, 07 September 2023, bertempat di gedung Pusat Inovasi Digital Industri 4.0 (PIDI 4.0), PT Ravelware Technology Indonesia yang diwakili oleh CEO Randy Budi Wicaksono turut memfasilitasi training demo alat peraga Lean Monozukuri untuk hasilkan SDM kompeten Industri 4.0 bagi para praktisi industri manufaktur. Lean Monozukuri merupakan sistem tata kelola proses produksi dan manufaktur untuk</p>
                              <div class="d-flex justify-content-between">
                                <span class="title-sm weight-700">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                          <div class="mt-2">
                            <input type="email" class="form-control" id="" aria-describedby="" placeholder="Leave a comment...">
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top card-img-blog" alt="...">
                            <div class="card-body pt-5 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <h5 class="mb-0 weight-700">Tags :</h5>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                  <li><input type="checkbox" id="tags-02" checked readonly /><label for="tags-02">Automation</label></li>
                                  <li><input type="checkbox" id="tags-03" checked readonly /><label for="tags-03">Internet on thing’s</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-lg color-primary-neutral-100 my-3 h-auto d-block overflow-visible">RAVELWARE : PENANDATANGANAN NOTA KESEPAHAMAN DENGAN AWINA</h2>
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 27, 2023</span></p>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Senin, 25 September 2023, Ravelware Technology kembali mendapatkan kesempatan yang terhormat untuk dipercaya menjalin kerjasama strategis di bidang teknologi terapan Industry 4.0 dengan perusahaan global. Penandatanganan Nota Kesepahaman (MoU) antara PT. Awina Sinergi International (AWINA) dan PT Ravelware Technology Indonesia yang dilakukan oleh Bpk. Ananda Setiyo Ivananto, Presiden Direktur AWINA dan Randy Wicaksono, CEO Ravelware</p>
                              <div class="d-flex justify-content-between">
                                <span class="title-sm weight-700">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                          <div class="mt-2">
                            <input type="email" class="form-control" id="" aria-describedby="" placeholder="Leave a comment...">
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-03.jpg')}}" class="card-img-top card-img-blog" alt="...">
                            <div class="card-body pt-5 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <h5 class="mb-0 weight-700">Tags :</h5>
                                <ul class="list-unstyled d-flex align-items-center mb-0">
                                  <li><input type="checkbox" id="tags-02" checked readonly /><label for="tags-02">Industry 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-lg color-primary-neutral-100 my-3 h-auto d-block overflow-visible">RAVELWARE : WAREHOUSE MANAGEMENT SYSTEM</h2>
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 27, 2023</span></p>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Warehouse Management System (WMS) adalah perangkat lunak atau sistem yang digunakan untuk mengelola dan mengoptimalkan operasi penyimpanan dan distribusi dalam gudang atau pusat distribusi. Tujuan utama dari WMS adalah meningkatkan efisiensi, akurasi, dan produktivitas dalam mengelola inventaris dan pengiriman barang.</p>
                              <div class="d-flex justify-content-between">
                                <span class="title-sm weight-700">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                          <div class="mt-2">
                            <input type="email" class="form-control" id="" aria-describedby="" placeholder="Leave a comment...">
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4 ps-5">
                    <h2 class="mb-4 title title-lg color-primary-neutral-100 weight-700 d-flex align-items-center">Recent Post</h2>
                    <ul class="list-unstyled mb-0 list-recent-post">
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">KAIZEN : 3 Langkah Penting Penerapan TQM</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li>
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <div class="card-body p-0">
                              <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">September 26, 2023</span></p>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">3 PERAN BESAR AI DAN IOT DALAM MANUFAKTUR</h2>
                            </div>
                          </a>
                        </div>
                      </li>
                    </ul>
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