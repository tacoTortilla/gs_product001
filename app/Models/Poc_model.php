<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poc_model extends Model
{
    /** @use HasFactory<\Database\Factories\PocModelFactory> */
    use HasFactory;

    protected $fillable = ['name','description','image_path','category','cost_estimate','provider','success_cases','key_input_id'];

    public function key_input()
    {
      return $this->belongsTo(Key_input::class, 'key_input_id');
    }

    public function poc_slects()
    {
      //dd($this);
      return $this->hasMany(Poc_slect::class);
    }
}
