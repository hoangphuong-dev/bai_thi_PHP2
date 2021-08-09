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
    
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h1>THÔNG TIN KHÁCH HÀNG</h1>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                   
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                    
                    

                <li class="nav-item active">
                  <a class="nav-link" href="">Sale </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{route('customers.create')}}">Thêm khách hàng</a>
                </li>                
              </ul>

                <form class="form-inline my-2 my-lg-0">
                    
                    <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" name="search" value="{{ $search }}">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>

            </div>
            </nav>
                    
        </div>
    </div>
    </div>
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Ảnh đại diện</th>
                  <th scope="col">Họ tên</th>
                  <th scope="col">Giới tính</th>
                  <th scope="col">SĐT</th>
                  <th scope="col">Email</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($listCustomers as $customers)
                <tr>
                  
                  <th scope="row">{{ $customers->id }}</th>
                  <td><img src="{{ asset('images/' . $customers->anhdaidien) }}" width="100px"></td>
                  <td>{{ $customers ->hoten }}</td>
                  <td>{{ $customers->gioitinh == 1? "Nam" : "Nữ" }}</td>
                  <td>{{ $customers ->sdt }}</td>
                  <td>{{ $customers ->email }}</td>
                  
                </tr>
                @endforeach


              </tbody>
            </table>
        </div>
    </div>
    </div>
</body>
</html>         