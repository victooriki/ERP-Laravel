<h1>Tabela de Chamados</h1>

<a href="{{ route('chamados.create') }}">Novo Chamado</a>

<table>
    <thead>
        <th>Titulo</th>
        <th>Descrição</th>
        <th>Status</th>
        <th>Criado em</th>
        <th>Ações</th>
    </thead>
    <tbody>
        @foreach ($chamados as $chamado)
        <tr>
            <td>{{ $chamado->titulo }}</td>
            <td>{{ $chamado->descricao }}</td>
            <td>{{ $chamado->stats }}</td>
            <td>{{ $chamado->created_at }}</td>
            <td>
                >
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

