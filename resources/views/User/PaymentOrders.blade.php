@extends('layouts.userLayout')

@section('content')
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
                        @if($orders!=null)
                        @foreach ($orders as $order)

                        <tr class="data-item">
                                <td class="data-col dt-tnxno">
                                    <div class="d-flex align-items-center">

                                        <div class="fake-class">
                                            <span class="lead tnx-id">{{$order->created_at}}</span>
                                            <span class="sub sub-date">{{$order->order_id}}</span>

                                        </div>
                                    </div>
                                </td>
                                <td class="data-col dt-token">
                                    <span class="lead token-amount">{{$order->quantity}}</span>

                                </td>
                                <td class="data-col dt-token">
                                    <span class="lead amount-pay">{{$order->status}}</span>

                                </td>

                                <td class="data-col text-right">
                                    <div class="relative d-inline-block">
                                    <a href="/user/payment/{{$order->order_id}}" class="btn btn-light-alt btn-xs btn-icon">
                                         View <em class="ti ti-more-alt"></em>
                                        </a>

                                    </div>

                                </td>
                            </tr>


                            @endforeach
                        @endif

                    </tbody>
                </table>
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
 <script src="{{ asset('/js/app/buyandsell.js')}}"></script>
  <script>
      $(function(){
          $("#openFundBtn").click(function(event){
            $("#fundAccountModal").modal();
          });
      });


  </script>
@endsection
