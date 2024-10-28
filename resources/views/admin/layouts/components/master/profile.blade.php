@extends('admin.layouts.app')
@section('title')
    Setting
@endsection
@php
    $page = 'Setting';
@endphp
@section('mainpart')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Logo</h3>
                        </div>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('backend/assets/dist/img/user4-128x128.jpg') }}"
                                    alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">{{ Auth::guard('admin')->user()->name }}</h3>
                            <p class="text-muted text-center">{{ Auth::guard('admin')->user()->email }}</p>
                            <form>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="file" class="form-control" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- Favicon Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Favicon</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('backend/assets/dist/img/user4-128x128.jpg') }}"
                                    alt="User profile picture">
                            </div>
                            <br>
                            <form>
                                <div class="form-row">
                                    <div class="form-group">
                                        <input type="file" class="form-control" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header bg-color1">
                            <h2 class="card-title text-bold mr-3">Company Profile Edit</h2>
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal"
                                data-target="#modalxl">
                                <i class="fa-solid fa-pencil text-white"></i>
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <table class="table table-sm table-bordered table-stripped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Website</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>Software URL</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>Company Name</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>Short Name</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>UPI ID</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>CIBIL Member Code</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>CIBIL Member Short Name</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>About</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>CIN</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>PAN</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>TAN</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>GST No</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>Category</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>Class</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>Authorized Capital</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>Paid Up Capital</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>Share Nominal Value</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>State of Registration</th>
                                                <td>State of Registration</td>
                                            </tr>
                                            <tr>
                                                <th>Incorporation Country</th>
                                                <td>State of Registration</td>
                                            </tr>
                                            <tr>
                                                <th>Incorporation Date</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>State of Registration</td>
                                            </tr>
                                            <tr>
                                                <th>Contact Number 1</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>Contact Number 2</th>
                                                <td>State of Registration</td>
                                            </tr>
                                            <tr>
                                                <th>Landline No</th>
                                                <td>State of Registration</td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>State of Registration</td>
                                            </tr>
                                            <tr>
                                                <th>City</th>
                                                <td>State of Registration</td>
                                            </tr>
                                            <tr>
                                                <th>Pincode</th>
                                                <td>mandia</td>
                                            </tr>
                                            <tr>
                                                <th>State</th>
                                                <td>mandia</td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <table class="table table-sm table-bordered table-stripped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Session</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Software Version</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Software Versioning Date</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Last Daily Cron Date</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Last Daily Interest Cron Date</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Customer KYC Status</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Send SMS On Customer Registration</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Send SMS On Password Reset</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Due Remainder SMS</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Member Verify OTP SMS</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Staff Verify OTP SMS</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>No of EMI Remainder SMS Days</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Send SMS Customer Loan Disbursement</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Send SMS On EMI Collection</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Document Verification SMS</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Customer Credentials SMS</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Guarantor Verify OTP SMS</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Staff Verify SMS</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>currency Symbol</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Decimal Places</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Decimal Places For Amt In Words</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Financial Year Begin From</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Formal Name</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Word Representing Amt After Decimal</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Auto Approve Member Collection Status</th>
                                                <td>2012-24</td>
                                            </tr>
                                            <tr>
                                                <th>Show All Members</th>
                                                <td>2012-24</td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- Main content -->
    <!-- Modal -->
    <div class="modal fade" id="modalxl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-color1">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Session</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Name
                                        <span class="modalred">*</span>
                                    </label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>CIBIL Member Short Name
                                        <span class="modalred">*</span>
                                    </label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company Name
                                        <span class="modalred">*</span>
                                    </label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Website
                                        <span class="modalred">*</span>
                                    </label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Short Name
                                        <span class="modalred">*</span>
                                    </label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>About Company
                                        <span class="modalred">*</span>
                                    </label>
                                    <textarea name="about" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>UPI ID
                                        <span class="modalred">*</span>
                                    </label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Customer KYC Mandatory
                                        <span class="modalred">*</span>
                                    </label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Inactive </option>
                                        <option>Active</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>CIBIL Member Code
                                        <span class="modalred">*</span>
                                    </label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>Reg. Office Address :</h2>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Session
                                            <span class="modalred">*</span>
                                        </label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Select Session</option>
                                            <option>Active</option>
                                            <option>Active</option>
                                            <option>Active</option>
                                            <option>Active</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>State of Registration
                                            <span class="modalred">*</span>
                                        </label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Select Registration</option>
                                            <option>Active</option>
                                            <option>Active</option>
                                            <option>Active</option>
                                            <option>Active</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>URL
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Authorized Capital
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Contact Number 1
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>CIN Number
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Contact Number 2
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>TAN Number
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Landline Number
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Company Category
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Address
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Incorporation Date
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="date" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>City
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Incorporation Country
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Pincode
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="number" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Paid Up Capital
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Select State
                                            <span class="modalred">*</span>
                                        </label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Select State</option>
                                            <option>Active</option>
                                            <option>Active</option>
                                            <option>Active</option>
                                            <option>Active</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Share Nominal Value
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Contact Email
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Financial Year Begin From
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="date" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>FAX Number
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="number" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Currency Symbol
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>PAN Number
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Decimal Places
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Formal Name
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Decimal Places For Amt In Words
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>GST Number
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Word Representing Amt After Decimal
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Company Class
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Show All Members
                                            <span class="modalred">*</span>
                                        </label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Inactive</option>
                                            <option>Active</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Auto Approve Member Collection
                                            <span class="modalred">*</span>
                                        </label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Inactive</option>
                                            <option>Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>SMS Settings :</h2>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="fa-regular fa-hand-point-right text-info"></i>
                                            SMS Services
                                        </strong>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" class="minimal" value="true" checked/>
                                                <i class="fa fa-check text-success"></i>
                                            </label>
                                            <label>
                                                <input type="radio" class="minimal" value="false" />
                                                <i class="fa fa-check text-danger"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="fa-regular fa-hand-point-right text-info"></i>
                                            Send SMS Loan Disbursement
                                        </strong>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" class="minimal" value="true" checked/>
                                                <i class="fa fa-check text-success"></i>
                                            </label>
                                            <label>
                                                <input type="radio" class="minimal" value="false" />
                                                <i class="fa fa-check text-danger"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="fa-regular fa-hand-point-right text-info"></i>
                                            Send SMS Customer Registration
                                        </strong>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" class="minimal" value="true" checked/>
                                                <i class="fa fa-check text-success"></i>
                                            </label>
                                            <label>
                                                <input type="radio" class="minimal" value="false" />
                                                <i class="fa fa-check text-danger"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="fa-regular fa-hand-point-right text-info"></i>
                                            Send SMS On EMI Collection
                                        </strong>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" class="minimal" value="true" checked/>
                                                <i class="fa fa-check text-success"></i>
                                            </label>
                                            <label>
                                                <input type="radio" class="minimal" value="false" />
                                                <i class="fa fa-check text-danger"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="fa-regular fa-hand-point-right text-info"></i>
                                            Send SMS On Password Reset
                                        </strong>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" class="minimal" value="true" checked/>
                                                <i class="fa fa-check text-success"></i>
                                            </label>
                                            <label>
                                                <input type="radio" class="minimal" value="false" />
                                                <i class="fa fa-check text-danger"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="fa-regular fa-hand-point-right text-info"></i>
                                            Document Verification SMS
                                        </strong>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" class="minimal" value="true" checked/>
                                                <i class="fa fa-check text-success"></i>
                                            </label>
                                            <label>
                                                <input type="radio" class="minimal" value="false" />
                                                <i class="fa fa-check text-danger"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="fa-regular fa-hand-point-right text-info"></i>
                                            Due Remainder SMS
                                        </strong>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" class="minimal" value="true" checked/>
                                                <i class="fa fa-check text-success"></i>
                                            </label>
                                            <label>
                                                <input type="radio" class="minimal" value="false" />
                                                <i class="fa fa-check text-danger"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="fa-regular fa-hand-point-right text-info"></i>
                                            Customer Credentials SMS
                                        </strong>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" class="minimal" value="true" checked />
                                                <i class="fa fa-check text-success"></i>
                                            </label>
                                            <label>
                                                <input type="radio" class="minimal" value="false" />
                                                <i class="fa fa-check text-danger"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="fa-regular fa-hand-point-right text-info"></i>
                                            Member Verify OTP SMS
                                        </strong>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" class="minimal" value="true" checked/>
                                                <i class="fa fa-check text-success"></i>
                                            </label>
                                            <label>
                                                <input type="radio" class="minimal" value="false" />
                                                <i class="fa fa-check text-danger"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="fa-regular fa-hand-point-right text-info"></i>
                                            Guarantor Verify OTP SMS
                                        </strong>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" class="minimal" value="true" checked/>
                                                <i class="fa fa-check text-success"></i>
                                            </label>
                                            <label>
                                                <input type="radio" class="minimal" value="false" />
                                                <i class="fa fa-check text-danger"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="fa-regular fa-hand-point-right text-info"></i>
                                            Staff Verify OTP SMS
                                        </strong>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" class="minimal" value="true" checked/>
                                                <i class="fa fa-check text-success"></i>
                                            </label>
                                            <label>
                                                <input type="radio" class="minimal" value="false" />
                                                <i class="fa fa-check text-danger"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="fa-regular fa-hand-point-right text-info"></i>
                                            Staff Credential SMS
                                        </strong>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" class="minimal" value="true" checked />
                                                <i class="fa fa-check text-success"></i>
                                            </label>
                                            <label>
                                                <input type="radio" class="minimal" value="false" />
                                                <i class="fa fa-check text-danger"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>No of EMI Remainder SMS Days
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                    <div class="col-md-6">
                                        <strong>
                                            <i class="fa-regular fa-hand-point-right text-info"></i>
                                            Settlement SMS
                                        </strong>
                                        <div class="form-group">
                                            <label>
                                                <input type="radio" class="minimal" value="true" checked />
                                                <i class="fa fa-check text-success"></i>
                                            </label>
                                            <label>
                                                <input type="radio" class="minimal" value="false" />
                                                <i class="fa fa-check text-danger"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info">Save Profile</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <style>
        table {
            border-collapse: collapse;
            table-layout: fixed;
            width: 310px;
        }

        table th {
            width: 200px;
            word-wrap: break-word;
        }
    </style>
@endsection
