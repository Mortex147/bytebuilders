<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioProject;

class PortfolioProjectController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $this->validate($request, [
            'portfolio_project_title' => 'required|string|max:255',
            'bytebuilder_id' => 'required|exists:bytebuilder,id',
            'portfolio_project_description' => 'required|string',
            'portfolio_project_github' => 'nullable|url',
            'portfolio_project_img_upload' => 'nullable|string', // Changed to accept URL as text
        ]);

        // Create a new portfolio project entry in the database
        $portfolioProject = PortfolioProject::create($request->all());

        return response()->json(['message' => 'Portfolio Project created successfully', 'data' => $portfolioProject], 201);
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $this->validate($request, [
            'portfolio_project_title' => 'required|string|max:255',
            'bytebuilder_id' => 'required|exists:bytebuilder,id',
            'portfolio_project_description' => 'required|string',
            'portfolio_project_github' => 'nullable|url',
            'portfolio_project_img_upload' => 'nullable|string', // Changed to accept URL as text
        ]);

        // Find the portfolio project by ID
        $portfolioProject = PortfolioProject::findOrFail($id);

        // Update the portfolio project with the new data
        $portfolioProject->update($request->all());

        return response()->json(['message' => 'Portfolio Project updated successfully', 'data' => $portfolioProject], 200);
    }

    public function destroy($id)
    {
        // Find the portfolio project by ID
        $portfolioProject = PortfolioProject::findOrFail($id);

        // Delete the portfolio project from the database
        $portfolioProject->delete();

        return response()->json(['message' => 'Portfolio Project deleted successfully'], 200);
    }

    public function show($id)
    {
        // Find the portfolio project by ID
        $portfolioProject = PortfolioProject::findOrFail($id);

        return response()->json(['data' => $portfolioProject], 200);
    }
}