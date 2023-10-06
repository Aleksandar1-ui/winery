<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
    protected $table='vino';
    use HasFactory;
    //protected $fillable = ['ime','godina','cena','opis','vinarija','grad','adresa','tip','email','strana'];

    public function scopeFilter($query, array $filters,$search) {
    foreach ($filters as $vrednost => $value) {
        if (request()->has($vrednost)) {
            $query->orWhere($vrednost, '=', $value);
        }
    }
    if($search) {
        $query->orWhere('godina','=',$search)
        ->orWhere('cena','=',$search)
        ->orWhere('tip','=',$search);
    }
}
public function user() {
    return $this->belongsTo(User::class,'user_id');
}
}
