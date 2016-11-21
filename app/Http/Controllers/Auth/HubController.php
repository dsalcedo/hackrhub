<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Usuario\Usuario;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class HubController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/app';
    protected $loginPath  = '/';
    protected $redirectAfterLogout = '/';

    public function __construct(Request $request)
    {
        $this->req = $request;
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function registro()
    {
        dd($this->req->all());
        $this->validate($this->req , [
            'nombre'   => 'required|max:255',
            'email'    => 'required|email|max:255|unique:usuarios',
            'password' => 'required|min:6|max:255',
            'g-recaptcha-response' => 'required|grecaptcha'
        ]);

        $usuario = $this->create($this->req->all());

        //Auth::guard()->login($usuario);
        //return redirect($this->redirectPath());
        return redirect()->route('website.index')->with('success', $this->req->get('nombre'));
    }

    protected function create(array $data)
    {
        $usuario = Usuario::create([
                        'nombre'   => $data['nombre'],
                        'email'    => $data['email'],
                        'password' => bcrypt($data['password'])
                    ]);

        return $usuario;
    }
}
