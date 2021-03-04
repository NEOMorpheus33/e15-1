<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        # TODO: Query the database for all the books;
        # For now, we'll hard-code some books to practice with:
        $books = [
            ['title' => 'War and Peace', 'author' => 'Leo Tolstoy'],
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald'],
            ['title' => 'I Know Why the Caged Bird Sings', 'author' => 'Maya Angelou'],
        ];
        return view('books/index', ['books' => $books]);
    }

    public function show($title)
    {
        # TODO: Query the db where book title = $title

        # Simulating how we could handle a situation in the view where the book is not found
        $bookFound = true;

        return view('books/show', [
            'title' => $title,
            'bookFound' => $bookFound
        ]);
    }

    public function search($category, $subcategory)
    {
        # TODO: Query the db for books in these categories
        # TODO: Return a view instead of a string
        return 'Search in: '.$category.', '.$subcategory;
    }
}