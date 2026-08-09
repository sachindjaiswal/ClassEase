<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClassesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        {
        return [
            'id' => $this->id,
            'class_name' => $this->class_name,
            'section' => $this->section,
            'room_no' => $this->room_no,

            'class_teacher' => $this->teacher ? [
                'id' => $this->teacher->id,
                'name' => $this->teacher->first_name
                    . ' ' . $this->teacher->middle_name
                    . ' ' . $this->teacher->surname,
                'email' => $this->teacher->email,
                'contact' => $this->teacher->contact,
                'designation' => $this->teacher->designation,
            ] : null,
        ];
    }
    }
}
