<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use App\Models\Microsite;

class MicrositeScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $slug = env('MICROSITE_SLUG', 'restoran');
        $microsite = Microsite::where('slug', $slug)->first();
        
        if ($microsite) {
            $builder->where('microsite_id', $microsite->id);
        }
    }
}