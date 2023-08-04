<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\portfolioexperience1;
use Illuminate\Support\Facades\Validator;

class PortfolioexperienceController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $this->validate($request, [
            'portfolio_experience_title' => 'required|string|max:255',
            'bytebuilder_id' => 'required|exists:bytebuilder,id',
            'portfolio_experience_description' => 'required|string',
            'portfolio_experience_github' => 'nullable|url',
            'portfolio_experience_img_upload' => 'nullable|string', // Changed to accept URL as text
        ]);

        // Create a new portfolio experience entry in the database
        $portfolioexperience1 = Portfolioexperience1::create($request->all());

        return response()->json(['message' => 'Portfolio Experience created successfully', 'data' => $portfolioexperience1], 201);
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $this->validate($request, [
            'portfolio_experience_title' => 'required|string|max:255',
            'bytebuilder_id' => 'required|exists:bytebuilder,id',
            'portfolio_experience_description' => 'required|string',
            'portfolio_experience_github' => 'nullable|url',
            'portfolio_experience_img_upload' => 'nullable|string', // Changed to accept URL as text
        ]);

        // Find the portfolio experience by ID
        $portfolioexperience1 = Portfolioexperience1::findOrFail($id);

        // Update the portfolio experience with the new data
        $portfolioexperience1->update($request->all());

        return response()->json(['message' => 'Portfolio Experience updated successfully', 'data' => $portfolioexperience1], 200);
    }

    public function destroy($id)
    {
        // Find the portfolio experience by ID
        $portfolioexperience1 = Portfolioexperience1::findOrFail($id);

        // Delete the portfolio experience from the database
        $portfolioexperience1->delete();

        return response()->json(['message' => 'Portfolio Experience deleted successfully'], 200);
    }

    public function show($id)
    {
        // Find the portfolio experience by ID
        $portfolioexperience1 = portfolioexperience1::findOrFail($id);

        return response()->json(['data' => $portfolioexperience1], 200);
    }
}