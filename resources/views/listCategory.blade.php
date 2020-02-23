<h1>listagem</h1>

<p> titulo: {{ $category->title }} </p>
<p> subtitulo: {{ $category->description }} </p>


@foreach($category->posts()->get() as $post)
    <p> titulo: {{ $post->title }} </p>
    <p> descricao: {{ $post->content }} </p>
@endforeach

<a href="{{ route('user.create' )}}">editar</a>