<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        if ($authors->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => 'Resource data not found!'
            ], 200);
        }

        return response()->json([
            "success" => true,
            "massage" => "Get all resources",
            "data" => $authors
        ], 200);
    }

    public function store(Request $request)
    {
        // 1. validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'bio' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // 2. check validator error
        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        // 3. upload image
        $image = $request->file('photo');
        $image->store('authors', 'public');

        // 4. insert data
        $author = Author::create([
            'name' => $request->name,
            'bio' => $request->bio,
            'photo' => $image->hashName(),
        ]);

        // 5. response
        return response()->json([
            "success" => true,
            "message" => 'Resource added successfully',
            'data' => $author
        ], 201);
    }

    public function show(string $id) {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                "success" => false,
                "message" => "Resource not found"
            ], 404);
        }

        return response()->json([
            "success" => true,
            "message" => "Get detail resource",
            "data" => $author
        ], 200);
    }

    public function update(string $id, Request $request)
    {
        // 1. cari data
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                "success" => false,
                "message" => "Resource not found"
            ], 404);
        }

        // 2. validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'bio' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        // 3. siapkan data update
        $data = [
            'name' => $request->name,
            'bio' => $request->bio,
        ];

        // 4. upload photo jika ada
        if ($request->hasFile('photo')) {
            // hapus foto lama
            if ($author->photo) {
                Storage::disk('public')->delete('authors/', $author->photo);
            }

            // upload foto baru
            $image = $request->file('photo');
            $image->store('authors', 'public');

            $data['photo'] = $image->hashName();
        }

        // 5. update
        $author->update($data);

        return response()->json([
            "success" => true,
            "message" => 'Resource updated successfully',
            'data' => $author
        ], 200);
    }


    public function destroy(string $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                "success" => false,
                "message" => "Resource not found"
            ], 404);
        }

        if ($author->photo) {
            //delete from storage
            Storage::disk('public')->delete('authors/', $author->photo);
        }

        $author->delete();

        return response()->json([
            "success" => true,
            "message" => "Delete resource successfully"
        ]);
    }
}
