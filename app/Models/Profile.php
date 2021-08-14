<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : 'profile/zunaKCAysari04iCyYqGHxFa5J5Emz6Ex6yM5y85.png';
        return '/storage/' . $imagePath;
    }


   public function user()
   {
       return $this->belongsTo(User::class);
   }
}
