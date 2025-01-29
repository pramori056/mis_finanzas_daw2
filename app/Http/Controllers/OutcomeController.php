<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outcomes;

class OutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tableData = Outcomes::all()->toArray();        
        //Aquí la lógica de negocio para el index

        // Transformación del array para que tenga las keys heading y data
        if (!empty($tableData)) {
            $headings = array_keys($tableData[0]);
        } else {
            $headings = [];
        }

        $structuredData = [
            'heading'=>$headings,
            'data'=>$tableData,
        ];

        return view('outcome.index',['title' => 'My outcomes','tableData' => $structuredData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
