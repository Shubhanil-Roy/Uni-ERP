@extends('base')
@section('content')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">

            </div>

            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item">Sales</li>
                    <li class="breadcrumb-item active">Sales Form</li>
                </ol>
            </div>

            <div>
                <button
                    class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10">
                    <i class="ti-settings text-white"></i>
                </button>
            </div>
        </div>



        <div class="container">
            <br/>
            <form action="{{route('salesformPost')}}" method="post" >
                {{csrf_field()}}

                <div class="form-group col-md-4">
                    <label for="product_id">Stock Name:</label>

                    <select class="selectpicker" name="product_id">

                        @foreach($products as $product)
                            <option value="{{$product->name}}">{{$product->name}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="stock_quantity">Stock Quantity:</label>
                    <input type="number" min="0" class="form-control" id="stockPrice" name="stock_quantity">
                </div>

                <div class="form-group col-md-4">
                    <label for="sold_stock">Stock Sold:</label>
                    <input type="number" min="0" class="form-control" id="stockName" name="sold_stock">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>






    </div>


        @stop
