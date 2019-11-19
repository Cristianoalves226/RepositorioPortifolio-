@include('layout.includes.includes.topo')
<div class="container">
    <div class="row">
        <table align-
        "center" border="1px">
        <thead>
        <tr>
            <th>id</th>
            <th>titulo</th>
            <th>descricão</th>
            <th>video</th>
            <th>ação</th>
        </tr>
        </thead>
        @foreach($dados as $dado)
            <tbody>
            <tr>
                <td>{{$dado->id}}</td>
                <td>{{$dado->titulo}}</td>
                <td>{{$dado->descricao}}</td>
                <td>
                    <video width="100" src="{{asset($dado->video)}}" alt="{{$dado->titulo}}"/>
                </td>


                </td>
                <td>
                    <a class="btn d50000 red accent-4" href="{{route('admin.editar.deletar',$dado->id)}}">Deletar</a>
                    <a class="btn #1a237e indigo darken-4" href="{{route('admin.tabela.editar',$dado->id)}}">Editar</a>
                </td>
            </tr>
            @endforeach
            </tbody>
            </table>
 </div>
    <div class="row">
        <a class="btn blue" href="/adicionar">Adicionar</a>
    </div>
</div>
@include('layout.includes.includes.footer')
