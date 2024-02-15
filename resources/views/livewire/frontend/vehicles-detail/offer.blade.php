<div>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">
                    <span id="lblMakeanOffer">طلب عرض</span>
                </h3>
            </div>
            <div class="modal-body">
                {{-- <form action="Post.php" method="POST"> --}}
                    <div class="py-3 py-md-12">
                        @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif
                        @if (session()->has('error'))
                        <div class="alert alert-wrong">
                            {{ session('error') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <input wire:model.defer="name" type="text" id="FullNamemake_offer" class="form-control"
                            placeholder="السم بالكامل" required />
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model.defer="email" type="email" id="EmailAddressmake_offer" class="form-control"
                            placeholder="بريدك الالكتروني" required />
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model.defer="phone" type="text" id="PhoneNumbermake_offer" class="form-control"
                            placeholder="رقم الهاتف" required />
                        @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model.defer="offer_price" type="number" id="OfferPricemake_offer"
                            class="form-control" placeholder="سعر العرض" required />
                        @error('offer_price')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>
                    <div class="form-group">
                        <textarea wire:model.defer="message" id="Messageemake_offer" class="form-control"
                            placeholder="الرسالة" required></textarea>
                        @error('message')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>


                    <div class="form-group" hidden>
                        <input name="form_type" type="text" class="form-control" placeholder="" value="3" />
                    </div>



                    <div class="form-group">
                        <button type="submit" wire:click="Save" id="Submitmake_offer" class="btn btn-block">
                            ارسال
                        </button>
                    </div>
                    {{--
                </form> --}}
            </div>
        </div>
    </div>
</div>