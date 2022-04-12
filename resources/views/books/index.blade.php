<ol>
@foreach($books as $book)
    <dt>
        <strong>{{$book->title}}</strong> ({{ucfirst($book->publisher->name)}})
    </dt>
    <dd>
        {{$book->num_pages}} pages<br>
        Published in: {{$book->publication_date}} <br>
        ISBN13 {{$book->isbn13}}
    </dd>
    <dd>
        Author(s)
        <ul>
        @foreach($book->authors as $author)
            <li>{{$author->name}}</li>
        @endforeach
        </ul>
    </dd>
    <hr />
@endforeach
</ol>
