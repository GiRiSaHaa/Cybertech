@extends('layouts.homeLayout')

@section('content')
    <div class="container">
        <p style="text-align: center;">Fill all below fields to complete your application. If you have arised any inconvenience please call <a class="default" href="tel:(+94)713399099">(+94) 71-33 99 099</a> or email us your details to <a class="default" href="mailto:lakshitha@teamcybertech.com">Apply@teamcybertech.com</a></p>
        <div class="jumbotron" style="background-color:rgba(255, 0, 0, 0.15); border: 3px solid #a91c1c;padding:0;">
            <h3 class="notice-header">Vacancies available to apply!</h3>
            <div class="notice-body">
                <p class="notice-p"># Laraval Developers - <span class="notice-span">Work Online</span></p>
                <p class="notice-p"># UI Developers - <span class="notice-span">Work Online</span></p>
                <p class="notice-p"># Business Developers - <span class="notice-span">Work Online</span></p>
                <p class="notice-p"># WordPress Developers - <span class="notice-span">Work Online</span></p>
                <p class="notice-p"># React Native Developers - <span class="notice-span">Work Online</span></p>
            </div>
        </div>
        <div>
            <form id="myForm" action="{{ url('saveApplicant') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div>                    
                    <div class="section">
                        <h3 class="h3">Personal details.</h3>
                        <label><b>Name in Full</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter your name in full" name="name" required>

                        <label><b>Address</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter your Residence Address" name="address" required>

                        <label><b>Email</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter your Email address" name="email" required>

                        <label><b>Mobile Number</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter your Mobile Number" name="mobileNumber" required>

                        <label><b>Date of Birth</b> <span class="span">*</span></label>
                        <input type="date" placeholder="Enter your Birthday" name="birthday" required>

                        <label><b>NIC Number</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter your NIC Number" name="nicNumber" required>

                        <label><b>Your CV</b> <span class="span">*</span></label>
                        <div style="border:1px solid #ccc; padding: 10px 0 10px 20px; margin-top: 10px; background-color: #ffffff;">
                            <input type="file" placeholder="Enter your NIC Number" name="fileToUpload" required> <span class="span">Please note: file size should be below than 2mb</span>
                        </div>
                    </div>

                    <div class="section martop30">
                        <h3 class="h3">Professional details.</h3>
                        <label><b>what is the position you need to apply?</b> <span class="span">*</span></label>
                        <select class="select" name="positionApply" id="positionApply">
                            <option value="Laraval Developer">Laraval Developer</option>
                            <option value="UI Developer">UI Developer</option>
                            <option value="Business Developer">Business Developer</option>
                            <option value="WordPress Developer">WordPress Developer</option>
                            <option value="React Native Developer">React Native Developer</option>
                        </select>

                        <label><b>Previously worked company</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter the company name that you have been worked at last..." name="lastcompany" required>

                        <label><b>Your job tittle</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Ex: Marketing Assistant, Software Engineer, UI/UX designer, etc..." name="lasttittle" required>

                        <label><b>Monthly salary was</b></label>
                        <input type="text" placeholder="Ex: 25000 LKR" name="lastsalary">

                        <label><b>Experience in years</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Ex: 2 1/2 years, etc..." name="experience" required>

                        <label><b>Areas you're expertise with</b></label>
                        <textarea placeholder="Ex: Sales & marketing, PHP, Laraval, Java, CSS, Jscript, Bootstrap, etc..." name="notes" rows="7"></textarea>
                    </div>

                    <div class="section martop30">
                        <h3 class="h3">Account details. <span class="h3-span">(All payments will be deposited to this account)</span></h3>
                        <label><b>Bank Account Number</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter your Account Number" name="accNumber" required>

                        <label><b>Account Holder's Name</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter Account holder's Name" name="accName" required>

                        <label><b>Bank Name</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter Bank Name" name="bankName" required>

                        <label><b>Branch</b> <span class="span">*</span></label>
                        <input type="text" placeholder="Enter your Branch" name="branch" required>

                        <input type="checkbox" name="agreement" id="agreement" required><label for="agreement">By clicking "Submit" you agree to our Terms of Use and Privacy Policy also acknowledge that data you provide are correct & accurate.</label>
                    
                    <div class="float-right">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-danger" onclick="myFunction()">Reset</button>
                    </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection