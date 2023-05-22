<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReport;
use App\Http\Requests\UpdateReport;
use App\Models\Post;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $post = Post::find($id);
        return view('create-report', ['post' => $post]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReport $request)
    {
        $imagen = '';
        $urlImg = '';
        $report = new Report();
        if (!$request->file('image') == null)
        {
            $imagen = $request->file('image')->store('public/reportImages');
            $urlImg = Storage::url($imagen);
        }
        $report->user_id = Auth::id();
        $report->body = $request->input('description');
        $report->reason = $request->input('reason');
        $report->url_image = $urlImg;
        $report->post_id = $request->input('postID');
        $report->save();
        return redirect()->route('report.show', $report);
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        return view('report', ['report' => $report]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        return view('edit-report', ['report' => $report]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReport $request, Report $report)
    {
        $report->reason = $request->input('reason');
        $report->body = $request->input('description');
        $imagen = '';
        $urlImg = '';
        if (!$request->file('image') == null)
        {
            $imagen = $request->file('image')->store('public/reportImages');
            $urlImg = Storage::url($imagen);
        }
        $report->url_image = $urlImg;
        $report->save();
        return redirect()->route('report.show', $report);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->route('post.index');
    }
}
