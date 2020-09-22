<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Servi&ccedil;os</div>
                <!---Aqui ficam os links da barra de navegçãi todos então como extensão .jso
                        Lembrando que qualquer alteração feita nessa parte gera um código de erro 404 do xammp
                        não será localizado nenhum arquivo
                        -->
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#controleusu" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>

                    Atendimento
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="controleusu" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="cadastro_venda.php">Vendas</a>
                        <a class="nav-link" href="agendamento.php">Agendamento</a>
                        <a class="nav-link" href="cad_cliente.php">Cadastro de Cliente</a>
                    </nav>
                </div>

                <?php if($_SESSION["cargo"] == "Gerente" || $_SESSION["cargo"] == "Funcionário") { ?>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subfinaceiro" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-coins"></i></div>
                    Financeiro
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="subfinaceiro" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="financeiro.php">Demonstrativo</a>
                        <a class="nav-link" href="cad_funcionario.php">Cadastrar Funcion&aacute;rio</a>
                        <a class="nav-link" href="cad_funcionariov2.php">Cadastrar Funcion&aacute;rio (versão 2 em andamento)</a>
                        <a class="nav-link" href="cad_cliente.php">Cadastro de Cliente</a>
                        <a class="nav-link" href="cad_fornecedor.php">Cadastrar Fornecedor</a>

                    </nav>
                </div>
                <?php } ?>

                <div class="collapse" id="subvendas" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
             
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subestoque" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-dolly"></i> </div>
                    Estoque
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="subestoque" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="relatorio.php">Relat&oacute;rios</a>
                        <a class="nav-link" href="cad_Produto.php">Cadastro de Produto</a>

                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#subagendamento" aria-expanded="false" aria-controls="collapseLayouts">
            
                </a>
            
            </div>

        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Bem vindo :</div>
            <!--Programar nome de us�ario-->
            <?php echo $_SESSION["nome"]; ?>
        </div>
    </nav>
</div>