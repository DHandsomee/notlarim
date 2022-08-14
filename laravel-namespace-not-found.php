#Laravelde eğer namespace not found hatası alıyorsan bunları uygula.

app/Providers/RouteServiceProvider.php dosya içerisinde değiştir.

protected $namespace = 'App\Http\Controllers';

$this->routes(function () {
    Route::middleware('api')
        ->prefix('api')
        ->namespace($this->namespace)
        ->group(base_path('routes/api.php'));

    Route::middleware('web')
        ->namespace($this->namespace)
        ->group(base_path('routes/web.php'));
});

