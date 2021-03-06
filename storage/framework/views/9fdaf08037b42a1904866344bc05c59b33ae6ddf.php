<?php $__env->startSection('content'); ?>
<div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                    <div class="card-head d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-0">KYC Details Order </h4>

                    </div>
                    <div class="gaps-1-5x"></div>
                    <div class="data-details d-md-flex flex-wrap align-items-center justify-content-between">
                        <div class="fake-class">
                            <span class="data-details-title">Submited By </span>
                            <span class="data-details-info"><?php echo e($order->User->email); ?></span>
                        </div>
                        <div class="fake-class">
                            <span class="data-details-title">Submited On</span>
                            <span class="data-details-info">2018-08-24 10:12PM</span>
                        </div>
                        <div class="fake-class">
                            <span class="data-details-title">Checked By</span>
                            <span class="data-details-info">Admin</span>
                        </div>
                        <div class="fake-class">
                            <span class="data-details-title">Checked On</span>
                            <span class="data-details-info">2018-08-24 10:12PM</span>
                        </div>
                        <div class="fake-class">
                            <span class="badge badge-md badge-block badge-success ucap">Approved</span>
                        </div>
                        <div class="gaps-2x w-100 d-none d-md-block"></div>
                        <div class="w-100">
                            <span class="data-details-title">Admin Note</span>
                            <span class="data-details-info">Verified by phone call</span>
                        </div>
                    </div>
                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">Request Information</h6>
                    <ul class="data-details-list">
                        <li>
                            <div class="data-details-head">Order ID</div>
                            <div class="data-details-des">101</div>
                        </li>
                        <!-- li -->
                        <li>
                            <div class="data-details-head">Currency</div>
                            <div class="data-details-des">USD</div>
                        </li>
                        <!-- li -->
                        <li>
                            <div class="data-details-head">Amount / Quanity</div>
                            <div class="data-details-des">200</div>
                        </li>
                        <!-- li -->
                        <li>
                            <div class="data-details-head">Email</div>
                            <div class="data-details-des">james@gmail.com</div>
                        </li>
                        <!-- li -->
                        <li>
                            <div class="data-details-head">Status</div>
                            <div class="data-details-des">Pending</div>
                        </li>
                        <!-- li -->
                        <li>
                            <div class="data-details-head">Admin message</div>
                            <div class="data-details-des"></div>
                        </li>

                    </ul>
                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">Uploaded Documnets</h6>
                    <ul class="data-details-list">
                        <li>
                            <div class="data-details-head">Proof of Payment</div>
                            <ul class="data-details-docs">
                                <li>
                                    <span class="data-details-docs-title">Front Side</span>
                                    <div class="data-doc-item data-doc-item-lg">
                                        <div class="data-doc-image">
                                            <?php $__currentLoopData = $order->order_confirmations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <img src="<?php echo e($i->file_url); ?>" alt="passport">

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>
                                        <ul class="data-doc-actions">
                                            <li>
                                                <a href="#">
                                                    <em class="ti ti-import"></em>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- li -->

                                <!-- li -->
                            </ul>
                        </li>
                        <!-- li -->
                    </ul>
                </div>
                <!-- .card-innr -->
            </div>
            <!-- .card -->
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