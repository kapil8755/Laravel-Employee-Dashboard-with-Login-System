<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Meeting extends Model
{
    use HasFactory;

    // जब डेट को एक्सेस किया जाए, तो उसे Carbon instance में कंवर्ट करें
    protected $dates = ['start_time', 'end_time'];

    // बाकी कोड...
}
