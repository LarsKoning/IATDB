<!DOCTYPE html>
<html>
<head>
    <title>Add An Review</title>
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
      Add Review
    </div>
    <div class="card-body">
      <form name="addReview" id="addReview" method="post" action="/review/{{$address}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Review</label>
          <input type="text" id="review" name="review" class="form-control" required="">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Rating</label>
          <select name="rating" id="rating" class="form-control" required="">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>