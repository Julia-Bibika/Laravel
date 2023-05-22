<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Good;
use App\Models\Owner;
use App\Policies\GoodPolicy;
use App\Policies\OwnerPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Good::class=>GoodPolicy::class,
        Owner::class=>OwnerPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
