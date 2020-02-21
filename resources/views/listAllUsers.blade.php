<h1>Todos os usuários</h1>


@foreach($users as $user)
    <p> nome: {{ $user->name }} </p>
    <p> email: {{ $user->email }} </p>

    <a href = "{{ route('user.list', ['user'=>$user->id]) }}">Ver usuário</a>
    
    <form action="{{route('user.remove', ['user'=>$user->id])}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="remover">
    </form>
@endforeach