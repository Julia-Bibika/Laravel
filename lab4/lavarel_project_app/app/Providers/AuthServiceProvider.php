<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Fuel;
use App\Models\Station;
use App\Policies\FuelPolicy;
use App\Policies\StationPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Fuel::class=>FuelPolicy::class,
        Station::class=>StationPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
