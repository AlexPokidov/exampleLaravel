<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserGame extends Model
{
    use HasFactory;
    protected $table = "usergame";
    protected $primaryKey = 'User_ID';

    protected $fillable = [
        'User_Tricolor_ID',
    ];
    public $timestamps = true;

    public function statistics(): HasOne
    {
        return $this->hasOne(Statistics::class, 'User_ID');
    }

}
