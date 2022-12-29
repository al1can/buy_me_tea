<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PageController extends Controller
{
    public function show(String $link)
    {
        $page = Page::where('link', '/'.$link)->first();
        return view('page.show', compact('page'));
    }

    public function create()
    {
        return view('page.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'work' => ['max:255'],
            'about' => ['required', 'string'],
            'social' => ['max:255'],
            'link' => ['required', 'max:20'],
            'image' => ['required', 'image']
        ]);

        $imagePath = $request->image->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(400, 400);
        $image->save();

        auth()->user()->page()->create([
            'work' => $request->work,
            'about' => $request->about,
            'image' => $imagePath,
            'social' => $request->social,
            'link' => '/'.$request->link
        ]);

        $page = Page::where('link', '/'.$request->link)->first();
        return redirect('/'.$request->link)->with(['page' => $page]);
    }

}
