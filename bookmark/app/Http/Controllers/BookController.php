<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        # TODO: Query the database for all the books;
        return 'Here are all the books...';
    }

    public function show($title)
    {
        # TODO: Query the db where book title = $title
        return 'You are trying to view the book: '.$title;
    }

    public function search($category, $subcategory)
    {
        # TODO: Query the db for books in these categories
        return 'Search in: '.$category.', '.$subcategory;
    }
}