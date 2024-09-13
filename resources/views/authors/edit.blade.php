@extends('layouts.app')
@section('title', 'Изменить данные автора')
@section('content')
<div class="author-edit">
    <h3 class="author-edit__title">Изменить данные автора</h3>
    @if ($errors->any())
        <div class="author-edit__errors">
            <ul class="author-edit__errors-list">
                @foreach($errors->all() as $error)
                    <li class="author-edit__error-item alert alert--error">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="author-edit__form form" action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="author-edit__form-group form-group">
            <label class="author-edit__form-label form-label" for="name">Изменить данные</label>
            <input class="author-edit__form-input form-input" type="text" name="name" value="{{ $author->name }}">
        </div>
        <button class="author-edit__btn-submit btn btn--link btn--submit" type="submit">Изменить данные</button>
    </form>
</div>
@endsection