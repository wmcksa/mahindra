<?php

namespace App\Livewire\Frontend\VehiclesDetail;

use Livewire\Component;
use App\Models\RequestMoreInfo;

//خاص بادخال بيانات الى جدول طلب مزيد من المعلومات
class RequestMore extends Component
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

        $request_more_info =  RequestMoreInfo::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        return $request_more_info;
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
        return view('livewire.frontend.vehicles-detail.request-more');
    }
}
