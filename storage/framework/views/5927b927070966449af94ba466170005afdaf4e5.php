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
                            <th class="data-col dt-tnxno">Tranx NO/Date</th>
                            <th class="data-col dt-token">Amount</th>
                            <th class="data-col dt-token">Status</th>

                            <th class="data-col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($orders!=null): ?>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr class="data-item">
                                <td class="data-col dt-tnxno">
                                    <div class="d-flex align-items-center">

                                        <div class="fake-class">
                                            <span class="lead tnx-id"><?php echo e($order->created_at); ?></span>
                                            <span class="sub sub-date"><?php echo e($order->order_id); ?></span>

                                        </div>
                                    </div>
                                </td>
                                <td class="data-col dt-token">
                                    <span class="lead token-amount"><?php echo e($order->quantity); ?></span>

                                </td>
                                <td class="data-col dt-token">
                                    <span class="lead amount-pay"><?php echo e($order->status); ?></span>

                                </td>

                                <td class="data-col text-right">
                                    <div class="relative d-inline-block">
                                    <a href="/user/payment/<?php echo e($order->order_id); ?>" class="btn btn-light-alt btn-xs btn-icon">
                                         View <em class="ti ti-more-alt"></em>
                                        </a>

                                    </div>

                                </td>
                            </tr>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </tbody>
                </table>
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