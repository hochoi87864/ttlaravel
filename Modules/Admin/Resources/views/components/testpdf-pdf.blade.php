<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
    @font-face {
            font-family: 'DejaVuSans';
            src: url({{ storage_path('fonts/DejaVuSans.ttf') }});
            font-weight: Boldest.; 
            font-style: normal;
         }
        body{
            padding: ;
        }
    </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="font-family:DejaVuSans">
        <?php
        $i=1;
        $total_earn_money=0;
        $statistical_date_start = date("d-m-Y H:i:s", strtotime($statistical_date_start));
        $statistical_date_end = date("d-m-Y H:i:s", strtotime($statistical_date_start));
        ?>
        
        <center><h3>BÁO CÁO DOANH THU</h3></center>
        <div>
            Người xuất: {{Auth::user()->name}}<br/>
            Chức vụ: Admin
        </div>
        <p>
            Thống kê bán sản phẩm từ {{$statistical_date_start}} đến {{$statistical_date_end}}.
        </p>
        <p>
            {{-- @include('admin::components.listStatistical') --}}
            <table class="table table-bordered">
                <thead class="thead-dark">
                        <th  >STT</th>
                        <th   style="">Tên Sản phẩm</th>
                        <th  >Số lượng</th>
                        <th  >Đơn giá</th>
                        <th  >Giảm giá</th>
                        <th  >Thành tiền</th>
                        <th  >Người mua</th>
                        <tr></tr>
                </thead>
                <tbody>
                   
                @foreach($transactions as $transaction )
                    @foreach($transaction->Order as $order)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$order->Product->pro_name}}</td>
                            <td>{{$order->or_qty}}</td>
                            <td>{{$order->or_price}}</td>
                            <td>{{$order->or_sale>0?($order->or_price*(100-$order->or_sale)/100)."(-".$order->or_sale."%)":"Không giảm giá"}}</td>
                            <td>{{$order->or_sale>0?$order->or_qty*($order->or_price*(100-$order->or_sale)/100):$order->or_qty*$order->or_price}}</td>
                            <td>{{$transaction->User->name}}</td>
                            <?php $total_earn_money = $total_earn_money + ($order->or_sale>0?$order->or_qty*($order->or_price*(100-$order->or_sale)/100):$order->or_qty*$order->or_price) ?>   
                        </tr>
                    @endforeach    
                @endforeach       
                        <tr>
                            <td colspan="5" style="text-align: center;font-weight: bold;font-size: 20px;">Tổng tiền:</td>
                            <td colspan="2" style="text-align: center;font-weight: bold;font-size: 20px;">{{number_format($total_earn_money,'0',',','.')}} VNĐ</td>
                        </tr>
                </tbody>
            </table>
        </p>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
   
</html>