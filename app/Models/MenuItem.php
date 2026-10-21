<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class MenuItem extends Model {
    protected $guarded = ['id'];
    public function microsite() { return $this->belongsTo(Microsite::class); }
    public function category() { return $this->belongsTo(Category::class); }
}