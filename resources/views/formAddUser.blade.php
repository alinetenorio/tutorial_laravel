<form method='post' action="{{ route('user.add')}}">
    @csrf

    nome:<input name='name'/></br>
    email:<input name='email'/></br>
    pass:<input name='pass'/></br>

    <input type='submit' value='adicionar'>

</form>