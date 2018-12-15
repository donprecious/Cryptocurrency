<?php $__env->startSection('content'); ?>
<div class="page-header page-header-kyc">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7 text-center">
                <h2 class="page-title">Account Fund Request</h2>

                <p class="large">You have request to fund your account with <?php echo e($data->quantity); ?> <?php echo e($data->currency_symbol); ?>, </p>
            </div>
        </div>
    </div>
    <!-- .container -->
</div>
<!-- .page-header -->
<div class="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <div class="kyc-status card mx-lg-4">
                    <div class="card-innr">
                            <div class="popup-body">
                                    <h4 class="popup-title">Confirmation Your Payment</h4>
                                    <p class="lead text-primary">Your Order no.
                                        <strong><?php echo e($data->order_id); ?></strong> has been placed successfully. </p>
                                    <p>The tokens balance will appear in your account only after you transaction has been confirmed by
                                        our team.</p>
                                    <p>
                                        <strong>We have provide you our wallet addresses to make manual transfer</strong> </p>

                                <label for="token-address" class="input-item-label">Ethereum Address</label>
                                <div class="copy-wrap mgb-0-5x">
                                    <span class="copy-feedback"></span>
                                    <em class="fab fa-ethereum"></em>
                                        <input type="text" class="copy-address" value="0x4156d3342d5c385a87d264f90653733592000581" disabled="">
                                        <button class="copy-trigger copy-clipboard" data-clipboard-text="0x4156d3342d5c385a87d264f90653733592000581">
                                       <em class="ti ti-files"></em>
                                    </button>
                                </div>

                                <label for="token-address" class="input-item-label">Bitcoin Address</label>
                                <div class="copy-wrap mgb-0-5x">
                                    <span class="copy-feedback"></span>
                                    <em class="fab fa-bitcoin"></em>
                                        <input type="text" class="copy-address" value="0x4156d3342d5c385a87d264f90653733592000581" disabled="">
                                        <button class="copy-trigger copy-clipboard" data-clipboard-text="0x4156d3342d5c385a87d264f90653733592000581">
                                       <em class="ti ti-files"></em>
                                    </button>
                                </div>
                                <!-- .input-item -->
                                <ul class="d-flex flex-wrap align-items-center guttar-30px">
                                    <li>
                                    <a href="/user/VerifyPayment/<?php echo e($data->order_id); ?>" data-dismiss="modal" data-toggle="modal" data-target="#pay-review" class="btn btn-primary">Confirm Payment</a>
                                    </li>
                                    <li class="pdt-1x pdb-1x">
                                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#pay-online" class="link link-primary">Make Online Payment</a>
                                    </li>
                                </ul>
                                <div class="gaps-2x"></div>
                                <div class="gaps-1x d-none d-sm-block"></div>
                                <div class="note note-plane note-light mgb-1x">
                                    <em class="fas fa-info-circle"></em>
                                    <p>Do not make payment through exchange (Kraken, Bitfinex). You can use MayEtherWallet, MetaMask, Mist wallets
                                        etc.</p>
                                </div>
                                <div class="note note-plane note-danger">
                                    <em class="fas fa-info-circle"></em>

                                    <p>In case you  send a different amount, number of TWZ tokens will update accordingly.</p>
                                </div>
                            </div>
                        <div class="status status-empty">
                            <div class="status-icon">
                                <em class="ti ti-files"></em>
                            </div>
                            <span class="status-text text-dark">Confirm your payment</span>
                            <a href="/user/VerifyPayment/<?php echo e($data->order_id); ?>" class="btn btn-primary">Click here to make confrimation</a>
                        </div>
                    </div>
                </div>
                <!-- .card -->
                <p class="text-light text-center">If you have any question, please contact our support team
                    <a href="#">info@tokenwiz.com</a>.</p>
                <div class="gaps-1x"></div>
                <div class="gaps-3x d-none d-sm-block"></div>
            </div>
        </div>
    </div>
    <!-- .container -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
 ##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##

 <script src="<?php echo e(asset('/tokenWiz/assets/js/scripta5f5.js?ver=102')); ?>"></script>
 <!-- <script src="<?php echo e(asset('/js/app/formsubmit.js')); ?>"></script> -->
  <script>
      $(function(){
          $("#openFundBtn").click(function(event){
            $("#fundAccountModal").modal();
          });
      });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userLayout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>