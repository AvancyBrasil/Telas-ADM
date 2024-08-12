<?php
session_start();

if (!isset($_SESSION['token'])) {
    header("Location: ../view/pag_erro.html");
    exit();
}
$token = $_SESSION['token'];

$jsonUrl = 'http://localhost/Administrador/select/selectProdutos.php';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $jsonUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$jsonContent = curl_exec($ch);
$produtosArray = json_decode($jsonContent, true);


curl_close($ch);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../controller/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Deashboard</title>
</head>
<body >
    <nav>
        <img src="../imagens/Logo Preta.png" class="logo-image">
        <div class="nav-diretorios">
            <a href="#" class="nav-buttons" data-target="overlay1"><img src="../imagens/icone5.png" class="icones-image">Chat</a>
            <a href="#" class="nav-buttons" data-target="overlay2"><img src="../imagens/icone4.png" class="icones-image">Contas Ativas</a>
            <a href="#" class="nav-buttons" data-target="overlay3"><img src="../imagens/icone3.png" class="icones-image">Financeiro</a>
            <a href="#" class="nav-buttons" data-target="overlay4"><img src="../imagens/icone2.png" class="icones-image">Região</a>
            <a href="#" class="nav-buttons" data-target="overlay5"><img src="../imagens/icone1.png" class="icones-image">Suporte</a>
        </div>
    </nav>
    <div class="dashboard-navbar">
        <div class="dashboard-navbar-title">DASHBOARD</div>
        <div class="dashboard-navbar-menu">
            <div class="divBusca">
                <input type="text" class="txtBusca" placeholder="Pesquisar"/>
                <img src="../imagens/icone8.png" class="icon-busca" alt="Buscar"/>
            </div>
            <div class="dashboard-navbar-menu-item1"><a href=""><img src="../imagens/icone6.png" alt=""></a></div>
            <div class="dashboard-navbar-menu-item2"><a href=""><img src="../imagens/icone7.png" alt=""></a></div>
        </div>
    </div>
    <!-- overlay 1 -->
    <div id="overlay1" class="overlay">
        <div class="teste">
            <h2>Chat</h2>
        </div>
    </div>
    <!-- overlay 2 -->
    <div id="overlay2" class="overlay">
            <div class="graficos1">
                <div class="grafico1">
                    <div class="graficos-text1"><p>Distribuição de Usuários</p></div>
                </div>
                <div class="grafico1">
                    <div class="cubo-dados">
                        <div class="cubo-laranja"></div>
                        <div class="dados">
                            <p>Total:</p>
                            <h1>58</h1>
                        </div>
                    </div>
                    <div class="graficos-text"><p>Quantidade de Usuários</p></div>
                </div>
                <div class="grafico1">
                    <div class="cubo-dados">
                        <div class="cubo-laranja"></div>
                        <div class="dados">
                            <p>Recentes:</p>
                            <h1>11</h1>
                        </div>
                    </div>
                    <div class="graficos-text"><p>Novos Acessos</p></div>
                </div>
            </div>
            <div class="graficos2">
                <div class="grafico2">
                    <div class="graficos-text2"><p>Tendência de crescimento das contas ativas ao longo do tempo (gráfico de linha).</p></div>
                </div>
                <div class="grafico2">
                    <div class="graficos-text2"><p>Gráfico de barras mostrando o número de acessos mensais por conta.</p></div>
                </div>
                <div class="grafico2">
                    <div class="graficos-text2"><p>Histograma de frequência de login das contas ativas.</p></div>
                </div>
            </div>
            <div class="tables">
                <table>
                    <tr class="table-title">
                        <th class="table-title"> </th>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                </table>
                <table>
                    <tr class="table-title">
                        <th class="table-title"> </th>
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                </table>
            </div>
    </div>
    <!-- overlay 3 -->
    <div id="overlay3" class="overlay">
        <div class="teste">
            <h2>Financeiro</h2>
        </div>
    </div>
    <!-- overlay 4 -->
    <div id="overlay4" class="overlay">
        <div class="teste">
            <h2>Região</h2>
        </div>
    </div>
    <!-- overlay 5 -->
    <div id="overlay5" class="overlay">
        <div class="teste">
            <h2>Suporte</h2>
        </div>
    </div>
<script src="../controller/overlay.js"></script>
</body>
</html>