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
     * Get Users by ID
     *
     * @param int     $id    id users.
     * @param boolean $throw throw exception.
     *
     * @return users
     */
    public static function getUsersById($id, $throw = false)
    {
        if ($throw) {
            return self::findOrFail($id);
        } else {
            return self::find($id);
        }
    }

    /**
     * Create Users
     *
     * @param array $data data user submit.
     *
     * @return users create
     */
    public static function createUser($data)
    {
        $data['password'] = Hash::make($data['password']);
        $data['is_admin'] = (isset($data['is_admin']) && $data['is_admin'] == 'on') ? 1 : 0;
        $users = self::create($data);
        return $users;
    }

    /**
     * Update Users
     *
     * @param int   $id   id users.
     * @param array $data data user submit.
     *
     * @return users update.
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
     * Get data Users
     *
     * @return data Users [id, name, email]
     */
    public static function getData()
    {
        return self::select(['id','name','email']);
    }
}
