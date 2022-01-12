@extends('app')

@section('title', 'ホーム')
@section('content')
@include('nav')
@include('home.sidebar')
<table class="table table-bordered table-hover calender">
    <tr>
      <th>日付</th>
      <th>休日区分</th>
      <th>出勤</th>
      <th>退勤</th>
      <th>労働時間</th>
      <th>休憩</th>
      <th>残業時間</th>
      <th>備考</th>
    </tr>
    <tr>
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
      <td>{{substr($m, 0, strlen($m)-2)}}({{$d}}曜日)
      </td>
      <td>公休</td>
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
