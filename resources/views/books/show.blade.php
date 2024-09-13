@extends('layouts.app')
@section('title', 'Информация о книге')
@section('content')
    <div class="book-page">
        <h3 class="book-page__title">Информация о книге</h3>
        <div class="book-page__card card">
            <p class="book-page__card-id card-id">ID: {{ $book->id }}</p>
            <p class="book-page__card-name card-name">{{ $book->title }}</p>
        </div>
        <div class="book-page__author card-info">
            <h3 class="book-page__author-title">Данные автора</h3>
            <p class="book-page__author-name card-item">
                {{ $book->author->name }}
            </p>
        </div>
        <a class="book-page__back-btn btn btn--link" type="submit" href="{{ route('books.index') }}"> 
            << Назад
        </a>
    </div>
@endsection