@extends('layouts.AdminLayout')

@section('content')

<!-- ============================================================== -->
<!-- Tables -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Payment Confirmation</h4>
                <h5 class="card-subtitle">Users awaiting confirmations of their payment</h5>
                <div class="table-responsive m-t-20">
                    <table id="cc-table" class="table table-bordered m-b-20" data-page-length='10'>
                        <thead>
                            <tr class="bg-light">
                                <th>User Email /date</th>
                                <th>Order Id </th>
                                <th>Price </th>
                                <th>is Cryptocurrency</th>
                                <th>Currrency Symbol </th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc XRP" title="XRP"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Ripple</a></h6>
                                    <small class="text-muted">XRP</small>
                                </td>
                                <td>
                                    <p>$1.67</p>
                                </td>
                                <td>
                                    <p>$61,191,183,730</p>
                                </td>
                                <td>
                                    <p>$10,133,400,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 66.26%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -16.48%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc ETH" title="ETH"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);" > Ethereum</a></h6>
                                    <small class="text-muted">ETH</small>
                                </td>
                                <td>
                                    <p>$1,074.39</p>
                                </td>
                                <td>
                                    <p>$103,792,495,504</p>
                                </td>
                                <td>
                                    <p>$7,764,310,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 26.18%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -11.47%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc BTC" title="BTC"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Bitcoin</a></h6>
                                    <small class="text-muted">BTC</small>
                                </td>
                                <td>
                                    <p>$11,723.48</p>
                                </td>
                                <td>
                                    <p>$179,078,267,295</p>
                                </td>
                                <td>
                                    <p>$17,959,900,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 17.66%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -15.25%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc ADA" title="ADA"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Cardano</a></h6>
                                    <small class="text-muted">ADA</small>
                                </td>
                                <td>
                                    <p>$0.70</p>
                                </td>
                                <td>
                                    <p>$17,633,890,043</p>
                                </td>
                                <td>
                                    <p>$1,677,430,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 40.79%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -5.81%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc LTC" title="LTC"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Litecoin</a></h6>
                                    <small class="text-muted">LTC</small>
                                </td>
                                <td>
                                    <p>$198.80</p>
                                </td>
                                <td>
                                    <p>$10,901,255,520</p>
                                </td>
                                <td>
                                    <p>$1,235,380,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 26.98%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -15.44%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc XEM" title="XEM"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> NEM</a></h6>
                                    <small class="text-muted">XEM</small>
                                </td>
                                <td>
                                    <p>$1.09</p>
                                </td>
                                <td>
                                    <p>$9,990,569,999</p>
                                </td>
                                <td>
                                    <p>$153,535,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 43.30%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -19.68%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc NEO" title="NEO"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> NEO</a></h6>
                                    <small class="text-muted">NEO</small>
                                </td>
                                <td>
                                    <p>$149.18</p>
                                </td>
                                <td>
                                    <p>$9,644,490,000</p>
                                </td>
                                <td>
                                    <p>$1,310,130,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 36.98%</span></td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 31.09%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc DASH" title="DASH"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Dash</a></h6>
                                    <small class="text-muted">DASH</small>
                                </td>
                                <td>
                                    <p>$865.25</p>
                                </td>
                                <td>
                                    <p>$6,778,308,110</p>
                                </td>
                                <td>
                                    <p>$193,430,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 30.80%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -16.40%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc EOS" title="EOS"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> EOS</a></h6>
                                    <small class="text-muted">EOS</small>
                                </td>
                                <td>
                                    <p>$10.50</p>
                                </td>
                                <td>
                                    <p>$6,460,374,540</p>
                                </td>
                                <td>
                                    <p>$1,566,567,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 25.88%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -6.45%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc XMR" title="XMR"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Monero</a></h6>
                                    <small class="text-muted">XMR</small>
                                </td>
                                <td>
                                    <p>$336.10</p>
                                </td>
                                <td>
                                    <p>$5,249,235,889</p>
                                </td>
                                <td>
                                    <p>$176,640,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 28.77%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -9.98%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc ETC" title="ETC"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Ethereum Classic</a></h6>
                                    <small class="text-muted">ETC</small>
                                </td>
                                <td>
                                    <p>$31.38</p>
                                </td>
                                <td>
                                    <p>$3,189,936,842</p>
                                </td>
                                <td>
                                    <p>$550,173,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 24.95%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -8.36%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc QTUM" title="QTUM"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Qtum</a></h6>
                                    <small class="text-muted">QTUM</small>
                                </td>
                                <td>
                                    <p>$38.28</p>
                                </td>
                                <td>
                                    <p>$2,717,991,874</p>
                                </td>
                                <td>
                                    <p>$878,043,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 26.85%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -21.15%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc LSK" title="LSK"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Lisk</a></h6>
                                    <small class="text-muted">LSK</small>
                                </td>
                                <td>
                                    <p>$23.75</p>
                                </td>
                                <td>
                                    <p>$2,384,607,027</p>
                                </td>
                                <td>
                                    <p>$94,234,400</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 38.85%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -9.40%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc OMG" title="OMG"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> OmiseGO</a></h6>
                                    <small class="text-muted">OMG</small>
                                </td>
                                <td>
                                    <p>$18.89</p>
                                </td>
                                <td>
                                    <p>$1,986,950,969</p>
                                </td>
                                <td>
                                    <p>$101,699,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 38.23%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -17.34%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc USDT" title="USDT"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Tether</a></h6>
                                    <small class="text-muted">USDT</small>
                                </td>
                                <td>
                                    <p>$1.09</p>
                                </td>
                                <td>
                                    <p>$1,622,345,408</p>
                                </td>
                                <td>
                                    <p>$4,241,850,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 1.23%</span></td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 3.53%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc XVG" title="XVG"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Verge</a></h6>
                                    <small class="text-muted">XVG</small>
                                </td>
                                <td>
                                    <p>$0.15</p>
                                </td>
                                <td>
                                    <p>$1,633,900,911</p>
                                </td>
                                <td>
                                    <p>$231,147,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 79.25%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -25.09%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc ZEC" title="ZEC"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Zcash</a></h6>
                                    <small class="text-muted">ZEC</small>
                                </td>
                                <td>
                                    <p>$530.42</p>
                                </td>
                                <td>
                                    <p>$1,616,048,635</p>
                                </td>
                                <td>
                                    <p>$145,864,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 25.35%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -20.35%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc STRAT" title="STRAT"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Stratis</a></h6>
                                    <small class="text-muted">STRAT</small>
                                </td>
                                <td>
                                    <p>$15.55</p>
                                </td>
                                <td>
                                    <p>$1,533,582,626</p>
                                </td>
                                <td>
                                    <p>$55,036,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 34.30%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -8.87%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc ARDR" title="ARDR"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Ardor</a></h6>
                                    <small class="text-muted">ARDR</small>
                                </td>
                                <td>
                                    <p>$1.49</p>
                                </td>
                                <td>
                                    <p>$1,482,874,960</p>
                                </td>
                                <td>
                                    <p>$261,149,070</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 29.63%</span></td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 7.35%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc BCN" title="BCN"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Bytecoin</a></h6>
                                    <small class="text-muted">BCN</small>
                                </td>
                                <td>
                                    <p>$0.05</p>
                                </td>
                                <td>
                                    <p>$1,455,618,587</p>
                                </td>
                                <td>
                                    <p>$10,801,700</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 54.18%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -21.18%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc STEEM" title="STEEM"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Steem</a></h6>
                                    <small class="text-muted">STEEM</small>
                                </td>
                                <td>
                                    <p>$4.48</p>
                                </td>
                                <td>
                                    <p>$1,108,959,745</p>
                                </td>
                                <td>
                                    <p>$25,057,000</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 42.82%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -6.88%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc BTS" title="BTS"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> BitShares</a></h6>
                                    <small class="text-muted">BTS</small>
                                </td>
                                <td>
                                    <p>$0.35</p>
                                </td>
                                <td>
                                    <p>$947,954,004</p>
                                </td>
                                <td>
                                    <p>$89,824,706</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 35.09%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -39.44%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc DOGE" title="DOGE"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Dogecoin</a></h6>
                                    <small class="text-muted">DOGE</small>
                                </td>
                                <td>
                                    <p>$0.06</p>
                                </td>
                                <td>
                                    <p>$941,142,759</p>
                                </td>
                                <td>
                                    <p>$63,248,190</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 39.89%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -30.99%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc WAVES" title="WAVES"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Waves</a></h6>
                                    <small class="text-muted">WAVES</small>
                                </td>
                                <td>
                                    <p>$8.79</p>
                                </td>
                                <td>
                                    <p>$877,976,009</p>
                                </td>
                                <td>
                                    <p>$39,506,890</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 22.66%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -23.46%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc REP" title="REP"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Augur</a></h6>
                                    <small class="text-muted">REP</small>
                                </td>
                                <td>
                                    <p>$66.98</p>
                                </td>
                                <td>
                                    <p>$736,499,700</p>
                                </td>
                                <td>
                                    <p>$30,136,309</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 31.97%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -36.96%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc KMD" title="KMD"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Komodo</a></h6>
                                    <small class="text-muted">KMD</small>
                                </td>
                                <td>
                                    <p>$6.91</p>
                                </td>
                                <td>
                                    <p>$708,479,055</p>
                                </td>
                                <td>
                                    <p>$13,785,890</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 48.68%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -11.30%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc DGB" title="DGB"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> DigiByte</a></h6>
                                    <small class="text-muted">DGB</small>
                                </td>
                                <td>
                                    <p>$0.09</p>
                                </td>
                                <td>
                                    <p>$665,577,230</p>
                                </td>
                                <td>
                                    <p>$30,605,200</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 40.37%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -30.84%</span></td>
                            </tr>
                            <tr>
                                <td><span><a href="JavaScript: void(0);"><i class=" display-7 cc ARK" title="ARK"></i></a></span></td>
                                <td>
                                    <h6><a class="font-medium link" href="JavaScript: void(0);"> Ark</a></h6>
                                    <small class="text-muted">ARK</small>
                                </td>
                                <td>
                                    <p>$6.68</p>
                                </td>
                                <td>
                                    <p>$652,059,748</p>
                                </td>
                                <td>
                                    <p>$12,056,300</p>
                                </td>
                                <td class="no-wrap"><span class="label label-success"><i class="fa fa-chevron-up"></i> 42.47%</span></td>
                                <td class="no-wrap"><span class="label label-danger"><i class="fa fa-chevron-down"></i> -24.49%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')
 @parent

  <script>

  </script>
@endsection
