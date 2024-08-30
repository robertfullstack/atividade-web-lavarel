<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Conta</title>
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
        }

        .container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 480px;
            margin: 0 1rem;
            box-sizing: border-box;
        }

        h2 {
            margin-top: 0;
            color: #333;
            text-align: center;
            font-size: 1.8rem;
            font-weight: 600;
        }

        a {
            display: block;
            margin-bottom: 1rem;
            font-size: 1rem;
            color: #007bff;
            text-decoration: none;
            text-align: center;
        }

        a:hover {
            text-decoration: underline;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #555;
            font-size: 0.9rem;
        }

        input[type="text"],
        input[type="date"] {
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        input[type="text"]::placeholder {
            color: #888;
        }

        button {
            padding: 0.75rem;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #218838;
            transform: scale(1.02);
        }

        button:active {
            transform: scale(0.98);
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="{{ route('conta.index')}}">← Voltar para a lista</a>
        <h2>Cadastrar Conta</h2>
        <form action="{{ route('conta.store')}}" method="POST">
            @csrf

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" placeholder="Nome da conta" required>

            <label for="valor">Valor:</label>
            <input type="text" name="valor" id="valor" placeholder="Usar '.' para separar reais de centavos" required>

            <label for="vencimento">Vencimento:</label>
            <input type="date" name="vencimento" id="vencimento" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>

</html>