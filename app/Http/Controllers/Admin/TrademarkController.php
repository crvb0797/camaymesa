<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trademark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrademarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.trademarks.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trademarks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $trademark = Trademark::create($request->all());
        if ($request->file('file')) {
            $url = Storage::put('trademarks', $request->file('file'));
            $trademark->image()->create([
                'url' => $url,
            ]);
        }


        return redirect()->route('admin.trademarks.create')->with('info', 'La marca se creo con éxito 👍🏻');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trademark $trademark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trademark $trademark)
    {
        return view('admin.trademarks.edit', compact('trademark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trademark $trademark)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $trademark->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('$trademarks', $request->file('file'));

            if ($trademark->image) {
                Storage::delete($trademark->image->url);
                $trademark->image->update([
                    'url' => $url,
                ]);
            } else {
                $trademark->image()->create([
                    'url' => $url,
                ]);
            }
        }

        return redirect()->route('admin.trademarks.edit', $trademark)->with('info', 'La marca se actualizó con éxito ✍🏻');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trademark $trademark)
    {
        $trademark->delete();
        return redirect()->route('admin.trademarks.index')->with('info', 'La marca se eliminó con éxito 🧨');
    }
}
