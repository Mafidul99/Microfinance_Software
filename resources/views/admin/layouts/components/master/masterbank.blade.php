@extends('admin.layouts.app')
@section('title')
    Bank
@endsection
@php
    $page = 'Bank';
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
                            <h3 class="card-title">Bank List</h3>
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
                                        <th>bank Name</th>
                                        <th>Short Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="hidden-xs">1</td>
                                        <td class="hidden-xs">xxxxxx</td>
                                        <td class="hidden-xs">Win 95+</td>
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
                                <label>Name
                                    <span class="modalred">*</span>
                                </label>
                                <input type="text" class="form-control" />
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
                            <div class="form-group col-md-6">
                                <label>Short Name
                                    <span class="modalred">*</span>
                                </label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info" style="">Create</button>
                            <button type="submit" class="btn btn-info" style="display: none;">Update</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
