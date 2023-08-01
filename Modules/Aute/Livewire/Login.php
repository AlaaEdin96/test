<?php

namespace Modules\Aute\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    
    public $email,$password;

    public function render()
    {
        return view('aute::livewire.login');
    }

    protected $rules = [
        'email' => 'required|email',
            'password' => 'required',
      ];

    public function login()
    {
        dd(4);
        $this->validate();
 
        if(Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
                session()->flash('message', "You are Login successful.");
                return to_route('/');
        }else{
           
            session()->flash('error', 'email and password are wrong.');
                        
        }
    }



 

    

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy( $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
