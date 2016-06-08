<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function store()
	{
  		$validator = Validator::make(Input::all(), [
    	"title"    => "required|max:50",
    	"subtitle" => "required|max:100",
    	"body"     => "required",
    	"author"   => "required|exists:authors"
  	]);
  
  	if ($validator->passes()) 
  	{
    	Posts::create([
      	"title"     => Input::get("title"),
      	"subtitle"  => Input::get("subtitle"),
      	"body"      => Input::get("body"),
      	"author_id" => Input::get("author"),
      	"slug"      => Str::slug(Input::get("title"))
    	]);
  
    	Mail::send("emails.post", Input::all(), function($email) 
    	{
	      	$email
	        ->to("cgpitt@gmail.com", "Chris")
	        ->subject("New post");
		});
  
    	return Redirect::route("posts.index");
  		}
  
  		return Redirect::back()
    	->withErrors($validator)
    	->withInput();
	}
}
