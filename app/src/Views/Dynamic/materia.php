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
    <li class="breadcrumb-item"><a href="{{ base_url() }}/materia">TEMARIO</a></li>
  </ol>
</nav>
{% endblock %}

{% block content %}
<!--Lista de Materias-->
<div clas="row">
{% for materia in materias %}
  <div class="col-sm-6 col-lg-3 col-md-4 natural creative">
    <div class="gal-detail thumb">
      <a href="{{ base_url() }}/guide/tema/{{ materia.id }}" class="image-popup" title="Screenshot-3">
        <img src="{{ base_url() }}/extra/img/materias/{{ materia.img }}" class="thumb-img" alt="work-thumbnail">
      </a>
      <h4 style="font-size:25px;">{{materia.materia}}</h4>
      <p class="text-muted" style="font-size:20px;">Temas: <span class="badge badge-primary badge-pill ml-3">{{ materia.count }}</span></p>
      <a href="{{ base_url() }}/guide/tema/{{ materia.id }}" class="btn btn-success btn-block" style="font-size:20px;">
        <i class="zmdi zmdi-book-image"></i>
        <span>GUIA</span>
      </a>
    </div>
  </div>
{% endfor %}
</div>
<!---->
{% endblock %}
