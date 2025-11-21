document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("formLogin");
    const mensagemDiv = document.getElementById("mensagem");

    mensagemDiv.style.display = "none";

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        mensagemDiv.innerHTML = "";
        mensagemDiv.style.display = "none";

        const dados = new FormData(form);

        fetch("../php/login_criado.php", {
            method: "POST",
            body: dados
        })
        .then(res => res.json())
        .then(data => {
            
            mensagemDiv.style.display = "block";

            if (data.status === "ok") {
                
                mensagemDiv.innerHTML = `<p class="alerta-sucesso">Login realizado com sucesso, ${data.nome}!</p>`;

                document.getElementById("email").value = "";
                document.getElementById("senha").value = "";

                setTimeout(() => {
                    window.location.href = "../php/pag_inicial.php";
                }, 3000); 
                
            } else {

                mensagemDiv.innerHTML = `<p class="alerta-erro">E-mail ou senha incorretos.</p>`;

                document.getElementById("senha").value = "";
            }
        })
        .catch(err => {
            mensagemDiv.style.display = "block";
            mensagemDiv.innerHTML = `<p class="alerta-erro">Erro ao conectar com o servidor. Tente novamente mais tarde.</p>`;
            console.error(err);
        });
    });
});