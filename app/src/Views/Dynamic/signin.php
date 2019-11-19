    {% extends 'Templates/external.php' %}

    {% block content %}
    <div class="row">
      <div class="col-md-12 col-lg-6 mx-auto my-auto">

        <div class="card">

          <div class="card-header">
            <h4 class="text-center" >INICIAR SESION</h4>
          </div>

          <div class="card-body">
            <form action="{{ base_url() }}/user/signin" method="POST">
            
              <div class="input-group my-4">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-user"></i></div>
                </div>
                <input type="email" class="form-control" name="email" placeholder="email" required>
              </div>

              <div class="input-group my-4">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-key"></i></div>
                </div>
                <input type="password" class="form-control" name="password" placeholder="password" required>
              </div>

              <div class="form-group">
                <button class="btn btn-block" type="submit">ACCEDER</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    {% endblock %}