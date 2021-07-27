@extends('layouts.app_layout')

@section('content')
    <div class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">More Details</h3>
            </div>
            <div class="box-body">

                <div class="container">
                    <div class="col-md-10">


                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Item</th>
                                <th scope="col">Cost</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Sub Total</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order_page as $order)
                                <tr>
                                    <td>
                                        {{ $order->item }}
                                    </td>
                                    <td>
                                        {{ $order->cost }}
                                    </td>
                                    <td>
                                        {{ $order->qty }}
                                    </td>
                                    <td>
                                        {{ $order->sub_total }}
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
