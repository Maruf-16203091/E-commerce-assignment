@extends('backend.back_master')
@section('content')

<div class="wrapper">

<div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">


                    <div class="content-header">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-color">Expence Overview</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body card-style">
                                    <h3 class="card-title"> BDT 1000</h3>
                                    <p class="card-text">Today</p>
                                    <div class="card-icon"><img src="{{asset('public/backend/assets/img-icon/01.png')}}" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body card-style">
                                    <h3 class="card-title"> BDT 1000</h3>
                                    <p class="card-text">This Week</p>
                                    <div class="card-icon"><img src="{{asset('public/backend/assets/img-icon/01.png')}}" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body card-style">
                                    <h3 class="card-title"> BDT 1000</h3>
                                    <p class="card-text">This Month</p>
                                    <div class="card-icon"><img src="{{asset('public/backend/assets/img-icon/01.png')}}" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body card-style">
                                    <h3 class="card-title"> BDT 1000</h3>
                                    <p class="card-text">This Year</p>
                                    <div class="card-icon"><img src="{{asset('public/backend/assets/img-icon/01.png')}}" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-header">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-color">Expence Overview</h1>
                            </div>
                        </div>
                    </div>
                    <div class="order-area">
                        <ul>
                            <li>
                                <div class="order">
                                    <h3>50</h3>
                                    <p>New Order Request</p>
                                </div>
                            </li>
                            <li>
                                <div class="order">
                                    <h3>50</h3>
                                    <p>Today Complete Order</p>
                                </div>
                            </li>
                            <li>
                                <div class="order">
                                    <h3>50</h3>
                                    <p>This Week Complete Order</p>
                                </div>
                            </li>
                            <li>
                                <div class="order">
                                    <h3>50</h3>
                                    <p>This Monthly Complete Order</p>
                                </div>
                            </li>
                            <li>
                                <div class="order">
                                    <h3>50</h3>
                                    <p>Total Complete Order</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="product">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="content-header">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1 class="m-0 text-color">Product Overview</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-overview">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <ul>
                                                <li><img src="{{asset('public/backend/assets/img-icon/01.png')}}"></li>
                                                <li>
                                                    <h5>All Product</h5>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5">
                                            <h3 class="text-color">51</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-overview">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <ul>
                                                <li><img src="{{asset('public/backend/assets/img-icon/01.png')}}"></li>
                                                <li>
                                                    <h5>All Product</h5>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5">
                                            <h3 class="text-color">BDT 786551</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-overview">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <ul>
                                                <li><img src="{{asset('public/backend/assets/img-icon/01.png')}}"></li>
                                                <li>
                                                    <h5>All Product</h5>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5">
                                            <h3 class="text-color">BDT 786551</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-overview">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <ul>
                                                <li><img src="{{asset('public/backend/assets/img-icon/01.png')}}"></li>
                                                <li>
                                                    <h5>All Product</h5>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-5">
                                            <h3 class="text-color">BDT 786551</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="content-header">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1 class="m-0 text-color">Sell Overview</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="sel-overvew">
                                    <div class="row">
                                        <div class="col-md-4 m-t-15">
                                            <div class="order">
                                                <h3>5000 Tk</h3>
                                                <p>Total Sell</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 m-t-15">
                                            <div class="order">
                                                <h3>500 TK</h3>
                                                <p>Total Purchase</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 m-t-15">
                                            <div class="order">
                                                <h3>5099 TK</h3>
                                                <p>Loss/Profit</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="order">
                                                <h3>50907899 TK</h3>
                                                <p>Not Sold Product</p>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="order total-active">
                                                <h3>508976534 TK</h3>
                                                <p>Total Production This Year</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
@endsection