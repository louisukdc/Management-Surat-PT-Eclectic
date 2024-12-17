<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Interact with the user's password.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function password(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => Hash::needsRehash($value) ? Hash::make($value) : $value,
        );
    }

    /**
     * Interact with the user's type.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function type(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ["user", "admin"][$value] ?? "unknown",
        );
    }

    // protected $fillable = [
    //     'email',
    //     'nama',
    //     'password',
    //     'jabatan',
    //     'no_rekening',
    //     'bank',
    //     'ttd',
    //     'no_telp'
    // ];    

    public function hasRole($role)
    {
        // Implementasi logika untuk memeriksa peran pengguna
        return in_array($role, $this->roles);
    }


    public function Karyawan(){
        return $this->hasOne(Surat::class, 'id_user', 'id');
    }

    public function Surat() {
 
        return $this->hasMany(Surat::class, 'id_pembuat', 'id');
    }
}
