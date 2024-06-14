<?php
session_start(); // Inicia a sessão

// Definir variáveis de erro e sucesso se existirem na sessão
$erro = isset($_SESSION['erro']) ? $_SESSION['erro'] : null;
$sucesso = isset($_SESSION['sucesso']) ? $_SESSION['sucesso'] : null;

// Limpar mensagens da sessão
unset($_SESSION['erro']);
unset($_SESSION['sucesso']);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="login.css">
    
</head>

<body>
    <div class="card">
        <span class="card-title">Login</span>
        <form action="processr login.php" method="POST">
            <div class="input-field">
                <input type="email" id="email" name="email"  class="validate" required>
                <label for="email">Email</label>
            </div>
            <div class="input-field">
                <input type="password" id="senha" name="senha" class="validate" required>
                <label for="senha">Senha</label>
            </div>

            <div class="a">
                <p>
                    <label>
                        <input name="tipo_usuario" type="radio" value="admin" required />
                        <span class="admin">Administrador</span>
                    </label>
                </p>
                <p>
                    <label>
                        <input name="tipo_usuario" type="radio" value="aluno" required />
                        <span class="aluno">aluno</span>
                    </label>
                </p>
            </div>

            <button type="submit" id="btn-entrar" class="btn">Entrar</button>
        </form>
        <a href="cad.php" class="btn-back">Não é cadastrado? Vá até a FN e faça sua matrícula</a>
    </div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems, {});

           
            var radios = document.querySelectorAll('input[name="tipo_usuario"]');
            radios.forEach(function (radio) {
                radio.addEventListener('change', function () {
                    var btnEntrar = document.getElementById('btn-entrar');
                    if (this.value === 'admin') {
                        btnEntrar.style.backgroundColor = '#DC143C'; 
                        btnEntrar.style.borderColor = 'white';
                        btnEntrar.style.color = 'white'; 
                    } else if (this.value === 'aluno') {
                        btnEntrar.style.backgroundColor = '#ffde59'; 
                        btnEntrar.style.borderColor = 'white';
                        btnEntrar.style.color = 'black'; 
                    } else {
                        btnEntrar.style.backgroundColor = '#fff'; 
                        btnEntrar.style.borderColor = 'black';
                        btnEntrar.style.color = '#1976d2'; 
                    }
                });
            });
        });
    </script>
</body>

</html> 