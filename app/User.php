<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cuentas(){
      return $this->hasMany(Cuenta::class);
    }

    public function getCuentaAttribute(){
      $cuenta = $this->cuentas()->where('status', 'Active')->first();
      if ($cuenta) {
        return $cuenta;
      }else {
        $cuenta = new Cuenta();
        $cuenta->status = 'Active';
        $cuenta->user_id = $this->id;
        $cuenta->save();
        return $cuenta;
      }
    }

    // public function getCompraAttribute(){
    //   $cuenta = $this->cuentas()->where('status','!=', 'Active')->get();
    //   if ($cuenta) {
    //     return $cuenta;
    //   }
    // }
}
