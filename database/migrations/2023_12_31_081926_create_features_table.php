<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')->constrained()->cascadeOnDelete(); //رقم الفئة
            $table->foreignId('language_id')->constrained()->cascadeOnDelete(); //رقم اللغة

            $table->longText('accessories'); //صورالاكسسوارات
            $table->longText('car_images'); //صورالسيارة
            //المواصفات التقنية
            $table->string('traction'); //شعبية
            $table->string('tyres'); //الاطارات
            $table->string('engine'); //المحرك
            $table->string('power'); //القوة
            $table->string('torque'); //عزم الدوران
            $table->string('transmission'); //انتقال
            $table->string('gears'); //التروص
            $table->string('wheels'); //عجلات
            $table->string('dismension_LXWXH'); //البعد (الطول × العرض × الارتفاع)
            $table->string('cargo_box_dimension_LXWXH'); //أبعاد صندوق الأمتعة (الطول × العرض × الارتفاع)
            $table->string('angle'); //زاوية
            $table->string('ground_clearance'); //تطهير الأرض
            $table->string('GVW'); //وزن إجمالي وزن المركبة
            $table->string('kerb'); //تطويق
            $table->string('pay_load'); //دفع حمولة

            //مواصفات الأمان
            $table->string('dual_front_AIR_bags'); //أكياس هواء أمامية مزدوجة
            $table->string('collapsible_steering_column'); //عمود توجيه قابل للانهيار
            $table->string('fire_retardant_upholstery'); //تنجيد مقاوم للحريق

            //مواصفات الراحة
            $table->string('AIR_conditoning'); //تكييف
            $table->string('steering_control'); //قيادة
            $table->string('rear_view_mirror'); //المرآة الخلفية
            $table->string('one_touch_window_control_driver_codriver_antipinch'); //برنامج تشغيل WINDOW CONTROL بلمسة واحدة - والمبرمج (مضاد للقرص)
            $table->string('follow_me_homw_headlamps'); //اتبعني المصابيح الأمامية
            $table->string('ARM_rest_on_front_seats'); //يستريح الذراع على المقاعد الأمامية
            $table->string('alloy_wheels'); //عجلات من سبائك
            $table->string('optional'); //اختياري
            $table->string('touch_screen_intregated_infotainment_satellite_navigation'); //شاشة تعمل باللمس متكاملة نظام المعلومات والترفيه الملاحة عبر الأقمار الصناعية

            //مميزات اخرى
            $table->string('headlamp'); //مصباح الرأس
            $table->string('hydraulic_bonnet_struts'); //أقواس بونيه هيدروليكيه
            $table->string('rear_demister'); //المقعد الخلفي
            $table->string('rich_black'); //غني بالأسود
            $table->string('projector_with_EYR_brow_lamps'); //جهاز عرض مزود بمصابيح حواجب

            //مواصفات الشكل
            $table->string('painted_door_handles'); //مقابض أبواب مطلية
            $table->string('painted_front_bumber'); //مصد أمامي مطلي
            $table->string('claddings'); //الكسوة
            $table->string('painted'); //رسم


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};
