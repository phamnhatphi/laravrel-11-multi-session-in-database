// ...existing code...

public function boot()
{
    $this->registerPolicies();

    // ...existing code...

    \Illuminate\Support\Facades\Session::extend('database', function ($app) {
        $connection = $app['db']->connection();
        $table = config('session.table', 'sessions');
        $lifetime = config('session.lifetime');

        return new \Illuminate\Session\DatabaseSessionHandler(
            $connection, $table, $lifetime, $app
        );
    });
}

// ...existing code...
