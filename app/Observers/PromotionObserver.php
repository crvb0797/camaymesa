<?php

namespace App\Observers;

use App\Models\Promotion;
use Illuminate\Support\Facades\Storage;

class PromotionObserver
{
    public function creating(Promotion $promotion)
    {
        if (!\App::runningInConsole()) {
            $promotion->user_id = auth()->user()->id;
        }
    }

    public function deleting(Promotion $promotion)
    {
        if ($promotion->image) {
            Storage::delete($promotion->image->url);
        }
    }
}
