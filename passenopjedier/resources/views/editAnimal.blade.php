<!DOCTYPE html>
<html>
<head>
    <title>Edit Animals</title>
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
      Edit Animal Data
    </div>
    <div class="card-body">
      <form name="addAnimal" id="addAnimal" method="post" action="/edit-form/{{$animal->animalID}}">
       @csrf
       @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" id="name" name="name" value="{{$animal->name}}" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Age</label>
          <input name="age" class="form-control" value="{{$animal->age}}" required="">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Sort</label>
          <input type="text" id="sort" name="sort" value="{{$animal->sort}}" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Note</label>
          <input type="text" id="note" name="note" value="{{$animal->note}}" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>