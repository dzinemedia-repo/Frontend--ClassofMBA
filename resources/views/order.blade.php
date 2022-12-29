@extends('layouts.app')
@section('content')
    <section class="py-60 order_bars hero_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    {{-- parent div --}}
                    <div class="d-flex justify-content-between mb-2">
                        <span class="order_step_indicator">Place Order</span>
                        <span class="order_step_indicator">1/3 Steps</span>
                    </div>
                    <div class="wrapper d-flex justify-content-between">
                        {{-- step 1 --}}
                        <div class="setp">
                            <div class="order_slide">
                                <div class="order_bar">
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-1">
                                <img class="me-1" src="assets/icons/PlaceOrder.svg" alt="PlaceOrder"><span>Place
                                    Order</span>
                            </div>
                        </div>
                        {{-- step 2 --}}
                        <div class="setp mx-4">
                            <div class="order_slide">
                                <div class="order_bar">

                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-1">
                                <img class="me-1" src="assets/icons/MakePayment.svg" alt="MakePayment"><span>Make
                                    Payment</span>
                            </div>
                        </div>
                        {{-- step 3 --}}
                        <div class="setp">

                            <div class="order_slide final_step">
                                <div class="final_step">
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-1">
                                <img class="me-1" src="assets/icons/Thankyou.svg" alt="Thankyou"><span>Thank you</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- order form --}}
    <section class="py-40 order_form">
        <div class="container">
            <div class="col-lg-9">
                <div class="form_area">
                    <p class="font-20 semi-bold">Choose Your Country of Study</p>
                    <form action="">
                        <div class="row countries">
                            <div class="col-lg-2 col-4 px-2 my-2">
                                <input type="radio" id="radio3" name="country" value="United States" checked="checked"
                                    class="country" rel="USD">
                                <label for="radio3" class="py-2">
                                    <img src="https://www.essaydays.com/assets/images/icons/usa.svg" alt="USA"
                                        width="32" height="32">
                                    USA
                                </label>
                            </div>
                            <div class="col-lg-2 col-4 px-2 my-2">
                                <input type="radio" id="radio1" name="country" value="United Kingdom" class="country"
                                    rel="GBP">
                                <label for="radio1" class="py-2">
                                    <img src="https://www.essaydays.com/assets/images/icons/uk.svg" alt="UK"
                                        width="32" height="32">
                                    UK
                                </label>
                            </div>
                            <div class="col-lg-2 col-4 px-2 my-2">
                                <input type="radio" id="radio2" name="country" value="Europe" class="country"
                                    rel="EUR">
                                <label for="radio2" class="py-2">
                                    <img src="https://www.essaydays.com/assets/images/icons/Europe.svg" alt="Europe"
                                        width="32" height="32">
                                    Europe
                                </label>
                            </div>
                            <div class="col-lg-2 col-4 px-2 my-2">
                                <input type="radio" id="radio4" name="country" value="Canada" class="country"
                                    rel="CAD">
                                <label for="radio4" class="py-2">
                                    <img src="https://www.essaydays.com/assets/images/icons/CAnada.svg" alt="Canada"
                                        width="32" height="32">
                                    Canada
                                </label>
                            </div>
                            <div class="col-lg-2 col-4 px-2 my-2">
                                <input type="radio" id="radio5" name="country" value="Australia" class="country"
                                    rel="AUD">
                                <label for="radio5" class="py-2">
                                    <img src="https://www.essaydays.com/assets/images/icons/Australia.svg" alt="Australia"
                                        width="32" height="32">
                                    Australia
                                </label>
                            </div>
                            <div class="col-lg-2 col-4 px-2 my-2">
                                <input type="radio" id="radio6" name="country" value="other" class="country"
                                    rel="USD">
                                <label for="radio6" class="py-2" id="order_flag">
                                    <img src="https://www.essaydays.com/assets/images/world.svg" id="other_countryflag"
                                        rel="USD" alt="USD" width="32" height="32">
                                    <span id="other_countryname" title="other">other</span>
                                </label>
                            </div>
                        </div>
                        <div class="bg-white darkshadow">
                            <div class="row">
                                <div class="col-12 mb-3  b-form-group has-error">
                                    <label for="">Topic*</label>
                                    <input type="text" class="form-control" id="casettl" name="casettl"
                                        maxlength="255" value="" required="" placeholder="Topic">
                                    <span id="helpTopic" class="help-block invalid-feedback">Please enter the missing
                                        information.</span>
                                </div>
                                <div class="col-md-6 col-12 mb-3  b-form-group">
                                    <input type="hidden" id="service" name="service" value="Select Service">
                                    <label for="">Choose Service*</label>
                                    <div id="select-div">
                                        <select id="product" name="product" class="form-select form-control"
                                            required="">
                                            <option value="" selected="selected">Select Service</option>
                                            <option value="1">Essay Writing Service</option>
                                            <option value="1">Case Study Solution</option>
                                            <option value="1">Report Writing Service</option>
                                            <option value="1.5">Dissertation / Thesis</option>
                                            <option value="1">Dissertation Proposal</option>
                                            <option value="1">PPT Presentation</option>
                                            <option value="1">Coursework</option>
                                            <option value="1">Term Paper</option>
                                            <option value="1">Exam Preparation</option>
                                            <option value="1">Research Paper</option>
                                            <option value="1">Questions Solution</option>
                                            <option value="1">Assignment</option>
                                        </select>
                                    </div>
                                    <span id="helpService" class="help-block invalid-feedback">Please select specific
                                        service</span>
                                </div>
                                <div class="col-md-6 col-12 mb-3  b-form-group">
                                    <label for="">Select Subject*</label>
                                    <input type="hidden" name="subjnm" id="subjnm" value="Select Subject">
                                    <input type="hidden" id="subjprice1" value="$ 0/Page">
                                    <input type="hidden" name="subjnotesprice" id="subjnotesprice" value="">
                                    <select id="basepric" name="subjprice" required=""
                                        class="form-select form-control">
                                        <option value="" selected="selected">Select Subject</option>
                                        <option value="30" class="econ">Accounting</option>
                                        <option value="30" class="econ">Finance</option>
                                        <option value="40" class="sps">Finance (With excel)</option>
                                        <option value="40" class="sps">Statistics</option>
                                        <option value="25" class="other">Strategy</option>
                                        <option value="30" class="econ">Operations Management</option>

                                        <option value="25" class="other">Management</option>
                                        <option value="25" class="other">Marketing</option>
                                        <option value="30" class="econ">Economics</option>
                                        <option value="25" class="other">Entrepreneurship</option>
                                        <option value="25" class="other">Human Resource Management</option>
                                        <option value="25" class="other">Information Technology</option>
                                        <option value="25" class="other">Leadership</option>
                                        <option value="25" class="other">Change Management</option>
                                        <option value="25" class="other">Services Marketing</option>
                                        <option value="25" class="other">Business Management</option>
                                        <option value="25" class="other">Organizational Behaviour</option>
                                        <option value="25" class="other">Others</option>
                                    </select>
                                    <span id="helpSubject" class="help-block invalid-feedback">Please select a
                                        subject</span>
                                </div>
                                <div class="col-md-6 col-12 mb-3 not_ppt  b-form-group">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap page_or_word "
                                        style="display: none;">
                                        <label for="" class="mb-0"><span id="lable_wrdr">Length in
                                                Words</span></label>
                                        <p class="mb-0" style="font-size: .875rem;" id="wrdpg">(Approx ~ 0.0 Page)
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <div class="b-form-group has-error">
                                            <input type="number" class="form-control" id="wrdr" name="wrdr"
                                                placeholder="Number of Words" min="300" required=""
                                                value="">
                                            <span id="helpWords" class="help-block invalid-feedback">Minimum word limit
                                                300 words</span>
                                        </div>
                                        <div class="btn-group ms-xl-3 ms-lg-1 ms-sm-3 ms-1 pt-1 chose align-items-center"
                                            role="group" aria-label="Basic radio toggle button group">
                                            <input type="hidden" name="pageOrword" value="1" id="pageOrword">
                                            <input type="radio" class="btn-check" id="word_data"
                                                name="pageOrword_data" checked="" value="1" autocomplete="off">
                                            <label class="btn btn-outline-success px-1 mb-0" for="word_data">Words</label>

                                            <input type="radio" class="btn-check" id="page_data"
                                                name="pageOrword_data" value="0" autocomplete="off">
                                            <label class="btn btn-outline-success px-1 mb-0 ms-2"
                                                for="page_data">Pages</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-3 ppt" style="display: none;">
                                    <div class="mb-3  b-form-group">
                                        <label for="">No of Slides*</label>
                                        <input class="form-control " type="text" id="slides" name="slides"
                                            placeholder="Number of slides" value="">
                                        <span id="helpSlides" class="help-block invalid-feedback">Please add no. of
                                            slides</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <div class="form-check">
                                            <input class="form-check-input reading_checkbox " type="checkbox"
                                                name="is_note" id="is_note" value="1">
                                            <label class="form-check-label reading_checkbox mb-1" for="is_note">
                                                Reading Notes
                                            </label>
                                        </div>
                                        <p class="mb-1" style="font-size: .875rem;line-height: normal;" id="notespg">
                                            Approx. ~ 1 page(s)</p>
                                    </div>
                                    <div class="b-form-group  mb-3">
                                        <input type="number" name="notes" id="notes" class="form-control"
                                            placeholder="Reading Notes" autocomplete="off" min="300" value=""
                                            disabled="">
                                        <span id="helpNotes" class="help-block invalid-feedback">Minimum word limit
                                            300</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-3 b-form-group">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <label for="" class="mb-1">Deadline*</label>
                                        <p class="mb-1 text-danger" style="font-size: .875rem;line-height: normal;"
                                            id="ddl"></p>
                                    </div>
                                    <select id="ddline" name="ddline" class="form-select form-control"
                                        required="">
                                        <option value="" selected="selected">Estimated Delivery</option>
                                        <option value="12 Hours">12 Hours</option>
                                        <option value="24 Hours">24 Hours</option>
                                        <option value="48 Hours">48 Hours</option>
                                        <option value="3 Days">3 Days</option>
                                        <option value="4 Days">4 Days</option>
                                        <option value="5 Days">5 Days</option>
                                        <option value="7 Days">7 Days</option>
                                        <option value="10 Days">10 Days</option>
                                        <option value="2 Weeks">2 Weeks</option>
                                        <option value="3 Weeks">3 Weeks</option>
                                        <option value="4 Weeks">4 Weeks</option>
                                        <option value="6 Weeks">6 Weeks</option>
                                        <option value="8 Weeks">8 Weeks</option>
                                        <option value="10 Weeks">10 Weeks</option>
                                    </select>
                                    <input type="hidden" id="estimate" name="estimate" value="">
                                    <span id="helpDeadline" class="help-block invalid-feedback">Please specify a
                                        deadline</span>

                                    <p style="color:red; display:none;" id="estmddl1"></p>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <input type="hidden" id="totl" name="ttlamount" value="0">
                                    <label for="">Referencing Style</label>
                                    <select id="refstyle" name="refstyle" class="form-select">
                                        <option value="">Select Referencing Style</option>
                                        <option value="APA">APA</option>
                                        <option value="MLA">MLA</option>
                                        <option value="Chicago">Chicago</option>
                                        <option value="Harvard">Harvard</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <label for="">No. of references</label>
                                    <input type="number" class="form-control m-0" name="refno" id="refno"
                                        placeholder="For Example: 5">
                                </div>
                                <div class="col-12">
                                    <label for="">Instructions/Requirements</label>
                                    <textarea class="form-control" id="msgtxt" name="msgtxt" rows="5"
                                        placeholder="Any special requirements? Give us the main idea of the paper and other details (e.g. citation formatting)"></textarea>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-center align-items-center upload_area">
                                        <input type="file" name="" id="file" hidden>
                                        <label class="Upload-btn me-2 secondary-bg text-white" for="file">Upload</label>
                                        <span class="semi-bold">Drag & Drop Files</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
