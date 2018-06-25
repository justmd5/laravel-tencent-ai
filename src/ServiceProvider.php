<?php
/**
 * Created for laravel-tencent-ai
 * User: 丁海军
 * Date: 2018/6/25
 * Time: 上午9:50
 */
namespace Justmd5\LaravelTencentAi;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Justmd5\TencentAi\Ai;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    public function boot ()
    {
        $this->publishes([realpath(__DIR__ . '/../publishes/config.php') => config_path('tencentai.php')], 'laravel-tencent-ai');
    }

    /**
     * Register the provider.
     */
    public function register ()
    {
        $this->app->singleton(Ai::class, function () {
            return new Ai(config('tencentai'));
        });
        $this->app->alias(Ai::class, 'tencent-ai');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides ()
    {
        return [
            Ai::class,
            'tencent-ai',
        ];
    }
}