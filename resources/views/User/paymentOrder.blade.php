@extends('layouts.userLayout')

@section('content')
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
                            <span class="data-details-info">{{$order->created_at}}</span>
                        </div>
                        <div class="fake-class">
                            <span class="data-details-title">Checked By</span>
                            <span class="data-details-info">Admin</span>
                        </div>
                        @if($order->status!="PENDING")
                        <div class="fake-class">
                            <span class="data-details-title">Checked On</span>

                            <span class="data-details-info">{{$order->updated_at}}</span>
                        </div>
                        @endif
                        <div class="fake-class">
                        <span class="badge badge-md badge-block badge-primary ucap">{{$order->status}}</span>
                        </div>
                        <div class="gaps-2x w-100 d-none d-md-block"></div>

                    </div>
                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">Request Information</h6>
                    <ul class="data-details-list">
                        <li>
                            <div class="data-details-head">Order ID</div>
                            <div class="data-details-des">{{$order->order_id}}</div>
                        </li>
                        <!-- li -->

                        <!-- li -->
                        <li>
                            <div class="data-details-head">Amount / Quanity</div>
                        <div class="data-details-des">{{$order->quantity}}</div>
                        </li>
                        <!-- li -->
                        <li>
                            <div class="data-details-head">Email</div>
                            <div class="data-details-des">{{$order->user->email}}</div>
                        </li>
                        <!-- li -->
                        <li>
                            <div class="data-details-head">Status</div>
                        <div class="data-details-des">{{$order->status}}</div>
                        </li>
                        <!-- li -->


                    </ul>
                    <div class="gaps-3x"></div>
                    <h6 class="card-sub-title">Uploaded Documnets</h6>
                    <ul class="data-details-list">
                        <li>
                        <div class="data-details-head">Proof of Payment <a href="/user/VerifyPayment/{{$order->order_id}}" class="btn btn-xs btn-primary pull-right">Upload Doc</a></div>
                            <ul class="data-details-docs">

                                <!-- li -->
                                @if ($proofs !=null)
                                    @foreach ($proofs as $proof)
                                    <li>
                                        <span class="data-details-docs-title">{{$proof->description}}</span>
                                        <div class="data-doc-item data-doc-item-lg">
                                            <div class="data-doc-image">
                                        <img src="'{{$proof->file_url}}'" alt="proof of payment">
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
                                    @endforeach

                                @endif


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

