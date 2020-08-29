<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    /**
     * このクイズを所有するタイトルを取得
     */
    public function title()
    {
        return $this->belongsTo('App\Title');
    }
}
