<div>
    <section class="contact_us section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="title">
                        <span id="ContentPlaceHolder_lblGetIntouch">Get in touch using the form below</span>
                    </h4>
                    <div class="contact_form gray-bg">
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
                                <label class="control-label">
                                    <span id="ContentPlaceHolder_lblFullName">Full Name</span>
                                    <span>*</span></label>
                                <input wire:model.defer="name" type="text" id="ContentPlaceHolder_name"
                                    class="form-control white_bg" required />
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    <span id="ContentPlaceHolder_lblEmailAddress">Email Address</span>
                                    <span>*</span></label>
                                <input wire:model.defer="email" type="email" id="ContentPlaceHolder_email"
                                    class="form-control white_bg" required />
                                @error('email')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    <span id="656">Phone Number</span>
                                    <span>*</span></label>
                                <input wire:model.defer="phone" type="text" id="ContentPlaceHolder_phone"
                                    class="form-control white_bg" required />
                                @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    <span id="ContentPlaceHolder_lblMessage">Message</span>
                                    <span>*</span></label>
                                <textarea wire:model.defer="message" id="ContentPlaceHolder_message"
                                    class="form-control custom-height white_bg" rows="4" required></textarea>
                                @error('message')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group" hidden>

                                <input name="form_type" id="ContentPlaceHolder_message"
                                    class="form-control custom-height white_bg" rows="4" value="1">
                            </div>

                            <div class="form-group">
                                <button id="ContentPlaceHolder_btnSend" class="btn" type="submit" wire:click="Save">
                                    <span id="ContentPlaceHolder_lblSendMessage">Send Message</span>
                                    <span class="angle_arrow"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i></span>
                                </button>
                            </div>
                            {{--
                        </form> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="title">
                        <span id="ContentPlaceHolder_lblContactInfo">Contact Info</span>
                    </h4>
                    <div class="contact_detail">
                        <ul>
                            <li>
                                <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                                <div class="contact_info_m">
                                    <span id="ContentPlaceHolder_lblPOBox">Khobar- Saudi Arabia</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                <div class="contact_info_m"><a href="tel:966554045535" id="ContentPlaceHolder_lbPhone">
                                        <span id="ContentPlaceHolder_lblPhone">+966554045535</span></a></div>
                            </li>
                            <li>
                                <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                <div class="contact_info_m"><a href="mailto:info@mahindrauae.com"
                                        id="ContentPlaceHolder_lbEmail">
                                        <span id="ContentPlaceHolder_lblEmail">info@mahindrauae.com</span>
                                    </a></div>
                            </li>
                        </ul>

                        <div class="map_wrap">
                            <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=26.34146033912897, 50.19810002810019&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>