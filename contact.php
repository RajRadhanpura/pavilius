<?php include 'header.php'; ?>

<section id="hero" class="section section-margin section-long-bottom">
    <div class="container">
        <div class="contact-content-wrapper">
            <h1 data-w-id="af61f739-4d32-d319-a44e-d820237d14a2" data-aos="fade-up" data-aos-duration="1500">connect with PCPL</h1>
            <div class="contact-card-wrapper">
                <div data-roll-animation="fade-in" class="contact-card">
                    <div class="heading-s">Head Office</div>
                    <div class="contact-card-text">
                        <div class="text-s">704 - 705, Shaligram Signet, Speedwell <div class="text-s"> </div>Road, Rajkot, 360005</div>
                        <div class="text-s"> </div>
                        <div class="text-s">+91 90337 89804</div>
                    </div>
                </div>
                <div data-roll-animation="fade-in" class="contact-card">
                    <div class="heading-s">Ahemdabad Office</div>
                    <div class="contact-card-text">
                        <div class="text-s">905, Addor Aspire 2, Gulbai Tekra, University Road, Ahmedabad - 380009.</div>
                        <div class="text-s">+91 97274 06363</div>
                    </div>
                </div>
                <div data-roll-animation="fade-in" class="contact-card">
                    <div class="heading-s">Direct Call or Mail</div>
                    <div class="contact-card-text">
                        <div class="contact-social-card">
                            <a href="tel:919714789804" target="_blank" class="text-inner-link">+91 97147 89804</a>
                            <a href="mailto:work@pavilius.co.in" target="_blank" class="text-inner-link">work@pavilius.co.in</a>
                            <!-- <a href="https://www.linkedin.com/company/digitalbutlers/" target="_blank" class="text-inner-link">Linkedin</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section p-0 pb-100px">
    <div class="container">
        <div class="contact-content-wrapper">
            <h2 data-w-id="af61f739-4d32-d319-a44e-d820237d14a2" data-aos="fade-up" data-aos-duration="1500">Or <br/>Get in touch with us</h2>

            <form class="custom-contact-form">

                <!-- Row 1 -->
                <div class="form-row" data-aos="fade-up" data-aos-duration="1500">
                    <div class="form-col col-6">
                        <label>Full Name *</label>
                        <input type="text" name="name" required>
                    </div>

                    <div class="form-col col-6">
                        <label>Email *</label>
                        <input type="email" name="email" required>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="form-row" data-aos="fade-up" data-aos-duration="1500">
                    <div class="form-col col-6">
                        <label>Mobile Number *</label>
                        <input type="text" name="mobile" required>
                    </div>

                    <div class="form-col col-6">
                        <label>Subject *</label>
                        <input type="text" name="subject" required>
                    </div>
                </div>

                <!-- Row 3 (Pincode, City, State) -->
                <div class="form-row" data-aos="fade-up" data-aos-duration="1500">
                    <div class="form-col col-4">
                        <label>Pincode *</label>
                        <input type="text" id="pincode" name="pincode" required>
                    </div>

                    <div class="form-col col-4">
                        <label>City *</label>
                        <input type="text" id="city" name="city" readonly>
                    </div>

                    <div class="form-col col-4">
                        <label>State *</label>
                        <input type="text" id="state" name="state" readonly>
                    </div>
                </div>

                <!-- Services -->
                <div class="form-row" data-aos="fade-up" data-aos-duration="1500">
                    <div class="form-col col-12">
                        <label>Services *</label>

                        <select name="services" required>
                            <option value="">Select Service</option>
                            <option>Industrial Projects</option>
                            <option>Residential Projects</option>
                            <option>Housing Projects</option>
                            <option>Institutional Projects</option>
                            <option>Road Beautification</option>
                            <option>City Entrances</option>
                        </select>
                    </div>
                </div>

                <!-- Message -->
                <div class="form-row" data-aos="fade-up" data-aos-duration="1500">
                    <div class="form-col col-12">
                        <label>Message</label>
                        <textarea name="message" rows="4" placeholder="Write your message..."></textarea>
                    </div>
                </div>

                <!-- Submit -->
                <div class="form-row" data-aos="fade-up" data-aos-duration="1500">
                    <div class="form-col col-12">
                        <div data-w-id="e3480688-b790-4cbf-0851-fd22eef1b69c" class="button-wrapper">
                            <a data-w-id="a1d8f85f-fccd-7b50-46ce-a112bf3b11ea" href="" class="submit-btn1 button-white-grey-hover w-inline-block">
                                <div class="button-text-wrapper">
                                    <div class="btn-text upper">Submit your data</div>
                                    <div class="btn-text lower">Submit your data</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </form>
            <!-- <form class="w-commerce-commercecheckoutbillingaddresswrapper">
                <fieldset class="w-commerce-commercecheckoutblockcontent block-content contact-form">
                    <div>
                        <label for="wf-ecom-billing-name" class="w-commerce-commercecheckoutlabel text-s">Full Name *</label>
                        <input id="wf-ecom-billing-name" class="w-commerce-commercecheckoutbillingfullname input" name="name" type="text" required="" />
                    </div>
                </fieldset>
                <div class="w-commerce-commercecheckoutrow row">
                    <div class="w-commerce-commercecheckoutcolumn column">
                        <label for="wf-ecom-billing-city"
                            class="w-commerce-commercecheckoutlabel text-s">City *</label>
                        <input id="wf-ecom-billing-city"
                            class="w-commerce-commercecheckoutbillingcity input" name="address_city" type="text"
                            required="" />
                    </div>
                    <div class="w-commerce-commercecheckoutcolumn column">
                        <label for="wf-ecom-billing-state"
                            class="w-commerce-commercecheckoutlabel text-s">State/Province</label>
                        <input
                            id="wf-ecom-billing-state"
                            class="w-commerce-commercecheckoutbillingstateprovince input" name="address_state"
                            type="text" />
                    </div>
                    <div class="w-commerce-commercecheckoutcolumn column">
                        <label for="wf-ecom-billing-zip"
                            class="w-commerce-commercecheckoutlabel text-s">Zip/Postal Code *</label>
                        <input
                            id="wf-ecom-billing-zip"
                            data-node-type="commerce-checkout-billing-zip-field"
                            class="w-commerce-commercecheckoutbillingzippostalcode input" name="address_zip" type="text"
                            required="" />
                    </div>
                </div>
            </form> -->
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>