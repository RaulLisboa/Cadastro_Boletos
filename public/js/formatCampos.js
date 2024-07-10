function formatarWhatsApp(input) {
    // Remove caracteres não numéricos
    let cleaned = input.value.replace(/\D/g, '');

    // Formatação do código de área (XX)
    if (cleaned.length > 2) {
        cleaned = `(${cleaned.substring(0, 2)}) ${cleaned.substring(2)}`;
    } else {
        cleaned = `(${cleaned}`;
    }

    // Verifica se precisa adicionar um espaço após o primeiro dígito do número
    if (cleaned.length > 6) {
        cleaned = `${cleaned.substring(0, 6)} ${cleaned.substring(6)}`;
    }

    // Verifica se deve adicionar o hífen após o quarto número
    if (cleaned.length > 11) {
        cleaned = `${cleaned.substring(0, 11)}-${cleaned.substring(11)}`;
    }

    // Limita o tamanho máximo para o formato (XX) X XXXX-XXXX
    cleaned = cleaned.substring(0, 16);

    // Atualiza o valor do input
    input.value = cleaned;
}

function formatarFixo(input) {
    // Remove caracteres não numéricos
    let cleaned = input.value.replace(/\D/g, '');

    // Formatação do código de área (XX)
    if (cleaned.length > 2) {
        cleaned = `(${cleaned.substring(0, 2)}) ${cleaned.substring(2)}`;
    } else {
        cleaned = `(${cleaned}`;
    }

    // Verifica se deve adicionar o hífen após o quarto número
    if (cleaned.length > 9) {
        cleaned = `${cleaned.substring(0, 9)}-${cleaned.substring(9)}`;
    }

    // Limita o tamanho máximo para o formato (XX) XXXX-XXXX
    cleaned = cleaned.substring(0, 14);

    // Atualiza o valor do input
    input.value = cleaned;
}

function formatarCpf(input) {
    // Remove caracteres não numéricos
    let cleaned = input.value.replace(/\D/g, '');

    // Insere os pontos e o hífen no formato XXX.XXX.XXX-XX
    if (cleaned.length > 3) {
        cleaned = `${cleaned.substring(0, 3)}.${cleaned.substring(3)}`;
    }
    if (cleaned.length > 7) {
        cleaned = `${cleaned.substring(0, 7)}.${cleaned.substring(7)}`;
    }
    if (cleaned.length > 11) {
        cleaned = `${cleaned.substring(0, 11)}-${cleaned.substring(11)}`;
    }

    // Limita o tamanho máximo para o formato XXX.XXX.XXX-XX
    cleaned = cleaned.substring(0, 14);

    // Atualiza o valor do input
    input.value = cleaned;
}

