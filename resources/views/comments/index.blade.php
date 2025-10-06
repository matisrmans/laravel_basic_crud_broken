index.blade.php file content

{{-- display a list of comments in laravel blade view --}}

<ul>
    @csrf
    @foreach($comments as $comment)
    <li>
        {{$comment->content}}
        <a href='comments/delete'>Delete</a>
    </li>
    @endforeach
</ul>


<a href="comments/create">Doties uz create</a>
{{-- create a link back to create form --}}