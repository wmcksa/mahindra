<?php

namespace App\Livewire\Frontend\VehiclesDetail;

use Livewire\Component;
use App\Models\RequestOffer;
use App\Models\MiantenanecTimee;

class MiantenanecTime extends Component
{

    public $name, $email, $phone, $date, $type, $message;

    //خاصةب القواعد لتعبئة الجداول
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => 'required',
            'date' => 'required',
            'type' => 'required',
            'message' => 'required',
        ];
    }

    public function Request()
    {
        $this->validate();

        $miantenanec_time =  MiantenanecTimee::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'date' => $this->date,
            'type' => $this->type,
            'message' => $this->message,
        ]);

        return $miantenanec_time;
    }

    public function Save()
    {
        $save = $this->Request();

        if ($save) {
            session()->flash('message', 'تم الإضافة بنجاح');
        } else {
            return redirect()->back();
        }
    }


    public function render()
    {
        return view('livewire.frontend.vehicles-detail.miantenanec-time');
    }
}
