<html>
    <head>
        <title>
            Gerenciar disciplinas
        </title>
    </head>
    <body>
        <header>

        </header>

        <div class="container">
            <h1>Gerenciar disciplinas</h1>
            <a href="{{ route('auth.disciplina.adicionar') }}" class="btn">Adicionar</a>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Professor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->user->name }}</td>
                        <td>
                            <a href="{{ route('auth.disciplina.editar', $registro->id) }}" class="btn">Editar</a>
                            <a href="{{ route('auth.disciplina.deletar', $registro->id) }}" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar a disciplina?');">Deletar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <footer>

        </footer>
    </body>
</html>