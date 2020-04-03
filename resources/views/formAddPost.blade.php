<form method='post' action="{{ route('post.store')}}">
    @csrf

    title:<input name='title'/></br>
    subtitle:<input name='subtitle'/></br>
    content:<textarea name='content'></textarea></br>
    autor:<input name='user_id'/></br>

    <input type='submit' value='adicionar'>

</form>