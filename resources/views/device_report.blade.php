@extends('layouts.master')

@section('title', 'Device List')

@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">


                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
                          <th>Device location</th>
                          <th> Incident Type</th>
                          <th>Incident Image</th>
                          <th>ANPR Number</th>



                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>Odisha</td>
                          <td>XYZ</td>
                          <td>
                           <div class="incident_img">
                            <div class="image-gallery">
                              <div class="image-items">
                                <img src="https://assets.codepen.io/7287362/IMG_0168.png" alt="Floating earth and stone,
                                  Houses perch on cliff's embrace,
                                  Sky and clouds their throne." data-full="https://assets.codepen.io/7287362/IMG_0168.png">
                              </div>

                              <!-- Repeat -->
                            </div>
                           </div>
                          </td>
                          <td>123</td>

                        </tr>


                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
@endsection
