<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastrocon.css">
    <title>Cadastro de Consumidores</title>
</head>

<body>
    <div class="menu">
        <a class="menuA" href="">
            <div class="cons active">Consumidor</div>
        </a>
        <a class="menuA" href="cadastroforn.html">
            <div class="forn">Fornecedores</div>
        </a>
        <a class="menuA" href="cadastrouse.html">
            <div class="user">Usuários</div>
        </a>
        <a class="menuA" href="">
            <div class="serv">Serviços</div>
        </a>
        <a class="menuA" href="">
            <div class="finan">Financeiro</div>
        </a>
        <a class="menuA" id="myBtn">
            <div class="listarCons">Listar Consumidor</div>
        </a>
        <a class="menuA" id="myBtn2">
            <div class="listarForn">Listar Fornecedores</div>
        </a>
    </div>
    <div class="module">
        <ul>
            <form class="form">
                <h1>Cadastro Consumidor</h1><br>
                <span>Nome:</span>
                <input type="text" placeholder="Nome" class="textbox" />
                <span>CPF:</span>
                <input type="text" placeholder="CPF" class="textbox" />
                <span>RG:</span>
                <input type="text" placeholder="RG" class="textbox" />
                <span>Email:</span>
                <input type="email" placeholder="Email" class="textbox" />
                <span>Cartão de Credito:</span>
                <input type="number" placeholder="Cartao de Credito" class="textbox" />
                <span>Endereço:</span>
                <input type="email" placeholder="Endereço" class="textbox" />
                <span>Estado:</span>
                <select id="Estado">
                    <option value="PR">Paraná</option>
                </select>
                <span>Cidade:</span>
                <select id="Estado">
                    <option value="PR">Curitiba</option>
                    <option value="PR">Curitiba</option>
                    <option value="PR">Curitiba</option>
                    <option value="PR">Curitiba</option>
                    <option value="PR">Curitiba</option>
                    <option value="PR">Curitiba</option>
                    <option value="PR">Curitiba</option>
                    <option value="PR">Curitiba</option>
                    <option value="PR">Curitiba</option>
                </select>
                <input type="button" value="Cadastrar" class="button" />
            </form>
    </div>
    <div id="listaCon" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Lista de Consumidores</h2>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <div class="consumidorContainer">
                    <a href="" class="consumidor">
                        <h5>Ludwig von Mises</h5>
                    </a>
                    <a href="" class="consumidor">
                        <h5>Ayn Rand</h5>
                    </a>
                    <a href="" class="consumidor">
                        <h5>Milton Friedman</h5>
                    </a>
                    <a href="" class="consumidor">
                        <h5>John Locke</h5>
                    </a>
                    <a href="" class="consumidor">
                        <h5>David Hume</h5>
                    </a>
                    <a href="" class="consumidor">
                        <h5>Thomas Sowell</h5>
                    </a>
                    <a href="" class="consumidor">
                        <h5>Jordan Peterson</h5>
                    </a>
                    <a href="" class="consumidor">
                        <h5>Alexis De Tocqueville</h5>
                    </a>
                    <a href="" class="consumidor">
                        <h5> Adam Smith</h5>
                    </a>
                    <a href="" class="consumidor">
                        <h5>Edmund Burke</h5>
                    </a>
                    <a href="" class="consumidor">
                        <h5>Theodore Dalrymple</h5>
                    </a>
                    <a href="" class="consumidor">
                        <h5>Friedrich Hayek</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="listaFor" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Lista de Fornecedores</h2>
                <span class="close2">&times;</span>

            </div>
            <div class="modal-body">
                <div class="fonecerdorContainer">
                    <a href="" class="fornecedor">
                        <h5>Francisco Augusto</h5>
                        <span>Encanador</span>
                    </a>
                    <a href="" class="fornecedor">
                        <h5>Antonio Luiz</h5>
                        <span>Encanador</span>
                    </a>
                    <a href="" class="fornecedor">
                        <h5>Heleno Lira</h5>
                        <span>Pedreiro</span>
                    </a>
                    <a href="" class="fornecedor">
                        <h5>Henrique Corbeira</h5>
                        <span>Pedreiro</span>
                    </a>
                    <a href="" class="fornecedor">
                        <h5>Eva Esteves</h5>
                        <span>Jardineiro</span>
                    </a>
                    <a href="" class="fornecedor">
                        <h5>Maria Anunciação</h5>
                        <span>Diarista</span>
                    </a>
                    <a href="" class="fornecedor">
                        <h5>Paulo Alfredo</h5>
                        <span>Eletrecista</span>
                    </a>
                    <a href="" class="fornecedor">
                        <h5>João Augusto</h5>
                        <span>Eletrecista</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="js/modal.js"></script>

</html>