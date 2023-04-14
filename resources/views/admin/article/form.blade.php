@extends('admin.layout')
@section('meta_title', '- '.$cardTitle)

@section('content')
@if(Route::is('admin.article.edit'))
    <form method="POST" action="{{route('admin.article.update', $entry->id)}}" enctype="multipart/form-data">
    @method('PUT')
@else
    <form method="POST" action="{{route('admin.article.store')}}" enctype="multipart/form-data">
@endif
@csrf
<div class="container">
    <div class="card">
        <div class="card-head container">
            <div class="row">
                <div class="col-12 pl-0">
                    <h4 class="page-title row"><i class="fe-book-open"></i><a href="{{route('admin.article.index')}}" class="p-0">Aktualności</a><span class="d-inline-flex ml-2 mr-2">/</span>{{ $cardTitle }}</h4>
                </div>
            </div>
        </div>
        @include('form-elements.back-route-button')
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    @include('form-elements.html-select', ['label' => 'Status', 'name' => 'status', 'selected' => $entry->status, 'select' => ['1' => 'Pokaż na liście', '0' => 'Ukryj na liście']])
                    @include('form-elements.html-input-text', ['label' => 'Tytuł wpisu', 'name' => 'title', 'value' => $entry->title, 'required' => 1])
                    @include('form-elements.html-input-text-count', ['label' => 'Nagłówek strony', 'sublabel'=> 'Meta tag - title', 'name' => 'meta_title', 'value' => $entry->meta_title, 'maxlength' => 60])
                    @include('form-elements.html-input-text-count', ['label' => 'Opis strony', 'sublabel'=> 'Meta tag - description', 'name' => 'meta_description', 'value' => $entry->meta_description, 'maxlength' => 158])
                    @include('form-elements.html-input-text', ['label' => 'Indeksowanie', 'sublabel'=> 'Meta tag - robots', 'name' => 'meta_robots', 'value' => $entry->meta_robots])
                    @include('form-elements.html-input-file', ['label' => 'Zdjęcie', 'sublabel' => '(wymiary: '.config('images.article.big_width').'px / '.config('images.article.big_height').'px)', 'name' => 'file'])
                    @include('form-elements.html-input-file', ['label' => 'Zdjęcie Facebook', 'sublabel' => '(wymiary: 600 px / 314 px)', 'name' => 'file_facebook'])
                    @include('form-elements.html-input-text', ['label' => 'Atrybut ALT zdjęcia', 'name' => 'file_alt', 'value' => $entry->file_alt])
                    @include('form-elements.html-input-text', ['label' => 'Wprowadzenie', 'name' => 'content_entry', 'value' => $entry->content_entry, 'required' => 1])
                    @include('form-elements.textarea-fullwidth', ['label' => 'Treść artukułu', 'name' => 'content', 'value' => $entry->content, 'rows' => 11, 'class' => 'tinymce'])
                </div>
            </div>
        </div>
    </div>
</div>
@include('form-elements.submit', ['name' => 'submit', 'value' => 'Zapisz'])
</form>
@include('form-elements.tintmce')
@endsection
