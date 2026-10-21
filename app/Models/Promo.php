<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Promo extends Model {
    protected $guarded = ['id'];
    protected $casts = ['start_date' => 'date', 'end_date' => 'date'];
    public function microsite() { return $this->belongsTo(Microsite::class); }
}