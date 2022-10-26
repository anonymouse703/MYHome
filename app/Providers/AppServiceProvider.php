<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Opcodes\LogViewer\Facades\LogViewer;
use Illuminate\Support\Facades\Gate;
use Opcodes\LogViewer\LogFolder;
use Opcodes\LogViewer\LogFile;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->registerPolicies();

        Schema::defaultStringLength(125);

        LogViewer::auth(fn ($request) => $request->user()->hasRole('admin'));

        Gate::define('downloadLogFile', function (?User $user, LogFile $file) {
            return $user->hasRole('admin')
                && $file->name !== 'errors.log';
        });

        Gate::define('downloadLogFolder', function (?User $user, LogFolder $folder) {
            return $user->hasRole('admin')
                && $folder->name !== 'errors.log';
        });

        Gate::define('deleteLogFile', function (?User $user, LogFile $file) {
            return $user->hasRole('admin')
                && $file->name !== 'errors.log';
        });

        Gate::define('deleteLogFolder', function (?User $user, LogFolder $folder) {
            return $user->hasRole('admin')
                && $folder->name !== 'errors.log';
        });
    }
}
