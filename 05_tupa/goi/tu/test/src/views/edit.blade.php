<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản Lý Học Sinh</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container" style="margin-top:20px">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Sửa San Pham</h3>
        </div>
        <div class="panel-body">
          <form method="post" action="{{route('package.update',$data['id'])}}">
            @method('put')
            @csrf
            <div class="form-group">
              <label for="lblHoTen">Ten San Pham</label>
              <input type="text" class="form-control" name="txtSP" value="{!! old('txtHoTen',isset($data) ? $data['name'] : null) !!}" />
            </div>
            <div class="form-group">
              <label for="lblToan">So Luong</label>
              <input type="text" class="form-control" name="txtSL" value="{!! old('txtToan',isset($data) ? $data['soluong'] : null) !!}" />
            </div>
            <button type="submit" class="btn btn-default">Sửa</button>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>