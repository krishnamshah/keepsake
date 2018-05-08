<!-- start: Content -->

<div class="form-element">
    <div class="col-md-12 padding-0">
        <form method="post" enctype="multipart/form-data" action="{{route('agent.add')}}">
            @csrf
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="agent_name">
                <span class="bar"></span>
                <label>Agent Name</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="agent_pan_no">
                <span class="bar"></span>
                <label>Pan No</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="agent_pan_holder">
                <span class="bar"></span>
                <label>Pan Holder Name</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required id="basic-url" name="agent_url">
                <span class="bar"></span>
                <label>Agent Website</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="agent_country">
                <span class="bar"></span>
                <label>Country</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="agent_city">
                <span class="bar"></span>
                <label>City</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="agent_office_no">
                <span class="bar"></span>
                <label>Office Phone</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="agent_office_fax">
                <span class="bar"></span>
                <label>Office Fax</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="email" class="form-text" required name="agent_office_email">
                <span class="bar"></span>
                <label>Agent Official Email</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="agent_contact_person">
                <span class="bar"></span>
                <label>Agent Contact Person</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="agent_contact_person_position">
                <span class="bar"></span>
                <label>Agent Contact Person Position</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="agent_contact_person_phone">
                <span class="bar"></span>
                <label>Agent Contact Person Phone</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="email" class="form-text" required name="agent_contact_person_email">
                <span class="bar"></span>
                <label>Agent Contact Person Email</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="agent_othere_details">
                <span class="bar"></span>
                <label>Agent Other details</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <textarea type="text" class="form-text" required name="agent_description"></textarea>
                <span class="bar"></span>
                <label>Agent Descriptions</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" type="file" name="agent_company_logo">
                <span class="bar"></span>
                <label>Agent Company Logo</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">


                <input class="form-text " type="file" name="agent_company_pan_doc">
                <span class="bar"></span>
                <label>Agent Company pan Scan</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" type="file" name="agent_company_reg_doc">
                <span class="bar"></span>
                <label>Agent Company Reg. Scan</label>
            </div><!-- /input-group -->

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" name="validate_email" required
                       type="text">
                <span class="bar"></span>
                <label>Useremail</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" name="validate_password" required
                       type="password">
                <span class="bar"></span>
                <label>Password</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="submit btn btn-success" value="Submit" type="submit">
            </div>
        </form>
    </div>
</div>

<!-- end: content -->
