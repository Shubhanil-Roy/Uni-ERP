@extends('base')
@section('content')
    <style>
        .text-right {
            text-align: inherit;
        }
    </style>

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Invoice</h3>
            </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Products</li>
                    <li class="breadcrumb-item active">Print Invoices</li>
                </ol>
            </div>
            <div>
                <button
                    class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10">
                    <i class="ti-settings text-white"></i></button>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-body printableArea" {{--style="position: initial"--}}>

                        <div class="row">
                            <div class="col-lg-12">
                                @foreach($products as $product)
                                    @if($loop->iteration % 2 == 0)
                                        <div class="pull-left" {{--style="padding-left: 20px"--}}>
                                            <address style="margin-bottom:5rem">
                                                <h6 style="font-size: 12px;/*padding-left: 30%*/">SOUND SLEEP
                                                    SOLUTIONS </h6>
                                                <img style="/*padding-left: 25%*/" src="{{asset('uniluxx-logo.png')}}"
                                                     alt="UNILUXX">
                                                <br>
                                                <h6 style="font-size: 12px;/*padding-left: 32%*/">MATTRESS |
                                                    PILLOW </h6><br>

                                                <h6><b class="text-danger">Identity : {{$product->identity}}</b></h6>
                                                <p class="text-muted m-l-5"> Variety : <b
                                                        class="text-danger"> {{$product->name}}</b>
                                                    <br/> Dimension : {{$product->length.' inch'}}
                                                    X {{$product->width.' inch'}}
                                                    X {{$product->height}}
                                                    <br/> Product Code : {{$product->length}} X {{$product->width}}
                                                    X {{$product->height}}
                                                    <br/> Product Quantity : 1 No
                                                    <br/> S.L. No : {{$product->sl_no}}
                                                    <br/>Date of Manufacture : {{$product->manufacturing_date}}
                                                    <br/>M.R.P (Incl. of all taxs) : Rs. {{$product->price}}
                                                    <br/> <img
                                                        style="height: 80px; width: 100px"
                                                        src="{{asset('ok.jpg')}}"
                                                        alt="Quality Checked"/> : <img
                                                        style="height: 100px; width: 100px"
                                                        src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                        alt="QR Code"/></p>
                                                <h5 style="text-align: center">A Product From: JKFOAM</h5>
                                                <h5 style="text-align: center">AN ISO 9001:2008 Company</h5>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h6 style="font-size: 14px">Website : www.uniluxx.com |
                                                            www.jkfoam.com</h6>
                                                        <h6 style="font-size: 14px">Mail : info@uniluxx.com |
                                                            jkfoam.slg@gmail.com</h6>
                                                        <h6 style="font-size: 14px">Customer Care : +91 99321 38888 |
                                                            +91
                                                            99322 75000</h6>
                                                    </div>
                                                </div>
                                            </address>
                                        </div>
                                    @else
                                        {{--<div >
                                            <h6 style="font-size: 12px">SOUND SLEEP SOLUTIONS </h6>
                                            <img src="{{asset('uniluxx-logo.png')}}" alt="UNILUXX"><br>
                                            <h6 style="font-size: 12px;text-align: center">MATTRESS | PILLOW </h6><br>
                                        </div>--}}
                                        <div class=" pull-right" style="padding-right: 75px">

                                            <address style="margin-bottom:5rem">
                                                <h6 style="font-size: 12px;/*padding-left: 30%*/">SOUND SLEEP
                                                    SOLUTIONS </h6>
                                                <img
                                                    {{--style="padding-left: 25%"--}} src="{{asset('uniluxx-logo.png')}}"
                                                    alt="UNILUXX">
                                                <br>
                                                <h6 style="font-size: 12px;/*padding-left: 32%*/">MATTRESS |
                                                    PILLOW </h6><br>

                                                <h6><b class="text-danger">Identity : {{$product->identity}}</b></h6>
                                                <p class="text-muted m-l-5"> Variety : <b
                                                        class="text-danger"> {{$product->name}}</b>
                                                    <br/> Dimension : {{$product->length.' inch'}}
                                                    X {{$product->width.' inch'}}
                                                    X {{$product->height}}
                                                    <br/> Product Code : {{$product->length}} X {{$product->width}}
                                                    X {{$product->height}}
                                                    <br/> Product Quantity : 1 No
                                                    <br/> S.L. No : {{$product->sl_no}}
                                                    <br/>Date of Manufacture : {{$product->manufacturing_date}}
                                                    <br/>M.R.P (Incl. of all taxs) : Rs. {{$product->price}}
                                                    <br/><img
                                                        style="height: 80px; width: 100px"
                                                        src="{{asset('ok.jpg')}}"
                                                        alt="Quality Checked"/> : <img
                                                        style="height: 100px; width: 100px"
                                                        src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                        alt="QR Code"/></p>
                                                <h5 style="text-align: center">A Product From: JKFOAM</h5>
                                                <h5 style="text-align: center">AN ISO 9001:2008 Company</h5>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h6 style="font-size: 14px">Website : www.uniluxx.com |
                                                            www.jkfoam.com</h6>
                                                        <h6 style="font-size: 14px">Mail : info@uniluxx.com |
                                                            jkfoam.slg@gmail.com</h6>
                                                        <h6 style="font-size: 14px">Customer Care : +91 99321 38888 |
                                                            +91
                                                            99322 75000</h6>
                                                    </div>
                                                </div>
                                            </address>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                    </div>
                    {{--<div class="col-lg-12">
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right">
                            <a href="{{route('customer.printpdf')}}">Print PDF</a>
                            <button id="print" class="btn btn-danger" type="button"><span><i class="fa fa-print"></i> Print</span>
                            </button>
                        </div>
                    </div>--}}
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-body printableArea" style="position: initial">

                        <div class="row">

                            @foreach($products as $product)
                                @if($loop->iteration % 2 == 0)
                                    <div class="col-md-6" style="border: 5px solid #f8f9fa">
                                        <div class="pull-right">

                                            <div style="border: 2px solid black ;margin-top:4rem">
                                                <h6 style="font-size: 12px;padding-left: 35%">SOUND SLEEP
                                                    SOLUTIONS </h6>
                                                <img style="padding-left: 32%" src="{{asset('uniluxx-logo.png')}}"
                                                     alt="UNILUXX">
                                                <br>
                                                <h6 style="font-size: 12px;padding-left: 38%">MATTRESS | PILLOW </h6>
                                            </div>
                                            <div class="col-md-12 pull-left" style="border: 1px solid black">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h6 style="font-size: 12px;">Identity :</h6>
                                                        <h6 style="font-size: 12px;">Variety :</h6>
                                                        <h6 style="font-size: 12px;">Dimension :</h6>
                                                        <h6 style="font-size: 12px;">Product Code :</h6>
                                                        <h6 style="font-size: 12px;">Product Quantity :</h6>
                                                        <h6 style="font-size: 12px;">S.L. No :</h6>
                                                        <h6 style="font-size: 12px;text-align: justify-all">Date of
                                                            Manufacture :</h6>
                                                        <h6 style="font-size: 12px;text-align: justify-all">M.R.P (Incl.
                                                            of
                                                            all taxs) :</h6>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h6 style="font-size: 15px"><b>{{$product->identity}}</b></h6>
                                                        <h6 style="font-size: 15px"><b>{{$product->name}}</b></h6>
                                                        <h6 style="font-size: 12px">{{$product->length.' inch'}}
                                                            X {{$product->width.' inch'}}
                                                            X {{$product->height}}
                                                        </h6>
                                                        <h6 style="font-size: 12px">{{$product->length}}
                                                            X {{$product->width}}
                                                            X {{$product->height}}
                                                        </h6>
                                                        <h6 style="font-size: 12px">1 No</h6>
                                                        <h6 style="font-size: 12px">{{$product->sl_no}}</h6>
                                                        <h6 style="font-size: 12px">{{$product->manufacturing_date}}</h6>
                                                        <h6 style="font-size: 12px">{{$product->price}}</h6>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <img
                                                            style="height: 70px; width: 100px"
                                                            src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                            alt="QR Code"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img
                                                            style="height: 70px; width: 80px"
                                                            src="{{asset('ok.jpg')}}"
                                                            alt="Quality Checked"/>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h6 style="font-size: 14px;text-align: center;margin-top: 25px">
                                                            A Product From:<br> JK FOAM </h6>
                                                        <h6 style="font-size: 9px;text-align: center;">
                                                            AN ISO 9001:2008 Company</h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <h6 style="font-size: 13px">Website : www.uniluxx.com |
                                                            www.jkfoam.com</h6>
                                                        <h6 style="font-size: 13px">Mail : info@uniluxx.com |
                                                            jkfoam.slg@gmail.com</h6>
                                                        <h6 style="font-size: 13px">Customer Care : +91 99321 38888 |
                                                            +91
                                                            99322 75000</h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        @else
                                            <div class="pull-left">

                                                <div style="border: 2px solid black ;margin-top:4rem">
                                                    <h6 style="font-size: 12px;padding-left: 35%">SOUND SLEEP
                                                        SOLUTIONS </h6>
                                                    <img style="padding-left: 32%" src="{{asset('uniluxx-logo.png')}}"
                                                         alt="UNILUXX">
                                                    <br>
                                                    <h6 style="font-size: 12px;padding-left: 38%">MATTRESS |
                                                        PILLOW </h6>
                                                </div>
                                                <div class="col-md-12 pull-left" style="border: 1px solid black">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h6 style="font-size: 12px;">Identity :</h6>
                                                            <h6 style="font-size: 12px;">Variety :</h6>
                                                            <h6 style="font-size: 12px;">Dimension :</h6>
                                                            <h6 style="font-size: 12px;">Product Code :</h6>
                                                            <h6 style="font-size: 12px;">Product Quantity :</h6>
                                                            <h6 style="font-size: 12px;">S.L. No :</h6>
                                                            <h6 style="font-size: 12px;text-align: justify-all">Date of
                                                                Manufacture :</h6>
                                                            <h6 style="font-size: 12px;text-align: justify-all">M.R.P
                                                                (Incl.
                                                                of
                                                                all taxs) :</h6>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h6 style="font-size: 15px"><b>{{$product->identity}}</b>
                                                            </h6>
                                                            <h6 style="font-size: 15px"><b>{{$product->name}}</b></h6>
                                                            <h6 style="font-size: 12px">{{$product->length.' inch'}}
                                                                X {{$product->width.' inch'}}
                                                                X {{$product->height}}
                                                            </h6>
                                                            <h6 style="font-size: 12px">{{$product->length}}
                                                                X {{$product->width}}
                                                                X {{$product->height}}
                                                            </h6>
                                                            <h6 style="font-size: 12px">1 No</h6>
                                                            <h6 style="font-size: 12px">{{$product->sl_no}}</h6>
                                                            <h6 style="font-size: 12px">{{$product->manufacturing_date}}</h6>
                                                            <h6 style="font-size: 12px">{{$product->price}}</h6>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <img
                                                                style="height: 70px; width: 100px"
                                                                src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                                alt="QR Code"/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img
                                                                style="height: 70px; width: 80px"
                                                                src="{{asset('ok.jpg')}}"
                                                                alt="Quality Checked"/>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h6 style="font-size: 14px;text-align: center;margin-top: 25px">
                                                                A Product From:<br> JK FOAM </h6>
                                                            <h6 style="font-size: 9px;text-align: center;">
                                                                AN ISO 9001:2008 Company</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <h6 style="font-size: 13px">Website : www.uniluxx.com |
                                                                www.jkfoam.com</h6>
                                                            <h6 style="font-size: 13px">Mail : info@uniluxx.com |
                                                                jkfoam.slg@gmail.com</h6>
                                                            <h6 style="font-size: 13px">Customer Care : +91 99321 38888
                                                                |
                                                                +91
                                                                99322 75000</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right">
                            <a href="{{route('customer.printpdf')}}">Print PDF</a>
                            <button id="print" class="btn btn-danger" type="button"><span><i class="fa fa-print"></i> Print</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
        </div>

        <div>

        </div>

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>


@stop
