@extends('layout')

@section('content')
<form class="row g-3 m-4 form-floating" method="post" action="">
    @csrf
    <h1>Заказ мероприятия</h1>
    <h3>Укажите ваши контакты</h3>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Имя</label>
        <input type="text" class="form-control" id="validationCustom01" name="contact_name" required>
        <div class="valid-feedback">
        Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Телефон</label>
        <input type="text" class="form-control" id="validationCustom02" name="phone_number" required>
        <div class="valid-feedback">
        Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustomEmail" class="form-label">Email</label>
        <div class="input-group">
        <input type="text" class="form-control" name="email" id="validationCustomEmail"
            required>
        <div class="invalid-feedback">
            Please choose a email.
        </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom04" class="form-label">Удобный способ связи</label>
        <select class="form-select" id="validationCustom04" name="preferred_messager" required>
        <option selected disabled value="">Выбрать</option>
        <option>Viber</option>
        <option>Telegram</option>
        <option>Instagram</option>
        <option>Email</option>
        </select>
        <div class="invalid-feedback">
        Пожалуйста, выберите удобный способ связи.
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Как вы о нас узнали???</label>
        <select class="form-select" id="validationCustom05" name="hearing_about_us" required>
        <option selected disabled value="">Выбрать</option>
        <option value="Был/была на играх">Был/была на играх</option>
        <option value="Рекомендации знакомых">Рекомендации знакомых</option>
        <option value="Социальные сети">Социальные сети</option>
        <option value="Целевой поиск в интерннете">Целевой поиск в интерннете</option>
        <option value="Контекстная реклама">Контекстная реклама</option>
        <option value="СМИ">СМИ</option>
        </select>
        <div class="invalid-feedback">
        Пожалуйста, выберите удобный способ связи.
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationDate" class="form-label">Дата мероприятия</label>
        <input type="text" class="form-control" id="validationDate" name="date" required>
        <div class="valid-feedback">
        Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom06" class="form-label">Количество человек</label>
        <input type="text" class="form-control" id="validationCustom06" name="count_of_persons" required>
        <div class="valid-feedback">
        Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom07" class="form-label">Тип мероприятия</label>
        <select class="form-select" id="validationCustom07" name="online_or_offline" required>
        <option selected disabled value="">Выбрать</option>
        <option value="1">Онлайн</option>
        <option value="0">Офлайн</option>
        </select>
    </div>
    <div class="d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">Подтвердить заказ</button>
    </div>
</form>
@endsection