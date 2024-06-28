<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use App\Models\Post;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Using a view composer to share settings data
        View::composer('*', function ($view) {
            $settings = Setting::first(); // Fetching the settings (adjust as per your logic)
            $posts = Post::latest()->limit(5)->get(); // Fetching latest 5 posts (adjust as per your logic)
            $categories = Category::all(); // Fetching all categories (adjust as per your logic)

            // Share the settings, posts, and categories data with all views
            $view->with('settings', $settings)
                ->with('posts', $posts)
                ->with('categories', $categories);
        });

        View::composer('*', function ($view) {
            $posts = Post::latest()->get();
            $view->with('posts', $posts);
        });

        View::composer('*', function ($view) {
            $settings = Setting::first(); // Fetching the settings (adjust as per your logic)

            // Share the settings data with all views
            $view->with('settings', $settings);

            // Share the favicon URL with all views
            $faviconUrl = $settings ? asset('images/' . $settings->favicon) : ''; // Ensure settings exist before accessing favicon
            $view->with('favicon_url', $faviconUrl);

            // Share the brand name with all views
            $brandName = $settings ? $settings->brand_name : '';
            $view->with('brand_name', $brandName);
        });
    }

    public function register()
    {
        // Register any application services
    }
}
