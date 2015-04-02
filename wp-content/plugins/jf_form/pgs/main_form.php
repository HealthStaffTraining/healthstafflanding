<div id="joe_form_contain">
    <div id="joe_form_mobile">
    <form method="post" action="/form_cgi/" onsubmit="return checkForm()">
        <div class="joe_form_title"></div>
        <div id="joe_form_err" style="display: none;"></div>
        <div id="joe_form_row">
            <input type="text" name="firstName" id="firstName" size="10" value="First Name" maxlength="50" onclick="clearFields(this)" onblur="repopulate(this,'First Name')" onkeyup="fillFields(this)">
        </div>
        <div id="joe_form_row">
            <input type="text" name="lastName" id="lastName" size="10" value="Last Name" maxlength="50" onclick="clearFields(this)" onblur="repopulate(this,'Last Name')">
        </div>
        <div id="joe_form_row">
            <input type="text" name="email" id="email" size="10" value="Email" maxlength="100" onclick="clearFields(this)" onblur="repopulate(this,'Email')">
        </div>
        <div id="joe_form_row">
            <input type="text" name="phone" id="phone" size="10" value="Phone" maxlength="20" onclick="clearFields(this)" onblur="repopulate(this,'Phone')" onkeyup="formatPhoneNum(this,'-','no')">
        </div>
        <div id="joe_form_row">
            <div id="joe_form_select">
                <select name="ddlprogram" id="program">
                    <option value="">Program of Interest</option>
                        <?php
                            //print_r($programs);
                            foreach($programs AS $key=>$value){
                        ?>
                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php
                            } //end foreach program
                        ?>
                    </select>
            </div>
        </div>
        <div id="joe_form_row">
            <input type="submit" name="submit" id="submit" value="Submit Form" class="submit_button">
        </div>
    </form>
    </div>
</div>