/* =========================================================
   FORMATAÇÕES
========================================================= */

// CPF
function formatarCPF(input) {
    let cpf = input.value.replace(/\D/g, '');

    if (cpf.length > 11) cpf = cpf.slice(0, 11);

    if (cpf.length > 9) {
        cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{1,2})/, "$1.$2.$3-$4");
    } else if (cpf.length > 6) {
        cpf = cpf.replace(/(\d{3})(\d{3})(\d{1,3})/, "$1.$2.$3");
    } else if (cpf.length > 3) {
        cpf = cpf.replace(/(\d{3})(\d{1,3})/, "$1.$2");
    }

    input.value = cpf;
}

// CEP
function formatarCEP(input) {
    let cep = input.value.replace(/\D/g, '');

    if (cep.length > 8) cep = cep.slice(0, 8);
    if (cep.length > 5) cep = cep.slice(0, 5) + '-' + cep.slice(5);

    input.value = cep;
}

// Telefone
function formatarTEL(input) {
    let tel = input.value.replace(/\D/g, '');

    if (tel.length > 11) tel = tel.slice(0, 11);

    if (tel.length === 11) {
        tel = `(${tel.slice(0, 2)}) ${tel.slice(2, 7)}-${tel.slice(7)}`;
    } else if (tel.length === 10) {
        tel = `(${tel.slice(0, 2)}) ${tel.slice(2, 6)}-${tel.slice(6)}`;
    }

    input.value = tel;
}

/* =========================================================
   VALIDAÇÕES
========================================================= */

function validarCPF(cpf) {
    cpf = cpf.replace(/\D/g, '');

    if (cpf.length !== 11 || /^(\d)\1{10}$/.test(cpf)) return false;

    let soma = 0;
    for (let i = 0; i < 9; i++) soma += parseInt(cpf.charAt(i)) * (10 - i);
    let dv1 = 11 - (soma % 11);
    if (dv1 >= 10) dv1 = 0;
    if (dv1 !== parseInt(cpf.charAt(9))) return false;

    soma = 0;
    for (let i = 0; i < 10; i++) soma += parseInt(cpf.charAt(i)) * (11 - i);
    let dv2 = 11 - (soma % 11);
    if (dv2 >= 10) dv2 = 0;
    if (dv2 !== parseInt(cpf.charAt(10))) return false;

    return true;
}

function validarEmail(email) {
    const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(email);
}

function validarIdade(dataNascimento) {
    const data = new Date(dataNascimento);
    const hoje = new Date();
    let idade = hoje.getFullYear() - data.getFullYear();
    const mes = hoje.getMonth() - data.getMonth();

    if (mes < 0 || (mes === 0 && hoje.getDate() < data.getDate())) idade--;

    return idade >= 10;
}

/* =========================================================
   SUBMIT / VALIDAÇÃO PRINCIPAL
========================================================= */

function validarcadastro(event) {
    event.preventDefault();

    const nome = document.getElementById('nomecompleto').value.trim();
    const nascimento = document.getElementById('datanascimento').value;
    const usuario = document.getElementById('campousuario').value.trim();
    const senha = document.getElementById('camposenha').value;
    const confirma = document.getElementById('confirmasenha').value;
    const cep = document.getElementById('cep').value.trim();
    const numero = document.getElementById('num').value.trim();
    const telefone = document.getElementById('tel').value.trim();
    const cpf = document.getElementById('cpf').value.trim();
    const email = document.getElementById('inserirEmail').value.trim();

    if (!nome || !nascimento || !usuario || !senha || !confirma || !cep || !numero || !telefone || !cpf || !email) {
        alert('[ERRO] Preencha todos os campos.');
        return;
    }

    if (!validarIdade(nascimento)) {
        alert('[ERRO] Você precisa ter pelo menos 10 anos.');
        return;
    }

    if (senha !== confirma) {
        alert('[ERRO] As senhas não coincidem.');
        return;
    }

    if (!validarCPF(cpf)) {
        alert('[ERRO] CPF inválido.');
        return;
    }

    if (!validarEmail(email)) {
        alert('[ERRO] E-mail inválido.');
        return;
    }

    document.getElementById('formCadastro').submit();
}

/* =========================================================
   EVENTOS
========================================================= */

document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("formCadastro");
    const btnCadastrar = document.getElementById("btnCadastrar");
    const btnBuscarCEP = document.getElementById("buscar");

    // Submit real
    if (form) {
        form.addEventListener("submit", validarcadastro);
    }

    // <a> agindo como submit
    if (btnCadastrar && form) {
        btnCadastrar.addEventListener("click", function (e) {
            e.preventDefault();
            form.requestSubmit();
        });
    }

    // Buscar CEP
    if (btnBuscarCEP) {
        btnBuscarCEP.addEventListener("click", function () {

            const cep = document.getElementById('cep').value.replace(/\D/g, '');

            if (cep.length !== 8) {
                alert('CEP inválido.');
                return;
            }

            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(res => res.json())
                .then(data => {
                    if (data.erro) {
                        alert('CEP não encontrado.');
                        return;
                    }

                    document.getElementById('rua').value = data.logradouro;
                    document.getElementById('bairro').value = data.bairro;
                    document.getElementById('cidade').value = data.localidade;
                })
                .catch(() => alert('Erro ao buscar CEP.'));
        });
    }
});
