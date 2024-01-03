@extends('admin.index')
@section('admin')

<div class="col-md-12">
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">New Employee</h3>
  </div>

<form action="{{ route('admin.store.employee') }}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="employeeName">Employee Name</label>
            <input type="text" name="name" class="form-control" placeholder=" Name">
          </div>
        </div>

        <div class="col-md-6">

          <div class="form-group">
            <label for="employeeEmail">Employee Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="employeePassword">Employee Password</label>
            <input type="password" name="password" class="form-control" placeholder=" Password">
          </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
  <label for="roleSelect">Role</label>
  <select class="custom-select form-control-border border-width-2" id="roleSelect" name="role" required>
    <option value="" disabled selected>Choose a role</option>
    <option value="admin">Admin</option>
    <option value="employee">Employee</option>
  </select>
</div>



          </div>

        </div>

        <div>
      <button type="submit" class="btn btn-primary">Add New Employee</button>
    </div>
      </div>
    </div>
    <!-- /.card-body -->


  </form>
</div>

</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
      const password = document.querySelector('input[name="password"]').value;

      if (password.length < 8) {
        alert('Password should be at least 8 characters long.');
        event.preventDefault(); // Prevent form submission
      }
    });
  });
</script>

@endsection