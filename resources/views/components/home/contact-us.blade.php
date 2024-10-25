<section class="bg-light py-3 py-md-5" id='contactUs'>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="mb-4 display-5 text-center">Contact Us</h2>
                <p class="text-secondary mb-5 text-center">We're excited to hear about your project and discuss how our
                    expertise can bring it to life. Get in touch today and let's embark on a journey of innovation!
                </p>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-12 col-lg-9">
                <div class="bg-white border rounded shadow-sm overflow-hidden">
                    <!-- for success or error msg -->
                    <div id="success-message" class="alert alert-success d-none"></div>
                    <div id="error-message" class="alert alert-danger d-none"></div>

                    <form method="POST" id='contact-form'>
                        @csrf
                        <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                            <div class="col-12">
                                <label for="fullname" class="form-label">Full Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="fullname" name="fullname" value=""
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg" type="submit" id="send-contact">
                                        <span id="send-text">Send</span>
                                        <span id="loading-spinner" class="spinner-border spinner-border-sm d-none"
                                            role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
