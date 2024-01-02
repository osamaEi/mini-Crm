@extends('dashboard')
@section('employee') 




      <div class="modal-body">
      <div class="card card-primary">
        
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('employee.store_customers')}}" enctype="multipart-form/data" method="post">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Customer Name</label>
                    <input type="name" name="name" class="form-control" iplaceholder="Enter New Action">
                  </div>

    
                  <div class="form-group">
                 
                  </div>
            
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add New Customer</button>
                </div>
              </form>
            </div>


</div>
</div>      </div>
    
    </div>
 












@endsection