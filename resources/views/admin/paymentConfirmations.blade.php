@extends('layouts.AdminLayout')

@section('content')

<div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-breadcrumb">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Library</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- add row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="t_add_row" class="table table-striped table-bordered display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Date/ OrderId</th>
                                        <th>User</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    <tr>
                                    <th>{{$order->created_at}} / #{{$order->order_id}}</th>
                                            <th>{{$order->user->email}}</th>
                                            <th>{{$order->quantity}}</th>
                                            <th>{{$order->status}}</th>
                                    <th>
                                    <button type="button" class="btnorder btn btn-outline btn-outline-primary" data-amount="{{$order->quantity}}" data-user_id="{{$order->user->id}}"  data-url="/admin/approveOrder/{{$order->order_id}}" data-order_id="{{$order->order_id}}">
                                    Approve <img id="img_{{$order->order_id}}" class="hide-loader" src="{{asset('img/ajax/loading4.gif')}}" width="20" height="20"/></button>
                                    </th>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="status"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">

                        <p id="message">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

@endsection

@section('scripts')
 @parent
 <!--<script src="{{asset('adminTemp/assets/js/pages/datatable/datatable-api.init.js')}}"></script>
  <script> -->
 <script src="{{asset('js/app/formSubmit.js')}}"></script>

  <script>
    $(".btnorder").click(function(event){
        event.preventDefault();
      var order_id = $(this).attr("data-order_id");
      var userid =$(this).attr("data-user_id");
      var amount = $(this).attr("data-amount");
      var  data = {
     "orderid": order_id,
      "userid":userid,
      "amount": amount
    };
      var  url = "/admin/ApproveOrder";
    var $btn = $(this);
    var $img = $("#img_"+order_id);
    var $modal = $("#myModal");
    var $status = $("#status");
    var $message = $("#message");

        ajaxPost($btn, url, data, $img, $modal, $status,$message);
    });
  </script>
@endsection
