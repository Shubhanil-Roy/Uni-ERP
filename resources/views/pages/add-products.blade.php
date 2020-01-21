
@extends('base')
@section('content')


    <div class="page-wrapper">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Add Product</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Product</li>
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
                            <form action="{{route('addproductsStore')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-body">
                                    <hr class="m-t-0 m-b-40">

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="sl_no"
                                                       class="col-md-3 text-right col-form-label">Sl No</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="number"  class="form-control" name="sl_no"  value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="identity"
                                                       class="col-md-3 text-right col-form-label">Product Identity</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="text" class="form-control" name="identity"> </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="name"
                                                       class="col-md-3 text-right col-form-label">Product Name</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="text" class="form-control" name="name"> </input>
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
                                                        <input type="number" class="form-control" name="length" value="">

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
                                                        <input type="number" class="form-control" name="width" value="">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="heigth"
                                                       class="col-md-3 text-right col-form-label">Height</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="number" class="form-control" name="heigth" value="">

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
                                                        <input type="number" min="0" class="form-control" name="price"  value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="manufacturing_date"
                                                       class="col-md-3 text-right col-form-label">Manufacturing Date</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="date"  class="form-control" name="manufacturing_date"  value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="manufacturing_place_id"
                                                       class="col-md-3 text-right col-form-label">Manufacturing Place ID</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="date"  class="form-control" name="manufacturing_place_id"  value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="warranty_time"
                                                       class="col-md-3 text-right col-form-label">Warranty Time</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="number"  class="form-control" name="warranty_time"  value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                   {{-- <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="warranty_time"
                                                       class="col-md-3 text-right col-form-label">QR Code</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="file"  class="form-control" name="warranty_time"  value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>--}}




                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
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

@stop
