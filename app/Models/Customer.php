<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'neighbourhood',
        'city',
        'CEP',
    ];

    public function fullAddress(): string
    {
        $fullAddress = "{$this->address} - {$this->neighbourhood}/{$this->city}";

        return $fullAddress;
    }

    public function showCEP(): string
    {
        if ($this->CEP) {
            return $this->CEP;
        }

        return 'SEM CEP';
    }
}
