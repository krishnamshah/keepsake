<!-- start: Content -->

<div class="form-element">
    <div class="col-md-12 padding-0">
        <form method="post" enctype="multipart/form-data" action="{{route('customer.add')}}">
            @csrf
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="customer_name">
                <span class="bar"></span>
                <label>Customer Name</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="customer_id_no">
                <span class="bar"></span>
                <label>Id No</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="customer_id_type">
                <span class="bar"></span>
                <label>Id Type</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="customer_id_isued_by">
                <span class="bar"></span>
                <label>Id Issuded By</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="customer_country">
                <span class="bar"></span>
                <label>Country</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="customer_city">
                <span class="bar"></span>
                <label>City</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="customer_resident_no">
                <span class="bar"></span>
                <label>Resident Phone</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="text" class="form-text" required name="customer_cell">
                <span class="bar"></span>
                <label>Cell </label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input type="email" class="form-text" required name="customer_email">
                <span class="bar"></span>
                <label>Email</label>
            </div>

            <div class="form-group form-animate-text" style="margin-top:40px !important;">

                <input class="form-text " type="file" name="customer_image">
                <span class="bar"></span>
                <label>Customer Photo</label>
            </div>
            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                <input class="form-text" type="file" name="customer_id_doc">
                <span class="bar"></span>
                <label>Customer id Scan</label>
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
