<?php

namespace App\Livewire\Frontend\VehiclesDetail;

use Livewire\Component;
use App\Models\DrivingTest;


//خاص بادخال بيانات الى جدول اختبار القيادة
class TestDrive extends Component
{

    public $name, $email, $phone, $date, $message;

    //خاصةب القواعد لتعبئة الجداول
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => 'required',
            'date' => 'required',
            'message' => 'required',
        ];
    }

    public function testDrive()
    {
        $this->validate();

        $test_drive = DrivingTest::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'date' => $this->date,
            'message' => $this->message,
        ]);

        return $test_drive;
    }

    public function Save()
    {
        $save = $this->testDrive();

        if ($save) {
            session()->flash('message', 'تم الإضافة بنجاح');
        } else {
            return redirect()->back();
        }
    }


    public function render()
    {
        return view('livewire.frontend.vehicles-detail.test-drive');
    }
}
