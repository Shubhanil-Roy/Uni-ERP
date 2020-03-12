@extends('base')
@section('content')

    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Add Dealer</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Dealers</li>
                    <li class="breadcrumb-item active">Add Dealer</li>
                </ol>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-outline-info">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Add Dealer</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('addDealerPost')}}" class="form-horizontal" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-body">
                                    <hr class="m-t-0 m-b-40">

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="name"
                                                       class="col-md-3 text-right col-form-label">Name</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="text" class="form-control" name="name"
                                                               id="name" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="phone"
                                                       class="col-md-3 text-right col-form-label">phone</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="text" class="form-control"
                                                               name="phone" id="phone"> </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="email"
                                                       class="col-md-3 text-right col-form-label">email</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="email" class="form-control" name="email"
                                                               id="email"> </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="address"
                                                       class="col-md-3 text-right col-form-label">address</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <textarea name="address" id="address"></textarea>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="password"
                                                       class="col-md-3 text-right col-form-label">password</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="password" class="form-control" name="password"
                                                               id="password">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"></div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
@stop
