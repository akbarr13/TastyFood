<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    public function berita(Request $request)
    {
        $page = "Berita";
        $news =  News::paginate(10);
        Alert::confirmDelete("Delete News", "Are you sure want to delete this news?");


        foreach ($news as $new) {
            $new->status = Str::ucfirst($new->status);
        }

        return view("dashboard.pages.berita", compact("page", "news"));
    }

    public function showNews($slug)
    {
        $page = "Edit Berita";
        $type = "edit";
        $news = News::where("slug", $slug)->first();
        // dd($news);
        return view("dashboard.action.berita", compact("news", "page", "type"));
    }

    public function editNews(Request $request, $slug)
    {

        $news = News::where("slug", $slug)->first();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->status = $request->status;
        if($news->status == "published"){
            $news->published_at = Carbon::now();
        }


        // Handle the image upload
        if ($request->hasFile('image')) {
            // Get the file
            $image = $request->file('image');

            // Generate a unique name for the image
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Save the image in the 'public/images' directory
            $image->move(public_path('assets/images'), $imageName);
            $news->image = $imageName;

            $news->save();

            // Optionally, you can save the image path to the database (not included in this example)
            return redirect('/dashboard/berita');
        }
        $news->save();

        toast('The news successfully edited!', 'success');

        return redirect('/dashboard/berita');
    }

    public function addNews(Request $request)
    {
        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->status = $request->status;
        $news->slug = Str::slug($request->title);
        $image = $request->file('image');
        // dd($request);

        // Generate a unique name for the image
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Save the image in the 'public/images' directory
        $image->move(public_path('assets/images'), $imageName);
        $news->image = $imageName;
        $news->user_id = Auth::user()->id;
        $news->save();


        toast('The news successfully added!', 'success');


        // Optionally, you can save the image path to the database (not included in this example)
        return redirect('/dashboard/berita');
    }

    public function deleteNews($slug){
        $news = News::where('slug', $slug)->first();
        if($news){
            $news->delete();
            toast('The news successfully deleted!', 'success');

            return redirect()->back();
        }
    }
}
