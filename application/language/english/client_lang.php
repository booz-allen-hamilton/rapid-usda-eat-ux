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
$lang['form_server_error'] = "There was a problem saving the form. Please try again.";
$lang['ssn'] = "Social Security Number";
$lang['assistance_program_case_number'] = "Assistance Program Case Number";
$lang['household_income'] = "Household Income";
$lang['assistance_program'] = "Assistance Program";
$lang['case_number'] = "Case Number";

// Header
$lang['nav_how_it_works'] = "How it Works";
$lang['nav_apply_now'] = "Apply Now";
$lang['nav_application_status'] = "My Status";
$lang['nav_help'] = "Help";

// Page Titles
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
	),
);
$lang['welcome_btn'] = "Apply Now";

// Getting Started
$lang['getting_started_title'] = "Getting Started";
$lang['getting_started_description'] = "Please enter your name and if you are the household adult.";
$land['getting_started_help'] = "Help text";
$lang['getting_started_age'] = "Are you over the age of 21?";

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

// Household
$lang['title_household'] = "All Household Members";
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
$lang['title_household_members'] = "Names of All Household Members";
$lang['subtitle_household_members'] = "Please list all children and adults who live with you, even if they are not related.";
$lang['section_title_children'] = "CHILDREN";
$lang['section_title_adults'] = "ADULTS";
$lang['label_first'] = "First Name";
$lang['label_middle'] = "Middle Initial";
$lang['label_last'] = "Last Name";
$lang['label_add_child'] = "Add Child";
$lang['label_add_adult'] = "Add Adult";
$lang['household_member_modal_header'] = "Household Member Modal Header";
$lang['household_member_modal_body'] = "Household Member Modal Body";

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

// Section Three
$lang['subsection_child_income'] = "CHILD INCOME";
$lang['label_child_income'] = "Did any of the children you listed above earn any income?";
$lang['label_child_income_total'] = "TOTAL income of all children listed above";

$lang['subsection_adult_income'] = "ADULT INCOME";
$lang['label_adult_income'] = "List all Household Members (including yourself) <strong>even if they do not receive income</strong>. If you enter 'No income' or leave any fields blank, you are certifying (promising) that there is no income to report.";
$lang['label_adult_first'] = "Adult's First Name";
$lang['label_adult_last'] = "Last Name";

// Success
$lang['success_submission_id'] = "Submission ID: ";
$lang['success_return'] = "Return Home";

// Errors
$lang['error_getting_started_first'] = "Please enter your first name";
$lang['error_getting_started_last'] = "Please enter your last name";
$lang['error_getting_started_mi'] = "Please enter MI";