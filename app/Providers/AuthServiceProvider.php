<?php

namespace App\Providers;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerDashboardPolicies();
        $this->registerAdminsPolicies();
        $this->registerAdminmenuPolicies();
        $this->question();
        $this->testimonial();
        $this->configIndex();
        $this->category();
        $this->userInformation();
       // Passport::routes();

        //
    }

     //category
    public function userInformation(){
        
        Gate::define('userInformation-index', function($user){
            return $user->hasAccess(['userInformation-index']);
        });

        Gate::define('userInformation-fetch', function($user){
            return $user->hasAccess(['userInformation-fetch']);
        });

        Gate::define('userInformation-show', function($user){
            return $user->hasAccess(['userInformation-show']);
        });
       
    }

     //category
    public function category(){
        
        Gate::define('category-index', function($user){
            return $user->hasAccess(['category-index']);
        });

        Gate::define('category-fetch', function($user){
            return $user->hasAccess(['category-fetch']);
        });

        Gate::define('category-store', function($user){
            return $user->hasAccess(['category-store']);
        });

        Gate::define('category-edit', function($user){
            return $user->hasAccess(['category-edit']);
        });
        Gate::define('category-show', function($user){
            return $user->hasAccess(['category-show']);
        });

        Gate::define('category-active', function($user){
            return $user->hasAccess(['category-active']);
        });
        Gate::define('category-disable', function($user){
            return $user->hasAccess(['category-disable']);
        });
    }
     //configIndex
    public function configIndex(){
        
        Gate::define('configIndex-index', function($user){
            return $user->hasAccess(['configIndex-index']);
        });

        Gate::define('configIndex-store', function($user){
            return $user->hasAccess(['configIndex-store']);
        });
    }    
     //testimonial
    public function testimonial(){
        
        Gate::define('testimonial-index', function($user){
            return $user->hasAccess(['testimonial-index']);
        });

        Gate::define('testimonial-fetch', function($user){
            return $user->hasAccess(['testimonial-fetch']);
        });

        Gate::define('testimonial-store', function($user){
            return $user->hasAccess(['testimonial-store']);
        });

        Gate::define('testimonial-edit', function($user){
            return $user->hasAccess(['testimonial-edit']);
        });
       
        Gate::define('testimonial-active', function($user){
            return $user->hasAccess(['testimonial-active']);
        });
        Gate::define('testimonial-disable', function($user){
            return $user->hasAccess(['testimonial-disable']);
        });
        
    }

     //question
    public function question(){
        
        Gate::define('question-index', function($user){
            return $user->hasAccess(['question-index']);
        });

        Gate::define('question-fetch', function($user){
            return $user->hasAccess(['question-fetch']);
        });

        Gate::define('question-store', function($user){
            return $user->hasAccess(['question-store']);
        });

        Gate::define('question-edit', function($user){
            return $user->hasAccess(['question-edit']);
        });
        Gate::define('question-show', function($user){
            return $user->hasAccess(['question-show']);
        });
        
    }

    public function registerAdminmenuPolicies(){
    
        Gate::define('menu-index', function($user){
            return $user->hasAccess(['menu-index']);
        });

    }


    
    //Dashboard
    public function registerDashboardPolicies(){
    
       /* Gate::define('stats-number', function($user){
            return $user->hasAccess(['stats-number']);
        });

       */

    }
    

    //Sub Admins
    public function registerAdminsPolicies(){
        Gate::define('admins-index', function($user){
            return $user->hasAccess(['admins-index']);
        });

        Gate::define('create-staff', function($user){
            return $user->hasAccess(['create-staff']);
        });

        Gate::define('edit-staff', function($user){
            return $user->hasAccess(['edit-staff']);
        });

        Gate::define('status-staff', function($user){
            return $user->hasAccess(['status-staff']);
        });

        Gate::define('show-staff', function($user){
            return $user->hasAccess(['show-staff']);
        });
        
        Gate::define('delete-staff', function($user){
            return $user->hasAccess(['delete-staff']);
        });


        Gate::define('staff-reset-password', function($user){
            return $user->hasAccess(['staff-reset-password']);
        });

    }

}
