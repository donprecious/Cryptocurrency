@extends('layouts.userLayout')

@section('content')
<div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="token-statistics card card-token height-auto">
                        <div class="card-innr">
                            <div class="token-balance token-balance-with-icon">
                                <div class="token-balance-icon">
                                <img src="{{asset('tokenWiz/images/logo-light-sm.png')}}" alt="logo">
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

@endsection

@section('scripts')
 @parent
  <script ></script>
@endsection
