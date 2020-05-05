<form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- []: cria um array; multiple: permite selecionar mais de um arquivo-->
    <input type="file" name="arquivo[]" multiple/></br>
    <button type="submit">Enviar Arquivo</button>
</form>


@if($arquivo ?? '' !== null)
{{$arquivo ?? ''}}
{{ env('APP_URL') }}/storage/{{$arquivo}}
<img src="{{ env('APP_URL') }}:8000/storage/{{$arquivo}}">
@endif