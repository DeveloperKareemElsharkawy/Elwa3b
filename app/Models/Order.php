<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'worker_id',
        'order_number',
        'status_id',
        'status',
        'total_price',
        'amount_paid',
    ];

    public function scopeWithFilters($query, $request)
    {
        return
            $query
                ->when($request['status'], function ($query) use ($request) {
                    $query->where('status', $request['status']);
                });
    }


    public function worker(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Worker::class)->withDefault([
            'name' => 'غير معرف',
        ]);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'غير معرف',
        ]);
    }

    public function notes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(OrderNote::class, 'order_id');
    }

    public function processes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(OrderProcess::class, 'order_id');
    }


    public function archives(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(OrderArchive::class);
    }
}
