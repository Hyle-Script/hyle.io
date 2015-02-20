<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Paste extends Model {

	protected $fillable = ['paste'];

	protected $append = ['encoded_id'];

	public function getEncodedIdAttribute()
	{
		return base64_encode($this->id);
	}
}
