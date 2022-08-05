<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;
use App\Models\User;
use App\Models\Permission;
use App\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
    * The policy mappings for the application.
    *
    * @var array
    */
    protected $policies = [
        
    ];

    /**
    * Register any authentication / authorization services.
    *
    * @return void
    */
    public function boot()
    {
    
        $permissions = Permission::with('roles')->get();
      
        foreach ($permissions as $permission){
       
        Gate::define($permission->name,function (User $user) use ($permission){
        
            return $user->hasPermission($permission);
        });
        }

        
        Gate::before(function ($user, $ability) {
             
        if ($user->hasAnyRoles('adm')){
        return true;
        }
        });
        
    }
}