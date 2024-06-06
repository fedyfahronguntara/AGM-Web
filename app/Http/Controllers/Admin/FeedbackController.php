<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feedback;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreFeedbackRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FeedbackController extends Controller
{
    public function index(): View
    {
        $feedbacks = Feedback::get();

        return view('admin.feedbacks.index', compact('feedbacks'));
    }

    public function create(): View
    {
        return view('admin.feedbacks.create');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);


        Post::create($data);

        return redirect()->route('admin.feedbacks.index')->with('message', 'Added Successfully !');
    }

    public function edit(Feedback $feedback): View
    {
        return view('admin.feedbacks.edit', compact('feedback'));
    }

    public function update(StoreFeedbackRequest $request, Feedback $feedback): RedirectResponse
    {
        $data = $request->all();
        $feedback->update($data);

        return redirect()->route('admin.feedbacks.index')->with('message', 'Updated Successfully !');
    }

    public function destroy(Feedback $feedback): View
    {
        if($post->image){
            File::delete('storage/' . $post->image);
        }

        $feedback->delete();

        return redirect()->route('admin.feedbacks.index')->with('message', 'Deleted  Successfully !');
    }
}
