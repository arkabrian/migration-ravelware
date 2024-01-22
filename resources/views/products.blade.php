@extends('layout')
@section('content')
    <div class="content">
      <div class="solution-page">
        <div class="position-relative">
          <div class="solution-title">
            <!-- <div class="container"> -->
              <div class="box-title">
                <h2 class="tit title-lg">Why choose our Intelligent Manufacture System (IMS)?</h2>
                <a href="/consult-date" class="btn-lg btn-black px-4 d-inline-flex align-items-center mt-4" tabindex="0">Book Consultation &amp; Demo</a>
              </div>
            <!-- </div> -->
          </div>

          <!-- <div class="position-relative"> -->
            <div class="solution-banner">
              <img src="{{asset('img/solution-product.jpg')}}" class="banner-img">
            </div>

            <div class="list-reason">
              <div class="container">
                <ul class="list-unstyled mb-0">
                  <li>
                    <img src="{{asset('img/why-01.png')}}">
                    <div class="row mt-5">
                      <div class="col-md-5">
                        <h2 class="title text-uppercase title-lg">MAXIMIZE RESOURCES FOR PRECISE OUTCOMES</h2>
                      </div>
                      <div class="col-md-7 ps-5">
                        <p>Harness the power of our 5+1 pillars: </p>
                        <ul>
                          <li>IoT for optimal connectivity</li>
                          <li>Enhanced Overall Equipment Effectiveness (OEE)</li>
                          <li>Streamlined Total Productive Maintenance (TPM)</li>
                          <li>Just-in-Time monitoring</li>
                          <li>Jidoka-driven human empowerment</li>
                          <li>PLUS our dedicated expert will support every customer from day one.</li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <img src="{{asset('img/why-02.png')}}">
                    <div class="row mt-5">
                      <div class="col-md-5">
                        <h2 class="title text-uppercase title-lg">TARGETED CONTINUOUS IMPROVEMENT</h2>
                      </div>
                      <div class="col-md-7 ps-5">
                        <p>Address the 8-wastes in production-line (e.g., defects, overproduction, waiting, underutilized talent, unnecessary motion by people, unnecessary movement by materials, extra-processing, excess inventories) with precision, paving the way for impactful results.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <img src="{{asset('img/why-03.png')}}">
                    <div class="row mt-5">
                      <div class="col-md-5">
                        <h2 class="title text-uppercase title-lg">SEAMLESS, ADAPTABLE, RAPID DEPLOYMENT</h2>
                      </div>
                      <div class="col-md-7 ps-5">
                        <p>Experience a comprehensive ERP solution that minimizes human input by leveraging RFID, AI, and smart-sensor technologies. Seamlessly integrate with any existing back-office systems and cater to diverse user requirements.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <img src="{{asset('img/why-04.png')}}">
                    <div class="row mt-5">
                      <div class="col-md-5">
                        <h2 class="title text-uppercase title-lg">REAL-TIME INSIGHTS WITH INTUITIVITY</h2>
                      </div>
                      <div class="col-md-7 ps-5">
                        <p>Our production monitoring and OEE software offers precise measurements, immediate actionable insights, and a user-friendly interface to enhance productivity, safety, and efficiency.</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          <!-- </div> -->
        </div>

        <div class="py-100 intelligent-product bg-primary-neutral-100" id="ims">
          <div class="container">
            <h2 class="title mb-5 title-2xl color-primary-neutral-10 text-center">Inside the<br>Intelligent Manufacture System</h2>
            <div class="overflow-nav">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="red-tab" data-bs-toggle="tab" data-bs-target="#red-tab-pane" type="button" role="tab" aria-controls="red-tab-pane" aria-selected="true">Factory</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="blue-tab" data-bs-toggle="tab" data-bs-target="#blue-tab-pane" type="button" role="tab" aria-controls="blue-tab-pane" aria-selected="false">Warehouse</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="green-tab" data-bs-toggle="tab" data-bs-target="#green-tab-pane" type="button" role="tab" aria-controls="green-tab-pane" aria-selected="false">Logistic & Distribution</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="yellow-tab" data-bs-toggle="tab" data-bs-target="#yellow-tab-pane" type="button" role="tab" aria-controls="yellow-tab-pane" aria-selected="false">Energy Saving</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pink-tab" data-bs-toggle="tab" data-bs-target="#pink-tab-pane" type="button" role="tab" aria-controls="pink-tab-pane" aria-selected="false">Asset & Inventory</button>
                </li>
              </ul>
            </div>
            <div class="tab-content mt-5" id="myTabContent">
              <div class="tab-pane fade show active" id="red-tab-pane" role="tabpanel" aria-labelledby="red-tab" tabindex="0">
                <ul class="list-unstyled solution-list">
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="box-img"><img src="{{asset('img/product/dropdown/factory-01.jpg')}}"></div>
                      <div class="box-info">
                        <h4 class="title weight-700 mb-4 title-lg color-primary-neutral-10">Smart Production Line</h4>
                        <p class="mb-4 title-sm color-primary-neutral-50">Automated real-time OEE monitoring for precise decision-making and immediate actionable insights—features auto-data acquisition, preventive maintenance, manpower skill evaluations, defect tracking, and swift report generation.</p>
                        <a href="/consult-date" class="weight-700 d-inline-flex align-items-start title-sm color-primary-neutral-10 text-decoration-none">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="box-img"><img src="{{asset('img/product/dropdown/factory-02.jpg')}}"></div>
                      <div class="box-info">
                        <h4 class="title weight-700 mb-4 title-lg color-primary-neutral-10">Smart Factory Safety System</h4>
                        <p class="mb-4 title-sm color-primary-neutral-50">Elevate safety standards with integrated monitoring and automation, ensuring secure operations by leveraging authentication technology amongst forklifts, doors, gates, and restricted unauthorized access.</p>
                        <a href="/consult-date" class="weight-700 d-inline-flex align-items-start title-sm color-primary-neutral-10 text-decoration-none">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="tab-pane fade" id="blue-tab-pane" role="tabpanel" aria-labelledby="blue-tab" tabindex="0">
                <ul class="list-unstyled solution-list">
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="box-img"><img src="{{asset('img/product/dropdown/warehouse-01.jpg')}}"></div>
                      <div class="box-info">
                        <h4 class="title weight-700 mb-4 title-lg color-primary-neutral-10">Smart Warehouse Management</h4>
                        <p class="mb-4 title-sm color-primary-neutral-50">A holistic automation solution for efficient/lean warehousing by leveraging IoT, RFID and deep-tech technologies. Streamline processes and boost visibility across all activities, which also acts as a formidable barrier against fraud (e.g. auto-input process on receiving and delivery or loading/unloading gates, automated goods searching, addressing and racking, preventive analysis on stocks forecasting and stocks movement)</p>
                        <a href="/consult-date" class="weight-700 d-inline-flex align-items-start title-sm color-primary-neutral-10 text-decoration-none">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="tab-pane fade" id="green-tab-pane" role="tabpanel" aria-labelledby="green-tab" tabindex="0">
                <ul class="list-unstyled solution-list">
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="box-img"><img src="{{asset('img/product/dropdown/logistic-01.jpg')}}"></div>
                      <div class="box-info">
                        <h4 class="title weight-700 mb-4 title-lg color-primary-neutral-10">Smart Logistics</h4>
                        <p class="mb-4 title-sm color-primary-neutral-50">A harmonious blend of IoT and RFID technologies focused on data accuracy, reduce manual input, and streamlined logistics operations.</p>
                        <a href="/consult-date" class="weight-700 d-inline-flex align-items-start title-sm color-primary-neutral-10 text-decoration-none">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="box-img"><img src="{{asset('img/product/dropdown/logistic-02.jpg')}}"></div>
                      <div class="box-info">
                        <h4 class="title weight-700 mb-4 title-lg color-primary-neutral-10">Smart Fleet Management/ Truck Management</h4>
                        <p class="mb-4 title-sm color-primary-neutral-50">Real-time monitoring for efficient fleet operations or truck parking arrangement; transforming reactive tasks into proactive strategies.</p>
                        <a href="/consult-date" class="weight-700 d-inline-flex align-items-start title-sm color-primary-neutral-10 text-decoration-none">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="tab-pane fade" id="yellow-tab-pane" role="tabpanel" aria-labelledby="yellow-tab" tabindex="0">
                <ul class="list-unstyled solution-list">
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="box-img"><img src="{{asset('img/product/dropdown/energy-01.jpg')}}"></div>
                      <div class="box-info">
                        <h4 class="title weight-700 mb-4 title-lg color-primary-neutral-10">Smart Lighting</h4>
                        <p class="mb-4 title-sm color-primary-neutral-50">Beyond mere automation—our dynamic lighting adjusts to specific needs such as auto-lux-stabilizer and timer-mode, promoting energy savings, worker well-being, and a comfortable workspace.</p>
                        <a href="/consult-date" class="weight-700 d-inline-flex align-items-start title-sm color-primary-neutral-10 text-decoration-none">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="box-img"><img src="{{asset('img/product/dropdown/energy-02.jpg')}}"></div>
                      <div class="box-info">
                        <h4 class="title weight-700 mb-4 title-lg color-primary-neutral-10">Smart Energy Monitoring</h4>
                        <p class="mb-4 title-sm color-primary-neutral-50">Advanced energy tracking and analytics, preventive against wasted or unnecessary consumption, supporting carbon emission control across various settings powered by IoT and deep-tech capabilities.</p>
                        <a href="/consult-date" class="weight-700 d-inline-flex align-items-start title-sm color-primary-neutral-10 text-decoration-none">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="tab-pane fade" id="pink-tab-pane" role="tabpanel" aria-labelledby="pink-tab" tabindex="0">
                <ul class="list-unstyled solution-list">
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="box-img"><img src="{{asset('img/product/dropdown/asset-01.jpg')}}"></div>
                      <div class="box-info">
                        <h4 class="title weight-700 mb-4 title-lg color-primary-neutral-10">Smart Asset/Inventory Management</h4>
                        <p class="mb-4 title-sm color-primary-neutral-50">Robust monitoring and anti-fraud measures powered by IoT and deep-tech capabilities (e.g. minimize manual work on tracking, accounting, and managing the assets or inventories).</p>
                        <a href="/consult-date" class="weight-700 d-inline-flex align-items-start title-sm color-primary-neutral-10 text-decoration-none">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-primary-neutral-20" id="pabos">
          <div class="row m-0 list-unstyled solution-list">
            <div class="col-md-6 p-5">
              <img src="{{asset('img/product/product-04-initial.png')}}" class="initial img-fluid h-auto">
              <div class="ps-4">
                <span class="btn-md btn-black px-3 d-inline-flex align-items-center weight-400">Product & Solution</span>
                <h2 class="title title-2xl weight-700 mb-0 mt-4">PA'BOS - Productivity Assurance By Optimization & Standardization</h2>
                <h3 class="title title-lg weight-400 mb-0 mt-3">Productivity vs Efficiency in Manufacture</h3>
                <p class="mb-0 color-primary-neutral-100 title-sm">Productivity and efficiency, though often used interchangeably, are distinct concepts in manufacturing. Productivity, the output-input ratio, quantifies the quantity of goods produced, involving resources like people, machinery, and materials. Efficiency, in contrast, gauges the proportion of flawless output with minimal waste, emphasizing quality. In a successful operation, a harmonious balance between high productivity and efficiency is crucial. Imagine a scenario with high productivity but low efficiency resulting in frequent rework, or high efficiency but low productivity leading to potential delays and low inventory. Striking this balance is essential for optimal manufacturing performance. Explore the best practices outlined here to navigate this relationship effectively and enhance your manufacturing processes.</p>
                <h2 class="title title-lg weight-400 mb-0 mt-3">Unlock a 12-Month Money-Back Guarantee if You Don't Achieve a Minimum 10% Productivity Increase</h2>
                <p class="mb-3 color-primary-neutral-100">Pa'Bos will stand as the most effective entry point for your manufacture to simultaneously increase productivity and maximize efficiency by aligning with the 9 principles of productivity optimization</p> 
                <span class="ps-4 d-block mb-1"><span class="d-list-item weight-700">- Ensure Seamless Production Kickoff</span></span>
                <span class="ps-4 d-block mb-1"><span class="d-list-item weight-700">- Precision Timing for Shop Floor Success</span></span>
                <span class="ps-4 d-block mb-1"><span class="d-list-item weight-700">- Commitment-Driven Prioritization</span></span>
                <span class="ps-4 d-block mb-1"><span class="d-list-item weight-700">- Transformative Workflow Examination</span></span>
                <span class="ps-4 d-block mb-1"><span class="d-list-item weight-700">- Strategic Monitoring with Key Metrics</span></span>
                <span class="ps-4 d-block mb-1"><span class="d-list-item weight-700">- Empower Your Team with Ongoing Training</span></span>
                <span class="ps-4 d-block mb-1"><span class="d-list-item weight-700">- Supplier Excellence through Strategic Management</span></span>
                <span class="ps-4 d-block mb-1"><span class="d-list-item weight-700">- Proactive Maintenance for Uninterrupted Operations</span></span>
                <span class="ps-4 d-block mb-1"><span class="d-list-item weight-700">- Tailored Solutions for Optimal Investment</span></span>
                <p class="mt-3 mb-3 color-primary-neutral-100">In Pa'Bos, you will get private counseling from our experts along with the smart softwares support since day one.</p>
                <a href="/consult-date" class="weight-700 d-inline-flex align-items-start title-sm color-primary-neutral-100 text-decoration-none">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
              </div>
            </div>
            <div class="col-md-6 p-0">
              <img src="{{asset('img/product/dropdown/PABOS.jpg')}}" class="object-fit-cover w-100 h-100">
            </div>
          </div>
        </div>

        <div class="py-100 software-product bg-primary-neutral-10" id="software">
          <div class="container">
            <div class="d-flex align-items-center">
              <img src="{{asset('img/product/product-02-initial.png')}}" class="initial img-fluid h-auto">
              <div class="ps-4">
                <span class="btn-md btn-black px-3 d-inline-flex align-items-center weight-400">Product & Solution</span>
                <h2 class="title title-2xl weight-700 mb-0 mt-4">Software Capability</h2>
              </div>
            </div>

            <div class="intelligent-product mt-90">
              <ul class="list-unstyled solution-list">
                <li>
                  <div class="d-flex align-items-start top-title">
                    <div class="box-img"><img src="{{asset('img/product/dropdown/software-01.jpg')}}"></div>
                    <div class="box-info">
                      <h4 class="title weight-700 mb-4 title-lg color-primary-neutral-100">Custom Software Development</h4>
                      <p class="mb-4 title-sm color-primary-neutral-80">Harness our deep-tech expertise to craft tailor-made software solutions from scratch. We ensure a perfect fit for your specific challenges and digital transformation objectives.</p>
                      <a href="" class="weight-700 d-inline-flex align-items-start title-sm color-primary-neutral-100 text-decoration-none">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="d-flex align-items-start">
                    <div class="box-img"><img src="{{asset('img/product/dropdown/software-02.jpg')}}"></div>
                    <div class="box-info">
                      <h4 class="title weight-700 mb-4 title-lg color-primary-neutral-100">Intuitive Dashboard & Interface</h4>
                      <p class="mb-4 title-sm color-primary-neutral-80">Accelerate your automation and digitalization efforts with our user-friendly interfaces/ dashboard. Seamlessly integrate across machines, production lines, devices, and even legacy applications.</p>
                      <a href="/consult-date" class="weight-700 d-inline-flex align-items-start title-sm color-primary-neutral-100 text-decoration-none">Learn More<img src="{{asset('img/icon/arrow-right-block.svg')}}" class="ms-2"></a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="py-100 hardware-product bg-primary-neutral-20" id="hardware">
          <div class="container">
            <div class="d-flex align-items-start top-title">
              <img src="{{asset('img/product/product-03-initial.png')}}" class="initial img-fluid h-auto">
              <div class="ps-4 row">
                <div class="col-md-6">
                  <span class="btn-md btn-black px-3 d-inline-flex align-items-center weight-400">Product & Solution</span>
                  <h2 class="title title-2xl weight-700 mb-0 mt-4">Hardware Supply</h2>
                </div>
                <div class="col-md-6">
                  <p class="mb-0">
                    Driven by our unwavering commitment to research and development on deep-tech that supports Industry 4.0.
                    We take pride in our in-house developed high-quality hardware. These components complement our one-stop automation service, ensuring an unparalleled user experience.
                    <br>
                    <br>
                    For those on a digital transformation journey, our hardware can also be purchased individually. Connect with our team for consultations and orders
                  </p>
                </div>
              </div>
            </div>

            <div class="case-study mt-90">
              <h3 class="title title-lg weight-700 mb-5">Product</h3>
              <div class="d-flex align-items-start">
                <div class="left">
                  <div class="wrapper-sticky">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <button class="nav-link active" id="v-pills-01-tab" data-bs-toggle="pill" data-bs-target="#v-pills-01" type="button" role="tab" aria-controls="v-pills-01" aria-selected="true">RFID Technology</button>
                      <button class="nav-link" id="v-pills-02-tab" data-bs-toggle="pill" data-bs-target="#v-pills-02" type="button" role="tab" aria-controls="v-pills-02" aria-selected="false">Safety & Access</button>
                      <button class="nav-link" id="v-pills-03-tab" data-bs-toggle="pill" data-bs-target="#v-pills-03" type="button" role="tab" aria-controls="v-pills-03" aria-selected="false">Smart Lighting Solution</button>
                      <button class="nav-link" id="v-pills-04-tab" data-bs-toggle="pill" data-bs-target="#v-pills-04" type="button" role="tab" aria-controls="v-pills-04" aria-selected="false">Logistics & Truck Management</button>
                      <button class="nav-link" id="v-pills-05-tab" data-bs-toggle="pill" data-bs-target="#v-pills-05" type="button" role="tab" aria-controls="v-pills-05" aria-selected="false">Infrastucture Solution</button>
                    </div>
                  </div>
                </div>
                <div class="right">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-01" role="tabpanel" aria-labelledby="v-pills-01-tab" tabindex="0">
                      <div class="d-flex align-items-center justify-content-between mb-5">
                        <form>
                          <div class="form-search position-relative">
                            <input type="text" class="form-control" placeholder="Search Product" name="">
                            <button type="submit"><img src="{{asset('img/icon/search-normal.svg')}}"></button>
                          </div>
                        </form>
                        <p class="mb-0 weight-700">4 Product for RFID Technology</p>
                      </div>
                      <ul class="list-unstyled solution-list thumbnail row">
                        <li class="col-md-6">
                          <div class="bg-primary-neutral-10 p-4">
                            <a href="/consult-date" class="d-flex align-items-start flex-column color-primary-neutral-100 text-decoration-none">
                              <div class="box-img auto"><img src="{{asset('img/product/dropdown/rfid-01.jpg')}}"></div>
                              <div class="box-info">
                                <div class="weight-700 d-flex justify-content-between align-items-start">RFID TAG<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="col-md-6">
                          <div class="bg-primary-neutral-10 p-4">
                            <a href="/consult-date" class="d-flex align-items-start flex-column color-primary-neutral-100 text-decoration-none">
                              <div class="box-img auto"><img src="{{asset('img/product/dropdown/rfid-02.jpg')}}"></div>
                              <div class="box-info">
                                <div class="weight-700 d-flex justify-content-between align-items-start">RFID Reader<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="col-md-6">
                          <div class="bg-primary-neutral-10 p-4">
                            <a href="/consult-date" class="d-flex align-items-start flex-column color-primary-neutral-100 text-decoration-none">
                              <div class="box-img auto"><img src="{{asset('img/product/dropdown/rfid-03.jpg')}}"></div>
                              <div class="box-info">
                                <div class="weight-700 d-flex justify-content-between align-items-start">RFID Antena<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="col-md-6">
                          <div class="bg-primary-neutral-10 p-4">
                            <a href="/consult-date" class="d-flex align-items-start flex-column color-primary-neutral-100 text-decoration-none">
                              <div class="box-img auto"><img src="{{asset('img/product/dropdown/rfid-04.jpg')}}"></div>
                              <div class="box-info">
                                <div class="weight-700 d-flex justify-content-between align-items-start">RFID Receiving Gate (ideal for smart factories and warehouses)<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                              </div>
                            </a>
                          </div>
                        </li>
                      </ul>
                    </div>

                    <div class="tab-pane fade" id="v-pills-02" role="tabpanel" aria-labelledby="v-pills-02-tab" tabindex="0">
                      <div class="d-flex align-items-center justify-content-between mb-5">
                        <form>
                          <div class="form-search position-relative">
                            <input type="text" class="form-control" placeholder="Search Product" name="">
                            <button type="submit"><img src="{{asset('img/icon/search-normal.svg')}}"></button>
                          </div>
                        </form>
                        <p class="mb-0 weight-700">1 Product for Safety & Access</p>
                      </div>
                      <ul class="list-unstyled solution-list thumbnail row">
                        <li class="col-md-6">
                          <div class="bg-primary-neutral-10 p-4">
                            <a href="/consult-date" class="d-flex align-items-start flex-column color-primary-neutral-100 text-decoration-none">
                              <div class="box-img auto"><img src="{{asset('img/product/dropdown/safety-01.jpg')}}"></div>
                              <div class="box-info">
                                <div class="weight-700 d-flex justify-content-between align-items-start">Safety Access Gate (optimized for smart factories and warehouses)<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                              </div>
                            </a>
                          </div>
                        </li>
                      </ul>
                    </div>

                    <div class="tab-pane fade" id="v-pills-03" role="tabpanel" aria-labelledby="v-pills-03-tab" tabindex="0">
                      <div class="d-flex align-items-center justify-content-between mb-5">
                        <form>
                          <div class="form-search position-relative">
                            <input type="text" class="form-control" placeholder="Search Product" name="">
                            <button type="submit"><img src="{{asset('img/icon/search-normal.svg')}}"></button>
                          </div>
                        </form>
                        <p class="mb-0 weight-700">5 Product for Smart Lighting Solution</p>
                      </div>
                      <ul class="list-unstyled solution-list thumbnail row">
                        <li class="col-md-6">
                          <div class="bg-primary-neutral-10 p-4">
                            <a href="/consult-date" class="d-flex align-items-start flex-column color-primary-neutral-100 text-decoration-none">
                              <div class="box-img auto"><img src="{{asset('img/product/dropdown/lighting-01.jpg')}}"></div>
                              <div class="box-info">
                                <div class="weight-700 d-flex justify-content-between align-items-start">Industrial Lamp<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="col-md-6">
                          <div class="bg-primary-neutral-10 p-4">
                            <a href="/consult-date" class="d-flex align-items-start flex-column color-primary-neutral-100 text-decoration-none">
                              <div class="box-img auto"><img src="{{asset('img/product/dropdown/lighting-02.jpg')}}"></div>
                              <div class="box-info">
                                <div class="weight-700 d-flex justify-content-between align-items-start">Roadway Lamp<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="col-md-6">
                          <div class="bg-primary-neutral-10 p-4">
                            <a href="/consult-date" class="d-flex align-items-start flex-column color-primary-neutral-100 text-decoration-none">
                              <div class="box-img auto"><img src="{{asset('img/product/dropdown/lighting-03.jpg')}}"></div>
                              <div class="box-info">
                                <div class="weight-700 d-flex justify-content-between align-items-start">Control Unit<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="col-md-6">
                          <div class="bg-primary-neutral-10 p-4">
                            <a href="/consult-date" class="d-flex align-items-start flex-column color-primary-neutral-100 text-decoration-none">
                              <div class="box-img auto"><img src="{{asset('img/product/dropdown/lighting-04.jpg')}}"></div>
                              <div class="box-info">
                                <div class="weight-700 d-flex justify-content-between align-items-start">Lux Sensor<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="col-md-6">
                          <div class="bg-primary-neutral-10 p-4">
                            <a href="/consult-date" class="d-flex align-items-start flex-column color-primary-neutral-100 text-decoration-none">
                              <div class="box-img auto"><img src="{{asset('img/product/dropdown/lighting-05.jpg')}}"></div>
                              <div class="box-info">
                                <div class="weight-700 d-flex justify-content-between align-items-start">PIR Sensor<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                              </div>
                            </a>
                          </div>
                        </li>
                      </ul>
                    </div>

                    <div class="tab-pane fade" id="v-pills-04" role="tabpanel" aria-labelledby="v-pills-04-tab" tabindex="0">
                      <div class="d-flex align-items-center justify-content-between mb-5">
                        <form>
                          <div class="form-search position-relative">
                            <input type="text" class="form-control" placeholder="Search Product" name="">
                            <button type="submit"><img src="{{asset('img/icon/search-normal.svg')}}"></button>
                          </div>
                        </form>
                        <p class="mb-0 weight-700">2 Product for Logistics & Truck Management</p>
                      </div>
                      <ul class="list-unstyled solution-list thumbnail row">
                        <li class="col-md-6">
                          <div class="bg-primary-neutral-10 p-4">
                            <a href="/consult-date" class="d-flex align-items-start flex-column color-primary-neutral-100 text-decoration-none">
                              <div class="box-img auto"><img src="{{asset('img/product/dropdown/truck-01.jpg')}}"></div>
                              <div class="box-info">
                                <div class="weight-700 d-flex justify-content-between align-items-start">Truck Detection Sensor<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                              </div>
                            </a>
                          </div>
                        </li>
                        <li class="col-md-6">
                          <div class="bg-primary-neutral-10 p-4">
                            <a href="/consult-date" class="d-flex align-items-start flex-column color-primary-neutral-100 text-decoration-none">
                              <div class="box-img auto"><img src="{{asset('img/product/dropdown/package.png')}}"></div>
                              <div class="box-info">
                                <div class="weight-700 d-flex justify-content-between align-items-start">Automatic Package Measurer<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
                              </div>
                            </a>
                          </div>
                        </li>
                      </ul>
                    </div>

                    <div class="tab-pane fade" id="v-pills-05" role="tabpanel" aria-labelledby="v-pills-05-tab" tabindex="0">
                      <div class="d-flex align-items-center justify-content-between mb-5">
                        <form>
                          <div class="form-search position-relative">
                            <input type="text" class="form-control" placeholder="Search Product" name="">
                            <button type="submit"><img src="{{asset('img/icon/search-normal.svg')}}"></button>
                          </div>
                        </form>
                        <p class="mb-0 weight-700">1 Product for Infrastructure Solution</p>
                      </div>
                      <ul class="list-unstyled solution-list thumbnail row">
                        <li class="col-md-6">
                          <div class="bg-primary-neutral-10 p-4">
                            <a href="/consult-date" class="d-flex align-items-start flex-column color-primary-neutral-100 text-decoration-none">
                              <div class="box-img auto"><img src="{{asset('img/product/dropdown/electrical.jpg')}}"></div>
                              <div class="box-info">
                                <div class="weight-700 d-flex justify-content-between align-items-start">Comprehensive electrical wiring, cabling, and rerouting services for smart devices and CCTV systems.<img src="{{asset('img/icon/arrow-right-block.svg')}}"></div>
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
    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="{{asset('js/jquery.sticky-sidebar.js"></script>

  <script>
    $('.case-study .left').stickySidebar({
      topSpacing: 100,
      bottomSpacing: 0
    });

    $('.solution-title').stickySidebar({
      topSpacing: 100,
      bottomSpacing: 0
    });
  </script>
@endsection