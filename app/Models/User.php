<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Interfaces\CalculateBonusInterface;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','channels','subscribers'
    ];

    protected $appends = ['bonus'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //// third: Liskov substitution principle
    //// look at the App/Calculators folder
    /*
    public function getBonusAttribute(){
        $class = '\App\Calculators\\'.$this->type.'BonusCalculator';
        return (new $class)->calculate($this->salary);
    }
    */
    
    // here is the solution to liskov
    //look at App\SolidCalculators folder
    public function getBonusAttribute(){
        $class = '\App\SolidCalculators\\'.$this->type.'BonusCalculator';
        
        return $this->calculateBonus(new $class);
    }

    // public function calculateBonus(CalculateBonusInterface $service){
    //     return $service->calculate($this->salary);
    // }
    // return (new $class)->calculate($this->salary);
}
