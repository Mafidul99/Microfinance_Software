@extends('admin.layouts.app')
@section('title')
Series
@endsection
@php
    $page = 'Series ';
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
                            <h3 class="card-title text-bold mr-3">Series Maste</h3>
                                <button type="button" class="btn bg-color1 btn-sm" data-toggle="modal"
                                        data-target="#modal1">
                                        <i class="fa-solid fa-pencil"></i>
                                </button>
                        </div>
                        <!-- /.card-header -->
                        <div class="container">
                            <div class="row mb-3">
                                <div class="col-md-6 pt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title text-xl">Member Series</h3>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered table-responsive-md">
                                                <thead>
                                                    <tr>
                                                        <th>Member Prefix</th>
                                                        <th>20230100</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Member Series</th>
                                                        <th>16</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Branch Code Inclusion</th>
                                                        <th>
                                                            <span class="text-success">Yes</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title text-xl">Employee/Agent Series</h3>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered table-responsive-md">
                                                <thead>
                                                    <tr>
                                                        <th>Employee/Agent Prefix</th>
                                                        <th>EMP</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Employee/Agent Series</th>
                                                        <th>7</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Branch Code Inclusion</th>
                                                        <th>
                                                            <span class="text-success">Yes</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title text-xl">Application Series</h3>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered table-responsive-md">
                                                <thead>
                                                    <tr>
                                                        <th>Application Series</th>
                                                        <th>1014</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Branch Code Inclusion</th>
                                                        <th>
                                                            <span class="text-success">Yes</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title text-xl">Branch Series</h3>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered table-responsive-md">
                                                <thead>
                                                    <tr>
                                                        <th>Branch Prefix</th>
                                                        <th>MANDIA</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Branch Series</th>
                                                        <th>4</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title text-xl">Collection Center Series</h3>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered table-responsive-md">
                                                <thead>
                                                    <tr>
                                                        <th>Collection Center Prefix</th>
                                                        <th>Mandia</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Collection Center Series</th>
                                                        <th>4</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Financial Year Inclusion</th>
                                                        <th>
                                                            <span class="text-success">Yes</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title text-xl">Application Form Series</h3>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered table-responsive-md">
                                                <thead>
                                                    <tr>
                                                        <th>Application Form Prefix</th>
                                                        <th>Application No.</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Application Form Series</th>
                                                        <th>4</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Financial Year Inclusion</th>
                                                        <th>
                                                            <span class="text-danger">No</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pt-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title text-xl">Branch Center Series</h3>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered table-responsive-md">
                                                <thead>
                                                    <tr>
                                                        <th>Branch Center Prefix</th>
                                                        <th>Mandia</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Branch Center Series</th>
                                                        <th>4</th>
                                                    </tr>
                                                </thead>
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
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-color1">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Identity Proof</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Member Series Update</h2>
                                    <div class="form-group">
                                        <label>Member Perfix
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Member Series
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                    <p>
                                        <strong>Branch Code Inclusion</strong>
                                    </p>
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" class="minimal"/>
                                            <i class="fa fa-check text-success"></i>
                                            <span class="text-success">Yes</span>
                                        </label>
                                        <label>
                                            <input type="radio" class="minimal"/>
                                            <i class="fa fa-check text-danger"></i>
                                            <span class="text-danger">No</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2>Employee Series Update</h2>
                                    <div class="form-group">
                                        <label>Employee Prefix
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Employee Series
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                    <p>
                                        <strong>Branch Code Inclusion</strong>
                                    </p>
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" class="minimal"/>
                                            <i class="fa fa-check text-success"></i>
                                            <span class="text-success">Yes</span>
                                        </label>
                                        <label>
                                            <input type="radio" class="minimal"/>
                                            <i class="fa fa-check text-danger"></i>
                                            <span class="text-danger">No</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2>Application Series Update</h2>
                                    <div class="form-group">
                                        <label>Application Series
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                    <p>
                                        <strong>Branch Code Inclusion</strong>
                                    </p>
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" class="minimal"/>
                                            <i class="fa fa-check text-success"></i>
                                            <span class="text-success">Yes</span>
                                        </label>
                                        <label>
                                            <input type="radio" class="minimal"/>
                                            <i class="fa fa-check text-danger"></i>
                                            <span class="text-danger">No</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2>Branch Series Update</h2>
                                    <div class="form-group">
                                        <label>Branch Prefix
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Branch Series
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2>Collection Center Series Update</h2>
                                    <div class="form-group">
                                        <label>Collection Center Prefix
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Collection Center Series
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                    <p>
                                        <strong>Financial Year Inclusion</strong>
                                    </p>
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" class="minimal"/>
                                            <i class="fa fa-check text-success"></i>
                                            <span class="text-success">Yes</span>
                                        </label>
                                        <label>
                                            <input type="radio" class="minimal"/>
                                            <i class="fa fa-check text-danger"></i>
                                            <span class="text-danger">No</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2>Member Application Form Series Update</h2>
                                    <div class="form-group">
                                        <label>Application Form Prefix
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Application Form Series
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                    <p>
                                        <strong>Financial Year Inclusion</strong>
                                    </p>
                                    <div class="form-group">
                                        <label>
                                            <input type="radio" class="minimal"/>
                                            <i class="fa fa-check text-success"></i>
                                            <span class="text-success">Yes</span>
                                        </label>
                                        <label>
                                            <input type="radio" class="minimal"/>
                                            <i class="fa fa-check text-danger"></i>
                                            <span class="text-danger">No</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2>Branch Center Series Update</h2>
                                    <div class="form-group">
                                        <label>Branch Center Prefix
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Branch Center Series
                                            <span class="modalred">*</span>
                                        </label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Update </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection
