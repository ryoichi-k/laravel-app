<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $dt = new \Carbon();
    }

    public function index()
    {
        $dt = new \Carbon('today');
        //月の初日
        $startOfMonth = $dt->startOfMonth();
        //月の日数
        $daysInMonth = $dt->daysInMonth;

        $firstOfMonth = \Carbon::now()->firstOfMonth();
        $endOfMonth = $firstOfMonth->copy()->endOfMonth();
        //月の初日を配列の先頭に追加
        $month = array();
        $month[0] = $firstOfMonth->format('Y-m-d-w');
        //１日から月末までを順に取得
        for ($i = 1; true; $i++) {
            $date = $firstOfMonth->addDays(1);
            if ($date > $endOfMonth) {
                break;
            }
            $month[$i] = $date->format('Y-m-d-w');//2018-08-01, 2018-08-02, ･･･, 2018-08-30, 2018-8-31
        }
        //dump($month);
        $articles = Article::all()->sortByDesc('created_at');
        return view('home.index', ['articles' => $articles,
                                                'startOfMonth' => $startOfMonth,
                                                'daysInMonth' => $daysInMonth,
                                                'month' => $month,

    ]);
    }
}
