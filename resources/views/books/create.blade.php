@extends('layouts.app')
@section('title', 'Добавить книгу')
@section('content')
     <div class="create-book">
        <h3 class="create-book__title">Добавить книгу</h3>
        <div class="create-book__errors">
            @if ($errors->any())
                <ul class="create-book__errors-list">
                    @foreach ($errors->all() as $error)
                        <li class="create-book__error alert alert--error">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form class="create-book__form" action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="create-book__form-group form-group">
                <label class="create-book__form-label form-label" for="title">
                    Введите название книги
                </label>
                <input class="create-book__form-input form-input" type="text" name="title" placeholder="Название книги" required>
            </div>
            <div class="create-book__form-group form-group">
                <label class="create-book__form-label form-label" for="author_id">
                    Выберите автора
                </label>
                <select class="create-book__select select" name="author_id" required>
                    @foreach($authors as $author)
                        <option class="create-book__option" value="{{ $author->id }}">
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button class="create-book__btn-submit btn btn--link btn--submit">
                Добавить книгу
            </button>
        </form>
     </div>
@endsection