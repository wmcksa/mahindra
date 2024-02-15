<?php

namespace App\Livewire\Frontend;

use App\Models\Car;
use App\Models\Engine;
use App\Models\Feature;
use Livewire\Component;
use App\Models\Category;
use App\Models\ModelCar;
use App\Models\YearOfModel;
use App\Models\MotionVactor;
use App\Models\DealerLocator;
use Session;

class CarFilter extends Component
{
    public $dealer_locator_id, $model_car_id, $language_id, $year_of_model_id, $motion_vactor_id, $engine_id, $category_id;


    public function viewCar()
    {
        $car = Car::where('dealer_locator_id', $this->dealer_locator_id)
            ->where('model_car_id', $this->model_car_id)
            ->where('year_of_model_id', $this->year_of_model_id)
            ->where('motion_vactor_id', $this->motion_vactor_id)
            ->where('engine_id', $this->engine_id)
            ->where('language_id', 1)
            ->first();

        // $category = Category::where('id', $category_id)->first(); //جلب البيانات من جدول category بحسب رقم id
        if ($car) {

            $category = Category::where('id', $this->category_id)
                ->where('car_id', $car->id)
                ->where('language_id', 1)
                ->first(); //جلب البيانات من جدول category بحسب رقم id

            if ($category) {

                $feature = Feature::where('category_id', $this->category_id)
                    ->where('language_id', 1)->first();

                if ($feature) {
                    return redirect('/VehiclesDetail/' . $feature->category_id);
                }
            }
        } else {
            Session::flash('error','لا يوجد نتائج للبحث');

            return redirect('/');
        }
    }





    public function render()
    {

        $Categories = Category::where('language_id', 1)->orderBy('id', 'DESC')->get(); //عرض الفئات
        $dealerLocators = DealerLocator::orderBy('id', 'DESC')->where('language_id', 1)->get(); //عرض الفروع
        $engines = Engine::where('language_id', 1)->orderBy('id', 'DESC')->get(); //عرض المحركات
        $modelCars = ModelCar::where('language_id', 1)->orderBy('id', 'DESC')->get(); //عرض نوع السيارة
        $yearOfModeles = YearOfModel::orderBy('id', 'DESC')->get(); //عرض سنة  التصنيع
        $motionVactor = MotionVactor::where('language_id', 1)->orderBy('id', 'DESC')->get(); //عرض ناقل الحركة

        return view('livewire.frontend.car-filter', [
            'Categories' => $Categories,
            'dealerLocators' => $dealerLocators,
            'engines' => $engines,
            'modelCars' => $modelCars,
            'yearOfModeles' => $yearOfModeles,
            'motionVactor' => $motionVactor
        ]);
    }
}
