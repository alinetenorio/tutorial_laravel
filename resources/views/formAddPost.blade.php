<form method='post' action="{{ route('post.store')}}">
    @csrf

    title:<input name='title'/></br>
    subtitle:<input name='subtitle'/></br>
    content:<textarea name='content'></textarea></br>

    <input type='submit' value='adicionar'>

</form>