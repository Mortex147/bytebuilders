<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bytebuilder;
use Illuminate\Support\Facades\Validator;

class BytebuilderController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'bytebuilder_name' => 'required|string|max:255',
            'bytebuilder_prename' => 'required|string|max:255',
            'bytebuilder_email' => 'required|email|unique:bytebuilder',
            'bytebuilder_password' => 'required|string|min:6',
            'bytebuilder_category' => 'required|string|max:255',
            'bytebuilder_city' => 'nullable|string|max:255',
            'bytebuilder_country' => 'string|max:255',
            'bytebuilder_birthdate' => 'nullable|date',
            'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

            // Accepting text URL or image data as text
            'background_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

            // Accepting text URL or image data as text
            'bytebuilder_about' => 'nullable|string',
            'address' => 'nullable|string|max:255',
            'bytebuilder_phone' => 'nullable|string|max:255',
            'bytebuilder_linkdin' => 'nullable|string|max:255',
            'bytebuilder_facebook' => 'nullable|string|max:255',
            'bytebuilder_instagrame' => 'nullable|string|max:255',
            'bytebuilder_twitter' => 'nullable|string|max:255',
            'bytebuilder_thread' => 'nullable|string|max:255',
            'bytebuilder_github' => 'nullable|string|max:255',
            'bytebuilder_portfolio_exist' => 'boolean',
            'enable_edit' => 'boolean',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first(),
            ], 422);
        }
        // Check if the profile_image file is present in the request
    if ($request->hasFile('profile_image')) {
        $profileImagePath = $request->file('profile_image')->store('public');
        $request->merge(['profile_image' => $profileImagePath]);
    }

    if ($request->hasFile('background_image')) {
        // Store the uploaded file in the "public" disk and get the file path
        $backgroundImagePath = $request->file('background_image')->store('public');
        $request->merge(['background_image' => $backgroundImagePath]);
    }


        // Create a new bytebuilder entry in the database
        Bytebuilder::create($request->all());

        return response()->json([
            'message' => 'Bytebuilder created successfully',
        ], 201);
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $this->validate($request, [
            
        ]);

        // Find the bytebuilder by ID
        $bytebuilder = Bytebuilder::findOrFail($id);

        // Check if the profile_image file is present in the request
        if ($request->hasFile('profile_image')) {
            $profileImagePath = $request->file('profile_image')->store('public');
            $request->merge(['profile_image' => $profileImagePath]);
        }

        if ($request->hasFile('background_image')) {
            // Store the uploaded file in the "public" disk and get the file path
            $backgroundImagePath = $request->file('background_image')->store('public');
            $request->merge(['background_image' => $backgroundImagePath]);
        }

        // Update the bytebuilder with the new data
        $bytebuilder->update($request->all());

        return response()->json(['message' => 'Bytebuilder updated successfully', 'data' => $bytebuilder], 200);
    }

    public function destroy($id)
    {
        // Find the bytebuilder by ID   
        $bytebuilder = Bytebuilder::findOrFail($id);

        // Delete the bytebuilder from the database
        $bytebuilder->delete();

        return response()->json(['message' => 'Bytebuilder deleted successfully'], 200);
    }

    public function show($id)
    {
        // Find the bytebuilder by ID
        $bytebuilder = Bytebuilder::findOrFail($id);

        return response()->json(['data' => $bytebuilder], 200);
    }
}