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

        <div class="book">
            <div class="page">
                <div class="subpage">
                    <div class="">
                        <div class="">
                            <div class="card card-body printableArea" {{--style="position: initial"--}}>

                                <div class="">
                                    <div class="">
                                        @foreach($prints as $product)
                                            @if($loop->iteration % 2 == 0)
                                                <div class="pull-left" {{--style="padding-left: 20px"--}}>
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
                                                        <br {{--style="text-align: center" --}}/>A Product From: JK FOAM
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
                                    {{--<button class="btn btn-danger" type="submit"> Proceed to payment </button>--}}
                                    <button id="print" class="btn btn-danger" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                                </div>
                            </div>
                        </div>
                    </div></div>
            </div>

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
