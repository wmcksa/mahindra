<div>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">
                    <span id="lblMakeanOffer">REQUEST OFFER</span>
                </h3>
            </div>
            <div class="modal-body">
                {{-- <form action="post.php" method="POST"> --}}
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
                            placeholder="Full Name" required />
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model.defer="email" type="email" id="EmailAddressmake_offer" class="form-control"
                            placeholder="Email address" required />
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model.defer="phone" type="text" id="PhoneNumbermake_offer" class="form-control"
                            placeholder="Phone" required />
                        @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model.defer="offer_price" type=" number" id="OfferPricemake_offer"
                            class="form-control" placeholder="Offer Price" required />
                        @error('offer_price')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group" hidden>
                        <input name="form_type" id="dfdsgsf" class="form-control custom-height white_bg" rows="3"
                            value="3">
                    </div>

                    <div class="form-group">
                        <textarea wire:model.defer="message" id="Messageemake_offer" class="form-control"
                            placeholder="Message"></textarea>
                        @error('message')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" wire:click="Save" id="Submitmake_offer" class="btn btn-block">
                            Submit
                        </button>
                    </div>



                </form>



            </div>
        </div>
    </div>
</div>