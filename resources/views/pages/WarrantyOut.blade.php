@extends('base')
@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">

            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Warranty</li>
                    <li class="breadcrumb-item active">Warranty Claim</li>
                </ol>
            </div>
            <div>
                <button
                    class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10">
                    <i class="ti-settings text-white"></i></button>
            </div>
        </div>

        <div class="container-fluid" >
            <h1>
                This Product is Out of Warranty !!
            </h1>
        </div>

        <div class="row">
            <div class="col-12">
                <form method="post" action="{{route('WarrantyCheck')}}">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="example">
                                        <h5 class="box-title m-t-30">Product Sl No./ID</h5>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Product Invoice" name="invoice_no" >
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div style="height: 5vh"></div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                            <div id="div1"><h2></h2></div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>


@stop
