@extends('base')
@section('content')

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <title>Admin Press Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheegt">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">


    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Report Chart</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Charts</li>
                        <li class="breadcrumb-item active">Report</li>
                    </ol>
                </div>
                <div class="">
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
                    <!-- column -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Monthly/Yearly Report</h4>
                                <div id="bar_chart" style="width:100%; height:400px;"></div>
                            </div>
                        </div>
                    </div>
                    {{--

                                    <script>
                                        var url = "{{route('stock/chart')}}";
                                        var Products = new Array();
                                        var Quantity = new Array();
                                        var Solds = new Array();
                                        $(document).ready(function(){
                                            $.get(url, function(response){
                                                response.forEach(function(data){
                                                    Products.push(data.product_id);
                                                    Quantity.push(data.stock_quantity);
                                                    Solds.push(data.sold_stock);
                                                });
                                                var ctx = document.getElementById("bar_chart").getContext('2d');
                                                var bar_chart = new Chart(ctx, {
                                                    type: 'bar',
                                                    data: {
                                                        labels:Products,
                                                        datasets: [{
                                                            label: 'Quantity',
                                                            data: stock_quantity,
                                                            borderWidth: 1
                                                        }/*, {
                                                                label: 'Solds',
                                                                data: sold_stock,
                                                                borderWidth: 1
                                                            }*/
                                                        ]
                                                    },
                                                    options: {
                                                        scales: {
                                                            yAxes: [{
                                                                ticks: {
                                                                    beginAtZero:true
                                                                }
                                                            }]
                                                        }
                                                    }
                                                });
                                            });
                                        });
                                    </script>
                    --}}

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading"><b>Charts</b></div>
                                <div class="panel-body">
                                    <canvas id="mycanvas" height="280" width="600"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                    <script
                        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js"
                        charset="utf-8"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"
                            charset="utf-8"></script>

                    {{--<script>
                        var url = "{{url('stock/chart')}}";
                        var Products = new Array();
                        var Quantity = new Array();
                        var Solds = new Array();
                        $(document).ready(function(){
                            $.get(url, function(response){
                                response.forEach(function(data){
                                    Products.push(data.product_id);
                                    Quantity.push(data.stock_quantity);
                                    Solds.push(data.sold_stock);
                                });
                                var ctx = document.getElementById("canvas").getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels:Quantity,
                                        datasets: [{
                                            label: 'Sold Stocks',
                                            data: Solds,
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            yAxes: [{
                                                ticks: {
                                                    beginAtZero:true
                                                }
                                            }]
                                        }
                                    }
                                });
                            });
                        });
                    </script>--}}

                    <script>
                        $(document).ready(function () {
                            $.ajax({
                                url: "{{url('stock/chart')}}",
                                method: "GET",
                                success: function (data) {
                                    console.log(data);
                                    var products = [];
                                    var quantity = [];
                                    var solds = [];

                                    for (var i in data) {
                                        products.push("Player " + data[i].product_id);
                                        quantity.push(data[i].stock_quantity);
                                        solds.push(data[i].sold_stock);
                                    }

                                    var chartdata = {
                                        labels: Products,
                                        datasets: [
                                            {
                                                label: 'Product Solds',
                                                backgroundColor: 'rgba(200, 200, 200, 0.75)',
                                                borderColor: 'rgba(200, 200, 200, 0.75)',
                                                hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                                                hoverBorderColor: 'rgba(200, 200, 200, 1)',
                                                data: solds
                                            }
                                        ]
                                    };

                                    var ctx = $("#mycanvas");

                                    var barGraph = new Chart(ctx, {
                                        type: 'bar',
                                        data: chartdata
                                    });
                                },
                                error: function (data) {
                                    console.log(data);
                                }
                            });
                        });
                    </script>


                </div>
            </div>
        </div>
    </div>

    <!-- All Jquery -->
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
    {{--<!-- Chart JS -->--}}

    {{--
        <script src="{{asset('assets/plugins/echarts/echarts-all.js')}}"></script>
        <script src="{{asset('assets/plugins/echarts/echarts-init.js')}}"></script>
    --}}

    <!-- ============================================================== -->
    <!-- Style switcher -->{{--

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>--}}


@stop
