@extends('admin.layouts')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-xl-4 col-sm-7 box-col-3">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="col-5 d-none d-xl-block">
                        
                    </div>
                    <div class="col-xl-3 col-sm-5 box-col-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('admin-assets/svg/icon-sprite.svg') }}#stroke-home"></use>
                                    </svg></a></li>
                            <li class="breadcrumb-item">Dashboard </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid ecommerce-dashboard">
            <div class="row">
                
                <div class="col-xl-12 proorder-xl-2">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="header-top">
                                <h4>Summary</h4>
                            </div>
                        </div>
                        <div class="card-body pt-0 summary-card"><span class="f-w-700 f-14">Jan 1,2024 - Jun
                                30,2022</span>
                            <div class="summary-progressbar">
                                <ul>
                                    <li>
                                        <div>
                                            <h4>$654.85K</h4><span>Summary</span>
                                        </div>
                                        <div class="progress-showcase">
                                            <div class="progress sm-progress-bar progress-border-primary">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 30%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <h4>$34.5K</h4><span>Orders </span>
                                        </div>
                                        <div>
                                            <div class="progress sm-progress-bar progress-border-secondary">
                                                <div class="progress-bar bg-secondary" role="progressbar"
                                                    style="width: 45%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"> </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <h4>$3.86K</h4><span>Avg. Order Value </span>
                                        </div>
                                        <div>
                                            <div class="progress-showcase">
                                                <div class="progress sm-progress-bar progress-border-secondary">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <h4>$3.86K</h4><span>Avg. Order Value </span>
                                        </div>
                                        <div>
                                            <div class="progress sm-progress-bar progress-border-secondary">
                                                <div class="progress-bar bg-secondary" role="progressbar"
                                                    style="width: 65%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"> </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 proorder-xl-3 box-col-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="header-top">
                                <h4>Recent Orders </h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive custom-scrollbar">
                                <table class="last-orders-table table" id="last-orders">
                                    <thead>
                                        <tr>
                                            <th class="checkbox-checked">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="flexCheckDefault" type="checkbox"
                                                        value="">
                                                </div>
                                            </th>
                                            <th>Product Name</th>
                                            <th>Date & Time </th>
                                            <th>Customer</th>
                                            <th>Price </th>
                                            <th>Status</th>
                                            <th>Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="checkbox-checked">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="flexCheckDefaults"
                                                        type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-data">
                                                    <div><img src="{{ asset('admin-assets/images/product/16.png') }}" alt="product"></div>
                                                    <div><a href="product.html">
                                                            <h4>Camera Lens</h4>
                                                        </a><span class="f-w-600"> Canon Camera</span></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-time"><a href="product.html">
                                                        <h4>14 Mar 2024</h4>
                                                    </a><span class="f-w-600"> 10:00 AM</span></div>
                                            </td>
                                            <td>Brooklyn Simmons</td>
                                            <td>$ 247.92</td>
                                            <td class="txt-success">Succeed</td>
                                            <td>
                                                <div class="dropdown icon-dropdown">
                                                    <button class="btn dropdown-toggle" id="userdropdownes5"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <div class="drop-menu"><i class="icon-more-alt"></i></div>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="userdropdownes5"><a class="dropdown-item"
                                                            href="#">Weekly</a><a class="dropdown-item"
                                                            href="#">Monthly</a><a class="dropdown-item"
                                                            href="#">Yearly</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-checked">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="flexCheckDefault1"
                                                        type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-data">
                                                    <div><img src="{{ asset('admin-assets/images/product/17.png') }}" alt="product"></div>
                                                    <div><a href="product.html">
                                                            <h4>Black Dress</h4>
                                                        </a><span class="f-w-600">Shasmi</span></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-time"><a href="product.html">
                                                        <h4>12 Mar 2024</h4>
                                                    </a><span class="f-w-600"> 05:00 AM</span></div>
                                            </td>
                                            <td>Savannah Nguyen</td>
                                            <td>$ 695.20</td>
                                            <td class="txt-warning">Waiting</td>
                                            <td>
                                                <div class="dropdown icon-dropdown">
                                                    <button class="btn dropdown-toggle" id="userdropdownes6"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <div class="drop-menu"><i class="icon-more-alt"></i></div>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="userdropdownes6"><a class="dropdown-item"
                                                            href="#">Weekly</a><a class="dropdown-item"
                                                            href="#">Monthly</a><a class="dropdown-item"
                                                            href="#">Yearly</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-checked">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="flexCheckDefault2"
                                                        type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-data">
                                                    <div><img src="{{ asset('admin-assets/images/product/19.png') }}" alt="product"></div>
                                                    <div><a href="product.html">
                                                            <h4>Argan Oil</h4>
                                                        </a><span class="f-w-600">Moroccan</span></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-time"><a href="product.html">
                                                        <h4>10 Mar 2024</h4>
                                                    </a><span class="f-w-600"> 12:30 AM</span></div>
                                            </td>
                                            <td>Ronald Richards</td>
                                            <td>$ 189.30</td>
                                            <td class="txt-success">Succeed</td>
                                            <td>
                                                <div class="dropdown icon-dropdown">
                                                    <button class="btn dropdown-toggle" id="userdropdownes7"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <div class="drop-menu"><i class="icon-more-alt"></i></div>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="userdropdownes7"><a class="dropdown-item"
                                                            href="#">Weekly</a><a class="dropdown-item"
                                                            href="#">Monthly</a><a class="dropdown-item"
                                                            href="#">Yearly</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-checked">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="flexCheckDefault3"
                                                        type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-data">
                                                    <div><img src="{{ asset('admin-assets/images/product/18.png') }}" alt="product"></div>
                                                    <div><a href="product.html">
                                                            <h4>Parfum</h4>
                                                        </a><span class="f-w-600">Bella Vita </span></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="user-time"><a href="product.html">
                                                        <h4>01 Mar 2024</h4>
                                                    </a><span class="f-w-600"> 09:20 AM</span></div>
                                            </td>
                                            <td>Marvin McKinney</td>
                                            <td>$ 249.21 </td>
                                            <td class="txt-danger">Canceled </td>
                                            <td>
                                                <div class="dropdown icon-dropdown">
                                                    <button class="btn dropdown-toggle" id="userdropdownes8"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <div class="drop-menu"> <i class="icon-more-alt"></i></div>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="userdropdownes8"><a class="dropdown-item"
                                                            href="#">Weekly</a><a class="dropdown-item"
                                                            href="#">Monthly</a><a class="dropdown-item"
                                                            href="#">Yearly</a></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Container-fluid Ends -->
    </div>
@endsection
