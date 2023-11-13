<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use DB;
use App\Models\ads;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('update',function ($user , $id)
        {
            $ad = ads::where('id',$id)->get();
            return $user->id === $ad[0]->user_id;
        });
        Gate::define('isadmin',function($user)
        {
            if($user->rule_no==1 )
            {
                return true;
            }else
            {
                return false;
            }
        });
        Gate::before(function($user)
        {
            if($user->rule_no==1 )
            {
                return true;
            }
        });

        //
    }
}
