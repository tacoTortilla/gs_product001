<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poc_slect extends Model
{
    /** @use HasFactory<\Database\Factories\PocSlectFactory> */
    use HasFactory;

    protected $fillable = ['user_id','poc_model_id','key_input_id'];

    public function poc_model()
    {
      return $this->belongsTo(Poc_model::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function key_inputs()
    {
      return $this->belongsTo(Key_input::class);
    }

    // 🔽 key_input_id を基に poc_models を取得するリレーション
    // poc_models の key_input_id が poc_slects.key_input_id に一致するデータを取得
    public function pocModels()
    {
        return $this->hasMany(Poc_model::class, 'key_input_id', 'key_input_id');
    }

}
