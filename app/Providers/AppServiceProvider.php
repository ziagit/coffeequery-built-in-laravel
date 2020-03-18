<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Post;
use App\Project;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->share('pageTitle', 'Coffee Query');
        view()->share('metaContent', 'Coffee Query');

        $posts = Post::latest()->get(['id','title','slug','image'])->take(5);
        $projects = Project::latest()->get(['id','title','slug','image'])->take(5);

        view()->share('sharedPosts', $posts);
        view()->share('sharedProjects', $projects);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
