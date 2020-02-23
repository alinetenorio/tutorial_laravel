<h1>listagem</h1>

<p> nome: {{ $user->name }} </p>
<p> email: {{ $user->email }} </p>
<p> {{ date('d/m/Y H:i', strtotime($user->created_at )) }}</p>

<p> rua: {{ $user->address()->first()->street }} </p>

@foreach($user->post()->get() as $post)
    <p> post: {{ $post->title }} </p>
@endforeach

<a href="{{ route('user.create')}}">editar</a>