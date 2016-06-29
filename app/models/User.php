<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends BaseModel implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
    protected $table = 'users';

    /**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
    protected $hidden = array('password', 'remember_token');

    /**
    * The properties of this model that can be filled automatically
    */
    protected $fillable = ['first_name', 'last_name', 'email', 'last_login', 'bio', 'password', 'remember_token', 'picture_url', 'status'];

    /**
     * Model Validation Rules
     */
    protected $rules = [
        'create' => [
            'email' => 'unique:users',
            'first_name' => 'min:2|required',
            'password' => 'confirmed',
            'last_name' => 'min:3',
        ],
        'update' => [

        ],
    ];

    public function isBanned()
    {
        return $this->status === Config::get('constants.status.ban');
    }
    
    public function getPictureAttribute()
    {
        return url($this->picture_url);
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

}
