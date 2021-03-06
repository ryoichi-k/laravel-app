@extends('app')

@section('title', 'ホーム')
@section('content')
@include('nav')
@include('home.sidebar')
<table class="table table-bordered table-hover calender text-center">
    <tr class="table-header">
      <th>日付<a href="/{{$thisYear}}/{{$nextMonth}}">次月へ</a></th>
      <th>休日区分</th>
      <th>出勤</th>
      <th>退勤</th>
      <th>労働時間</th>
      <th>休憩</th>
      <th>残業時間</th>
      <th>備考</th>
    </tr>
<!-- 曜日を抽出 -->
    @foreach($month as $m)
    @php
        $week = array('日', '月', '火', '水', '木', '金', '土');
        $s = substr($m , -1);
        $d = 0;
        if ($s == 0)
            $d = $week[0];
        elseif ($s == 1)
            $d = $week[1];
        elseif ($s == 2)
            $d = $week[2];
        elseif ($s == 3)
            $d = $week[3];
        elseif ($s == 4)
            $d = $week[4];
        elseif ($s == 5)
            $d = $week[5];
        elseif ($s == 6)
            $d = $week[6];
        else
    @endphp
    <!-- 土日に背景色 -->
    @switch($s)
        @case(0)
        <tr style="background-color: #f5c8c8;">
        @break
        @case(6)
        <tr style="background-color: #b4dcff;">
        @break
    @endswitch
      <td>{{substr($m, 0, strlen($m)-2)}}({{$d}}曜日)
      </td>
      <td>@if($s == 0 || $s == 6) 公休 @endif</td>
      <td>10:00</td>
      <td>19:00</td>
      <td>08:00</td>
      <td>13:00</td>
      <td>01:30</td>
      <td></td>
    </tr>
    @endforeach
  </table>
@endsection
