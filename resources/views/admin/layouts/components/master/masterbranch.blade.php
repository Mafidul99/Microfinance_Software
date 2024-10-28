@extends('admin.layouts.app')
@section('title')
    Branches
@endsection
@php
    $page = 'Branches';
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
                            <h3 class="card-title">Branch List</h3>
                            <div class="box-tools float-right">
                                <a href="#" class="btn btn-box-tool">
                                    <i class="fa-regular fa-file-excel"></i>
                                    Download Excel
                                </a>
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#modal-xl">
                                <i class="fa-solid fa-plus"></i> Add New
                            </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-sm table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Branch Name</th>
                                        <th>Branch Code</th>
                                        <th>Phone</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Opening Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="hidden-xs">1</td>
                                        <td class="hidden-xs">xxxxxx</td>
                                        <td class="hidden-xs">Win 95+</td>
                                        <td class="hidden-xs">Win 95+</td>
                                        <td class="hidden-xs">Win 95+</td>
                                        <td class="hidden-xs">Win 95+</td>
                                        <td class="hidden-xs">25-03-2023</td>
                                        <td class="hidden-xs">
                                            <div>
                                                <span class="label label-success">Active</span>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-xs">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </button>
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
                                <label>Branch Name
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
                                <label>Opening Date
                                    <span class="modalred">*</span>
                                </label>
                                <input type="date" class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Contact Email
                                    <span class="modalred">*</span>
                                </label>
                                <input type="email" class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Address
                                    <span class="modalred">*</span>
                                </label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Contact Number
                                    <span class="modalred">*</span>
                                </label>
                                <input type="number" class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>City
                                    <span class="modalred">*</span>
                                </label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Landline Number
                                    <span class="modalred">*</span>
                                </label>
                                <input type="number" class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Select State
                                    <span class="modalred">*</span>
                                </label>
                                <select id="inputState" class="form-control">
                                    <option selected>Select State </option>
                                    <option>Active</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>GSTIN Number
                                    <span class="modalred">*</span>
                                </label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Country
                                    <span class="modalred">*</span>
                                </label>
                                <input type="text" value="India" readonly="readonly" class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Status
                                    <span class="modalred">*</span>
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Active
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Inactive
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" style="">Save Branch</button>
                            <button type="submit" class="btn btn-info" style="display: none;">Update</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
