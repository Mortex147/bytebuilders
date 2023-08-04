<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioExperience;
use Illuminate\Support\Facades\Validator;
class PortfolioExperienceController extends Controller
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
        $portfolioExperience = PortfolioExperience::create($request->all());

        return response()->json(['message' => 'Portfolio Experience created successfully', 'data' => $portfolioExperience], 201);
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
        $portfolioExperience = PortfolioExperience::findOrFail($id);

        // Update the portfolio experience with the new data
        $portfolioExperience->update($request->all());

        return response()->json(['message' => 'Portfolio Experience updated successfully', 'data' => $portfolioExperience], 200);
    }

    public function destroy($id)
    {
        // Find the portfolio experience by ID
        $portfolioExperience = PortfolioExperience::findOrFail($id);

        // Delete the portfolio experience from the database
        $portfolioExperience->delete();

        return response()->json(['message' => 'Portfolio Experience deleted successfully'], 200);
    }

    public function show($id)
    {
        // Find the portfolio experience by ID
        $portfolioExperience = PortfolioExperience::findOrFail($id);

        return response()->json(['data' => $portfolioExperience], 200);
    }
}