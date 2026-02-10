document.addEventListener("DOMContentLoaded", function() {

    const formColeta = document.getElementById("formColeta");

    if (formColeta) {
        formColeta.addEventListener("submit", validarPontocoleta);
    }

    const btnBuscar = document.getElementById("buscar");

    if (btnBuscar) {
        btnBuscar.addEventListener('click', buscarCEP);
    }

});

function validarPontocoleta(event) {

    event.preventDefault();

    const nome = document.querySelector('[name="nome"]').value;
    const cep = document.getElementById('cep').value;
    const num = document.querySelector('[name="numero"]').value;

    if (!nome || !cep || !num) {
        alert('Preencha os campos obrigatórios');
        return;
    }

    event.target.submit();
}

function buscarCEP() {

    const cep = document.getElementById('cep').value;

    fetch(`https://viacep.com.br/ws/${cep}/json/`)
    .then(res => res.json())
    .then(data => {

        if (data.erro) {
            alert('CEP não encontrado');
            return;
        }

        document.getElementById('rua').value = data.logradouro;
        document.getElementById('bairro').value = data.bairro;
        document.getElementById('cidade').value = data.localidade;
        document.getElementById('estado').value = data.uf;

    })
    .catch(() => alert('Erro ao buscar CEP'));

}
