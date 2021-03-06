@extends('layouts.userLayout')

@section('content')
<div class="page-content">
    <div class="container">
        <div class="card content-area">
            <div class="card-innr">
                <div class="card-head">
                    <h4 class="card-title">My Wallets</h4>
                </div>
                <table class="data-table dt-init user-tnx">
                    <thead>
                        <tr class="data-item data-head">
                            <th class="data-col dt-tnxno">Currency</th>
                            <th class="data-col dt-token">Tokens</th>

                            <th class="data-col dt-usd-amount">USD Amount</th>

                            <th class="data-col dt-type">
                                <div class="dt-type-text">Action</div>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coins as $coin)
                        <tr class="data-item">
                                <td class="data-col dt-tnxno">
                                    <div class="d-flex align-items-center">
                                            <div class="data-state ">
                                                    <img class="img-fluid" src="{{$coin->iconUrl}}" width="20" height="20">
                                                </div>
                                        <div class="fake-class">
                                            <span class="lead tnx-id">{{$coin->symbol}}</span>
                                            <span class="sub sub-date">{{$coin->name}}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="data-col dt-token">
                                    <span class="lead token-amount">{{$coin->quantity}}</span>
                                    <span class="sub sub-symbol">{{$coin->symbol}}</span>
                                </td>

                                <td class="data-col dt-usd-amount">
                                    <span class="lead amount-pay">{{$coin->price}}</span>
                                    <span class="sub sub-symbol">USD
                                        <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 {{$coin->symbol}} = {{$coin->price}} USD"></em>
                                    </span>
                                </td>


                                <td class="data-col ">
                                    <div class="relative d-inline-block d-md-none">
                                        <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger">
                                            <em class="ti ti-more-alt"></em>
                                        </a>
                                        <div class="toggle-class dropdown-content dropdown-content-center-left pd-2x">
                                            <ul class="data-action-list">
                                                <li>
                                                    <button data-symbol="{{$coin->symbol}}" data-quantity-left="{{$coin->quantity}}"  data-current-price-per-coin="{{$coin->price}}" class="btn btn-auto btn-primary btn-xs btnSellTb">
                                                        <span>Sell
                                                            <span class="d-none d-xl-inline-block">Now</span>
                                                        </span>
                                                        <em class="ti ti-wallet"></em>
                                                    </button>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <ul class="data-action-list d-none d-md-inline-flex">
                                        <li>
                                            <button  class="btn btn-auto btn-primary btn-xs btnSellTb" data-symbol="{{$coin->symbol}}" data-quantity-left="{{$coin->quantity}}"  data-current-price-per-coin="{{$coin->price}}">
                                                <span>Sell
                                                    <span class="d-none d-xl-inline-block">Now</span>
                                                </span>
                                                <em class="ti ti-wallet"></em>
                                            </a>
                                        </li>

                                    </ul>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <!-- .card-innr -->
        </div>
        <!-- .card -->
    </div>
    <!-- .container -->
</div>

<div class="modal fade" id="sellModal" tabindex="-1">

        <div class="modal-dialog modal-dialog-sm">
            <div class="modal-content">
                <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close">
                    <em class="ti ti-close"></em>
                </a>
                <div class="popup-body">
                    <h3 class="popup-title">Sell Cryptocurrency</h3>
                    <form action="#">
                            <div class="input-item input-with-label">
                                <label class="input-item-label text-exlight">Select Currency</label>
                                <select class="input-bordered" id="selectCurrency">
                                    @foreach ($coins as $coin)
                                    <option value="{{$coin->symbol}}" data-price="{{$coin->price}}" data-symbol="{{$coin->symbol}}">{{$coin->symbol}} - {{$coin->name}}</option>

                                    @endforeach
                              </select>

                            </div>
                            <div class="input-item input-with-label">
                                    <label class="input-item-label ucap text-exlight">Enter the token quantity </label>
                                    <input class="input-bordered" name='txtQuanity' id="txtQuanity"  type="text">
                                    <span class="input-note">Enter the quantity of cryptocurrency</span>
                            </div>
                            <div class="input-item input-with-label">
                                    <label class="input-item-label ucap text-exlight">Amount in USD</label>
                                    <input class="input-bordered" disabled name='txtAmount' id="txtAmount" type="text" placeholder="100">
                                    <span class="input-note">amount to calculate the token for the cryptocurrency</span>
                                </div>
                            <div class="gaps-1x"></div>
                            <button class="btn btn-primary btn-block" id="btnSellCoin">Sell Now <img id="img_buy" width="15" height="15" class="img-fluid hide-loader" src="{{asset('img/ajax/loading4.gif')}}"></button>
                        </form>
                </div>
            </div>
            <!-- .modal-content -->
        </div>
        <!-- .modal-dialog -->
    </div>

    <div id="modalNotice" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Notification</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <h4><span id="txtMessageHeading"></span></h4>
                        <p id="txtMessage"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    @endsection

@section('scripts')
 @parent

 <script src="{{ asset('/tokenWiz/assets/js/scripta5f5.js?ver=102')}}"></script>

 <script src="{{ asset('/js/app/buyandsell.js')}}"></script>
  <script>
      $(function(){
          $("#openFundBtn").click(function(event){
            $("#fundAccountModal").modal();
          });
      });
  </script>
@endsection
