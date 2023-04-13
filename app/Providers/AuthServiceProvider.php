<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function __construct()
    {
        session_start();
    }

    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
         'App\Models\Estudiante' => 'App\Policies\EstudiantePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        if(isset($_SESSION['AuthGuard'])){
            Auth::setDefaultDriver( $_SESSION['AuthGuard']);
        }

        $this->registerPolicies();

        //
    }
}
