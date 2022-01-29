<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Information extends Model
{
    //テーブルの宣言。これがないとundefined tablesとなってしまう。save()ができなくなる。
    protected $table = 'informations';

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
