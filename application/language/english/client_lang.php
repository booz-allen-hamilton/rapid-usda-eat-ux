<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Common
$lang['yes'] = "Yes";
$lang['no'] = "No";
$lang['edit'] = "Edit";
$lang['remove'] = "Remove";
$lang['cancel'] = "Cancel";
$lang['back'] = "Back";
$lang['next'] = "Next";
$lang['required'] = "* Required";
$lang['optional'] = "OPTIONAL";
$lang['frequency'] = "Select Frequency";
$lang['all_that_apply'] = "Select all that apply";
$lang['ssn'] = "Social Security Number";
$lang['assistance_program_case_number'] = "Assistance Program Case Number";
$lang['household_income'] = "Household Income";
$lang['assistance_program'] = "Assistance Program";
$lang['case_number'] = "Case Number";
$lang['error_server_validation'] = "There was a problem saving the form. Please try again.";

// Header
$lang['nav_how_it_works'] = "How it Works";
$lang['nav_apply_now'] = "Apply Now";
$lang['nav_application_status'] = "My Status";
$lang['nav_help'] = "Help";

// Page Titles
$lang['welcome_page_title'] = "Apply for Free or Reduced-Price Meals";
$lang['welcome_title'] = "Apply for <strong>Free</strong> or <strong>Reduced-Price Meals!</strong>";
$lang['welcome_description_part_one'] = "This webform is your quick and secure way to apply. Everything you need to know about applying for free and reduced price meals can be found here. Click the yellow question mark icon";
$lang['welcome_description_part_two'] = "to open up the Help Menu and click it again to close it. General FAQ contains information about elibility, questions about the process, and contact information for your school.<br /><br /> After you complete and submit this application, your school can review your eligibility for free and reduced price meals.";
$lang['welcome_required'] = "You may be eligible if:";
$lang['welcome_required_items'] = array(
	array(
		'text' => 'You meet income level requirements',
		'help' => 'help text'
	),
	array(
		'text' => 'A household member is already receiving benefits from certain government programs',
		'help' => 'help text'
	),
	array(
		'text' => 'All foster children in household',
		'help' => 'help text'
	)
);
$lang['welcome_btn'] = "Apply Now";

// Getting Started
$lang['getting_started_title'] = "Getting Started";
$lang['getting_started_description'] = "Please enter your name and if you are the household adult.";
$land['getting_started_help'] = "Help text";
$lang['getting_started_age'] = "Are you over the age of 21?";
$lang['getting_started_elements'] = array(
	'first_name' => array(
		'label'       => "First Name",
		'placeholder' => "John",
		'error'				=> "Please enter your first name"
	),
	'last_name' => array(
		'label'       => "Last Name",
		'placeholder' => "Doe",
		'error'				=> "Please enter your first name"
	),
	'middle_initial' => array(
		'label'       => "Middle",
		'placeholder' => "C",
		'error'				=> "Please enter your first name"
	),
);
$lang['error_age_validation'] = "Sorry. You must be over 21 to proceed with the application.";

// Section Titles
$lang['application_apply'] = "Apply for <strong>Free School Lunch</strong>";
$lang['application_title'] = "Apply for Free and Reduced School Lunch";
$lang['section_one_title'] = "Please list ALL infants, children, and students up to and including grade 12 who are living with you and share income and expenses, even if not related (Household Members):";
$lang['section_two_title'] = "Does anyone (including you) currently participate in one or more of the following assistance programs: SNAP, TANF, or FDPIR?";
$lang['section_three_title'] = "Report Income for ALL Household Members";
$lang['section_four_title'] = "Contact Information";

// Which Situation Applies
$lang['situation_heading'] = "Does one of these situations apply to you?";
$lang['what_youll_need'] = "WHAT YOU'LL NEED";
$lang['at_least_one_household_member'] = "At least one household member already receives SNAP, TANF or FDPIR";
$lang['all_household_children'] = "<u>ALL</u> household children are foster children";
$lang['none_apply'] = "None of these apply";

// Assistance Skip Pattern
$lang['title_assistance'] = "Other Assistance";
$lang['label_assistance'] = "Do you or your kids participate in <strong>SNAP</strong>, <strong>TANF</strong>, or <strong>FDPIR</strong>?";
$lang['label_assistance_clarification'] = "(If so, you are already eligible for free/reduced school lunch.)";
$lang['link_define'] = "Program Definitions";

// Assistance Modal
$lang['modal_assistance_title'] = "Program Definitions";
$lang['modal_assistance_snap'] = "Supplemental Nutrition Assistance Program";
$lang['modal_assistance_tanf'] = "Temporary Assistance for Needy Families";
$lang['modal_assistance_fdpir'] = "Food Distribution Program on Indian Reservations";
$lang['modal_assistance_clarification'] = "If you or anyone else in your household participates in any of these programs, your children are automatically eligible for the free and reduced school lunch program. Just enter your case number.";

//Other Assistance
$lang['other_assistance'] = "Other Assistance";
$lang['other_assistance_subtitle'] = "Are you, or anyone in your household, currently a recipient of benefits under the <b>SNAP</b>, the <b>TANF</b> cash assistance program, or the <b>FDPIR</b>?";
$lang['example_case_number'] = "ex. 2363954301";
$lang['other_assistance_help'] = "Other assistance help";

// Household Students
$lang['household_students_title'] = "All Household Students";
$lang['household_students_subtitle'] = "Please list all children who live with you, even if they are not related.";
$lang['household_students_help'] = "";

// Household
$lang['household_subtitle'] = "Please list all children and adults who live with you, even if they are not related.";
$lang['title_household_children'] = "All Household Students";
$lang['label_num_children'] = "How many children live with you, even if not related?";
$lang['label_num_adults'] = "How many adults (including you) live at the residence?";
$lang['error_children_number_field'] = "Please enter a valid number of children.";
$lang['error_adult_number_field'] = "Please enter a valid number of adults.";
$lang['label_add_child_number'] = "Number of Children";
$lang['label_add_adult_number'] = "Number of Adults";
$lang['number_children_modal_header'] = "Child Modal Header";
$lang['number_children_modal_body'] = "Child Modal Body";
$lang['number_adults_modal_header'] = "Adult Modal Header";
$lang['number_adults_modal_body'] = "Adult Modla Body";

// Household Members
$lang['household_members_title'] = "All Household Members";
$lang['household_members_names'] = "Names of All Household Members";
$lang['household_members_subtitle'] = "Please list all children who live with you, even if they are not related.";
$lang['household_members_children'] = "CHILDREN";
$lang['household_members_adults'] = "ADULTS";
$lang['household_members_over_18'] = "Over the age of 18";
$lang['household_members_under_18'] = "Under the age of 18";
$lang['household_members_label_first'] = "First Name";
$lang['household_members_label_middle'] = "MI";
$lang['household_members_label_last'] = "Last Name";
$lang['household_members_label_add_child'] = "Add Child";
$lang['household_members_label_add_adult'] = "Add Adult";
$lang['household_members_modal_header'] = "Household Member Modal Header";
$lang['household_members_modal_body'] = "Household Member Modal Body";
$lang['household_members_earns_income'] = "Earns Income";

// Children Details
$lang['title_children_details'] = "Children's Details";
$lang['subtitle_children_details'] = "Please check all that apply to help determine eligibility.";
$lang['label_select_all'] = "Select all that apply";
$lang['label_child_student'] = "Student (K-12)";
$lang['label_child_foster'] = "Foster Child";
$lang['label_child_hmr'] = "Homeless, Migrant, or Runaway";
$lang['label_child_head_start'] = "Head Start participant";
$lang['label_child_ethnicity'] = "Ethnicity";
$lang['label_child_hispanic'] = "Hispanic or Latino";
$lang['label_child_race'] = "Race";

// Children Ethnicity and Race
$lang['children_ethnicity_race'] = "Children's Ethnicity and Race";
$lang['children_ethnicity_race_subtitle'] = "We are required to ask for information about your children's race and ethnicity. This information is important and helps to make sure we are fully serving our community. Responding to this section is optional and does not affect your children's eligibility for free or reduced price meals.";
$lang['ethnicity_table_header'] = "Ethnicity (Check One)";
$lang['race_table_header'] = "Race (Check One or More)";

// Section Three
$lang['subsection_child_income'] = "CHILD INCOME";
$lang['label_child_income'] = "Did any of the children you listed above earn any income?";
$lang['label_child_income_total'] = "TOTAL income of all children listed above";

// Contact Information
$lang['contact_info_title'] = "Contact Information";
$lang['contact_info_subtitle'] = "Enter your contact information and how you would like us to communicate with you.";
$lang['contact_info_elements'] = array(
	'street_address' => array(
		'label'			=> "Street Address",
		'error'		 	=> "Please enter your address"
	),
	'apt' => array(
		'label'       	=> "Apt #"
	),
	'city' => array(
		'label'       	=> "City",
		'error'			=> "Please enter a city"
	),
	'state' => array(
		'label'       	=> "State",
		'placeholder' 	=> "Choose State",
		'error'			=> "Please select your state"
	),
	'zip' => array(
		'label'       	=> "ZIP",
		'error'			=> "Please enter your ZIP code"
	),
	'phone' => array(
		'label'       	=> "Phone",
		'placeholder' 	=> "555-555-5555",
		'error'			=> "Please enter your phone number"
	),
	'email' => array(
		'label'       	=> "Email",
		'placeholder' 	=> "example@example.com",
		'error'			=> "Please enter a valid email address"
	),
	'contact' => array(
		'label'       	=> "Preferred contact method",
		'error'			=> "Please select a preferred contact method"
	),
);

// Confirmation
$lang['confirmation_title'] = "Confirmation";
$lang['confirmation_subtitle'] = "Please review your application and confirm the information is correct.";
$lang['confirmation_subtitle_help'] = "";
$lang['confirmation_household_members'] = "HOUSEHOLD MEMBERS";
$lang['confirmation_adults'] = "Adults";
$lang['confirmation_children'] = "Children";
$lang['confirmation_total_household_members'] = "Total household members";
$lang['confirmation_contact_info'] = "CONTACT INFORMATION";
$lang['confirmation_other_assistance'] = "OTHER ASSISTANCE";
$lang['confirmation_household_income'] = "HOUSEHOLD INCOME";
$lang['confirmation_address'] = "Address";
$lang['confirmation_phone'] = "Phone";
$lang['confirmation_email'] = "Email";
$lang['confirmation_receive_updates'] = "Receive status updates via email";
$lang['confirmation_assistance_program'] = "Assistance Program";
$lang['confirmation_case_number'] = "Case Number";
$lang['confirmation_not_required'] = "Not required";

// Terms and Conditions
$lang['terms_and_cond_title'] = "Terms and Conditions";
$lang['terms_and_cond_subtitle'] = "Please read terms and conditions and indicate if you agree.";
$lang['terms_and_cond_agree'] = "I agree to the terms and conditions";
$lang['terms_and_cond_content'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br /><br /> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?";
$lang['terms_and_cond_help'] = "";

// Electronic Signature
$lang['electronic_sig_title'] = "Electronic Signature";
$lang['electronic_sig_subtitle'] = "Please indicate that you comply with the statement below and enter last four digits of Social Security Number (if applicable).";
$lang['electronic_sig_statement'] = "The person signing is furnishing true information and to advise that person that the application is being made in connection with the receipt of Federal funds; School officials may verify the information on the application; and Deliberate misrepresentation of the information may subject the applicant to prosecution under State and Federal statutes.";
$lang['electronic_sig_not_available'] = "Not available";
$lang['error_electronic_sig_agree'] = "";
$lang['error_electronic_sig_name'] = "";
$lang['error_electronic_sig_social'] = "";
$lang['electronic_sig_subtitle_help'] = "";
$lang['electronic_sig_ssn_help'] = "";

// Success
$lang['success_submission_id'] = "Submission ID: ";
$lang['success_return'] = "Return Home";