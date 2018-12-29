<?php $__env->startSection('content'); ?>
<div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                    <div class="card-head d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Payment Details</h4>

                    </div>
                    <div class="gaps-1-5x"></div>
                    <div class="data-details d-md-flex flex-wrap align-items-center justify-content-between">

                        <div class="fake-class">
                            <span class="data-details-title">Submited On</span>
                            <span class="data-details-info"><?php echo e($order->created_at); ?></span>
                        </div>
                        <div class="fake-class">
                            <span class="data-details-title">Checked By</span>
                            <span class="data-details-info">Admin</span>
                        </div>
                        <?php if($order->status!="PENDING"): ?>
                        <div class="fake-class">
                            <span class="data-details-title">Checked On</span>

                            <span class="data-details-info"><?php echo e($order->updated_at); ?></span>
                        </div>
                        <?php endif; ?>
                        <div class="fake-class">
                        <span class="badge badge-md badge-block badge-primary ucap"><?php echo e($order->status); ?></span>
                        </div>
                        <div class="gaps-2x w-100 d-none d-md-block"></div>

                    </div>
                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">Request Information</h6>
                    <ul class="data-details-list">
                        <li>
                            <div class="data-details-head">Order ID</div>
                            <div class="data-details-des"><?php echo e($order->order_id); ?></div>
                        </li>
                        <!-- li -->

                        <!-- li -->
                        <li>
                            <div class="data-details-head">Amount / Quanity</div>
                        <div class="data-details-des"><?php echo e($order->quantity); ?></div>
                        </li>
                        <!-- li -->
                        <li>
                            <div class="data-details-head">Email</div>
                            <div class="data-details-des"><?php echo e($order->user->email); ?></div>
                        </li>
                        <!-- li -->
                        <li>
                            <div class="data-details-head">Status</div>
                        <div class="data-details-des"><?php echo e($order->status); ?></div>
                        </li>
                        <!-- li -->


                    </ul>
                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">Uploaded Documnets</h6>
                    <ul class="data-details-list">
                        <li>
                        <div class="data-details-head">Proof of Payment <a href="/user/VerifyPayment/<?php echo e($order->order_id); ?>" class="btn btn-xs btn-primary pull-right">Upload Doc</a></div>
                            <ul class="data-details-docs">

                                <!-- li -->
                                <?php if($proofs !=null): ?>
                                    <?php $__currentLoopData = $proofs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proof): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <span class="data-details-docs-title"><?php echo e($proof->description); ?></span>
                                        <div class="data-doc-item data-doc-item-lg">
                                            <div class="data-doc-image">
                                        <img src="'<?php echo e($proof->file_url); ?>'" alt="proof of payment">
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
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php endif; ?>


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