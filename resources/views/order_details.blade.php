@extends('layouts.app_layout')

@section('content')
    <div class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Order Details</h3>
            </div>
            <div class="box-body">

                <div class="container">
                    <div class="col-md-10">


                            <table class="table">
                              <thead>
                                     <tr>
                                         <th scope="col">Order Number</th>
                                         <th scope="col">Total Price</th>
                                         <th scope="col">More</th>
                                   </tr>
                              </thead>
                                <tbody>
                                @foreach($order_page as $order)
                                    <tr>
                                        <td>
                                            {{ $order->id }}
                                        </td>
                                        <td>
                                            {{ $order->total }}
                                        </td>
                                        <td>
                                            <a href="/more_details/{{ $order->id }}" class="btn btn-primary">View</a>
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
