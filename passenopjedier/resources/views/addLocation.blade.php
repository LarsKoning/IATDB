<!DOCTYPE html>
<html>
<head>
    <title>Add An Home</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Add Home
    </div>
    <div class="card-body">
      <form name="addLocation" id="addLocation" method="post" action="{{url('store-forms')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Address</label>
          <input type="text" id="address" name="address" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">City</label>
          <input name="city" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>