<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->prefix('coba')
                ->name('coba.')
                ->group(base_path('routes/coba.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->prefix('mengulang')
                ->name('mengulang.')
                ->group(base_path('routes/mengulang/admin.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->prefix('blogg')
                ->name('blogg.')
                ->group(base_path('routes/mengulang/blog.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->prefix('perpustakaan')
                ->name('perpustakaan.')
                ->group(base_path('routes/mengulang/perpustakaan.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->prefix('rpegawai')
                ->name('rpegawai.')
                ->group(base_path('routes/mengulang/rpegawai.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->prefix('orm')
                ->name('orm.')
                ->group(base_path('routes/mengulang/orm.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->prefix('belajarlogin')
                ->name('belajarlogin.')
                ->group(base_path('routes/belajar/belajarlogin.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->prefix('belajar')
                ->name('belajar.')
                ->group(base_path('routes/belajar/belajar.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->prefix('casniti')
                ->name('casniti.')
                ->group(base_path('routes/casniti.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->prefix('lebakbarang')
                ->name('lebakbarang.')
                ->group(base_path('routes/lebakbarang.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->prefix('aait')
                ->name('aait.')
                ->group(base_path('routes/aait/aait.php'));
            Route::middleware('web')
                ->namespace($this->namespace)
                ->prefix('aait/proses')
                ->name('aait.proses.')
                ->group(base_path('routes/aait/proses.php'));

        });
    }

    /**
     * Configure the rate limiters for the application.
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
