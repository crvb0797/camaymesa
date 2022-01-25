<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.promotions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promotion = Promotion::create($request->all());
        if ($request->file('file')) {
            $url = Storage::put('promotions', $request->file('file'));
            $promotion->image()->create([
                'url' => $url,
            ]);
        }

        $request->validate([
            'name' => 'required',
            'link' => 'required'
        ]);


        return redirect()->route('admin.promotions.create')->with('info', 'La promoción se creo con éxito 👍🏻');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        return view('admin.promotions.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promotion $promotion)
    {
        $promotion->update($request->all());
        if ($request->file('file')) {
            $url = Storage::put('promotions', $request->file('file'));

            if ($promotion->image) {
                Storage::delete($promotion->image->url);
                $promotion->image->update([
                    'url' => $url,
                ]);
            } else {
                $promotion->image()->create([
                    'url' => $url,
                ]);
            }
        }

        $request->validate([
            'name' => 'required',
            'link' => 'required'
        ]);

        return redirect()->route('admin.promotions.edit', $promotion)->with('info', 'La promoción se actualizó con éxito ✍🏻');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return redirect()->route('admin.promotions.index')->with('info', 'La promoción se eliminó con éxito 🧨');
    }
}
