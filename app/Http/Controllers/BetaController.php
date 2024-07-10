<?php

namespace App\Http\Controllers;

use App\Models\Beta;
use Illuminate\Http\Request;

class BetaController extends Controller
{
    public function index()
    {
        $betas = Beta::all();
        return view('welcome', compact('betas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14',
            'whatsapp' => 'required|string|max:16',
            'fixo' => 'nullable|string|max:14',
            'email' => 'required|string|email|max:255',
            'numero_boleto' => 'required|string|max:255',
            'vencimento' => 'required|date',
            'url' => 'nullable|url|max:255',
            'obs' => 'nullable|string|max:255',
        ]);

        try {
            Beta::create($validated);
            return redirect()->back()->with('success', 'Dados salvos com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao salvar os dados. Por favor, tente novamente.');
        }
    }

    public function edit(Beta $beta)
    {
        return view('edit', compact('beta'));
    }

    public function update(Request $request, Beta $beta)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14',
            'whatsapp' => 'nullable|string|max:16',
            'fixo' => 'nullable|string|max:14',
            'email' => 'nullable|email|max:255',
            'numero_boleto' => 'nullable|string|max:255',
            'vencimento' => 'nullable|date',
            'url' => 'nullable|url|max:255',
            'obs' => 'nullable|string|max:255',
        ]);

        $beta->update($request->all());

        return redirect()->route('betas.index')
            ->with('success', 'Registro atualizado com sucesso!');
    }

    public function destroy(Beta $beta)
    {
        $beta->delete();

        return redirect()->route('betas.index')->with('success', 'Cliente deletado com sucesso!');
    }
}
