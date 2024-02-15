<div>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">
                    <span id="lblScheduleTestDrive">Schedule Test Drive</span>
                </h3>
            </div>
            <div class="modal-body">
                {{-- <form action="post.php" method="post"> --}}
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
                            placeholder="Full Name" required />
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model.defer="email" type="email" id="Email" class="form-control"
                            placeholder="Email address" required />
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input wire:model.defer="phone" type="text" id="Phone" class="form-control" placeholder="Phone"
                            required />
                    </div>
                    <div class="form-group">
                        <input wire:model.defer="date" type="datetime-local" id="BestTime" class="form-control"
                            placeholder="Best Time (00:00am)" required />
                        @error('date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group" hidden>

                        <input name="form_type" id="ContentPlaceHolder_message"
                            class="form-control custom-height white_bg" rows="4" value="2">
                    </div>

                    <div class="form-group">
                        <textarea wire:model.defer="message" id="Message" rows="4" class="form-control"
                            placeholder="Message" required></textarea>
                        @error('message')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" wire:click="Save" class="btn btn-block">
                            Submit
                        </button>
                    </div>
                    {{--
                </form> --}}
            </div>
        </div>
    </div>
</div>