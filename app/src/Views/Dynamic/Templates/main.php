
<!DOCTYPE html>
<html>
    <head>
        {% include 'Templates/Partials/head.php'  %}
    </head>

    <body>
        {% include 'Templates/Partials/navbar.php' %}
        <div class="wrapper">
            <div class="container">
            {% block header %}



            {% endblock %}
            {% block breadcrumb %}



            {% endblock %}
            {% block content %}
                        

            {% endblock %}

            {% include 'Templates/Partials/footer.php' %}
            </div>
        </div>
        {% include 'Templates/Partials/feet.php' %}
    </body>
</html>