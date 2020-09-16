<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Dog World || cliente </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">

    <jsp:include page="nav.html" />

    <div id="layoutSidenav">

        <!--Tag de incorporação ao menu no codigo html

-->>

        <jsp:include page="menu_lateral.html" />

        <!--Tag de incorporação ao menu no codigo html

-->>

        <div id="layoutSidenav_content">


            <main>
                <!--
               -->
                <form id="formExemplo" data-toggle="validator" role="form">	 
                 <div class="form-group">	    
                 <label for="textNome" class="control-label">Nome</label>	    
                 <input id="textNome" class="form-control" placeholder="Digite seu Nome..." type="text" required>	 
                  </div>	  	 
                   <div class="form-group">	    
                   <label for="inputEmail" class="control-label">Email</label>	  
                     <input id="inputEmail" class="form-control" placeholder="Digite seu E-mail" type="email" 	  
                         data-error="Por favor, informe um e-mail correto." required>	    
                         <div class="help-block with-errors"></div>	  </div>
                         	  	  <div class="form-group">	   
                                      <label for="inputPassword" class="control-label">Senha</label>

                                      	    <input type="password" class="form-control" id="inputPassword" placeholder="Digite sua Senha..." 
                                               	      data-minlength="6" required>	
                                                             <span class="help-block">Mínimo de seis (6) digitos</span>	
                                                               </div>	  	  <div class="form-group">	
                                                                   <label for="inputConfirm" class="control-label">Confirme a Senha</label>
                                                                   	    <input type="password" class="form-control" id="inputConfirm" placeholder="Confirme sua Senha..." 	      data-match="#inputPassword" data-match-error="Atenção! As senhas não estão iguais." required>	    <div class="help-block with-errors"></div>	  </div>	  	  <div class="form-group">	    <div class="checkbox">	      <label>	        <input type="checkbox" data-error="Você deve marcar este campo!" required> Marque este item.	      </label>	      <div class="help-block with-errors"></div>	    </div>	  </div>	  	  <div class="form-group">	    <button type="submit" class="btn btn-primary">Enviar</button>	  </div>	</form>












        </main>
        <jsp:include page="footer.html" />
    </div>
    </div>
    <script src="js/validator.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>