<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
<form class="container" method="post" action="/update">
{{csrf_field()}}
<h1>Update Member</h1>

<input type="hidden" name="id" class="form-control"  value="{{$data->id}}">
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" name="up_name" class="form-control" id="exampleInputPassword1" placeholder="Name" value="{{$data->name}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="up_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{$data->email}}">
  </div>
  <div>
    <label for="exampleInputEmail1">Status</label>
    <select class="form-select" aria-label="Default select example" name="up_status">
        <option selected>Status</option>
        <option value="Admin">Admin</option>
        <option value="Re_Seller">Re_Seller</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile</label>
    <input type="number" name="up_mobile" class="form-control" id="exampleInputPassword1" placeholder="Mobile" value="{{$data->mobile}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" name="up_address" class="form-control" id="exampleInputPassword1" placeholder="Address" value="{{$data->address}}">
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Username</label>
    <input type="text" name="up_username" class="form-control" id="exampleInputPassword1" placeholder="Username" value="{{$data->username}}">
  </div> -->
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="up_password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{$data->password}}">
  </div> -->
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</body>
</html>
