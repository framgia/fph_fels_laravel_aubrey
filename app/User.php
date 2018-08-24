<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;
use Image;

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

    public function updateProfile($request)
    {
        $this->fill([
            'name'     => $request->name,
            'email'    => $request->email,
        ]);

        //if password was changed
        if(!is_null($request->password)) {
            $this->password = bcrypt($request->password);
        }

        //if user uploaded a file
        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename) );

            $this->avatar = $filename;
        }
        
        return $this->save();
    }
}
