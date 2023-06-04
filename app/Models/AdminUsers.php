<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUsers extends Model
{
    use HasFactory;

    const TABLE = 'admin_users';

    protected $table = self::TABLE;

    protected $fillable = [
        'id',
        'fristname',
        'img',
        'lastname',
        'email',
        'city',
        'phone',
        'gender',
        'status',

    ];


    public function id(): int
    {
        return $this->id;
    }
    public function fristname(): string
    {
        return $this->fristname;
    }
    public function img(): string
    {
        return $this->img;
    }
    public function lastname(): string
    {
        return $this->lastname;
    }
    public function email(): string
    {
        return $this->email;
    }
    public function city(): string
    {
        return $this->city;
    }
    public function phone(): string
    {
        return $this->phone;
    }
    public function gender(): bool
    {
        return $this->gender;
    }
    public function status(): bool
    {
        return $this->status;
    }

}
