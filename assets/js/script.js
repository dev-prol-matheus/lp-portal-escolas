document.getElementById("formulario").addEventListener("submit", function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch("enviar.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text()) 
    .then(data => {
        console.log(data);

        document.getElementById("modal").style.display = "block";

        document.querySelector(".close").onclick = function() {
            document.getElementById("modal").style.display = "none";
        };

        window.onclick = function(event) {
            if (event.target === document.getElementById("modal")) {
                document.getElementById("modal").style.display = "none";
            }
        };

        document.getElementById("formulario").reset();
    })
    .catch(error => console.error("Erro:", error));
});
