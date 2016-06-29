<?php

class UsersController extends BaseController {

    public function login()
    {
        return View::make('users.login');
    }
    
    public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    public function authenticate()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        if(Auth::attempt(['email' => $email, 'password' => $password]))
        {
            //fetch user profile details
            $user = Auth::user();
            $user->last_login = time();
            $user->save();
            return Redirect::to('profile')->withUser($user);
        }
        return View::make('users.login')->withError('Invalid username or password');
    }

    public function register()
    {
        return View::make('users.register');
    }
    
    public function store()
    {
        //get all input data
        $data = Input::all();
        //create user object
        $user = new User;
        //validate using rules in user model. Please see BaseModel for reference
        if($user->validate($data))
        {
            //hash the password
            $data['password'] = Hash::make($data['password']);
            //get uploaded picture
            $file = Input::file('picture');
            //if valid, move to public path and add to input data array
            if($file != null && $file->isValid())
            {
                $data['picture_url'] = 'files/'.time().$file->getClientOriginalName();
                $file->move(public_path('files/'), $data['picture_url']);
            }
            //save user details
            $user->fill($data);
            $user->save();
            return Redirect::to('login')->withMessage('You have been registered successfully. You may now login');
        }
        //flash old input to session and return with validation errors
        Input::flash();
        return View::make('users.register')->withErrors($user->getValidator());
    }
    
    public function profile()
    {
        $user = Auth::user();
        return View::make('users.profile')->withUser($user);
    }

    public function members()
    {
        return View::make('users.members')->withMembers(User::all());
    }

}
