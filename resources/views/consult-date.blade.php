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
  
  <div class="wrapper">
    <!-- Header -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand position-relative" href="#"><img src="{{asset('img/logo/logo-ravelware.svg')}}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" id="navbarText">
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-current="page" href="#"><span class="position-relative">Solution <img src="{{asset('img/icon/arrow-down.svg')}}"></span></a>
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
                                    <h2 class="d-flex align-items-center weight-400 title title-md color-primary-neutral-100"><a href="solution-product.html" class="title-md">Why choose our Intelligent Manufacture System (IMS)<img src="{{asset('img/icon/arrow-right.svg')}}" class="ms-3"></a></h2>
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
                <a class="nav-link" href="#"><span class="position-relative">Case Study</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#"><span class="position-relative">Consultation</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><span class="position-relative">About Us</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="resources.html"><span class="position-relative">Resources</span></a>
              </li>
            </ul>
            <a href="contact-us.html" class="btn-lg btn-black px-4 d-flex align-items-center position-relative">Let's Talk</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Header -->

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