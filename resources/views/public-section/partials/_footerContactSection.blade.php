<!--==========================
          Contact Section
        ============================-->
<section id="contact">
    <div class="container-fluid">

        <div class="section-header">
            <h3>Contact Us</h3>
        </div>

        <div class="row wow fadeInUp">

            <div class="col-lg-6">
                <div class="map mb-4 mb-lg-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14130.836139050827!2d85.33278008033736!3d27.69538647495239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199a06c2eaf9%3A0xc5670a9173e161de!2sNew%20Baneshwor%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1600268136258!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-5 info">
                        <i class="ion-ios-location-outline"></i>
                        <p> Naya baneswor Kathmandu nepal</p>
                    </div>
                    <div class="col-md-4 info">
                        <i class="ion-ios-email-outline"></i>
                        <p>info@cbikas.com.np</p>
                    </div>
                    <div class="col-md-3 info">
                        <i class="ion-ios-telephone-outline"></i>
                        <p>9845969704</p>
                    </div>
                </div>

                <div class="form" >
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>

                        {!! Form::open(['method'=>'post','action'=>'App\Http\Controllers\MessageController@store']) !!}
                        <div class="form-row">
                            {!! Form::token() !!}
                            <div class="form-group col-lg-6">
                                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Your Name', 'data-rule'=>'minlen:4','data-msg'=>'Please Enter at least 5 chars', 'required']) !!}

                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-lg-6">
                                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'Enter your Email', 'required']) !!}
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::text('subject',null,['class'=>'form-control','placeholder'=>'Subject', 'required']) !!}
                            <div class="validation"></div>
                        </div>


                        <div class="form-group">
                            {!! Form::hidden('notify','0') !!}
                            {!! Form::textarea('message',null,['class'=>'form-control','placeholder'=>'Enter your Message','rows'=>'5', 'required']) !!}
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section><!-- #contact -->

</main>
