<?php
namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Filters\V1\TicketFilter;
use App\Http\Resources\V1\TicketResource;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AuthorTicketsController extends Controller
{
public function index($author_id, Request $request, TicketFilter $filters)
{
$query = Ticket::where('user_id', $author_id);
$filtered = $filters->apply($query);

return TicketResource::collection($filtered->paginate());
}
}
