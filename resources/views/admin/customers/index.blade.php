@extends('admin.index')
@section('admin') 





<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
Add New Customers</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card card-primary">
        
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('customer.store')}}" enctype="multipart-form/data" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="name" name="name" class="form-control" iplaceholder="Enter New Action">
                  </div>

                  <div class="form-group">
  <label for="roleSelect">Choose employee for customer</label>
  <select class="custom-select form-control-border border-width-2" id="roleSelect" name="employee">
    <option value="" disabled selected>Choose Employee</option>
    @foreach($employees as $employee)
    <option value="{{$employee->id}}">{{$employee->name}}</option>

    @endforeach
    
  </select>
</div>
                  
                  <div class="form-group">
                 
                  </div>
            
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


</div>
</div>      </div>
    
    </div>
  </div>
</div>











<div class="card">
              <div class="card-header">
                <h3 class="card-title">customers List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Customer Name</th>
                      <th>His Employee</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($customers as $key => $customer)
                    <tr>
                      <td>{{$key+1}}.</td>
                      <td>{{$customer->name}}</td>
                      <td>
       

                {{$customer->user->name}}
        </td>
                   
                    </tr>
            @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>




@endsection