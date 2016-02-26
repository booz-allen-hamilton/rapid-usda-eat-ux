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
$lang['required'] = "* = Required";
$lang['optional'] = "OPTIONAL";
$lang['frequency'] = "Select Frequency";
$lang['all_that_apply'] = "Select all that Apply";
$lang['ssn'] = "Social Security Number";
$lang['household_income'] = "Household Income";
$lang['error_server_validation'] = "There was a problem saving the form. Please try again.";

// Header
$lang['nav_how_it_works'] = "How it Works";
$lang['nav_apply_now'] = "Apply Now";
$lang['nav_application_status'] = "My Status";
$lang['nav_help'] = "Questions and Answers";

// Weclome
$lang['welcome_page_title'] = "Apply for Free and Reduced Price School Meals";
$lang['welcome_title'] = "Apply for <strong>Free</strong> and <strong>Reduced Price</strong> School Meals";
$lang['welcome_description_part_one'] = "Welcome to the (INSERT SCHOOL DISTRICT)'s application for free and reduced price school meals! On this site, you will be asked a series of questions that will provide your district with the information they need to certify your children for school meals. <br /><br /> If at any point you have questions about the form, eligibility, or what information to include, you can click the";
$lang['welcome_description_part_two'] = " next to the question. You only need to fill out one application per household.";
$lang['welcome_required'] = "Am I eligible?";
$lang['welcome_required_items'] = array(
	array(
		'text' => "Check your household's gross income",
		'help' => 'Is your household’s gross income within the free or reduced price limits on the Federal Income Eligibility Guidelines? Gross income is the total income received before taxes or deductions.'
	),
	array(
		'text' => 'Consider your current government benefits',
		'help' => 'Children in households receiving benefits from SNAP or TANF or the Food Distribution Program on Indian Reservation can get free meals regardless of your income.'
	),
	array(
		'text' => 'Are there foster children?',
		'help' => 'Foster children that are under the legal responsibility of a foster care agency or court are eligible for free meals. Children who meet the definition of homeless, runaway, or migrant qualify for free meals.'
	)
);
$lang['welcome_btn'] = "Get Started";

// Getting Started
$lang['getting_started_title'] = "What is your name?";
$lang['getting_started_description'] = "This is the name of the person filling out this form. This is usually a parent or guardian, not the child's name.";
$land['getting_started_help'] = "All applications must be signed by an adult member of the household.";
$lang['getting_started_age'] = "Are you age 21 or older?";
$lang['getting_started_elements'] = array(
	'first_name' => array(
		'label'       => "First Name",
		'placeholder' => "ex: John",
		'error'				=> "Please enter your first name."
	),
	'last_name' => array(
		'label'       => "Last Name",
		'placeholder' => "ex: Smith",
		'error'				=> "Please enter your last name."
	),
	'middle_initial' => array(
		'label'       => "Middle Initial",
		'placeholder' => "ex:C",
		'error'				=> "Please enter your middle initial."
	),
);
$lang['error_age_validation'] = "Sorry. You must be 21 or older to continue with the application. Call the school if you have questions. ";

// Your Situation
$lang['your_situation_title'] = "Let's check if you are already eligible.";
$lang['your_situation_subtitle'] = "Some situations may automatically qualify your child for free and reduced price meals. Choose the circle that applies to you.";
$lang['your_situation_already'] = "At least one household member already receives SNAP, TANF or FDPIR";
$lang['your_situation_need'] = "WHAT YOU'LL NEED";
$lang['your_situation_all_foster'] = "<u>ALL</u> household children are foster, homeless, migrant, runaway, or Head Start";
$lang['your_situation_none'] = "None of these apply";
$lang['your_situation_case_number'] = "Assistance Program Case Number";
$lang['your_situation_childrens_names'] = "Just the children's full name";
$lang['your_situation_household_income'] = "Household income amounts, sources, and frequency";
$lang['your_situation_scenario_a_help'] = "If you participate in one of these programs and do not know your case number, contact: [State/local agency contacts here]. You must provide a case number on your application if you click here.";
$lang['your_situation_scenario_b_help'] = "Foster children who live with you count as members of your household and should be listed on your application. Children who meet the definition of homeless, runaway, or migrant qualify for free meals.";

// Other Assistance
$lang['other_assistance_title'] = "Government Assistance Programs";
$lang['other_assistance_subtitle'] = "You said that someone in your household participates in <a href='http://www.fns.usda.gov/snap/supplemental-nutrition-assistance-program-snap'>SNAP</a>, the <a href=href='http://www.acf.hhs.gov/programs/ofa/programs/tanf/about>TANF</a> cash assistance program, or the <a href='http://www.fns.usda.gov/fdpir/about-fdpir'>FDPIR</a>. Choose the program that applies to you.";
$lang['other_assistance_help'] = 'Click on a program to learn more';
$lang['other_assistance_program'] = "Select Assistance Program";
$lang['other_assistance_case_number'] = "Case Number";
$lang['other_assistance_example'] = "ex. 2363954301";

// All Household Students
$lang['household_students_title'] = "Which children are students?";
$lang['household_students_subtitle'] = "Type the names of all students in your household who are applying for free or reduced-price meals. ";
$lang['household_students_add'] = "Add Child";
$lang['household_students_help'] = "List all people in your household who are children age 18 or under <strong>and</strong> who are supported by the household's income. List children who are in your care under a foster arrangement, or qualify as homeless, migrant, or runaway youth. Also list students attending school <em>regardless of age</em>.";

// All Household Members
$lang['household_members_title'] = "Who lives with you?";
$lang['household_members_subtitle'] = "Many families have grandparents, extended family, or friends who live in the same house. List everyone who lives with you and shares income and expenses. Include their name even if they are not related to you.";
$lang['household_members_children'] = "CHILDREN";
$lang['household_members_adults'] = "ADULTS";
$lang['household_members_over_eighteen'] = "(18 years and older)";
$lang['household_members_under_eighteen'] = "(Under the age of 18)";
$lang['household_members_first'] = "First Name";
$lang['household_members_middle'] = "Middle Initial";
$lang['household_members_last'] = "Last Name";
$lang['household_members_add_child'] = "Add Child";
$lang['household_members_add_adult'] = "Add Adult";
$lang['household_members_earns_income'] = "Earns income?";
$lang['household_members_income'] = "Income?";
$lang['household_members_student'] = "Student?";
$lang['household_members_status'] = "Child Status";
$lang['household_members_check_one'] = "(Check one or more)";
$lang['household_members_earnings_from_work_help'] = "FIXME Earnings from work";
$lang['household_members_public_assistance_help'] = "FIXME Public assistance";
$lang['household_members_pensions_help'] = "FIXME Pensions";
$lang['household_members_child_status_help'] = "FIXME Child status help";

// All Household Members - Income section
$lang['household_income_adult_name_suffix'] = "Income (Adult)";
$lang['household_income_child_name_suffix'] = "Income (Child)";
$lang['household_income_gross'] = "Please enter gross income and how often it was received.";
$lang['household_income_category'] = "Income Category";
$lang['household_income_type'] = "Type";
$lang['household_income_amount_freq'] = "Dollar Amount / Frequency";
$lang['household_income_salary'] = "Salary";
$lang['household_income_add_another'] = "Add another";

$lang['household_income_adult_earnings_from_work'] = array(
	'title' => 'Earnings from Work',
	'help' => "FIXME Earnings from Work"
);
$lang['household_income_adult_public_asst'] = array(
	'title' => 'Public Assistance / Alimony / Child Support',
	'help' => "FIXME Public Assistance / Alimony / Child Support"
);
$lang['household_income_adult_other_income'] = array(
	'title' => 'Pensions / Retirement / All Other Income',
	'help' => "FIXME Pensions / Retirement / All Other Income"
);
$lang['household_income_child_earnings_from_work'] = array(
	'title' => 'Earnings from Work',
	'help' => "FIXME Earnings from Work"
);
$lang['household_income_child_ssn_benefits'] = array(
	'title' => 'Social Security Benefits',
	'help' => "FIXME Social Security Benefits"
);
$lang['household_income_child_spending_other_income'] = array(
	'title' => 'Spending money or other income from friend or relative',
	'help' => "FIXME Spending money or other income from friend or relative"
);
$lang['household_income_child_other_income'] = array(
	'title' => 'Income from any other source',
	'help' => "FIXME Income from any other source"
);


// Contact Information
$lang['contact_info_title'] = "Contact Information";
$lang['contact_info_subtitle'] = "Tell us how you would like us to communicate with you.";
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
		'error'			=> "Please enter your city"
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
$lang['contact_info_text'] = "Text Message";
$lang['contact_info_email'] = "Email";
$lang['contact_info_phone'] = "Phone Call";

// Children Ethnicity and Race
$lang['children_ethnicity_race'] = "Children's Ethnicity and Race";
$lang['children_ethnicity_race_subtitle'] = "We are required to ask for information about your children's race and ethnicity. This information is important and helps to make sure we are fully serving our community. Responding to this section is optional and does not affect your children's eligibility for free or reduced price meals.";
$lang['ethnicity_table_header'] = "Ethnicity (Check One)";
$lang['race_table_header'] = "Race (Check One or More)";
$lang['children_ethnicity_hispanic'] = "Hispanic / Latino";
$lang['children_ethnicity_not_hispanic'] = "Not Hispanic / Latino";


// Confirmation
$lang['confirmation_title'] = "Confirmation";
$lang['confirmation_subtitle'] = "Please review your application and confirm the information is correct.";
$lang['confirmation_subtitle_help'] = "FIXME confim sub";
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
$lang['confirmation_receive_updates'] = "Receive status updates via {contact_method}";
$lang['confirmation_assistance_program'] = "Assistance Program";
$lang['confirmation_case_number'] = "Case Number";
$lang['confirmation_not_required'] = "Not required";

// Terms and Conditions
$lang['terms_and_cond_title'] = "Terms and Conditions";
$lang['terms_and_cond_subtitle'] = "Please read terms and conditions and indicate if you agree.";
$lang['terms_and_cond_agree'] = "I agree to the terms and conditions";
$lang['terms_and_cond_content'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br /><br /> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?";
$lang['terms_and_cond_help'] = "FIXME tandc";

// Electronic Signature
$lang['electronic_sig_title'] = "Electronic Signature";
$lang['electronic_sig_subtitle'] = "Please indicate that you comply with the statement below and enter last four digits of Social Security Number (if applicable).";
$lang['electronic_sig_statement'] = "The person signing is furnishing true information and to advise that person that the application is being made in connection with the receipt of Federal funds; School officials may verify the information on the application; and Deliberate misrepresentation of the information may subject the applicant to prosecution under State and Federal statutes.";
$lang['electronic_sig_not_available'] = "Not available";
$lang['error_electronic_sig_agree'] = "FIXME? agree";
$lang['error_electronic_sig_name'] = "FIXME? name";
$lang['error_electronic_sig_social'] = "FIXME? social";
$lang['electronic_sig_subtitle_help'] = "FIXME sub help";
$lang['electronic_sig_ssn_help'] = "FIXME ssn help";

// Success
$lang['success_submission_id'] = "Submission ID: ";
$lang['success_return'] = "Return Home";


// Possibly unused

// Other Assistance Skip Pattern
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

//	NEW STUFF
$lang['nav_faq'] = "FAQ";
$lang['nav_required'] = "Required";

$lang['other_assistance_select_program'] = "Select Program";
$lang['race_select_all_that_apply'] = "Select all that apply";
$lang['race_american_indian_alaskan_native'] = "American Indian or Alaskan Native";
$lang['race_asian_black_african_american'] = "Asian, Black or African American";
$lang['race_native_hawaiian_other_pacific_islander'] = "Native Hawaiian or Other Pacific Islander";
$lang['race_white'] = "White";

$lang['ethnicity_no_answer'] = "No Answer";
$lang['ethnicity_hispanic_latino'] = "Hispanic / Latino";
$lang['ethnicity_not_hispanic_latino'] = "Not Hispanic / Latino";

$lang['weekly'] = "Weekly";
$lang['twice_a_week'] = "2 Times a Week";
$lang['monthly'] = "Monthly";
$lang['twice_a_month'] = "2 Times a Month";


$lang['child_description_homeless'] = 'Homeless';
$lang['child_description_migrant'] = 'Migrant';
$lang['child_description_runaway'] = 'Runaway';
$lang['child_description_foster'] = 'Foster';
$lang['child_description_none'] = 'None of the Above';
