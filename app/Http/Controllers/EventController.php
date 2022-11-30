<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventCreateRequest;
use App\Models\Event;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function create(EventCreateRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['track_idealist_check'] = $request->boolean('track_idealist_check');
        $data['track_olx_check'] = $request->boolean('track_olx_check');
        $data['track_fb_check'] = $request->boolean('track_fb_check');
        $event = new Event();
        $event->fill($data);
        $event->user()->associate(\Auth::user());
        $event->save();
        if ($event->getQueueableId()) {
            return redirect()->route('home')->with(['successMessages' => [trans('main.success_created')]]);
        }

        return back()->withErrors(['all' => [trans('validation.something_wrong')]]);
    }

    public function delete(Request $request): RedirectResponse
    {
        if ($request->has('event')) {
            $event = Event::query()->findOrFail($request->get('event'));
            $event->delete();

            return redirect()->route('home')->with(['successMessages' => [trans('main.success_deleted')]]);
        }

        return back()->withErrors(['all' => [trans('validation.something_wrong')]]);
    }

    public function getModal(Event $event): View
    {
        return view('modals.event_info', compact('event'));
    }
}
