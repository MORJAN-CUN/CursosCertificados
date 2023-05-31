<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
  use HasFactory;

  protected $fillable = [
    'student_name',
    'participant_type',
    'email',
    'document_type',
    'document_number',
    'product_name',
    'date_realized',
    'duration',
    'modality',
    'city_expedition',
    'download_date',
  ];
}
