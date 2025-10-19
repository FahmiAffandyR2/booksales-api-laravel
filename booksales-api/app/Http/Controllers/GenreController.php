<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index(){
        $genres = Genre::all();

        if ($genres->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => 'Resource data not found!'
            ], 200);
        }

        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $genres
        ], 200);
    }

    public function store(Request $request) {
        // 1. validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'required|string',
        ]);
        
        // 2. check validator error
        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        // 3. upload image
        // $image = $request->file('cover_photo');
        // $image->store('genres', 'public');

        // 4. insert data
        $genre = Genre::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // 5. response
        return response()->json([
            "success" => true,
            "message" => 'Resource added successfully',
            'data' => $genre 
        ], 201);
    }

    public function show(string $id) {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                "success" => false,
                "message" => "Resource not found"
            ], 404);
        }

        return response()->json([
            "success" => true,
            "message" => "Get detail resource",
            "data" => $genre
        ], 200);
    }

    public function update(string $id, Request $request) {
        // 1. mencari data
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                "success" => false,
                "message" => "Resource not found"
            ], 404);
        }
        // 2. validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()
            ], 422);
        }

        // 3. siapkan data yang ingin diupdate
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        // 4. handle image (upload $ delete image)
        // if ($request->hasFile('cover_photo')) {
        //     $image = $request->file('cover_photo');
        //     $image->store('books', 'public');

        //     if ($genre->cover_photo) {
        //         Storage::disk('public')->delete('books/', $genre->cover_photo);

        //     }

        //     $data['cover_photo'] = $image->hashName();
        // }

        // 5. update data baru ke database
        $genre->update($data);

        return response()->json([
            "success" => true,
            "message" => 'Resource updated successfully',
            'data' => $genre 
        ], 200);
    }

    public function destroy(string $id) {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
                "success" => false,
                "message" => "Resource not found"
            ], 404);
        }

        // if ($genre->cover_photo) {
        //     //delete from storage
        //     Storage::disk('public')->delete('books/', $genre->cover_photo);
        // }
        

        $genre->delete();

        return response()->json([
            "success" => true,
            "message" => "Delete resource successfully" 
        ]);
    }
}
