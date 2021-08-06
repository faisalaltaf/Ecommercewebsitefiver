@extends('dashboard.admin.layout.main')


@section('content')
<!-- <h1>Profile</h1>

<p>{{Auth::guard('admin')->user()->email}}</p>
<p>{{Auth::guard('admin')->user()->phone}}</p>
     
 -->

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
                     <td>{{Auth::guard('admin')->user()->id}}</td>
                     <td>{{Auth::guard('admin')->user()->name}}</td>
                     <td>{{Auth::guard('admin')->user()->phone}}</td>
                     <td>{{Auth::guard('admin')->user()->email}}</td>
                     <td>{{Auth::guard('admin')->user()->rule}}</td>
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