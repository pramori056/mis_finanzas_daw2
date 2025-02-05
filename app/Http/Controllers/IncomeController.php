<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incomes;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) // Include Request as a parameter
    {
        $tableData = Incomes::all()->toArray(); // Fetch all outcomes

        // Get the success message from the session
        $successMessage = $request->session()->get('success');

        // Transform the array to have the keys heading and data
        if (!empty($tableData)) {
            $headings = array_keys($tableData[0]);
        } else {
            $headings = [];
        }

        $structuredData = [
            'heading' => $headings,
            'data' => $tableData,
        ];

        return view('income.index', [
            'title' => 'My Incomes',
            'tableData' => $structuredData,
            'successMessage' => $successMessage,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('income.create',['title' => 'New income']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'category' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
        ]);

        // Create a new income record
        Incomes::create([ // Use the model name here
            'date' => $request->date,
            'category' => $request->category,
            'amount' => $request->amount,
        ]);

        // Redirect or return a response
        return redirect()->route('incomes.index')->with('success', 'Income created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return '<p>Esta es la página del show de incomes</p>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return '<p>Esta es la página del edit de incomes</p>';
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
