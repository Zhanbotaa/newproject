@extends('layouts.frontend')

@section('title')
	Franchise

@endsection


@section('content')

@include('frontend.franslider')


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <h2>Абонемент №1 </h2>
        <p>Предложение от нашего салона для прекрасной половине женшин. Абонемент под номером один предлагает вам коплекс услуг в который входит СПА процедуры. А именно массаж спины эфирными маслами, арома терапия, солевая ванная. Стоимость 15000 тг  </p>
        <p><a class="btn btn-secondary" href="#" role="button">Приобрести &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <h2>Абонемент №2</h2>
        <p>Предложение от нашего салона для прекрасной половине женшин.  Абонемент под номером два предлагает вам коплекс услуг в который входит декоративно косметичекие процедуры. А именно отчистка лица (на ваш выбор), альгитная маска, массаж лица. Стоимость 7000 тг </p>
        <p><a class="btn btn-secondary" href="#" role="button">Приобрести  &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <h2>Абонимент №3</h2>
        <p>Предложение от нашего салона для прекрасной половине женшин.  Абонемент под номером три предлагает вам коплекс услуг в который входит  косметичекие услуги для создания образа. А именно макияж (по желанию клиента) , прическа , маникюр. Стоимость 15000 </p>
        <p><a class="btn btn-secondary" href="#" role="button">Приобрести  &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Создай свой комлекс. <span class="text-muted">Создания своего абонимета.</span></h2>
        <p class="lead">Выбор перечень услуг который вам нужен. К  примеру приобрести абонемет со СПА процедурами а так же создать образ для мероприятия .</p>
        <p><a class="btn btn-secondary" href="{{url('/our-service')}}" role="button">Приобрести &raquo;</a></p>
      </div>
      <div class="col-md-5">
        <img src="{{ asset('frontend/franslider/7.jpg')}}" class="d-block w-100" alt="..." height="200">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Выбор за клиентом. <span class="text-muted">Мобильный визажист.</span></h2>
        <p class="lead">Вызов мастера на нужное вам время и места. Наш мастер приедет к вам в удобное вам время и предоставит вам услуги которые вам нужны. Запись за 2-3 дня до получения услуги </p>
        <p><a class="btn btn-secondary" href="{{url('/our-service')}}" role="button">Приобрести &raquo;</a></p>
      </div>
      <div class="col-md-5 order-md-1">
       <img src="{{ asset('frontend/franslider/9.jpg')}}" class="d-block w-100" alt="..." height="200" >
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Получения скидок. <span class="text-muted">Мы любым наших верных клиентов.</span></h2>
        <p class="lead">Предоставление скидки постоянным клиентам. Небольшие подарки любимым</p>
        <p><a class="btn btn-secondary" href="{{url('/our-service')}}" role="button">Приобрести &raquo;</a></p>
      </div>
      <div class="col-md-5">
        <img src="{{ asset('frontend/franslider/11.jpg')}}" class="d-block w-100" alt="..." height="200">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->



@endsection



@section('scripts')
	<style type="text/css">
		/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
  padding-top: 25px;
  padding-bottom: 15px;
  color: #5a5a5a;
}
.col-md-5{
	margin-top: 85px;
}

/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 15px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 10px;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 500px;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
  margin-top: 55px

}
.marketing h2 {
  font-weight: 400;
}
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;

}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -.05rem;
}


/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}

	</style>

@endsection
