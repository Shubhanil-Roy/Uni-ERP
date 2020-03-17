<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{{ $title }}</title>
</head>
<body>
<h1>{{ $heading}}</h1>
<div>
    <p>{{$content}}</p>
    @foreach($abc as $product)
    {{--<p>ID: {{$product->id}}</p>
    <p>Name: {{$product->name}}</p>
    <p>Identity: {{$product->identity}}</p>--}}
        <div class="row">
            <div class="col-lg-12">
                @foreach($abc as $product)
                    @if($loop->iteration % 2 == 0)
                        <div class="pull-left" style="padding-left: 20px">
                            <address>
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
                            <address>
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
                                <br style="text-align: center" />A Product From: JK FOAM
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
    @endforeach
</div>

</body>
</html>
