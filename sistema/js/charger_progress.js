function progress() {
    var prg = document.getElementById('progress');
    var percent = document.getElementById('percentCount');
    var counter = 20;
    var progress = 100;
    var id = setInterval(frame, 20);

    function frame() {
        if (progress == 500 && counter == 100) {
            clearInterval(id);
            // window.open('http://localhost:8080/aps/trunk/sistema');
            //window.closed('http://localhost:8080/aps/trunk/sistema/charger_progress.html')
            window.open('http://localhost:8080/aps/trunk/sistema', 'janela');

        } else {
            progress += 10;
            counter += 2;
            prg.style.width = progress + 'px';
        }
    }
}
progress();