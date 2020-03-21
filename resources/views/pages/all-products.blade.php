@extends('base')
@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">All Products</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item active">All Products</li>
                </ol>
            </div>
            <div>
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{--<h4 class="card-title">Data Export</h4>--}}
                            {{--<h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6><br>--}}
                            <button type="button" class="btn btn-outline-success"><a target="_blank" href="{{route('printlayout')}}">Print Product Invoices</a></button>
                            <div class="table-responsive m-t-40 "><!--m-t-40-->
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                       cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Sl No</th>
                                        <th>Identity</th>
                                        <th>Name</th>
                                        {{--<th>Length</th>
                                        <th>Width</th>
                                        <th>Height</th>--}}
                                        <th>Price</th>
                                        <th>Mfg Date</th>
                                        {{--<th>Factory</th>--}}
                                        <th>Warranty</th>
                                        <th>QR Code</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->sl_no}}</td>
                                        <td>{{$product->identity}}</td>
                                        <td>{{$product->name}}</td>
                                        {{--<td>{{$product->length.' inch'}}</td>
                                        <td>{{$product->width.' inch'}}</td>
                                        <td>{{$product->height}}</td>--}}
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->manufacturing_date}}</td>
                                       {{-- <td>{{$product->products_to_place->name}}</td>--}}
                                        <td>{{$product->warranty_time.' years'}}</td>
                                        <td><img style="height: 100px; width: 100px" src="data:image/svg+xml;base64,{{$product->qr_code}}" alt="QR Code" /></td>
                                        {{--<td>{{$product->qr_code}}</td>--}}
                                        <td class="text-nowrap">
                                            {{--<a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>--}}
                                            <a href="{{route('dropProduct',$product->id)}}" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                        {{--<td>
                                            <button type="button"  class="btn btn-outline-danger" >Delete</button>
                                            <button type="button" class="btn btn-outline-primary" onclick="location.href='{{ url('adminAddRoom') }}'" >QR Code</button>
                                        </td>--}}
                                    </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Sl No</th>
                                        <th>Identity</th>
                                        <th>Name</th>
                                       {{--<th>Length</th>
                                        <th>Width</th>
                                        <th>Height</th>--}}
                                        <th>Price</th>
                                        <th>Mfg Date</th>
                                        {{--<th>Factory</th>--}}
                                        <th>Warranty</th>
                                        <th>QR Code</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@stop
