@extends('layouts.master')

@section('title', 'add device')

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

    {{-- <form action="{{ route('device_list_store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="location_name">Location Name</label>
            <input type="text" class="form-control" id="location_name" name="location_name" required>
        </div>
        <div class="form-group">
            <label for="street_name">Street Name</label>
            <input type="text" class="form-control" id="street_name" name="street_name" required>
        </div>
        <div class="form-group">
            <label for="camera_type">Camera Type</label>
            <input type="text" class="form-control" id="camera_type" name="camera_type" required>
        </div>
        <div class="form-group">
            <label for="mac_id">MAC ID</label>
            <input type="text" class="form-control" id="mac_id" name="mac_id" required>
        </div>
        <div class="form-group">
            <label for="installation_date">Installation Date</label>
            <input type="date" class="form-control" id="installation_date" name="installation_date" required>
        </div>
        <div class="form-group">
            <label for="expire_date">Expire Date</label>
            <input type="date" class="form-control" id="expire_date" name="expire_date" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> --}}
    <div class="row">
        <div class="col-md-10 grid-margin transparent mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Device </h4>

                    <form class="forms-sample"action="{{ route('device_list_store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="">Location Name</label>
                                    <input type="text" class="form-control" id="location_name" name="location_name" placeholder="Enter Location Name">
                                </div>
                            </div>
                           <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Street Name</label>
                                <input type="text" class="form-control" id="street_name" name="street_name" placeholder="Enter Street Name">
                            </div>
                           </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Camera Type</label>
                                    <input type="text" class="form-control" id="camera_type" name="camera_type" placeholder="Enter Camera Type">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">MAC ID</label>
                                    <input type="text" class="form-control" id="mac_id" name="mac_id" placeholder="Enter MAC ID">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Installation Date</label>
                                    <input type="date" class="form-control" id="installation_date" name="installation_date">
                                </div>
                            </div>

                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Expire Date</label>
                                    <input type="date" class="form-control" id="expire_date" name="expire_date">
                                </div>
                             </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
