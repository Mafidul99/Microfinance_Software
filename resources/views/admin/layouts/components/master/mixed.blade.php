@extends('admin.layouts.app')
@section('title')
    Mixed
@endsection
@php
    $page = 'Mixed';
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
                            <h3 class="card-title">Mixed List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="container">
                            <div class="row mb-3">
                                <div class="col-md-6 pt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title titlecard1">Identity Proof Details List</h3>
                                            <button type="button" class="btn bg-color1 btn-sm float-right" data-toggle="modal"
                                                data-target="#modal1">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <table id="example1" class="table table-sm table-bordered table-hover">
                                                <thead>
                                                    <tr class="table-active">
                                                        <th>Identity</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="hidden-xs">Identity</td>
                                                        <td class="hidden-xs">
                                                            <div>
                                                                <span class="label label-success">Active</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title titlecard1">Relation Details</h3>
                                            <button type="button" class="btn bg-color1 btn-sm float-right" data-toggle="modal"
                                                data-target="#modal2">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <table id="modelexample2" class="table table-sm table-bordered table-hover">
                                                <thead>
                                                    <tr class="table-active">
                                                        <th>Relation</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="hidden-xs">Relation</td>
                                                        <td class="hidden-xs">
                                                            <div>
                                                                <span class="label label-success">Active</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title titlecard1">Purpose Details</h3>
                                            <button type="button" class="btn bg-color1 btn-sm float-right" data-toggle="modal"
                                                data-target="#modal3">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <table id="modelexample3" class="table table-sm table-bordered table-hover">
                                                <thead>
                                                    <tr class="table-active">
                                                        <th>Purpose</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="hidden-xs">Purpose</td>
                                                        <td class="hidden-xs">
                                                            <div>
                                                                <span class="label label-success">Active</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title titlecard1">Reason Details</h3>
                                            <button type="button" class="btn bg-color1 btn-sm float-right" data-toggle="modal"
                                                data-target="#modal4">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <table id="modelexample4" class="table table-sm table-bordered table-hover">
                                                <thead>
                                                    <tr class="table-active">
                                                        <th>Reason</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="hidden-xs">Reason</td>
                                                        <td class="hidden-xs">
                                                            <div>
                                                                <span class="label label-success">Active</span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    <!-- Modal 1 -->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-color1">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Identity Proof</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Identity   Name
                                    <span class="modalred">*</span>
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Select Identity  Status
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
                            <button type="submit" class="btn btn-success">Save Identity  </button>
                            <button type="submit" class="btn btn-primary" style="display: none;">Update Identity  </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-color1">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Relation Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Relation Name
                                    <span class="modalred">*</span>
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Select Relation Status
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
                            <button type="submit" class="btn btn-success">Save Relation </button>
                            <button type="submit" class="btn btn-primary" style="display: none;">Update Relation </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-color1">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Purpose Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Purpose  Name
                                    <span class="modalred">*</span>
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Select Purpose  Status
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
                            <button type="submit" class="btn btn-success">Save Purpose </button>
                            <button type="submit" class="btn btn-primary" style="display: none;">Update Purpose </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-color1">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Reason Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Reason  Name
                                    <span class="modalred">*</span>
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Select Reason  Status
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
                            <button type="submit" class="btn btn-success">Save Reason </button>
                            <button type="submit" class="btn btn-primary" style="display: none;">Update Reason </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>




@endsection
