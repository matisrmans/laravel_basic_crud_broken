<form action="/comments/store" method="get">
    @csrf
    <input type="text" name="content">
    <input type="submit" value="Create">
</form>