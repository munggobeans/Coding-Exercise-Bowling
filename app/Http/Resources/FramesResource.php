<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FramesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'type' => 'Frames',
            'attributes' => [
                'game_id' => $this->game_id,
                'frame_num' => $this->frame_num,
                'shot_1' => $this->shot_1,
                'shot_2' => $this->shot_2,
                'shot_3' => $this->shot_3,
                'pins_knocked_down' => $this->pins_knocked_down,
                'points' => $this->points,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ]
        ];
    }
}
