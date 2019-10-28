<?php
// Inicia sessões 
session_start();

// Verifica se existe os dados da sessão de login 
if (!isset($_SESSION["login"]) || !isset($_SESSION["senha"])) {
    // Usuário não logado! Redireciona para a página de login 
    header("Location: parte1.php");
    exit;
}
$timeOut = 5;

if (isset($_SESSION['last_action'])) {
    $secondsInativo = time() - $_SESSION['last_action'];
    $timeOutSeconds = $timeOut * 60;
    if ($secondsInativo >= $timeOutSeconds) {
        session_unset();
        session_destroy();
        header("Location: parte1.php");
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="itemSelec.js"></script>
    <link rel="stylesheet" type="text/css" href="parte2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="background">
    <header id="teste1">
        <div class="toggle-btn">
            <i class="fa fa-bars fa-2x list" aria-hidden="true"></i>
        </div>
        <div class="center">
            <img src="wine.jpg" width="50" height="70">
            <a>WineClub</a>
        </div>
        <div class="derecha">
            <i class="fa fa-search fa-1x list" aria-hidden="true"></i>
            <input placeholder="                Pesquisar" type="text" class="search">
        </div>
    </header>

    <nav>
        <div id="sidebar">
            <ul>
                <li id="1"><a onclick="mostrarAtivo(this);">O Clube</a></li>
                <ul>
                    <li><a onclick="mostrarAtivo(this);">Como funciona</a></li>
                </ul>
                <li><a onclick="mostrarAtivo(this);">Vinhos</a></li>
                <ul>
                    <li><a onclick="mostrarAtivo(this);">Por tipo</a></li>
                    <li><a onclick="mostrarAtivo(this);">Por uva</a></li>
                    <li><a onclick="mostrarAtivo(this);">Por país</a></li>
                </ul>
                <li><a onclick="mostrarAtivo(this);">Nossos parceiros</a></li>
                <ul>
                    <li><a onclick="mostrarAtivo(this);">Produtores</a></li>
                </ul>
                <li><a onclick="mostrarAtivo(this);">Acessórios</a></li>
                <ul>
                    <li><a onclick="mostrarAtivo(this);">Monte seu kit</a></li>
                </ul>
                <li><a onclick="mostrarAtivo(this);">Ofertas</a></li>
                <ul>
                    <li><a onclick="mostrarAtivo(this);">Ofertas fixas</a></li>
                    <li><a onclick="mostrarAtivo(this);">Até que durem os estoques</a></li>
                </ul>
        </div>
        </ul>

        <div class="container">
            <h2>Uma breve pesquisa</h2><br />
            <a>A WineClub é um eComercial focado na venda de vinhos e espumantes de ótima qualidade. </a> <br />
            <a></a>Oferecemos os melhores produtos para nossos clientes e clubes de vinhos de todos os tipos de gostos e preços.
            Realize o seu cadastro para que possamos oferecer os melhores produtos de acordo com a sua experiência.
            </a>
        </div>

        <div class="container2">
            <form name="formCadastro" method="Post" action="buscarsalvarlista.php">
                <h2>Informe suas preferências</h2><br />
                <h6>*</h6>
                <h5>Bebida escolhida</h5>
                <div class="select">
                    <select name="sl-1" id="sl-1">
                        <option>Vinho</option>
                        <option>Espumante</option>
                    </select>
                </div>
                <h6>*</h6>
                <h5>Ano</h5>
                <div class="select">
                    <select name="sl-2" id="sl-2">
                        <option>2019</option>
                        <option>2018</option>
                        <option>2017</option>
                        <option>2016</option>
                        <option>2015</option>
                        <option>2014</option>
                    </select>
                </div>
                <h6>*</h6>
                <h5>Quanto estou disposto a pagar</h5>
                <div class="select">
                    <select name="sl-3" id="sl-3">
                        <option>R$170 - R$220</option>
                        <option>R$100 - R$170</option>
                        <option>R$0 - R$50</option>
                        <option>R$50 - R$100</option>
                        <option>R$220+</option>
                    </select>
                </div>
                <h6>*</h6>
                <h5>Tenho interesse por acessórios</h5>
                <div class="radio-group">
                    <label class="radio">
                        <input type="radio" value="sim" name="choice">
                        Sim
                        <span></span>
                    </label>
                    <label class="radio">
                        <input type="radio" value="nao" name="choice" checked>
                        Não
                        <span></span>
                    </label>
                </div>

                <div class="buttons">
                    <button type="button">Limpar</button>
                    <button type="submit" name="cadastrar" id="cadastrar">Cadastrar</button>
                </div>
            </form>
        </div>

        <div class="container3">
            <h2>Seu cadastro</h2></br>
            <i class="fa fa-filter fa-1x list" aria-hidden="true"></i>
            <?php
            echo '<table class="content-table">';
            echo '<tr><th>Bebida</th><th>Interesse por acessórios</th><th>Ano</th><th>Preço</th></tr>';

            if (get_magic_quotes_gpc()) {
                $dadosTabela = stripslashes($_COOKIE["listaTabela"]);
            } else {
                $dadosTabela = $_COOKIE["listaTabela"];
            }
            $dadosTabela = json_decode($dadosTabela, true);
            if (isset($dadosTabela)) {
                foreach ($dadosTabela as $tabela) {
                    echo '<tr>';
                    foreach ($tabela as $key) {
                        echo '<td>' . $key . '</td>';
                    }
                    echo '</tr>';
                }
            }
            echo '</table>';
            ?>
            <div class="pagination">
                <a>1</a>
                <a>-</a>
                <a>2</a>
            </div>
        </div>


    </nav>

    <div id="blockfinal">
        Alunos: Fernando Muller e Joana Tietjen
    </div>

</body>

</html>