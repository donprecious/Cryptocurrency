@extends('layouts.userLayout')

@section('content')
<div class="page-header page-header-kyc">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7 text-center">
                <h2 class="page-title">Submit Proof of payment order  # {{$order->order_id }}</h2>

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
                                    <form enctype="multipart/form-data" method="post" action="{{ action('UserController@FundAccount')  }}">
                                <!-- .nav-tabs-line -->
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="passport">
                                        @if(count($errors)>0)
                                            @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                {{ $error}}
                                            </div>
                                            @endforeach
                                        @endif
                                        <!-- Add Error Here  -->

                                        @if(session()->has('status'))
                                            <div class="alert alert-info" role="alert">
                                                {{session()->get('status')}}
                                            </div>
                                          @endif

                                        <h5 class="font-mid">Upload File </h5>
                                        <div class="row align-items-center">

                                                <div class="col-md-12">
                                                    <!--
                                                        <div class="input-item input-with-label">
                                                                <label class="input-item-label">Picture Upload</label>
                                                                <div class="relative">
                                                                    <em class="input-file-icon fas fa-upload"></em>
                                                                    <input type="file" name="file_upload" class="input-file" id="file_upload">
                                                                    <label for="file-01">Choose a file</label>
                                                                </div>
                                                        </div>
                                                    -->

                                                                <div class="input-item input-with-label">
                                                                        <label class="input-item-label"></label>
                                                                        <textarea class="input-bordered input-textarea" name="description" placeholder="Brief detail concering the file"></textarea>
                                                                </div>
                                                            <input type="hidden" value="{{Auth::id()}}" name="user_id" id="user_id">
                                                            <input type="hidden" value="{{$order->order_id}}" name="order_id" id="order_id">
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

