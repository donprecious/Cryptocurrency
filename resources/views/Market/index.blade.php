<!DOCTYPE html>
<html lang="zxx" class="js">


<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fully featured and complete ICO Dashboard template for ICO backend management.">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{ asset('tokenWiz/images/favicon.png')}}">
    <!-- Site Title  -->
    <title>TokenWiz - ICO User Dashboard Admin Template</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="{{ asset('tokenWiz/assets/css/vendor.bundlea5f5.css?ver=102')}}">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('tokenWiz/assets/css/style.css')}}" id="layoutstyle">
    <!-- <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-91615293-2', 'auto');
        ga('send', 'pageview');

    </script> -->
</head>

<body class="page-user">
    <div class="topbar-wrap">
        <div class="topbar is-sticky">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="topbar-nav d-lg-none">
                        <li class="topbar-nav-item relative">
                            <a class="toggle-nav" href="#">
                                <div class="toggle-icon">
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                </div>
                            </a>
                        </li>
                        <!-- .topbar-nav-item -->
                    </ul>
                    <!-- .topbar-nav -->
                    <a class="topbar-logo" href="index.html">
                        <img src="{{ asset('tokenWiz/images/logo-light2x.png')}}" srcset="{{ asset('tokenWiz/images/logo-light2x.png 2x')}}" alt="logo">
                    </a>
                    <ul class="topbar-nav">
                        <li class="topbar-nav-item relative">
                            <span class="user-welcome d-none d-lg-inline-block">Welcome! Stefan Harary</span>
                            <a class="toggle-tigger user-thumb" href="#">
                                <em class="ti ti-user"></em>
                            </a>
                            <div class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown">
                                <div class="user-status">
                                    <h6 class="user-status-title">Token balance</h6>
                                    <div class="user-status-balance">12,000,000
                                        <small>TWZ</small>
                                    </div>
                                </div>
                                <ul class="user-links">
                                    <li>
                                        <a href="{{ asset('tokenWiz/profile.html')}}">
                                            <i class="ti ti-id-badge"></i>My Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti ti-infinite"></i>Referral</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti ti-eye"></i>Activity</a>
                                    </li>
                                </ul>
                                <ul class="user-links bg-light">
                                    <li>
                                        <a href="sign-in.html">
                                            <i class="ti ti-power-off"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- .topbar-nav-item -->
                    </ul>
                    <!-- .topbar-nav -->
                </div>
            </div>
            <!-- .container -->
        </div>
        <!-- .topbar -->
        <div class="navbar">
            <div class="container">
                <div class="navbar-innr">
                    <ul class="navbar-menu">
                        <li>
                            <a href="{{ asset('tokenWiz/index-2.html')}}">
                                <em class="ikon ikon-dashboard"></em> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ asset('tokenWiz/buy-token.html')}}">
                                <em class="ikon ikon-coins"></em> Buy Tokens</a>
                        </li>
                        <li>
                            <a href="{{ asset('tokenWiz/ico-distribution.html')}}">
                                <em class="ikon ikon-distribution"></em> ICO Distribution</a>
                        </li>
                        <li>
                            <a href="{{ asset('tokenWiz/transactions.html')}}">
                                <em class="ikon ikon-transactions"></em> Transactions</a>
                        </li>
                        <li>
                            <a href="{{ asset('tokenWiz/profile.html')}}">
                                <em class="ikon ikon-user"></em> Profile</a>
                        </li>
                        <li class="has-dropdown page-links-all">
                            <a class="drop-toggle" href="#">
                                <em class="ikon ikon-exchange"></em> Pages</a>
                            <ul class="navbar-dropdown">
                                <li class="has-dropdown">
                                    <a class="drop-toggle" href="#">UI Elements</a>
                                    <ul class="navbar-dropdown">
                                        <li>
                                            <a href="{{ asset('tokenWiz/form-elements.html')}}">Form Elements</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('tokenWiz/form-layout.html')}}">Form Layout</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('tokenWiz/buttons.html')}}">Button</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('tokenWiz/badges.html')}}">Badge</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('tokenWiz/tabs.html')}}">Tabs</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('tokenWiz/accordions.html')}}">Accordions</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('tokenWiz/modals.html')}}">Modals</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('tokenWiz/alerts.html')}}">Alerts</a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('tokenWiz/alert-toastr.html')}}">Toastr Alerts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="drop-toggle" href="#">Misc Pages</a>
                                    <ul class="navbar-dropdown">
                                        <li>
                                            <a href="404-error.html">404 Error</a>
                                        </li>
                                        <li>
                                            <a href="sign-in.html">Sign In / Login</a>
                                        </li>
                                        <li>
                                            <a href="sign-up.html">Sign Up / Registration</a>
                                        </li>
                                        <li>
                                            <a href="signup-success.html">Signup Success</a>
                                        </li>
                                        <li>
                                            <a href="email-verified.html">Email Verified</a>
                                        </li>
                                        <li>
                                            <a href="forgot.html">Forgot Password</a>
                                        </li>
                                        <li>
                                            <a href="faq-page.html">Faq Page</a>
                                        </li>
                                        <li>
                                            <a href="regular-page.html">Regular Page - v1</a>
                                        </li>
                                        <li>
                                            <a href="regular-page-v2.html">Regular Page - v2</a>
                                        </li>
                                        <li>
                                            <a href="_blank.html">Blank Page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="drop-toggle" href="#">KYC / AML</a>
                                    <ul class="navbar-dropdown">
                                        <li>
                                            <a href="kyc-application.html">KYC Default</a>
                                        </li>
                                        <li>
                                            <a href="kyc-form.html">KYC Form</a>
                                        </li>
                                        <li>
                                            <a href="kyc-thank-you.html">KYC Thank You</a>
                                        </li>
                                        <li>
                                            <a href="kyc-list.html">KYC Lists - Admin</a>
                                        </li>
                                        <li>
                                            <a href="kyc-details.html">KYC Details - Admin</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="drop-toggle" href="#">User Pages</a>
                                    <ul class="navbar-dropdown">
                                        <li>
                                            <a href="profile.html">Profile Page</a>
                                        </li>
                                        <li>
                                            <a href="user-list.html">User List - Admin</a>
                                        </li>
                                        <li>
                                            <a href="user-details.html">User Details - Admin</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="drop-toggle" href="#">Transactions</a>
                                    <ul class="navbar-dropdown">
                                        <li>
                                            <a href="transactions.html">Transactions - User</a>
                                        </li>
                                        <li>
                                            <a href="admin-transactions.html">Transactions - Admin</a>
                                        </li>
                                        <li>
                                            <a href="transaction-details.html">Transaction Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a class="drop-toggle" href="#">Token Purchase</a>
                                    <ul class="navbar-dropdown">
                                        <li>
                                            <a href="buy-token.html">Buy Token - Modern</a>
                                        </li>
                                        <li>
                                            <a href="buy-token-s2.html">Buy Token - Simple</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="email-templates.html">Email Templates
                                        <span class="badge badge-success">Free</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-btns">
                        <li>
                            <a href="kyc-application.html" class="btn btn-sm btn-outline btn-light">
                                <em class="text-primary ti ti-files"></em>
                                <span>KYC Application</span>
                            </a>
                        </li>
                        <li class="d-none">
                            <span class="badge badge-outline badge-success badge-lg">
                                <em class="text-success ti ti-files mgr-1x"></em>
                                <span class="text-success">KYC Approved</span>
                            </span>
                        </li>
                    </ul>
                </div>
                <!-- .navbar-innr -->
            </div>
            <!-- .container -->
        </div>
        <!-- .navbar -->
    </div>
    <!-- .topbar-wrap -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="token-statistics card card-token height-auto">
                        <div class="card-innr">
                            <div class="token-balance token-balance-with-icon">
                                <div class="token-balance-icon">
                                    <img src="images/logo-light-sm.png" alt="logo">
                                </div>
                                <div class="token-balance-text">
                                    <h6 class="card-sub-title">Tokens Balance</h6>
                                    <span class="lead">120,000,000
                                        <span>TWZ</span>
                                    </span>
                                </div>
                            </div>
                            <div class="token-balance token-balance-s2">
                                <h6 class="card-sub-title">Your Contribution</h6>
                                <ul class="token-balance-list">
                                    <li class="token-balance-sub">
                                        <span class="lead">2.646</span>
                                        <span class="sub">ETH</span>
                                    </li>
                                    <li class="token-balance-sub">
                                        <span class="lead">1.265</span>
                                        <span class="sub">BTC</span>
                                    </li>
                                    <li class="token-balance-sub">
                                        <span class="lead">6.506</span>
                                        <span class="sub">LTC</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .col -->
                <div class="col-lg-8">
                    <div class="token-information card card-full-height">
                        <div class="row no-gutters height-100">
                            <div class="col-md-6 text-center">
                                <div class="token-info">
                                    <img class="token-info-icon" src="{{ asset('tokenWiz/images/logo-sm.png')}}" alt="logo-sm">
                                    <div class="gaps-2x"></div>
                                    <h1 class="token-info-head text-light">1 ETH = 1000 TWZ</h1>
                                    <h5 class="token-info-sub">1 ETH = 254.05 USD</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="token-info bdr-tl">
                                    <div>
                                        <ul class="token-info-list">
                                            <li>
                                                <span>Token Name:</span>TokenWiz</li>
                                            <li>
                                                <span>Ticket Symbol:</span>TWZ</li>
                                        </ul>
                                        <a href="#" class="btn btn-primary">
                                            <em class="fas fa-download mr-3"></em>Download Whitepaper</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .card -->
                </div>
                <!-- .col -->
                <div class="col-xl-8 col-lg-7">
                    <div class="token-transaction card card-full-height">
                        <div class="card-innr">
                            <div class="card-head has-aside">
                                <h4 class="card-title">Market Data</h4>
                                <div class="card-opt">
                                    <a href="transactions.html" class="link ucap">View ALL
                                        <em class="fas fa-angle-right ml-2"></em>
                                    </a>
                                   <div>

                                   </div>

                                </div>
                            </div>
                            <table class="table tnx-table">
                                <thead>
                                    <tr>
                                        <th>Cryptocurrency</th>
                                        <th>Price/Usd</th>
                                        <th class="d-none d-sm-table-cell tnx-date">Date</th>
                                        <th class="tnx-type">
                                            <div class="tnx-type-text"></div>
                                        </th>
                                    </tr>
                                    <!-- tr -->
                                </thead>
                                <!-- thead -->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="data-state data-state-pending"></div>
                                                <span class="lead">Bit Coin</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span>
                                                <span class="lead">$3,605</span>

                                        </td>
                                        <td class="d-none d-sm-table-cell tnx-date">
                                            <span class="sub sub-s2">2018-08-24 10:20 PM</span>
                                        </td>
                                        <td class="tnx-type">
                                            <span class="tnx-type-md badge badge-outline badge-success badge-md">Order</span>

                                        </td>
                                    </tr>
                                    <!-- tr -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="data-state data-state-progress"></div>
                                                <span class="lead">8,052</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span>
                                                <span class="lead">0.165</span>
                                                <span class="sub">BTC
                                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom"
                                                        data-original-title="1 BTC = 5450.54 USD"></em>
                                                </span>
                                            </span>
                                        </td>
                                        <td class="d-none d-sm-table-cell tnx-date">
                                            <span class="sub sub-s2">2018-08-24 10:20 PM</span>
                                        </td>
                                        <td class="tnx-type">
                                            <span class="tnx-type-md badge badge-outline badge-warning badge-md">Bonus</span>
                                            <span class="tnx-type-sm badge badge-sq badge-outline badge-warning badge-md">B</span>
                                        </td>
                                    </tr>
                                    <!-- tr -->
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="data-state data-state-approved"></div>
                                                <span class="lead">19,000</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span>
                                                <span class="lead">3.141</span>
                                                <span class="sub">LTC
                                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom"
                                                        data-original-title="1 LTC = 180.54 USD"></em>
                                                </span>
                                            </span>
                                        </td>
                                        <td class="d-none d-sm-table-cell tnx-date">
                                            <span class="sub sub-s2">2018-08-24 10:20 PM</span>
                                        </td>
                                        <td class="tnx-type">
                                            <span class="tnx-type-md badge badge-outline badge-warning badge-md">Bonus</span>
                                            <span class="tnx-type-sm badge badge-sq badge-outline badge-warning badge-md">B</span>
                                        </td>
                                    </tr>
                                    <!-- tr -->
                                </tbody>
                                <!-- tbody -->
                            </table>
                            <!-- .table -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="token-calculator card card-full-height">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Token Calculation</h4>
                                <p class="card-title-text">Enter amount to calculate token.</p>
                            </div>
                            <div class="token-calc">
                                <div class="token-pay-amount">
                                    <input id="token-base-amount" class="input-bordered input-with-hint" type="text" value="1">
                                    <div class="token-pay-currency">
                                        <a href="#" class="link ucap link-light toggle-tigger toggle-caret">ETH</a>
                                        <div class="toggle-class dropdown-content">
                                            <ul class="dropdown-list">
                                                <li>
                                                    <a href="#">BTC</a>
                                                </li>
                                                <li>
                                                    <a href="#">LTC</a>
                                                </li>
                                                <li>
                                                    <a href="#">USD</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="token-received">
                                    <div class="token-eq-sign">=</div>
                                    <div class="token-received-amount">
                                        <h5 class="token-amount">123,500.84</h5>
                                        <div class="token-symbol">TWZ</div>
                                    </div>
                                </div>
                            </div>
                            <div class="token-calc-note note note-plane">
                                <em class="fas fa-info-circle text-light"></em>
                                <span class="note-text text-light">Amount calculated based current tokens price</span>
                            </div>
                            <div class="token-buy">
                                <a href="#" class="btn btn-primary">Buy Tokens</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="token-sale-graph card card-full-height">
                        <div class="card-innr">
                            <div class="card-head has-aside">
                                <h4 class="card-title">Tokens Sale Graph</h4>
                                <div class="card-opt">
                                    <a href="#" class="link ucap link-light toggle-tigger toggle-caret">7 Days</a>
                                    <div class="toggle-class dropdown-content">
                                        <ul class="dropdown-list">
                                            <li>
                                                <a href="#">30 days</a>
                                            </li>
                                            <li>
                                                <a href="#">1 years</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="chart-tokensale">
                                <canvas id="tknSale"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- .card -->
                </div>
                <!-- .col -->
                <div class="col-xl-4 col-lg-5">
                    <div class="token-sales card card-full-height">
                        <div class="card-innr">
                            <div class="card-head">
                                <h4 class="card-title">Token Sales Progress</h4>
                            </div>
                            <ul class="progress-info">
                                <li>
                                    <span>Raised</span> 2,758 TWZ</li>
                                <li class="text-right">
                                    <span>TOTAL</span> 1,500,000 TWZ</li>
                            </ul>
                            <div class="progress-bar">
                                <div class="progress-hcap" data-percent="83" style="width: 83%;">
                                    <div>Hard cap
                                        <span>1,400,000</span>
                                    </div>
                                </div>
                                <div class="progress-scap" data-percent="24" style="width: 24%;">
                                    <div>Soft cap
                                        <span>40,000</span>
                                    </div>
                                </div>
                                <div class="progress-percent" data-percent="28" style="width: 28%;"></div>
                            </div>
                            <span class="card-sub-title mgb-0-5x">Sales END IN</span>
                            <div class="countdown-clock" data-date="2019/02/05">
                                <div>
                                    <span class="countdown-time countdown-time-first">78</span>
                                    <span class="countdown-text">Day</span>
                                </div>
                                <div>
                                    <span class="countdown-time">08</span>
                                    <span class="countdown-text">Hour</span>
                                </div>
                                <div>
                                    <span class="countdown-time">30</span>
                                    <span class="countdown-text">Min</span>
                                </div>
                                <div>
                                    <span class="countdown-time countdown-time-last">38</span>
                                    <span class="countdown-text">Sec</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .page-content -->
    <div class="footer-bar">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8">
                    <ul class="footer-links">
                        <li>
                            <a href="#">Whitepaper</a>
                        </li>
                        <li>
                            <a href="faq-page.html">FAQs</a>
                        </li>
                        <li>
                            <a href="regular-page.html">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="regular-page.html">Terms of Condition</a>
                        </li>
                    </ul>
                </div>
                <!-- .col -->
                <div class="col-md-4 mt-2 mt-sm-0">
                    <div class="d-flex justify-content-between justify-content-md-end align-items-center guttar-25px pdt-0-5x pdb-0-5x">
                        <div class="copyright-text">&copy; 2018 TokenWiz.</div>
                        <div class="lang-switch relative">
                            <a href="#" class="lang-switch-btn toggle-tigger">En
                                <em class="ti ti-angle-up"></em>
                            </a>
                            <div class="toggle-class dropdown-content dropdown-content-up">
                                <ul class="lang-list">
                                    <li>
                                        <a href="#">Fr</a>
                                    </li>
                                    <li>
                                        <a href="#">Bn</a>
                                    </li>
                                    <li>
                                        <a href="#">Lt</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .col -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .footer-bar -->
    <!-- JavaScript (include all script here) -->
    <script src="{{ asset('tokenWiz/assets/js/jquery.bundlea5f5.js?ver=102')}}"></script>
    <script src="{{ asset('/tokenWiz/assets/js/scripta5f5.js?ver=102')}}"></script>
</body>

</html>
