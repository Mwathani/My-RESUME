{% extends 'base.php'%}

{% block aboutactive %} active {% endblock aboutactive %}

{% block title %}About{% endblock title %}

{% block body %}

<!---About me start-->
<div class="container text-center my-3">
    <h2>About Me</h2>
    <p>I'm a technocrat who is always fascinated to solving real existing problems using technology</p>
  </div>

  <div class="row">
    <div class="col-md-4">
    <div class="card mx-5 mb-4 border-0" style="width: 100%">
      <img class="image1" src="/static/img/image1.jpg" alt="...">
    </div>
    </div>

  <div class="col-md-8">
    <div class="card mx-5 mb-4 border-0" style="width: 90%">
      <h1>UI/UX Designer & Web Developer </h1>
      <p>I'm an expert in designing and building responsive websites for my clients anytime they need my services. Also I 
        like collaborating with development teams in order to be able to share whatever knowledge I have to enhance the solving
        of the real world problems in the human environment.
      </p>

      <div class="row">
        <div class="col-md-11">
          <div class="card mx-4 mb-4 border-0" style="width: 100%">
            <h3><strong>Email:</strong> <a href="mwatahnirooney@gmail.com">mwatahnirooney@gmail.com</a> </h3>
            <h3><strong>Degree:</strong> Bsc. Information Technology </h3>
            <h3><strong>Phone:</strong> +254 759 74 6625 </h3>
            <h3><strong>City:</strong> Nairobi, Kenya </h3>
            <h3> <strong>Freelance</strong> Available </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock body %}