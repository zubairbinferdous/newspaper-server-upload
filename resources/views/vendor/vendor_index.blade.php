@extends('vendor.vendor_dashboard');
@section('vendor')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <!-- Website Analytics -->
                <!-- <div class="col-lg-6 mb-4">
                    <div
                      class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg"
                      id="swiper-with-pagination-cards"
                    >
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="row">
                            <div class="col-12">
                              <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                              <small>Total 28.5% Conversion Rate</small>
                            </div>
                            <div class="row">
                              <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                <h6 class="text-white mt-0 mt-md-3 mb-3">Traffic</h6>
                                <div class="row">
                                  <div class="col-6">
                                    <ul class="list-unstyled mb-0">
                                      <li class="d-flex mb-4 align-items-center">
                                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">28%</p>
                                        <p class="mb-0">Sessions</p>
                                      </li>
                                      <li class="d-flex align-items-center mb-2">
                                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">1.2k</p>
                                        <p class="mb-0">Leads</p>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="col-6">
                                    <ul class="list-unstyled mb-0">
                                      <li class="d-flex mb-4 align-items-center">
                                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">3.1k</p>
                                        <p class="mb-0">Page Views</p>
                                      </li>
                                      <li class="d-flex align-items-center mb-2">
                                        <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">12%</p>
                                        <p class="mb-0">Conversions</p>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                <img
                                  src="../../assets/img/illustrations/card-website-analytics-1.png"
                                  alt="Website Analytics"
                                  width="170"
                                  class="card-website-analytics-img"
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="row">
                            <div class="col-12">
                              <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                              <small>Total 28.5% Conversion Rate</small>
                            </div>
                            <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                              <h6 class="text-white mt-0 mt-md-3 mb-3">Spending</h6>
                              <div class="row">
                                <div class="col-6">
                                  <ul class="list-unstyled mb-0">
                                    <li class="d-flex mb-4 align-items-center">
                                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">12h</p>
                                      <p class="mb-0">Spend</p>
                                    </li>
                                    <li class="d-flex align-items-center mb-2">
                                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">127</p>
                                      <p class="mb-0">Order</p>
                                    </li>
                                  </ul>
                                </div>
                                <div class="col-6">
                                  <ul class="list-unstyled mb-0">
                                    <li class="d-flex mb-4 align-items-center">
                                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">18</p>
                                      <p class="mb-0">Order Size</p>
                                    </li>
                                    <li class="d-flex align-items-center mb-2">
                                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">2.3k</p>
                                      <p class="mb-0">Items</p>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                              <img
                                src="../../assets/img/illustrations/card-website-analytics-2.png"
                                alt="Website Analytics"
                                width="170"
                                class="card-website-analytics-img"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="row">
                            <div class="col-12">
                              <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                              <small>Total 28.5% Conversion Rate</small>
                            </div>
                            <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                              <h6 class="text-white mt-0 mt-md-3 mb-3">Revenue Sources</h6>
                              <div class="row">
                                <div class="col-6">
                                  <ul class="list-unstyled mb-0">
                                    <li class="d-flex mb-4 align-items-center">
                                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">268</p>
                                      <p class="mb-0">Direct</p>
                                    </li>
                                    <li class="d-flex align-items-center mb-2">
                                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">62</p>
                                      <p class="mb-0">Referral</p>
                                    </li>
                                  </ul>
                                </div>
                                <div class="col-6">
                                  <ul class="list-unstyled mb-0">
                                    <li class="d-flex mb-4 align-items-center">
                                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">890</p>
                                      <p class="mb-0">Organic</p>
                                    </li>
                                    <li class="d-flex align-items-center mb-2">
                                      <p class="mb-0 fw-semibold me-2 website-analytics-text-bg">1.2k</p>
                                      <p class="mb-0">Campaign</p>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                              <img
                                src="../../assets/img/illustrations/card-website-analytics-3.png"
                                alt="Website Analytics"
                                width="170"
                                class="card-website-analytics-img"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div> -->
                <!--/ Website Analytics -->

                <!-- Sales Overview -->
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <small class="d-block mb-1 text-muted">Sales Overview</small>
                                <p class="card-text text-success">+18.2%</p>
                            </div>
                            <h4 class="card-title mb-1">$42.5k</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="d-flex gap-2 align-items-center mb-2">
                                        <span class="badge bg-label-info p-1 rounded"><i
                                                class="ti ti-shopping-cart ti-xs"></i></span>
                                        <p class="mb-0">Order</p>
                                    </div>
                                    <h5 class="mb-0 pt-1 text-nowrap">62.2%</h5>
                                    <small class="text-muted">6,440</small>
                                </div>
                                <div class="col-4">
                                    <div class="divider divider-vertical">
                                        <div class="divider-text">
                                            <span class="badge-divider-bg bg-label-secondary">VS</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                                        <p class="mb-0">Visits</p>
                                        <span class="badge bg-label-primary p-1 rounded"><i
                                                class="ti ti-link ti-xs"></i></span>
                                    </div>
                                    <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
                                    <small class="text-muted">12,749</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <div class="progress w-100" style="height: 8px">
                                    <div class="progress-bar bg-info" style="width: 70%" role="progressbar"
                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <small class="d-block mb-1 text-muted">Sales Overview</small>
                                <p class="card-text text-success">+18.2%</p>
                            </div>
                            <h4 class="card-title mb-1">$42.5k</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="d-flex gap-2 align-items-center mb-2">
                                        <span class="badge bg-label-info p-1 rounded"><i
                                                class="ti ti-shopping-cart ti-xs"></i></span>
                                        <p class="mb-0">Order</p>
                                    </div>
                                    <h5 class="mb-0 pt-1 text-nowrap">62.2%</h5>
                                    <small class="text-muted">6,440</small>
                                </div>
                                <div class="col-4">
                                    <div class="divider divider-vertical">
                                        <div class="divider-text">
                                            <span class="badge-divider-bg bg-label-secondary">VS</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                                        <p class="mb-0">Visits</p>
                                        <span class="badge bg-label-primary p-1 rounded"><i
                                                class="ti ti-link ti-xs"></i></span>
                                    </div>
                                    <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
                                    <small class="text-muted">12,749</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <div class="progress w-100" style="height: 8px">
                                    <div class="progress-bar bg-info" style="width: 70%" role="progressbar"
                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <small class="d-block mb-1 text-muted">Sales Overview</small>
                                <p class="card-text text-success">+18.2%</p>
                            </div>
                            <h4 class="card-title mb-1">$42.5k</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="d-flex gap-2 align-items-center mb-2">
                                        <span class="badge bg-label-info p-1 rounded"><i
                                                class="ti ti-shopping-cart ti-xs"></i></span>
                                        <p class="mb-0">Order</p>
                                    </div>
                                    <h5 class="mb-0 pt-1 text-nowrap">62.2%</h5>
                                    <small class="text-muted">6,440</small>
                                </div>
                                <div class="col-4">
                                    <div class="divider divider-vertical">
                                        <div class="divider-text">
                                            <span class="badge-divider-bg bg-label-secondary">VS</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                                        <p class="mb-0">Visits</p>
                                        <span class="badge bg-label-primary p-1 rounded"><i
                                                class="ti ti-link ti-xs"></i></span>
                                    </div>
                                    <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
                                    <small class="text-muted">12,749</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-4">
                                <div class="progress w-100" style="height: 8px">
                                    <div class="progress-bar bg-info" style="width: 70%" role="progressbar"
                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Sales Overview -->

                <!-- Revenue Generated -->
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="card-icon">
                                <span class="badge bg-label-success rounded-pill p-2">
                                    <i class="ti ti-credit-card ti-sm"></i>
                                </span>
                            </div>
                            <h5 class="card-title mb-0 mt-2">97.5k</h5>
                            <small>Revenue Generated</small>
                        </div>
                        <div id="revenueGenerated"></div>
                    </div>
                </div>
                <!--/ Revenue Generated -->

                <!-- Earning Reports -->
                <div class="col-lg-6 mb-4">
                    <!-- <div class="card h-100">
                      <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
                        <div class="card-title mb-0">
                          <h5 class="mb-0">Earning Reports</h5>
                          <small class="text-muted">Weekly Earnings Overview</small>
                        </div>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="earningReportsId"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="ti ti-dots-vertical ti-sm text-muted"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
                            <a class="dropdown-item" href="javascript:void(0);">View More</a>
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                          </div>
                        </div>
                        <!-- </div> -->
                    <!-- </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12 col-md-4 d-flex flex-column align-self-end">
                            <div class="d-flex gap-2 align-items-center mb-2 pb-1 flex-wrap">
                              <h1 class="mb-0">$468</h1>
                              <div class="badge rounded bg-label-success">+4.2%</div>
                            </div>
                            <small class="text-muted">You informed of this week compared to last week</small>
                          </div>
                          <div class="col-12 col-md-8">
                            <div id="weeklyEarningReports"></div>
                          </div>
                        </div>
                        <div class="border rounded p-3 mt-2">
                          <div class="row gap-4 gap-sm-0">
                            <div class="col-12 col-sm-4">
                              <div class="d-flex gap-2 align-items-center">
                                <div class="badge rounded bg-label-primary p-1">
                                  <i class="ti ti-currency-dollar ti-sm"></i>
                                </div>
                                <h6 class="mb-0">Earnings</h6>
                              </div>
                              <h4 class="my-2 pt-1">$545.69</h4>
                              <div class="progress w-75" style="height: 4px">
                                <div
                                  class="progress-bar"
                                  role="progressbar"
                                  style="width: 65%"
                                  aria-valuenow="65"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </div>
                            <div class="col-12 col-sm-4">
                              <div class="d-flex gap-2 align-items-center">
                                <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                                <h6 class="mb-0">Profit</h6>
                              </div>
                              <h4 class="my-2 pt-1">$256.34</h4>
                              <div class="progress w-75" style="height: 4px">
                                <div
                                  class="progress-bar bg-info"
                                  role="progressbar"
                                  style="width: 50%"
                                  aria-valuenow="50"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </div>
                            <div class="col-12 col-sm-4">
                              <div class="d-flex gap-2 align-items-center">
                                <div class="badge rounded bg-label-danger p-1">
                                  <i class="ti ti-brand-paypal ti-sm"></i>
                                </div>
                                <h6 class="mb-0">Expense</h6>
                              </div>
                              <h4 class="my-2 pt-1">$74.19</h4>
                              <div class="progress w-75" style="height: 4px">
                                <div
                                  class="progress-bar bg-danger"
                                  role="progressbar"
                                  style="width: 65%"
                                  aria-valuenow="65"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div> -->
                </div>
            </div>
            <!--/ Earning Reports -->


            <!-- Projects table -->
            <div class="col-12 col-xl-8 col-sm-12 order-1 order-lg-2 mb-4 mb-lg-0">
                <div class="card">
                    <div class="card-datatable table-responsive">
                        <table class="datatables-projects table border-top">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Leader</th>
                                    <th>Team</th>
                                    <th class="w-px-200">Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Projects table -->
        </div>
    </div>
@endsection
