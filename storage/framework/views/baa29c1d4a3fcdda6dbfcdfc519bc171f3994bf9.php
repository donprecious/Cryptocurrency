<?php $__env->startSection('content'); ?>
<div class="page-header page-header-kyc">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7 text-center">
                <h2 class="page-title">Submit Proof of payment order  # <?php echo e($order->order_id); ?></h2>

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
                    <div class="kyc-form-steps card mx-lg-4">

                        <div class="form-step form-step2">
                            <div class="form-step-head card-innr">
                                <div class="step-head">
                                    <div class="step-number"></div>
                                    <div class="step-head-text">
                                            <h4>Proof of payment</h4>
                                            <p>Upload a picture to show you have made payment</p>
                                     </div>
                                </div>
                            </div>
                            <!-- .step-head -->
                            <div class="form-step-fields card-innr">
                                    <form enctype="multipart/form-data" method="post" action="/user/UploadPaymentDoc">
                                <!-- .nav-tabs-line -->
                                <?php echo csrf_field(); ?>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="passport">
                                        <?php if(count($errors)>0): ?>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="alert alert-danger">
                                                <?php echo e($error); ?>

                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                        <!-- Add Error Here  -->

                                        <?php if(session()->has('status')): ?>
                                            <div class="alert alert-info" role="alert">
                                                <?php echo e(session()->get('status')); ?>

                                                <a href="/user/payments" class="btn btn-outline btn-outline-orange"> Go to Request</a>
                                            </div>
                                          <?php endif; ?>

                                        <h5 class="font-mid">Upload File </h5>
                                        <div class="row align-items-center">

                                                <div class="col-md-12">


                                                        <div class="relative">
                                                            <em class="input-file-icon fas fa-upload"></em>
                                                            <input type="file" class="input-file" id="file_upload" name="file_upload">
                                                            <label for="file_upload">Choose a file</label>
                                                        </div>


                                                                <div class="input-item input-with-label">
                                                                        <label class="input-item-label"></label>
                                                                        <textarea class="input-bordered input-textarea" name="description" placeholder="Brief detail concering the file"></textarea>
                                                                </div>
                                                            <input type="hidden" value="<?php echo e(Auth::id()); ?>" name="user_id" id="user_id">
                                                            <input type="hidden" value="<?php echo e($order->order_id); ?>" name="order_id" id="order_id">
                                                                <button class="btn btn-primary" type="submit">Send</button>



                                                            </div>





                                        </div>
                                    </div>

                                    <!-- .tab-pane -->
                                </div>
                            </form>
                                <!-- .tab-content -->
                            </div>
                            <!-- .step-fields -->
                        </div>
                    </div>
                    <!-- .card -->
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