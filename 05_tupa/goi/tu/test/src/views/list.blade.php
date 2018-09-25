<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quan li san pham</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<a class="btn btn-info" href="{{url('package/create')}}">Add</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  	@foreach($data as $row)
    <tr>
      <th scope="row">{{$row['id']}}</th>
      <td>{{$row['name']}}</td>
      <td>{{$row['price']}}</td>
      <td><a class="btn btn-primary" href="{{route('package.edit',$row['id'])}}">Edit</a></td>
      <td>
      	<form method="post" action="{{ route('package.destroy',$row['id']) }}">
			@method('delete')
			@csrf
          <button onclick="return window.confirm('Are you sure')" class="glyphicon glyphicon-remove-sign btn btn-danger">Delete</button>
    	</form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>