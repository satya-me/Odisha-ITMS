<!DOCTYPE html>
<html>
    <head>
        <title>Edit Device</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h2>Edit Device</h2>
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

            <form action="{{ route('update_device', $device->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="location_name">Location Name</label>
                    <input type="text" class="form-control" id="location_name" name="location_name" value="{{ $device->location_name }}" required>
                </div>
                <div class="form-group">
                    <label for="street_name">Street Name</label>
                    <input type="text" class="form-control" id="street_name" name="street_name" value="{{ $device->street_name }}" required>
                </div>
                <div class="form-group">
                    <label for="camera_type">Camera Type</label>
                    <input type="text" class="form-control" id="camera_type" name="camera_type" value="{{ $device->camera_type }}" required>
                </div>
                <div class="form-group">
                    <label for="mac_id">MAC ID</label>
                    <input type="text" class="form-control" id="mac_id" name="mac_id" value="{{ $device->mac_id }}" required>
                </div>
                <div class="form-group">
                    <label for="installation_date">Installation Date</label>
                    <input type="date" class="form-control" id="installation_date" name="installation_date" value="{{ $device->installation_date }}" required>
                </div>
                <div class="form-group">
                    <label for="expire_date">Expire Date</label>
                    <input type="date" class="form-control" id="expire_date" name="expire_date" value="{{ $device->expire_date }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </body>
</html>
