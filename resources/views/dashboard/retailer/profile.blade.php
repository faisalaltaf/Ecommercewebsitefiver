@extends('dashboard.doctor.layout.main')


@section('content')


 <div class="content">
        <div class="container-fluid">
          <div class="custom row" style="display:inline-table;">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Doctor Profile</h4>
                  <p class="card-category">                      <td>{{Auth::guard('doctor')->user()->name}}</td>
</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Phone No
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Hospital
                        </th>
                      </tr></thead>
                      <tbody>
                        <tr>
                     <td>{{Auth::guard('doctor')->user()->id}}</td>
                     <td>{{Auth::guard('doctor')->user()->name}}</td>
                     <td>{{Auth::guard('doctor')->user()->phone}}</td>
                     <td>{{Auth::guard('doctor')->user()->email}}</td>
                     <td>{{Auth::guard('doctor')->user()->hospital}}</td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
         
          </div>
        </div>
      </div>

        @endsection