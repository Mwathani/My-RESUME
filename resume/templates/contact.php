{% extends 'base.php'%}

{% block contactactive %} active {% endblock contactactive %}

{% block title %}Contact{% endblock title %}

{% block body %}


<h2 class="text-center py-3">Contact Me</h2>
<div class="row">
  <div class="mx-auto col-10 col-md-8 col-lg-4">
    <form action="contact/.." method="post">
    {% csrf_token %}
    <div class="form-group">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control w-80" id="name" name="name" placeholder="Enter Name">
    </div>

    <div class="form-group">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control w-80" id="email" name="email" placeholder="Enter Email">
    </div>

    <div class="form-group">
      <label for="phone" class="form-label">Phone</label>
      <input type="phone" class="form-control w-80" id="phone" name="phone" placeholder="Phone Number">
    </div>

    <div class="form-group">
      <label for="message">Message</label>
      <textarea class="form-control w-80" id="message" name="message" rows="3" placeholder="Enter a message here..."></textarea>
    </div>


    <div class="form-group">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
</div>

{% endblock body %}