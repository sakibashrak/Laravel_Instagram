<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{    
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/xnWqQ4vkgS0pWT7XEk9TYvTOtJYlBi69MO6bwvkj.png';
        return '/storage/' .  $imagePath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
