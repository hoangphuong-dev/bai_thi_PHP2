<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thongtinkhachhang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

                <div class="card-header"><h1>Thêm khách hàng</h1></div>
                

                @if ($errors->any())

                    <div class="alert alert-danger">

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif      

                    <form method="POST" action="{{route('customers.store')}}" enctype='multipart/form-data'>

                        @csrf

                      <div class="form-group">

                        <label for="exampleInputEmail1">Ảnh đại diện</label>

                        <input type="file" class="form-control-file" name="anhdaidien">

                      </div>

                      <div class="form-group">

                        <label for="exampleInputEmail1">Họ tên</label>

                        <input type="text" class="form-control" value="{{old('hoten')}}" name="hoten" aria-describedby="emailHelp" placeholder="Họ tên">

                      </div>


                      <div class="form-group">

                        <label for="exampleInputEmail1">Giới tính</label>

                        <select name="gioitinh" class="custom-select">

                          <option value="0">Nam</option>

                          <option value="1">Nữ</option>

                        </select>

                      </div>

                      <div class="form-group">

                        <label for="exampleInputEmail1">SĐT</label>

                        <input type="text" data-role="tagsinput" class="form-control" value="{{old('sdt')}}" name="sdt"  aria-describedby="emailHelp" placeholder="">

                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>


                      <button type="submit" name="themtruyen" class="btn btn-primary">Thêm</button>

                    </form>


            </div>

        </div>

    </div>

</div>
</body>
</html>



