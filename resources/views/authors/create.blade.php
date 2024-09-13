@extends('layouts.app')
@section('title', 'Создание автора')
@section('content')
<div class="author-create">
    <h3 class="author-create__title">Создание нового автора</h3>
    <div class="author-create__errors">
        @if ($errors->any())
            <ul class="author-create__errors-list">
                @foreach($errors->all() as $error)
                    <li class="author-create__error-item alert alert--error">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form class="author-create__form form" action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="author-create__form-group form-group">
            <label class="author-create__form-label form-label" for="name">Введите данные автора:</label>
            <input class="author-create__form-input form-input" type="text" name="name" placeholder="Имя и Фамилия">
        </div>
        <button class="authors-create__btn-submit btn btn--submit btn--link" type="submit" required>Создать автора</button>
    </form>
</div>
@endsection