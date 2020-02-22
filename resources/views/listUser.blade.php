<h1>listagem</h1>

<p> nome: {{ $user->name }} </p>
<p> email: {{ $user->email }} </p>
<p> {{ date('d/m/Y H:i', strtotime($user->created_at )) }}</p>
<p> rua: {{ $user->address()->first()->street }} </p>

<a href="{{ route('user.edit', ['user' => $user] )}}">editar</a>