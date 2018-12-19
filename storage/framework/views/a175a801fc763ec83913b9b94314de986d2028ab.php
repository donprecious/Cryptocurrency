<?php $__env->startSection('content'); ?>
<div class="page-content">
    <div class="container">
        <div class="card content-area">
            <div class="card-innr">
                <div class="card-head">
                    <h4 class="card-title">User Transactions</h4>
                </div>
                <table class="data-table dt-init user-tnx">
                    <thead>
                        <tr class="data-item data-head">
                            <th class="data-col dt-tnxno">Currency</th>
                            <th class="data-col dt-token">Tokens</th>

                            <th class="data-col dt-usd-amount">USD Amount</th>

                            <th class="data-col dt-type">
                                <div class="dt-type-text">Action</div>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="data-item">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div class="data-state data-state-pending">
                                        <span class="d-none">Pending</span>
                                    </div>
                                    <div class="fake-class">
                                        <span class="lead tnx-id">BTC</span>
                                        <span class="sub sub-date">Bit Coin</span>
                                    </div>
                                </div>
                            </td>
                            <td class="data-col dt-token">
                                <span class="lead token-amount">18,750</span>
                                <span class="sub sub-symbol">Btc</span>
                            </td>

                            <td class="data-col dt-usd-amount">
                                <span class="lead amount-pay">3124</span>
                                <span class="sub sub-symbol">USD
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 BTC = 3124 USD"></em>
                                </span>
                            </td>


                            <td class="data-col ">
                                <div class="relative d-inline-block d-md-none">
                                    <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger">
                                        <em class="ti ti-more-alt"></em>
                                    </a>
                                    <div class="toggle-class dropdown-content dropdown-content-center-left pd-2x">
                                        <ul class="data-action-list">
                                            <li>
                                                <button data-symbol="BTC" data-quantity-left="64"  data-current-price-per-coin="3249" class="btn btn-auto btn-primary btn-xs btnSellTb">
                                                    <span>Sell
                                                        <span class="d-none d-xl-inline-block">Now</span>
                                                    </span>
                                                    <em class="ti ti-wallet"></em>
                                                </button>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <ul class="data-action-list d-none d-md-inline-flex">
                                    <li>
                                        <button  class="btn btn-auto btn-primary btn-xs btnSellTb" data-symbol="BTC" data-quantity-left="64"  data-current-price-per-coin="3249">
                                            <span>Sell
                                                <span class="d-none d-xl-inline-block">Now</span>
                                            </span>
                                            <em class="ti ti-wallet"></em>
                                        </a>
                                    </li>

                                </ul>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- .card-innr -->
        </div>
        <!-- .card -->
    </div>
    <!-- .container -->
</div>

<div class="modal fade" id="sellModal" tabindex="-1">

        <div class="modal-dialog modal-dialog-sm">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <em class="ti ti-close"></em>
                </a>
                <div class="popup-body">
                    <h3 class="popup-title">Sell Cryptocurrency</h3>
                    <form action="#">
                            <div class="input-item input-with-label">
                                <label class="input-item-label text-exlight">Select Currency</label>
                                <select class="input-bordered" id="selectCurrency">
                                        <option value="BTC" data-price="3245.43958" data-symbol="BTC">BTC - BIT-COIN</option>
                                        <option value="LTC" data-price="49038.43958" data-symbol="LTC">Ltc - litecoin</option>
                                        <option value="ETH" data-price="135.43958" data-symbol="ETH">ETH - ethrum</option>
                              </select>

                            </div>
                            <div class="input-item input-with-label">
                                    <label class="input-item-label ucap text-exlight">Enter the token quantity </label>
                                    <input class="input-bordered" name='txtQuanity' id="txtQuanity"  type="text">
                                    <span class="input-note">Enter the quantity of cryptocurrency</span>
                            </div>
                            <div class="input-item input-with-label">
                                    <label class="input-item-label ucap text-exlight">Amount in USD</label>
                                    <input class="input-bordered" disabled name='txtAmount' id="txtAmount" type="text" placeholder="100">
                                    <span class="input-note">amount to calculate the token for the cryptocurrency</span>
                                </div>
                            <div class="gaps-1x"></div>
                            <button class="btn btn-primary btn-block" id="btnSellCoin">Sell Now <img id="img_buy" width="15" height="15" class="img-fluid hide-loader" src="<?php echo e(asset('img/ajax/loading4.gif')); ?>"></button>
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