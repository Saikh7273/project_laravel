<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // 1. GET - បង្ហាញបញ្ជី Author ទាំងអស់
    public function index()
    {
        return response()->json(Author::all(), 200);
    }

    // 2. POST - បញ្ចូល Author ថ្មី
    public function store(Request $request)
    {
        $author = Author::create($request->all());
        return response()->json($author, 201);
    }

    // 3. GET - បង្ហាញ Author តាម ID
    public function show(int|string $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        return response()->json($author, 200);
    }

    // 4. PUT/PATCH - កែប្រែទិន្នន័យ Author
    public function update(Request $request, int|string $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        $author->update($request->all());
        return response()->json($author, 200);
    }

    // 5. DELETE - លុប Author
    public function destroy(int|string $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        $author->delete();
        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}