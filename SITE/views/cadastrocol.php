<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SP Medical Group - Cadastro</title>
    <link rel="shortcut icon" href="media/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Battambang:100,300,regular,700,900" rel="stylesheet" />
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/cadastrocol.css">
</head>

<body>
    <div class="container">
        <div class="cadastro">
            <h1 class="fw-bold">Cadastro</h1>
            <form action="" method="post">
                <input type="text" name="nome" placeholder="Nome completo">
                <input type="number" name="carteirinha" placeholder="Nº da carteirinha">
                <input type="email" name="email" placeholder="E-mail">
                <input type="number" name="crm" placeholder="CRM">
                <div class="row">
                    <div class="col-6">
                        <input type="number" name="cpf" placeholder="CPF">
                        <input type="number" name="rg" placeholder="RG">
                        <select name="etnia">
                            <option value="" disabled selected hidden>Etnia</option>
                            <option value="branco">Branco</option>
                            <option value="preto">Preto</option>
                            <option value="pardo">Pardo</option>
                            <option value="amarelo">Amarelo</option>
                            <option value="indigena">Indígena</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <input placeholder="Data de nascimento" onfocus="(this.type='date')" onblur="(this.type='date')">
                        <input placeholder="Data de emissão" onfocus="(this.type='date')" onblur="(this.type='date')">
                        <select name="genero">
                            <option value="" disabled selected hidden>Identidade de gênero</option>
                            <option value="homem">Homem</option>
                            <option value="mulher">Mulher</option>
                            <option value="nb">Pessoa não-binária</option>
                            <option value="none">Prefiro não dizer</option>
                        </select>
                    </div>
            </form>
            </div>
            <div id="concluir">
                <a href="homepage.php">
                    <p>Concluir</p>
                </a>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>