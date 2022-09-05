@extends('layouts.index')

@section('page')
    <div class="path">
        <div class="container">
            <a href="{{ url("/") }}">Home</a>
            /
            <a href="{{ url()->current() }}">My Profile</a>
        </div>
    </div>
    <section class="myorders">
        <div class="headbanner">
            <div class="userimage">
                <img src="{{ asset('assets/user/images/img-5.jpg') }}" alt="" />
            </div>
            <h4>Jhon Doe</h4>
            <p>
                +91 1245789630
                <a href="#"><i class="uil uil-edit"></i></a>
            </p>
            <div class="earn-points">
                <img src="{{ asset('assets/user/images/Dollar.svg') }}" alt="" />Ballance :
                <span>&#8377;20</span>
            </div>
        </div>
        <section class="myac-body">
            <div class="flex row">
                <div class="left">
                    <div class="ul-wrapper">
                        <ul>
                            <li class="active">
                                <i class="uil uil-box"></i>
                                <a href="myorders.html">My Orders</a>
                            </li>
                            <li>
                                <i class="uil uil-wallet"></i>
                                <a href="mywallet.html">My Wallet</a>
                            </li>
                            <li>
                                <i class="uil uil-heart"></i>
                                <a href="wishlist.html">My Wishlist</a>
                            </li>
                            <li>
                                <i class="uil uil-location-point"></i>
                                <a href="address.html">My Address</a>
                            </li>
                            <li>
                                <i class="uil uil-sign-out-alt"></i>
                                <a href="">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <h4><i class="uil uil-box"></i>My Orders</h4>
                    <div class="col-lg-12 col-md-12">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="pdpt-bg">
                                <div class="pdpt-title flex justify-between">
                                    <h6>Order Id: OD7548DF878</h6>
                                    <h6>Delivery Timing 10 May, 3.00PM - 6.00PM</h6>
                                </div>
                                <div class="order-body10">
                                    <ul class="order-dtsll">
                                        <li>
                                            <div class="order-dt-img">
                                                <img src="{{ asset('assets/user/images/product/big-1.jpg') }}"
                                                    alt="" />
                                            </div>
                                        </li>
                                        <li>
                                            <div class="order-dt47">
                                                <h4>Gambo - Ludhiana</h4>
                                                <p>Delivered - Gambo</p>
                                                <div class="order-title">2 Items</div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="total-dt">
                                        <div class="total-checkout-group">
                                            <div class="cart-total-dil">
                                                <h4>Sub Total</h4>
                                                <span>$25</span>
                                            </div>
                                            <div class="cart-total-dil pt-3">
                                                <h4>Delivery Charges</h4>
                                                <span>Free</span>
                                            </div>
                                        </div>
                                        <div class="main-total-cart">
                                            <h2>Total</h2>
                                            <span>$25</span>
                                        </div>
                                    </div>
                                    <div class="track-order">
                                        <h4>Track Order</h4>
                                        <div class="bs-wizard" style="border-bottom: 0">
                                            <div class="bs-wizard-step complete">
                                                <div class="text-center bs-wizard-stepnum">Placed</div>
                                                <div class="progress">
                                                    <div class="progress-bar">&nbsp;</div>
                                                </div>
                                                <a href="#" class="bs-wizard-dot"></a>
                                            </div>
                                            <div class="bs-wizard-step complete">
                                                <div class="text-center bs-wizard-stepnum">Packed</div>
                                                <div class="progress">
                                                    <div class="progress-bar">&nbsp;&nbsp;</div>
                                                </div>
                                                <a href="#" class="bs-wizard-dot"></a>
                                            </div>
                                            <div class="bs-wizard-step active">
                                                <div class="text-center bs-wizard-stepnum">
                                                    On the way
                                                </div>
                                                <div class="progress">
                                                    <div class="fade-bar">&nbsp;</div>
                                                </div>
                                                <a href="#" class="bs-wizard-dot"></a>
                                            </div>
                                            <div class="bs-wizard-step disabled">
                                                <div class="text-center bs-wizard-stepnum">
                                                    Delivered
                                                </div>
                                                <div class="progress" style="width: 0%">
                                                    <div class="progress-bar"></div>
                                                </div>
                                                <a href="#" class="bs-wizard-dot fade"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection