<!DOCTYPE html>
<html>
<head>
    <style>
        table, th {
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            height: 50px;
        }
    </style>
</head>
<body>

<p>Uniluxx Invoice</p>

<div class="row">
    <div class="col-lg-12">
        <div class="card card-body printableArea" style="position: initial">
            <div class="container">
                <table>

                    <tr>
                        <th>UNILUXX</th>
                        <th>UNILUXX</th>
                    </tr>
                    <tr>
                        @foreach($products as $product)
                            @if($loop->iteration % 2 == 1)
                                <td>
                                    <table>
                                        <tr>
                                            <td>Identity</td>
                                            <td><b>{{$product->identity}}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Variety</td>
                                            <td><b>{{$product->name}}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Dimension</td>
                                            <td>
                                                {{$product->length.' inch'}}
                                                X {{$product->width.' inch'}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Product Code</td>
                                            <td>
                                                {{$product->length}} X {{$product->width}}
                                                X {{$product->height}}
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Product Quantity
                                            </td>
                                            <td>
                                                1 No
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                S.L. No :
                                            </td>
                                            <td>
                                                {{$product->sl_no}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Date of
                                                MFG. :
                                            </td>
                                            <td>
                                                {{$product->manufacturing_date}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                M.R.P
                                                (Incl.
                                                of
                                                all taxs) :
                                            </td>
                                            <td>
                                                {{$product->price}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img
                                                    style="height: 70px; width: 80px"
                                                    src="{{asset('ok.jpg')}}"
                                                    alt="Quality Checked"/>
                                            </td>
                                            <td>
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
                                            </td>
                                            <td>
                                                <img
                                                    style="height: 100px; width: 100px"
                                                    src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                    alt="QR Code"/>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            @else
                                <td>
                                    <table>
                                        <tr>
                                            <td>Identity</td>
                                            <td><b>{{$product->identity}}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Variety</td>
                                            <td><b>{{$product->name}}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Dimension</td>
                                            <td>
                                                {{$product->length.' inch'}}
                                                X {{$product->width.' inch'}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Product Code</td>
                                            <td>
                                                {{$product->length}} X {{$product->width}}
                                                X {{$product->height}}
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Product Quantity
                                            </td>
                                            <td>
                                                1 No
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                S.L. No :
                                            </td>
                                            <td>
                                                {{$product->sl_no}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Date of
                                                MFG. :
                                            </td>
                                            <td>
                                                {{$product->manufacturing_date}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                M.R.P
                                                (Incl.
                                                of
                                                all taxs) :
                                            </td>
                                            <td>
                                                {{$product->price}}
                                            </td>
                                        </tr>
                                        <table>
                                            <tr>
                                                <td>
                                                    <img
                                                        style="height: 70px; width: 80px"
                                                        src="{{asset('ok.jpg')}}"
                                                        alt="Quality Checked"/>
                                                </td>
                                                <td>
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
                                                <td>
                                                    <img
                                                        style="height: 100px; width: 100px"
                                                        src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                        alt="QR Code"/>
                                                </td>
                                            </tr>
                                        </table>
                                    </table>
                                </td>
                            @endif
                        @endforeach
                    </tr>
                </table>
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

