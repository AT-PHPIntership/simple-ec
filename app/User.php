<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
use Hash;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password','phone','adress'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = true;

    /**
     * @param $id
     * @param bool $throw
     * @return users by ID
     */
    public static function getUsersById($id, $throw = false)
    {
        if( $throw ) {
            return self::findOrFail($id);
        } else {
            return self::find($id);
        }
    }

    /**
     * @param $data
     * @return Users after create
     */
    public static function createUser($data)
    {
        $data['password'] = Hash::make($data['password']);
        $data['is_admin'] = (isset($data['is_admin']) && $data['is_admin'] == 'on') ? 1 : 0;
        $users = self::create($data);
        return $users;
    }

    /**
     * @param $id
     * @param $data
     * @return Users after update
     */
    public static function updateUser($id, $data)
    {
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        $data['is_admin'] = (isset($data['is_admin']) && $data['is_admin'] == 'on') ? 1 : 0;
        $users = self::where('id', $id)->update($data);
        return $users;
    }

    /**
     * @return data Users [id, name, email]
     */
    public static function getData()
    {
        return self::select(['id','name','email']);
    }
}
