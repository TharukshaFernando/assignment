@extends('layouts.app_layout')

@section('content')
    <div class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Place an Order</h3>
            </div>
            <div class="box-body">

                <div class="container">
                    <div class="col-md-10">

                                                <br>
                                                <form method="POST" action="{{ url('/order_create') }}"
                                                      accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    <div class="invoice-box">
                                                        <table class="table table-striped table-responsive">

                                                            <tr class="heading">
                                                                <td style="width: 10%">  </td>

                                                                <td>  Item</td>

                                                                <td>  Unit Cost (LKR) </td>

                                                                <td>Quantity </td>

                                                                <td> Sub Total (LKR)</td>
                                                            </tr>

                                                            <tr class="item">
                                                                <td>
                                                                    <input onclick="cal_table()" id="package1"
                                                                           name="package1" value="package1" type="checkbox">
                                                                </td>
                                                                <td>   Package 1 </td>

                                                                <td> <input id="cost1" name="cost1" type="number" value="250" readonly /></td>

                                                                <td><input id="qty1" name="qty1" type="number" value="1" min="0"/></td>

                                                                <td>   <input id="sub_tot1" name="sub_tot1" type="number" readonly /></td>
                                                            </tr>

                                                            <tr class="item">
                                                                <td>
                                                                    <input onclick="cal_table()" id="package2" name="package2" value="package2" type="checkbox">
                                                                </td>
                                                                <td>
                                                                    Package 2
                                                                </td>

                                                                <td>
                                                                     <input id="cost2" name="cost2" type="number" value="350" readonly />
                                                                </td>

                                                                <td>
                                                                    <input id="qty2" name="qty2" type="number" value="1" min="0"/>
                                                                </td>

                                                                <td >
                                                                     <input id="sub_tot2" name="sub_tot2" type="number" readonly />
                                                                </td>
                                                            </tr>

                                                            <tr class="item">
                                                                <td>
                                                                    <input onclick="cal_table()" id="package3" name="package3" value="package3" type="checkbox">
                                                                </td>
                                                                <td>
                                                                    Package 3
                                                                </td>

                                                                <td>
                                                                     <input id="cost3" name="cost3" type="number" value="500" readonly/>
                                                                </td>

                                                                <td>
                                                                    <input id="qty3" name="qty3" type="number" value="1" min="0"/>
                                                                </td>

                                                                <td >
                                                                     <input id="sub_tot3" name="sub_tot3" type="number" readonly />
                                                                </td>
                                                            </tr>

                                                            <tr class="total">
                                                                <td colspan="3"></td>

                                                                <td>
                                                                    Total: LKR 0.00

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="4">
                                                                    <input id="total" name="total" type="hidden" />
                                                                    <button style="float: right" type="submit" class="btn
                                                                    btn-primary">Place an
                                                                        Order</button>
                                                                </td>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </form>
                                                <br>
                                            </div>
                                    </div>
                                     </div>
                                </div>
                    </div>
                </div>
    </section>

@endsection
