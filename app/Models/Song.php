<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;
class Song extends Model
{
    use HasFactory;
    //Add fillable fields corresponding to database columns
    protected $fillable=['title', 'artist'];
    public function getTitle() {
        return $this->title;
    }
    public function getArtist() {
        return $this->artist;
    }
}
