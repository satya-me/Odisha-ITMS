@extends('layouts.master')

@section('title', 'Device List')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                        <div class="justify-content-end d-flex">
                            <button type="button" class="btn btn-primary btn-icon-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-plus" viewBox="0 0 16 16">
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                </svg>
                                Add Device
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <!-- Additional content can be added here -->
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button"
                                    id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                    <a class="dropdown-item" href="#">January - March</a>
                                    <a class="dropdown-item" href="#">March - June</a>
                                    <a class="dropdown-item" href="#">June - August</a>
                                    <a class="dropdown-item" href="#">August - November</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin transparent">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Device List</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Location Name</th>
                                        <th>Stretch Name</th>
                                        <th>Camera Type</th>
                                        <th>MAC ID</th>
                                        <th>Installation Date</th>
                                        <th>Expire Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = 1;
                                    @endphp
                                    @foreach ($device_data as $item)
                                        <tr>
                                            <td>{{ $sl++ }}</td>
                                            <td>{{ $item->location_name }}</td>
                                            <td>{{ $item->street_name }}</td>
                                            <td>{{ $item->camera_type }}</td>
                                            <td>{{ $item->mac_id }}</td>
                                            <td>{{ $item->installation_date }}</td>
                                            <td>{{ $item->expire_date }}</td>
                                            <td>
                                                <iconify-icon id="more-btn" class="more-btn"
                                                    icon="uiw:more"></iconify-icon>
                                                <div id="action-menu" class="dropdown-content">
                                                    <li>
                                                        <button type="button" class="btn btn-sm btn-toggle"
                                                            data-toggle="button" aria-pressed="false" autocomplete="off">

                                                        </button>
                                                    </li>
                                                    <li>
                                                        <a href="" type="button" class="edit">
                                                            Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="devicereport.html" class="view">
                                                            View
                                                        </a>
                                                    </li>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        document.getElementById('more-btn').addEventListener('click', function() {
            console.log('hi');
            var menu = document.getElementById('action-menu');
            if (menu.style.display === 'block') {
                menu.style.display = 'none';
            } else {
                menu.style.display = 'block';
            }
        });

        // Optionally, hide the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('#more-btn') && !event.target.closest('#action-menu')) {
                var dropdowns = document.getElementsByClassName('dropdown-content');
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.style.display === 'block') {
                        openDropdown.style.display = 'none';
                    }
                }
            }
        };
    </script>
@endsection
