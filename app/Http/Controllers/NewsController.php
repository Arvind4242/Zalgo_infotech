<?php

namespace App\Http\Controllers;

use App\Services\NewsService;
use App\Services\EventService;
use App\Services\ExtraNewsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;


class NewsController extends Controller
{
    protected $newsService;
    protected $eventService;

    public function __construct(NewsService $newsService, EventService $eventService, ExtraNewsService $extranewsService)
    {
        $this->newsService = $newsService;
        $this->eventService = $eventService;
        $this->extranewsService = $extranewsService;
    }

    public function fetchNews()
    {
        return response()->json($this->newsService->fetchNews());
    }

    public function fetchEvents()
    {
        return response()->json($this->eventService->fetchEvents());
    }

    public function fetchExibition()
    {
        return response()->json($this->extranewsService->fetchExibition());
    }

//     public function showEvents()
// {
//     $eventsData = $this->eventService->fetchEvents('https://indian-apparel.com/event.php');

//     // Return JSON response
//     return response()->json([
//         'success' => true,
//         'events' => $eventsData['events'] ?? [],
//     ]);
// }

}

