@extends('admin.layouts.app')
@section('title')
    Admin Dashboard
@endsection
@php
    $page = 'Dashboard';
@endphp
@section('mainpart')
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header ">
                            <h3 class="card-title text-center">
                                <i class="fa fa-info"></i> Short Keys
                            </h3>
                        </div>
                        <div class="card-body text-center">
                            <a class="btn btn-app box-widget bg-danger">
                                <i class="fa fa-users"></i> Members
                            </a>
                            <a class="btn btn-app box-widget bg-danger">
                                <i class="fa fa-plus"></i> Plan
                            </a>
                            <a class="btn btn-app box-widget bg-danger">
                                <i class="fa fa-credit-card"></i> Loan
                            </a>
                            <a class="btn btn-app box-widget bg-danger">
                                <i class="fa fa-id-card"></i> Group Loan
                            </a>
                            <a class="btn btn-app box-widget bg-danger">
                                <i class="fa fa-address-card"></i> Loan Details
                            </a>
                            <a class="btn btn-app box-widget bg-danger">
                                <i class="fa fa-inr"></i> Collect EMI
                            </a>
                            <a class="btn btn-app box-widget bg-danger">
                                <i class="fa fa-archive"></i> Settlement
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-center">Branch</h3>
                        </div>
                        <div class="card-body text-center">
                            <div class="form-group col-md-12">
                                <select id="inputState" class="form-control">
                                    <option selected>Choose Branch</option>
                                    <option>Head Branch</option>
                                    <option>new Branch</option>
                                    <option>new Branch</option>
                                    <option>new Branch</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main row -->
            <!-- Small Box (Stat card) -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1 bg-color2"><i class="fa-solid fa-money-bill-1"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">TOTAL BALANCE</span>
                            <span class="info-box-number">
                                10
                                <small>%</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i
                                class="fa-solid fa-building-columns"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">BANK BALANCE</span>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1">
                            <i class="fa fa-inr"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">CASH BALANCE</span>
                            <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1 bg-color1"><i class="fa-solid fa-shop"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">SMS BALANCE</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box  bg-color2">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Total Disbursement Amount </p>
                        </div>
                        <div class="icon">
                            <i class="fa-brands fa-shopify"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Total Outstanding Amount </p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-business-time"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box  bg-color1">
                        <div class="inner">
                            <h3>44</h3>

                            <p>Total Collection Amount</p>
                        </div>
                        <div class="icon">
                            <i class="fa-brands fa-readme"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small card -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Total Interest</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="card card-success widget-user">
                        <div class="card-header">
                            <h3 class="widget-user-username">Collection</h3>
                            <p class="widget-user-desc">Approved In Amount</p>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-footer p-0">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Today
                                        <span class="float-right badge bg-primary">31</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Weekly
                                        <span class="float-right badge bg-info">5</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Monthly
                                        <span class="float-right badge bg-success">12</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Total
                                        <span class="float-right badge bg-danger">842</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-lg-3 col-6">
                    <div class="card card-danger widget-user">
                        <div class="card-header">
                            <h3 class="widget-user-username">Collection</h3>
                            <p class="widget-user-desc">Pending In Amount</p>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-footer p-0">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Today
                                        <span class="float-right badge bg-primary">31</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Weekly
                                        <span class="float-right badge bg-info">5</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Monthly
                                        <span class="float-right badge bg-success">12</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Total
                                        <span class="float-right badge bg-danger">842</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-lg-3 col-6">
                    <div class="card card-success widget-user">
                        <div class="card-header">
                            <h3 class="widget-user-username">Disbursement</h3>
                            <p class="widget-user-desc">Approved In Amount</p>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-footer p-0">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Today
                                        <span class="float-right badge bg-primary">31</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Weekly
                                        <span class="float-right badge bg-info">5</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Monthly
                                        <span class="float-right badge bg-success">12</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Total
                                        <span class="float-right badge bg-danger">842</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-lg-3 col-6">
                    <div class="card card-danger widget-user">
                        <div class="card-header">
                            <h3 class="widget-user-username">Disbursement</h3>
                            <p class="widget-user-desc">Pending Number Of Loans</p>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-footer p-0">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Today
                                        <span class="float-right badge bg-primary">31</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Weekly
                                        <span class="float-right badge bg-info">5</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Monthly
                                        <span class="float-right badge bg-success">12</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Total
                                        <span class="float-right badge bg-danger">842</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Profit-Loss</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Total Income</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>Total Expense</td>
                                        <td>10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pending Records</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Pending Number Of EMI today</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Pending Amount Of EMI today</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Pending Number Of EMI Till today</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Pending Amount Of EMI Till today</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Total Active Customer</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Recent Members</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Cust Name</th>
                                        <th>Cust Code</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>3434343435</td>
                                        <td>700987654</td>
                                        <td>mandia barpeta assam</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>John Doe</td>
                                        <td>3434343435</td>
                                        <td>700987654</td>
                                        <td>mandia barpeta assam</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>John Doe</td>
                                        <td>3434343435</td>
                                        <td>700987654</td>
                                        <td>mandia barpeta assam</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Recent Paid EMIs</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Loan ID</th>
                                        <th>Cust Name</th>
                                        <th>Pay Date</th>
                                        <th>Amount</th>
                                        <th>Received</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>HB54643</td>
                                        <td>John Doe</td>
                                        <td>11-7-2014</td>
                                        <td>10000</td>
                                        <td>Admin</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>HB54643</td>
                                        <td>John Doe</td>
                                        <td>11-7-2014</td>
                                        <td>10000</td>
                                        <td>Admin</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>HB54643</td>
                                        <td>John Doe</td>
                                        <td>11-7-2014</td>
                                        <td>10000</td>
                                        <td>Admin</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection


