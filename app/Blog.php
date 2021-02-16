<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   protected $fillable = [
       'title',
       'subtitle',
       'author',
       'text',
       'publication_date'
   ];
}
