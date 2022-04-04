<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register\Builder;
use App\Models\Register\Position;

use App\Repositories\UserRepository;
use App\Validators\RegisterValidator;

use Mail;

class UserController extends Controller
{

    public function register(){
        return view('register/index');
    }

    public function doRegister(Request $request, UserRepository $userRepository){

        $this->validator($request->all())->validate();
        $user = $userRepository->add($request->all());
        $position = Builder::createName($user->position);

        Mail::send('email.register', ['user' => $user, 'position' => $position], function($message) use($request){
            $message->to(env('REGISTER_EMAIL'));
            $message->subject('Rejestracja');
        });

        return "Poprawnie dodano użytkownika";

    }

    public function fields(int $type){
        $position = Builder::create($type);
        return $position ? $position->getFields() : '';
    }

    protected function validator(array $data)
    {
        return RegisterValidator::validate($data);
    }

}
