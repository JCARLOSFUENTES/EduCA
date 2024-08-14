<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Mostrar vista de registro
    public function index()
    {
        $categories = Category::all(); // Obtener todas las categorías
        return view('auth.register.register', compact('categories'));
    }

    // Manda la solicitud POST del formulario de registro
    public function store(Request $request)
    {
        // Modificar Request
        $request->request->add(['username' => Str::slug($request->username)]);

        // Validación de la data recibida
        $this->validate($request, [
            'name' => 'required|max:50',
            'username' => 'required|unique:users|min:5|max:36',
            'email' => 'required|unique:users|max:60|email',
            'password' => 'required|min:5|max:36|confirmed',
            'password_confirmation' => 'required|min:5|max:36',
            'categories' => 'array',  // Validar que se envíe un array de categorías
            'categories.*' => 'exists:categories,id',  // Validar que las categorías existan en la BD
        ]);

        // Crear Registro en DataBase
        $user = User::create([
            'name'      => $request->name,
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);

        // Asignar categorías al usuario
        $user->categories()->sync($request->categories);

        // Autenticar Usuario
        auth()->attempt($request->only('email', 'password'));

        // Redireccionar al usuario
        return redirect()->route('home.index');
    }
}
