@extends('layouts.app')
@section('title', 'Главная страница')
@section('content')
<div class="home-page">
    <div class="home-page__content content">
        <p class="home-page__text text">
            Приложение <b>"Книжная полка"</b> поможет вам легко управлять своей библиотекой: добавлять, удалять, просматривать и редактировать книги и их авторов. Попробуйте, вам обязательно понравится!
        </p>
    </div>
    <nav class="home-page__btn-actions btn-actions btn-actions--home ">
        <a class="home-page__btn-authors btn btn--link" href="{{ route('authors.index') }}">Авторы</a>
        <a class="home-page__btn-books btn btn--link" href="{{ route('books.index') }}">Книги</a>
    </nav>
</div>
@endsection