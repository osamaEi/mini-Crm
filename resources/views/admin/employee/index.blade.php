@extends('admin.index')
@section('admin') 









<div class="card">
              <div class="card-header">
                <h3 class="card-title">Employee List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Employee Name</th>
                      <th>His Role</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($employees as $key => $employee)
                    <tr>
                      <td>{{$key+1}}.</td>
                      <td>{{$employee->name}}</td>
                      <td>{{$employee->role}}</td>
           
                   
                    </tr>
            @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>




@endsection