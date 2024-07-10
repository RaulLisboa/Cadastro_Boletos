document.addEventListener('DOMContentLoaded', function () {
    const modalMsdCadastro = document.getElementById('modalMsdCadastro');
    const closeModal = document.getElementById('closeModal');
    const messageElement = document.getElementById('message');


    // Função para abrir a modal
    window.openModal = function (message, type) {
        if (type === 'success') {
            messageElement.innerHTML = `<div class="bg-green-100 border-l-4 border-green-500 text-green-900 p-4" role="alert">
                        <p class="font-bold">Sucesso!</p>
                        <p>${message}</p>
                    </div>`;
        } else if (type === 'error') {
            messageElement.innerHTML = `<div class="bg-red-100 border-l-4 border-red-500 text-red-900 p-4" role="alert">
                        <p class="font-bold">Erro!</p>
                        <p>${message}</p>
                    </div>`;
        }

        // Mostra a modal
        modalMsdCadastro.classList.remove('hidden');

    }

    // Função para fechar a modal
    function closeModalFunction() {
        modalMsdCadastro.classList.add('hidden');
    }





    // Fechar modal ao clicar no botão de fechar
    closeModal.addEventListener('click', closeModalFunction);

    // Verificação das mensagens de sessão
    if (window.sessionMessages.success) {
        openModal(window.sessionMessages.success, 'success');
    } else if (window.sessionMessages.error) {
        openModal(window.sessionMessages.error, 'error');
    }
});
