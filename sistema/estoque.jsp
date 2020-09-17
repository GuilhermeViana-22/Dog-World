<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>System Dog World || Estoque</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>
        
</head>

<style>

body {background-color: #cfe4ff;}
    fieldset {
        
        color: white;
        margin: 10%;
        padding: 4%;
        justify-items: bottom;
        align-content: center;
    }
    .container {
  height: 200px;
  position: absolute;
  
}
.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>

<body class="sb-nav-fixed">

    <jsp:include page="nav.html" />
   
    <div id="layoutSidenav">

    <jsp:include page="menu_lateral.html" />

        <div id="layoutSidenav_content">
            <main>

                    <div class="container">
                        <div class="center">
                Codigo <input type="text" class="Codigo">    <button><i class="fas fa-search"></i></button> 

                <br>
                <div class="form-group row col-mb-2">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Alterar</button>
                    </div>
                </div>
                <div class="form-group row col-md-2">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-warning">Atualizar</button>
                    </div>
                </div>
                <div class="form-group row col-mb-2">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Extrair</button>
                    </div>
                </div>
            </div>
        </div>
          
        

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