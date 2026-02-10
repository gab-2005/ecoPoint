// Espera o DOM carregar
document.addEventListener('DOMContentLoaded', () => {

    const botaoEntrar = document.getElementById('botao-entrar');

    botaoEntrar.addEventListener('click', function (event) {
        event.preventDefault(); // impede comportamento do <a>

        if (!validarLogin()) {
            return;
        }

        const usuarioInput = document.querySelector('input[name="login"]');
        const senhaInput   = document.querySelector('input[name="senha"]');

        const usuario = usuarioInput.value.trim();
        const senha   = senhaInput.value.trim();

        const formData = new FormData();
        formData.append('login', usuario);
        formData.append('senha', senha);

        fetch('/ecoPoint/login/autenticar', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.sucesso) {
                window.location.href = '/ecoPoint/home';
            } else {
                mostrarErro(data.erro);
            }
        })
        .catch(() => {
            mostrarErro('Erro ao tentar fazer login. Tente novamente.');
        });
    });

});


// ================= VALIDAÇÃO =================
function validarLogin() {
    const usuario = document.querySelector('input[name="login"]').value.trim();
    const senha   = document.querySelector('input[name="senha"]').value.trim();

    if (usuario === "" && senha === "") {
        mostrarErro("Por favor, preencha o usuário e a senha.");
        return false;
    }

    if (usuario === "") {
        mostrarErro("Por favor, preencha o campo de usuário.");
        return false;
    }

    if (senha === "") {
        mostrarErro("Por favor, preencha o campo de senha.");
        return false;
    }

    esconderErro();
    return true;
}


// ================= ERROS =================
function mostrarErro(mensagem) {
    const divErro = document.querySelector('.mensagem-erro');

    if (!divErro) return;

    divErro.textContent = mensagem;
    divErro.style.display = 'block';

    setTimeout(() => {
        divErro.style.display = 'none';
    }, 4000);
}

function esconderErro() {
    const divErro = document.querySelector('.mensagem-erro');
    if (divErro) {
        divErro.style.display = 'none';
    }
}
