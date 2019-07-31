@extends('layouts.main', ['title' => 'Введите данные1'])
@section('content')
    <div class="row">
        <form action="{{route('inputDocDate')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">ИНН:</label>
                <input type="text" class="form-control" id="inn" name="inn" value="{{old('inn')}}" placeholder="Имя" required>
            </div>
            @if($errors->has('inn'))
                <font color="red"><p>  {{$errors->first('inn')}}</p></font>
            @endif

            <div class="form-group">
                <label for="title">р/с:</label>
                <input type="text" class="form-control" id="pc" name="pc" value="{{old('pc')}}"  placeholder="расчетный счет" required>
            </div>
            @if($errors->has('pc'))
                <font color="red"><p>  {{$errors->first('pc')}}</p></font>
            @endif
            <div class="form-group">
                <label for="title">Банк:</label>
                <input type="text" class="form-control" id="bank" name="bank"  value="{{old('bank')}}"  placeholder="банк" required>
            </div>
            @if($errors->has('bank'))
                <font color="red"><p>  {{$errors->first('bank')}}</p></font>
            @endif

            <div class="form-group">
                <label for="title">к/с:</label>
                <input type="text" class="form-control" id="pc" name="kc"  value="{{old('kc')}}" placeholder="к/с" required>
            </div>
            @if($errors->has('kc'))
                <font color="red"><p>  {{$errors->first('kc')}}</p></font>
            @endif

            <div class="form-group">
                <label for="title">БИК:</label>
                <input type="text" class="form-control" id="bic" name="bic"  value="{{old('bic')}}" placeholder="БИК" required>
            </div>
            @if($errors->has('bic'))
                <font color="red"><p>  {{$errors->first('bic')}}</p></font>
            @endif
            <button type="submit" class="btn btn-default">Ввести данные</button>
        </form>
    </div>
@endsection