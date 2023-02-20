<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Delivery extends Model
{
    const VALID_STATUS = [
        'PROCESSING',
        'INPROGRESS',
        'DELIVERED',
        'CANCELED',
    ];

    use HasFactory;

    protected $fillable = [
        'description',
        'address',
        'CEP',
        'customer_id',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class);
    }

    public function driverName(): string
    {
        if (empty($this->driver_id)) {
            return 'sem motirista';
        }

        return $this->driver->name;
    }
}
