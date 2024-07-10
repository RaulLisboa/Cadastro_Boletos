<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro - Beta</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto py-8">
        <h2 class="text-2xl font-bold mb-4">Editar Registro</h2>
        <form action="{{ route('betas.update', $beta->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ $beta->nome }}"
                    class="mt-1 block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="cpf" class="block text-sm font-medium text-gray-700">CPF</label>
                <input type="text" name="cpf" id="cpf" value="{{ $beta->cpf }}"
                    class="mt-1 block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="whatsapp" class="block text-sm font-medium text-gray-700">Whatsapp</label>
                <input type="text" name="whatsapp" id="whatsapp" value="{{ $beta->whatsapp }}"
                    class="mt-1 block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ $beta->email }}"
                    class="mt-1 block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="numero_boleto" class="block text-sm font-medium text-gray-700">Número do Boleto</label>
                <input type="text" name="numero_boleto" id="numero_boleto" value="{{ $beta->numero_boleto }}"
                    class="mt-1 block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="vencimento" class="block text-sm font-medium text-gray-700">Vencimento</label>
                <input type="date" name="vencimento" id="vencimento" value="{{ $beta->vencimento }}"
                    class="mt-1 block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="url" class="block text-sm font-medium text-gray-700">URL</label>
                <input type="url" name="url" id="url" value="{{ $beta->url }}"
                    class="mt-1 block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <div class="mb-4">
                <label for="obs" class="block text-sm font-medium text-gray-700">Observações</label>
                <textarea name="obs" id="obs" rows="3"
                    class="mt-1 block w-full px-3 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ $beta->obs }}</textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Salvar
                    Alterações</button>
            </div>
        </form>
    </div>
</body>

</html>
