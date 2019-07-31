@extends('layouts.main', ['title' => 'Введите данные1'])
@section('content')
    <div class="row">
        <form action="{{route('inputDocDate')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">ИНН:</label>
                <input type="text" class="form-control" id="inn" name="inn" placeholder="Имя" required>
            </div>

            <div class="form-group">
                <label for="title">р/с:</label>
                <input type="text" class="form-control" id="pc" name="pc" placeholder="расчетный счет" required>
            </div>
            <div class="form-group">
                <label for="title">Банк:</label>
                <input type="text" class="form-control" id="bank" name="bank" placeholder="банк" required>
            </div>


            <div class="form-group">
                <label for="title">к/с:</label>
                <input type="text" class="form-control" id="pc" name="kc" placeholder="к/с" required>
            </div>

            <div class="form-group">
                <label for="title">БИК:</label>
                <input type="text" class="form-control" id="bic" name="bic" placeholder="БИК" required>
            </div>
            <button type="submit" class="btn btn-default">Ввести данные</button>
        </form>
    </div>
@endsection