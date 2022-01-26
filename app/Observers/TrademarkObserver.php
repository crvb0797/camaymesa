<?php

namespace App\Observers;

use App\Models\Trademark;
use Illuminate\Support\Facades\Storage;

class TrademarkObserver
{
    public function creating(Trademark $trademark)
    {
        if (!\App::runningInConsole()) {
            $trademark->user_id = auth()->user()->id;
        }
    }

    public function deleting(Trademark $trademark)
    {
        if ($trademark->image) {
            Storage::delete($trademark->image->url);
        }
    }
}
