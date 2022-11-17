<?php

namespace App\Models\Event\Repositories\Interfaces;

use App\Models\Event\Event;

interface EventRepositoryInterface
{
    public function index($params);
    public function store($data);
    public function event($id);
    public function update($data, $event_id);
    public function destroy($event_id);
}
