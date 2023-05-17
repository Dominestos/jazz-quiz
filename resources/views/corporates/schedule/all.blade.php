@extends('layout')

@section('content')
<div class="container">
<div class="row">
    @foreach ($corporates as $corporate)
        

    <div class="card col-md-4 mx-3 my-3 bg-primary bg-opacity-10" style="width: 18rem;">
        <img class="card-img-top" src="/storage/img/{{$corporate->picture}}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">{{$corporate->name}}</h5>
        <p class="card-text">{{mb_strimwidth($corporate->description, 0, 60, '...')}}</p>
    </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$corporate->date_time->format('d-M')}}</li>
        <li class="list-group-item">{{$corporate->date_time->format('H:i')}}</li>
        <li class="list-group-item">{{$corporate->price}} byn</li>
        </ul>
    <div class="card-body">
        <a href="/corporates/schedule/{{$corporate->id}}" class="btn btn-primary">Подробнее</a>
        <a href="/corporates/schedule/{{$corporate->id}}/teams/register" class="btn btn-primary">Записаться</a>
    </div>
    </div>
    @endforeach
</div>
</div>
    
@endsection