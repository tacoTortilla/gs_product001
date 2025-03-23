<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    /** @use HasFactory<\Database\Factories\TweetFactory> */
    use HasFactory;

    //アプリケーション側から設定できる値を指定してコントローラなどで create() メソッドを使用する．
    protected $fillable = ['tweet'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

      // 🔽 追加
    public function liked()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}


