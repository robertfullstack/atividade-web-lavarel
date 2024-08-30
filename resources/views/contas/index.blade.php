<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Contas</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;
        }

        h2 {
            margin-top: 0;
            color: #333;
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        a {
            display: block;
            margin: 0.5rem 0;
            font-size: 1rem;
            color: #007bff;
            text-decoration: none;
            padding: 0.75rem;
            border-radius: 6px;
            background-color: #e9ecef;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        a:hover {
            background-color: #d6d6d6;
            color: #0056b3;
        }

        .btn-primary {
            background-color: #28a745;
            color: #fff;
            padding: 0.75rem;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            text-decoration: none;
            display: inline-block;
            margin-top: 1rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #218838;
            transform: scale(1.02);
        }

        .btn-primary:active {
            transform: scale(0.98);
        }

        .btn-secondary {
            background-color: #007bff;
            color: #fff;
            padding: 0.75rem;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            text-decoration: none;
            display: inline-block;
            margin-top: 1rem;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-secondary:hover {
            background-color: #0056b3;
            transform: scale(1.02);
        }

        .btn-secondary:active {
            transform: scale(0.98);
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Listar as Contas</h2>
        <a href="{{ route('conta.create') }}" class="btn-primary">Cadastrar Nova Conta</a>
        <a href="{{ route('conta.show') }}" class="btn-secondary">Visualizar Contas</a>
        <a href="{{ route('conta.edit') }}" class="btn-secondary">Editar Conta</a>
        {{-- <a href="{{ route('conta.destroy') }}" class="btn-danger">Apagar Conta</a> --}}
    </div>
</body>

</html>