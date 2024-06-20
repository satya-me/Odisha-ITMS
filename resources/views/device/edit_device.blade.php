@extends('layouts.master')

@section('title', 'Edit device')

@section('css')
<!-- You can add custom CSS for this specific page here -->
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-10 grid-margin transparent mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Device </h4>

                    <form class="forms-sample" action="{{ route('update_device', $device->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Location Name</label>
                                    <input type="text" class="form-control" id="location_name" name="location_name" value="{{ $device->location_name }}">
                                </div>
                            </div>

                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Street Name</label>
                            <input type="text" class="form-control" id="street_name" name="street_name" value="{{ $device->street_name }}">
                        </div>
                        </div>

                            <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Camera Type</label>
                            <input type="text" class="form-control" id="camera_type" name="camera_type" value="{{ $device->camera_type }}">
                        </div>
                            </div>
                            <div class="col-md-6">
                        <div class="form-group">
                            <label for="">MAC ID</label>
                            <input type="text" class="form-control" id="mac_id" name="mac_id" value="{{ $device->mac_id }}">
                        </div>
                            </div>
                            <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Installation Date</label>
                            <input type="date" class="form-control" id="installation_date" name="installation_date" value="{{ $device->installation_date }}">
                        </div>
                            </div>
                            <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Expire Date</label>
                            <input type="date" class="form-control" id="expire_date" name="expire_date" value="{{ $device->expire_date }}">
                        </div>
                            </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
