<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Common
$lang['yes'] = "Si";
$lang['no'] = "No";
$lang['edit'] = "Editar";
$lang['remove'] = "Remover";
$lang['cancel'] = "Cancelar";
$lang['back'] = "Atra";
$lang['next'] = "Proximo";
$lang['required'] = "* = Obligatorio";
$lang['optional'] = "OPCIONAL";
$lang['frequency'] = "Frecuente";
$lang['all_that_apply'] = "Todos los que Aplican";
$lang['ssn'] = "Numero de Seguro Social";
$lang['household_income'] = "Ingreso del Hogar";
$lang['error_server_validation'] = "Si hubo problem guardando este formulario. Por favor intente de nuevo.";

// Header
$lang['nav_how_it_works'] = "Como Trabaja";
$lang['nav_apply_now'] = "Aplique Ahorra";
$lang['nav_application_status'] = "Mi Estatus";
$lang['nav_help'] = "Preguntas y Respuestas";

// Weclome
$lang['welcome_page_title'] = "Alimentos gratis o a precio rebajado para los niños";
$lang['welcome_title'] = "Alimentos gratis o a precio rebajado para los niños";
$lang['welcome_description_part_one'] = "Bienvenido al (Districto de escuelas) aplicacion para alimentos gratis o precio reducido. En este pagina, le haremos preguntas que van a proveer informacion que su districto necesita para aprobar los alimentos de sus hijos. <br /><br /> Si en algun momento tiene preguntas es este formulario, el ser elegible, o que informacion debe incluir, usted puede hacer click en el";
$lang['welcome_description_part_two'] = "para mas informacion. Solamente necesita llenar una aplicacion por hogar..";
$lang['welcome_required'] = "Soy elegible?";
$lang['welcome_required_items'] = array(
	array(
		'text' => "Compruebe su ingreso total del hogar",
		'help' => 'Esta su ingreso total del hogar dentro de los límites gratis o a precio rebajado en las directrices de elegibilidad de ingresos federales? Ingreso total es el total de los ingresos antes de impuestos o deducciones.'
	),
	array(
		'text' => 'Considere los beneficios del gobierno actuales',
		'help' => 'Los niños en los hogares que reciben beneficios de SNAP o TANF o del programa de distribución de alimentos en la Reservación India pueden recibir comidas gratis sin importar sus ingreso.'
	),
	array(
		'text' => 'Hay niños adoptados?',
		'help' => 'Los hijos adoptidos que están bajo la responsabilidad legal de una agencia de colocación en hogares de guarda o de corte son elegibles para las comidas gratis. Los niños que cumplen la definición de sin hogar, escapan, imigrantes  califican para comidas gratis.'
	)
);
$lang['welcome_btn'] = "Empezar";
// Getting Started
$lang['getting_started_title'] = "Cual es su nombre?";
$lang['getting_started_description'] = "Este es el nombre de la persona que llena el formulario. Generalmente se trata de un padre o encargado de. No es el nombre del niño.";
$land['getting_started_help'] = "Todas las aplicaciones deben estar firmados por un miembro adulto de la familia.";
$lang['getting_started_age'] = "Tienes 21 años o mas?";
$lang['getting_started_elements'] = array(
	'first_name' => array(
		'label'       => "Primer Nombre",
		'placeholder' => "ex: Jose",
		'error'				=> "Primer nombre por favor."
	),
	'last_name' => array(
		'label'       => "Apellido",
		'placeholder' => "ex: Gutierrez",
		'error'				=> "Apellido por favor."
	),
	'middle_initial' => array(
		'label'       => "Inicial Segundo Nombre",
		'placeholder' => "ex:C",
		'error'				=> "Inicial segundo nombre por favor."
	),
);
$lang['error_age_validation'] = "Lo sentimos. Usted debe tener por lo menos 21 años para continuar con la aplicación. Llame a la escuela si tiene preguntas. ";

// Your Situation
$lang['your_situation_title'] = "Veamos si usted es elegible.";
$lang['your_situation_subtitle'] = "Algunas situaciones pueden calificar automáticamente a su niño para comidas gratuitas o de precio rebajado. Eliga el círculo que se aplica a usted.";
$lang['your_situation_already'] = "Al menos un miembro del hogar ya recibe SNAP, TANF o FDPIR";
$lang['your_situation_need'] = "Lo que necesita";
$lang['your_situation_all_foster'] = "<u>TODO</u> los niños que estan en hogares adoptivo, personas sin hogar, imigrantes, escapan, o Head Start";
$lang['your_situation_none'] = "Ninguna de las opciones";
$lang['your_situation_case_number'] = "Número de caso del programa de ayuda";
$lang['your_situation_childrens_names'] = "So lo el nombre completo del niño";
$lang['your_situation_household_income'] = "Cantidad de salario en el hogar, recourso(s), y frecuencia";
$lang['your_situation_scenario_a_help'] = "Si participar en uno de estos programas y no sabe su número de caso, póngase en contacto con: [Estado/agencia local contactos aquí]. Debe proporcionar un número de caso en su aplicación. Haga clic aquí.";
$lang['your_situation_scenario_b_help'] = "Si uno de sus niños no cumple con esta descripcion, no elija esta situación.";

// Other Assistance
$lang['other_assistance_title'] = "Programas de Ayuda del Gobierno";
$lang['other_assistance_subtitle'] = "Usted digo que alguin es su hogar participa en <a href='http://www.fns.usda.gov/es/snap/programa-de-snap' target='_blank'>SNAP</a>, de <a href='http://www.acf.hhs.gov/programs/ofa/programs/tanf/about' target='_blank'>TANF</a> programa de dinero efectivo, or de <a href='http://www.fns.usda.gov/fdpir/about-fdpir' target='_blank'>FDPIR</a>. Escoja el programa que le aplica usted.";
$lang['other_assistance_help'] = 'Haga clic en un nombre de programa para obtener más información';
$lang['other_assistance_program'] = "Selecto Programa de ayuda";
$lang['other_assistance_case_number'] = "Numero de caso";
$lang['other_assistance_example'] = "ex. 2363954301";
// All Household Students
$lang['household_students_title'] = "Cuales de los niños en su hogar son estudiantes?";
$lang['household_students_subtitle'] = "Por favor tenga en cuenta que sólo incluye los nombres de los niños que son estudiantes. Si no son estudiante no necesita enumerarlos aquí. ";
$lang['household_students_add'] = "Agrege Niño";
$lang['household_students_help'] = "Por favor, incluya todos los miembros de su familia que son: (1) que tienen 18 años de edad <strong>y</strong> los menores y que viven de los ingresos del hogar; o (2) Estan bajo su cuidado  en base a arreglos temporales, o lost que no tienen hogar,  imigrantes, o los jóvenes que se han escapado; o (3) que asisten a la escuela sin importar su edad.";

// All Household Members
$lang['household_members_title'] = "Quien vive con usted?";
$lang['household_members_subtitle'] = "Muchas familias tienen abuelos, familiares or amigos que viven en al misma casa.  Enumere los que viven con usted y comparten las entradas y gastos.  Incluya sus nombres aun si ellos no son de su familia.";
$lang['household_members_children'] = "Niños";
$lang['household_members_adults'] = "Adultos";
$lang['household_members_over_eighteen'] = "(De 18 años o mas)";
$lang['household_members_under_eighteen'] = "(Menos de 18 años)";
$lang['household_members_first'] = "Primer Nombre";
$lang['household_members_middle'] = "Inicial Segundo Nombre";
$lang['household_members_last'] = "Apellido";
$lang['household_members_add_child'] = "Agrege Niño";
$lang['household_members_add_adult'] = "Agrege Adulto";
$lang['household_members_earns_income'] = "Ingresos?";
$lang['household_members_income'] = "Ingresos?";
$lang['household_members_student'] = "Estudiante?";
$lang['household_members_status'] = " Estatus de niño";
$lang['household_members_check_one'] = "(Escoja uno o mas)";
$lang['household_members_earnings_from_work_help'] = "Ingreso total recibido por trabajar";
$lang['household_members_public_assistance_help'] = "Ayuda Publica";
$lang['household_members_pensions_help'] = "Pension";
$lang['household_members_child_status_help'] = "Select the box that describes your child.";

// All Household Members - Income section
$lang['household_income_adult_name_suffix'] = "Ingreso (Adulto)";
$lang['household_income_child_name_suffix'] = "Ingreso (Niño)";
$lang['household_income_gross'] = "Por favor selecione la categoría de ingresos, tipo de ingreso, cantidad de dollares, y con qué frecuencia le pagan. Haga clic en la informacion de la derecha.";
$lang['household_income_category'] = "Categoria de ingreso";
$lang['household_income_type'] = "Tipo";
$lang['household_income_amount_freq'] = "Cantidad en dollares/frecuencia";
$lang['household_income_salary'] = "Salario";
$lang['household_income_add_another'] = "Agrege otro";
$lang['household_income_adult_earnings_from_work'] = array(
	'title' => 'Sueldo de trabajo o militar',
	'help' => "Pongs los ingresos totales de los sueldos, salarios y bonos en efectivo, cada uno en su propia fila. Informe de su ingreso neto si es su propio jefe o propietario de la granja."
);
$lang['household_income_adult_public_asst'] = array(
	'title' => 'Ayuda Publica, Pension Alimenticia, y Manutencion de los hijos',
	'help' => "Muchas familias pueden obtener apoyo de pencion alimenticia, beneficios de veteranos, beneficios de pensión alimenticia, o ayuda en efectivo del gobierno local o estatado."
);
$lang['household_income_adult_other_income'] = array(
	'title' => 'Las pensiones, Retiro, y todos los demás ingresos',
	'help' => "Recibe dinero de renta, seguro social, ingresos por inversiones, fondo de herencia,  o pagos en efectivo?"
);
$lang['household_income_child_earnings_from_work'] = array(
	'title' => 'Lo que gana en el trabajo',
	'help' => "El niño tiene un trabajo donde gana un sueldo o salario?"
);
$lang['household_income_child_ssn_benefits'] = array(
	'title' => 'Benificios de Seguro Social',
	'help' => "Si el niño es ciego o discapacitado y recibe beneficios de Seguro Social? Si un padre es discapacitado, jubilado,o fallecido, y su niño recibe beneficios de seguro social?"
);
$lang['household_income_child_spending_other_income'] = array(
	'title' => 'Dinero recivio de amigos or parientes',
	'help' => "Ocurre que amigos o familiares le dan diner efectivo a el niño regularmente para los gastos?"
);
$lang['household_income_child_other_income'] = array(
	'title' => 'Ingresos recibidos de otra forma',
	'help' => "Ocurre que el niño recibe ingresos de pension privada, anualidades, o fondo de herencia?"
);

// Contact Information
$lang['contact_info_title'] = "Informacion de Contacto";
$lang['contact_info_subtitle'] = "Su información nos ayuda a ponerse en contacto con usted si tenemos preguntas sobre su aplicación.";
$lang['contact_info_elements'] = array(
	'street_address' => array(
		'label'			=> "Direccion",
		'error'		 	=> "Direcion por favor"
	),
	'apt' => array(
		'label'       	=> "Numero de Apartamentos"
	),
	'city' => array(
		'label'       	=> "Ciudad",
		'error'			=> "Ciudad por favor"
	),
	'state' => array(
		'label'       	=> "Estado",
		'placeholder' 	=> "Por favor selecione el Estado",
		'error'			=> "Por favor selecione el Estado"
	),
	'zip' => array(
		'label'       	=> "Codigo Postal",
		'error'			=> "Codigo postal por favor"
	),
	'phone' => array(
		'label'       	=> "Telefono",
		'placeholder' 	=> "555-555-5555",
		'error'			=> "Por favor ponga su numero de telefono"
	),
	'email' => array(
		'label'       	=> "Correo Electronico",
		'placeholder' 	=> "ejemplo@ejemplo.com",
		'error'			=> "Por favor ponga su correo electronico valido"
	),
	'contact' => array(
		'label'       	=> "Forma preferida de contacto",
		'error'			=> "Por favor selecione el metodo de contacto"
	),
);
$lang['contact_info_email'] = "Correo Electronico";
$lang['contact_info_phone'] = "Llamada Telefónica";

// Children Ethnicity and Race
$lang['children_ethnicity_race'] = "Raza y Etnico de los Niños";
$lang['children_ethnicity_race_subtitle'] = "Estamos obligados a pedir información sobre sus hijos en la raza y la etnicidad. Esta información es importante y ayuda a asegurarse de que estamos plenamente sirviendo a nuestra comunidad. Respondiendo a esta sección es opcional y no afecta su elegibilidad para niños de alimentos gratis o a precio rebajo.";
$lang['ethnicity_table_header'] = "Etnico (Selecione Uno)";
$lang['race_table_header'] = "Raza (Selecione Uno o Mas)";
$lang['children_ethnicity_hispanic'] = "Hispano / Latino";
$lang['children_ethnicity_not_hispanic'] = "No Hispano / Latino";
// Confirmation
$lang['confirmation_title'] = "Informacion Confirmada";
$lang['confirmation_subtitle'] = "Revise sus respuestas para asegurarse de que todo esté completo. Usted puede volver a cambiar la información si es necesario.";
$lang['confirmation_subtitle_help'] = "Click the BACK button to edit information.";
$lang['confirmation_household_members'] = "LOS MIEMBROS DEL HOGAR";
$lang['confirmation_adults'] = "Adultos";
$lang['confirmation_children'] = "Niños";
$lang['confirmation_total_household_members'] = "Numero Total en el Hogar";
$lang['confirmation_contact_info'] = "INFORMACION DECONTACTO";
$lang['confirmation_other_assistance'] = "PROGRAMA DE ASISTENCIA";
$lang['confirmation_household_income'] = "INGRESO TOTAL EN EL HOGAR";
$lang['confirmation_address'] = "Direccion";
$lang['confirmation_phone'] = "Numero de Telefono";
$lang['confirmation_email'] = "Correo Electronico";
$lang['confirmation_receive_updates'] = "Reciba su estatus actualizado via {contact_method}";
$lang['confirmation_assistance_program'] = "Programa de Ayuda";
$lang['confirmation_case_number'] = "Numbero de Caso";
$lang['confirmation_not_required'] = "No requerido";
// Terms and Conditions
$lang['terms_and_cond_title'] = "Terminos y Condiciones";
$lang['terms_and_cond_subtitle'] = "Usted debe aceptar los siguientes términos y condidtions para continuar.";
$lang['terms_and_cond_agree'] = "Acepto los términos y condiciones.";
$lang['terms_and_cond_content'] = "<strong>USDA Non-Discrimination Statement</strong><br></br>In accordance with Federal civil rights law and U.S. Department of Agriculture (USDA) civil rights regulations and policies, the USDA, its Agencies, offices, and employees, and institutions participating in or administering USDA programs are prohibited from discriminating based on race, color, national origin, sex, disability, age, or reprisal or retaliation for prior civil rights activity in any program or activity conducted or funded by USDA.<br></br>Persons with disabilities who require alternative means of communication for program information (e.g. Braille, large print, audiotape, American Sign Language, etc.), should contact the Agency (State or local) where they applied for benefits. Individuals who are deaf, hard of hearing or have speech disabilities may contact USDA through the Federal Relay Service at (800) 877-8339. Additionally, program information may be made available in languages other than English.
<br></br>To file a program complaint of discrimination, complete the <a href='<a href='https://https://www.ascr.usda.gov/filing-program-discrimination-complaint-usda-customer'>https://www.ascr.usda.gov/filing-program-discrimination-complaint-usda-customer</a>. and at any USDA office, or write a letter addressed to USDA and provide in the letter all of the information requested in the form. To request a copy of the complaint form, call (866) 632-9992. Submit your completed form or letter to USDA by:<br></br>(1) Mail: U.S. Department of Agriculture Office of the Assistant Secretary for Civil Rights 1400 Independence Avenue, SW Washington, D.C. 20250-9410;<br></br>(2) Fax: (202) 690-7442; or<br></br>(3) Email: program.intake@usda.gov.
<br></br><br></br><strong>Use of Information Statement</strong><br></br>The Richard B. Russell National School Lunch Act requires the information on this application. You do not have to give the information, but if you do not submit all needed information, we cannot approve your child for free or reduced price meals. You must include the last four digits of the social security number of the adult household member who signs the application. The social security number is not required when you apply on behalf of a foster child or you list a Supplemental Nutrition Assistance Program (SNAP), Temporary Assistance for Needy Families (TANF) Program or Food Distribution Program on Indian Reservations (FDPIR) case number or other FDPIR identifier for your child or when you indicate that the adult household member signing the application does not have a social security number. We will use your information to determine if your child is eligible for free or reduced price meals, and for administration and enforcement of the lunch and breakfast programs.<br></br> We may share your eligibility information with education, health, and nutrition programs to help them evaluate, fund, or determine benefits for their programs, auditors for program reviews, and law enforcement officials to help them look into violations of program rules.";
$lang['terms_and_cond_help'] = "FIXME tandc";
// Electronic Signature
$lang['electronic_sig_title'] = "Firma";
$lang['electronic_sig_subtitle'] = "Por favor indique que usted ha cumplido con la declaracion, escribiendo su nombre en el espacio correspondiente.";
$lang['electronic_sig_statement'] = "Yo prometo que la informacion en esta aplicacion es verdadera y que he reportado todos mis ingresos.  Yo entiendo que esta informacion ese verdadera y puede concederme fondos federales, y que mi escuela puede investigar la informacion. Estoy conciente que mis niñoss pueden perder los beneficios de alimento y yo puedo ser procesado bajo la ley si yo doy informacion falsa a proposito.";
$lang['electronic_sig_accept'] = "Accept";
$lang['electronic_sig_not_available'] = "No disponible";
$lang['error_electronic_sig_agree'] = "You must agree to continue";
$lang['error_electronic_sig_name'] = "Por favor escriba su nombre.";
$lang['error_electronic_sig_social'] = "Numero de Seguro Social";
$lang['electronic_sig_subtitle_help'] = "FIXME sub help";
$lang['electronic_sig_ssn_help'] = "Si usted no tiene un numero de Seguro Social puede todavía ser elegible para recibir beneficios.";

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
//	indexes will serve as keys
$lang['adult_earnings_from_work_list_1'] = 'Salary, wages, cash bonuses';
$lang['adult_earnings_from_work_list_2'] = 'Net income from self employment';
$lang['adult_earnings_from_work_list_3'] = 'Strike benefits';
$lang['adult_earnings_from_work_list_4'] = 'Allowances for off-base housing, food, and clothing';
$lang['adult_earnings_from_work_list_5'] = 'Military pay and cash bonuses (do not include combat pay, FSSA or privatized housing allowances)';
$lang['adult_public_asst_list_1'] = "Unemployment benefits";
$lang['adult_public_asst_list_2'] = "Worker's compensation";
$lang['adult_public_asst_list_3'] = "Supplemental Security Income (SSI)";
$lang['adult_public_asst_list_4'] = "Cash assistance from State or local government";
$lang['adult_public_asst_list_5'] = "Alimony payments";
$lang['adult_public_asst_list_6'] = "Child support payments";
$lang['adult_public_asst_list_7'] = "Veteran's benefits";
$lang['adult_other_income_list_1'] = "Social Security (including railroad and black lung benefits)";
$lang['adult_other_income_list_2'] = "Private Pensions or disability";
$lang['adult_other_income_list_3'] = "Income from trusts or estates";
$lang['adult_other_income_list_4'] = "Annuities";
$lang['adult_other_income_list_5'] = "Investment income";
$lang['adult_other_income_list_6'] = "Rental income";
$lang['adult_other_income_list_7'] = "Regular cash payments from outside household";
$lang['child_earnings_from_work_list_1'] = 'Job';
$lang['child_ssn_benefits_list_1'] = 'Disability benefits';
$lang['child_ssn_benefits_list_2'] = 'Survivors benefits';
$lang['child_spending_other_income_list_1'] = 'Regular spending money';
$lang['child_other_income_list_1'] = 'Private pension fund';
$lang['child_other_income_list-2'] = 'Annuity';
$lang['child_other_income_list_3'] = 'Trust';
$lang['total_annualized_income'] = 'Total Annualized Income';
