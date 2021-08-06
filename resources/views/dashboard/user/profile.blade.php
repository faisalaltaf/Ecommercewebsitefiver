@extends('dashboard.patient.layout.main')


@section('content')


 <div class="content">
        <div class="container-fluid">
          <div class="custom row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
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
                          Rule
                        </th>
                      </tr></thead>
                      <tbody>
                        <tr>
                     <td>{{Auth::guard('web')->user()->id}}</td>
                     <td>{{Auth::guard('web')->user()->name}}</td>
                     <td>{{Auth::guard('web')->user()->phone}}</td>
                     <td>{{Auth::guard('web')->user()->email}}</td>
                     <td>{{Auth::guard('web')->user()->rule}}</td>
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