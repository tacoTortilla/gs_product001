<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function tweets()
    {
      return $this->hasMany(Tweet::class);
    }

    //memo_product1_ishi_userとuser_inputの関係を追加_20250302
    //追加開始
    public function user_inputs()
    {
      //dd($this);
      return $this->hasMany(User_input::class);
    }
    //追加終了

    public function key_inputs()
    {
      //dd($this);
      return $this->hasMany(Key_input::class);
    }

    public function poc_slects()
    {
      //dd($this);
      return $this->hasMany(Poc_slect::class);
    }

      // 🔽 追加
    public function likes()
    {
        return $this->belongsToMany(Tweet::class)->withTimestamps();
    }


}
