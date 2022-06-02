<?php

namespace App\Http\Controllers;

use App\Models\Frame;
use Illuminate\Http\Request;
use App\Http\Resources\FramesResource;

class FramesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FramesResource::collection(Frame::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'shot_1'            => 'nullable|regex:/^[0-9-xX\/\\\]*$/',
            'shot_2'            => 'nullable|regex:/^[0-9-xX\/\\\]*$/',
            'shot_3'            => 'nullable|regex:/^[0-9-xX\/\\\]*$/',
            'pins_knocked_down' => 'nullable|regex:/^[0-9-xX\/\\\]*$/'
        ]);

        $frame = Frame::create([
            'game_id'   => $request->game_id,
            'frame_num' => $request->frame_num,
            'shot_1'    => $request->shot_1,
            'shot_2'    => $request->shot_2,
            'shot_3'    => $request->shot_3,
            'pins_knocked_down' => $request->pins_knocked_down,
            'points'    => $request->points
        ]);

        return new FramesResource($frame);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frame  $frame
     * @return \Illuminate\Http\Response
     */
    public function show(Frame $frame)
    {
        return new FramesResource($frame);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frame  $frame
     * @return \Illuminate\Http\Response
     */
    public function edit(Frame $frame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFrameRequest  $request
     * @param  \App\Models\Frame  $frame
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frame $frame)
    {
        $request->validate([
            'shot_1'            => 'nullable|regex:/^[0-9-xX\/\\\]*$/',
            'shot_2'            => 'nullable|regex:/^[0-9-xX\/\\\]*$/',
            'shot_3'            => 'nullable|regex:/^[0-9-xX\/\\\]*$/',
            'pins_knocked_down' => 'nullable|regex:/^[0-9-xX\/\\\]*$/'
        ]);

        $frame->update([
            'game_id'   => $request->game_id,
            'frame_num' => $request->frame_num,
            'shot_1'    => $request->shot_1,
            'shot_2'    => $request->shot_2,
            'shot_3'    => $request->shot_3,
            'pins_knocked_down' => $request->pins_knocked_down,
            'points'    => $request->points
        ]);

        return new FramesResource($frame);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frame  $frame
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frame $frame)
    {
        $frame->delete();
        redirect()->route('frames.index');
    }
}
