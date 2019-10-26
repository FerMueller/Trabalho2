<?php 
// Inicia sessões 
session_start(); 
 
// Verifica se existe os dados da sessão de login 
if(!isset($_SESSION["login"]) || !isset($_SESSION["senha"])) { 
// Usuário não logado! Redireciona para a página de login 
header("Location: parte1.php"); 
exit; 
}
$timeOut = 5;
 
if(isset($_SESSION['last_action'])){
    $secondsInativo = time() - $_SESSION['last_action'];
    $timeOutSeconds = $timeOut * 60;
    if($secondsInativo >= $timeOutSeconds){
        session_unset();
        session_destroy();
        header("Location: parte1.php");
    }   
} 
?>

<!DOCTYPE html>
<html>

<head>
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
                <li><a>O Clube</a></li>
                <ul>
                    <li><a>Como funciona</a></li>
                </ul>
                <li><a>Vinhos</a></li>
                <ul>
                    <li><a>Por tipo</a></li>
                    <li><a>Por uva</a></li>
                    <li><a>Por país</a></li>
                </ul>
                <li><a>Nossos parceiros</a></li>
                <ul>
                    <li><a>Produtores</a></li>
                </ul>
                <li><a>Acessórios</a></li>
                <ul>
                    <li><a>Monte seu kit</a></li>
                </ul>
                <li><a>Ofertas</a></li>
                <ul>
                    <li><a>Ofertas fixas</a></li>
                    <li><a>Até que durem os estoques</a></li>
                </ul>
        </div>
        </ul>

        <container>
            <div class="container">
                <h2>Uma breve pesquisa</h2><br />
                <a>A WineClub é um eComercial focado na venda de vinhos e espumantes de ótima qualidade. </a> <br />
                <a></a>Oferecemos os melhores produtos para nossos clientes e clubes de vinhos de todos os tipos de gostos e preços.
                Realize o seu cadastro para que possamos oferecer os melhores produtos de acordo com a sua experiência.
                </a>
            </div>

            <div class="container2">
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
                        <input type="radio" value="nao" name="choice">
                        Não
                        <span></span>
                    </label>
                </div>

                <div class="buttons">
                    <button type="button">Limpar</button>
                    <button type="button">Cadastrar</button>
                </div>
            </div>

            <div class="container3">
                <h2>Seu cadastro</h2></br>
                <i class="fa fa-filter fa-1x list" aria-hidden="true"></i>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Bebida</th>
                            <th>Interesse por acessórios</th>
                            <th>Ano</th>
                            <th>Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Vinho</td>
                            <td>Sim</td>
                            <td class="numerico">2018 - 2017</td>
                            <td class="numerico">R$170 - R$220</td>
                        </tr>
                        <tr>
                            <td>Espumante</td>
                            <td>Não</td>
                            <td class="numerico">2017 - 2015</td>
                            <td class="numerico">R$195+</td>
                        </tr>
                    </tbody>
                </table>
                <div class="pagination">
                    <a>1</a>
                    <a>-</a>
                    <a>2</a>
                </div>
            </div>

        </container>

    </nav>

    <div id="blockfinal">
        Alunos: Fernando Muller e Joana Tietjen
    </div>

</body>

</html>