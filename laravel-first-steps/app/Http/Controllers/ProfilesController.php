<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    // [Controller 2] Recebemos o req.params. O que vier depois de profile/{aqui!} será salvo dentro da variavel user.
    public function index($user) {

        /* Must return the req.params
        dd($user); */

        // [Controller 3] Se eu passo /profile/1 significa que estou buscando o usuário que tenha o ID = 1.
        // Eu salvo o resultado desta consulta ao banco na variavel user
        $user = User::findOrFail($user);

        // [Controller  4] O laravel aceita somente arrays como parâmetro. Não dá pra passar um objeto direto.
        // Colocamos dentro de uma variavel $user os valores que buscamos no banco.
        $sendToView = [
            'user' => $user,
        ];

        // dd($sendToView['0']->name);

        /* [Controller 5] Envio o dado que busquei no banco para a view chamada HOME.
        Se a view estivesse dentro de uma pasta a sintaxe seria diferente.
        Se estivesse dentro de views/institutional: institutional.home
        */
        return view('home', $sendToView);
    }
}
