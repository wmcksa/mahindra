<div>

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">
                    <span id="lblRequestMoreInfo">
                        حجز موعد صيانة
                    </span>
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
                        <input wire:model.defer="name" type="text" id="FullNamemore_info" class="form-control"
                            placeholder="الاسم بالكامل" required />
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model.defer="email" type="email" id="EmailAddressmore_info" class="form-control"
                            placeholder="بريدك الالكتروني" required />
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model.defer="phone" type="text" id="PhoneNumbermore_info" class="form-control"
                            placeholder="رقم الهاتف" required />
                        @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="datetime-local" wire:model.defer="date" id="BestTime" class="form-control"
                            placeholder=" " required />
                        @error('date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input wire:model.defer="type" type="text" id="FullNamemore_info" class="form-control"
                            placeholder="نوع الصيانة " required />
                        @error('type')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group" hidden>
                        <input name="form_type" type="text" id="PhoneNumbermore_info" class="form-control" value="4" />
                    </div>

                    <div class="form-group">
                        <textarea wire:model.defer="message" id="Messagemore_info" rows="4" class="form-control"
                            placeholder="الرسالة" required></textarea>
                        @error('message')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">

                        <button type="submit" wire:click="Save" id="Submitmore_info" class="btn btn-block">
                            ارسال
                        </button>
                    </div>
                    {{--
                </form> --}}
            </div>
        </div>
    </div>
</div>