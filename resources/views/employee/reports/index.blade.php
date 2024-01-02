@extends('dashboard')
@section('employee') 





<div class="col-md-12">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Make Report</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Customer Name</th>
                      @foreach($actions as $action)
                      <th>{{$action->name}}</th>
                       @endforeach
                     

                     <th>ADD Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  @foreach($customers as $key => $customer)
    <tr>
      <td>{{$key+1}}.</td>
      <td>{{$customer->name}}</td>
  
      
        <form action="{{route('reports.store.action')}}" method="POST">
          @csrf
          @foreach($actions as $action)
          <td>     
    <input 
        type="checkbox" 
        name="selectedActions[]"
        id="CheckDefault{{$action->id}}" 
        value="{{$action->id}}"
        {{ $customer->customerHasActions($customer->id, $action->id) ? 'checked disabled' : '' }}
    >
@endforeach

          
          <input type="hidden" name="customerId" value="{{$customer->id}}">
          <td><button type="submit" class="btn btn-success">ADD</button><td>
        </form>
      </td>
    </tr>
    
            @endforeach
                  </tbody>
                </table>
              </div>
            </div>
</div>


















@endsection