<?PHP

// New language structure
$lang_info = array (
	'name' => 'French'
	,'nativename' => 'Fran�ais' // Language name in native language. E.g: 'Fran�ais' for 'French'
	,'locale' => array('fr','french') // Standard locale alternatives for a specific language. For reference, go to: http://www.php.net/manual/en/function.setlocale.php
	,'charset' => 'ISO-8859-1' // For reference, go to : http://www.w3.org/International/O-charset-lang.html
	,'direction' => 'ltr' // 'ltr' for Left to Right. 'rtl' for Right to Left languages such as Arabic.
	,'author' => 'DreamCatcher Team Leader'
	,'author_email' => 'contact@alphanet-sc.com'
	,'author_url' => 'http://www.alphanet-sc.com'
	,'transdate' => '07/10/2004'
);

$lang_general = array (
	'yes' => 'Oui'
	,'no' => 'Non'
	,'back' => 'Retour'
	,'continue' => 'Continuer'
	,'close' => 'Fermer'
	,'errors' => 'Erreurs'
	,'info' => 'Info'
	,'day' => 'Jour'
	,'days' => 'Jours'
	,'month' => 'Mois'
	,'months' => 'Mois'
	,'year' => 'Ann�e'
	,'years' => 'Ann�es'
	,'hour' => 'Heure'
	,'hours' => 'Heures'
	,'minute' => 'Minute'
	,'minutes' => 'Minutes'
	,'everyday' => 'Chaque jour'
	,'everymonth' => 'Chaque mois'
	,'everyyear' => 'Chaque ann�e'
	,'signature' => 'R�alis� par %s'
);

// Date formats, For reference, go to : http://www.php.net/manual/en/function.strftime.php
$lang_date_format = array (
	'full_date' => '%A, %d %B, %Y' // e.g. Wednesday, June 05, 2002
	,'full_date_time_24hour' => '%A, %d %B, %Y � %H:%M' // e.g. Wednesday, June 05, 2002 At 21:05
	,'full_date_time_12hour' => '%A, %d %B, %Y � %I:%M %p' // e.g. Wednesday, June 05, 2002 At 9:05 pm
	,'day_month_year' => '%d-%b-%Y' // e.g 10-Sep-2004
	,'local_date' => '%c' // Preferred date and time representation for current language 
	,'mini_date' => '%a. %d %b, %Y' 
	,'month_year' => '%B %Y'
	,'day_of_week' => array('Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi')
	,'months' => array('Janvier','F�vrier','Mars','Avril','Mai','Juin','Juillet','Ao�t','Septembre','Octobre','Novembre','D�cembre')
);

$lang_system = array (
	'system_caption' => 'Message syst�me'
  ,'page_access_denied' => 'Vous n\'avez pas assez de privil�ges pour acc�der � cette page.'
  ,'operation_denied' => 'Vous n\'avez pas assez de privil�ges pour effectuer cette op�ration.'
	,'section_disabled' => 'Cette partie est d�sactiv�e actuellement !'
  ,'non_exist_cat' => 'La cat�gorie s�lectionn�e n\'existe pas !'
  ,'non_exist_event' => 'L\'�v�nement s�lectionn� n\'existe pas !'
  ,'param_missing' => 'Les param�tres fournis sont incorrects.'
  ,'no_events' => 'Il n\'y a pas d\'�v�nement � afficher'
  ,'config_string' => 'Vous utilisez \'%s\' fonctionnant sur %s, %s et %s.'
  ,'no_table' => 'La table \'%s\' n\'existe pas !'
  ,'no_anonymous_group' => 'La table %s ne contient pas le groupe \'Anonymes\' !'
);

// Admin menu entries
$lang_admin_menu = array (
	'login' => 'Login'
	,'register' => 'S\'enregister'
  ,'logout' => 'Logout <span style="color:#FF9922">[<span style="color:#606F79">%s</span>]</span>'
  ,'user_profile' => 'Mon Profil'
	,'admin_events' => 'Ev�nements'
  ,'admin_categories' => 'Cat�gories'
  ,'admin_groups' => 'Groupes'
  ,'admin_users' => 'Utilisateurs'
  ,'admin_settings' => 'R�glages'
);

// Main menu entries
$lang_main_menu = array (
	'add_event' => 'Ev�nement'
	,'cal_view' => 'Mensuel'
  ,'flat_view' => 'Etendue'
  ,'weekly_view' => 'Hebdomadaire'
  ,'daily_view' => 'Journalier'
  ,'yearly_view' => 'Annuel'
  ,'categories_view' => 'Cat�gories'
  ,'search_view' => 'Chercher'
);

// ======================================================
// Add Event view
// ======================================================

$lang_add_event_view = array(
	'section_title' => 'Ajouter un �v�nement'
	,'edit_event' => 'Editer l\'�v�nement [id%d] \'%s\''
	,'update_event_button' => 'Mettre � jour'

// Event details
	,'event_details_label' => 'D�tails de l\'�v�nement'
	,'event_title' => 'Titre de l\'�v�nement'
	,'event_desc' => 'Description de l\'�v�nement'
	,'event_cat' => 'Cat�gorie'
	,'choose_cat' => 'S�lectionner une cat�gorie'
	,'event_date' => 'Date de l\'�v�nement'
	,'day_label' => 'Jour'
	,'month_label' => 'Mois'
	,'year_label' => 'Ann�e'
	,'start_date_label' => 'Heure de d�but'
	,'start_time_label' => '�'
	,'end_date_label' => 'Dur�e'
	,'all_day_label' => 'Tous les jours'
// Contact details
	,'contact_details_label' => 'D�tails concernant le contact'
	,'contact_info' => 'Informations sur le contact'
	,'contact_email' => 'Email du contact'
	,'contact_url' => 'URL du contact'
// Other details
	,'other_details_label' => 'Autres d�tails'
	,'picture_file' => 'Fichier image'
	,'file_upload_info' => '(limit� � %d Koctets - extensions valides : %s )' 
	,'del_picture' => 'Effacer l\'image actuelle ?'
// Administrative options
	,'admin_options_label' => 'Options d\'administration'
	,'auto_appr_event' => 'Ev�nement approuv�'

// Error messages
	,'no_title' => 'Vous devez fournir un titre pour l\'�v�nement !'
	,'no_desc' => 'Vous devez fournir une description pour cet �v�nement !'
	,'no_cat' => 'Vous devez s�lectionner une cat�gorie dans le menu d�roulant !'
	,'date_invalid' => 'Vous devez fournir une date valide pour cet �v�nement !'
	,'end_days_invalid' => 'La valeur saisie dans le champ \'Jours\' n\'est pas valide !'
	,'end_hours_invalid' => 'La valeur saisie dans le champ \'Heures\' n\'est pas valide !'
	,'end_minutes_invalid' => 'La valeur saisie dans le champ \'Minutes\' n\'est pas valide !'

	,'non_valid_extension' => 'Le format du fichier image attach� n\'est pas support� ! (Extensions valides : %s)'

	,'file_too_large' => 'Le fichier attach� est trop grand ! (limit� � %d Koctets)'
	,'move_image_failed' => 'Le syst�me n\'a pas pu d�placer l\'image !'
	,'non_valid_dimensions' => 'La largeur ou la hauteur de l\'image est plus large que %s pixels !'

// Misc. messages
	,'submit_event_pending' => 'Votre �v�nement est en attente d\'approbation. Merci pour votre collaboration !'
	,'submit_event_approved' => 'Votre �v�nement est automatiquement approuv�. Merci pour votre collaboration !'
);

// ======================================================
// daily view
// ======================================================

$lang_daily_event_view = array(
	'section_title' => 'Vue journali�re'
	,'next_day' => 'Jour suivant'
	,'previous_day' => 'Jour pr�c�dent'
	,'no_events' => 'Il n\'y a pas d\'�v�nement pour ce jour'
);

// ======================================================
// weekly view
// ======================================================

$lang_weekly_event_view = array(
	'section_title' => 'Vue hebdomadaire'
	,'week_period' => '%s - %s'
	,'next_week' => 'Semaine suivante'
	,'previous_week' => 'Semaine pr�c�dente'
	,'selected_week' => 'Semaine %d'
	,'no_events' => 'Il n\'y a pas d\'�v�nement pour cette semaine'
);

// ======================================================
// monthly view
// ======================================================

$lang_monthly_event_view = array(
	'section_title' => 'Vue mensuelle'
	,'next_month' => 'Mois suivant'
	,'previous_month' => 'Mois pr�c�dent'
);

// ======================================================
// flat view
// ======================================================

$lang_flat_event_view = array(
	'section_title' => 'Vue �tendue'
	,'week_period' => '%s - %s'
	,'next_month' => 'Mois suivant'
	,'previous_month' => 'Mois pr�c�dent'
	,'contact_info' => 'Info Contact'
	,'contact_email' => 'Email'
	,'contact_url' => 'URL'
	,'no_events' => 'Il n\'y a pas d\'�v�nement pour ce mois'
);

// ======================================================
// Event view
// ======================================================

$lang_event_view = array(
	'section_title' => 'Ev�nement'
	,'display_event' => 'Ev�nement : \'%s\''
	,'cat_name' => 'Cat�gorie'
	,'event_start_date' => 'Date'
	,'event_end_date' => 'Jusqu\'�'
	,'event_duration' => 'Dur�e'
	,'contact_info' => 'Info Contact'
	,'contact_email' => 'Email'
	,'contact_url' => 'URL'
	,'no_event' => 'Il n\'y a aucun �v�nement � afficher.'
	,'stats_string' => '<strong>%d</strong> �v�nements au total'
);

// ======================================================
// Categories view
// ======================================================

$lang_cats_view = array(
	'section_title' => 'Vue des cat�gories'
	,'cat_name' => 'Nom de la cat�gorie'
	,'total_events' => 'Total des �v�nements'
	,'upcoming_events' => 'Ev�nements � venir'
	,'no_cats' => 'Il n\'y a aucune cat�gorie � afficher.'
	,'stats_string' => 'Il y a <strong>%d</strong> �v�nements dans <strong>%d</strong> cat�gories'
);

// ======================================================
// Category Events view
// ======================================================

$lang_cat_events_view = array(
	'section_title' => 'Ev�nements sous \'%s\''
	,'event_name' => 'Nom de l\'�v�nement'
	,'event_date' => 'Date'
	,'no_events' => 'Il n\'y a aucun �v�nement dans cette cat�gorie.'
	,'stats_string' => '<strong>%d</strong> �v�nement(s) au total'
);

// ======================================================
// cal_search.php
// ======================================================

$lang_event_search_data = array(
	'section_title' => 'Rechercher dans le calendrier',
	'search_results' => 'R�sultat de la recherche',
	'category_label' => 'Cat�gorie',
	'date_label' => 'Date',
	'no_events' => 'Il n\'y a aucun �v�nement dans cette cat�gorie.',
	'search_caption' => 'Entrer des mots cl�s...',
	'search_again' => 'Chercher encore',
	'search_button' => 'Chercher',
// Misc.
	'no_results' => 'Aucun r�sultat trouv�',	
// Stats
	'stats_string1' => '<strong>%d</strong> �v�nement(s) trouv�(s)',
	'stats_string2' => '<strong>%d</strong> �v�nement(s) dans <strong>%d</strong> page(s)'
);

// ======================================================
// register.php
// ======================================================

if (defined('USER_REGISTRATION_PHP')) 

$lang_user_registration_data = array(
	'section_title' => 'Enregistrement utilisateur',
// Step 1: Terms & Conditions
	'terms_caption' => 'Termes et Conditions',
	'terms_intro' => 'Pour pouvoir continuer, vous devez accepter ce qui suit :',
	'terms_message' => 'Prenez un moment s\'il vous pla�t, pour �tudier les r�gles ci-dessous. Si vous �tes d\'accord avec et souhaitez continuer � vous enregistrer, clickez sur le bouton "je suis d\'accord" ci-dessous. Pour abandonner l\'enregistrement, clickez sur la fl�che "retour arri�re" de votre navigateur.<br /><br />Rappelez vous que nous ne sommes pas responsable des �v�nements enregistr�s par les utilisateurs dans le calendrier. Nous ne nous portons pas garrant, ni ne garantissons l\'exactitude, l\'exhaustitivt� ou l\'utilit� des �v�nements enregistr�s, et ne sommes pas responsables de leur contenus.<br /><br />Les messages expriment les opinions de l\'auteur de l\'�v�nenement, pas n�cessairement celles des administrateurs de %s. N\'importe quel utilisateur qui estime qu\'un �v�nement est r�pr�hensible est encourag� � nous contacter imm�diatement par email. Nous avons la capacit� d\'enlever le contenu r�pr�hensible et nous ferons tout pour le faire dans un temps raisonnable, si nous d�terminons que son retrait est necessaire.<br/><br/>Vous approuvez, par votre utilisation de ce service, que vous n\'emploierez pas cette application de calendrier pour mettre en avant un �v�nement volontairement faux, diffamatoire, impr�cis, abusif, vulgaire, obsc�ne, orient� sexuel, mena�ant, risquant de compromettre l\'intimit� d\'une personne ou violer une loi.<br/><br/>Vous acceptez de ne pas proposer des informations soumises � des droits, sauf si les droits d\'auteur vous appartiennent ou appartiennent � %s.',
	'terms_button' => 'Je suis d\'accord',
	
// Account Info
	'account_info_label' => 'Information du compte',
	'user_name' => 'Nom de login',
	'user_pass' => 'Mot de passe',
	'user_pass_confirm' => 'Confirmer le mot de passe',
	'user_email' => 'Adresse E-mail',
// Other Details
	'other_details_label' => 'Autres d�tails',
	'first_name' => 'Pr�nom',
	'last_name' => 'Nom',
	'user_website' => 'Page d\'accueil',
	'user_location' => 'Localisation',
	'user_occupation' => 'Profession',
	'register_button' => 'Soumettre ma requette',

// Stats
	'stats_string1' => '<strong>%d</strong> utilisateurs',
	'stats_string2' => '<strong>%d</strong> utilisateur(s) sur %d page(s)',
// Misc.
	'reg_nomail_success' => 'Merci de votre inscription.',
	'reg_mail_success' => 'Un email avec les informations sur comment activer votre compte vous a �t� envoy� � l\'adresse indiqu�e.',
	'reg_activation_success' => 'F�licitations ! Votre compte est activ� et vous pouvez vous connecter avec votre login et votre mot de passe. Merci de votre inscription.',
// Mail messages
	'reg_confirm_subject' => 'Inscrit � %s',
	
// Error messages
	'no_username' => 'Vous devez fournir un nom de login !',
	'invalid_username' => 'Entrer un nom de login constitu� seulement de lettres et de nombres, entre 4 et 30 caract�res de long !',
	'username_exists' => 'Le nom de login que vous avez entr� est d�ja pris. Proposez un nom diff�rent SVP !',
	'no_password' => 'Vous devez fournir un mot de passe pour ce nouveau compte !',
	'invalid_password' => 'Entrer un mot de passe constitu� seulement de lettres et de nombres, entre 4 et 16 caract�res de long !',
	'password_is_username' => 'Le mot de passe doit �tre diff�rent du login !',
	'password_not_match' =>'Le mot de passe entr� ne correspond pas � celui de confirmation',
	'no_email' => 'Vous devez fournir une adresse email !',
	'invalid_email' => 'Vous devez fournir une adresse email valide !',
	'email_exists' => 'Un autre utilisateur a d�ja fourni cette adresse email. Choisissez en une diff�rente s\'il vous pla�t !',
	'delete_user_failed' => 'Ce compte utilisateur ne peut pas �tre d�truit',
	'no_users' => 'Il n\'y a pas de compte utilisateur � afficher !',
	'already_logged' => 'Vous �tes d�ja connect� !',
	'registration_not_allowed' => 'Les inscriptions sont momentan�ment closes !',
	'reg_email_failed' => 'Une erreur s\'est produite en essayant d\'envoyer l\'email d\'activation !',
	'reg_activation_failed' => 'Une erreur s\'est produite en essaynt d\'activer le compte !'

);
// Message body for email activation
$lang_user_registration_data['reg_confirm_body'] = <<<EOT
Merci pour votre inscription � {CALENDAR_NAME}

Votre login est  : "{USERNAME}"
Votre mot de passe est : "{PASSWORD}"

Pour activer votre compte, vous devez clicker sur le lien ci-dessous
ou le recopier dans votre navigateur.

{REG_LINK}

Salutations,

Administrateur de {CALENDAR_NAME}

EOT;

// ======================================================
// theme.php
// ======================================================

// To Be Done

// ======================================================
// functions.inc.php
// ======================================================

// To Be Done

// ======================================================
// dblib.php
// ======================================================

// To Be Done

// ======================================================
// admin_events.php
// ======================================================

if (defined('ADMIN_EVENTS_PHP')) 

$lang_event_admin_data = array(
	'section_title' => 'Administration des �v�nements',
	'events_to_approve' => 'Administration des �v�nements : Ev�nements � approuver',
	'upcoming_events' => 'Administration des �v�nements : Ev�nements � venir',
	'past_events' => 'Administration des �v�nements : Ev�nements pass�s',
	'add_event' => 'Ajouter un nouvel �v�nement',
	'edit_event' => 'Editer l\'�v�nement',
	'view_event' => 'Afficher l\'�v�nement',
	'approve_event' => 'Approuver l\'�v�nement',
	'update_event' => 'Mettre � jour les informations de l\'�v�nement',
	'delete_event' => 'D�truire l\'�v�nement',
	'events_label' => 'Ev�nements',
	'auto_approve' => 'Auto-approbation',
	'date_label' => 'Date',
	'actions_label' => 'Actions',
	'events_filter_label' => 'Filtrer les �v�nements',
	'events_filter_options' => array('Afficher tous les �v�nements','Afficher seulement les �v�nements non-approuv�s','Afficher seulement les �v�nements � venir','Afficher seulement les �v�nements pass�s'),
	'picture_attached' => 'Image attach�e',
// View Event
	'view_event_name' => 'Ev�nement : \'%s\'',
	'event_start_date' => 'Date',
	'event_end_date' => 'Jusqu\'�',
	'event_duration' => 'Dur�e',
	'contact_info' => 'Info Contact',
	'contact_email' => 'Email',
	'contact_url' => 'URL',
// General Info
// Event form
	'edit_event_title' => 'Ev�nement : \'%s\'',
	'cat_name' => 'Cat�gorie',
	'event_start_date' => 'Date',
	'event_end_date' => 'Jusqu\'�',
	'contact_info' => 'Info Contact',
	'contact_email' => 'Email',
	'contact_url' => 'URL',
	'no_event' => 'Il n\'y a pas d\'�v�nement � afficher.',
	'stats_string' => '<strong>%d</strong> �v�nement(s) au total',
// Stats
	'stats_string1' => '<strong>%d</strong> �v�nement(s)',
	'stats_string2' => 'Total : <strong>%d</strong> �v�nements sur %d page(s)',
// Misc.
	'add_event_success' => 'Nouvel �v�nement ajout� avec succ�s',
	'edit_event_success' => 'Ev�nement mis � jour avec succ�s',
	'approve_event_success' => 'Ev�nement approuv� avec succ�s',
	'delete_confirm' => 'Etes vous s�r de vouloir d�truire cet �v�nement ?',
	'delete_event_success' => 'Ev�nement d�truit avec succ�s',
	'active_label' => 'Activ�',
	'not_active_label' => 'D�sactiv�',
// Error messages
	'no_event_name' => 'Vous devez fournir un nom pour cet �v�nement !',
	'no_event_desc' => 'Vous devez fournir une description pour cet �v�nement !',
	'no_cat' => 'Vous devez s�lectionner une cat�gorie pour cet �v�nement !',
	'no_day' => 'Vous devez s�lectionner un jour !',
	'no_month' => 'Vous devez s�lectionner un mois !',
	'no_year' => 'Vous devez s�lectionner une ann�e !',
	'non_valid_date' => 'Entrer une date valide SVP !',
	'end_days_invalid' => 'Assurez vous que le champ \'Jours\' sous \'Dur�e\' est constitu� seulement de nombres !',
	'end_hours_invalid' => 'Assurez vous que le champ \'Heures\' sous \'Dur�e\' est constitu� seulement de nombres !',
	'end_minutes_invalid' => 'Assurez vous que le champ \'Minutes\' sous \'Dur�e\' est constitu� seulement de nombres !',
	'file_too_large' => 'L\'image que vous avez attach� est plus grande que %s Koctets !',
	'non_valid_extension' => 'Le format du fichier attach� n\'est pas support� !',
	'delete_event_failed' => 'Cet �v�nement ne peut pas �tre d�truit',
	'approve_event_failed' => 'Cet �v�nement ne peut pas �tre approuv�',
	'no_events' => 'Il n\'y a pas d\'�v�nement � afficher !',
	'move_image_failed' => 'Le syst�me n\'a pas r�ussi � d�placer l\'image !',
	'non_valid_dimensions' => 'La largeur ou la hauteur de l\'image est sup�rieure � %s pixels !'
);

// ======================================================
// admin_categories.php
// ======================================================

if (defined('ADMIN_CATS_PHP')) 

$lang_cat_admin_data = array(
	'section_title' => 'Administration des cat�gories',
	'add_cat' => 'Ajouter une nouvelle cat�gorie',
	'edit_cat' => 'Editer la cat�gorie',
	'update_cat' => 'Mettre � jour les informations de la cat�gorie',
	'delete_cat' => 'D�truire la cat�gorie',
	'events_label' => 'Ev�nements',
	'visibility' => 'Visibilit�',
	'actions_label' => 'Actions',
	'users_label' => 'Utilisateurs',
	'admins_label' => 'Administrateurs',
// General Info
	'general_info_label' => 'Information g�n�rale',
	'cat_name' => 'Nom de la cat�gorie',
	'cat_desc' => 'Description de la cat�gorie',
	'cat_color' => 'Couleur',
	'pick_color' => 'Choisir une couleur !',
	'status_label' => 'Statut',
// Administrative Options
	'admin_label' => 'Options d\'administration',
	'auto_admin_appr' => 'Approuver automatiquement les soumissions des administrateurs',
	'auto_user_appr' => 'Approuver automatiquement les soumissions des utilisateurs',
// Stats
	'stats_string1' => '<strong>%d</strong> cat�gories',
	'stats_string2' => 'Actives : <strong>%d</strong>&nbsp;&nbsp;&nbsp;Total : <strong>%d</strong>&nbsp;&nbsp;&nbsp;sur %d page(s)',
// Misc.
	'add_cat_success' => 'Nouvelle cat�gorie ajout�e avec succ�s',
	'edit_cat_success' => 'Cat�gorie mise � jour avec succ�s',
	'delete_confirm' => 'Etes vous s�r de vouloir d�truire cette cat�gorie ?',
	'delete_cat_success' => 'Cat�gorie d�truite avec succ�s',
	'active_label' => 'Activ�e',
	'not_active_label' => 'D�sactiv�e',
// Error messages
	'no_cat_name' => 'Vous devez fournir un nom pour cette cat�gorie !',
	'no_cat_desc' => 'Vous devez fournir une description pour cette cat�gorie !',
	'no_color' => 'Vous devez fournir une couleur pour cette cat�gorie !',
	'delete_cat_failed' => 'Cette cat�gorie ne peut pas �tre d�truite',
	'no_cats' => 'Il n\'y a pas de cat�gorie � afficher !',
	'cat_has_events' => 'Cette cat�gorie contient %d �v�nement(s) et ne peut donc pas �tre d�truite !<br>D�truisez les �v�nements restants dans cette cat�gorie et recommencer � nouveau !'

);
// ======================================================
// admin_users.php
// ======================================================

if (defined('ADMIN_USERS_PHP')) 

$lang_user_admin_data = array(
	'section_title' => 'Administration des utilisateurs',
	'add_user' => 'Ajouter un nouvel utilisateur',
	'edit_user' => 'Editer les informations de l\'utilisateur',
	'update_user' => 'Mettre � jour les informations de l\'utilisateur',
	'delete_user' => 'D�truire le compte de l\'utilisateur',
	'last_access' => 'Dernier acc�s',
	'actions_label' => 'Actions',
	'active_label' => 'Activ�e',
	'not_active_label' => 'D�sactiv�e',
// Account Info
	'account_info_label' => 'Information du compte',
	'user_name' => 'Nom de login',
	'user_pass' => 'Mot de passe',
	'user_pass_confirm' => 'Confirmer le mot de passe',
	'user_email' => 'E-mail',
	'group_label' => 'Groupe d\'appartenance',
	'status_label' => 'Statut du compte',
// Other Details
	'other_details_label' => 'Autres d�tails',
	'first_name' => 'Pr�nom',
	'last_name' => 'Nom',
	'user_website' => 'Site web',
	'user_location' => 'Localisation',
	'user_occupation' => 'Profession',
// Stats
	'stats_string1' => '<strong>%d</strong> utilisateurs',
	'stats_string2' => '<strong>%d</strong> utilisateur(s) sur %d page(s)',
// Misc.
	'select_group' => 'En s�lectionner un...',
	'add_user_success' => 'Compte utilisateur ajout� avec succ�s',
	'edit_user_success' => 'Compte utilisateur mis � jour avec succ�s',
	'delete_confirm' => 'Etes vous s�r de vouloir d�truire ce compte ?',
	'delete_user_success' => 'Compte utilisateur d�truit avec succ�s',
	'update_pass_info' => 'Laisser le champ du mot de passe vide si vous n\'avez pas besoin de le changer',
	'access_never' => 'Jamais',
// Error messages
	'no_username' => 'Vous devez fournir un nom de login !',
	'invalid_username' => 'Entrer un nom de login constitu� seulement de lettres et de nombres, entre 4 et 30 caract�res de long !',
	'invalid_password' => 'Entrer un mot de passe constitu� seulement de lettres et de nombres, entre 4 et 16 caract�res de long !',
	'password_is_username' => 'Le mot de passe doit �tre diff�rent du nom de login !',
	'password_not_match' =>'Le mot de passe que vou savez entr� ne correspond pas � celui de confirmation',
	'invalid_email' => 'Vous devez fournir une adresse email valide !',
	'email_exists' => 'Un autre utilisateur a d�ja fourni cette adresse email. Choisissez en une diff�rente s\'il vous pla�t !',
	'username_exists' => 'Le nom de login que vous avez entr� est d�ja pris. Proposez un nom diff�rent SVP !',
	'no_email' => 'Vous devez fournir une adresse email !',
	'invalid_email' => 'Vous devez fournir une adresse email valide !',
	'no_password' => 'Vous devez fournir un mot de passe pour ce nouveau compte !',
	'no_group' => 'S�lectionner un groupe d\'appartenance pour cet utilisateur !',
	'delete_user_failed' => 'Ce compte utilisateur ne peut pas �tre d�truit',
	'no_users' => 'Il n\'y a pas de compte utilisateur � afficher !'

);

// ======================================================
// admin_groups.php
// ======================================================

if (defined('ADMIN_GROUPS_PHP')) 

$lang_group_admin_data = array(
	'section_title' => 'Administration des groupes',
	'add_group' => 'Ajouter un nouveau groupe',
	'edit_group' => 'Editer le groupe',
	'update_group' => 'Mettre � jour les informations du groupe',
	'delete_group' => 'D�truire le groupe',
	'view_group' => 'Afficher le groupe',
	'users_label' => 'Membres',
	'actions_label' => 'Actions',
// General Info
	'general_info_label' => 'Information g�n�rale',
	'group_name' => 'Nom du groupe',
	'group_desc' => 'Description du groupe',
// Group Access Level
	'access_level_label' => 'Niveau d\'acc�s du groupe',
	'has_admin_access' => 'Les utilisateurs de ce groupe ont l\'acc�s administrateur',
	'can_manage_accounts' => 'Les utilisateurs de ce groupe peuvent administrer les comptes',
	'can_change_settings' => 'Les utilisateurs de ce groupe peuvent changer la configuration du calendrier',
	'can_manage_cats' => 'Les utilisateurs de ce groupe peuvent g�rer les cat�gories',
	'upl_need_approval' => 'Les �v�nements soumis n�cessitent l\'approbation d\'un administrateur',
// Stats
	'stats_string1' => '<strong>%d</strong> groupe(s)',
	'stats_string2' => 'Total : <strong>%d</strong> groupe(s) dans %d page(s)',
	'stats_string3' => 'Total : <strong>%d</strong> utilisateur(s) sur %d page(s)',
// View Group Members
	'group_members_string' => 'Membres du groupe \'%s\'',
	'username_label' => 'Nom de login',
	'firstname_label' => 'Pr�nom',
	'lastname_label' => 'Nom',
	'email_label' => 'Email',
	'last_access_label' => 'Dernier acc�s',
	'edit_user' => 'Editer l\'utilisateur',
	'delete_user' => 'D�truire l\'utilisateur',
// Misc.
	'add_group_success' => 'Nouveau groupe ajout� avec succ�s',
	'edit_group_success' => 'Groupe mis � jour avec succ�s',
	'delete_confirm' => 'Etes vous s�r de vouloir d�truire ce groupe ?',
	'delete_user_confirm' => 'Etes vous s�r de vouloir d�truire ce groupe ?',
	'delete_group_success' => 'Groupe d�truit avec succ�s',
	'no_users_string' => 'Il n\'y a pas d\'utilisateur dans ce groupe',
// Error messages
	'no_group_name' => 'Vous devez fournir un nom pour ce groupe !',
	'no_group_desc' => 'Vous devez fournir une description pour ce groupe !',
	'delete_group_failed' => 'Ce groupe ne peut pas �tre d�truit',
	'no_groups' => 'Il n\'y a pas de groupe � afficher !',
	'group_has_users' => 'Ce groupe contient %d utilisateur(s) et ne peut donc pas �tre d�truit!<br>Retirez les utilisateurs de ce groupe et recommencez SVP !'

);

// ======================================================
// admin_settings.php / admin_settings_template.php / 
// admin_settings_updates.php
// ======================================================

if (defined('SETTINGS_PHP')) 

$lang_settings_data = array(
	'section_title' => 'R�glages du calendrier'
// Links
	,'admin_links_text' => 'Choisir la section'
	,'admin_links' => array('R�glages principaux','Configuration du Template','Mise � jour produit')
// General Settings
	,'general_settings_label' => 'Param�tres g�n�raux'
	,'calendar_name' => 'Nom du calendrier'
	,'calendar_description' => 'Description du calendrier'
	,'calendar_admin_email' => 'Email de l\'administrateur du calendrier'
	,'cookie_name' => 'Nom du cookie utilis� par le script'
	,'cookie_path' => 'Chemin du cookie utilis� par le script'
	,'debug_mode' => 'Activer le mode debug'
// Environment Settings
	,'env_settings_label' => 'Param�tres d\'environnement'
	,'lang' => 'Langage'
		,'lang_name' => 'Code langue'
		,'lang_native_name' => 'Langue'
		,'lang_trans_date' => 'Traduit le'
		,'lang_author_name' => 'Auteur'
		,'lang_author_email' => 'E-mail'
		,'lang_author_url' => 'Site web'
	,'charset' => 'Encodage des caract�res'
	,'theme' => 'Th�me'
		,'theme_name' => 'Nom du th�me'
		,'theme_date_made' => 'Fait le'
		,'theme_author_name' => 'Auteur'
		,'theme_author_email' => 'E-mail'
		,'theme_author_url' => 'Site web'
	,'timezone' => 'D�calage horaire'
	,'time_format' => 'Format d\'affichage de l\'heure'
		,'24hours' => '24 Heures'
		,'12hours' => '12 Heures'
	,'auto_daylight_saving' => 'Ajustement automatique de l\'heure d\'�t�/hiver (DST)'
	,'main_table_width' => 'Largeur de la Table principale (Pixels ou %)'
	,'day_start' => 'Les semaines commence le'
	,'default_view' => 'Affichage par d�faut'
	,'search_view' => 'Permettre la recherche'
	,'archive' => 'Afficher les �v�nements pass�s'
	,'events_per_page' => 'Nombre d\'�v�nements par page'
	,'sort_order' => 'Ordre de tri par d�faut'
		,'sort_order_title_a' => 'Titre ascendant'
		,'sort_order_title_d' => 'Title descendant'
		,'sort_order_date_a' => 'Date croissante'
		,'sort_order_date_d' => 'Date d�croissante'
// User Settings
	,'user_settings_label' => 'R�glages utilisateur'
	,'allow_user_registration' => 'Permettre l\'inscription des utilisateurs'
	,'reg_duplicate_emails' => 'Autoriser la duplication des emails'
	,'reg_email_verify' => 'Permettre l\'activation des compte par email'
// Event View
	,'event_view_label' => 'Affichage des �v�nements'
	,'popup_event_mode' => 'Affichage des �v�nements en Pop-up'
	,'popup_event_width' => 'Largeur de la fen�tre Pop-up'
	,'popup_event_height' => 'Hauteur de la fen�tre Pop-up'
// Add Event View
	,'add_event_view_label' => 'Ajout des �v�nements'
	,'add_event_view' => 'Activ�'
	,'addevent_allow_html' => 'Permettre les codes <b>BB</b> dans la description'
	,'addevent_allow_contact' => 'Autoriser Contact'
	,'addevent_allow_email' => 'Autoriser Email'
	,'addevent_allow_url' => 'Autoriser URL'
	,'addevent_allow_picture' => 'Autoriser Images'
	,'new_post_notification' => 'Notification de nouvelle entr�e'
// Calendar View
	,'calendar_view_label' => 'Vue mensuelle (calendrier)'
	,'monthly_view' => 'Activ�e'
	,'cal_view_max_chars' => 'Nombre maximum de caract�res pour la description'
// Flyer View
	,'flyer_view_label' => 'Vue des cat�gories'
	,'flyer_view' => 'Activ�e'
	,'flyer_show_picture' => 'Afficher les images dans la vue des cat�gories'
	,'flyer_view_max_chars' => 'Nombre maximum de caract�res pour la description'
// Weekly View
	,'weekly_view_label' => 'Vue hebdomadaire'
	,'weekly_view' => 'Activ�e'
	,'weekly_view_max_chars' => 'Nombre maximum de caract�res pour la description'
// Daily View
	,'daily_view_label' => 'Vue journali�re'
	,'daily_view' => 'Activ�e'
	,'daily_view_max_chars' => 'Nombre maximum de caract�res pour la description'
// Categories View
	,'categories_view_label' => 'Vue par cat�gorie'
	,'cats_view' => 'Activ�e'
	,'cats_view_max_chars' => 'Nombre maximum de caract�res pour la description'
// Mini Calendar
	,'mini_cal_label' => 'Mini Calendrier'
	,'mini_cal_def_picture' => 'Image par d�faut'
	,'mini_cal_display_picture' => 'Affiche l\'image'
	,'mini_cal_diplay_options' => array('Aucune','Image par d�faut', 'Image du jour','Image de la semaine','Image al�atoire')
// Picture Settings
	,'picture_settings_label' => 'R�glages pour les images'
	,'max_upl_dim' => 'Largeur et hauteur max. pour les images t�l�charg�es'
	,'max_upl_size' => 'Taille maximum pour les images t�l�charg�es (Upload) (en Koctets)'
	,'picture_chmod' => 'Mode par d�faut pour les images (CHMOD) (en base 8 - Octal)'
	,'allowed_file_extensions' => 'Extensions de fichier accept�es pour les images t�l�charg�es'
// Form Buttons
	,'update_config' => 'Enregistrer'
	,'restore_config' => 'Restaurer d\'origine'
// Misc.
	,'update_settings_success' => 'R�glages mis � jour avec succ�s'
	,'restore_default_confirm' => 'Etes vous s�r de vouloir remettre les r�glages par d�faut ?'
// Template Configuration
	,'template_type' => 'Type de gabarit'
	,'template_header' => 'Personnalisation de l\'ent�te'
	,'template_footer' => 'Personnalisation du pied de page'
	,'template_status_default' => 'Utiliser le gabarit par d�faut'
	,'template_status_custom' => 'Utiliser le gabarit suivant :'
	,'template_custom' => 'Gabarit personnalis�'

	,'info_meta' => 'Meta Information'
	,'info_status' => 'Contr�le de statut'
	,'info_status_default' => 'D�sactiver ce contenu'
	,'info_status_custom' => 'Afficher le contenu suivant :'
	,'info_custom' => 'Contenu personnalis�'

	,'dynamic_tags' => 'Tags Dynamiques'

// Product Updates
	,'updates_check_text' => 'Attendez le temps de retrouver le sinformations sur ce serveur...'
	,'updates_no_response' => 'Pas de r�ponse du serveur. Essayez plus tard.'
	,'avail_updates' => 'Mises � jour disponibles'
	,'updates_download_zip' => 'T�l�charger le package ZIP (.zip)'
	,'updates_download_tgz' => 'T�l�charger le package TGZ (.tar.gz)'
	,'updates_released_label' => 'Date de version : %s'
	,'updates_no_update' => 'Vous utilisez la derni�re version disponible. La mise � jour n\'est pas n�cessaire.'
);

// ======================================================
// cal_mini.inc.php
// ======================================================

$lang_mini_cal = array(
	'def_pic' => 'Image par d�faut'
	,'daily_pic' => 'Image du jour (%s)'
	,'weekly_pic' => 'Image de la semaine (%s)'
	,'rand_pic' => 'Image al�atoire (%s)'
	,'post_event' => 'Envoyer un nouvel �v�nement'
);

// ======================================================
// calendar.php
// ======================================================

// To Be Done

// ======================================================
// config.inc.php
// ======================================================

// To Be Done

// ======================================================
// install.php
// ======================================================

// To Be Done

// ======================================================
// login.php
// ======================================================

if (defined('LOGIN_PHP')) 

$lang_login_data = array(
	'section_title' => 'Fen�tre d\'identification'
// General Settings
	,'login_intro' => 'Entrer votre login et mot de passe pour vous connecter'
	,'username' => 'Login'
	,'password' => 'Mot de passe'
	,'remember_me' => 'Se rappeler de moi'
	,'login_button' => 'Login'
// Errors
	,'invalid_login' => 'V�rifiez vos information de login et re-essayer !'
	,'no_username' => 'Vous devez fournir un nom de login !'
	,'already_logged' => 'Vous �tes d�ja connect� !'
);

// ======================================================
// logout.php
// ======================================================

// To Be Done


// old structure	

$maand[0]="Chaque mois";
$maand[1]="Janvier";
$maand[2]="F�vrier";
$maand[3]="Mars";
$maand[4]="Avril";
$maand[5]="Mai";
$maand[6]="Juin";
$maand[7]="Juillet";
$maand[8]="Ao�t";
$maand[9]="Septembre";
$maand[10]="Octobre";
$maand[11]="Novembre";
$maand[12]="D�cembre";

$week[1]="Dimanche";
$week[2]="Lundi";
$week[3]="Mardi";
$week[4]="Mercredi";
$week[5]="Jeudi";
$week[6]="Vendredi";
$week[7]="Samedi";

function translate($word){

    switch ($word) {
        // Language parameters
        case "lang_name": $new = "French";    break;
        case "lang_nativename": $new = "Fran�ais";    break;
        case "lang_charset": $new = "ISO-8859-1";    break;
				// Translations
        case "yes": $new = "Oui";    break;
        case "no": $new = "Non";    break;
        case "welcometo": $new = "Bienvenue �";    break;
        case "admin": $new = "Administration";    break;
        case "adminoptions": $new = "Options d'administration";    break;
        case "cate": $new = "Par cat�gories"; break;
        case "day": $new = "Journalier"; break;
        case "week": $new = "Semaine"; break;
        case "weeklyview": $new = "Hebdomadaire"; break;
        case "cal": $new = "Mensuel"; break;
        case "nocats": $new = "Pas de cat�gorie pour l'instant"; break;
        case "addcat": $new = "Ajouter une nouvelle cat�gorie"; break;
        case "cats": $new = "Cat�gories"; break;
        case "addevent": $new = "Ajouter un �v�nement"; break;
        case "outof": $new = "Historique"; break;
        case "upcomingevents": $new = "Ev�nements � venir"; break;
        case "totalevents": $new = "Total des �v�nements"; break;
        case "events": $new = "Ev�nements"; break;
        case "errors": $new = "Erreurs"; break;
        case "weeklyevents": $new = "Ev�nements hebdomadaires"; break;
        case "eventdetails": $new = "D�tail de l'�v�nement"; break;
        case "eventitle": $new = "Titre de l'�v�nement"; break;
        case "description": $new = "Description de l'�v�nement"; break;
        case "choosecat": $new = "Choisir une cat�gorie"; break;
        case "selectyear": $new = "Ann�e"; break;
        case "selectmonth": $new = "Mois"; break;
        case "selectday": $new = "Jour"; break;
        case "everyyear": $new = "Chaque ann�e"; break;
        case "everymonth": $new = "Chaque mois"; break;
        case "bdate": $new = "Date"; break;
        case "notitle": $new = "Vous devez donner un titre pour l'�v�nement !"; break;
        case "nodescription": $new = "Vous devez donner une description pour l'�v�nement"; break;
        case "noday": $new = "Vous devez s�lectionner un jour !"; break;
        case "nomonth": $new = "Vous devez s�lectionner un mois !"; break;
        case "noyear": $new = "Vous devez s�lectionner une ann�e !"; break;
        case "nocat": $new = "Vous devez s�lectionner une cat�gorie !"; break;
        case "novaliddate": $new = "Entrer une date valide SVP !"; break;
        case "kblimit": $new = "Koctets maximum"; break;
        case "back": $new = "Retour"; break;
        case "action": $new = "Actions"; break;
        case "nononapproved": $new = "Aucun �v�nement � approuver"; break;
        case "nonapproved": $new = "Ev�nement(s) � approuver"; break;
        case "autoapprove": $new = "Ev�nement auto-approuv�"; break;
        case "cat": $new = "Cat�gorie"; break;
        case "view": $new = "Afficher l'�v�nement"; break;
        case "edit": $new = "Editer"; break;
        case "updateevent": $new = "Mettre � jour l'�v�nement"; break;
        case "approve": $new = "Approuver cet �v�nement"; break;
        case "appreventok": $new = "Ev�nement approuv� avec succ�s"; break;
        case "cantapprevent": $new = "L'�v�nement sp�cifi� ne peut pas �tre approuv�"; break;
        case "moreinfo": $new = "Plus d'info"; break;
        case "editcat": $new = "Editer la cat�gorie"; break;
        case "delcat": $new = "D�truire la cat�gorie"; break;
        case "edit": $new = "Editer"; break;
        case "del": $new = "D�truire"; break;
        case "name": $new = "Nom"; break;
        case "update": $new = "Mettre � jour"; break;
        case "reallydelcat": $new = "Etes vous s�r de vouloir d�truire cette cat�gorie ? Tous les �v�nements associ�s avec cette cat�gorie seont d�finitivement d�truits !"; break;
        case "noback": $new = "A�e, revenez en arri�re !"; break;
        case "deleventok": $new = "Ev�nement d�truit avec succ�s"; break;
        case "cantdelevent": $new = "L'�v�nement sp�cifi� ne peut pas �tre d�truit"; break;
        case "surecat": $new = "Oui, le d�truire maintenant !"; break;
        case "noevents": $new = "Pas d'�v�nement"; break;
        case "numbevents": $new = "Ev�nements dans "; break;
        case "upevent": $new = "Mettre � jour l'�v�nement"; break;
        case "delev": $new = "D�truire"; break;
        case "currentpic": $new = "Image actuelle"; break;
        case "delpic": $new = "D�truire cette image"; break;
        case "nooutofdate": $new = "Pas d'�v�nement p�rim�."; break;
        case "delalloodev": $new = "D�truire tous les �v�nements p�rim�s"; break;
        case "delevok": $new = "Etes vous certain de vouloir d�truire cet �v�nement ?"; break;
        case "delalloodevok": $new = "Tous les d�truire !"; break;
        case "prevm": $new = "Mois pr�c�dant"; break;
        case "nextm": $new = "Mois suivant"; break;
        case "today": $new = "Aujourd'hui"; break;
        case "eventstoday": $new = "Ev�nement(s) du jour"; break;
        case "readmore": $new = "Voir plus"; break;
        case "nextday": $new = "Jour suivant"; break;
        case "prevday": $new = "Jour pr�c�dant"; break;
        case "askedday": $new = "Jour demand�"; break;
        case "nextweek": $new = "Semaine suivante"; break;
        case "prevweek": $new = "Semaine pr�c�dante"; break;
        case "weeknr": $new = "Num�ro de la semaine"; break;
        case "eventsthisweek": $new = "Ev�nement(s) de "; break;
        case "till": $new = "jusqu'au"; break;
        case "thankyou": $new = "Merci d'avoir saisi un �v�nement, il appara�tra rapidement apr�s validation !"; break;
        case "eventedited": $new = "Ev�nement mis � jour avec succ�s!"; break;
				case "op": $new = "sur"; break;
       	# here start the new not yet translated language vars
        case "disabled": $new = "Cette section a �t� d�sactiv�e"; break;
       	case "searchbutton": $new = "Chercher"; break;
       	case "searchtitle": $new = "Recherche"; break;
       	case "searchcaption": $new = "Saisissez des mots cl�s"; break;
       	case "searchresults": $new = "R�sultat de la recherche"; break;
       	case "searchagain": $new = "Chercher encore"; break;
      	case "onedate": $new = "Une date"; break;
        case "moredates": $new = "Plus de dates"; break;
      	case "moredatesexplain": $new = "Plus de dates : 'dd-mm-yyyy;dd-mm-yyyy' si le jour est en premier, taper 01, idem pour le mois! sans-';' � la fin !"; break;
      	case "email": $new = "Email"; break;
      	case "results": $new = "Resultats"; break;
      	case "noresults": $new = "Pas de r�sultats"; break;
        case "wronglogin": $new = "V�rifiez vos informations de login et recommencez SVP !"; break;
        case "userman": $new = "Administration des utilisateurs"; break;
        case "users": $new = "tilisateurs"; break;
        case "logout": $new = "D�connexion"; break;
        case "deluser": $new = "D�truire l'utilisateur"; break;
        case "addnewuser": $new = "Ajouter un nouvel utilisateur"; break;
        case "loginscreen": $new = "Fen�tre d'authentification"; break;
        case "login": $new = "Login"; break;
        case "password": $new = "Mot de passe"; break;
        case "rememberme": $new = "Se rappeler de moi"; break;
				case "loginmsg": $new = "Entrer votre nom de login et votre mot de passe"; break;
				case "nologinname": $new = "Entrez un nom de login SVP !"; break;
        case "userwarning": $new = "Retenez bien votre mot de passe, car vous ne pourrez pas le retrouver !"; break;
        case "userdelok": $new = "Etes vous s�r de d�truire cet utilisateur ?"; break;
        case "contact": $new = "Contact"; break;
        case "contactinfo": $new = "Info Contact"; break;
        case "otherdetails": $new = "Autres D�tails"; break;
        case "picture": $new = "Image"; break;
        case "filetolarge": $new = "Le fichier attach� est trop gros !"; break;
        case "extensionnovalid": $new = "L'extension de fichier n'est pas valide !"; break;
        case "flyerlink": $new = "Cat�gories"; break;
        case "mailtitle": $new = "Contr�ler l'administration du calendrier rapidement !"; break;
        case "mailbody": $new = "Quelqu'un a soumis un �v�nement !"; break;
        case "continuebutton": $new = "Clicker pour continuer"; break;
        case "returnbutton": $new = "Revenir � la page d'accueil"; break;
        case "in": $new = "dans"; break;
        case "uploadapplnk": $new = "Approuver"; break;
        case "settingslnk": $new = "R�glages"; break;
        case "categorieslnk": $new = "Cat�gories"; break;
        case "userslnk": $new = "Utilisateurs"; break;
        case "groupslnk": $new = "Groupes"; break;
        case "myprofile": $new = "Profil"; break;
        case "status": $new = "Statut"; break;
        case "options": $new = "Options"; break;
        case "autoappr": $new = "Auto-approbation"; break;
        case "active": $new = "Activ�"; break;
        case "inactive": $new = "D�sactiv�"; break;
        case "admincats": $new = "Category Administration"; break;
        case "generalinfo": $new = "Information g�nerale"; break;
        case "catname": $new = "Nom de la cat�gorie"; break;
        case "catdesc": $new = "Description de la cat�gorie"; break;
        case "color": $new = "Couleur"; break;
        case "pickcolor": $new = "Choisir une couleur !"; break;
        case "autouserappr": $new = "Approuver automatiquement les soumissions utilisateur"; break;
        case "autoadminappr": $new = "Approuver automatiquement les soumissions administrateur"; break;
        case "nocatname": $new = "Vous devez fournir un nom de cat�gorie !"; break;
        case "nocatdesc": $new = "Vous devez fournir une description de cat�gorie !"; break;
        case "nocolor": $new = "Vous devez fournir une couleur !"; break;
        case "total": $new = "Total"; break;
        case "admins": $new = "Administrateurs"; break;
        case "updatecat": $new = "Mettre � jour la cat�gorie"; break;
        case "catedited": $new = "Cat�gorie mise � jour avec succ�s !"; break;
        case "delcatmoreevents": $new = "Cette cat�gorie contient %d �v�nement(s) et ne peut donc pas �tre d�truite !<br>D�truisez les �v�nements restants dans cette cat�gorie et recommencez SVP !"; break;
        case "delcatok": $new = "Cat�gorie d�truite avec succ�s !"; break;
        
        default: $new = "<b>".$word."</b> en attente de traduction !";    break;

    }
    return $new;
}
?>