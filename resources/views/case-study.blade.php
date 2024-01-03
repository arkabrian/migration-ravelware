@php
    session(['activeMenu' => 'case_study']);
@endphp

@extends('layout')
@section('content')
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
                    <button class="nav-link" id="v-pills-02-tab" data-bs-toggle="pill" data-bs-target="#v-pills-02" type="button" role="tab" aria-controls="v-pills-02" aria-selected="false">Lean Warehousing / Warehouse 4.0</button>
                    <button class="nav-link" id="v-pills-03-tab" data-bs-toggle="pill" data-bs-target="#v-pills-03" type="button" role="tab" aria-controls="v-pills-03" aria-selected="false">Lean Manufacture / Toyota Production System</button>
                    <button class="nav-link" id="v-pills-04-tab" data-bs-toggle="pill" data-bs-target="#v-pills-04" type="button" role="tab" aria-controls="v-pills-04" aria-selected="false">Smart Factory / Smart Building4.0</button>
                    <button class="nav-link" id="v-pills-05-tab" data-bs-toggle="pill" data-bs-target="#v-pills-05" type="button" role="tab" aria-controls="v-pills-05" aria-selected="false">Cyber Security4.0</button>
                    <button class="nav-link" id="v-pills-06-tab" data-bs-toggle="pill" data-bs-target="#v-pills-06" type="button" role="tab" aria-controls="v-pills-06" aria-selected="false">Mechanical / Contractor & Manufacture Services</button>
                  </div>
                </div>
              </div>
              <div class="right">
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-01" role="tabpanel" aria-labelledby="v-pills-01-tab" tabindex="0">
                    <div class="d-flex align-items-center justify-content-between mb-5">
                      <form>
                        <div class="form-search position-relative">
                          <input type="text" class="form-control" placeholder="Search Case Study" name="">
                          <button type="submit"><img src="{{asset('img/icon/search-normal.svg')}}"></button>
                        </div>
                      </form>
                      <p class="mb-0 weight-700">20 Case Studies Result</p>
                    </div>
                    <h2 class="title title-lg weight-700 mb-5">All Case Study</h2>
                    <ul class="list-unstyled list-resource row">
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-01.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Fleet Parking Management System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravelfleet is one of the solution for activities in the industry. The purpose of our system is to provide a system which can monitor the activity of the truck inside factory parking area and automate the administration process for the fleet activity report.</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Logistic System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravellog is a Smart Logistic System which integrate RFID technology and Internet of Things technology. It could be integrated with Lean Manufacture, Lean Warehousing or Toyota Production System in the company</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-03.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Factory Safety System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">The concern of safety in the industry is one of the top management priority. Inside the factory, there are lots of forklifts, gates and area which its safety aspect needs to be improve.Ravelzen is a comprehensive solution which focused on increasing the safety of the work environment of your company.</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Logistic System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravellog is a Smart Logistic System which integrate RFID technology and Internet of Things technology. It could be integrated with Lean Manufacture, Lean Warehousing or Toyota Production System in the company</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                    </ul>
                    <div class="d-flex justify-content-end bold-pagination">
                      <nav aria-label="">
                        <ul class="pagination">
                          <li class="page-item prev disabled">
                            <a class="page-link"><img src="{{asset('img/icon/arrow-circle-right.svg')}}"></a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item next">
                            <a class="page-link" href="#"><img src="{{asset('img/icon/arrow-circle-right.svg')}}"></a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-02" role="tabpanel" aria-labelledby="v-pills-02-tab" tabindex="0">
                    <div class="d-flex align-items-center justify-content-between mb-5">
                      <form>
                        <div class="form-search position-relative">
                          <input type="text" class="form-control" placeholder="Search Case Study" name="">
                          <button type="submit"><img src="{{asset('img/icon/search-normal.svg')}}"></button>
                        </div>
                      </form>
                      <p class="mb-0 weight-700">20 Case Studies Result</p>
                    </div>
                    <h2 class="title title-lg weight-700 mb-5">Lean Warehousing / Warehouse 4.0</h2>
                    <p class="mb-5">Warehousing is one of the essential activity in any factory. In Industry 4.0, it is necessary to improve the efficiency and speed of warehousing activity so that it can match the ever-changing needs of the market. Below are our solution for lean warehousing.</p>
                    <ul class="list-unstyled list-resource row">
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-01.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Fleet Parking Management System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravelfleet is one of the solution for activities in the industry. The purpose of our system is to provide a system which can monitor the activity of the truck inside factory parking area and automate the administration process for the fleet activity report.</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Logistic System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravellog is a Smart Logistic System which integrate RFID technology and Internet of Things technology. It could be integrated with Lean Manufacture, Lean Warehousing or Toyota Production System in the company</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-03.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Factory Safety System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">The concern of safety in the industry is one of the top management priority. Inside the factory, there are lots of forklifts, gates and area which its safety aspect needs to be improve.Ravelzen is a comprehensive solution which focused on increasing the safety of the work environment of your company.</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Logistic System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravellog is a Smart Logistic System which integrate RFID technology and Internet of Things technology. It could be integrated with Lean Manufacture, Lean Warehousing or Toyota Production System in the company</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                    </ul>
                    <div class="d-flex justify-content-end">
                      <nav aria-label="" class="bold-pagination">
                        <ul class="pagination">
                          <li class="page-item prev disabled">
                            <a class="page-link"><img src="{{asset('img/icon/arrow-circle-right.svg')}}"></a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item next">
                            <a class="page-link" href="#"><img src="{{asset('img/icon/arrow-circle-right.svg')}}"></a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-03" role="tabpanel" aria-labelledby="v-pills-03-tab" tabindex="0">
                    <div class="d-flex align-items-center justify-content-between mb-5">
                      <form>
                        <div class="form-search position-relative">
                          <input type="text" class="form-control" placeholder="Search Case Study" name="">
                          <button type="submit"><img src="{{asset('img/icon/search-normal.svg')}}"></button>
                        </div>
                      </form>
                      <p class="mb-0 weight-700">20 Case Studies Result</p>
                    </div>
                    <h2 class="title title-lg weight-700 mb-5">Lean Manufacture / Toyota Production System</h2>
                    <p class="mb-5">Warehousing is one of the essential activity in any factory. In Industry 4.0, it is necessary to improve the efficiency and speed of warehousing activity so that it can match the ever-changing needs of the market. Below are our solution for lean warehousing.</p>
                    <ul class="list-unstyled list-resource row">
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-01.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Fleet Parking Management System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravelfleet is one of the solution for activities in the industry. The purpose of our system is to provide a system which can monitor the activity of the truck inside factory parking area and automate the administration process for the fleet activity report.</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Logistic System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravellog is a Smart Logistic System which integrate RFID technology and Internet of Things technology. It could be integrated with Lean Manufacture, Lean Warehousing or Toyota Production System in the company</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-03.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Factory Safety System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">The concern of safety in the industry is one of the top management priority. Inside the factory, there are lots of forklifts, gates and area which its safety aspect needs to be improve.Ravelzen is a comprehensive solution which focused on increasing the safety of the work environment of your company.</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Logistic System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravellog is a Smart Logistic System which integrate RFID technology and Internet of Things technology. It could be integrated with Lean Manufacture, Lean Warehousing or Toyota Production System in the company</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                    </ul>
                    <div class="d-flex justify-content-end">
                      <nav aria-label="" class="bold-pagination">
                        <ul class="pagination">
                          <li class="page-item prev disabled">
                            <a class="page-link"><img src="{{asset('img/icon/arrow-circle-right.svg')}}"></a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item next">
                            <a class="page-link" href="#"><img src="{{asset('img/icon/arrow-circle-right.svg')}}"></a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-04" role="tabpanel" aria-labelledby="v-pills-04-tab" tabindex="0">
                    <div class="d-flex align-items-center justify-content-between mb-5">
                      <form>
                        <div class="form-search position-relative">
                          <input type="text" class="form-control" placeholder="Search Case Study" name="">
                          <button type="submit"><img src="{{asset('img/icon/search-normal.svg')}}"></button>
                        </div>
                      </form>
                      <p class="mb-0 weight-700">20 Case Studies Result</p>
                    </div>
                    <h2 class="title title-lg weight-700 mb-5">Smart Factory / Smart Building4.0</h2>
                    <p class="mb-5">Warehousing is one of the essential activity in any factory. In Industry 4.0, it is necessary to improve the efficiency and speed of warehousing activity so that it can match the ever-changing needs of the market. Below are our solution for lean warehousing.</p>
                    <ul class="list-unstyled list-resource row">
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-01.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Fleet Parking Management System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravelfleet is one of the solution for activities in the industry. The purpose of our system is to provide a system which can monitor the activity of the truck inside factory parking area and automate the administration process for the fleet activity report.</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Logistic System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravellog is a Smart Logistic System which integrate RFID technology and Internet of Things technology. It could be integrated with Lean Manufacture, Lean Warehousing or Toyota Production System in the company</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-03.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Factory Safety System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">The concern of safety in the industry is one of the top management priority. Inside the factory, there are lots of forklifts, gates and area which its safety aspect needs to be improve.Ravelzen is a comprehensive solution which focused on increasing the safety of the work environment of your company.</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Logistic System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravellog is a Smart Logistic System which integrate RFID technology and Internet of Things technology. It could be integrated with Lean Manufacture, Lean Warehousing or Toyota Production System in the company</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                    </ul>
                    <div class="d-flex justify-content-end">
                      <nav aria-label="" class="bold-pagination">
                        <ul class="pagination">
                          <li class="page-item prev disabled">
                            <a class="page-link"><img src="{{asset('img/icon/arrow-circle-right.svg')}}"></a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item next">
                            <a class="page-link" href="#"><img src="{{asset('img/icon/arrow-circle-right.svg')}}"></a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-05" role="tabpanel" aria-labelledby="v-pills-05-tab" tabindex="0">
                    <div class="d-flex align-items-center justify-content-between mb-5">
                      <form>
                        <div class="form-search position-relative">
                          <input type="text" class="form-control" placeholder="Search Case Study" name="">
                          <button type="submit"><img src="{{asset('img/icon/search-normal.svg')}}"></button>
                        </div>
                      </form>
                      <p class="mb-0 weight-700">20 Case Studies Result</p>
                    </div>
                    <h2 class="title title-lg weight-700 mb-5">Cyber Security4.0</h2>
                    <p class="mb-5">Warehousing is one of the essential activity in any factory. In Industry 4.0, it is necessary to improve the efficiency and speed of warehousing activity so that it can match the ever-changing needs of the market. Below are our solution for lean warehousing.</p>
                    <ul class="list-unstyled list-resource row">
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-01.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Fleet Parking Management System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravelfleet is one of the solution for activities in the industry. The purpose of our system is to provide a system which can monitor the activity of the truck inside factory parking area and automate the administration process for the fleet activity report.</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Logistic System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravellog is a Smart Logistic System which integrate RFID technology and Internet of Things technology. It could be integrated with Lean Manufacture, Lean Warehousing or Toyota Production System in the company</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-03.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Factory Safety System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">The concern of safety in the industry is one of the top management priority. Inside the factory, there are lots of forklifts, gates and area which its safety aspect needs to be improve.Ravelzen is a comprehensive solution which focused on increasing the safety of the work environment of your company.</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Logistic System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravellog is a Smart Logistic System which integrate RFID technology and Internet of Things technology. It could be integrated with Lean Manufacture, Lean Warehousing or Toyota Production System in the company</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                    </ul>
                    <div class="d-flex justify-content-end">
                      <nav aria-label="" class="bold-pagination">
                        <ul class="pagination">
                          <li class="page-item prev disabled">
                            <a class="page-link"><img src="{{asset('img/icon/arrow-circle-right.svg')}}"></a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item next">
                            <a class="page-link" href="#"><img src="{{asset('img/icon/arrow-circle-right.svg')}}"></a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-06" role="tabpanel" aria-labelledby="v-pills-06-tab" tabindex="0">
                    <div class="d-flex align-items-center justify-content-between mb-5">
                      <form>
                        <div class="form-search position-relative">
                          <input type="text" class="form-control" placeholder="Search Case Study" name="">
                          <button type="submit"><img src="{{asset('img/icon/search-normal.svg')}}"></button>
                        </div>
                      </form>
                      <p class="mb-0 weight-700">20 Case Studies Result</p>
                    </div>
                    <h2 class="title title-lg weight-700 mb-5">Mechanical / Contractor & Manufacture Services</h2>
                    <p class="mb-5">Warehousing is one of the essential activity in any factory. In Industry 4.0, it is necessary to improve the efficiency and speed of warehousing activity so that it can match the ever-changing needs of the market. Below are our solution for lean warehousing.</p>
                    <ul class="list-unstyled list-resource row">
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-01.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Fleet Parking Management System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravelfleet is one of the solution for activities in the industry. The purpose of our system is to provide a system which can monitor the activity of the truck inside factory parking area and automate the administration process for the fleet activity report.</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Logistic System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravellog is a Smart Logistic System which integrate RFID technology and Internet of Things technology. It could be integrated with Lean Manufacture, Lean Warehousing or Toyota Production System in the company</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-03.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Factory Safety System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">The concern of safety in the industry is one of the top management priority. Inside the factory, there are lots of forklifts, gates and area which its safety aspect needs to be improve.Ravelzen is a comprehensive solution which focused on increasing the safety of the work environment of your company.</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                      <li class="col-md-6">
                        <div class="general-card">
                          <a href="resources-detail.html" class="card border-0 text-decoration-none">
                            <img src="{{asset('img/product/resource-02.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body pt-4 px-0">
                              <div class="tags d-flex align-items-center mb-4">
                                <ul class="list-unstyled d-flex align-items-center mb-0 w-100">
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Case Study</label></li>
                                  <li><input type="checkbox" id="" checked="" readonly=""><label for="" class="weight-400">Lean Warehousing/Warehouse 4.0</label></li>
                                </ul>
                              </div>
                              <h2 class="title title-md color-primary-neutral-100 my-3 h-auto d-block overflow-visible">Smart Logistic System</h2>
                              <p class="mb-0 mb-4 text-wrap border-0 info">Ravellog is a Smart Logistic System which integrate RFID technology and Internet of Things technology. It could be integrated with Lean Manufacture, Lean Warehousing or Toyota Production System in the company</p>
                              <div class="d-flex justify-content-between b-top-primary-100 pt-4">
                                <span class="title-sm weight-700 d-flex justify-content-between w-100">Read More Solution <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </li>
                    </ul>
                    <div class="d-flex justify-content-end">
                      <nav aria-label="" class="bold-pagination">
                        <ul class="pagination">
                          <li class="page-item prev disabled">
                            <a class="page-link"><img src="{{asset('img/icon/arrow-circle-right.svg')}}"></a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item next">
                            <a class="page-link" href="#"><img src="{{asset('img/icon/arrow-circle-right.svg')}}"></a>
                          </li>
                        </ul>
                      </nav>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/js/jquery.sticky-sidebar.js"></script>
  
  <script>
  $('.case-study .left').stickySidebar({
      topSpacing: 100,
      bottomSpacing: 0
    });
  </script>
@endsection