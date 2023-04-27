<!DOCTYPE html>
<html>
<head>
    <title>Add An Animal</title>
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
      Add Search
    </div>
    <div class="card-body">
      <form name="addSearch" id="addSearch" method="post" action="{{url('store-forums', [$id])}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">From: </label>
          <input type="datetime-local" id="from" name="from" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">To: </label>
          <input type="datetime-local" id="to" name="to" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Payment </label>
          <input type="number" id="payment" name="payment" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>