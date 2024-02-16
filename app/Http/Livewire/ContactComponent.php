<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ContactComponent extends Component
{
    public $isActive = false;
    public $name;
    public $email;
    public $phone;
    public $message;

    // Fungsi yang dipanggil saat ada perubahan pada field tertentu
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);
    }

    // Fungsi untuk mengirim pesan
    public function sendMessage()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        // Membuat objek Contact dan menyimpan pesan
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('message', 'Your message has been sent successfully.');
    }

    public function render()
    {
        return view('livewire.contact-component');
    }
}