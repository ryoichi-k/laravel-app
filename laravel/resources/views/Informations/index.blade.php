@extends('app')
@section('title', 'お知らせ')
@include('nav')
@include('home.sidebar')
<table class="table table-bordered table-hover calender text-center">
    <tr>
        <th>No</th><th>タイトル</th><th>発信者</th>
    </tr>
    @foreach($items as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->user->name}}</td>
    </tr>
    @endforeach
</table>
