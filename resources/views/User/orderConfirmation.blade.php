@extends('layouts.userLayout')

@section('content')
<div class="page-content">
        <div class="container">
            <div class="card content-area">
                <div class="card-innr">
                    <div class="card-head d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">KYC Details</h4>

                    </div>
                    <div class="gaps-1-5x"></div>
                    <div class="data-details d-md-flex flex-wrap align-items-center justify-content-between">
                        <div class="fake-class">
                            <span class="data-details-title">Submited By</span>
                            <span class="data-details-info">UD102001</span>
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
                                            <img src="{{asset('tokenWiz/images/passport-a-fornt.jpg')}}" alt="passport">
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
                                <li>
                                    <span class="data-details-docs-title">Back Side</span>
                                    <div class="data-doc-item data-doc-item-lg">
                                        <div class="data-doc-image">
                                    <img src="{{asset('tokenWiz/images/passport-a-back.jpg')}}" alt="passport">
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

