<?php

namespace App\Livewire\Frontend\VehiclesDetail;

use Livewire\Component;
use App\Models\RequestOffer;


//خاص بادخال بيانات الى جدول طلب عرض

class Offer extends Component
{

    public $name, $email, $phone, $offer_price, $message;

    //خاصةب القواعد لتعبئة الجداول
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => 'required',
            'offer_price' => 'required',
            'message' => 'required',
        ];
    }

    public function Request()
    {
        $this->validate();

        $request_offer =  RequestOffer::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'offer_price' => $this->offer_price,
            'message' => $this->message,
        ]);

        return $request_offer;
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
        return view('livewire.frontend.vehicles-detail.offer');
    }
}
