<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class Course extends Model implements Feedable	
{
    //
	public function toFeedItem()
	{
		return FeedItem::create([
      'id' => $this->id,
      'title' => $this->name,
      'summary' => $this->course,
      'author' => $this->teacher_name,
      'school' => $this->school_name,
      'link' => route('getCourse', ['id' =>$this->id]),
   	  'photo' => 'https://source.unsplash.com/random/600x300',
   	  'pdf' => route('getPDF'),
   	  'updated' =>$this->updated_at,
    ]);
	}
	public static function getFeedItems()
	{
		return Course::all();
	}
}
