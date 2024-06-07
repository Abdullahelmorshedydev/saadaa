@extends('admin.layouts.app')
@section('title', 'Venues')

@section('contentHeader', 'Venues')

@section('contentHeaderLink')
    <a href="{{ route('admin.venues.index') }}">All</a>
@endsection

@section('contentHeaderActive', 'Venues')

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
                                <th>Image</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Price</th>
                                <th>Organizer</th>
                                <th>Event</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($venues as $venue)
                                <tr>
                                    <th>{{ $venues->firstItem() + $loop->index }}</th>
                                    <td>
                                        <img src="{{ asset($venue->image ? 'storage/' . $venue->image->image : 'admin/images/morshedy.jpg') }}"
                                            width="50px" alt="">
                                    </td>
                                    <td>{{ $venue->name }}</td>
                                    <td>{{ Str::limit($venue->address, 30, '...') }}</td>
                                    <td>{{ $venue->price }}</td>
                                    <td>{{ $venue->user->name }}</td>
                                    <td>{{ $venue->event->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.venues.edit', $venue->id) }}"
                                            class="btn btn-info">Update</a>
                                        <form action="{{ route('admin.venues.destroy', $venue->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $venues->links() }}
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection

@push('script')
@endpush
