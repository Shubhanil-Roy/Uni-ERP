@extends('base')
@section('content')
    <style>
        .text-right{
            text-align: inherit;
        }
        .header{
            width: 75vw;
            height: 100vh;
        }
    </style>
    <style>
        .page {
            width: 70vw;
            /*min-height: 29.7cm;*/
            padding: 2cm;
            margin: 1cm auto;
            border: 1px red solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .subpage {
            /*padding: 1cm;
            border: 1px red solid;
            height: 256mm;
            outline: 2cm #FFEAEA solid;*/
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
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
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>

        {{--<div class="book">
            <div class="page">
                <div class="subpage">
                    <div class="">
                        <div class="">
                            <div class="card card-body printableArea" --}}{{--style="position: initial"--}}{{-->

                                <div class="">
                                    <div class="">
                                        @foreach($prints as $product)
                                            @if($loop->iteration % 2 == 0)
                                                <div class="pull-left" --}}{{--style="padding-left: 20px"--}}{{-->
                                                    <address style="padding-top: 35px">
                                                        <h6> &nbsp;<b class="text-danger">Identity : {{$product->identity}}</b></h6>
                                                        <p class="text-muted m-l-5"> Variety : <b class="text-danger"> {{$product->name}}</b>
                                                            <br/> Dimension : {{$product->length.' inch'}} X {{$product->width.' inch'}}
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
                                                        <br/>A Product From: JKFOAM
                                                        <br/>AN ISO 9001:2008 Company
                                                        <br/>Website : www.uniluxx.com | www.jkfoam.com
                                                        <br/>Mail : info@uniluxx.com | jkfoam.slg@gmail.com
                                                        <br/>Customer Care : +91 99321 38888 | +91 99322 75000

                                                    </address>
                                                </div>

                                            @else
                                                <div class=" pull-right" style="padding-right: 75px" >
                                                    <address style="padding-top: 35px">
                                                        <h6> &nbsp;<b class="text-danger">Identity : {{$product->identity}}</b></h6>
                                                        <p class="text-muted m-l-5"> Variety : <b class="text-danger"> {{$product->name}}</b>
                                                            <br/> Dimension : {{$product->length.' inch'}} X {{$product->width.' inch'}}
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
                                                                alt="Quality Checked"/>  : <img
                                                                style="height: 100px; width: 100px"
                                                                src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                                alt="QR Code"/></p>
                                                        <br --}}{{--style="text-align: center" --}}{{--/>A Product From: JK FOAM
                                                        <br />AN ISO 9001:2008 Company
                                                        <br/>Website : www.uniluxx.com | www.jkfoam.com
                                                        <br/>Mail : info@uniluxx.com | jkfoam.slg@gmail.com
                                                        <br/>Customer Care : +91 99321 38888 | +91 99322 75000
                                                    </address>
                                                </div>

                                            @endif
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                            <div class="">
                                <div class="clearfix"></div>
                                <hr>
                                <div class="text-right">
                                    <a href="{{route('customer.printpdf')}}">Print PDF</a>
                                    --}}{{--<button class="btn btn-danger" type="submit"> Proceed to payment </button>--}}{{--
                                    <button id="print" class="btn btn-danger" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                </div>
                            </div>
                        </div>
                    </div></div>
            </div>

        </div>--}}

        <!DOCTYPE html>
        <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <style>
                * {
                    box-sizing: border-box;
                }

                /* Create two equal columns that floats next to each other */
                .column {
                    float: left;
                    width: 33%;
                    padding: 10px;
                    height: 80%; /* Should be removed. Only for demonstration */
                }

                .column2 {
                    float: left;
                    width: 100%;
                    height: 80%;
                }

                .column1 {
                    float: left;
                    width: 50%;
                    height: 80%; /* Should be removed. Only for demonstration */
                }

                .column3 {
                    float: right;
                    width: 33%;
                    padding: 10px;
                    height: 80%;
                }

                /* Clear floats after the columns */
                .row:after {
                    content: "";
                    display: table;
                    clear: both;
                }
            </style>
        </head>
        <body>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-body printableArea" style="position: initial">
                    <div class="container">
                        <div class="row">
                            @foreach($products as $product)
                                @if($loop->iteration % 2 == 1)
                                    <div class="row">
                                        <div class="column" style="background-color:#fff;/*border: 1px solid red*/">
                                            <h3 style="font-size: 12px;padding-left: 35%">SOUND SLEEP SOLUTIONS </h3>
                                            <p><img style="padding-left: 34%" src="{{asset('uniluxx-logo.png')}}"
                                                    alt="UNILUXX"></p>
                                            <h3 style="font-size: 12px;padding-left: 38%;">MATTRESS | PILLOW </h3>
                                            <div class="column1">
                                                <h4>Identity :</h4>
                                                <h4>Variety : </h4>
                                                <h4>Dimension : </h4>
                                                <h4>Product Code : </h4>
                                            </div>
                                            <div class="column1">
                                                <h4><b>{{$product->identity}}</b></h4>
                                                <h4><b class="text-danger"> {{$product->name}}</b></h4>
                                                <h4> {{$product->length.' inch'}}
                                                    X {{$product->width.' inch'}}</h4>
                                                <h4> {{$product->length}} X {{$product->width}}
                                                    X {{$product->height}}</h4>
                                            </div>
                                            <div class="column">
                                                <h4>Product Quantity : </h4>
                                                <h4>S.L. No :</h4>
                                                <h4>Date of
                                                    MFG. :</h4>
                                                <h4>M.R.P
                                                    (Incl.
                                                    of
                                                    all taxs) :</h4>
                                            </div>
                                            <div class="column">
                                                <h4>1 No</h4>
                                                <h4>{{$product->sl_no}}</h4>
                                                <h4>{{$product->manufacturing_date}}</h4>
                                                <h4>Rs. {{$product->price}}</h4>
                                            </div>
                                            <div class="column">
                                                <img
                                                    style="height: 100px; width: 100px"
                                                    src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                    alt="QR Code"/>
                                            </div>
                                            <div class="column">
                                                <img
                                                    style="height: 70px; width: 80px"
                                                    src="{{asset('ok.jpg')}}"
                                                    alt="Quality Checked"/>
                                            </div>
                                            <div class="column2">
                                                <h6 style="font-size: 14px;text-align: center;margin-top: 25px">
                                                    A Product From:<br> JK FOAM </h6>
                                                <h6 style="font-size: 9px;text-align: center;">
                                                    AN ISO 9001:2008 Company</h6>
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
                                        @else
                                            <div class="column3" style="background-color:#fff;/*border: 1px solid red*/">
                                                <h3 style="font-size: 12px;padding-left: 35%">SOUND SLEEP SOLUTIONS </h3>
                                                <p><img style="padding-left: 34%" src="{{asset('uniluxx-logo.png')}}"
                                                        alt="UNILUXX"></p>
                                                <h3 style="font-size: 12px;padding-left: 38%;">MATTRESS | PILLOW </h3>
                                                <div class="column1">
                                                    <h4>Identity :</h4>
                                                    <h4>Variety : </h4>
                                                    <h4>Dimension : </h4>
                                                    <h4>Product Code : </h4>
                                                </div>
                                                <div class="column1">
                                                    <h4><b>{{$product->identity}}</b></h4>
                                                    <h4><b class="text-danger"> {{$product->name}}</b></h4>
                                                    <h4> {{$product->length.' inch'}}
                                                        X {{$product->width.' inch'}}</h4>
                                                    <h4> {{$product->length}} X {{$product->width}}
                                                        X {{$product->height}}</h4>
                                                </div>
                                                <div class="column">
                                                    <h4>Product Quantity : </h4>
                                                    <h4>S.L. No :</h4>
                                                    <h4>Date of
                                                        MFG. :</h4>
                                                    <h4>M.R.P
                                                        (Incl.
                                                        of
                                                        all taxs) :</h4>
                                                </div>
                                                <div class="column">
                                                    <h4>1 No</h4>
                                                    <h4>{{$product->sl_no}}</h4>
                                                    <h4>{{$product->manufacturing_date}}</h4>
                                                    <h4>Rs. {{$product->price}}</h4>
                                                </div>
                                                <div class="column">
                                                    <img
                                                        style="height: 100px; width: 100px"
                                                        src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                        alt="QR Code"/>
                                                </div>
                                                <div class="column">
                                                    <img
                                                        style="height: 70px; width: 80px"
                                                        src="{{asset('ok.jpg')}}"
                                                        alt="Quality Checked"/>
                                                </div>
                                                <div class="column2">
                                                    <h6 style="font-size: 14px;text-align: center;margin-top: 25px">
                                                        A Product From:<br> JK FOAM </h6>
                                                    <h6 style="font-size: 9px;text-align: center;">
                                                        AN ISO 9001:2008 Company</h6>
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
                                @endif
                            @endforeach
                        </div>

                    </div>

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


        </body>

        <!-- ============================================================== -->
        <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>

        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
        <!--Wave Effects -->
        <script src="{{asset('js/waves.js')}}"></script>
        <!--Menu sidebar -->
        <script src="{{asset('js/sidebarmenu.js')}}"></script>
        <!--stickey kit -->
        <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
        <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <!--Custom JavaScript -->
        <script src="{{asset('js/custom.min.js')}}"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <script src="{{asset('js/jasny-bootstrap.js')}}"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
        <!-- This is data table -->
        <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <!-- start - This is for export functionality only -->
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

        <script src="{{asset('js/jquery.PrintArea.js')}}" type="text/JavaScript"></script>
        <script>
            $(document).ready(function() {
                $("#print").click(function() {
                    var mode = 'iframe'; //popup
                    var close = mode == "popup";
                    var options = {
                        mode: mode,
                        popClose: close
                    };
                    $("div.printableArea").printArea(options);
                });
            });
        </script>
        </html>


    </div>


@stop
