<?php $__env->startSection('content'); ?>
<div class="page-content">
    <div class="container">
        <div class="card content-area">
            <div class="card-innr">
                <div class="card-head">
                    <h4 class="card-title">Transactions History</h4>
                </div>
                <table class="data-table dt-init user-tnx">
                    <thead>
                        <tr class="data-item data-head">
                            <th class="data-col">ID/Date</th>
                            <th class="data-col">Currency</th>

                            <th class="data-col">Token</th>
                            <th class="data-col">price</th>
                            <th class="data-col">Trans.. Type</th>


                            <th class="data-col">past price </th>
                            <th class="data-col">current price per token</th>
                            <th class="data-col">
                                <div class="dt-type-text">Action</div>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr class="data-item">
                                <td class="data-col dt-tnxno">
                                    <div class="d-flex align-items-center">
                                            <div class="data-state ">
                                                    <img class="img-fluid" src="<?php echo e($record->iconUrl); ?>" width="20" height="20">
                                        </div>
                                        <div class="fake-class">
                                            <span class="lead tnx-id"><?php echo e($record->id); ?></span>
                                            <span class="sub sub-date"><?php echo e($record->date); ?></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="data-col dt-token">
                                    <span class="lead token-amount"><?php echo e($record->name); ?></span>
                                    <span class="sub sub-symbol"><?php echo e($record->symbol); ?></span>
                                </td>
                                <td class="data-col dt-amount">
                                    <span class="lead amount-pay"><?php echo e($record->token); ?></span>
                                </td>
                                <td class="data-col dt-usd-amount">
                                        <span class="lead amount-pay"><?php echo e($record->price); ?></span>
                                    </td>
                                <td class="data-col dt-amount">
                                        <span class="lead amount-pay"><?php echo e($record->trans_type); ?></span>
                                </td>

                                <td class="data-col dt-usd-amount">
                                  <span class="lead amount-pay"><?php echo e($record->transactionPrice); ?></span>

                                </td>
                                <td class="data-col dt-account">
                                    <span class="lead user-info"><?php echo e($record->currentPrice); ?></span>
                                </td>
                                <td class="data-col dt-type">
                                    <button class="badge badge-outline badge-success badge-md btnBuyhistory btnTrade" data-type="Sell" data-symbol="<?php echo e($record->symbol); ?>" data-quantity="<?php echo e($record->token); ?>" data-price="<?php echo e($record->price); ?>"  data-current-price-per-coin="<?php echo e($record->price); ?>" >Sell Now</button>
                                    <button class="badge badge-outline badge-success badge-md btnSellhistory btnTrade" data-type="Buy" data-symbol="<?php echo e($record->symbol); ?>" data-quantity="<?php echo e($record->token); ?>" data-price="<?php echo e($record->price); ?>"  data-current-price-per-coin="<?php echo e($record->price); ?>">Buy Now</button>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        

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
                    <h3 class="popup-title"><span class="sellBuyTxt"></span> Cryptocurrency</h3>
                    <form action="#">
                            <div class="input-item input-with-label">
                                <label class="input-item-label text-exlight">Select Currency</label>
                                <select class="input-bordered" id="selectCurrency">
                                    <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($coin->symbol); ?>" data-price="<?php echo e($coin->price); ?>" data-symbol="<?php echo e($coin->symbol); ?>"><?php echo e($coin->symbol); ?> - <?php echo e($coin->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <button class="btn btn-primary btn-block" id="btnCoinTrade" data-orderType=""><span class="sellBuyTxt"></span>  Now <img id="img_buy" width="15" height="15" class="img-fluid hide-loader" src="<?php echo e(asset('img/ajax/loading4.gif')); ?>"></button>
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
          $(".btnTrade").click(function(event){
              let tradetype = $(this).attr('data-type');

             var symbol = $(this).attr("data-symbol");
             //task is to show the modal and set the selected option to the corresponding symbol
                $("#selectCurrency").val(symbol);
                $("#sellModal").modal();
                if(tradetype=="Sell"){
                //Sell the token
                $(".sellBuyTxt").text("Sell");

                $("#btnCoinTrade").attr('data-orderType',"Sell");
                $("#txtQuanity").val($(this).attr("data-quantity"));

                }
                else{
                    $("#btnCoinTrade").attr('data-orderType',"Buy");
                    $(".sellBuyTxt").text("Sell");
                    var  token =  $("#txtAmount").val();
                    $("#txtQuanity").val($(this).attr("data-quantity"));
                }

          });
          $("#btnCoinTrade").click(function(){
              var tradeType =  $("#btnCoinTrade").attr('data-orderType');
              if(tradeType=="Sell"){
                selltoken();
              }
              else if(tradeType=="Buy"){
                  buytoken();
              }
          });
      });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userLayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>