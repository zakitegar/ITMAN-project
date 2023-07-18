@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Order List') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-sm table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Service</th>
                                <th>User</th>
                                <th>Status</th>
                                <th>Total Price</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>
                                        @foreach($order->service_id as $s)
                                            @php
                                            $ser = \App\Models\Service::findOrFail($s);
                                            @endphp
                                            <span class="badge bg-info"> {{ $ser->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>Rp. {{ number_format($order->total_price, 2) }}</td>
                                    <td>{{ $order->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
