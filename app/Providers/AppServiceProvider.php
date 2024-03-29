<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Models\Permission;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    protected function registerUserAccessToGates()
    {
      try {
        //This creates "Gates" for all permissions by title
        foreach(Permission::pluck('title') as $permission) {
          Gate::define($permission, function ($user) use ($permission) {
            return $user->roles()->whereHas('permissions', 
            //second argument to whereHas() is a callback
            function($q) use ($permission) {
              $q->where('title', $permission);
            })->count() > 0;
          });
        }
      } catch (\Exception $e) {
        info('registerUserAccessToGates: Database not found or not yet migrated. Ignoring user permissions while booting app.');
      }
    }
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
