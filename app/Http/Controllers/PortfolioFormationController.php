<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioFormation;

class PortfolioFormationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $this->validate($request, [
            'portfolio_formation_title' => 'required|string|max:255',
            'bytebuilder_id' => 'required|exists:bytebuilder,id',
            'portfolio_formation_description' => 'required|string',
            'portfolio_formation_github' => 'nullable|url',
            'portfolio_formation_img_upload' => 'nullable|string', // Changed to accept URL as text
        ]);

        // Create a new portfolio formation entry in the database
        $portfolioFormation = PortfolioFormation::create($request->all());

        return response()->json(['message' => 'Portfolio Formation created successfully', 'data' => $portfolioFormation], 201);
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $this->validate($request, [
            'portfolio_formation_title' => 'required|string|max:255',
            'bytebuilder_id' => 'required|exists:bytebuilder,id',
            'portfolio_formation_description' => 'required|string',
            'portfolio_formation_github' => 'nullable|url',
            'portfolio_formation_img_upload' => 'nullable|string', // Changed to accept URL as text
        ]);

        // Find the portfolio formation by ID
        $portfolioFormation = PortfolioFormation::findOrFail($id);

        // Update the portfolio formation with the new data
        $portfolioFormation->update($request->all());

        return response()->json(['message' => 'Portfolio Formation updated successfully', 'data' => $portfolioFormation], 200);
    }

    public function destroy($id)
    {
        // Find the portfolio formation by ID
        $portfolioFormation = PortfolioFormation::findOrFail($id);

        // Delete the portfolio formation from the database
        $portfolioFormation->delete();

        return response()->json(['message' => 'Portfolio Formation deleted successfully'], 200);
    }

    public function show($id)
    {
        // Find the portfolio formation by ID
        $portfolioFormation = PortfolioFormation::findOrFail($id);

        return response()->json(['data' => $portfolioFormation], 200);
    }
}