<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use App\Models\Gallery;
use App\Models\Message;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUser = User::count();
        $totalNews = News::count();
        $totalPhotos = Gallery::count();
        $totalMessages = Message::count();
        $messages = DB::table("messages")->limit(4)->get();

        $page = "Dashboard";

        return view("dashboard.pages.main", compact("totalUser", "totalNews", "totalPhotos", "page", "totalMessages", "messages"));
    }


}
