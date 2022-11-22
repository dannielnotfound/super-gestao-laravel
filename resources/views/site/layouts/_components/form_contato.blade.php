
<form action="{{route('site.contato')}}" method="POST">
    @csrf
    <input name="nome" value='{{old('nome')}}' type="text" placeholder="Nome" class="{{$classe}}">
    <br>
    <input name="telefone" value='{{old('telefone')}}' type="text" placeholder="Telefone" class="{{$classe}}">
    <br>
    <input name="email" value='{{old('email')}}' type="text" placeholder="E-mail" class="{{$classe}}">
    <br>
    <select name="motivo_contato" class="{{$classe}}">
        <option value="0">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $key => $motivo_contatos)
            <option value="{{$key}}" {{old('motivo_contato') == $key ? 'selected' : ''}}>{{$motivo_contatos->motivo_contato}}</option>
        @endforeach
    </select>
    <br>
    <textarea placeholder="Preencha aqui a sua mensagem" name="mensagem" class="{{$classe}}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui sua mensagem'}}</textarea>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>
<div style="position: absolute;top: 0px; left:0px; background: red; width: 100%">
    <pre>
        {{print_r($errors)}}
    </pre>
</div>