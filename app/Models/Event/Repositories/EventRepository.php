<?php

namespace App\Models\Event\Repositories;

use App\Models\Event\Repositories\Interfaces\EventRepositoryInterface;
use App\Models\Event\Event;
use Cache;
use Carbon\Carbon;

class EventRepository implements EventRepositoryInterface
{
    protected $model;

    public function __construct(Event $event)
    {
        $this->model = $event;
    }

    public function index($params)
    {
        if ($params) {
            switch ($params) {
                case 'finished-events':
                    $model = $this->model->where('end_date', '<', Carbon::today()->format('Y-m-d'));
                    break;

                case 'upcoming-events':
                    $model = $this->model->where('start_date', '>', Carbon::today());
                    break;

                case 'events-within-7-days':
                    $model = $this->model->whereBetween('start_date', [Carbon::today(), Carbon::today()->addDays(7)]);
                    break;

                case 'finished-events-of-the-last-7-days':
                    $model = $this->model->whereBetween('end_date', [Carbon::today()->subDays(7), Carbon::today()]);
                    break;

                default:
                    return "invalid";
                    break;
            }

            return $model->get();
        }

        return Cache::rememberForever('allEvents', function () {
            return $this->model->orderBy('start_date', 'asc')->get();
        });
    }

    public function event($event_id)
    {
        return $this->model->find($event_id);
    }

    public function store($data)
    {
        return $this->model->create($data);
    }

    public function update($data, $event_id)
    {
        $event = $this->event($event_id);
        return $event->update($data);
    }

    public function destroy($event_id)
    {
        $this->model->destroy($event_id);
    }
}
