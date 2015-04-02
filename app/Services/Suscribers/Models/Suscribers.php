<?php


namespace App\Services\Suscribers\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Suscribers
 *
 * @author jfonseca
 */
class Suscribers extends Model{
    
    protected $table = "suscribers";
    protected $fillable = ['email'];
}
