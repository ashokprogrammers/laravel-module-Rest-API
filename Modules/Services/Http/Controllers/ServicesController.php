<?php

namespace Modules\Services\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Services\Entities\Services;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth; 

class ServicesController extends Controller
{
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($keyword)
    {       
            $data['services'] = Services::Where('name', 'like', "$keyword%")->get();
            return response()->json(['success' => $data], $this->successStatus); 
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('services::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('services::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('services::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
