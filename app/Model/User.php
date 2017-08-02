<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user';

    // register
    static function addUser(Array $param)
    {
        return static::create($param);
    }

    // edit user
    static function editUser($id, $param)
    {
        $res = static::where('id', $id)->update($param);
        if ($res) {
            return true;
        }
        return false;
    }

    // destory
    static function delUser($id)
    {
        return static::destroy($id);
    }

    // user list
    static function showUser()
    {
        return static::where('is_delete', null)->get();
    }


}
