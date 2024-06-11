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
                                <th>Event Name</th>
                                <th>Venue Name</th>
                                <th>Price</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->items as $item)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $item->venue->event->name }}</td>
                                    <td>{{ $item->venue->name }}</td>
                                    <td>{{ $item->venue->price }}</td>
                                    <td>{{ $item->date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@push('script')
@endpush
