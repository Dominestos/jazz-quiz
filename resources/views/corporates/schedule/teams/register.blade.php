@extends('layout')

@section('content')

<div class="card-body">
    <header>
      <h4 class="card-title">Регистрация команды на мероприятие {{$corp->name}}</h4>
    </header>
    <form class="row g-3 m-4 form-floating" method="post" action="">
        @csrf
        <div class="row form-group">
            <div class="mb-3 col-md-6">
                <label class="form-label" for="inputTeam">Название команды</label>
                <input type="text" class="form-control" name="name" id="inputTeam">
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label" for="inputCapName">Имя капитана</label>
                <input type="text" class="form-control" name="capitain_name" id="inputCapName">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md-6">
                <label class="form-label" for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label" for="inputTel">Телефон капитана</label>
                <input type="text" class="form-control" id="inputTel" name="phone_number" placeholder="Номер телефона">
            </div>
        </div>
        <div class="mb-3 col-md-8">
            <select id="inputState" class="form-control" name="number_of_participants">
                <option selected="">Выберите количество человек</option>
                @for ($count = 2; $count <= 9; $count++)
                <option value="{{$count}}">{{$count}}</option>
                @endfor
              </select>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Зарегистрировать команду</button>
        </div>
    </form>
  </div>

</form>
    
@endsection