<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;
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

       Passport::routes();
       Passport::tokensExpireIn(now()->addSecond(60));

         /* define a admin user role */
         Gate::define('isAdmin', function($user) {
            return(auth()->user()->hasRole('administrador') == 'administrador');
         });

         Gate::define('isOperador', function($user) {
            return(auth()->user()->hasRole('operador') == 'operador');
         });

         Gate::define('isAnalista', function($user) {
            return(auth()->user()->hasRole('analista') == 'analista');
         });


       /* Passport::tokensCan([
            'create-post' => 'Crear nuevo post',
            'read-post' => 'Leer un post',
            'update-post' => 'Actualizar un post',
            'delete-post' => 'Eliminar un post'
        ]);

        Passport::setDefaultScope([
            'read-post'
        ]);*/

        //
    }
}
