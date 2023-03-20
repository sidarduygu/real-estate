@extends('layout.panel.app')
@section('content')
<div class="page-wrapper" style="min-height: 813px;">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Real Estate Dashboard</h4>
            </div>
            <div class="col-md-7 align-self-center text-end">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Real Estate Dashboard</li>
                    </ol>
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <!--.row -->
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">All Properties</h5>
                        <div class="d-flex align-items-center no-block m-t-20 m-b-10">
                            <h1><i class="ti-home text-info"></i></h1>
                            <div class="ms-auto">
                                <h1 class="text-muted">480</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">Properties for Sale</h5>
                        <div class="d-flex align-items-center no-block m-t-20 m-b-10">
                            <h1><i class="icon-tag text-purple"></i></h1>
                            <div class="ms-auto">
                                <h1 class="text-muted">169</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">Properties for Rent</h5>
                        <div class="d-flex align-items-center no-block m-t-20 m-b-10">
                            <h1><i class="icon-basket text-danger"></i></h1>
                            <div class="ms-auto">
                                <h1 class="text-muted">311</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">Total Ernings</h5>
                        <div class="d-flex align-items-center no-block m-t-20 m-b-10">
                            <h1><i class="ti-wallet text-success"></i></h1>
                            <div class="ms-auto">
                                <h1 class="text-muted">$8170</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- ============================================================== -->
        <!-- End Info box -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Over Visitor, Our income , slaes different and  sales prediction -->
        <!-- ============================================================== -->
        <!-- .row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex m-b-40 align-items-center">
                            <h5 class="card-title">PROPERTIES STATS</h5>
                            <div class="ms-auto">
                                <ul class="list-inline font-12">
                                    <li><i class="fa fa-circle text-cyan"></i> For Sale</li>
                                    <li><i class="fa fa-circle text-primary"></i> For Rent</li>
                                    <li><i class="fa fa-circle text-purple"></i> All</li>
                                </ul>
                            </div>
                        </div>
                        <div id="morris-bar-chart" style="height: 352px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="352" version="1.1" width="626.656" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.375px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.53125" y="313" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#eef0f2" d="M45.03125,313H601.656" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="241" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path fill="none" stroke="#eef0f2" d="M45.03125,241H601.656" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="169" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#eef0f2" d="M45.03125,169H601.656" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="97" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#eef0f2" d="M45.03125,97H601.656" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#eef0f2" d="M45.03125,25H601.656" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="566.866953125" y="325.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="427.71076562499996" y="325.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="288.554578125" y="325.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="149.398390625" y="325.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan></text><rect x="53.72851171875" y="25" width="15.394523437499998" height="288" rx="0" ry="0" fill="#b8edf0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="72.12303515625" y="53.80000000000001" width="15.394523437499998" height="259.2" rx="0" ry="0" fill="#b4c1d7" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="90.51755859375" y="140.20000000000002" width="15.394523437499998" height="172.79999999999998" rx="0" ry="0" fill="#fcc9ba" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="123.30660546874999" y="97" width="15.394523437499998" height="216" rx="0" ry="0" fill="#b8edf0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="141.70112890625" y="125.80000000000001" width="15.394523437499998" height="187.2" rx="0" ry="0" fill="#b4c1d7" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="160.09565234374998" y="197.8" width="15.394523437499998" height="115.19999999999999" rx="0" ry="0" fill="#fcc9ba" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="192.88469921874997" y="169" width="15.394523437499998" height="144" rx="0" ry="0" fill="#b8edf0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="211.27922265624997" y="197.8" width="15.394523437499998" height="115.19999999999999" rx="0" ry="0" fill="#b4c1d7" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="229.67374609374997" y="226.60000000000002" width="15.394523437499998" height="86.39999999999998" rx="0" ry="0" fill="#fcc9ba" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="262.46279296874997" y="97" width="15.394523437499998" height="216" rx="0" ry="0" fill="#b8edf0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="280.85731640625" y="125.80000000000001" width="15.394523437499998" height="187.2" rx="0" ry="0" fill="#b4c1d7" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="299.25183984374996" y="197.8" width="15.394523437499998" height="115.19999999999999" rx="0" ry="0" fill="#fcc9ba" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="332.04088671874996" y="169" width="15.394523437499998" height="144" rx="0" ry="0" fill="#b8edf0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="350.43541015625" y="197.8" width="15.394523437499998" height="115.19999999999999" rx="0" ry="0" fill="#b4c1d7" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="368.82993359374996" y="226.60000000000002" width="15.394523437499998" height="86.39999999999998" rx="0" ry="0" fill="#fcc9ba" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="401.61898046874995" y="97" width="15.394523437499998" height="216" rx="0" ry="0" fill="#b8edf0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="420.01350390625" y="125.80000000000001" width="15.394523437499998" height="187.2" rx="0" ry="0" fill="#b4c1d7" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="438.40802734374995" y="197.8" width="15.394523437499998" height="115.19999999999999" rx="0" ry="0" fill="#fcc9ba" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="471.19707421874995" y="97" width="15.394523437499998" height="216" rx="0" ry="0" fill="#b8edf0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="489.59159765625" y="125.80000000000001" width="15.394523437499998" height="187.2" rx="0" ry="0" fill="#b4c1d7" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="507.98612109374994" y="197.8" width="15.394523437499998" height="115.19999999999999" rx="0" ry="0" fill="#fcc9ba" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="540.77516796875" y="25" width="15.394523437499998" height="288" rx="0" ry="0" fill="#b8edf0" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="559.16969140625" y="53.80000000000001" width="15.394523437499998" height="259.2" rx="0" ry="0" fill="#b4c1d7" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect><rect x="577.56421484375" y="197.8" width="15.394523437499998" height="115.19999999999999" rx="0" ry="0" fill="#fcc9ba" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect></svg><div class="morris-hover morris-default-style" style="left: 97.5389px; top: 118px; display: none;"><div class="morris-hover-row-label">2007</div><div class="morris-hover-point" style="color: #b8edf0">
For-sale:
75
</div><div class="morris-hover-point" style="color: #b4c1d7">
For-rent:
65
</div><div class="morris-hover-point" style="color: #fcc9ba">
All:
40
</div></div></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card m-b-15">
                            <div class="card-body">
                                <h5 class="card-title">PROPERTY SALES INCOME</h5>
                                <div class="row">
                                    <div class="col-6 m-t-30">
                                        <h1 class="text-info">$64057</h1>
                                        <p class="text-muted">APRIL 2017</p> <b>(150 Sales)</b> </div>
                                    <div class="col-6">
                                        <div id="sparkline2dash" class="text-end"><canvas width="88" height="154" style="display: inline-block; width: 88px; height: 154px; vertical-align: top;"></canvas></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card bg-purple m-b-15">
                            <div class="card-body">
                                <h5 class="text-white card-title">PROPERTY ON RENT INCOME</h5>
                                <div class="row">
                                    <div class="col-6 m-t-30">
                                        <h1 class="text-white">$30447</h1>
                                        <p class="text-white">APRIL 2017</p> <b class="text-white">(110 Sales)</b> </div>
                                    <div class="col-md-6 col-sm-6 col-6">
                                        <div id="sales1" class="text-end"><canvas width="88" height="154" style="display: inline-block; width: 88px; height: 154px; vertical-align: top;"></canvas></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- ============================================================== -->
        <!-- Comment - table -->
        <!-- ============================================================== -->
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PROPERTY OVERVIEW</h5>
                        <div class="table-responsive">
                            <table class="table product-overview">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Order ID</th>
                                        <th>Photo</th>
                                        <th>Property</th>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Steave Jobs</td>
                                        <td>#85457898</td>
                                        <td> <img src="../assets/images/property/prop1.jpeg" alt="iMac" width="80"> </td>
                                        <td>Swanim villa</td>
                                        <td>Sold</td>
                                        <td>10-7-2017</td>
                                        <td> <span class="label label-success font-weight-100">Paid</span> </td>
                                        <td><a href="javascript:void(0)" class="text-dark p-r-10" data-bs-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-dark" title="Delete" data-bs-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Varun Dhavan</td>
                                        <td>#95457898</td>
                                        <td> <img src="../assets/images/property/prop2.jpeg" alt="iPhone" width="80"> </td>
                                        <td>River view home</td>
                                        <td>On Rent</td>
                                        <td>09-7-2017</td>
                                        <td> <span class="label label-warning font-weight-100">Pending</span> </td>
                                        <td><a href="javascript:void(0)" class="text-dark p-r-10" data-bs-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-dark" title="Delete" data-bs-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Ritesh Desh</td>
                                        <td>#68457898</td>
                                        <td> <img src="../assets/images/property/prop3.jpeg" alt="apple_watch" width="80"> </td>
                                        <td>Gray Chair</td>
                                        <td>12</td>
                                        <td>08-7-2017</td>
                                        <td> <span class="label label-success font-weight-100">Paid</span> </td>
                                        <td><a href="javascript:void(0)" class="text-dark p-r-10" data-bs-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-dark" title="Delete" data-bs-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Hrithik</td>
                                        <td>#45457898</td>
                                        <td> <img src="../assets/images/property/prop3.jpeg" alt="mac_mouse" width="80"> </td>
                                        <td>Pure Wooden chair</td>
                                        <td>18</td>
                                        <td>02-7-2017</td>
                                        <td> <span class="label label-danger font-weight-100">Failed</span> </td>
                                        <td><a href="javascript:void(0)" class="text-dark p-r-10" data-bs-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-dark" title="Delete" data-bs-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- ============================================================== -->
        <!-- End Comment - chats -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Over Visitor, Our income , slaes different and  sales prediction -->
        <!-- ============================================================== -->
        <!-- .row  -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card bg-light">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="text-center">
                                    <a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="../assets/images/users/agent.jpg"></a>
                                    <h4 class="card-title m-t-10">Jon Doe</h4>
                                    <h6 class="text-muted">Agent of Property</h6>
                                    <div class="p-20">
                                        <i class="fa fa-phone text-danger p-r-10" aria-hidden="true"></i> 800-1800-24657
                                        <br> <i class="fa fa-envelope-o text-danger p-r-10 m-t-10" aria-hidden="true"></i> jon@realestate.com
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body bg-white">
                                <h5 class="card-title">REQUEST INQUIRY</h5>
                                <form class="m-t-30">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-Mail">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group text-end">
                                        <button type="submit" class="btn btn-primary btn-rounded">Submit Request</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">RECENT PROPERTIES</h5>
                        <div class="d-flex no-block m-b-20 m-t-30">
                            <div class="p-r-15">
                                <a href="javascript:void(0)"><img src="../assets/images/property/prop1.jpeg" alt="property" width="100"></a>
                            </div>
                            <div>
                                <h5 class="card-title m-b-5"><a href="javascript:void(0)" class="link">4 BHK Avenue Street, Mountain View</a></h5>
                                <span class="text-muted">Oct 07, 2015 | Jon Doe</span>
                            </div>
                        </div>
                        <div class="d-flex no-block m-b-20">
                            <div class="p-r-15">
                                <a href="javascript:void(0)"><img src="../assets/images/property/prop2.jpeg" alt="property" width="100"></a>
                            </div>
                            <div>
                                <h5 class="card-title m-b-5"><a href="javascript:void(0)" class="link">2 BHK Masto Street, Mountain View</a></h5>
                                <span class="text-muted">Oct 07, 2015 | Jon Doe</span>
                            </div>
                        </div>
                        <div class="d-flex no-block m-b-20">
                            <div class="p-r-15">
                                <a href="javascript:void(0)"><img src="../assets/images/property/prop3.jpeg" alt="property" width="100"></a>
                            </div>
                            <div>
                                <h5 class="card-title m-b-5"><a href="javascript:void(0)" class="link">5 BHK Kalash Street, Mountain View</a></h5>
                                <span class="text-muted">Oct 07, 2015 | Jon Doe</span>
                            </div>
                        </div>
                        <div class="d-flex no-block m-b-20">
                            <div class="p-r-15">
                                <a href="javascript:void(0)"><img src="../assets/images/property/prop4.jpeg" alt="property" width="100"></a>
                            </div>
                            <div>
                                <h5 class="card-title m-b-5"><a href="javascript:void(0)" class="link">1 BHK Amidhar Street, Mountain View</a></h5>
                                <span class="text-muted">Oct 07, 2015 | Jon Doe</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row  -->
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <div class="right-sidebar ps ps--theme_default" data-ps-id="a97fd8a1-0a81-b8bc-fd6f-b49e097f39a6">
            <div class="slimscrollright">
                <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                <div class="r-panel-body">
                    <ul id="themecolors" class="m-t-20">
                        <li><b>With Light sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                        <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                        <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                        <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                    </ul>
                    <ul class="m-t-20 chatonline">
                        <li><b>Chat option</b></li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
                
         
@endsection