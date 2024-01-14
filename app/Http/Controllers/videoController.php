<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use App\Models\SelfVideo;
use App\Models\video;

use Illuminate\Http\Request;

class videoController extends Controller
{
    public function addVideo()
    {
        return view('admin.video.addVideo');
    }

    public function storeBrand(Request $request)
    {

        video::insert([
            'title' => $request->video_name,
            'code_id' => $request->video_code,
        ]);
        return redirect()->route('all_video');
    }

    public function allVideo()
    {
        $video = video::latest()->get();
        return view('admin.video.allVideo', compact('video'));
    }

    public function deleteVideoData($id)
    {
        video::findOrFail($id)->delete();
        return redirect()->route('all_video');
    }

    // self-video 

    public function showForm()
    {
        return view('admin.video.SelfVideo');
    }

    public function upload(Request $request)
    {
        $video = $request->file('video');
        $name_gen = hexdec(uniqid()) . '.' . $video->getClientOriginalExtension();

        // Specify the path where you want to save the video file
        $videoPath = 'upload/product/product_video/' . $name_gen;

        // Store the video file using the Storage facade
        Storage::putFileAs('public/' . $videoPath, $video, $name_gen);

        $save_url = $videoPath;

        // If you also want to save the video details to the database
        SelfVideo::create([
            'title' => $request->input('title'),
            'file_path' => $save_url,
        ]);


        return redirect()->back()->with('success', 'Video uploaded successfully.');
    }

    public function index()
    {
        $videos = SelfVideo::all();
        return view('home', compact('videos'));
    }
};
