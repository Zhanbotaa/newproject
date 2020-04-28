<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light ">
  <a class="navbar-brand" href="#" style="font-family: 'Playfair Display', serif;">
  <img src="{{ asset('frontend/slider/15.png')}}" class="d-inline-block align-top" height="35" style="border-radius: 50px;" >
   Cleopatra</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarText">
   

    <ul class="navbar-nav mx-auto text-center ">
      <li class="nav-item active">
        <a class="nav-link " href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/our-service')}}">Наши Услуги</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href= "{{url('/franchises')}}">Франшиза</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{url('/contact-us')}}">Контакты</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/view')}}">Data</a>
      </li>

    </ul>


    <a class="navbar-text " href="{{url('/home')}}" style="font-family:'Playfair Display';font-size: 18px; ">
      Personal Cabinet
    </a>

  </div>
</nav>

