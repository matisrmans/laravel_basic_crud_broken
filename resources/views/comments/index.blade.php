index.blade.php file content

{{-- display a list of comments in laravel blade view --}}

<ul>
    @foreach($comments as $comment)
    <li>
        {{$comment->content}}
    </li>
    @endforeach
</ul>


<a href="comments/create">Doties uz create</a>
{{-- create a link back to create form --}}