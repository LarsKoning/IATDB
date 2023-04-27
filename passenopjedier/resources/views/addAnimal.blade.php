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
      Add Animal
    </div>
    <div class="card-body">
      <form name="addAnimal" id="addAnimal" method="post" action="{{url('store-form')}}" enctype="multipart/form-data">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" id="name" name="name" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Age</label>
          <textarea name="age" class="form-control" required=""></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Sort</label>
          <input type="text" id="sort" name="sort" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Note</label>
          <input type="text" id="note" name="note" class="form-control" required="">
        </div>

        <div class="form-group">
          <input type="file" id="myFile" name="filename" accept="image/png, image/jpeg" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>