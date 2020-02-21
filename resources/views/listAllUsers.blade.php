<h1>Todos os usuários</h1>


@foreach($users as $user)
    <p> nome: {{ $user->name }} </p>
    <p> email: {{ $user->email }} </p>

    <a href = "{{ route('user.show', ['user'=>$user->id]) }}">Ver usuário</a>
    
    <form action="{{route('user.destroy', ['user'=>$user])}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="remover">
    </form>
@endforeach