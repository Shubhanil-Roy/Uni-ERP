@extends('base')
@section('content')


    <div class="page-wrapper">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Add Factory</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Factories</li>
                    <li class="breadcrumb-item active">Add Factories</li>
                </ol>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-outline-info">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Add Factories</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('addManufactureStore')}}" class="form-horizontal" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-body">
                                    <hr class="m-t-0 m-b-40">

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="name"
                                                       class="col-md-3 text-right col-form-label">Manufacture
                                                    Name</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="text" class="form-control" name="name" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="short_name"
                                                       class="col-md-3 text-right col-form-label">Manufacture
                                                    short_name</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="text" id="UserName" class="form-control"
                                                               name="short_name"> </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="address"
                                                       class="col-md-3 text-right col-form-label">Address</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="text" class="form-control" name="address"> </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
{{--

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="city"
                                                       class="col-md-3 text-right col-form-label">City
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="form-group green-border-focus">
                                                        <input type="text" class="form-control"
                                                               name="city"> </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="state"
                                                       class="col-md-3 text-right col-form-label">State
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="form-group green-border-focus">
                                                        <input type="text" class="form-control"
                                                               name="state"> </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="country"
                                                       class="col-md-3 text-right col-form-label">Country
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="form-group green-border-focus">
                                                        <input type="text" class="form-control"
                                                               name="country"> </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="pin"
                                                       class="col-md-3 text-right col-form-label">PIN
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="form-group green-border-focus">
                                                        <input type="text" class="form-control"
                                                               name="pin"> </input>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

--}}

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="phone"
                                                       class="col-md-3 text-right col-form-label">Phone</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="number" class="form-control" name="phone" value="">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row">
                                                <label for="email"
                                                       class="col-md-3 text-right col-form-label">Email</label>
                                                <div class="col-md-8">
                                                    <div class="form-group green-border-focus">
                                                        <input type="email" class="form-control" name="email" value="">

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




@stop
