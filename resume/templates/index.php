  {% extends 'base.php'%}

  {% block homeactive %} active {% endblock homeactive %}

  {% block title %}Home{% endblock title %}
  
  {% block body %}
  
  <div class="wrapper">
    <div class="cols cols0">
    <h1>ROONEY MWATHANI</h1>
        <h2>I'm a <span class="multiText"></span></h2>
        <p>I am always a passionate technocrat having the following skills in Web design & web development 
        <strong>
          <span class="skills"></span>
        </strong>
        </p>

        <div class="btns">
            <button>download Cv</button>
            <button>hire me</button>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


<script>
var typingEffect = new Typed(".multiText",{
  strings : ["Web Developer", "Designer" , "Freelancer"],
  loop : true,
  typeSpeed : 100,
  backSpeed : 80,
  backDelay : 1500,
})

var typingEffect = new Typed(".skills",{
  strings : ["*HTML", "*CSS" , "*JAVASCRIPT", "*PHP" , "*PYTHON", "*DJANGO" , "*BOOTSTRAP" , "*SQL" , "*POSTGRESQL" ,
   "*WORDPRESS"],
  loop : true,
  typeSpeed : 100,
  backSpeed : 80,
  backDelay : 1500,
})
</script>
</div>

{% endblock body %}



    