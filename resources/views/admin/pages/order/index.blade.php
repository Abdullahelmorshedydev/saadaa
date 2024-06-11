@extends('admin.layouts.app')
@section('title', 'Orders')

@section('contentHeader', 'Orders')

@section('contentHeaderLink')
    <a href="{{ route('admin.orders.index') }}">All</a>
@endsection

@section('contentHeaderActive', 'Orders')

@push('style')
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Phone</th>
                                <th>Items Count</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <th>{{ $orders->firstItem() + $loop->index }}</th>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->user->email }}</td>
                                    <td>{{ $order->user->phone }}</td>
                                    <td>{{ count($order->items) }}</td>
                                    <td>
                                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-info">Show</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $orders->links() }}
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@push('script')
@endpush
