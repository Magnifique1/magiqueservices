<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Magique Services</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" sizes="32x32">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
</head>

<body>

<!-- loader -->
<div id="loader">
    <img src="{{asset('assets/img/logo-icon.png')}}" alt="icon" class="loading-icon">
</div>
<!-- * loader -->

<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="pageTitle">
        <img src="{{asset('assets/img/logo.png')}}" alt="logo" class="logo">
    </div>
</div>
<!-- * App Header -->

@yield('content')

<!-- App Capsule -->
<div id="appCapsule">

    <!-- Wallet Card -->
    <div class="section wallet-card-section pt-1">
        <div class="wallet-card">
            <!-- Balance -->
            <div class="balance">
                <div class="left">
                    <span class="title">Total Earnings</span>
                    <h1 class="total">KES 2,562.50</h1>
                </div>
            </div>
            <!-- * Balance -->
            <!-- Wallet Footer -->
            <div class="wallet-footer">
                <div class="item">
                    <a href="#" data-toggle="modal" data-target="#withdrawActionSheet">
                        <div class="icon-wrapper bg-danger">
                            <ion-icon name="arrow-down-outline"></ion-icon>
                        </div>
                        <strong>Withdraw</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-toggle="modal" data-target="#sendActionSheet">
                        <div class="icon-wrapper">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <strong>Send</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="app-cards.html">
                        <div class="icon-wrapper bg-success">
                            <ion-icon name="card-outline"></ion-icon>
                        </div>
                        <strong>Cards</strong>
                    </a>
                </div>
                <div class="item">
                    <a href="#" data-toggle="modal" data-target="#exchangeActionSheet">
                        <div class="icon-wrapper bg-warning">
                            <ion-icon name="swap-vertical"></ion-icon>
                        </div>
                        <strong>Exchange</strong>
                    </a>
                </div>

            </div>
            <!-- * Wallet Footer -->
        </div>
    </div>
    <!-- Wallet Card -->

    <!-- Deposit Action Sheet -->
    <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Balance</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account1">From</label>
                                    <select class="form-control custom-select" id="account1">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="input2">$</span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" value="100">
                                </div>
                            </div>


                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                        data-dismiss="modal">Deposit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Deposit Action Sheet -->

    <!-- Withdraw Action Sheet -->
    <div class="modal fade action-sheet" id="withdrawActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Withdraw</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account2d">From</label>
                                    <select class="form-control custom-select" id="account2d">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="text11d">To</label>
                                    <input type="email" class="form-control" id="text11d" placeholder="Enter IBAN">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="input14d">$</span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="0">
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                        data-dismiss="modal">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Withdraw Action Sheet -->

    <!-- Send Action Sheet -->
    <div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send Money</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account2">From</label>
                                    <select class="form-control custom-select" id="account2">
                                        <option value="0">Savings (*** 5019)</option>
                                        <option value="1">Investment (*** 6212)</option>
                                        <option value="2">Mortgage (*** 5021)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="text11">To</label>
                                    <input type="email" class="form-control" id="text11"
                                           placeholder="Enter bank ID">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="input14">$</span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="0">
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                        data-dismiss="modal">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Send Action Sheet -->

    <!-- Exchange Action Sheet -->
    <div class="modal fade action-sheet" id="exchangeActionSheet" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Exchange</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">
                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="currency1">From</label>
                                            <select class="form-control custom-select" id="currency1">
                                                <option value="1">EUR</option>
                                                <option value="2">USD</option>
                                                <option value="3">AUD</option>
                                                <option value="4">CAD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <label class="label" for="currency2">To</label>
                                            <select class="form-control custom-select" id="currency2">
                                                <option value="1">USD</option>
                                                <option value="1">EUR</option>
                                                <option value="2">AUD</option>
                                                <option value="3">CAD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <label class="label">Enter Amount</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="input1">$</span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" value="100">
                                </div>
                            </div>



                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                        data-dismiss="modal">Deposit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Exchange Action Sheet -->

    <!-- Stats -->
    <div class="section">
        <div class="row mt-2">
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Earnings Today</div>
                    <div class="value text-success">KES 552.95</div>
                </div>
            </div>
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Earnings This Week</div>
                    <div class="value text-success">KES 86.45</div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Earnings This Month</div>
                    <div class="value text-success">KES 53.25</div>
                </div>
            </div>
            <div class="col-6">
                <div class="stat-box">
                    <div class="title">Available Withdrawal</div>
                    <div class="value text-success">KES 120.99</div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Stats -->

    <!-- Transactions -->
    <div class="section mt-4">
        <div class="section-heading">
            <h2 class="title">Transactions</h2>
            <a href="app-transactions.html" class="link">View All</a>
        </div>
        <div class="transactions">
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Amazon</strong>
                        <p>Shopping</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger"> - $ 150</div>
                </div>
            </a>
            <!-- * item -->
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/brand/2.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Apple</strong>
                        <p>Appstore Purchase</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger">- $ 29</div>
                </div>
            </a>
            <!-- * item -->
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/avatar/avatar3.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Alex Ljung</strong>
                        <p>Transfer</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price">+ $ 1,000</div>
                </div>
            </a>
            <!-- * item -->
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/avatar/avatar4.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Beatriz Brito</strong>
                        <p>Transfer</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger">- $ 186</div>
                </div>
            </a>
            <!-- * item -->
        </div>
    </div>
    <!-- * Transactions -->
    <br>
    <br>
</div>
<!-- * App Capsule -->


<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="#" class="item active">
        <div class="col">
            <ion-icon name="home"></ion-icon>
            <strong>Home</strong>
        </div>
    </a>
    <a href="#" class="item">
        <div class="col">
            <ion-icon name="refresh-circle"></ion-icon>
            <strong>History</strong>
        </div>
    </a>
    <a href="#" class="item">
        <div class="col">
            <ion-icon name="mail-unread"></ion-icon>
            <strong>Service Requests</strong>
        </div>
    </a>
    <a href="#" class="item">
        <div class="col">
            <ion-icon name="star-half"></ion-icon>
            <strong>My Reviews</strong>
        </div>
    </a>
    <a href="#" class="item">
        <div class="col">
            <ion-icon name="person"></ion-icon>
            <strong>Profile</strong>
        </div>
    </a>
</div>
<!-- * App Bottom Menu -->


<!-- ///////////// Js Files ////////////////////  -->
<!-- Jquery -->
<script src="{{asset('assets/js/lib/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap-->
<script src="{{asset('assets/js/lib/popper.min.js')}}"></script>
<script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>
<!-- Ionicons -->
<script src="{{asset('https://unpkg.com/ionicons@5.0.0/dist/ionicons.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{asset('assets/js/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
<!-- Base Js File -->
<script src="{{asset('assets/js/base.js')}}"></script>

</body>

</html>
