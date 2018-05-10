@extends('master/app')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin">
      <div class="card overflow-hidden dashboard-curved-chart">
        <div class="card-body mx-3">
          <h2 class="card-title border-bottom-none">Recent Movement</h2>
          <div class="align-items-center mb-5 justify-content-between d-lg-flex d-xl-flex d-md-block d-block">
            <div id="chartLegend"></div>
            <div class="nav-wrapper d-inline-block mt-4 mt-lg-0">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link" href="#">Week</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Month</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Year</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Today</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="curved-line-chart" class="float-chart float-chart-mini"></div>
      </div>
    </div>
  </div>
  <!-- ROW ENDS -->
  <div class="row">
    <div class="col-lg-12 grid-margin">
      <div class="card performance-cards">
        <div class="card-body">
          <div class="row">
            <div class="col d-flex flex-row justify-content-center align-items-center">
              <div class="wrapper icon-circle bg-success">
                <i class="icon-rocket icons"></i>
              </div>
              <div class="wrapper text-wrapper">
                <p class="text-dark">8954</p>
                <p>Lifetime total sales</p>
              </div>
            </div>
            <div class="col d-flex flex-row justify-content-center align-items-center">
              <div class="wrapper icon-circle bg-danger">
                <i class="icon-briefcase icons"></i>
              </div>
              <div class="wrapper text-wrapper">
                <p class="text-dark">7841</p>
                <p>Income amounts</p>
              </div>
            </div>
            <div class="col d-flex flex-row justify-content-center align-items-center">
              <div class="wrapper icon-circle bg-warning">
                <i class="icon-umbrella icons"></i>
              </div>
              <div class="wrapper text-wrapper">
                <p class="text-dark">6521</p>
                <p>Total users</p>
              </div>
            </div>
            <div class="col d-flex flex-row justify-content-center align-items-center">
              <div class="wrapper icon-circle bg-primary">
                <i class="icon-check icons"></i>
              </div>
              <div class="wrapper text-wrapper">
                <p class="text-dark">325</p>
                <p>Total visits</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ROW ENDS -->
  <div class="row">
    <div class="col-md-6 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-0">Statistics</h4>
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-inline-block pt-3">
              <div class="d-flex">
                <h2 class="mb-0">$10,200</h2>
                <div class="d-flex align-items-center ml-2">
                  <i class="mdi mdi-clock text-muted"></i>
                  <small class=" ml-1 mb-0">Updated: 9:10am</small>
                </div>
              </div>
              <small class="text-gray">Raised from 89 orders.</small>
            </div>
            <div class="d-inline-block">
              <div class="bg-success px-4 py-2 rounded">
                <i class="mdi mdi-buffer text-white icon-lg"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-0">Daily Order</h4>
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-inline-block pt-3">
              <div class="d-flex">
                <h2 class="mb-0">$2256</h2>
                <div class="d-flex align-items-center ml-2">
                  <i class="mdi mdi-clock text-muted"></i>
                  <small class=" ml-1 mb-0">Updated: 05:42pm</small>
                </div>
              </div>
              <small class="text-gray">hey, let’s have lunch together</small>
            </div>
            <div class="d-inline-block">
              <div class="bg-warning px-4 py-2 rounded">
                <i class="mdi mdi-wallet text-white icon-lg"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row section social-section">
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="social-card w-100 bg-facebook">
        <div class="social-icon">
          <i class="icon-social-facebook icons"></i>
        </div>
        <div class="content">
          <p>+ 1500</p>
          <p>Facebook Likes</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="social-card w-100 bg-twitter">
        <div class="social-icon">
          <i class="icon-social-twitter icons"></i>
        </div>
        <div class="content">
          <p>+574</p>
          <p>Twitter Followers</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 grid-margin stretch-card">
      <div class="social-card w-100 bg-dribbble">
        <div class="social-icon">
          <i class="icon-social-dribbble icons"></i>
        </div>
        <div class="content">
          <p>+450</p>
          <p>Dribble Shots</p>
        </div>
      </div>
    </div>
  </div>
  <!-- ROW ENDS -->
  <div class="row">
    <div class="col-lg-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Manage Users</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start Date</th>
                  <th>Assign</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Airi Satou</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>55</td>
                  <td>2009/10/09</td>
                  <td>$162,700</td>
                </tr>
                <tr>
                  <td>Angelica Ramos</td>
                  <td>Chief Executive Officer (CEO)</td>
                  <td>London</td>
                  <td>30</td>
                  <td>2009/10/09</td>
                  <td>$190,500</td>
                </tr>
                <tr>
                  <td>Ashton Cox</td>
                  <td>Regional Director</td>
                  <td>San Francisco</td>
                  <td>36</td>
                  <td>2004/12/02</td>
                  <td>$62,700</td>
                </tr>
                <tr>
                  <td>Angelica Ramos</td>
                  <td>Chief Executive Officer (CEO)</td>
                  <td>London</td>
                  <td>30</td>
                  <td>2011/07/25</td>
                  <td>$190,500</td>
                </tr>
                <tr>
                  <td>Ashton Cox</td>
                  <td>Regional Director</td>
                  <td>San Francisco</td>
                  <td>32</td>
                  <td>2004/12/02</td>
                  <td>$62,700</td>
                </tr>
                <tr>
                  <td>Angelica Ramos</td>
                  <td>Chief Executive Officer (CEO)</td>
                  <td>London</td>
                  <td>31</td>
                  <td>2011/07/25</td>
                  <td>$190,500</td>
                </tr>
                <tr>
                  <td>Ashton Cox</td>
                  <td>Regional Director</td>
                  <td>Tokyo</td>
                  <td>39</td>
                  <td>2004/12/02</td>
                  <td>$62,700</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="d-flex align-items-center justify-content-between flex-wrap">
            <p class="mb-0">Showing 1 to 10 of 57 entries</p>
            <nav>
              <ul class="pagination rounded-separated pagination-info mt-3">
                <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-left"></i></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ROW ENDS -->
</div>

@endsection