@extends('layouts.app')
@section('title', 'Изменить данные')
@section('content')
    <div class="book-edit">
        <h3 class="book-edit__title">Изменить данные:</h3>
        <form class="book-edit__form" action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="book-edit__form-group form-group">
                <label class="book-edit__label form-label" for="title">
                    Название книги
                </label>
                <input class="book-edit__input form-input" type="text" name="title" value="{{ $book->title }}" required>
            </div>
            <div class="book-edit__form-group form-group">
                <label class="book-edit__label form-label" for="author_id">Автор</label>
                <select class="book-edit__select select" name="author_id" required>
                    @foreach ($authors as $author)
                        <option class="book-edit__option" value="{{ $author->id }}" 
                        {{ $author->id == $book->author_id ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button class="book-edit__btn-submit btn btn--submit btn--link">
                Обновить данные
            </button>
        </form>
    </div>
@endsection