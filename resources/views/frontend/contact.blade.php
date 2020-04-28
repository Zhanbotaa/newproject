@extends('layouts.frontend')

@section('title')
	Contact

@endsection


@section('content')
<!DOCTYPE html> 
<html> 
<head> 
<title>Contacts</title> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

</br> 
</head> 
<header> 
</header> 

<div style="background-color: #b795db">
</br>
</br>
</br>

<div class="container"> 
<div class="col-sm"> 
<h2 style="text-align: center;color: white;font-family: "Times New Roman">Остались вопросы?</h2> 
<p style="text-align: center;color: white;font-family: "Times New Roman">Заполните форму, и мы с вами свяжемся.</p> 
</div> 
</br> 
</br> 
<div class="row"> 
<div class="col-md-12"> 
@if (count($errors)>0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
			<li>
				{{$error}}
			</li>
		@endforeach
	</ul>
	
</div>

@endif
@if(\Session::has('success'))
<div class="alert alert-danger">
	<p>{{\Session::get('success')}}</p>
</div>
@endif
<form method = "post" action="{{url('layouts')}}"> 
{{csrf_field()}}
<div class="form-group">
<input type = "text" class="form-control" name = "name" style="background-color: #d5c8db; color:white" placeholder="Имя"> 
</div>
<div class="form-group">
<input type = "text" class="form-control" name = "email" style="background-color: #d5c8db " placeholder="E-mail">
</div>
<div class="form-group"> 
<input type = "text" class="form-control" name = "tel" style="background-color: #d5c8db" placeholder="Телефон"> 
</div>
<div class="form-group">
<input type = "text" class="form-control" name = "city" style="background-color: #d5c8db" placeholder="Город">
</div> 
</br>
<div class="p-3 mb-4" style="border-color: #b695cc"> 
<div class="text-center">
<div class="form-group">
<button  method="post" " type="submit" class="btn btn-primary" style="background-color:#644d6e; padding:15px ;border-color: #b695cc ; font-family: Times New Roman">Отправить заявку</button> 
</div>
</div>
</div>
</form>  
<p style="text-align: center;color: white; font-size: 15px; font-family: Times New Roman"">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c <a href="#" style="font-size: 15px"> политикой конфиденциальности</a></p> 
</br> 
</div> 
</div>

@endsection



@section('scripts')
	

@endsection
