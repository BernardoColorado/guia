<!DOCTYPE html>
<html lang="sp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Registrarse</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ base_url() }}/extra/css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-6 mx-auto my-auto">
        <div class="card">

          <div class="card-header">
            <h4 class="text-center" >REGISTRO DE USUARIOS</h4>
          </div>

          <div class="card-body">
            <form class="row" action="{{ base_url() }}/user/signup" method="POST">

              <div class="input-group my-4 col-lg-12">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="text" class="form-control" name="nombre" placeholder="nombre" required>
                <input type="text" class="form-control" name="apellido_paterno" placeholder="apellido paterno" required>
                <input type="text" class="form-control" name="apellido_materno" placeholder="apellido materno" required>
              </div>

              <div class="input-group my-4 col-lg-12">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="email" class="form-control" name="email" placeholder="email" required>
              </div>

              <div class="input-group my-4 col-lg-12">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="password" class="form-control" name="password" placeholder="password" required>
              </div>

              <div class="input-group my-4 col-lg-12">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="password" class="form-control" name="password" placeholder="password" required>
              </div>

              <div class="form-group col-lg-12">
                <button class="btn btn-block" type="submit">REGISTRARSE</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>