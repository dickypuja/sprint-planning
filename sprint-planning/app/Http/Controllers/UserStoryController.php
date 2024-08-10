<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserStory;

class UserStoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $userStoryId = $request->input('user_story_id');

        $userStories = UserStory::when($userStoryId, function ($query, $userStoryId) {
            return $query->where('milestone_id', $userStoryId);
        })->whereNotNull('point')->orderBy('id', 'asc')->get();

        return view('user_stories.index', compact('userStories'));
    }

    // Other methods...
}
