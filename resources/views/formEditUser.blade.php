<form method='post' action=" {{route('user.update', ['user' => $user])}} ">
    @csrf
    @method('PUT')

    nome:<input name='name' value='{{$user->name}}'/></br>
    email:<input name='email' value='{{$user->email}}'/></br>
    pass:<input name='pass' value='{{$user->password}}'/></br>

    <input type='submit' value='editar'>

</form>