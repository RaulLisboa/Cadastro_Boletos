<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.8/datatables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.8/datatables.min.js"></script>
    <script src="{{ asset('js\scriptDataTable.js') }}"></script>
    <script src="{{ asset('js\modal.js') }}"></script>
    <script src="{{ asset('js\formatCampos.js') }}"></script>

    @vite('resources/css/app.css')

</head>

<body>
    <div class="isolate bg-white px-6 py-12 sm:py-8 lg:px-8">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
            aria-hidden="true">
            <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Cadastro</h2>
        </div>
        <form action="{{ route('betas.store') }}" method="POST" class="mx-auto mt-8 max-w-xl sm:mt-10">
            @csrf
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-3">
                <div class="sm:col-span-3">
                    <label for="nome" class="block text-sm font-semibold leading-6 text-gray-900">Nome</label>
                    <div class="mt-2.5">
                        <input type="text" name="nome" id="nome" autocomplete="given-name"
                            value="{{ old('nome') }}"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                        @error('nome')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="cpf" class= "block text-sm font-semibold leading-6 text-gray-900">CPF</label>
                    <div class="mt-2.5">
                        <input type="text" name="cpf" id="cpf" autocomplete="organization"
                            value="{{ old('cpf') }}"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            oninput="formatarCpf(this)">

                        @error('cpf')
                            <p class="text-red-500
                            text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="whatsapp" class="block text-sm font-semibold leading-6 text-gray-900">Whatsapp</label>
                    <div class="relative mt-2.5">
                        <div class="absolute inset-y-0 left-0 flex items-center">
                        </div>
                        <input type="tel" name="whatsapp" id="whatsapp" autocomplete="tel"
                            value="{{ old('whatsapp') }}"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            oninput="formatarWhatsApp(this)">
                        @error('whatsapp')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="fixo" class="block text-sm font-semibold leading-6 text-gray-900">Fixo</label>
                    <div class="relative mt-2.5">
                        <div class="absolute inset-y-0 left-0 flex items-center">
                        </div>
                        <input type="tel" name="fixo" id="fixo" autocomplete="tel"
                            value="{{ old('fixo') }}"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            oninput="formatarFixo(this)">
                        @error('fixo')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" autocomplete="on"
                            value="{{ old('email') }}"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="numero_boleto" class="block text-sm font-semibold leading-6 text-gray-900">Número do
                        Boleto</label>
                    <div class="mt-2.5">
                        <input type="text" name="numero_boleto" id="numero_boleto" autocomplete="off"
                            value="{{ old('numero_boleto') }}"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                        @error('numero_boleto')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="vencimento"
                        class="block text-sm font-semibold leading-6 text-gray-900">Vencimento</label>
                    <div class="mt-2.5">
                        <input type="date" name="vencimento" id="vencimento" autocomplete="off"
                            value="{{ old('vencimento') }}"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                        @error('vencimento')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="url" class="block text-sm font-semibold leading-6 text-gray-900">URL</label>
                    <div class="mt-2.5">
                        <input type="url" name="url" id="url" autocomplete="off"
                            value="{{ old('url') }}"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                        @error('url')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="obs" class="block text-sm font-semibold leading-6 text-gray-900">Obs.</label>
                    <div class="mt-2.5">
                        <textarea name="obs" id="obs" rows="2"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ old('obs') }}</textarea>

                        @error('obs')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <button type="submit"
                    class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cadastrar</button>
            </div>
        </form>

        <hr class="mt-20 mb-20">

        <div class="overflow-x-auto">
            <table id="dataTable" class="sm:text-sm sm:leading-6 min-w-full divide-y divide-gray-200">
                <!-- cabeçalho -->
                <thead class="bg-gray-100">
                    <tr class="text-left">
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider sm:text-sm">
                            Nome</th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider sm:text-sm">CPF
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider sm:text-sm">
                            Whatsapp</th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider sm:text-sm">
                            E-mail</th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider sm:text-sm">
                            Número Boleto</th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider sm:text-sm">
                            Vencimento</th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider sm:text-sm">Url
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider sm:text-sm">Obs
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider sm:text-sm">
                            Criação</th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider sm:text-sm">
                            Última Alteração</th>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider sm:text-sm">
                            Ações</th>
                    </tr>
                </thead>
                <!-- corpo da tabela -->
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($betas as $beta)
                        <tr class="text-left">
                            <td class="px-6 py-4 whitespace-nowrap">{{ $beta->nome }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $beta->cpf }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $beta->whatsapp }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $beta->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $beta->numero_boleto }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($beta->vencimento)->format('d/m/Y') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $beta->url }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $beta->obs }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($beta->created_at)->format('d-m-Y H:m') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ \Carbon\Carbon::parse($beta->updated_at)->format('d-m-Y') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <!-- Formulário de Edição -->
                                    <form action="{{ route('betas.edit', $beta->id) }}" method="GET">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit"
                                            class="text-blue-500 hover:underline mr-1">Editar</button>
                                    </form>
                                    <!-- Formulário de Deleção -->
                                    <form action="{{ route('betas.destroy', $beta->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-500 hover:underline ml-1">Deletar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>


    {{-- Modal para Msgs --}}
    <div id="modalMsdCadastro" class="fixed inset-0 z-50 overflow-auto bg-gray-800 bg-opacity-50 hidden">
        <div class="flex justify-center items-center h-full">
            <div class="bg-white rounded-lg overflow-hidden shadow-xl p-4 w-96">
                <div class="flex justify-between items-center">
                    <h2 id="modalTitle" class="text-lg font-semibold text-gray-900"></h2>
                    <button id="closeModal" class="text-gray-400 hover:text-gray-600 focus:outline-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div id="modalContent">
                    <div id="message"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.sessionMessages = {
            success: @json(session('success')),
            error: @json(session('error'))
        };
    </script>
</body>

</html>
