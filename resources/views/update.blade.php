@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <form method="post" action="/update/{{ $guitar->id }}">
        @csrf
        <p>
            <label>Бренд</label>
            <input type="text" name="brand" value="{{ $guitar->brand }}">
        </p>
        <p>
            <label>Модель</label>
            <input type="text" name="model" value="{{ $guitar->model }}">
        </p>
        <p>
            <label>Тип</label>
            <select name="guitar_type">
                @foreach($guitarTypes as $guitarType)
                    <option value="{{ $guitarType->id }}"
                        @if($guitarType->id == $guitar->id)
                            selected
                        @endif
                    >{{ $guitarType->type }}</option>
                @endforeach
            </select>
        </p>
        <p>
            <label>Цена</label>
            <input type="text" name="price" value="{{ $guitar->price }}">
        </p>
        <button type="submit">Сохранить</button>
    </form>
@endsection
