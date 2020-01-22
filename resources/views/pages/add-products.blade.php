@extends('base')
@section('content')

    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Add Product</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item active">Add Product</li>
                </ol>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-outline-info">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Add Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="addproductsStore" class="form-horizontal" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-body">
                                    <hr class="m-t-0 m-b-40">

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="identity"
                                                       class="col-md-3 text-right col-form-label">Identity</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="text" class="form-control" name="identity"
                                                               id="identity" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="name"
                                                       class="col-md-3 text-right col-form-label">Name</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="text" class="form-control"
                                                               name="name" id="name"> </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="length"
                                                       class="col-md-3 text-right col-form-label">Length</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="number" class="form-control" name="length"
                                                               id="length"> </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="width"
                                                       class="col-md-3 text-right col-form-label">Width</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="number" class="form-control" name="width" id="width">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="height"
                                                       class="col-md-3 text-right col-form-label">Height</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="number" class="form-control" name="height"
                                                               id="height">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="price"
                                                       class="col-md-3 text-right col-form-label">Price</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="number" class="form-control" name="price" id="price">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label for="manufacturing_date" class="col-md-3 text-right col-form-label">Manufacturing
                                                Date</label>
                                            <div class="col-md-8">
                                                <div class="form-group green-border-focus">
                                                    <input type="date" class="form-control" name="manufacturing_date"
                                                           id="manufacturing_date">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label for="manufacturing_place_id"
                                                   class="col-md-3 text-right col-form-label">Factory</label>
                                            <div class="col-md-8">
                                                <div class="form-group green-border-focus">
                                                    {{--<input type="text" class="form-control"
                                                           name="manufacturing_place_id" id="manufacturing_place_id">--}}
                                                    <select name="manufacturing_place_id" id="manufacturing_place_id" class="form-control">
                                                        <option>none</option>
                                                        @foreach($factories as $factory)
                                                        <option value="{{$factory->id}}">{{$factory->name}}</option>
                                                        @endforeach
                                                        {{--<option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>--}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label for="warranty_time" class="col-md-3 text-right col-form-label">Warranty</label>
                                            <div class="col-md-8">
                                                <div class="form-group green-border-focus">
                                                    {{--<input type="text" class="form-control" name="warranty_time"
                                                           id="warranty_time">--}}
                                                    <select name="warranty_time" id="warranty_time" class="form-control">
                                                        <option>Years</option>
                                                        <option value="1">1</option>
                                                        <option value="3">3</option>
                                                        <option value="5">5</option>
                                                        <option value="10">10</option>
                                                    </select>

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
