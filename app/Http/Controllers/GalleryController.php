<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    public function gallery(Request $request)
    {
        $page = "Galeri";
        $photos = Gallery::all();

        Alert::confirmDelete("Delete Image", "Are you sure want to delete this photo?");



        return view("dashboard.pages.galeri", compact("page", "photos"));
    }



    public function addPhoto(Request $request)
    {
        $photos = new Gallery();
        $photos->title = $request->title;
        $image = $request->file('image');
        // dd($request);

        // Generate a unique name for the image
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Save the image in the 'public/images' directory
        $image->move(public_path('assets/images'), $imageName);
        $photos->user_id = Auth::user()->id;
        $photos->filename = $imageName;
        $photos->save();



        toast('The image successfully added!', 'success');

        return redirect('/dashboard/galeri');
    }

    public function deletePhoto($id)
    {
        $photo = Gallery::find($id);
        $photo->delete();
        toast('The image has been deleted!', 'success');

        return redirect('/dashboard/galeri');
    }
}
