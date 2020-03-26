<!DOCTYPE html>
<html>
<head>
    <style>
        table, th {
            border: 0.5px solid black;
        }

        table {
            /*border-collapse: collapse;*/
            width: 100%;
        }

        #right {
            float: left;
        }

        #left {
            float: right;
        }

        th {
            height: 50px;
        }
    </style>

</head>
<body>


<div class="row">
    <div class="col-lg-12">
        <div class="card card-body printableArea" style="position: initial">
            <div class="container">
                @foreach($products as $product)
                    @for($i=0; $i<$product->quantity; $i++)
                    @if($loop->iteration % 2 == 1)
                        <div>
                            <div id="right" {{--class="pull-right"--}} style="margin-bottom: 6rem;width: 49%">
                                <table>
                                    <table>
                                        <th colspan="4" style="width: 94%">
                                            <img style="height: 50px /*padding-left: 25%*/" src="{{asset('abc.jpeg')}}"
                                                 alt="UNILUXX">
                                        </th>

                                        <tr>
                                            <td>Identity</td>
                                            <td>{{$product->identity}}</td>
                                        </tr>
                                        <tr>
                                            <td>Variety</td>
                                            <td>{{$product->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Dimension</td>
                                            <td>
                                                {{$product->length*2.54.' cm'}}
                                                X {{$product->width*2.54.' cm'}} X {{$product->height*2.54.' cm'}}
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
                                            <table>
                                                <tr>
                                                    <td>Product Quantity</td>
                                                    <td>1 NO</td>
                                                    <td rowspan="4"><img
                                                            style="height: 100px; width: 100px"
                                                            src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                            alt="QR Code"/></td>
                                                </tr>
                                                <tr>
                                                    <td>SL NO</td>
                                                    <td>{{$product->sl_no}}</td>
                                                </tr>

                                                <tr>
                                                    <td style="text-align:justify">MFG. Date :</td>
                                                    <td>{{$product->manufacturing_date}}</td>
                                                </tr>

                                                <tr>
                                                    <td>M.R.P. (Incl. of all taxs) :</td>
                                                    <td>&#8377; {{$product->price}}</td>
                                                </tr>
                                            </table>
                                        </tr>
                                        <tr>
                                            <table>
                                                <tr>
                                                    <td rowspan="4">
                                                        <img style="height: 70px; width: 80px" src="{{asset('ok.jpg')}}"
                                                             alt="Quality Checked"/>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center">A Product From: JK FOAM</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center">Website: www.uniluxx.com |
                                                        www.jkfoam.com
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align:center">Mail: info@uniluxx.com |
                                                        jkfoam.slg@gmail.com
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <table>
                                                        <td style="text-align:center">Customer Care : +91 99321 38888
                                                            |<br>
                                                            +91
                                                            99322 75000
                                                        </td>
                                                    </table>
                                                </tr>
                                            </table>
                                        </tr>
                                    </table>
                                </table>
                            </div>
                            @else
                                <div id="left" {{--class="pull-right"--}} style="margin-bottom: 6rem;width: 49%">
                                    <table>
                                        <table>
                                            <th colspan="4" style="width: 94%">
                                                <img style="height: 50px /*padding-left: 25%*/"
                                                     src="{{asset('abc.jpeg')}}"
                                                     alt="UNILUXX">
                                            </th>

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
                                                    {{$product->length*2.54.' cm'}}
                                                    X {{$product->width*2.54.' cm'}} X {{$product->height*2.54.' cm'}}
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
                                                <table>
                                                    <tr>
                                                        <td>Product Quantity</td>
                                                        <td>1 NO</td>
                                                        <td rowspan="4"><img
                                                                style="height: 100px; width: 100px"
                                                                src="data:image/svg+xml;base64,{{$product->qr_code}}"
                                                                alt="QR Code"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td>SL NO</td>
                                                        <td>{{$product->sl_no}}</td>
                                                    </tr>

                                                    <tr>
                                                        <td style="text-align:justify">MFG. Date :</td>
                                                        <td>{{$product->manufacturing_date}}</td>
                                                    </tr>

                                                    <tr>
                                                        <td>M.R.P. (Incl. of all taxs) :</td>
                                                        <td>&#8377; {{$product->price}}</td>
                                                    </tr>
                                                </table>
                                            </tr>
                                            <tr>
                                                <table>
                                                    <tr>
                                                        <td rowspan="4">
                                                            <img style="height: 70px; width: 80px"
                                                                 src="{{asset('ok.jpg')}}"
                                                                 alt="Quality Checked"/>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center">A Product From: JK FOAM</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center">Website: www.uniluxx.com |
                                                            www.jkfoam.com
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center">Mail: info@uniluxx.com |
                                                            jkfoam.slg@gmail.com
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <table>
                                                            <td style="text-align:center">Customer Care : +91 99321
                                                                38888 |<br>
                                                                +91 99322 75000
                                                            </td>
                                                        </table>
                                                    </tr>
                                                </table>
                                            </tr>
                                        </table>
                                    </table>
                                </div>
                        </div>
                    @endif
                    @endfor
                @endforeach
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
    $(document).ready(function () {
        $("#print").click(function () {
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

