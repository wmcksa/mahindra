<div>
    <section id="filter_form2">

        <div class="container">

            <div class="main_bg white-text">

                <h3>
                    <span id="ContentPlaceHolder_lblFindYourDreamCar">Find Your Dream Car</span>
                </h3>

                <div>

                    <div class="row">

                        {{--اختر الفرع--}}
                        <div class="form-group col-md-3 col-sm-6">
                            <div class="select">
                                <select class="form-control" wire:model.defer="dealer_locator_id">
                                    <option value=""> Select Location </option>
                                    @forelse ($dealerLocators as $dealerLocator)
                                    <option value="{{$dealerLocator->id}}">
                                        {{$dealerLocator->location}}
                                    </option>

                                    @empty
                                    <option>No Location</option>
                                    @endforelse
                                </select>

                            </div>

                        </div>


                        {{--اختر مودل السيارة--}}
                        <div class="form-group col-md-3 col-sm-6">
                            <div class="select">
                                <select class="form-control" wire:model.defer="model_car_id">
                                    <option>
                                        <span id="ContentPlaceHolder_lblSelectModel">Select Model</span>
                                    </option>
                                    @forelse ($modelCars as $modelCar)
                                    <option value="{{$modelCar->id}}">{{$modelCar->name}}</option>
                                    @empty
                                    <option>
                                        <span>No Models</span>
                                    </option>
                                    @endforelse
                                </select>
                            </div>
                        </div>


                        {{--اختر الفئة--}}
                        <div class="form-group col-md-3 col-sm-6">
                            <div class="select">
                                <select class="form-control" wire:model.defer="category_id">
                                    <option> Select category </option>
                                    @forelse ($Categories as $Category)
                                    <option value="{{$Category->id}}"> {{$Category->name}} </option>
                                    @empty
                                    <option>No Categories</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        {{--اختر نوع ناقل الحركة--}}
                        <div class="form-group col-md-3 col-sm-6">
                            <div class="select">
                                <select class="form-control" wire:model.defer="motion_vactor_id">
                                    <option> Motion vector</option>
                                    @forelse ($motionVactor as $motionVactorItem)
                                    <option value="{{$motionVactorItem->id}}"> {{$motionVactorItem->name}} </option>
                                    @empty
                                    <option>No Motion vector</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        {{--اختر نوع المحرك--}}
                        <div class="form-group col-md-3 col-sm-6">
                            <div class="select">
                                <select class="form-control" wire:model.defer="engine_id">
                                    <option> Engine type</option>
                                    @forelse ($engines as $engine)
                                    <option value="{{$engine->id}}">{{$engine->type}} </option>
                                    @empty
                                    <option>No Engine</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>


                        {{--اختر سنة التصنيع--}}
                        <div class="form-group col-md-3 col-sm-6">
                            <div class="select">
                                <select class="form-control" wire:model.defer="year_of_model_id">
                                    <option> Year of Model </option>
                                    @forelse ($yearOfModeles as $yearOfModele)
                                    <option value="{{ $yearOfModele->id }}">
                                        {{$yearOfModele->year_of_model}} </option>
                                    @empty
                                    <option> No Year Of Model </option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <a class="btn btn-block" wire:click="viewCar">
                                {{-- <i class="fa fa-search" aria-hidden="true"></i> --}}
                                <span id="ContentPlaceHolder_lblSearchCar">Search Car</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>











    {{--
    <script>
        function my_filter() {

    //alert( document.getElementById('ContentPlaceHolder_lblSelectLocation').value );

var e,value,text;

var counter=0;



e = document.getElementById("dropdownlist_1");
value = e.value;
text = e.options[e.selectedIndex].text;

if(text.localeCompare(e.options[0].text)==0){

}
else{
counter++;
}





e = document.getElementById("dropdownlist_2");
value = e.value;
text = e.options[e.selectedIndex].text;

if(text.localeCompare(e.options[0].text)==0){

}
else{
counter++;
}



e = document.getElementById("dropdownlist_3");
value = e.value;
text = e.options[e.selectedIndex].text;

if(text.localeCompare(e.options[0].text)==0){

}
else{
counter++;
}



e = document.getElementById("dropdownlist_4");
value = e.value;
text = e.options[e.selectedIndex].text;

if(text.localeCompare(e.options[0].text)==0){

}
else{
counter++;
}





e = document.getElementById("dropdownlist_5");
value = e.value;
text = e.options[e.selectedIndex].text;

if(text.localeCompare(e.options[0].text)==0){

}
else{
counter++;
}









e = document.getElementById("dropdownlist_6");
value = e.value;
text = e.options[e.selectedIndex].text;

if(text.localeCompare(e.options[0].text)==0){

}
else{
counter++;
}




















//alert(counter);

if(counter==6){

window.open("VehiclesDetail.php?ID=1");
}

else{
alert(" you have to  select  from all the options ");
}

}


//href="VehiclesDetail.php?ID=1"

    </script> --}}
</div>