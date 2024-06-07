@extends('admin.layouts.app')
@section('title', 'Edit Venue')

@section('contentHeader', 'Edit Venue')

@section('contentHeaderLink')
    <a href="{{ route('admin.venues.index') }}">All</a>
@endsection

@section('contentHeaderActive', 'Edit Venue')

@push('style')
@endpush

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <!-- form start -->
                <form action="{{ route('admin.venues.update', $venue->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" value="{{ old('name', $venue->name) }}"
                                class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" name="address" value="{{ old('address', $venue->address) }}"
                                class="form-control" id="exampleInputEmail1" placeholder="Enter address">
                        </div>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="text" name="price" value="{{ old('price', $venue->price) }}"
                                class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
                        </div>
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <label for="type1">Event</label>
                            <select name="event_id" id="type1" class="form-control">
                                <option disabled selected>Choose Event
                                </option>
                                @foreach ($events as $event)
                                    <option {{ old('event_id', $venue->event_id) == $event->id ? 'selected' : '' }} value="{{ $event->id }}">
                                        {{ $event->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('event_id')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
    </div>
@endsection

@push('script')
@endpush
