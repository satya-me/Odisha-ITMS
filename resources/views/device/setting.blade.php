@extends('layouts.master')

@section('title', 'Setting')

@section('css')
    <!-- You can add custom CSS for this specific page here -->
@endsection

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">General Setting</h4>
                <form class="form-sample">
                    <p class="card-description text-white bg-primary pl-1">Plate Recognizer</p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">API Token:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="PLATE_API_TOKEN" name="PLATE_API_TOKEN"
                                        value="{{ env('PLATE_API_TOKEN') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">API</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input PLATE_API_STATUS"
                                                name="PLATE_API_STATUS" id="PLATE_API_STATUS1" value="Enable"
                                                {{ env('PLATE_API_STATUS') == 'Enable' ? 'checked' : '' }}>
                                            Enable
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input PLATE_API_STATUS"
                                                name="PLATE_API_STATUS" id="PLATE_API_STATUS2" value="Disable"
                                                {{ env('PLATE_API_STATUS') == 'Disable' ? 'checked' : '' }}>
                                            Disable
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="card-description text-white bg-dark pl-1">Address</p>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address 1</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">State</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address 2</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Postcode</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Country</label>
                                <div class="col-sm-9">
                                    <select class="form-control">
                                        <option>America</option>
                                        <option>Italy</option>
                                        <option>Russia</option>
                                        <option>Britain</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#PLATE_API_TOKEN').on('change', function() {
                const token = $(this).val();

                $.ajax({
                    url: "{{ route('update-token') }}",
                    type: 'POST',
                    data: {
                        PLATE_API_TOKEN: token
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {

                        // alert(response.message);
                        toasts.push({
                            title: 'Success',
                            content: response.message,
                            style: 'success'
                        });
                    },
                    error: function(response) {
                        // alert('Failed to update token');
                        toasts.push({
                            title: 'Error',
                            content: 'Failed to update token',
                            style: 'error'
                        });
                    }
                });
            });

            $('.PLATE_API_STATUS').on('change', function() {
                const token = $(this).val();

                $.ajax({
                    url: "{{ route('update-token-status') }}",
                    type: 'POST',
                    data: {
                        PLATE_API_STATUS: token
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {

                        // alert(response.message);
                        toasts.push({
                            title: 'Success Toast',
                            content: response.message,
                            style: 'success'
                        });
                    },
                    error: function(response) {
                        // alert('Failed to update token');
                        toasts.push({
                            title: 'Error Toast',
                            content: 'Failed to update token',
                            style: 'error'
                        });
                    }
                });
            });
        });
    </script>
@endsection
