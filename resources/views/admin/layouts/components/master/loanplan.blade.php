@extends('admin.layouts.app')
@section('title')
    Loan Plan
@endsection
@php
    $page = 'Loanplan';
@endphp
@section('mainpart')
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Loan Plan List</h3>
                            <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal"
                                data-target="#modal-xl">
                                <i class="fa-solid fa-plus"></i> Add New
                            </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-sm table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Plan Name</th>
                                        <th>Plan Type</th>
                                        <th>Loan</th>
                                        <th>Disbursement</th>
                                        <th>Collection</th>
                                        <th>Tenure</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="hidden-xs">1</td>
                                        <td class="hidden-xs">xxxxxx</td>
                                        <td class="hidden-xs">Win 95+</td>
                                        <td class="hidden-xs"> 4</td>
                                        <td class="hidden-xs">3333</td>
                                        <td class="hidden-xs">mmnn33</td>
                                        <td class="hidden-xs">po999</td>
                                        <td class="hidden-xs">
                                            <div>
                                                <span class="label label-success">Active</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group dropup">
                                                <button type="button"
                                                    class="btn btn-flat dropdown-toggle dropdown-hover btn-xs"
                                                    data-toggle="dropdown">
                                                    <span class="caret">Task</span>
                                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                        <a class="dropdown-item" href="#"><i class="fa fa-eye btn-xs"></i>
                                                            View</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-pencil btn-xs"></i>
                                                            Update</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-trash btn-xs"></i>
                                                            Delete</a>
                                                    </div>
                                                </button>
                                            </div>
                                        </td>
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
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="modal-xl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-color1">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Plan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Select Loan Type
                                    <span class="modalred">*</span>
                                </label>
                                <select id="inputState" class="form-control">
                                    <option selected>Select Loan Type </option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Plan Amount
                                    <span class="modalred">*</span>
                                </label>
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Plan Name
                                    <span class="modalred">*</span>
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Paid Amount
                                    <span class="modalred">*</span>
                                </label>
                                <input type="number" class="form-control" placeholder="0" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Number of EMI
                                    <span class="modalred">*</span>
                                </label>
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                            <div class="form-group col-md-6">
                                <label>File Charge Include
                                    <span class="modalred">*</span>
                                </label>
                                <select id="inputState" class="form-control">
                                    <option selected>No </option>
                                    <option>Yes</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Recovery type
                                    <span class="modalred">*</span>
                                </label>
                                <select id="inputState" class="form-control">
                                    <option selected>Recovery type </option>
                                    <option>Yes</option>
                                    <option>Yes</option>
                                    <option>Yes</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>File Charge
                                    <span class="modalred">*</span>
                                </label>
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                            <div class="form-group col-md-6">
                                <label>No of Advance Installment
                                    <span class="modalred">*</span>
                                </label>
                                <select id="inputState" class="form-control">
                                    <option selected>0 </option>
                                    <option>1</option>
                                    <option>2</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Processing Fee Charge Include
                                    <span class="modalred">*</span>
                                </label>
                                <select id="inputState" class="form-control">
                                    <option selected>No </option>
                                    <option>Yes</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Holiday Exclude
                                    <span class="modalred">*</span>
                                </label>
                                <select id="inputState" class="form-control">
                                    <option selected>No </option>
                                    <option>Yes</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Processing Fee In Percentage (%)
                                    <span class="modalred">*</span>
                                </label>
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                            <div class="form-group col-md-6">
                                <label>GST Charge Include
                                    <span class="modalred">*</span>
                                </label>
                                <select id="inputState" class="form-control">
                                    <option selected>No </option>
                                    <option>Yes</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Processing Fee In Amount
                                    <span class="modalred">*</span>
                                </label>
                                <input type="number" class="form-control" placeholder="0" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Insurance Fee Charge Include
                                    <span class="modalred">*</span>
                                </label>
                                <select id="inputState" class="form-control">
                                    <option selected>No </option>
                                    <option>Yes</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Insurance Fee In Percentage (%)
                                    <span class="modalred">*</span>
                                </label>
                                <input type="number" class="form-control" placeholder="0">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Insurance Fee In Amount
                                    <span class="modalred">*</span>
                                </label>
                                <input type="number" class="form-control" placeholder="0" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Select Status
                                    <span class="modalred">*</span>
                                </label>
                                <select id="inputState" class="form-control">
                                    <option selected>Select Status </option>
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-warning">Calculate EMI</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
