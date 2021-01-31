        <!-- ======= Contact Section ======= -->
        <div id="contact" class="paddsection">
            <div class="container">
                <div class="contact-block1">
                    <div class="row">

                        <div class="col-lg-3"></div>

                        <div class="col-lg-6">
                            <form action="{{route('contact.submit')}}" method="post" role="form" class="php-email-form">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group contact-block1">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                            <div class="validate"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-3 mt-md-0">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                            <div class="validate"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                            <div class="validate"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                            <div class="validate"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>

                                    <div class="col-lg-12">
                                        <input type="submit" class="btn btn-defeault btn-send" value="Send message">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Section -->