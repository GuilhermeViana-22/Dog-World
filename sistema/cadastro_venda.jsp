<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Dog World</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous">

        
    
    </script>

    <style>
        .container{overflow: hidden;}
        .tab{float: under;}
        .tab-1{margin-left: 50px}
        .tab-1 input{display:block; margin-bottom: 2px;}
        .tab-2{margin-left: 100px}
        .tab-2 input{display:block; margin-bottom: 2px;}


    </style>
        
</head>

<body class="sb-nav-fixed">

    <jsp:include page="nav.html" />
   
    <div id="layoutSidenav">

    <jsp:include page="menu_lateral.html" />


        <div id="layoutSidenav_content">
            <main>
               <div id="dadosCliente">
                Nome:<input type="text"><br>
                CPF:<input type="text"> <button><i class="fas fa-search"></i></button><br><br>

            </div>

                <fieldset>
                   
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Valor</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                            

                        </tbody>
                    </table>
                   
                    
                    <div class="container">
                        <div class="tab tab-2">
                            Codigo:<input type="text" name="Codigo" id=Codigo>
                            Valor:<input type="text"name="Valor" id=Valor>
                            Quantidade:<input type="text"name="Quantidade" id=Quantidade>
                            Nome:<input type="text"name="Nome" id=Nome><br>

                            <input type="button" value="Inserir" onclick="addTable();" ><br>
                            <input type="button" value="Cancelar"> <br><br>
                            
                        </div>
                      
                    <input type="button" value="Alterar"> <br>
                    Método de pagamento:
                    <select name="example_length" aria-controls="example" 
                            class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="">--Selecione--</option>
                            <option value="debito">Debito</option>
                            <option value="credito">Credito</option>
                            <option value="dinheiro">Dinheiro</option>
                           

                        </select>
                    <input type="button" value="Finalizar">
                    <input type="button" value="Cancelar">
                    

                </fieldset>
            </main>
    <jsp:include page="footer.html" />
	  </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>