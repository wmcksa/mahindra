<div>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">
                    <span id="lblScheduleTestDrive">اختبار القيادة</span>
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
                        <input wire:model.defer="name" type="text" id="fullName" class="form-control"
                            placeholder="الاسم بالكامل" required />
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model.defer="email" type="email" id="Email" class="form-control"
                            placeholder="بريدك الالكتروني" required />
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model.defer="phone" type="text" id="Phone" class="form-control"
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



                    <div class="form-group" hidden>
                        <input name="form_type" type="text" class="form-control" placeholder="" value="2" />
                    </div>


                    <div class="form-group">
                        <textarea wire:model.defer="message" id="Message" rows="4" class="form-control"
                            placeholder="الرسالة"></textarea>
                        @error('message')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" wire:click="Save" class="btn btn-block">
                            ارسال
                        </button>
                    </div>
                    {{--
                </form> --}}
            </div>
        </div>
    </div>
</div>