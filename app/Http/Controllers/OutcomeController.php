<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outcomes;

class OutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tableData = Outcomes::all()->toArray();
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

        return view('outcome.index', [
            'title' => 'My Outcomes',
            'tableData' => $structuredData,
            'successMessage' => $successMessage,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('outcome.create',['title' => 'New outcome']);
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
        Outcomes::create([ // Use the model name here
            'date' => $request->date,
            'category' => $request->category,
            'amount' => $request->amount,
        ]);

        // Redirect or return a response
        return redirect()->route('outcomes.index')->with('success', 'Outcome created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return '<p>Esta es la página del show de outcomes</p>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fetch the income record by ID
        $outcome = Outcomes::findOrFail($id);

        return view('outcome.edit', [
            'title' => 'Edit Outcome',
            'outcome' => $outcome,
            'options' => ['Rent', 'Leisure', 'Shopping', 'Transport', 'Other'], // You can customize this as needed
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'category' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
        ]);
    
        $outcome = Outcomes::findOrFail($id);
        $outcome->update($validated);
    
        return redirect()->route('outcomes.index')->with('success', 'Outcome updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return '<p>Esta es la página del destroy de outcomes</p>';
    }
}
