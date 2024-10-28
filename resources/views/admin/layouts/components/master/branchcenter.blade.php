@extends('admin.layouts.app')
@section('title')
    Branch Center
@endsection
@php
    $page = 'Branch Center';
@endphp
@section('mainpart')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-center">Filter By</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group col-md-4">
                                <label>Branch </label>
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
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Branch Center List</h3>
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
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Branch</th>
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
                                <label>Branch Name
                                    <span class="modalred">*</span>
                                </label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose Branch</option>
                                    <option>Head Branch</option>
                                    <option>new Branch</option>
                                    <option>new Branch</option>
                                    <option>new Branch</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Remark
                                    <span class="modalred">*</span>
                                </label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Name
                                    <span class="modalred">*</span>
                                </label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Description </label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group col-md-6">
                                <p>
                                    <strong>Status</strong>
                                    <span class="modalred">*</span>
                                </p>
                                <label>
                                    <input type="radio" name="status" value="active" class="minimal"> <i
                                        class="fa fa-check text-success"></i>
                                    <span class="text-success">Active</span>
                                    <!---->
                                </label>
                                <label>
                                    <input type="radio" name="status" value="inActive" class="minimal"> <i
                                        class="fa fa-remove text-danger"></i>
                                    <span class="text-danger">InActive</span>
                                    <!---->
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
