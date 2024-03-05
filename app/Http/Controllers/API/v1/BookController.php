<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Fetch all books
         $books = Book::all();
        
         // Return the books as a JSON response
         return response()->json(['data' => $books], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            // Validate the request data
            $request->validate([
                'title' => 'required|string',
                'author' => 'required|string',
                'isbn' => 'required|string|unique:books,isbn',
                'published_date' => 'required|date',
                'price' => 'required|numeric',
            ]);
    
            // Create a new book record
            $book = Book::create($request->all());
    
            // Return a JSON response with the newly created book
            return response()->json(['data' => $book, 'message' => 'Book created successfully'], 201);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id);
        
        // Return the book as a JSON response
        return response()->json(['data' => $book], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
            // Validate the request data
            $request->validate([
                'title' => 'required|string',
                'author' => 'required|string',
                'isbn' => 'required|string|unique:books,isbn,' . $id,
                'published_date' => 'required|date',
                'price' => 'required|numeric',
            ]);
    
            // Find the book by id
            $book = Book::findOrFail($id);
    
            // Update the book
            $book->update($request->all());
    
            // Return a JSON response with the updated book
            return response()->json(['data' => $book, 'message' => 'Book Updated successfully'], 200);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            // Find the book by id
            $book = Book::findOrFail($id);
    
            // Delete the book
            $book->delete();
    
            // Return a JSON response indicating success
            return response()->json(['message' => 'Book deleted successfully'], 200);
        }
    }
}
