@extends('layouts.app')
@section('title', 'Список авторов')
@section('content')
<div class="authors">
    <div class="authors__btn-actions btn-actions">
        <a class="authors__create-btn btn btn--link" href="{{ route('authors.create') }}">Создать автора</a>
        <a class="authors__back-btn btn btn--link" href="/"><< На главную</a>
    </div>
    @if (session('success')) 
        <div class="authors__message alert alert--success">
            {{ session('success') }}
        </div>
    @endif
    <table class="authors__table table">
        <thead class="authors__table-head table-head">
            <tr class="authors__table-row table-row">
                <th class="authors__table-cell table-cell">ID</th>
                <th class="authors__table-cell table-cell">Автор</th>
                <th class="authors__table-cell table-cell">Действия</th>
            </tr>
        </thead>
        <tbody class="authors__table-body">
            @foreach ($authors as $author)
                @if ($author)
                    <tr class="authors__table-row table-row">
                        <td class="authors__table-cell table-cell">{{ $author->id }}</td>
                        <td class="authors__table-cell table-cell">{{ $author->name }}</td> 
                        <td class="authors__table-actions table-actions">
                            <a class="authors__btn-show btn" href="{{ route('authors.show', $author->id) }}">Показать книги</a>
                            <a class="authors__btn-change btn" href="{{ route('authors.edit', $author->id) }}">
                                Изменить данные
                            </a>
                            <form class="authors__form form" action="{{ route('authors.destroy', $author->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="authors__btn-submit btn btn--submit btn--delete" type="submit" onclick="return confirm('Вы уверены?')">
                                    Удалить автора
                                </button>
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    <div class="authors__pagination pagination"> 
        @if ($authors->previousPageUrl()) 
            <a class="authors__pagination-btn--prev btn" href="{{ $authors->previousPageUrl() }}" rel="prev">
                << Предыдущая
            </a>
        @endif
        @if ($authors->nextPageUrl())
            <a class="authors__pagination-btn--next btn" href="{{ $authors->nextPageUrl() }}" rel="next">
                Следующая >>
            </a>
        @endif
    </div>
</div>
@endsection