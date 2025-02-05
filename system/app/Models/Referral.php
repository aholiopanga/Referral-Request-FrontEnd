<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;

    protected $fillable = [
        'clientName',
        'clientUPI',
        'referringOfficer',
        'historyInvestigation',
        'diagnosis',
        'reasonReferral',
        'attachments',
        'additionalNotes',
        'priorityLevel',
        'serviceCategory',
        'service',
        'facility',
        'distance',
        'serviceNotes'
    ];
}
