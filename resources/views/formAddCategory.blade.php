<form method='post' action="{{ route('category.store')}}">
    @csrf

    titulo:<input name='title'/></br>
    descricao:<input name='description'/></br>

    <input type='submit' value='adicionar'>

</form>