<?php

class Page extends Eloquent {
    protected $table = 'pages';
	protected $fillable = ['id', 'title', 'slug', 'body', 'user_id', 'created_at', 'updated_at'];
}