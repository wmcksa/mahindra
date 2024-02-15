<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Car;
use App\Models\Slider;
use App\Models\WebsiteContent;
use App\Models\Feature;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DealerLocator;
use App\Models\ModelCar;
use App\Models\Setting;

class FrontendController extends Controller
{
    //العرض يكون في الصفحة الرئيسية
    public function index()
    {
        $sliders = Slider::all();
        $modelCars =ModelCar::where('language_id',1)->get();
        $content = WebsiteContent::first();
        return view('frontend.index',compact('content','sliders','modelCars'));
    }


    //العرض يكون في الصفحة الرئيسية
    public function dealerlocator()
    {

        $dealerlocators = DealerLocator::where('language_id', 1)->orderBy('id', 'DESC')->get(); //عرض ناقل الحركة
        if ($dealerlocators) {

            return view('frontend.dealerlocator', [
                'dealerlocators' => $dealerlocators,
            ]);
        } else {
            return redirect()->back();
        }
    }


    //عرض صفحة معلومات عن الشركة
    public function about()
    {
        $content = WebsiteContent::first();
        return view('frontend.about',compact('content'));
    }

    //صفحة عرض السيارات
    public function vehicles()
    {
            $modelCars =ModelCar::where('language_id',1)->get();
            return view('frontend.vehicles',compact('modelCars'));
    }


    public function viewCategory($car_id)
    {

        $category = Category::where('car_id', $car_id)->where('language_id', 1)->first(); //جلب البيانات من جدول category بحسب رقم id

        if ($category) {

            $categories = Category::where('car_id', $car_id)->where('language_id', 1)->get(); //جلب البيانات من جدول category بحسب رقم id
            $features = Feature::where('category_id', $category->id)->where('language_id', 1)->get();


            return view('frontend.viewCategory', [
                'categories' => $categories,
                'features' => $features
            ]);
        } else {
            return redirect()->back();
        }
    }


    //عرض معلومات السيارة المحددة
    public function VehiclesDetail($category_id)
    {
        $category = Category::where('id', $category_id)->where('language_id', 1)->first(); //جلب البيانات من جدول category بحسب رقم id
        if ($category) {
            // $categories = Category::where('car_id', $car_id)->get();

            //جلب المواصفات المرتبطة بالفئة المددة
            $feature = Feature::where('category_id', $category->id)->where('language_id', 1)->first();
            if ($feature) {

                return view('frontend.VehiclesDetail', [
                    'category' => $category,
                    'feature' => $feature,
                    // 'categories' => $categories
                ]);
            } else {
                return redirect()->back();
            }
        }
    }


    //عرض صفحة تواصل معنا
    public function contact()
    {
        $setting = Setting::where('language_id',1)->first();
        return view('frontend.contact',compact('setting'));
    }
}
