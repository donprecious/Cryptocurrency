<?php $__env->startSection('content'); ?>
<div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="token-statistics card card-token height-auto">
                        <div class="card-innr">
                            <div class="token-balance token-balance-with-icon">
                                <div class="token-balance-icon">
                                <img src="<?php echo e(asset('tokenWiz/images/logo-light-sm.png')); ?>" alt="logo">
                                </div>
                                <div class="token-balance-text">
                                    <h6 class="card-sub-title">Bitcoin Balance</h6>
                                    <span class="lead">0.983
                                        <span>BTC</span>
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
                                    <img class="token-info-icon" src="<?php echo e(asset('tokenWiz/images/logo-sm.png')); ?>" alt="logo-sm">
                                    <div class="gaps-2x"></div>
                                    <h1 class="token-info-head text-light">1 ETH = 1000 TWZ</h1>
                                    <h5 class="token-info-sub">1 ETH = 254.05 USD</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="token-info bdr-tl">
                                    <div>
                                            <h5 class="token-info-head text-light text-center">Account Balance</h5>
                                            <h1 class="token-info-sub text-center">100 USD</h1>
                                        <button id="openFundBtn" class="btn btn-primary">
                                            <em class="fas fa-money mr-3"></em>Add Fund
                                        </button>
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
                                <h4 class="card-title">Current Market Data</h4>
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

                                        <th class="tnx-type">
                                            <div class="tnx-type-text"></div>
                                        </th>
                                    </tr>
                                    <!-- tr -->
                                </thead>
                                <!-- thead -->
                                <tbody>
                                      <!--
                                      


                                  <!--

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
                                -->
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
                                <h4 class="card-title">Buy Token</h4>
                                <p class="card-title-text">Enter amount to calculate token.</p>
                            </div>
                            <div class="input-item input-with-label">
                                    <label class="input-item-label">Select Token</label>
                                    <!--
                                        
                                    -->
                                    <select class="select select-block select-bordered" id="selectCurrency">
                                        <option value="option-one" data-price="3245.43958" data-symbol="BTC">BTC - BIT-COIN</option>
                                        <option value="option-one" data-price="49038.43958" data-symbol="LTC">Ltc - litecoin</option>
                                        <option value="option-one" data-price="135.43958" data-symbol="BTC">ETH - ethrum</option>
                                    </select>
                            </div>
                            <div class="row">
                                    <div class="col-12 col-sm-12">
                                            <div class="input-item input-with-label">
                                                <label class="input-item-label ucap text-exlight">Enter Amount in USD</label>
                                                <input class="input-bordered" name='txtAmount' id="txtAmount" type="text" placeholder="100">
                                                <span class="input-note">Enter the amount to calculate the token for the cryptocurrency</span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12">
                                                <div class="input-item input-with-label">
                                                    <label class="input-item-label ucap text-exlight">Input token of cryptocurrency </label>
                                                    <input class="input-bordered" name='txtQuanity' id="txtQuanity"  type="text">
                                                    <span class="input-note">Enter the quantity of cryptocurrency</span>
                                                </div>
                                       </div>
                            </div>
                            <div class="token-calc-note note note-plane">
                                <em class="fas fa-info-circle text-light"></em>
                                <span class="note-text text-light">Amount calculated based current tokens price</span>
                            </div>
                            <div class="token-buy">
                                <button type="button" id="btnBuyToken"  class="btn btn-primary btn-block">Buy Tokens <img id="img_buy" width="15" height="15" class="img-fluid hide-loader" src="<?php echo e(asset('img/ajax/loading4.gif')); ?>"></button>
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
    <div class="modal fade" id="fundAccountModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-md modal-dialog-centered">
                <div class="modal-content">
                    <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                        <em class="ti ti-close"></em>
                    </a>
                    <div class="popup-body">
                    <form action="<?php echo e(action('UserController@FundAccount')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <h3 class="popup-title text-center">Fund Account</h3>

                        <div class="input-item input-with-label">
                            <label class="input-item-label ucap text-exlight">Enter Amount To Fund in Usd</label>
                            <div class="relative">
                                <span class="input-icon input-icon-right">
                                    <em class="ti ti-money"></em>
                                </span>
                                <input class="input-bordered" name = "txtFund" id="txtFund" type="number" placeholder="200 ">
                            </div>
                        </div>
                        <div class="input-item input-with-label">
                            <button type="submit"  class="btn btn-primary btn-block">Continue</a>
                        </div>
                    </form>

                    </div>
                </div>
                <!-- .modal-content -->
            </div>
            <!-- .modal-dialog -->
        </div>
        <div id="modalNotice" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Notification</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <h4><span id="txtMessageHeading"></span></h4>
                        <p id="txtMessage"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
 ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##

 <script src="<?php echo e(asset('/tokenWiz/assets/js/scripta5f5.js?ver=102')); ?>"></script>

 <!-- <script src="<?php echo e(asset('/js/app/formsubmit.js')); ?>"></script> -->
 <script src="<?php echo e(asset('/js/app/buyandsell.js')); ?>"></script>
  <script>


      $(function(){
          $("#openFundBtn").click(function(event){
            $("#fundAccountModal").modal();
          });
      });


  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userLayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>