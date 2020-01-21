@extends('base')
@section('content')


    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">All Rooms</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">pages</li>
                    <li class="breadcrumb-item active">Rooms</li>
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
                            <h4 class="card-title">Data Export</h4>
                            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                            <div class="table-responsive m-t-40">
                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th>Product Identity</th>
                                        <th>Product Name</th>
                                        <th>Length</th>
                                        <th>Width</th>
                                        <th>Price</th>
                                        <th>Manufacturing Date</th>
                                        <th>Manufacturing Place ID</th>
                                        <th>Warranty Time</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    {{--<tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>Room Name</th>
                                        <th>Room Description</th>
                                        <th>Room Image</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>--}}
                                    <tbody>
                                    {{--@foreach($allrooms as $allroom)
                                        <tr>
                                            <td>{{$allroom->id}}</td>
                                            <td>{{$allroom->name}}</td>
                                            <td>{{$allroom->description}}</td>
                                            <td>{{$allroom->image}}</td>
                                            <td>{{$allroom->id}}</td>
                                            <td>{{$allroom->name}}</td>
                                            <td>{{$allroom->description}}</td>
                                            <td>{{$allroom->image}}</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-danger" >Delete</button>
                                                <button type="button" class="btn btn-outline-primary" onclick="location.href='{{ url('deleteProduct') }}'">Edit</button>
                                            </td>
                                        </tr>
                                    @endforeach--}}
                                    {{--<tr>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>
                                            <button type="button"  class="btn btn-outline-danger" >Delete</button>
                                            <button type="button" class="btn btn-outline-primary" onclick="location.href='{{ url('adminAddRoom') }}'" >Details</button>
                                        </td>
                                    </tr>--}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@stop
