<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Post;
use App\Policies\PostPolicy;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Post::class => PostPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-post', function(User $user, Post $post){
            //   kiem tra user id hien tai co bang user trong post ko
            // cach 1
            if($user->id === $post->user_created_id){
                return true;
            }else{
                return false;
            }
            //    cach 2
            // return $user->id === $post->user_id | $user->role == 'admin';
        });

        Gate::define('delete-post', function(User $user, Post $post){
            //   kiem tra user id hien tai co bang user trong post ko
            // cach 1
            if($user->id === $post->user_created_id){
                return true;
            }else{
                return false;
            }
            //    cach 2
            // return $user->id === $post->user_id | $user->role == 'admin';
        });
        Gate::define('delete-user', function(User $user){
            //   kiem tra user id hien tai co bang user trong post ko
            // cach 1
            if($user->role == 'admin'){
                return true;
            }else{
                return false;
            }
            //    cach 2
            // return $user->role == 'admin';
        });

        //
    }
}
