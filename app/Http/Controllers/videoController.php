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
        return view('admin.video.selfVideo');
    }

    public function upload(Request $request)
    {
        $video = $request->file('video');
        $name_gen = hexdec(uniqid()) . '.' . $video->getClientOriginalExtension();
        $save_url = 'upload/video/' . $name_gen;

        if ($video->move(public_path('upload/video'), $name_gen)) {
            SelfVideo::create([
                'title' => $request->input('title'),
                'file_path' => $save_url,
            ]);

            return redirect()->back()->with('success', 'Video uploaded successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to upload video.');
        }
    }

    public function deleteSelfVideoData($id)
    {
        SelfVideo::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function allSelfVideo()
    {
        return view('admin.video.allselfVideo');
    }
};
