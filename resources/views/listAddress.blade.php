<h1>listagem</h1>

<p> rua: {{ $address->street }} </p>
<p> cidade: {{ $address->city }} </p>
<p> {{ date('d/m/Y H:i', strtotime($address->created_at )) }}</p>
<p> usuario: {{ $address->user()->first()->name }} </p>

