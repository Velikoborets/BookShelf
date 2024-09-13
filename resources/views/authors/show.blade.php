@extends('layouts.app')
@section('title', 'Данные автора')
@section('content')
<div class="author-page">
    <div class="author-page__info card-info">
        <h3 class="author-page__title">Данные автора:</h3>
        <div class="author-page__card card">
            <p class="author-page__card-id card-id">ID: {{ $author->id }}</p>
            <p class="author-page__card-name card-name">{{ $author->name }}</p>
        </div>
        <div class="author-page__books-">
            <h3 class="author-page__books-title">Книги автора:</h3>
            <ul class="author-page__books-list">
                @forelse($author->books as $book)
                    <li class="author-page__book-item card-item">{{ $book->title }}</li>
                @empty
                    <li class="author-page__book-item">У этого автора еще нет книг!</li>
                @endforelse
            </ul>
        </div>
    </div>
    <a class="author-page__btn-back btn btn--link" href="{{ route('authors.index') }}">
        << Назад
    </a>
</div>
@endsection