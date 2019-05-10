@extends('layouts.base')

@section('styles')
  @parent
    <link rel="stylesheet" type="text/css" href="{{asset('css/contacts.css')}}">
@endsection

@section('name page')

    <h1 class="page_name font-stretch">Контакты</h1>
    <h2 class="page_title text-center font-stretch">Свяжитесь со мной <br>
 удобным для Вас способом</h2>

@endsection

      
@section('content')
    <div class="contacts col-12">

        <div class="contacts_sections row m-0">

          @foreach ($objs as $obj)

              <div class="contact_type col-lg-6 col-md-12 p-0">

              	<h4 class="font-stretch contact_type-pl">{{$obj->adress}}</h4>

              	<div class="contactType_icons d-flex justify-content-around flex-wrap">
              		<div class="icons_block text-center">
              			<img src="img/telephone.png" alt="telephone">
              			<h4 class="font-stretch">Телефон <br> {{$obj->telephone}} <br> (12:00-21:00)</h4>
              		</div>

              		<div class="icons_block text-center">
              			<img src="img/viber.png" alt="viber">
              			<h4 class="font-stretch">Viber <br> {{$obj->telephone}}</h4>
              		</div>

              		<div class="icons_block text-center">
              			<img src="img/email.png" alt="email">
              			<h4 class="font-stretch">E-mail <br> {{$obj->email}}</h4>
              		</div>
              	</div>


                <div class="contact_map col-12 p-0">
                  {!!$obj->text!!}
                </div>


              </div>

             


              <div class="col-lg-6 col-md-12 contact_form d-flex justify-content-center">
              	  <form method="post" action="{{asset('order')}}">

                    {!!csrf_field()!!}

              	   <h4 class="font-stretch">*Имя</h4>
              	   <input type="text" name="name" class="form-control font-stretch" pattern="^[а-яА-Яa-zA-Z ]+$" placeholder="Введите Ваше имя">

                    @if ($errors->has('name'))
                      <p class="font-stretch text-danger mb-3">{{$errors->first('name')}}</p>
                    @endif

              	   <h4 class="font-stretch">*Телефон</h4>
              	   <input type="text" name="telephone" class="form-control font-stretch" pattern="^[+0-9]+$"  placeholder="Введите Ваш телефон">

                     @if ($errors->has('telephone'))
                      <p class="font-stretch text-danger mb-3">{{$errors->first('telephone')}}</p>
                    @endif

              	   <h4 class="font-stretch">E-mail</h4>
              	   <input type="email" name="email" class="form-control font-stretch" pattern="(\w+\.)*\w+@(\w+\.)+[A-Za-z]+" placeholder="Введите Ваш адрес почты">

              	   <h4 class="font-stretch">Сообщение</h4>
              	   <textarea type="text" name="description" class="form-control font-stretch" placeholder="Введите Ваше сообщение"></textarea>

                    <button class="btn" type="submit"><h4 class="font-stretch m-0">Отправить</h4></button>

              	  </form>

              </div>                               
                 
          @endforeach 
      
        </div>       
    </div>
@endsection
