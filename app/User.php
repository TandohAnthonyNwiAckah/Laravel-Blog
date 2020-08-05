<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Self_;
use App\Todo;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar',
    ];

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



    //     /***
    //      * Define mutator for Password
    //      * 
    //      * 
    //      */
    //     public function setPasswordAttribute($password)
    //     {
    //         $this->attributes['password'] = bcrypt($password);
    //     }



    // /**
    //  * Define my Accessor
    //  * 
    //  */
    //     public function getNameAttribute($name)
    // {
    //     return 'My name is : '. ucfirst($name);
    // }



    public static function uploadAvatar($avatar)
    {

        $filename = $avatar->getClientOriginalName();

        (new self)->deletedOldAvatar();

        $avatar->storeAs('images', $filename, 'public');

        auth()->user()->update(['avatar' => $filename]);

    }


    protected function deletedOldAvatar()
    {
        if(auth()->user()->avatar) {

            Storage::delete('/public/images/' . auth()->user()->avatar);
        }
    }


    public function todos()
    {
       return $this->hasMany(Todo::class);
    }



}
