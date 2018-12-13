@extends('layouts.userLayout')

@section('content')
<div class="page-header page-header-kyc">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7 text-center">
                    <h2 class="page-title">Verify payment</h2>

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
                        {{-- <div class="form-step form-step1">
                            <div class="form-step-head card-innr">
                                <div class="step-head">
                                    <div class="step-number">01 </div>
                                    <div class="step-head-text">

                                    </div>
                                </div>
                            </div>

                        </div> --}}
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

                                <div class="gaps-2x"></div>

                                <!-- .nav-tabs-line -->
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="passport">

                                        <div class="gaps-2x"></div>
                                        <h5 class="font-mid">Upload File Herey</h5>
                                        <div class="row align-items-center">
                                                <div class="col-md-12">
                                                        <div class="upload-box">
                                                                <div class="upload-zone">
                                                                    <div class="dz-message" data-dz-message>
                                                                        <span class="dz-message-text">Drag and drop file</span>
                                                                        <span class="dz-message-or">or</span>
                                                                        <button class="btn btn-primary">SELECT</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="input-item input-with-label">
                                                                    <label class="input-item-label"></label>
                                                                    <textarea class="input-bordered input-textarea" placeholder="Brief detail concering the file"></textarea>
                                                            </div>
                                                            <button class="btn btn-primary"> Send</button>
                                                </div>


                                        </div>
                                    </div>

                                    <!-- .tab-pane -->
                                </div>
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
@endsection

@section('scripts')
 @parent

 <script src="{{ asset('/tokenWiz/assets/js/scripta5f5.js?ver=102')}}"></script>
 <!-- <script src="{{ asset('/js/app/formsubmit.js')}}"></script> -->
  <script>
      $(function(){
          $("#openFundBtn").click(function(event){
            $("#fundAccountModal").modal();
          });
      });
  </script>
@endsection

