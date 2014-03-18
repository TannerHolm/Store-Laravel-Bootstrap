<?php

class Post extends \Eloquent {

protected $guarded = ['id', 'created_at', 'updated_at'];

	// Add your validation rules here
	public static $rules = [
		'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public function content()
	{
		return nl2br($this->content);
	}

		public function title()
	{
		return nl2br($this->title);
	}

	public function price()
	{
		return nl2br($this->price);
	}
}