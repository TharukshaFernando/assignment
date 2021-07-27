<html>
<header>

    <style>
        table{
            margin:200px auto;
            text-align:center;
            background:#fff;
            border:4px solid dodgerblue;
            padding:2px;
        }
        th, td{
            border:2px solid dodgerblue;
            background:#fff;
            cursor:default;
            padding:3px;
        }
        .butonlar{
            cursor:pointer;
            background:red;
            color:white;
            text-align:center;
            outline:none;
            border:none;
            padding:10px 20px;
            font-weight:bolder;
            border-radius:4px;
        }
    </style>

</header>
<body>
<?php
$total = 0;
$order_page  = \App\Models\Order::where('order_id', $order_id)->where('item', "!=", null)->get();

?>

<h3> Your order is placed</h3>
<p>Order ID: {{ $order_page[0]->order_id }}</p>

<table class="table">
    <thead>
    <tr>
        <th>Item</th>
        <th>Cost</th>
        <th>Qty</th>
        <th>Sub Total</th>

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
            <div style="display: none">{{ $total += $order->sub_total }}</div>
        </tr>
    @endforeach
    </tbody>

</table>

<p>Total: {{ $total }}</p>
</body>
</html>
