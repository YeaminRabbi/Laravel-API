<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       return [
        "id"            =>(int) $this->id ?? 0,
        "name"          => (string) $this->name ?? '',
        "dept"          => (string) $this->dept?? '',
        "batch"         => (string) $this->batch?? '',
        "email"         => (string) $this->email?? '',
        "admited_at"    => (string) $this->created_at?? '',
        // "updated_at"    => $this->id
       ];
    }
}
