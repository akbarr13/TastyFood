<?php

namespace App\Providers;

use App\Models\Message;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            // Logic to fetch notifications
            $notifications = [
                'messageCount' => Message::where('is_readed', false)->count(), // Example data, fetch from DB
                'messages' => [
                    ['text' => '4 new messages', 'time' => '3 mins'],
                    // Add more notifications as needed
                ],
                'totalNotifications' => 6,
                'latestMessage' => Message::latest()->get(),
            ];

            // Pass data to all views
            $view->with('notifications', $notifications);
        });
    }
}
