<form method='post' action="{{ route('address.store')}}">
    @csrf

    nome:<input name='street'/></br>
    email:<input name='city'/></br>
    user_id:<input name='user_id'/></br>

    <input type='submit' value='adicionar'>

</form>