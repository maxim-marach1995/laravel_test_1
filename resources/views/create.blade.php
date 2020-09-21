@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <form method="post" action="/create">
        @csrf
        <p>
            <label>Бренд</label>
            <input type="text" name="brand">
        </p>
        <p>
            <label>Модель</label>
            <input type="text" name="model">
        </p>
        <p>
            <label>Тип</label>
            <select name="guitar_type">
                @foreach($guitarTypes as $guitarType)
                    <option value="{{ $guitarType->id }}">{{ $guitarType->type }}</option>
                @endforeach
            </select>
        </p>
        <p>
            <label>Цена</label>
            <input type="text" name="price">
        </p>
        <button type="submit">Сохранить</button>
    </form>
@endsection
