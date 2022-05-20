<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background: black;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #BA68C8
    }

    .profile-button {
      background: rgb(99, 39, 120);
      box-shadow: none;
      border: none
    }

    .profile-button:hover {
      background: #682773
    }

    .profile-button:focus {
      background: #682773;
      box-shadow: none
    }

    .profile-button:active {
      background: #682773;
      box-shadow: none
    }

    .back:hover {
      color: #682773;
      cursor: pointer
    }

    .labels {
      font-size: 11px
    }

    .add-experience:hover {
      background: #BA68C8;
      color: #fff;
      cursor: pointer;
      border: solid 1px #BA68C8
    }
  </style>
</head >

<body class="w-100 p-3">

  <div class="container rounded bg-white mt-5 mb-5 ">
    <div class="row">
      <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
            src="./img/test.png"><span
            class="font-weight-bold">Amelly</span><span class="text-black-50">amelly12@bbb.com</span><span> </span>
        </div>
        <div class="mt-5 text-center"><a href="userprofiletable.php"><button class="btn btn-primary profile-button" type="button"> My Orders</button></a></div>
      </div>
      
      <div class="col-md-7">
        <div class="p-3 py-5">
        <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        
      </tr>
    </tbody>
  </table>
 
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>

</body>

</html>