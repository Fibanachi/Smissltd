<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    protected $fillable = [
        'name', 'email', 'address', 'password',
    ];

    public static function add($fields)
    {
        $user = new static;
        $user->fill($fields);
        $user->save();

        return $user;
    }

    public function generatePassword($password)
    {
        if($password != null)
        {
            $this->password = bcrypt($password);
            $this->save();
        }
    }

}
