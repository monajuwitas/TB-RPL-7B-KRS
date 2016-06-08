<?php
 
  namespace Formativ;
 
  use Illuminate\Support\ServiceProvider;
 
  class PostServiceProvider extends ServiceProvider
  {
    protected $defer = true;
  
    public function register()
    {
      $this->app->bind(
      "Formativ\\PostRepositoryInterface",
      "Formativ\\PostRepository"
    );
  
    $this->app->bind(
      "Formativ\\PostValidatorInterface",
      "Formativ\\PostValidator"
    );
  
    $this->app->bind(
      "Formativ\\PostMailerInterface",
      "Formativ\\PostMailer"
    );
  }
  
  public function provides()
  {
    return [
      "Formativ\\PostRepositoryInterface",
      "Formativ\\ValidatorInterface",
      "Formativ\\MailerInterface"
    ];
  }
}