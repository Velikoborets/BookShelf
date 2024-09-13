@extends('layouts.app')
@section('title', 'Список книг')
@section('content')
<div class="books">
    <div class="books__btn-actions btn-actions">
        <a class="books__create-btn btn btn--link" href="{{ route('books.create') }}">
            Добавить книгу
        </a>
        <a class="books__back-btn btn btn--link" href="/"><< На главную</a>
    </div>
    <div class="books__message">
        @if (session('success'))
            <div class="books__message-success alert alert--success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <table class="books__table table">
        <thead class="books__table-head table-head">
            <tr class="books__table-row table-row">
                <th class="books__table-cell table-cell">ID</th>
                <th class="books__table-cell table-cell">Книга</th>
                <th class="books__table-cell table-cell">Автор</th>
                <th class="books__table-cell table-cell">Действия</th>
            </tr>
        </thead>
        <tbody class="books__table-tbody">
            @foreach($books as $book)
                <tr class="books__table-row table-row">
                    <td class="books__table-cell table-cell">{{ $book->id }}</td>
                    <td class="books__table-cell table-cell">{{ $book->title }}</td>
                    <td class="books__table-cell table-cell">{{ $book->author->name }}</td>
                    <td class="books__table-cell table-cell">
                        <div class="books__table-actions table-actions">
                            <a class="books__btn-view btn" href="{{ route('books.show', $book->id) }}">
                                О книге
                            </a>
                            <a class="books__btn-edit btn" href="{{ route('books.edit', $book->id) }}">
                                Изменить данные книги
                            </a>
                            <form class="books__form" action="{{ route('books.destroy', $book->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="books__btn-delete btn btn--submit btn--delete" type="submit" onclick="return confirm('Вы уверены?')">
                                    Удалить
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="books__pagination pagination">
        @if ($books->previousPageUrl())
            <a class="books__pagination-btn--prew btn" href="{{ $books->previousPageUrl() }}">
                << Предыдущая
            </a>
        @endif
        @if ($books->nextPageUrl())
        <a class="books__pagination-btn--next btn" href="{{ $books->nextPageUrl() }}">
            Следующая >> 
        </a>
    @endif
    </div>
</div>
@endsection