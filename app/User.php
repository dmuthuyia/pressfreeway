<?php

namespace pressfreeway;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    //
    use \Illuminate\Auth\Authenticatable;

    protected $table = 'users';

    protected $fillable = [
        'email', 'password', 'FirstName', 'LastName', 'UserName', 'mypic', 'dobyear', 'dobmonth', 'dobday', 'is_female', 'gender', 'Age', 'Race', 'is_kenyan', 'Country', 'origin', 'City', 'LookingFor', 'ShortBio', 'LongBio', 'Education', 'Hobby', 'Religion', 'CanMove', 'accepted_terms',
    ];

    public function cart()
    {
        return $this->hasMany('pressfreeway\Cart');
    }

    public function token()
    {
        return $this->hasMany('pressfreeway\Token');
    }

    public function Articles()
    {
        return $this->hasMany('pressfreeway\Article');
    }

    public function Views()
    {
        return $this->hasMany('pressfreeway\Article');
    }

    public function Reactions()
    {
        return $this->hasMany('pressfreeway\Reactions');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
