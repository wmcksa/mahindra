<?php

namespace App\Livewire\Frontend\En\VehiclesDetail;

use Livewire\Component;
use App\Models\ContactUs;

class Contact extends Component
{
    public $name, $email, $phone, $message;
    //خاصةب القواعد لتعبئة الجداول
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => 'required',
            'message' => 'required',
        ];
    }

    public function Request()
    {
        $this->validate();

        $test_drive =  ContactUs::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        return $test_drive;
    }

    public function Save()
    {
        $save = $this->Request();

        if ($save) {
            session()->flash('message', 'Added Successfully');
        } else {
            return redirect()->back();

            session()->flash('error', 'Something Went Be Wrong!');
        }
    }

    public function render()
    {
        return view('livewire.frontend.en.vehicles-detail.contact');
    }
}
