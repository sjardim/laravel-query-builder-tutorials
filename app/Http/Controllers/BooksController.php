<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        $books = QueryBuilder::for(Book::class)
            ->allowedIncludes(['language', 'publisher', 'authors'])
            ->allowedFilters('title', 'num_pages', 'publication_date')
            ->paginate(50);

        return view('books.index', [
            'books' => $books
        ]);
    }
}
