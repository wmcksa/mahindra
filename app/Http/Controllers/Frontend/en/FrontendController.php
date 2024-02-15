<?php

namespace App\Http\Controllers\Frontend\en;

use App\Models\Car;
use App\Models\Slider;
use App\Models\WebsiteContent;
use App\Models\Feature;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\DealerLocator;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\DrivingTest;
use App\Models\MiantenanecTimee;
use App\Models\ModelCar;
use App\Models\RequestMoreInfo;
use App\Models\RequestOffer;
use App\Models\Setting;

class FrontendController extends Controller
{
    //العرض يكون في الصفحة الرئيسية
    public function index()
    {
        $sliders = Slider::all();
        $modelCars =ModelCar::where('language_id',2)->get();
        $content = WebsiteContent::first();
        return view('frontend.en.index',compact('sliders','content','modelCars'));
    }
    //عرض صفحة معلومات عن الشركة
    public function about()
    {
        $content = WebsiteContent::first();
        return view('frontend.en.about',compact('content'));
    }

    //عرض صفحة تواصل معنا
    public function contact()
    {
        $setting = Setting::where('language_id',2)->first();
        return view('frontend.en.contact',compact('setting'));
    }


    public function contact_us(Request $request)
    {
       $data = $request->all();
       ContactUs::create($data);
       return redirect()->back();

    }


    public function scheduleTestModal(Request $request)
    {
        $data = $request->all();
       DrivingTest::create($data);
       return redirect()->back();
    }

    public function requestOfferModal(Request $request)
    {
        $data = $request->all();
       RequestOffer::create($data);
       return redirect()->back();
    }

    public function requestInfoModal(Request $request)
    {
        $data = $request->all();
       RequestMoreInfo::create($data);
       return redirect()->back();
    }

    public function bookMaintainanceModal(Request $request)
    {
        $data = $request->all();
       MiantenanecTimee::create($data);
       return redirect()->back();
    }

    //العرض يكون في الصفحة الرئيسية
    public function dealerlocator()
    {

        $dealerlocators = DealerLocator::where('language_id', 2)->orderBy('id', 'DESC')->get(); //عرض ناقل الحركة
        if ($dealerlocators) {

            return view('frontend.en.dealerlocator', [
                'dealerlocators' => $dealerlocators,
            ]);
        } else {
            return redirect()->back();
        }
    }


    //صفحة عرض السيارات
    public function vehicles()
    {
            $modelCars =ModelCar::where('language_id',2)->get();
            return view('frontend.en.vehicles',compact('modelCars'));
    }

    public function viewCategory($car_id)
    {
        $category = Category::where('car_id', $car_id)->where('language_id', 2)->first(); //جلب البيانات من جدول category بحسب رقم id

        if ($category) {

            $categories = Category::where('car_id', $car_id)->where('language_id', 2)->get(); //جلب البيانات من جدول category بحسب رقم id
            $features = Feature::where('category_id', $category->id)->where('language_id', 2)->get();


            return view('frontend.en.viewCategory', [
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
        $category = Category::where('id', $category_id)->where('language_id', 2)->first(); //جلب البيانات من جدول category بحسب رقم id
        if ($category) {

            // $categories = Category::where('car_id', $car_id)->get();

            //جلب المواصفات المرتبطة بالفئة المددة
            $feature = Feature::where('category_id', $category->id)->where('language_id', 2)->first();
            if ($feature) {

                return view('frontend.en.VehiclesDetail', [
                    'category' => $category,
                    'feature' => $feature,
                    // 'categories' => $categories
                ]);
            } else {
                return redirect()->back();
            }
        }

    }


    public function search(Request $request)
    {

            $car = Car::where('name', 'like', '%' . request('search') . '%')->first();
            if($car){

            $category_id =$car->category->first()->id;
            $category = Category::where('id', $category_id)->where('language_id', 2)->first(); //جلب البيانات من جدول category بحسب رقم id
            if ($category) {
    
                // $categories = Category::where('car_id', $car_id)->get();
    
                //جلب المواصفات المرتبطة بالفئة المددة
                $feature = Feature::where('category_id', $category->id)->where('language_id', 2)->first();
                if ($feature) {
    
                    return view('frontend.en.VehiclesDetail', [
                        'category' => $category,
                        'feature' => $feature,
                        // 'categories' => $categories
                    ]);
                } else {
                    return redirect()->back();
                }
            }
    

            }else{
                return redirect()->back();
            }
            
            
            
            
    
    }
}
