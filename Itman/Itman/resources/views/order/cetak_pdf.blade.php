<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
	</center>
 
    <table style="display:block;">
        <tr>
            <th>#</th>
            <th>Service</th>
            <th>User</th>
            <th>Status</th>
            <th>Total Price</th>
            <th>Created At</th>
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>
                    @foreach($order->service_id as $s)
                        @php
                        $ser = \App\Models\Service::findOrFail($s);
                        @endphp
                        <!-- <span class="badge bg-info"> </span> -->
                        {{ $ser->name }}
                    @endforeach
                </td>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->status }}</td>
                <td>Rp. {{ number_format($order->total_price, 2) }}</td>
                <td>{{ $order->created_at }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>