@extends('layouts.app')

@section('title', 'Create')

@section('content')

    <p>ID товара - {{ $guitar->id }}</p>
    <p>Бренд - {{ $guitar->brand }}</p>
    <p>Модель - {{ $guitar->model }}</p>
    <p>Тип - {{ $type->type }}</p>
    <p>Цена - {{ $guitar->price }}</p>

@endsection
