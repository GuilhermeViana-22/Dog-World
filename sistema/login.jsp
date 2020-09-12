<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>System Dog World || Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/stylelogin.css">

</head>

<body>
    <img src="img/pets.jpg" id="imgb">

    <div class="container">
        <img src="img/utilizador.png" width="100px" height="100px" id="imgl">
        <form method="">
            <h1>Login</h1>
            <p id="pl">Usuario</p>
            <input type="text" id="loginu" name="usu" placeholder="Digite a matricula"><br><br>
            <p id="pl">Senha</p>
            <input type="Password" id="logins" name="sen"  placeholder="Digite sua senha"><br><br>
            <input type="submit" id="entrar" value="Entrar" onclick="valida()">
            <label name="span"></label>



        </form>
<%
string usuario = request.getparanmeter("usu");
string senha = request.getparanmeter("sen");
string span = request.getparanmeter("span");
if(usuario != "admin"){
    span.setText("Digite os campos necessario");


}else if (senha != "admin"){
span.setText("Digite os campos necessario");

}else{

response.sendRedirect("http://localhost:8080/aps/trunk/sistema/charger_progress.html");

}



%>


        <a href="recupera_senha.html">Esqueci a senha </a>


    </div>


    <script>/*
        var user = "admin";
        var senha = "admin";


        function valida() {
            var usu = document.getElementById('loginu').value;
            var sen = document.getElementById("logins").value;


            if (usu != "admin") {
                alert("Put the username");

            } else if (sen != "admin") {
                alert("Put the Password");
            } else {
                alert("Welcome !");


                window.open("http://localhost:8080/aps/trunk/sistema/charger_progress.html", "_blank");
                //window.closed.href = "C:/xampp/tomcat/webapps/ROOT/aps/trunk/sistema/login.html";
                //window.location.assign("http://localhost:8080/aps/trunk/sistema/");
                // window.close("C:/xampp/tomcat/webapps/ROOT/aps/trunk/sistema/login.html")
            }


        }*/
    </script>

</body>

</html>