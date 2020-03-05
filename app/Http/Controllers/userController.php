<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\Validaciones;
use App\User;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
  

    public function editUser(Request $req)
    {
        $reglas = [
            'name' => ['required', 'string','min:2', 'max:255'],
            'surname' => ['required', 'string','min:2', 'max:255'],
            'avatar' => ['mimes:jpeg,jpg,png']
        ];
        $this->validate($req,$reglas);

           
        $id = $req['id'];
        $user = User::find($id);
        
        if($req->file('avatar')){
            $pathImage=$req->file('avatar')->store("public");
            $filename = basename($pathImage);
            $user->avatar = $filename;
        }
        $user->name = $req['name'];
        $user->surname = $req['surname'];
       

        $user->save();
        return redirect('account');
    }
}
