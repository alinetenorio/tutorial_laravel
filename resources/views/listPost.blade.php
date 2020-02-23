<h1>listagem</h1>

<p> titulo: {{ $post->title }} </p>
<p> subtitulo: {{ $post->subtitle }} </p>
<p> conteudo: {{ $post->content }} </p>

<p> usuario: {{ $post->user()->first()->name }} </p>

@foreach($post->categories()->get() as $category)
    <p> titulo: {{ $category->title }} </p>
    <p> descricao: {{ $category->description }} </p>
@endforeach

<a href="{{ route('user.create' )}}">editar</a>