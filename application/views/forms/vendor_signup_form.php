<?php
// Todo: take care of display message and error message
echo "<div class='alert-danger'>";
if (isset($error_message)) {
	echo $error_message;
}
echo "</div><br/>";
?>

<form name="vendor-signup-form" id="vendor-signup-form" action="/vendor/register" method="post" role="form">
	<div class="panel panel-default">
		<div class="panel-general-details">General Details</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="src_ref">Source Reference</label>
			<input type="text" class="form-control" name="src_ref" id="src_ref">
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="title_key">Title</label>
			<select class="form-control col-3" name="title_key" id="title_key" required>
				<?php
				if (isset($title_key)) {
					echo "<option value=" . $title_key . ">" . USER_TITLES[$title_key] . "</option>";
				} else {
					foreach (USER_TITLES as $key => $value) {
						echo "<option value=" . $key . ">" . $value . "</option>";
					}
				}
				?>
			</select>
		</div>

		<div class="form-group col-md-6">
			<label for="name">Name of Vendor</label>
			<input type="text" class="form-control" name="name" id="name" value="<?php if (isset($name)) echo $name ?>"
				   required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="house_no">Street/House No.</label>
			<input type="text" class="form-control" name="house_no" id="house_no"
				   value="<?php if (isset($house_no)) echo $house_no ?>" required>
		</div>

		<div class="form-group col-md-6">
			<label for="country">Country</label>
			<select id="countryId" class="form-control countries" name="country">
				<option value="">Select Country</option>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="addressline_1">Address Line1</label>
			<input type="text" class="form-control" name="addressline_1" id="addressline_1"
				   value="<?php if (isset($addressline_1)) echo $addressline_1 ?>" required>
		</div>

		<div class="form-group col-md-6">
			<label for="state">State/Region</label>
			<select id="stateId" class="form-control states" name="state">
				<option value="">Select State</option>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="addressline_2">Address Line2</label>
			<input type="text" class="form-control" name="addressline_2" id="addressline_2"
				   value="<?php if (isset($addressline_2)) echo $addressline_2 ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="state">City</label>
			<select id="cityId" class="form-control cities" name="city">
				<option value="">Select City</option>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="addressline_3">Address Line3</label>
			<input type="text" class="form-control" name="addressline_3" id="addressline_3"
				   value="<?php if (isset($addressline_3)) echo $addressline_3 ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="postal_code">Postal Code</label>
			<input type="text" class="form-control" name="postal_code" id="postal_code"
				   value="<?php if (isset($postal_code)) echo $postal_code ?>" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="po_box_no">PO BOX No</label>
			<input type="text" class="form-control" name="po_box_no" id="po_box_no"
				   value="<?php if (isset($po_box_no)) echo $po_box_no ?>" required>
		</div>

		<div class="form-group col-md-6">
			<label for="email">E-Mail</label>
			<input type="text" class="form-control" name="email" id="email"
				   value="<?php if (isset($email)) echo $email ?>" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="telephone_1">Telephone No 1</label>
			<input type="text" class="form-control" name="telephone_1" id="telephone_1"
				   value="<?php if (isset($telephone_1)) echo $telephone_1 ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="mobile_no">Mobile No</label>
			<input type="text" class="form-control" name="mobile_no" id="mobile_no"
				   value="<?php if (isset($mobile_no)) echo $mobile_no ?>" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="telephone_2">Telephone No 2</label>
			<input type="text" class="form-control" name="telephone_2" id="telephone_2"
				   value="<?php if (isset($telephone_2)) echo $telephone_2 ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="fax_no">Fax No</label>
			<input type="text" class="form-control" name="fax_no" id="fax_no"
				   value="<?php if (isset($fax_no)) echo $fax_no ?>">
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="contact_person_name">Contact Person Name</label>
			<input type="text" class="form-control" name="contact_person_name" id="contact_person_name"
				   value="<?php if (isset($contact_person_name)) echo $contact_person_name ?>" required>
		</div>

		<div class="form-group col-md-6">
			<label for="contact_person_no">Contact Person No(Direct)</label>
			<input type="text" class="form-control" name="contact_person_no" id="contact_person_no"
				   value="<?php if (isset($contact_person_no)) echo $contact_person_no ?>" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="contact_person_desig">Contact Person Designation</label>
			<input type="text" class="form-control" name="contact_person_desig" id="contact_person_desig"
				   value="<?php if (isset($contact_person_desig)) echo $contact_person_desig ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="contact_person_email">Contact Person E-mail</label>
			<input type="text" class="form-control" name="contact_person_email" id="contact_person_email"
				   value="<?php if (isset($contact_person_email)) echo $contact_person_email ?>" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="website">Website</label>
			<input type="text" class="form-control" name="website" id="website"
				   value="<?php if (isset($website)) echo $website ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="overseas_office">Overseas Office</label>
			<textarea type="text" class="form-control" name="overseas_office"
					  id="overseas_office"><?php if (isset($overseas_office)) echo $overseas_office ?></textarea>
		</div>
	</div>

	<!-- =======================================Business Details========================================== -->

	<div class="panel panel-default">
		<div class="panel-business-details">Business Details</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="business_with_ngage">Business with NGAGE Group in last five years: </label>
		</div>

		<div class="form-group col-md-6">
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" id="business_with_ngage_yes" name="business_with_ngage" class="custom-control-input"
					   value="1" <?php if (isset($business_with_ngage) && $business_with_ngage) echo 'checked' ?>>
				<label class="custom-control-label" for="business_with_ngage_yes">Yes</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" id="business_with_ngage_no" name="business_with_ngage" class="custom-control-input"
					   value="0" <?php if (isset($business_with_ngage) && !$business_with_ngage) echo 'checked' ?>>
				<label class="custom-control-label" for="business_with_ngage_no">No</label>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="engagement_details">If Yes please provide details (Existing Vendor Code, Name of Essar Group
				Company, PO No.Date): </label>
		</div>

		<div class="form-group col-md-6">
			<textarea type="text" class="form-control" name="engagement_details" id="engagement_details"></textarea>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="iso_certified">Are you ISO Certified?: </label>
		</div>

		<div class="form-group col-md-6">
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" id="iso_certified_yes" name="iso_certified" class="custom-control-input"
					   value="1" <?php if (isset($iso_certified) && $iso_certified) echo 'checked' ?>>
				<label class="custom-control-label" for="iso_certified_yes">Yes</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" id="iso_certified_no" name="iso_certified" class="custom-control-input"
					   value="0" <?php if (isset($iso_certified) && !$iso_certified) echo 'checked' ?>>
				<label class="custom-control-label" for="iso_certified_no">No</label>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="cert_type">Type of Certificate: </label>
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" name="cert_type" id="cert_type">
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="cert_validity">Validity of Certificate: </label>
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" name="cert_validity" id="cert_validity">
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="cert_issuing_authority">Issuing Authority: </label>
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" name="cert_issuing_authority" id="cert_issuing_authority">
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="cert_year">Year of certification: </label>
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" name="cert_year" id="cert_year">
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="firm_type">Type of Firm: </label>
		</div>

		<div class="form-group col-md-6">
			<select class="form-control" name="firm_type" id="firm_type" required>
				<?php
				if (isset($firm_type)) {
					echo "<option value=" . $firm_type . ">" . FIRM_TYPES[$firm_type] . "</option>";
				} else {
					echo "<option>Select An Option</option>";
					foreach (FIRM_TYPES as $key => $value) {
						echo "<option value=" . $key . ">" . $value . "</option>";
					}
				}
				?>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="business_type">Type of Business: </label>
		</div>

		<div class="form-group col-md-6">
			<select class="form-control" name="business_type" id="business_type" required>
				<?php
				if (isset($business_type)) {
					echo "<option value=" . $business_type . ">" . BUSINESS_TYPES[$business_type] . "</option>";
				} else {
					echo "<option>Select An Option</option>";
					foreach (BUSINESS_TYPES as $key => $value) {
						echo "<option value=" . $key . ">" . $value . "</option>";
					}
				}
				?>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="workshop_address">Address of Workshop(For Manufacturer)/Name & Address of Principal (For
				Agent/Dealer/Stockist): </label>
		</div>

		<div class="form-group col-md-6">
			<textarea type="text" class="form-control" name="workshop_address" id="workshop_address"></textarea>
		</div>
	</div>

	<!-- =======================================Financial Information========================================== -->
	<div class="panel panel-default">
		<div class="panel-finance-details">Financial Information</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="bank_name">Bank Name: </label>
			<input type="text" class="form-control" name="bank_name" id="bank_name"
				   value="<?php if (isset($bank_name)) echo $bank_name ?>" required>
		</div>

		<div class="form-group col-md-6">
			<label for="ben_acc_name">Beneficiary's Account Name: </label>
			<input type="text" class="form-control" name="ben_acc_name" id="ben_acc_name"
				   value="<?php if (isset($ben_acc_name)) echo $ben_acc_name ?>" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="ben_acc_number">Beneficiary's Account Number: </label>
			<input type="password" class="form-control" name="ben_acc_number" id="ben_acc_number"
				   value="<?php if (isset($ben_acc_number)) echo $ben_acc_number ?>" required>
		</div>

		<div class="form-group col-md-6">
			<label for="ben_acc_number_confirm">Re-Input Beneficiary's Account Number: </label>
			<input type="text" class="form-control" name="ben_acc_number_confirm" id="ben_acc_number_confirm"
				   value="<?php if (isset($ben_acc_number_confirm)) echo $ben_acc_number_confirm ?>" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="bank_code_type">Code Type: </label>
			<select class="form-control" name="bank_code_type" id="bank_code_type" required>
				<?php
				if (isset($bank_code_type)) {
					echo "<option value=" . $bank_code_type . ">" . BANK_CODE_TYPES[$bank_code_type] . "</option>";
				} else {
					echo "<option>Select An Option</option>";
					foreach (BANK_CODE_TYPES as $key => $value) {
						echo "<option value=" . $key . ">" . $value . "</option>";
					}
				}
				?>
			</select>
		</div>

		<div class="form-group col-md-6">
			<label for="bank_code">Code: </label>
			<input type="text" class="form-control" name="bank_code" id="bank_code"
				   value="<?php if (isset($bank_code)) echo $bank_code ?>" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="ben_address">Address: </label>
		</div>

		<div class="form-group col-md-6">
			<textarea type="text" class="form-control" name="ben_address"
					  id="ben_address"><?php if (isset($ben_address)) echo $ben_address ?></textarea>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="annual_turn_over">Annual turnover(last 2 years): </label>
		</div>

		<div class="form-group col-md-6">
			<textarea type="text" class="form-control" name="annual_turn_over" id="annual_turn_over"
					  required><?php if (isset($annual_turn_over)) echo $annual_turn_over ?></textarea>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="trading_currency">Trading Currency: </label>
		</div>

		<div class="form-group col-md-6">
			<select class="form-control" name="trading_currency" id="trading_currency" required>
				<?php
				if (isset($trading_currency)) {
					echo "<option value=" . $trading_currency . ">" . TRADING_CURRENCY[$trading_currency] . "</option>";
				} else {
					echo "<option>Select An Option</option>";
					foreach (TRADING_CURRENCY as $key => $value) {
						echo "<option value=" . $key . ">" . $value . "</option>";
					}
				}
				?>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="stock_exchange_listed">Listed in stock exchange: </label>
		</div>

		<div class="form-group col-md-6">
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" id="stock_exchange_listed_yes" name="stock_exchange_listed"
					   class="custom-control-input"
					   value="1" <?php if (isset($stock_exchange_listed) && $stock_exchange_listed) echo 'checked' ?>>
				<label class="custom-control-label" for="stock_exchange_listed_yes">Yes</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" id="stock_exchange_listed_no" name="stock_exchange_listed"
					   class="custom-control-input"
					   value="0" <?php if (isset($stock_exchange_listed) && !$stock_exchange_listed) echo 'checked' ?>>
				<label class="custom-control-label" for="stock_exchange_listed_no">No</label>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="stock_exchange_name">If listed please provide the name of stock exchange: </label>
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" name="stock_exchange_name" id="stock_exchange_name"
				   value="<?php if (isset($stock_exchange_name)) echo $stock_exchange_name ?>">
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-5"></div>
		<div class="form-group col-md-7">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>


</form>
