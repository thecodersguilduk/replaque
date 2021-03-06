<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * TicketController constructor.
     */
    public function __construct()
    {
        // Authentication required for these endpoints.
        $this->middleware('auth')->except('store');
    }

    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // TODO: Get paginated collection of Ticket models.
        // https://laravel.com/docs/5.8/pagination#paginating-query-builder-results

        // TODO: If "filter[plaque_id]" provided, then filter by the plaque_id.
        // https://laravel.com/docs/5.8/requests#retrieving-input
        // https://laravel.com/docs/5.8/queries#where-clauses

        // TODO: Return a JSON response of the paginated set.
        // https://laravel.com/docs/5.8/eloquent-resources#pagination
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: Validate the request
        // https://laravel.com/docs/5.8/validation#quick-writing-the-validation-logic

        // TODO: Store the Ticket record in the database.
        // https://laravel.com/docs/5.8/eloquent#inserting-and-updating-models

        // TODO: Return a JSON response of the Ticket.
        // https://laravel.com/docs/5.8/eloquent-resources#writing-resources
    }

    /**
     * Display the specified resource.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Ticket $ticket)
    {
        // TODO: Return a JSON response of the Ticket.
        // https://laravel.com/docs/5.8/eloquent-resources#writing-resources
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        // TODO: Validate the request.
        // https://laravel.com/docs/5.8/validation#quick-writing-the-validation-logic

        // TODO: Update the Ticket record in the database.
        // https://laravel.com/docs/5.8/eloquent#inserting-and-updating-models

        // TODO: Return a JSON response of the Ticket.
        // https://laravel.com/docs/5.8/eloquent-resources#writing-resources
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Ticket $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Ticket $ticket)
    {
        // TODO: Delete the Ticket record in the database.
        // https://laravel.com/docs/5.8/eloquent#deleting-models

        // TODO: Return a resource deleted JSON response.
        // https://laravel.com/docs/5.8/responses#json-responses
    }
}
