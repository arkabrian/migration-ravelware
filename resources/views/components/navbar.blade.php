<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand position-relative" href="/"><img src="{{ asset('img/logo/logo-ravelware.svg') }}"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" id="navbarText">
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-current="page" href="#"><span class="position-relative">Solution <img src="{{ asset('img/icon/arrow-down.svg') }}"></span></a>
            <div class="dropdown-menu solution-menu bg-primary-neutral-10 p-0">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                      <div class="accordion-item border-0">
                        <h2 class="accordion-header">
                          <div class="row m-0">
                            <div class="col-md-4 p-0">
                              <button class="accordion-button title-sm weight-700 bg-transparent px-0 pt-4 color-accent-180-pressed no-pseudo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span>INTELLIGENT MANUFACTURE SYSTEM</span>
                              </button>
                            </div>
                          </div>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                          <div class="accordion-body p-0">
                            <div class="row m-0 align-items-start">
                              <div class="nav flex-column nav-pills col-md-4" id="inteligent-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="inteligent-pills-01-tab" data-bs-toggle="pill" data-bs-target="#inteligent-pills-01" type="button" role="tab" aria-controls="inteligent-pills-01" aria-selected="true"><span>Factory</span></button>
                                <button class="nav-link" id="inteligent-pills-02-tab" data-bs-toggle="pill" data-bs-target="#inteligent-pills-02" type="button" role="tab" aria-controls="inteligent-pills-02" aria-selected="false"><span>Warehouse</span></button>
                                <button class="nav-link" id="inteligent-pills-03-tab" data-bs-toggle="pill" data-bs-target="#inteligent-pills-03" type="button" role="tab" aria-controls="inteligent-pills-03" aria-selected="false"><span>Logistics & Distribution</span></button>
                                <button class="nav-link" id="inteligent-pills-04-tab" data-bs-toggle="pill" data-bs-target="#inteligent-pills-04" type="button" role="tab" aria-controls="inteligent-pills-04" aria-selected="false"><span>Energy Saving</span></button>
                                <button class="nav-link" id="inteligent-pills-05-tab" data-bs-toggle="pill" data-bs-target="#inteligent-pills-05" type="button" role="tab" aria-controls="inteligent-pills-05" aria-selected="false"><span>Asset & Inventory</span></button>
                              </div>
                              <div class="tab-content col-md-8" id="inteligent-pills-tabContent">
                                <h2 class="d-flex align-items-center weight-400 title title-md color-primary-neutral-100"><a href="solution-product.html" class="title-md">Why choose our Intelligent Manufacture System (IMS)<img src="assets/img/icon/arrow-right.svg" class="ms-3"></a></h2>
                                <div class="tab-pane fade show active" id="inteligent-pills-01" role="tabpanel" aria-labelledby="inteligent-pills-01-tab" tabindex="0">
                                  <h3 class="title title title-md mb-4 weight-700">Factory</h3>
                                  <ul class="list-unstyled solution-list">
                                    <li>
                                      <div class="d-flex align-items-start">
                                        <div class="box-img"><img src="{{asset('img/product/dropdown/factory-01.jpg')}}"></div>
                                        <div class="box-info">
                                          <h4 class="weight-700 mb-4 title-sm color-primary-neutral-100">Smart Production Line</h4>
                                          <p class="mb-4 color-primary-neutral-80">Automated real-time OEE monitoring for precise decision-making and immediate actionable insights—features auto-data acquisition, preventive maintenance, manpower skill evaluations, defect tracking, and swift report generation.</p>
                                          <a href="" class="weight-700 d-inline-flex align-items-start">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex align-items-start">
                                        <div class="box-img"><img src="{{asset('img/product/dropdown/factory-02.jpg')}}"></div>
                                        <div class="box-info">
                                          <h4 class="weight-700 mb-4 title-sm color-primary-neutral-100">Smart Factory Safety System</h4>
                                          <p class="mb-4 color-primary-neutral-80">Elevate safety standards with integrated monitoring and automation, ensuring secure operations by leveraging authentication technology amongst forklifts, doors, gates, and restricted unauthorized access.</p>
                                          <a href="" class="weight-700 d-inline-flex align-items-start">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="tab-pane fade" id="inteligent-pills-02" role="tabpanel" aria-labelledby="inteligent-pills-02-tab" tabindex="0">
                                  <h3 class="title title title-md mb-4 weight-700">Warehouse</h3>
                                  <ul class="list-unstyled solution-list">
                                    <li>
                                      <div class="d-flex align-items-start">
                                        <div class="box-img"><img src="{{asset('img/product/dropdown/Warehouse-01.jpg')}}"></div>
                                        <div class="box-info">
                                          <h4 class="weight-700 mb-4 title-sm color-primary-neutral-100">Smart Warehouse Management</h4>
                                          <p class="mb-4 color-primary-neutral-80">A holistic automation solution for efficient/lean warehousing by leveraging IoT, RFID and deep-tech technologies. Streamline processes and boost visibility across all activities, which also acts as a formidable barrier against fraud (e.g. auto-input process on receiving and delivery or loading/unloading gates, automated goods searching, addressing and racking, preventive analysis on stocks forecasting and stocks movement)</p>
                                          <a href="" class="weight-700 d-inline-flex align-items-start">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="tab-pane fade" id="inteligent-pills-03" role="tabpanel" aria-labelledby="inteligent-pills-03-tab" tabindex="0">
                                  <h3 class="title title title-md mb-4 weight-700">Logistics & Distribution</h3>
                                  <ul class="list-unstyled solution-list">
                                    <li>
                                      <div class="d-flex align-items-start">
                                        <div class="box-img"><img src="{{asset('img/product/dropdown/logistic-01.jpg')}}"></div>
                                        <div class="box-info">
                                          <h4 class="weight-700 mb-4 title-sm color-primary-neutral-100">Smart Logistics</h4>
                                          <p class="mb-4 color-primary-neutral-80">A harmonious blend of IoT and RFID technologies focused on data accuracy, reduce manual input, and streamlined logistics operations.</p>
                                          <a href="" class="weight-700 d-inline-flex align-items-start">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex align-items-start">
                                        <div class="box-img"><img src="{{asset('img/product/dropdown/logistic-02.jpg')}}"></div>
                                        <div class="box-info">
                                          <h4 class="weight-700 mb-4 title-sm color-primary-neutral-100">Smart Fleet Management/ Truck Management</h4>
                                          <p class="mb-4 color-primary-neutral-80">Real-time monitoring for efficient fleet operations or truck parking arrangement; transforming reactive tasks into proactive strategies.</p>
                                          <a href="" class="weight-700 d-inline-flex align-items-start">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="tab-pane fade" id="inteligent-pills-04" role="tabpanel" aria-labelledby="inteligent-pills-04-tab" tabindex="0">
                                  <h3 class="title title title-md mb-4 weight-700">Energy Saving</h3>
                                  <ul class="list-unstyled solution-list">
                                    <li>
                                      <div class="d-flex align-items-start">
                                        <div class="box-img"><img src="{{asset('img/product/dropdown/energy-01.jpg')}}"></div>
                                        <div class="box-info">
                                          <h4 class="weight-700 mb-4 title-sm color-primary-neutral-100">Smart Lighting</h4>
                                          <p class="mb-4 color-primary-neutral-80">Beyond mere automation—our dynamic lighting adjusts to specific needs such as auto-lux-stabilizer and timer-mode, promoting energy savings, worker well-being, and a comfortable workspace.</p>
                                          <a href="" class="weight-700 d-inline-flex align-items-start">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex align-items-start">
                                        <div class="box-img"><img src="{{asset('img/product/dropdown/energy-02.jpg')}}"></div>
                                        <div class="box-info">
                                          <h4 class="weight-700 mb-4 title-sm color-primary-neutral-100">Smart Energy Monitoring</h4>
                                          <p class="mb-4 color-primary-neutral-80">Advanced energy tracking and analytics, preventive against wasted or unnecessary consumption, supporting carbon emission control across various settings powered by IoT and deep-tech capabilities.</p>
                                          <a href="" class="weight-700 d-inline-flex align-items-start">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                                <div class="tab-pane fade" id="inteligent-pills-05" role="tabpanel" aria-labelledby="inteligent-pills-05-tab" tabindex="0">
                                  <h3 class="title title title-md mb-4 weight-700">Asset & Inventory</h3>
                                  <ul class="list-unstyled solution-list">
                                    <li>
                                      <div class="d-flex align-items-start">
                                        <div class="box-img"><img src="{{asset('img/product/dropdown/asset-01.jpg')}}"></div>
                                        <div class="box-info">
                                          <h4 class="weight-700 mb-4 title-sm color-primary-neutral-100">Smart Asset/Inventory Management</h4>
                                          <p class="mb-4 color-primary-neutral-80">Robust monitoring and anti-fraud measures powered by IoT and deep-tech capabilities (e.g. minimize manual work on tracking, accounting, and managing the assets or inventories).</p>
                                          <a href="" class="weight-700 d-inline-flex align-items-start">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item border-0">
                        <h2 class="accordion-header">
                          <div class="row m-0">
                            <div class="col-md-4 p-0">
                              <button class="accordion-button collapsed title-sm weight-700 bg-transparent px-0 pt-0 color-accent-180-pressed no-pseudo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span>SOFTWARE CAPABILITY</span>
                              </button>
                            </div>
                          </div>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body p-0">
                            <div class="row m-0 align-items-start">
                              <div class="nav flex-column nav-pills col-md-4 d-none" id="software-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="software-pills-01-tab" data-bs-toggle="pill" data-bs-target="#software-pills-01" type="button" role="tab" aria-controls="software-pills-01" aria-selected="true"></button>
                              </div>
                              <div class="tab-content col-md-8" id="software-pills-tabContent">
                                <div class="tab-pane fade show active" id="software-pills-01" role="tabpanel" aria-labelledby="software-pills-01-tab" tabindex="0">
                                  <h3 class="title title title-md mb-4 weight-700">Software Capability</h3>
                                  <ul class="list-unstyled solution-list">
                                    <li>
                                      <div class="d-flex align-items-start">
                                        <div class="box-img"><img src="{{asset('img/product/dropdown/software-01.jpg')}}"></div>
                                        <div class="box-info">
                                          <h4 class="weight-700 mb-4 title-sm color-primary-neutral-100">Custom Software Development</h4>
                                          <p class="mb-4 color-primary-neutral-80">Harness our deep-tech expertise to craft tailor-made software solutions from scratch. We ensure a perfect fit for your specific challenges and digital transformation objectives.</p>
                                          <a href="" class="weight-700 d-inline-flex align-items-start">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <div class="d-flex align-items-start">
                                        <div class="box-img"><img src="{{asset('img/product/dropdown/software-02.jpg')}}"></div>
                                        <div class="box-info">
                                          <h4 class="weight-700 mb-4 title-sm color-primary-neutral-100">Intuitive Dashboard & Interface</h4>
                                          <p class="mb-4 color-primary-neutral-80">Accelerate your automation and digitalization efforts with our user-friendly interfaces/ dashboard. Seamlessly integrate across machines, production lines, devices, and even legacy applications.</p>
                                          <a href="" class="weight-700 d-inline-flex align-items-start">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item border-0">
                        <h2 class="accordion-header">
                          <div class="row m-0">
                            <div class="col-md-4 p-0">
                              <button class="accordion-button collapsed title-sm weight-700 bg-transparent px-0 pt-0 color-accent-180-pressed no-pseudo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span>HARDWARE SUPPLY</span>
                              </button>
                            </div>
                          </div>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body p-0">
                            <div class="row m-0 align-items-start">
                              <div class="nav flex-column nav-pills col-md-4" id="hardware-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="hardware-pills-01-tab" data-bs-toggle="pill" data-bs-target="#hardware-pills-01" type="button" role="tab" aria-controls="hardware-pills-01" aria-selected="true"><span>RFID Technology</span></button>
                                <button class="nav-link" id="hardware-pills-02-tab" data-bs-toggle="pill" data-bs-target="#hardware-pills-02" type="button" role="tab" aria-controls="hardware-pills-02" aria-selected="false"><span>Safety & Access</span></button>
                                <button class="nav-link" id="hardware-pills-03-tab" data-bs-toggle="pill" data-bs-target="#hardware-pills-03" type="button" role="tab" aria-controls="hardware-pills-03" aria-selected="true"><span>Smart Lighting Solution</span></button>
                                <button class="nav-link" id="hardware-pills-04-tab" data-bs-toggle="pill" data-bs-target="#hardware-pills-04" type="button" role="tab" aria-controls="hardware-pills-04" aria-selected="false"><span>Logistics & Truck Management</span></button>
                                <button class="nav-link" id="hardware-pills-05-tab" data-bs-toggle="pill" data-bs-target="#hardware-pills-05" type="button" role="tab" aria-controls="hardware-pills-05" aria-selected="true"><span>Infrastructure Solution</span></button>
                              </div>
                              <div class="tab-content col-md-8" id="hardware-pills-tabContent">
                                <div class="tab-pane fade show active" id="hardware-pills-01" role="tabpanel" aria-labelledby="hardware-pills-01-tab" tabindex="0">
                                  <h3 class="title title title-md mb-4 weight-700">RFID Technology</h3>
                                  <ul class="list-unstyled solution-list thumbnail row">
                                    <li class="col-md-4">
                                      <a href="" class="d-flex align-items-start flex-column">
                                        <div class="box-img auto"><img src="{{asset('img/product/dropdown/rfid-01.jpg')}}"></div>
                                        <div class="box-info">
                                          <div class="weight-700 d-flex justify-content-between align-items-start">RFID TAG<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                                        </div>
                                      </a>
                                    </li>
                                    <li class="col-md-4">
                                      <a href="" class="d-flex align-items-start flex-column">
                                        <div class="box-img auto"><img src="{{asset('img/product/dropdown/rfid-02.jpg')}}"></div>
                                        <div class="box-info">
                                          <div class="weight-700 d-flex justify-content-between align-items-start">RFID Reader<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                                        </div>
                                      </a>
                                    </li>
                                    <li class="col-md-4">
                                      <a href="" class="d-flex align-items-start flex-column">
                                        <div class="box-img auto"><img src="{{asset('img/product/dropdown/rfid-03.jpg')}}"></div>
                                        <div class="box-info">
                                          <div class="weight-700 d-flex justify-content-between align-items-start">RFID Antena<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                                        </div>
                                      </a>
                                    </li>
                                    <li class="col-md-4">
                                      <a href="" class="d-flex align-items-start flex-column">
                                        <div class="box-img auto"><img src="{{asset('img/product/dropdown/rfid-04.jpg')}}"></div>
                                        <div class="box-info">
                                          <div class="weight-700 d-flex justify-content-between align-items-start">RFID Receiving Gate (ideal for smart factories and warehouses)<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="tab-pane fade" id="hardware-pills-02" role="tabpanel" aria-labelledby="hardware-pills-02-tab" tabindex="0">
                                  <h3 class="title title title-md mb-4 weight-700">Safety & Access</h3>
                                  <ul class="list-unstyled solution-list thumbnail row">
                                    <li class="col-md-4">
                                      <a href="" class="d-flex align-items-start flex-column">
                                        <div class="box-img auto"><img src="{{asset('img/product/dropdown/safety-01.jpg')}}"></div>
                                        <div class="box-info">
                                          <div class="weight-700 d-flex justify-content-between align-items-start">Safety Access Gate (optimized for smart factories and warehouses)<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="tab-pane fade" id="hardware-pills-03" role="tabpanel" aria-labelledby="hardware-pills-03-tab" tabindex="0">
                                  <h3 class="title title title-md mb-4 weight-700">Smart Lighting Solution</h3>
                                  <ul class="list-unstyled solution-list thumbnail row">
                                    <li class="col-md-4">
                                      <a href="" class="d-flex align-items-start flex-column">
                                        <div class="box-img auto"><img src="{{asset('img/product/dropdown/lighting-01.jpg')}}"></div>
                                        <div class="box-info">
                                          <div class="weight-700 d-flex justify-content-between align-items-start">Industrial Lamp<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                                        </div>
                                      </a>
                                    </li>
                                    <li class="col-md-4">
                                      <a href="" class="d-flex align-items-start flex-column">
                                        <div class="box-img auto"><img src="{{asset('img/product/dropdown/lighting-02.jpg')}}"></div>
                                        <div class="box-info">
                                          <div class="weight-700 d-flex justify-content-between align-items-start">Roadway Lamp<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                                        </div>
                                      </a>
                                    </li>
                                    <li class="col-md-4">
                                      <a href="" class="d-flex align-items-start flex-column">
                                        <div class="box-img auto"><img src="{{asset('img/product/dropdown/lighting-03.jpg')}}"></div>
                                        <div class="box-info">
                                          <div class="weight-700 d-flex justify-content-between align-items-start">Control Unit<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                                        </div>
                                      </a>
                                    </li>
                                    <li class="col-md-4">
                                      <a href="" class="d-flex align-items-start flex-column">
                                        <div class="box-img auto"><img src="{{asset('img/product/dropdown/lighting-04.jpg')}}"></div>
                                        <div class="box-info">
                                          <div class="weight-700 d-flex justify-content-between align-items-start">Lux Sensor<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                                        </div>
                                      </a>
                                    </li>
                                    <li class="col-md-4">
                                      <a href="" class="d-flex align-items-start flex-column">
                                        <div class="box-img auto"><img src="{{asset('img/product/dropdown/lighting-05.jpg')}}"></div>
                                        <div class="box-info">
                                          <div class="weight-700 d-flex justify-content-between align-items-start">PIR Sensor<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="tab-pane fade" id="hardware-pills-04" role="tabpanel" aria-labelledby="hardware-pills-04-tab" tabindex="0">
                                  <h3 class="title title title-md mb-4 weight-700">Logistics and Truck Management</h3>
                                  <ul class="list-unstyled solution-list thumbnail row">
                                    <li class="col-md-4">
                                      <a href="" class="d-flex align-items-start flex-column">
                                        <div class="box-img auto"><img src="{{asset('img/product/dropdown/truck-01.jpg')}}"></div>
                                        <div class="box-info">
                                          <div class="weight-700 d-flex justify-content-between align-items-start">Truck Detection Sensor<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                                        </div>
                                      </a>
                                    </li>
                                    <li class="col-md-4">
                                      <a href="" class="d-flex align-items-start flex-column">
                                        <div class="box-img auto"><img src="{{asset('img/product/dropdown/truck-02.jpg')}}"></div>
                                        <div class="box-info">
                                          <div class="weight-700 d-flex justify-content-between align-items-start">Automatic Package Measurer<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="tab-pane fade" id="hardware-pills-05" role="tabpanel" aria-labelledby="hardware-pills-05-tab" tabindex="0">
                                  <h3 class="title title title-md mb-4 weight-700">Infrastructure Solutions</h3>
                                  <ul class="list-unstyled solution-list thumbnail row">
                                    <li class="col-md-4">
                                      <a href="" class="d-flex align-items-start flex-column">
                                        <div class="box-img auto"><img src="{{asset('img/product/dropdown/infra-01.jpg')}}"></div>
                                        <div class="box-info">
                                          <div class="weight-700 d-flex justify-content-between align-items-start">Comprehensive electrical wiring, cabling, and rerouting services for smart devices and CCTV systems.<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                                        </div>
                                      </a>
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
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $activeMenu === 'case_study' ? 'active' : '' }}" href="/case-study"><span class="position-relative">Case Study</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $activeMenu === 'consultation' ? 'active' : '' }}" href="/consultation"><span class="position-relative">Consultation</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $activeMenu === 'about_us' ? 'active' : '' }}" href="/about"><span class="position-relative">About Us</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $activeMenu === 'resources' ? 'active' : '' }}" href="/resources"><span class="position-relative">Resources</span></a>
          </li>
        </ul>
        <a href="/contact" class="btn-lg btn-black px-4 d-flex align-items-center position-relative">Let's Talk</a>
      </div>
    </div>
  </div>
</nav>