<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_input extends Model
{
    /** @use HasFactory<\Database\Factories\UserInputFactory> */
    use HasFactory;

    //memo_product1_ishi_Userメソッド追加_ユーザから入力を受け付けるカラムを指定_20250302
    //追加開始
    //protected $fillable = ['input_content_problem'];
    protected $fillable = ['input_content_problem', 'input_content_cost', 'input_content_countermeasure', 'input_content_expect'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
    //追加終了

}
