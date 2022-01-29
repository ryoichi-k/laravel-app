@extends('app')
@section('title', 'お知らせ')
@include('nav')
@include('home.sidebar')
<form method="POST" action="{{ route('informations.store') }}">
    @include('informations.form')
    <button type="submit" class="btn blue-gradient">お知らせを作成する</button>
</form>
