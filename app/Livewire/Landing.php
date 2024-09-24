<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\SocialMedia;
use Livewire\Component;

class Landing extends Component
{
    public $name, $email, $phone, $message;

    public function render()
    {
        $setting = Setting::first();
        $profile = Profile::first();
        $skills = Skill::all();
        $projects = Project::all();
        $medias = SocialMedia::all();
        return view('livewire.landing', [
            'setting' => $setting,
            'profile' => $profile,
            'skills' => $skills,
            'projects' => $projects,
            'medias' => $medias
        ]);
    }

    public function createContact()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message
        ]);

        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';

        session()->flash('message', 'Your message has been sent successfully.');
    }
}
