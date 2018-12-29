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
                        @if($order!=null)
                        <tr class="data-item">
                                <td class="data-col dt-tnxno">
                                    <div class="d-flex align-items-center">

                                        <div class="fake-class">
                                            <span class="lead tnx-id">{{$order->created_at}}</span>
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
                                    <div class="relative d-inline-block d-md-none">
                                        <a href="#" class="btn btn-light-alt btn-xs btn-icon">
                                         View <em class="ti ti-more-alt"></em>
                                        </a>

                                    </div>

                                </td>
                            </tr>
                        @endif

                        <!-- .data-item -->
                        <tr class="data-item">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div class="data-state data-state-approved">
                                        <span class="d-none">Approved</span>
                                    </div>
                                    <div class="fake-class">
                                        <span class="lead tnx-id">TNX1002</span>
                                        <span class="sub sub-date">2018-08-24 10:45PM</span>
                                    </div>
                                </div>
                            </td>
                            <td class="data-col dt-token">
                                <span class="lead token-amount">18,750</span>
                                <span class="sub sub-symbol">TWZ</span>
                            </td>
                            <td class="data-col dt-amount">
                                <span class="lead amount-pay">50.00</span>
                                <span class="sub sub-symbol">ETH
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 1250 TWZ"></em>
                                </span>
                            </td>
                            <td class="data-col dt-usd-amount">
                                <span class="lead amount-pay">245.52</span>
                                <span class="sub sub-symbol">USD
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 350.54 USD"></em>
                                </span>
                            </td>
                            <td class="data-col dt-account">
                                <span class="lead user-info">1F1T....4XQX</span>
                                <span class="sub sub-date">08 Jul, 18 10:20PM</span>
                            </td>
                            <td class="data-col dt-type">
                                <span class="dt-type-md badge badge-outline badge-success badge-md">Purchase</span>
                                <span class="dt-type-sm badge badge-sq badge-outline badge-success badge-md">P</span>
                            </td>
                            <td class="data-col text-right">
                                <a href="transaction-details.html" class="btn btn-light-alt btn-xs btn-icon">
                                    <em class="ti ti-eye"></em>
                                </a>
                            </td>
                        </tr>
                        <!-- .data-item -->
                        <tr class="data-item">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div class="data-state data-state-canceled">
                                        <span class="d-none">Canceled</span>
                                    </div>
                                    <div class="fake-class">
                                        <span class="lead tnx-id">TNX1002</span>
                                        <span class="sub sub-date">2018-08-24 10:45PM</span>
                                    </div>
                                </div>
                            </td>
                            <td class="data-col dt-token">
                                <span class="lead token-amount">18,750</span>
                                <span class="sub sub-symbol">TWZ</span>
                            </td>
                            <td class="data-col dt-amount">
                                <span class="lead amount-pay">50.00</span>
                                <span class="sub sub-symbol">ETH
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 1250 TWZ"></em>
                                </span>
                            </td>
                            <td class="data-col dt-usd-amount">
                                <span class="lead amount-pay">245.52</span>
                                <span class="sub sub-symbol">USD
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 350.54 USD"></em>
                                </span>
                            </td>
                            <td class="data-col dt-account">
                                <span class="lead user-info">1F1T....4XQX</span>
                                <span class="sub sub-date">08 Jul, 18 10:20PM</span>
                            </td>
                            <td class="data-col dt-type">
                                <span class="dt-type-md badge badge-outline badge-success badge-md">Purchase</span>
                                <span class="dt-type-sm badge badge-sq badge-outline badge-success badge-md">P</span>
                            </td>
                            <td class="data-col text-right">
                                <a href="transaction-details.html" class="btn btn-light-alt btn-xs btn-icon">
                                    <em class="ti ti-eye"></em>
                                </a>
                            </td>
                        </tr>
                        <!-- .data-item -->
                        <tr class="data-item">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div class="data-state data-state-progress">
                                        <span class="d-none">Progress</span>
                                    </div>
                                    <div class="fake-class">
                                        <span class="lead tnx-id">TNX1002</span>
                                        <span class="sub sub-date">2018-08-24 10:45PM</span>
                                    </div>
                                </div>
                            </td>
                            <td class="data-col dt-token">
                                <span class="lead token-amount">18,750</span>
                                <span class="sub sub-symbol">TWZ</span>
                            </td>
                            <td class="data-col dt-amount">
                                <span class="lead amount-pay">50.00</span>
                                <span class="sub sub-symbol">ETH
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 1250 TWZ"></em>
                                </span>
                            </td>
                            <td class="data-col dt-usd-amount">
                                <span class="lead amount-pay">245.52</span>
                                <span class="sub sub-symbol">USD
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 350.54 USD"></em>
                                </span>
                            </td>
                            <td class="data-col dt-account">
                                <span class="lead user-info">1F1T....4XQX</span>
                                <span class="sub sub-date">08 Jul, 18 10:20PM</span>
                            </td>
                            <td class="data-col dt-type">
                                <span class="dt-type-md badge badge-outline badge-success badge-md">Purchase</span>
                                <span class="dt-type-sm badge badge-sq badge-outline badge-success badge-md">P</span>
                            </td>
                            <td class="data-col text-right">
                                <a href="transaction-details.html" class="btn btn-light-alt btn-xs btn-icon">
                                    <em class="ti ti-eye"></em>
                                </a>
                            </td>
                        </tr>
                        <!-- .data-item -->
                        <tr class="data-item">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div class="data-state data-state-approved">
                                        <span class="d-none">Approved</span>
                                    </div>
                                    <div class="fake-class">
                                        <span class="lead tnx-id">TNX1002</span>
                                        <span class="sub sub-date">2018-08-24 10:45PM</span>
                                    </div>
                                </div>
                            </td>
                            <td class="data-col dt-token">
                                <span class="lead token-amount">1,050</span>
                                <span class="sub sub-symbol">TWZ</span>
                            </td>
                            <td class="data-col dt-amount">
                                <span class="lead amount-pay">0.85</span>
                                <span class="sub sub-symbol">ETH
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 1250 TWZ"></em>
                                </span>
                            </td>
                            <td class="data-col dt-usd-amount">
                                <span class="lead amount-pay">2.54</span>
                                <span class="sub sub-symbol">USD
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 350.54 USD"></em>
                                </span>
                            </td>
                            <td class="data-col dt-account">
                                <span class="lead user-info">Bounty Bonus</span>
                                <span class="sub sub-date">Campaign Name</span>
                            </td>
                            <td class="data-col dt-type">
                                <span class="dt-type-md badge badge-outline badge-info badge-md">Bonus</span>
                                <span class="dt-type-sm badge badge-sq badge-outline badge-info badge-md">B</span>
                            </td>
                            <td class="data-col text-right">
                                <a href="transaction-details.html" class="btn btn-light-alt btn-xs btn-icon">
                                    <em class="ti ti-eye"></em>
                                </a>
                            </td>
                        </tr>
                        <!-- .data-item -->
                        <tr class="data-item">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div class="data-state data-state-progress">
                                        <span class="d-none">Progress</span>
                                    </div>
                                    <div class="fake-class">
                                        <span class="lead tnx-id">TNX1002</span>
                                        <span class="sub sub-date">2018-08-24 10:45PM</span>
                                    </div>
                                </div>
                            </td>
                            <td class="data-col dt-token">
                                <span class="lead token-amount">18,750</span>
                                <span class="sub sub-symbol">TWZ</span>
                            </td>
                            <td class="data-col dt-amount">
                                <span class="lead amount-pay">50.00</span>
                                <span class="sub sub-symbol">ETH
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 1250 TWZ"></em>
                                </span>
                            </td>
                            <td class="data-col dt-usd-amount">
                                <span class="lead amount-pay">245.52</span>
                                <span class="sub sub-symbol">USD
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 350.54 USD"></em>
                                </span>
                            </td>
                            <td class="data-col dt-account">
                                <span class="lead user-info">1F1T....4XQX</span>
                                <span class="sub sub-date">08 Jul, 18 10:20PM</span>
                            </td>
                            <td class="data-col dt-type">
                                <span class="dt-type-md badge badge-outline badge-success badge-md">Purchase</span>
                                <span class="dt-type-sm badge badge-sq badge-outline badge-success badge-md">P</span>
                            </td>
                            <td class="data-col text-right">
                                <a href="transaction-details.html" class="btn btn-light-alt btn-xs btn-icon">
                                    <em class="ti ti-eye"></em>
                                </a>
                            </td>
                        </tr>
                        <!-- .data-item -->
                        <tr class="data-item">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div class="data-state data-state-canceled">
                                        <span class="d-none">Canceled</span>
                                    </div>
                                    <div class="fake-class">
                                        <span class="lead tnx-id">TNX1002</span>
                                        <span class="sub sub-date">2018-08-24 10:45PM</span>
                                    </div>
                                </div>
                            </td>
                            <td class="data-col dt-token">
                                <span class="lead token-amount">18,750</span>
                                <span class="sub sub-symbol">TWZ</span>
                            </td>
                            <td class="data-col dt-amount">
                                <span class="lead amount-pay">50.00</span>
                                <span class="sub sub-symbol">ETH
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 1250 TWZ"></em>
                                </span>
                            </td>
                            <td class="data-col dt-usd-amount">
                                <span class="lead amount-pay">245.52</span>
                                <span class="sub sub-symbol">USD
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 350.54 USD"></em>
                                </span>
                            </td>
                            <td class="data-col dt-account">
                                <span class="lead user-info">1F1T....4XQX</span>
                                <span class="sub sub-date">08 Jul, 18 10:20PM</span>
                            </td>
                            <td class="data-col dt-type">
                                <span class="dt-type-md badge badge-outline badge-success badge-md">Purchase</span>
                                <span class="dt-type-sm badge badge-sq badge-outline badge-success badge-md">P</span>
                            </td>
                            <td class="data-col text-right">
                                <a href="transaction-details.html" class="btn btn-light-alt btn-xs btn-icon">
                                    <em class="ti ti-eye"></em>
                                </a>
                            </td>
                        </tr>
                        <!-- .data-item -->
                        <tr class="data-item">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div class="data-state data-state-progress">
                                        <span class="d-none">Progress</span>
                                    </div>
                                    <div class="fake-class">
                                        <span class="lead tnx-id">TNX1002</span>
                                        <span class="sub sub-date">2018-08-24 10:45PM</span>
                                    </div>
                                </div>
                            </td>
                            <td class="data-col dt-token">
                                <span class="lead token-amount">18,750</span>
                                <span class="sub sub-symbol">TWZ</span>
                            </td>
                            <td class="data-col dt-amount">
                                <span class="lead amount-pay">50.00</span>
                                <span class="sub sub-symbol">ETH
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 1250 TWZ"></em>
                                </span>
                            </td>
                            <td class="data-col dt-usd-amount">
                                <span class="lead amount-pay">245.52</span>
                                <span class="sub sub-symbol">USD
                                    <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 ETH = 350.54 USD"></em>
                                </span>
                            </td>
                            <td class="data-col dt-account">
                                <span class="lead user-info">1F1T....4XQX</span>
                                <span class="sub sub-date">08 Jul, 18 10:20PM</span>
                            </td>
                            <td class="data-col dt-type">
                                <span class="dt-type-md badge badge-outline badge-success badge-md">Purchase</span>
                                <span class="dt-type-sm badge badge-sq badge-outline badge-success badge-md">P</span>
                            </td>
                            <td class="data-col text-right">
                                <a href="transaction-details.html" class="btn btn-light-alt btn-xs btn-icon">
                                    <em class="ti ti-eye"></em>
                                </a>
                            </td>
                        </tr>
                        <!-- .data-item -->
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
