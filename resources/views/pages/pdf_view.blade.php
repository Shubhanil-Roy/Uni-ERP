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
        .column2{
            float: left;
            width: 100%;
            height: 80%;
        }
        .column1 {
            float: left;
            width: 50%;
            height: 80%; /* Should be removed. Only for demonstration */
        }
        .column3{
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


@foreach($abc as $product)
    @if($loop->iteration % 2 == 1)
    <div class="row">
        <div class="column" style="background-color:#fff;border: 1px solid red">
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
            <div class="column3" style="background-color:#fff;border: 1px solid red">
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


</body>
</html>
