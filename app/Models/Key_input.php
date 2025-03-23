<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Key_input extends Model
{
    /** @use HasFactory<\Database\Factories\KeyInputFactory> */
    use HasFactory;

    //アプリケーション側から設定できる値を指定してコントローラなどで create() メソッドを使用する．
    protected $fillable = ['keyword','user_id'];

    /* key_inputとpoc_systemの関係を追加 1対多 */
    public function poc_models()
    {
      return $this->hasMany(Poc_model::class);

    }

    public function poc_slects()
    {
      //dd($this);
      return $this->hasMany(Poc_slect::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

}
