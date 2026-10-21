<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model {
    protected $guarded = ['id'];
    public function microsite() { return $this->belongsTo(Microsite::class); }
    public function menuItems() { return $this->hasMany(MenuItem::class); }
}