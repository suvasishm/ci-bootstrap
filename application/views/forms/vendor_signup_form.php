<?php
// Todo: take care of display message and error message
echo "<div class='info'>";
if (isset($message_display)) {
	echo $message_display;
}
echo "</div>";
?>

<form name="vendor-signup-form" id="vendor-signup-form" action="/vendor/register" method="post" role="form">
	<div class="panel panel-default">
		<div class="panel-general-details">General Details</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="src_ref">Source Reference</label>
			<input type="text" class="form-control" name="src_ref" id="src_ref">
			<div class="invalid-feedback">
				This is a required field
			</div>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="title">Title</label>
			<select class="form-control" name="title" id="title" required>
				<option>Select An Option</option>
				<option>Mr.</option>
				<option>Ms.</option>
				<option>Mrs.</option>
				<option>Dr.</option>
				<option>Rev.</option>
			</select>
		</div>

		<div class="form-group col-md-6">
			<label for="vendor_name">Name of Vendor</label>
			<input type="text" class="form-control" name="vendor_name" id="vendor_name" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="house_no">Street/House No.</label>
			<input type="text" class="form-control" name="house_no" id="house_no">
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
			<input type="text" class="form-control" name="addressline_1" id="addressline_1">
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
			<input type="text" class="form-control" name="addressline_2" id="addressline_2">
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
			<input type="text" class="form-control" name="addressline_3" id="addressline_3">
		</div>

		<div class="form-group col-md-6">
			<label for="postal_code">Postal Code</label>
			<input type="text" class="form-control" name="postal_code" id="postal_code" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="po_box_no">PO BOX No</label>
			<input type="text" class="form-control" name="po_box_no" id="po_box_no">
		</div>

		<div class="form-group col-md-6">
			<label for="vendor_email">E-Mail</label>
			<input type="text" class="form-control" name="vendor_email" id="vendor_email" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="telephone_1">Telephone No1</label>
			<input type="text" class="form-control" name="telephone_1" id="telephone_1">
		</div>

		<div class="form-group col-md-6">
			<label for="mobile_no">Mobile No</label>
			<input type="text" class="form-control" name="mobile_no" id="mobile_no" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="telephone_2">Telephone No2</label>
			<input type="text" class="form-control" name="telephone_2" id="telephone_2">
		</div>

		<div class="form-group col-md-6">
			<label for="fax_no">Fax No</label>
			<input type="text" class="form-control" name="fax_no" id="fax_no">
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="contact_person_name">Contact Person Name</label>
			<input type="text" class="form-control" name="contact_person_name" id="contact_person_name">
		</div>

		<div class="form-group col-md-6">
			<label for="contact_person_no">Contact Person No(Direct)</label>
			<input type="text" class="form-control" name="contact_person_no" id="contact_person_no">
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="contactPersonDesig">Contact Person Designation</label>
			<input type="text" class="form-control" name="" id="contactPersonDesig">
		</div>

		<div class="form-group col-md-6">
			<label for="contactPersonEmail">Contact Person E-mail</label>
			<input type="text" class="form-control" name="" id="contactPersonEmail">
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="contact_person_desig">Contact Person Designation</label>
			<input type="text" class="form-control" name="contact_person_desig" id="contact_person_desig">
		</div>

		<div class="form-group col-md-6">
			<label for="contact_person_email">Contact Person E-mail</label>
			<input type="text" class="form-control" name="contact_person_email" id="contact_person_email">
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="website">Website</label>
			<input type="text" class="form-control" name="website" id="website">
		</div>

		<div class="form-group col-md-6">
			<label for="overseas_office">Overseas Office</label>
			<textarea  type="text" class="form-control" name="overseas_office" id="overseas_office"></textarea>
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
			<label class="radio-inline">
				<input type="radio" name="business_with_ngage_yes" id="business_with_ngage_yes" value="1"> Yes
			</label>
			<label class="radio-inline">
				<input type="radio" name="business_with_ngage_no" id="business_with_ngage_no" value="0"> No
			</label>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="engagement_details">If Yes please provide details (Existing Vendor Code, Name of Essar Group Company, PO No.Date): </label>
		</div>

		<div class="form-group col-md-6">
			<textarea  type="text" class="form-control" name="engagement_details" id="engagement_details"></textarea>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="iso_certified">Are you ISO Certified?: </label>
		</div>

		<div class="form-group col-md-6">
			<label class="radio-inline">
				<input type="radio" name="iso_certified_yes" id="iso_certified_yes" value="1"> Yes
			</label>
			<label class="radio-inline">
				<input type="radio" name="iso_certified_no" id="iso_certified_no" value="0"> No
			</label>
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
			<select class="form-control" name="firm_type" id="firm_type">
				<option>Select An Option</option>
				<option>Type 1</option>
				<option>Type 2</option>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="business_type">Type of Business: </label>
		</div>

		<div class="form-group col-md-6">
			<select class="form-control" name="business_type" id="business_type" required>
				<option>Select An Option</option>
				<option>Manufacturer</option>
				<option>Agent/Dealer</option>
				<option>Stockist</option>
				<option>Service Provider</option>
				<option>EPC</option>
				<option>Supply & Service Provider</option>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="workshop_address">Address of Workshop(For Manufacturer)/Name & Address of Principal (For Agent/Dealer/Stockist): </label>
		</div>

		<div class="form-group col-md-6">
			<textarea  type="text" class="form-control" name="workshop_address" id="workshop_address"></textarea>
		</div>
	</div>

	<!-- =======================================Financial Information========================================== -->
	<div class="panel panel-default">
		<div class="panel-finance-details">Financial Information</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="bank_name">Bank Name: </label>
			<input type="text" class="form-control" name="bank_name" id="bank_name" required>
		</div>

		<div class="form-group col-md-6">
			<label for="ben_acc_name">Beneficiary's Account Name: </label>
			<input type="text" class="form-control" name="ben_acc_name" id="ben_acc_name" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="ben_acc_number">Beneficiary's Account Number: </label>
			<input type="text" class="form-control" name="ben_acc_number" id="ben_acc_number" required>
		</div>

		<div class="form-group col-md-6">
			<label for="ben_acc_number_confirm">Re-Input Beneficiary's Account Number: </label>
			<input type="text" class="form-control" name="ben_acc_number_confirm" id="ben_acc_number_confirm" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="code_type">Code Type: </label>
			<select class="form-control" name="code_type" id="code_type" required>
				<option>Select An Option</option>
				<option>IFSC Code</option>
				<option>Swift Code</option>
			</select>
		</div>

		<div class="form-group col-md-6">
			<label for="bank_code">Code: </label>
			<input type="text" class="form-control" name="bank_code" id="bank_code" required>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="ben_address">Address: </label>
		</div>

		<div class="form-group col-md-6">
			<textarea  type="text" class="form-control" name="ben_address" id="ben_address"></textarea>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="annual_turn_over">Annual turnover(last 2 years): </label>
		</div>

		<div class="form-group col-md-6">
			<textarea  type="text" class="form-control" name="annual_turn_over" id="annual_turn_over" required></textarea>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="trading_currency">Trading Currency: </label>
		</div>

		<div class="form-group col-md-6">
			<select class="form-control" name="trading_currency" id="trading_currency" required>
				<option>Select An Option</option>
				<option>INR:: Indian Rupee</option>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="stock_exchange_listed">Listed in stock exchange: </label>
		</div>

		<div class="form-group col-md-6">
			<label class="radio-inline">
				<input type="radio" name="stock_exchange_listed_yes" id="stock_exchange_listed_yes" value="1"> Yes
			</label>
			<label class="radio-inline">
				<input type="radio" name="stock_exchange_listed_no" id="stock_exchange_listed_no" value="0"> No
			</label>
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-6">
			<label for="stock_exchange_name">If listed please provide the name of stock exchange: </label>
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" name="stock_exchange_name" id="stock_exchange_name">
		</div>
	</div>

	<div class="row">
		<div class="form-group col-md-5"></div>
		<div class="form-group col-md-7">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>


</form>
