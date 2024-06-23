<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\Venue\VenueStoreRequest;
use App\Http\Requests\Web\Admin\Venue\VenueUpdateRequest;
use App\Models\Event;
use App\Models\Venue;
use App\Traits\FilesTrait;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    use FilesTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $venues = Venue::paginate();
        return view('admin.pages.venue.index', compact('venues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::all();
        return view('admin.pages.venue.create', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VenueStoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $venue = Venue::create($data);
        $venue->image()->create([
            'image' => FilesTrait::store($request->image, Venue::IMG_URL),
        ]);
        return redirect()->route('admin.venues.index')->with('success', 'Venue Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Venue $venue)
    {
        return view('admin.pages.venue.show', compact('venue'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venue $venue)
    {
        $events = Event::all();
        return view('admin.pages.venue.edit', compact('venue', 'events'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VenueUpdateRequest $request, Venue $venue)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $venue->update($data);
        if (isset($request->image)) {
            if (isset($venue->image)) {
                FilesTrait::delete($venue->image->image);
            }
            $venue->image()->update([
                'image' => FilesTrait::store($request->image, Venue::IMG_URL),
            ]);
        }
        return redirect()->route('admin.venues.index')->with('success', 'Venue Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venue $venue)
    {
        if (isset($venue->image)) {
            FilesTrait::delete($venue->image->image);
            $venue->image()->delete();
        }
        $venue->delete();
        return back()->with('success', 'Venue Deleted Successfully');
    }
}
