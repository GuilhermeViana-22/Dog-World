﻿<?php include 'banco.php';  include 'verifica_login.php';  ?>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

    <!---
        href="/aps/trunk/sistema/

        Está referêcia a tela principal da dog World

        Onde o funcinário hipotetico ficará mior parte do tempo acompnando os dados de faturamento

        relatórios gerados
        
        --->
    <a class="navbar-brand" href="index.php"><i class="fas fa-paw" style="margin-left: -10px;"></i>Dog World</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="index.php"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Editar Perfil</a>
                <a class="dropdown-item" href="informacoes.php">Ajuda</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">Sair</a>
            </div>
        </li>
    </ul>
</nav>