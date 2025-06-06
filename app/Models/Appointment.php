<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Appointment extends Model
{
    protected $fillable = [
        'start_time',
        'finish_time',
        'comments',
        'client_id',
        'employee_id',
    ];
 
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
 
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
