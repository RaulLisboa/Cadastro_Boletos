$(document).ready(function () {
    $('#dataTable').DataTable({
        order: [
            [8, 'desc']
        ],
        lengthChange: true,
        paging: true,
        pageLength: 10,
        lengthMenu: [1, 5, 10, 25, 50, 75, 100],
        responsive: true,
        searching: true,
        language: {
            url: 'Portuguese-Brasil.json' // Tradução para português
        },
        columnDefs: [
            // { targets: '_all', searchable: true } // Todas as colunas são pesquisáveis
            // { targets: [0], searchable: true }, // Coluna 0 (primeira coluna) é pesquisável
            // { targets: '_all', searchable: false }, // Todas as colunas são pesquisáveis

        ]
    });
});