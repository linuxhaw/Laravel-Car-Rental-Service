@include('layouts.partial.header')
@extends('layouts.master')
@section('title','Dashboard')
@section('content')  

<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">Order Statistics -
                    <div class="dropdown d-inline">
                      <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
                      <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Select Month</li>
                        <li><a href="#" class="dropdown-item">January</a></li>
                        <li><a href="#" class="dropdown-item">February</a></li>
                        <li><a href="#" class="dropdown-item">March</a></li>
                        <li><a href="#" class="dropdown-item">April</a></li>
                        <li><a href="#" class="dropdown-item">May</a></li>
                        <li><a href="#" class="dropdown-item">June</a></li>
                        <li><a href="#" class="dropdown-item">July</a></li>
                        <li><a href="#" class="dropdown-item active">August</a></li>
                        <li><a href="#" class="dropdown-item">September</a></li>
                        <li><a href="#" class="dropdown-item">October</a></li>
                        <li><a href="#" class="dropdown-item">November</a></li>
                        <li><a href="#" class="dropdown-item">December</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">24</div>
                      <div class="card-stats-item-label">Users</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">12</div>
                      <div class="card-stats-item-label">Owners</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">23</div>
                      <div class="card-stats-item-label">Cars</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-default rounded-circle">
                  <i class="fas fa-chart-line"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Number of Rent</h4>
                  </div>
                  <div class="card-body">
                    59
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-default">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Price</h4>
                  </div>
                  <div class="card-body">
                    $187,13
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-default">
                  <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Booking</h4>
                  </div>
                  <div class="card-body">
                    4,732
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>The Most Rented Car List In This Month</h4>
                  <div class="card-header-action">
                    <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                    
                      <tr>
                        <th>Brand</th>
                        <th>Car</th>
                        <th>Owner</th>
                        <th>Car image</th>
                        <th>No of rent</th>
                      </tr>
                      <tr>
                        <td><a href="#">Toyota</a></td>
                        <td class="font-weight-600">Belta</td>
                        <td><div>Admin</div></td>
                        <td>Img</td>
                        <td>12</td>
                      </tr>
                      <tr>
                      <td><a href="#">Toyota</a></td>
                        <td class="font-weight-600">Belta</td>
                        <td><div>Admin</div></td>
                        <td>Img</td>
                        <td>12</td>
                      </tr>
                      <tr>
                      <td><a href="#">Toyota</a></td>
                        <td class="font-weight-600">Belta</td>
                        <td><div>Admin</div></td>
                        <td>Img</td>
                        <td>12</td>
                      </tr>
                      <tr>
                      <td><a href="#">Toyota</a></td>
                        <td class="font-weight-600">Belta</td>
                        <td><div>Admin</div></td>
                        <td>Img</td>
                        <td>12</td>
                      </tr>
                      <tr>
                      <td><a href="#">Toyota</a></td>
                        <td class="font-weight-600">Belta</td>
                        <td><div>Admin</div></td>
                        <td>Img</td>
                        <td>12</td>
                      </tr>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                  <h4>Users' Feedbacks</h4>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
                      @foreach ($feedback as $feedback)
                      <div class="media-body">
                        <div class="float-right text-primary">Now</div>
                        <div class="media-title">{{ $feedback->name }}</div>
                        <div class="media-title">{{ $feedback->email }}</div>
                        <span class="text-small text-muted">{{ $feedback->message }}</span>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png" alt="avatar">
                      <div class="media-body">
                        <div class="float-right">12m</div>
                        <div class="media-title">{{ $feedback->name }}</div>
                        <div class="media-title">{{ $feedback->email }}</div>
                        <span class="text-small text-muted">{{ $feedback->message }}</span>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-3.png" alt="avatar">
                      <div class="media-body">
                        <div class="float-right">17m</div>
                        <div class="media-title">{{ $feedback->name }}</div>
                        <div class="media-title">{{ $feedback->email }}</div>
                        <span class="text-small text-muted">{{ $feedback->message }}</span>
                      </div>
                    </li>
                    <li class="media">
                      <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png" alt="avatar">
                      <div class="media-body">
                        <div class="float-right">21m</div>
                        <div class="media-title">{{ $feedback->name }}</div>
                        <div class="media-title">{{ $feedback->email }}</div>
                        <span class="text-small text-muted">{{ $feedback->message }}</span>
                      </div>
                    </li>
                  </ul>
                  @endforeach
                  <div class="text-center pt-1 pb-1">
                    <a href="#" class="btn btn-primary btn-lg btn-round">
                      View All
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>