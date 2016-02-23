<?php
use Acme\forms\LoginForm;
use Laracasts\Validation\FormValidationException;

class SessionsController extends \BaseController {

    protected $loginForm;

    public function __construct(LoginForm $loginForm) {
        $this->loginForm = $loginForm;
    }

	public function create()
	{
        // Verificamos que el usuario no esté autenticado
        if (Session::get('auth'))
        {
            return Redirect::route('home');
        }

        return View::make('sessions.create');
	}

    public function store()
    {

        $formData = Input::only('codigo', 'clave');

        $this->loginForm->validate($formData);

            $user = User::where('codigo','like',$formData['codigo'])->where('clave','like','%'.$formData['clave'].'%')->get();
        if ($user->count() != 1)
        {
            return Redirect::back()->withInput()->with('error', 'Su nombre de Usuario o Su clave son Incorrectos.');
        }
        Session::put('auth',$user);

        return Redirect::route('home');
    }

    public function destroy()
    {
        Session::flush();

        return Redirect::to('/')->with('success', 'Gracias por su Visita.');
    }

}