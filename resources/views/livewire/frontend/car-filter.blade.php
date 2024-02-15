<div>
    <section class="filter_form2">
        <div class="container">
            <div class="main_bg white-text">
                <h3>
                    <span>ابحث عن سيارة أحلامك</span>
                </h3>
                <div>
                    <div class="row">
                        {{-- <form action="{{url('index/search')}}" method="Post"> --}}
                            <div class="form-group col-md-3 col-sm-6">
                                <div class="select">
                                    <select class="form-control" wire:model.defer="dealer_locator_id">
                                        <option value="">
                                            <span>اختر الفرع</span>
                                        </option>
                                        @forelse ($dealerLocators as $dealerLocator)
                                        <option value="{{$dealerLocator->id}}">
                                            <span>{{$dealerLocator->location}}</span>
                                        </option>
                                        @empty
                                        <option>
                                            <span>لا يوجد فروع</span>
                                        </option>
                                        @endforelse

                                    </select>
                                </div>
                            </div>

                            {{--اختيار نوع السيارة --}}
                            <div class="form-group col-md-3 col-sm-6">
                                <div class="select">
                                    <select class="form-control" wire:model.defer="model_car_id">
                                        <option>
                                            <span>نوع السيارة</span>
                                        </option>

                                        @forelse ($modelCars as $modelCar)
                                        <option value="{{$modelCar->id}}">
                                            <span>{{$modelCar->name}}
                                            </span>
                                        </option>

                                        @empty
                                        <option>
                                            <span>لا يوجد أنواع</span>
                                        </option>
                                        @endforelse

                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-3 col-sm-6">
                                <div class="select">
                                    <select class="form-control" wire:model.defer="category_id">
                                        <option>
                                            <span>حدد الفئة</span>
                                        </option>

                                        @forelse ($Categories as $Category)
                                        <option value="{{$Category->id}}"> {{$Category->name}} </option>

                                        @empty
                                        <option> لا يوجد فئات </option>
                                        @endforelse

                                    </select>
                                </div>
                            </div>

                            {{--اختيار ناقل الحركة--}}
                            <div class="form-group col-md-3 col-sm-6">
                                <div class="select">
                                    <select class="form-control" wire:model.defer="motion_vactor_id">

                                        <option> ناقل الحركة</option>
                                        @forelse ($motionVactor as $motionVactorItem)
                                        <option value="{{$motionVactorItem->id}}"> {{$motionVactorItem->name}} </option>

                                        @empty
                                        <option> لا يوجد نواقل حركة </option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            {{--اختيار نوع المحرك --}}
                            <div class="form-group col-md-3 col-sm-6">
                                <div class="select">
                                    <select class="form-control" wire:model.defer="engine_id">
                                        <option> نوع المحرك</option>
                                        @forelse ($engines as $engine)
                                        <option value="{{$engine->id}}">{{$engine->type}} </option>
                                        @empty
                                        <option> لا يوجد محركات </option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            {{--اختيار سنة الصنع --}}
                            <div class="form-group col-md-3 col-sm-6">
                                <div class="select">
                                    <select class="form-control" wire:model.defer="year_of_model_id">
                                        <option>
                                            <span>سنة الصنع</span>
                                        </option>
                                        @forelse ($yearOfModeles as $yearOfModele)
                                        <option value="{{ $yearOfModele->id }}">
                                            {{$yearOfModele->year_of_model}} </option>
                                        @empty
                                        <option>
                                            لا يوجد سنة
                                        </option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-6 col-sm-6">
                                {{-- <a class="btn btn-block" onclick="my_filter()"> --}}
                                    <a class="btn btn-block" wire:click="viewCar">
                                        {{-- <span id="ContentPlaceHolder_lblSearchCar">عرض السيارة</span> --}}
                                        <span>عرض السيارة</span>
                                    </a>
                            </div>

                            {{--
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- <script>
        function my_filter() {

        //alert( document.getElementById('ContentPlaceHolder_lblSelectLocation').value );

        var e, value, text;

        var counter = 0;



        e = document.getElementById("dropdownlist_1");
        value = e.value;
        text = e.options[e.selectedIndex].text;

        if (text.localeCompare(e.options[0].text) == 0) {

        } else {
            counter++;
        }





        e = document.getElementById("dropdownlist_2");
        value = e.value;
        text = e.options[e.selectedIndex].text;

        if (text.localeCompare(e.options[0].text) == 0) {

        } else {
            counter++;
        }



        e = document.getElementById("dropdownlist_3");
        value = e.value;
        text = e.options[e.selectedIndex].text;

        if (text.localeCompare(e.options[0].text) == 0) {

        } else {
            counter++;
        }



        e = document.getElementById("dropdownlist_4");
        value = e.value;
        text = e.options[e.selectedIndex].text;

        if (text.localeCompare(e.options[0].text) == 0) {

        } else {
            counter++;
        }





        e = document.getElementById("dropdownlist_5");
        value = e.value;
        text = e.options[e.selectedIndex].text;

        if (text.localeCompare(e.options[0].text) == 0) {

        } else {
            counter++;
        }
        e = document.getElementById("dropdownlist_6");
        value = e.value;
        text = e.options[e.selectedIndex].text;

        if (text.localeCompare(e.options[0].text) == 0) {

        } else {
            counter++;
        }
















        //alert(counter);

        if (counter == 6) {

            window.open("VehiclesDetail.php?ID=1");
        } else {
            alert("يجب تعبئة كل الخيارات ");
        }
    }
    //href="VehiclesDetail.php?ID=1"
    </script> --}}

</div>