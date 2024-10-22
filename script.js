document.querySelector('.footer-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que o formulário seja enviado da forma padrão
    
    const nome = document.getElementById('nome').value;
    const telefone = document.getElementById('telefone').value;
    const email = document.getElementById('email').value;

    // Simulando o envio dos dados
    console.log('Dados enviados:');
    console.log('Nome:', nome);
    console.log('Telefone:', telefone);
    console.log('Email:', email);

    // Aqui você poderia usar fetch ou XMLHttpRequest para enviar os dados a um servidor

    // Exibe um alerta para simular o sucesso
    alert('Inscrição enviada com sucesso!');
});

// Função para adicionar a classe 'visible' ao texto
function revealText() {
    const texts = document.querySelectorAll('.fade-in-text');
    texts.forEach((text, index) => {
        setTimeout(() => {
            text.classList.add('visible'); // Adiciona a classe para tornar o texto visível
        }, index * 500); // Atraso baseado na ordem do texto
    });
}

// Executa a função quando a página for carregada
window.onload = revealText;