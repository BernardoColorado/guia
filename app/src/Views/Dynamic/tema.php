{% extends 'Templates/main.php' %}

{% block header %}
<div class="row">
  <div class="col-sm-12">
    <h4 class="page-title">GUIA</h4>
  </div>
</div>
{% endblock %}

{% block breadcrumb %}
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">GUIA</li>
    <li class="breadcrumb-item"><a href="{{base_url() ~ '/materia'}}">MATERIAS</a></li>
    <li class="breadcrumb-item text-uppercase"><a href="{{base_url() ~ '/tema/' ~ id}}">{{materia}}</a></li>
  </ol>
</nav>
{% endblock %}

{% block content %}
<div clas="row">
  <div class="col-lg-12">
    <div class="card-box">
      <div class="container-fluid">
        <div class="row">

        </div>
        <div class="row">
          <div class="col-lg-12">
            <table class="table">
              {% for tema in temas %}
              <tr>
                <td>{{tema.tema}}</td>
              </tr>
              {% endfor %}
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}