<?php

namespace App\Repositories\Admin;

use App\Models\Category;
use App\Models\CategoryFeature;
use App\Models\CategoryFeatureValue;
use App\Models\Story;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdminStoryRepository implements AdminStoryRepositoryInterface
{
    public function submit($formData, $thumbnail, $story)
    {
        $thumbnailFileName = pathinfo($thumbnail->hashName(), PATHINFO_FILENAME) . '.' . $thumbnail->extension();
        $storyFileName = pathinfo($story->hashName(), PATHINFO_FILENAME) . '.' . $story->extension();

        Story::query()->create([
            'title' => $formData['title'],
            'thumbnail' => $thumbnailFileName,
            'story' =>  $storyFileName
        ]);


        Storage::disk('public')->put('stories/thumbnail', $thumbnail);
        Storage::disk('public')->put('stories/story', $story);
    }

    public function delete($story)
    {
        $thumbnail = $story->thumbnail;
        $storyFile = $story->story;

        File::delete('stories/thumbnail/' . $thumbnail);
        File::delete('stories/story/' . $storyFile);

        $story->delete();
    }

    public function changeStatus($story)
    {
        if ($story->status) {
            $story->update(['status' => false]);
        } else {
            $story->update(['status' => true]);
        }
    }
}
