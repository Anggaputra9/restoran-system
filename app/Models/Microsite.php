<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Microsite extends Model {
    protected $guarded = ['id'];
    
    public function admins() { return $this->belongsToMany(Admin::class); }
    public function categories() { return $this->hasMany(Category::class); }
    public function menuItems() { return $this->hasMany(MenuItem::class); }
    public function orders() { return $this->hasMany(Order::class); }
}