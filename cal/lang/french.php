<?PHP

// New language structure
$lang_info = array (
	'name' => 'French'
	,'nativename' => 'Français' // Language name in native language. E.g: 'Français' for 'French'
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
	,'year' => 'Année'
	,'years' => 'Années'
	,'hour' => 'Heure'
	,'hours' => 'Heures'
	,'minute' => 'Minute'
	,'minutes' => 'Minutes'
	,'everyday' => 'Chaque jour'
	,'everymonth' => 'Chaque mois'
	,'everyyear' => 'Chaque année'
	,'signature' => 'Réalisé par %s'
);

// Date formats, For reference, go to : http://www.php.net/manual/en/function.strftime.php
$lang_date_format = array (
	'full_date' => '%A, %d %B, %Y' // e.g. Wednesday, June 05, 2002
	,'full_date_time_24hour' => '%A, %d %B, %Y à %H:%M' // e.g. Wednesday, June 05, 2002 At 21:05
	,'full_date_time_12hour' => '%A, %d %B, %Y à %I:%M %p' // e.g. Wednesday, June 05, 2002 At 9:05 pm
	,'day_month_year' => '%d-%b-%Y' // e.g 10-Sep-2004
	,'local_date' => '%c' // Preferred date and time representation for current language 
	,'mini_date' => '%a. %d %b, %Y' 
	,'month_year' => '%B %Y'
	,'day_of_week' => array('Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi')
	,'months' => array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre')
);

$lang_system = array (
	'system_caption' => 'Message système'
  ,'page_access_denied' => 'Vous n\'avez pas assez de privilèges pour accéder à cette page.'
  ,'operation_denied' => 'Vous n\'avez pas assez de privilèges pour effectuer cette opération.'
	,'section_disabled' => 'Cette partie est désactivée actuellement !'
  ,'non_exist_cat' => 'La catégorie sélectionnée n\'existe pas !'
  ,'non_exist_event' => 'L\'événement sélectionné n\'existe pas !'
  ,'param_missing' => 'Les paramètres fournis sont incorrects.'
  ,'no_events' => 'Il n\'y a pas d\'événement à afficher'
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
	,'admin_events' => 'Evénements'
  ,'admin_categories' => 'Catégories'
  ,'admin_groups' => 'Groupes'
  ,'admin_users' => 'Utilisateurs'
  ,'admin_settings' => 'Réglages'
);

// Main menu entries
$lang_main_menu = array (
	'add_event' => 'Evénement'
	,'cal_view' => 'Mensuel'
  ,'flat_view' => 'Etendue'
  ,'weekly_view' => 'Hebdomadaire'
  ,'daily_view' => 'Journalier'
  ,'yearly_view' => 'Annuel'
  ,'categories_view' => 'Catégories'
  ,'search_view' => 'Chercher'
);

// ======================================================
// Add Event view
// ======================================================

$lang_add_event_view = array(
	'section_title' => 'Ajouter un événement'
	,'edit_event' => 'Editer l\'événement [id%d] \'%s\''
	,'update_event_button' => 'Mettre à jour'

// Event details
	,'event_details_label' => 'Détails de l\'événement'
	,'event_title' => 'Titre de l\'événement'
	,'event_desc' => 'Description de l\'événement'
	,'event_cat' => 'Catégorie'
	,'choose_cat' => 'Sélectionner une catégorie'
	,'event_date' => 'Date de l\'événement'
	,'day_label' => 'Jour'
	,'month_label' => 'Mois'
	,'year_label' => 'Année'
	,'start_date_label' => 'Heure de début'
	,'start_time_label' => 'à'
	,'end_date_label' => 'Durée'
	,'all_day_label' => 'Tous les jours'
// Contact details
	,'contact_details_label' => 'Détails concernant le contact'
	,'contact_info' => 'Informations sur le contact'
	,'contact_email' => 'Email du contact'
	,'contact_url' => 'URL du contact'
// Other details
	,'other_details_label' => 'Autres détails'
	,'picture_file' => 'Fichier image'
	,'file_upload_info' => '(limité à %d Koctets - extensions valides : %s )' 
	,'del_picture' => 'Effacer l\'image actuelle ?'
// Administrative options
	,'admin_options_label' => 'Options d\'administration'
	,'auto_appr_event' => 'Evénement approuvé'

// Error messages
	,'no_title' => 'Vous devez fournir un titre pour l\'événement !'
	,'no_desc' => 'Vous devez fournir une description pour cet événement !'
	,'no_cat' => 'Vous devez sélectionner une catégorie dans le menu déroulant !'
	,'date_invalid' => 'Vous devez fournir une date valide pour cet événement !'
	,'end_days_invalid' => 'La valeur saisie dans le champ \'Jours\' n\'est pas valide !'
	,'end_hours_invalid' => 'La valeur saisie dans le champ \'Heures\' n\'est pas valide !'
	,'end_minutes_invalid' => 'La valeur saisie dans le champ \'Minutes\' n\'est pas valide !'

	,'non_valid_extension' => 'Le format du fichier image attaché n\'est pas supporté ! (Extensions valides : %s)'

	,'file_too_large' => 'Le fichier attaché est trop grand ! (limité à %d Koctets)'
	,'move_image_failed' => 'Le système n\'a pas pu déplacer l\'image !'
	,'non_valid_dimensions' => 'La largeur ou la hauteur de l\'image est plus large que %s pixels !'

// Misc. messages
	,'submit_event_pending' => 'Votre événement est en attente d\'approbation. Merci pour votre collaboration !'
	,'submit_event_approved' => 'Votre événement est automatiquement approuvé. Merci pour votre collaboration !'
);

// ======================================================
// daily view
// ======================================================

$lang_daily_event_view = array(
	'section_title' => 'Vue journalière'
	,'next_day' => 'Jour suivant'
	,'previous_day' => 'Jour précédent'
	,'no_events' => 'Il n\'y a pas d\'événement pour ce jour'
);

// ======================================================
// weekly view
// ======================================================

$lang_weekly_event_view = array(
	'section_title' => 'Vue hebdomadaire'
	,'week_period' => '%s - %s'
	,'next_week' => 'Semaine suivante'
	,'previous_week' => 'Semaine précédente'
	,'selected_week' => 'Semaine %d'
	,'no_events' => 'Il n\'y a pas d\'événement pour cette semaine'
);

// ======================================================
// monthly view
// ======================================================

$lang_monthly_event_view = array(
	'section_title' => 'Vue mensuelle'
	,'next_month' => 'Mois suivant'
	,'previous_month' => 'Mois précédent'
);

// ======================================================
// flat view
// ======================================================

$lang_flat_event_view = array(
	'section_title' => 'Vue étendue'
	,'week_period' => '%s - %s'
	,'next_month' => 'Mois suivant'
	,'previous_month' => 'Mois précédent'
	,'contact_info' => 'Info Contact'
	,'contact_email' => 'Email'
	,'contact_url' => 'URL'
	,'no_events' => 'Il n\'y a pas d\'événement pour ce mois'
);

// ======================================================
// Event view
// ======================================================

$lang_event_view = array(
	'section_title' => 'Evénement'
	,'display_event' => 'Evénement : \'%s\''
	,'cat_name' => 'Catégorie'
	,'event_start_date' => 'Date'
	,'event_end_date' => 'Jusqu\'à'
	,'event_duration' => 'Durée'
	,'contact_info' => 'Info Contact'
	,'contact_email' => 'Email'
	,'contact_url' => 'URL'
	,'no_event' => 'Il n\'y a aucun événement à afficher.'
	,'stats_string' => '<strong>%d</strong> événements au total'
);

// ======================================================
// Categories view
// ======================================================

$lang_cats_view = array(
	'section_title' => 'Vue des catégories'
	,'cat_name' => 'Nom de la catégorie'
	,'total_events' => 'Total des événements'
	,'upcoming_events' => 'Evénements à venir'
	,'no_cats' => 'Il n\'y a aucune catégorie à afficher.'
	,'stats_string' => 'Il y a <strong>%d</strong> événements dans <strong>%d</strong> catégories'
);

// ======================================================
// Category Events view
// ======================================================

$lang_cat_events_view = array(
	'section_title' => 'Evénements sous \'%s\''
	,'event_name' => 'Nom de l\'événement'
	,'event_date' => 'Date'
	,'no_events' => 'Il n\'y a aucun événement dans cette catégorie.'
	,'stats_string' => '<strong>%d</strong> événement(s) au total'
);

// ======================================================
// cal_search.php
// ======================================================

$lang_event_search_data = array(
	'section_title' => 'Rechercher dans le calendrier',
	'search_results' => 'Résultat de la recherche',
	'category_label' => 'Catégorie',
	'date_label' => 'Date',
	'no_events' => 'Il n\'y a aucun événement dans cette catégorie.',
	'search_caption' => 'Entrer des mots clés...',
	'search_again' => 'Chercher encore',
	'search_button' => 'Chercher',
// Misc.
	'no_results' => 'Aucun résultat trouvé',	
// Stats
	'stats_string1' => '<strong>%d</strong> événement(s) trouvé(s)',
	'stats_string2' => '<strong>%d</strong> événement(s) dans <strong>%d</strong> page(s)'
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
	'terms_message' => 'Prenez un moment s\'il vous plaît, pour étudier les règles ci-dessous. Si vous êtes d\'accord avec et souhaitez continuer à vous enregistrer, clickez sur le bouton "je suis d\'accord" ci-dessous. Pour abandonner l\'enregistrement, clickez sur la flèche "retour arrière" de votre navigateur.<br /><br />Rappelez vous que nous ne sommes pas responsable des événements enregistrés par les utilisateurs dans le calendrier. Nous ne nous portons pas garrant, ni ne garantissons l\'exactitude, l\'exhaustitivté ou l\'utilité des événements enregistrés, et ne sommes pas responsables de leur contenus.<br /><br />Les messages expriment les opinions de l\'auteur de l\'événenement, pas nécessairement celles des administrateurs de %s. N\'importe quel utilisateur qui estime qu\'un événement est répréhensible est encouragé à nous contacter immédiatement par email. Nous avons la capacité d\'enlever le contenu répréhensible et nous ferons tout pour le faire dans un temps raisonnable, si nous déterminons que son retrait est necessaire.<br/><br/>Vous approuvez, par votre utilisation de ce service, que vous n\'emploierez pas cette application de calendrier pour mettre en avant un événement volontairement faux, diffamatoire, imprécis, abusif, vulgaire, obscène, orienté sexuel, menaçant, risquant de compromettre l\'intimité d\'une personne ou violer une loi.<br/><br/>Vous acceptez de ne pas proposer des informations soumises à des droits, sauf si les droits d\'auteur vous appartiennent ou appartiennent à %s.',
	'terms_button' => 'Je suis d\'accord',
	
// Account Info
	'account_info_label' => 'Information du compte',
	'user_name' => 'Nom de login',
	'user_pass' => 'Mot de passe',
	'user_pass_confirm' => 'Confirmer le mot de passe',
	'user_email' => 'Adresse E-mail',
// Other Details
	'other_details_label' => 'Autres détails',
	'first_name' => 'Prénom',
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
	'reg_mail_success' => 'Un email avec les informations sur comment activer votre compte vous a été envoyé à l\'adresse indiquée.',
	'reg_activation_success' => 'Félicitations ! Votre compte est activé et vous pouvez vous connecter avec votre login et votre mot de passe. Merci de votre inscription.',
// Mail messages
	'reg_confirm_subject' => 'Inscrit à %s',
	
// Error messages
	'no_username' => 'Vous devez fournir un nom de login !',
	'invalid_username' => 'Entrer un nom de login constitué seulement de lettres et de nombres, entre 4 et 30 caractères de long !',
	'username_exists' => 'Le nom de login que vous avez entré est déja pris. Proposez un nom différent SVP !',
	'no_password' => 'Vous devez fournir un mot de passe pour ce nouveau compte !',
	'invalid_password' => 'Entrer un mot de passe constitué seulement de lettres et de nombres, entre 4 et 16 caractères de long !',
	'password_is_username' => 'Le mot de passe doit être différent du login !',
	'password_not_match' =>'Le mot de passe entré ne correspond pas à celui de confirmation',
	'no_email' => 'Vous devez fournir une adresse email !',
	'invalid_email' => 'Vous devez fournir une adresse email valide !',
	'email_exists' => 'Un autre utilisateur a déja fourni cette adresse email. Choisissez en une différente s\'il vous plaît !',
	'delete_user_failed' => 'Ce compte utilisateur ne peut pas être détruit',
	'no_users' => 'Il n\'y a pas de compte utilisateur à afficher !',
	'already_logged' => 'Vous êtes déja connecté !',
	'registration_not_allowed' => 'Les inscriptions sont momentanément closes !',
	'reg_email_failed' => 'Une erreur s\'est produite en essayant d\'envoyer l\'email d\'activation !',
	'reg_activation_failed' => 'Une erreur s\'est produite en essaynt d\'activer le compte !'

);
// Message body for email activation
$lang_user_registration_data['reg_confirm_body'] = <<<EOT
Merci pour votre inscription à {CALENDAR_NAME}

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
	'section_title' => 'Administration des événements',
	'events_to_approve' => 'Administration des événements : Evénements à approuver',
	'upcoming_events' => 'Administration des événements : Evénements à venir',
	'past_events' => 'Administration des événements : Evénements passés',
	'add_event' => 'Ajouter un nouvel événement',
	'edit_event' => 'Editer l\'événement',
	'view_event' => 'Afficher l\'événement',
	'approve_event' => 'Approuver l\'événement',
	'update_event' => 'Mettre à jour les informations de l\'événement',
	'delete_event' => 'Détruire l\'événement',
	'events_label' => 'Evénements',
	'auto_approve' => 'Auto-approbation',
	'date_label' => 'Date',
	'actions_label' => 'Actions',
	'events_filter_label' => 'Filtrer les événements',
	'events_filter_options' => array('Afficher tous les événements','Afficher seulement les événements non-approuvés','Afficher seulement les événements à venir','Afficher seulement les événements passés'),
	'picture_attached' => 'Image attachée',
// View Event
	'view_event_name' => 'Evénement : \'%s\'',
	'event_start_date' => 'Date',
	'event_end_date' => 'Jusqu\'à',
	'event_duration' => 'Durée',
	'contact_info' => 'Info Contact',
	'contact_email' => 'Email',
	'contact_url' => 'URL',
// General Info
// Event form
	'edit_event_title' => 'Evénement : \'%s\'',
	'cat_name' => 'Catégorie',
	'event_start_date' => 'Date',
	'event_end_date' => 'Jusqu\'à',
	'contact_info' => 'Info Contact',
	'contact_email' => 'Email',
	'contact_url' => 'URL',
	'no_event' => 'Il n\'y a pas d\'événement à afficher.',
	'stats_string' => '<strong>%d</strong> événement(s) au total',
// Stats
	'stats_string1' => '<strong>%d</strong> événement(s)',
	'stats_string2' => 'Total : <strong>%d</strong> événements sur %d page(s)',
// Misc.
	'add_event_success' => 'Nouvel événement ajouté avec succès',
	'edit_event_success' => 'Evénement mis à jour avec succès',
	'approve_event_success' => 'Evénement approuvé avec succès',
	'delete_confirm' => 'Etes vous sûr de vouloir détruire cet événement ?',
	'delete_event_success' => 'Evénement détruit avec succès',
	'active_label' => 'Activé',
	'not_active_label' => 'Désactivé',
// Error messages
	'no_event_name' => 'Vous devez fournir un nom pour cet événement !',
	'no_event_desc' => 'Vous devez fournir une description pour cet événement !',
	'no_cat' => 'Vous devez sélectionner une catégorie pour cet événement !',
	'no_day' => 'Vous devez sélectionner un jour !',
	'no_month' => 'Vous devez sélectionner un mois !',
	'no_year' => 'Vous devez sélectionner une année !',
	'non_valid_date' => 'Entrer une date valide SVP !',
	'end_days_invalid' => 'Assurez vous que le champ \'Jours\' sous \'Durée\' est constitué seulement de nombres !',
	'end_hours_invalid' => 'Assurez vous que le champ \'Heures\' sous \'Durée\' est constitué seulement de nombres !',
	'end_minutes_invalid' => 'Assurez vous que le champ \'Minutes\' sous \'Durée\' est constitué seulement de nombres !',
	'file_too_large' => 'L\'image que vous avez attaché est plus grande que %s Koctets !',
	'non_valid_extension' => 'Le format du fichier attaché n\'est pas supporté !',
	'delete_event_failed' => 'Cet événement ne peut pas être détruit',
	'approve_event_failed' => 'Cet événement ne peut pas être approuvé',
	'no_events' => 'Il n\'y a pas d\'événement à afficher !',
	'move_image_failed' => 'Le système n\'a pas réussi à déplacer l\'image !',
	'non_valid_dimensions' => 'La largeur ou la hauteur de l\'image est supérieure à %s pixels !'
);

// ======================================================
// admin_categories.php
// ======================================================

if (defined('ADMIN_CATS_PHP')) 

$lang_cat_admin_data = array(
	'section_title' => 'Administration des catégories',
	'add_cat' => 'Ajouter une nouvelle catégorie',
	'edit_cat' => 'Editer la catégorie',
	'update_cat' => 'Mettre à jour les informations de la catégorie',
	'delete_cat' => 'Détruire la catégorie',
	'events_label' => 'Evénements',
	'visibility' => 'Visibilité',
	'actions_label' => 'Actions',
	'users_label' => 'Utilisateurs',
	'admins_label' => 'Administrateurs',
// General Info
	'general_info_label' => 'Information générale',
	'cat_name' => 'Nom de la catégorie',
	'cat_desc' => 'Description de la catégorie',
	'cat_color' => 'Couleur',
	'pick_color' => 'Choisir une couleur !',
	'status_label' => 'Statut',
// Administrative Options
	'admin_label' => 'Options d\'administration',
	'auto_admin_appr' => 'Approuver automatiquement les soumissions des administrateurs',
	'auto_user_appr' => 'Approuver automatiquement les soumissions des utilisateurs',
// Stats
	'stats_string1' => '<strong>%d</strong> catégories',
	'stats_string2' => 'Actives : <strong>%d</strong>&nbsp;&nbsp;&nbsp;Total : <strong>%d</strong>&nbsp;&nbsp;&nbsp;sur %d page(s)',
// Misc.
	'add_cat_success' => 'Nouvelle catégorie ajoutée avec succès',
	'edit_cat_success' => 'Catégorie mise à jour avec succès',
	'delete_confirm' => 'Etes vous sûr de vouloir détruire cette catégorie ?',
	'delete_cat_success' => 'Catégorie détruite avec succès',
	'active_label' => 'Activée',
	'not_active_label' => 'Désactivée',
// Error messages
	'no_cat_name' => 'Vous devez fournir un nom pour cette catégorie !',
	'no_cat_desc' => 'Vous devez fournir une description pour cette catégorie !',
	'no_color' => 'Vous devez fournir une couleur pour cette catégorie !',
	'delete_cat_failed' => 'Cette catégorie ne peut pas être détruite',
	'no_cats' => 'Il n\'y a pas de catégorie à afficher !',
	'cat_has_events' => 'Cette catégorie contient %d événement(s) et ne peut donc pas être détruite !<br>Détruisez les événements restants dans cette catégorie et recommencer à nouveau !'

);
// ======================================================
// admin_users.php
// ======================================================

if (defined('ADMIN_USERS_PHP')) 

$lang_user_admin_data = array(
	'section_title' => 'Administration des utilisateurs',
	'add_user' => 'Ajouter un nouvel utilisateur',
	'edit_user' => 'Editer les informations de l\'utilisateur',
	'update_user' => 'Mettre à jour les informations de l\'utilisateur',
	'delete_user' => 'Détruire le compte de l\'utilisateur',
	'last_access' => 'Dernier accès',
	'actions_label' => 'Actions',
	'active_label' => 'Activée',
	'not_active_label' => 'Désactivée',
// Account Info
	'account_info_label' => 'Information du compte',
	'user_name' => 'Nom de login',
	'user_pass' => 'Mot de passe',
	'user_pass_confirm' => 'Confirmer le mot de passe',
	'user_email' => 'E-mail',
	'group_label' => 'Groupe d\'appartenance',
	'status_label' => 'Statut du compte',
// Other Details
	'other_details_label' => 'Autres détails',
	'first_name' => 'Prénom',
	'last_name' => 'Nom',
	'user_website' => 'Site web',
	'user_location' => 'Localisation',
	'user_occupation' => 'Profession',
// Stats
	'stats_string1' => '<strong>%d</strong> utilisateurs',
	'stats_string2' => '<strong>%d</strong> utilisateur(s) sur %d page(s)',
// Misc.
	'select_group' => 'En sélectionner un...',
	'add_user_success' => 'Compte utilisateur ajouté avec succès',
	'edit_user_success' => 'Compte utilisateur mis à jour avec succès',
	'delete_confirm' => 'Etes vous sûr de vouloir détruire ce compte ?',
	'delete_user_success' => 'Compte utilisateur détruit avec succès',
	'update_pass_info' => 'Laisser le champ du mot de passe vide si vous n\'avez pas besoin de le changer',
	'access_never' => 'Jamais',
// Error messages
	'no_username' => 'Vous devez fournir un nom de login !',
	'invalid_username' => 'Entrer un nom de login constitué seulement de lettres et de nombres, entre 4 et 30 caractères de long !',
	'invalid_password' => 'Entrer un mot de passe constitué seulement de lettres et de nombres, entre 4 et 16 caractères de long !',
	'password_is_username' => 'Le mot de passe doit être différent du nom de login !',
	'password_not_match' =>'Le mot de passe que vou savez entré ne correspond pas à celui de confirmation',
	'invalid_email' => 'Vous devez fournir une adresse email valide !',
	'email_exists' => 'Un autre utilisateur a déja fourni cette adresse email. Choisissez en une différente s\'il vous plaît !',
	'username_exists' => 'Le nom de login que vous avez entré est déja pris. Proposez un nom différent SVP !',
	'no_email' => 'Vous devez fournir une adresse email !',
	'invalid_email' => 'Vous devez fournir une adresse email valide !',
	'no_password' => 'Vous devez fournir un mot de passe pour ce nouveau compte !',
	'no_group' => 'Sélectionner un groupe d\'appartenance pour cet utilisateur !',
	'delete_user_failed' => 'Ce compte utilisateur ne peut pas être détruit',
	'no_users' => 'Il n\'y a pas de compte utilisateur à afficher !'

);

// ======================================================
// admin_groups.php
// ======================================================

if (defined('ADMIN_GROUPS_PHP')) 

$lang_group_admin_data = array(
	'section_title' => 'Administration des groupes',
	'add_group' => 'Ajouter un nouveau groupe',
	'edit_group' => 'Editer le groupe',
	'update_group' => 'Mettre à jour les informations du groupe',
	'delete_group' => 'Détruire le groupe',
	'view_group' => 'Afficher le groupe',
	'users_label' => 'Membres',
	'actions_label' => 'Actions',
// General Info
	'general_info_label' => 'Information générale',
	'group_name' => 'Nom du groupe',
	'group_desc' => 'Description du groupe',
// Group Access Level
	'access_level_label' => 'Niveau d\'accès du groupe',
	'has_admin_access' => 'Les utilisateurs de ce groupe ont l\'accès administrateur',
	'can_manage_accounts' => 'Les utilisateurs de ce groupe peuvent administrer les comptes',
	'can_change_settings' => 'Les utilisateurs de ce groupe peuvent changer la configuration du calendrier',
	'can_manage_cats' => 'Les utilisateurs de ce groupe peuvent gérer les catégories',
	'upl_need_approval' => 'Les événements soumis nécessitent l\'approbation d\'un administrateur',
// Stats
	'stats_string1' => '<strong>%d</strong> groupe(s)',
	'stats_string2' => 'Total : <strong>%d</strong> groupe(s) dans %d page(s)',
	'stats_string3' => 'Total : <strong>%d</strong> utilisateur(s) sur %d page(s)',
// View Group Members
	'group_members_string' => 'Membres du groupe \'%s\'',
	'username_label' => 'Nom de login',
	'firstname_label' => 'Prénom',
	'lastname_label' => 'Nom',
	'email_label' => 'Email',
	'last_access_label' => 'Dernier accès',
	'edit_user' => 'Editer l\'utilisateur',
	'delete_user' => 'Détruire l\'utilisateur',
// Misc.
	'add_group_success' => 'Nouveau groupe ajouté avec succès',
	'edit_group_success' => 'Groupe mis à jour avec succès',
	'delete_confirm' => 'Etes vous sûr de vouloir détruire ce groupe ?',
	'delete_user_confirm' => 'Etes vous sûr de vouloir détruire ce groupe ?',
	'delete_group_success' => 'Groupe détruit avec succès',
	'no_users_string' => 'Il n\'y a pas d\'utilisateur dans ce groupe',
// Error messages
	'no_group_name' => 'Vous devez fournir un nom pour ce groupe !',
	'no_group_desc' => 'Vous devez fournir une description pour ce groupe !',
	'delete_group_failed' => 'Ce groupe ne peut pas être détruit',
	'no_groups' => 'Il n\'y a pas de groupe à afficher !',
	'group_has_users' => 'Ce groupe contient %d utilisateur(s) et ne peut donc pas être détruit!<br>Retirez les utilisateurs de ce groupe et recommencez SVP !'

);

// ======================================================
// admin_settings.php / admin_settings_template.php / 
// admin_settings_updates.php
// ======================================================

if (defined('SETTINGS_PHP')) 

$lang_settings_data = array(
	'section_title' => 'Réglages du calendrier'
// Links
	,'admin_links_text' => 'Choisir la section'
	,'admin_links' => array('Réglages principaux','Configuration du Template','Mise à jour produit')
// General Settings
	,'general_settings_label' => 'Paramètres généraux'
	,'calendar_name' => 'Nom du calendrier'
	,'calendar_description' => 'Description du calendrier'
	,'calendar_admin_email' => 'Email de l\'administrateur du calendrier'
	,'cookie_name' => 'Nom du cookie utilisé par le script'
	,'cookie_path' => 'Chemin du cookie utilisé par le script'
	,'debug_mode' => 'Activer le mode debug'
// Environment Settings
	,'env_settings_label' => 'Paramètres d\'environnement'
	,'lang' => 'Langage'
		,'lang_name' => 'Code langue'
		,'lang_native_name' => 'Langue'
		,'lang_trans_date' => 'Traduit le'
		,'lang_author_name' => 'Auteur'
		,'lang_author_email' => 'E-mail'
		,'lang_author_url' => 'Site web'
	,'charset' => 'Encodage des caractères'
	,'theme' => 'Thème'
		,'theme_name' => 'Nom du thème'
		,'theme_date_made' => 'Fait le'
		,'theme_author_name' => 'Auteur'
		,'theme_author_email' => 'E-mail'
		,'theme_author_url' => 'Site web'
	,'timezone' => 'Décalage horaire'
	,'time_format' => 'Format d\'affichage de l\'heure'
		,'24hours' => '24 Heures'
		,'12hours' => '12 Heures'
	,'auto_daylight_saving' => 'Ajustement automatique de l\'heure d\'été/hiver (DST)'
	,'main_table_width' => 'Largeur de la Table principale (Pixels ou %)'
	,'day_start' => 'Les semaines commence le'
	,'default_view' => 'Affichage par défaut'
	,'search_view' => 'Permettre la recherche'
	,'archive' => 'Afficher les événements passés'
	,'events_per_page' => 'Nombre d\'événements par page'
	,'sort_order' => 'Ordre de tri par défaut'
		,'sort_order_title_a' => 'Titre ascendant'
		,'sort_order_title_d' => 'Title descendant'
		,'sort_order_date_a' => 'Date croissante'
		,'sort_order_date_d' => 'Date décroissante'
// User Settings
	,'user_settings_label' => 'Réglages utilisateur'
	,'allow_user_registration' => 'Permettre l\'inscription des utilisateurs'
	,'reg_duplicate_emails' => 'Autoriser la duplication des emails'
	,'reg_email_verify' => 'Permettre l\'activation des compte par email'
// Event View
	,'event_view_label' => 'Affichage des événements'
	,'popup_event_mode' => 'Affichage des événements en Pop-up'
	,'popup_event_width' => 'Largeur de la fenêtre Pop-up'
	,'popup_event_height' => 'Hauteur de la fenêtre Pop-up'
// Add Event View
	,'add_event_view_label' => 'Ajout des événements'
	,'add_event_view' => 'Activé'
	,'addevent_allow_html' => 'Permettre les codes <b>BB</b> dans la description'
	,'addevent_allow_contact' => 'Autoriser Contact'
	,'addevent_allow_email' => 'Autoriser Email'
	,'addevent_allow_url' => 'Autoriser URL'
	,'addevent_allow_picture' => 'Autoriser Images'
	,'new_post_notification' => 'Notification de nouvelle entrée'
// Calendar View
	,'calendar_view_label' => 'Vue mensuelle (calendrier)'
	,'monthly_view' => 'Activée'
	,'cal_view_max_chars' => 'Nombre maximum de caractères pour la description'
// Flyer View
	,'flyer_view_label' => 'Vue des catégories'
	,'flyer_view' => 'Activée'
	,'flyer_show_picture' => 'Afficher les images dans la vue des catégories'
	,'flyer_view_max_chars' => 'Nombre maximum de caractères pour la description'
// Weekly View
	,'weekly_view_label' => 'Vue hebdomadaire'
	,'weekly_view' => 'Activée'
	,'weekly_view_max_chars' => 'Nombre maximum de caractères pour la description'
// Daily View
	,'daily_view_label' => 'Vue journalière'
	,'daily_view' => 'Activée'
	,'daily_view_max_chars' => 'Nombre maximum de caractères pour la description'
// Categories View
	,'categories_view_label' => 'Vue par catégorie'
	,'cats_view' => 'Activée'
	,'cats_view_max_chars' => 'Nombre maximum de caractères pour la description'
// Mini Calendar
	,'mini_cal_label' => 'Mini Calendrier'
	,'mini_cal_def_picture' => 'Image par défaut'
	,'mini_cal_display_picture' => 'Affiche l\'image'
	,'mini_cal_diplay_options' => array('Aucune','Image par défaut', 'Image du jour','Image de la semaine','Image aléatoire')
// Picture Settings
	,'picture_settings_label' => 'Réglages pour les images'
	,'max_upl_dim' => 'Largeur et hauteur max. pour les images téléchargées'
	,'max_upl_size' => 'Taille maximum pour les images téléchargées (Upload) (en Koctets)'
	,'picture_chmod' => 'Mode par défaut pour les images (CHMOD) (en base 8 - Octal)'
	,'allowed_file_extensions' => 'Extensions de fichier acceptées pour les images téléchargées'
// Form Buttons
	,'update_config' => 'Enregistrer'
	,'restore_config' => 'Restaurer d\'origine'
// Misc.
	,'update_settings_success' => 'Réglages mis à jour avec succès'
	,'restore_default_confirm' => 'Etes vous sûr de vouloir remettre les réglages par défaut ?'
// Template Configuration
	,'template_type' => 'Type de gabarit'
	,'template_header' => 'Personnalisation de l\'entête'
	,'template_footer' => 'Personnalisation du pied de page'
	,'template_status_default' => 'Utiliser le gabarit par défaut'
	,'template_status_custom' => 'Utiliser le gabarit suivant :'
	,'template_custom' => 'Gabarit personnalisé'

	,'info_meta' => 'Meta Information'
	,'info_status' => 'Contrôle de statut'
	,'info_status_default' => 'Désactiver ce contenu'
	,'info_status_custom' => 'Afficher le contenu suivant :'
	,'info_custom' => 'Contenu personnalisé'

	,'dynamic_tags' => 'Tags Dynamiques'

// Product Updates
	,'updates_check_text' => 'Attendez le temps de retrouver le sinformations sur ce serveur...'
	,'updates_no_response' => 'Pas de réponse du serveur. Essayez plus tard.'
	,'avail_updates' => 'Mises à jour disponibles'
	,'updates_download_zip' => 'Télécharger le package ZIP (.zip)'
	,'updates_download_tgz' => 'Télécharger le package TGZ (.tar.gz)'
	,'updates_released_label' => 'Date de version : %s'
	,'updates_no_update' => 'Vous utilisez la dernière version disponible. La mise à jour n\'est pas nécessaire.'
);

// ======================================================
// cal_mini.inc.php
// ======================================================

$lang_mini_cal = array(
	'def_pic' => 'Image par défaut'
	,'daily_pic' => 'Image du jour (%s)'
	,'weekly_pic' => 'Image de la semaine (%s)'
	,'rand_pic' => 'Image aléatoire (%s)'
	,'post_event' => 'Envoyer un nouvel événement'
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
	'section_title' => 'Fenêtre d\'identification'
// General Settings
	,'login_intro' => 'Entrer votre login et mot de passe pour vous connecter'
	,'username' => 'Login'
	,'password' => 'Mot de passe'
	,'remember_me' => 'Se rappeler de moi'
	,'login_button' => 'Login'
// Errors
	,'invalid_login' => 'Vérifiez vos information de login et re-essayer !'
	,'no_username' => 'Vous devez fournir un nom de login !'
	,'already_logged' => 'Vous êtes déja connecté !'
);

// ======================================================
// logout.php
// ======================================================

// To Be Done


// old structure	

$maand[0]="Chaque mois";
$maand[1]="Janvier";
$maand[2]="Février";
$maand[3]="Mars";
$maand[4]="Avril";
$maand[5]="Mai";
$maand[6]="Juin";
$maand[7]="Juillet";
$maand[8]="Août";
$maand[9]="Septembre";
$maand[10]="Octobre";
$maand[11]="Novembre";
$maand[12]="Décembre";

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
        case "lang_nativename": $new = "Français";    break;
        case "lang_charset": $new = "ISO-8859-1";    break;
				// Translations
        case "yes": $new = "Oui";    break;
        case "no": $new = "Non";    break;
        case "welcometo": $new = "Bienvenue à";    break;
        case "admin": $new = "Administration";    break;
        case "adminoptions": $new = "Options d'administration";    break;
        case "cate": $new = "Par catégories"; break;
        case "day": $new = "Journalier"; break;
        case "week": $new = "Semaine"; break;
        case "weeklyview": $new = "Hebdomadaire"; break;
        case "cal": $new = "Mensuel"; break;
        case "nocats": $new = "Pas de catégorie pour l'instant"; break;
        case "addcat": $new = "Ajouter une nouvelle catégorie"; break;
        case "cats": $new = "Catégories"; break;
        case "addevent": $new = "Ajouter un événement"; break;
        case "outof": $new = "Historique"; break;
        case "upcomingevents": $new = "Evénements à venir"; break;
        case "totalevents": $new = "Total des événements"; break;
        case "events": $new = "Evénements"; break;
        case "errors": $new = "Erreurs"; break;
        case "weeklyevents": $new = "Evénements hebdomadaires"; break;
        case "eventdetails": $new = "Détail de l'événement"; break;
        case "eventitle": $new = "Titre de l'événement"; break;
        case "description": $new = "Description de l'événement"; break;
        case "choosecat": $new = "Choisir une catégorie"; break;
        case "selectyear": $new = "Année"; break;
        case "selectmonth": $new = "Mois"; break;
        case "selectday": $new = "Jour"; break;
        case "everyyear": $new = "Chaque année"; break;
        case "everymonth": $new = "Chaque mois"; break;
        case "bdate": $new = "Date"; break;
        case "notitle": $new = "Vous devez donner un titre pour l'événement !"; break;
        case "nodescription": $new = "Vous devez donner une description pour l'événement"; break;
        case "noday": $new = "Vous devez sélectionner un jour !"; break;
        case "nomonth": $new = "Vous devez sélectionner un mois !"; break;
        case "noyear": $new = "Vous devez sélectionner une année !"; break;
        case "nocat": $new = "Vous devez sélectionner une catégorie !"; break;
        case "novaliddate": $new = "Entrer une date valide SVP !"; break;
        case "kblimit": $new = "Koctets maximum"; break;
        case "back": $new = "Retour"; break;
        case "action": $new = "Actions"; break;
        case "nononapproved": $new = "Aucun événement à approuver"; break;
        case "nonapproved": $new = "Evénement(s) à approuver"; break;
        case "autoapprove": $new = "Evénement auto-approuvé"; break;
        case "cat": $new = "Catégorie"; break;
        case "view": $new = "Afficher l'événement"; break;
        case "edit": $new = "Editer"; break;
        case "updateevent": $new = "Mettre à jour l'événement"; break;
        case "approve": $new = "Approuver cet événement"; break;
        case "appreventok": $new = "Evénement approuvé avec succès"; break;
        case "cantapprevent": $new = "L'événement spécifié ne peut pas être approuvé"; break;
        case "moreinfo": $new = "Plus d'info"; break;
        case "editcat": $new = "Editer la catégorie"; break;
        case "delcat": $new = "Détruire la catégorie"; break;
        case "edit": $new = "Editer"; break;
        case "del": $new = "Détruire"; break;
        case "name": $new = "Nom"; break;
        case "update": $new = "Mettre à jour"; break;
        case "reallydelcat": $new = "Etes vous sûr de vouloir détruire cette catégorie ? Tous les événements associés avec cette catégorie seont définitivement détruits !"; break;
        case "noback": $new = "Aïe, revenez en arrière !"; break;
        case "deleventok": $new = "Evénement détruit avec succès"; break;
        case "cantdelevent": $new = "L'événement spécifié ne peut pas être détruit"; break;
        case "surecat": $new = "Oui, le détruire maintenant !"; break;
        case "noevents": $new = "Pas d'événement"; break;
        case "numbevents": $new = "Evénements dans "; break;
        case "upevent": $new = "Mettre à jour l'événement"; break;
        case "delev": $new = "Détruire"; break;
        case "currentpic": $new = "Image actuelle"; break;
        case "delpic": $new = "Détruire cette image"; break;
        case "nooutofdate": $new = "Pas d'événement périmé."; break;
        case "delalloodev": $new = "Détruire tous les événements périmés"; break;
        case "delevok": $new = "Etes vous certain de vouloir détruire cet événement ?"; break;
        case "delalloodevok": $new = "Tous les détruire !"; break;
        case "prevm": $new = "Mois précédant"; break;
        case "nextm": $new = "Mois suivant"; break;
        case "today": $new = "Aujourd'hui"; break;
        case "eventstoday": $new = "Evénement(s) du jour"; break;
        case "readmore": $new = "Voir plus"; break;
        case "nextday": $new = "Jour suivant"; break;
        case "prevday": $new = "Jour précédant"; break;
        case "askedday": $new = "Jour demandé"; break;
        case "nextweek": $new = "Semaine suivante"; break;
        case "prevweek": $new = "Semaine précédante"; break;
        case "weeknr": $new = "Numéro de la semaine"; break;
        case "eventsthisweek": $new = "Evénement(s) de "; break;
        case "till": $new = "jusqu'au"; break;
        case "thankyou": $new = "Merci d'avoir saisi un événement, il apparaîtra rapidement après validation !"; break;
        case "eventedited": $new = "Evénement mis à jour avec succès!"; break;
				case "op": $new = "sur"; break;
       	# here start the new not yet translated language vars
        case "disabled": $new = "Cette section a été désactivée"; break;
       	case "searchbutton": $new = "Chercher"; break;
       	case "searchtitle": $new = "Recherche"; break;
       	case "searchcaption": $new = "Saisissez des mots clés"; break;
       	case "searchresults": $new = "Résultat de la recherche"; break;
       	case "searchagain": $new = "Chercher encore"; break;
      	case "onedate": $new = "Une date"; break;
        case "moredates": $new = "Plus de dates"; break;
      	case "moredatesexplain": $new = "Plus de dates : 'dd-mm-yyyy;dd-mm-yyyy' si le jour est en premier, taper 01, idem pour le mois! sans-';' à la fin !"; break;
      	case "email": $new = "Email"; break;
      	case "results": $new = "Resultats"; break;
      	case "noresults": $new = "Pas de résultats"; break;
        case "wronglogin": $new = "Vérifiez vos informations de login et recommencez SVP !"; break;
        case "userman": $new = "Administration des utilisateurs"; break;
        case "users": $new = "tilisateurs"; break;
        case "logout": $new = "Déconnexion"; break;
        case "deluser": $new = "Détruire l'utilisateur"; break;
        case "addnewuser": $new = "Ajouter un nouvel utilisateur"; break;
        case "loginscreen": $new = "Fenêtre d'authentification"; break;
        case "login": $new = "Login"; break;
        case "password": $new = "Mot de passe"; break;
        case "rememberme": $new = "Se rappeler de moi"; break;
				case "loginmsg": $new = "Entrer votre nom de login et votre mot de passe"; break;
				case "nologinname": $new = "Entrez un nom de login SVP !"; break;
        case "userwarning": $new = "Retenez bien votre mot de passe, car vous ne pourrez pas le retrouver !"; break;
        case "userdelok": $new = "Etes vous sûr de détruire cet utilisateur ?"; break;
        case "contact": $new = "Contact"; break;
        case "contactinfo": $new = "Info Contact"; break;
        case "otherdetails": $new = "Autres Détails"; break;
        case "picture": $new = "Image"; break;
        case "filetolarge": $new = "Le fichier attaché est trop gros !"; break;
        case "extensionnovalid": $new = "L'extension de fichier n'est pas valide !"; break;
        case "flyerlink": $new = "Catégories"; break;
        case "mailtitle": $new = "Contrôler l'administration du calendrier rapidement !"; break;
        case "mailbody": $new = "Quelqu'un a soumis un événement !"; break;
        case "continuebutton": $new = "Clicker pour continuer"; break;
        case "returnbutton": $new = "Revenir à la page d'accueil"; break;
        case "in": $new = "dans"; break;
        case "uploadapplnk": $new = "Approuver"; break;
        case "settingslnk": $new = "Réglages"; break;
        case "categorieslnk": $new = "Catégories"; break;
        case "userslnk": $new = "Utilisateurs"; break;
        case "groupslnk": $new = "Groupes"; break;
        case "myprofile": $new = "Profil"; break;
        case "status": $new = "Statut"; break;
        case "options": $new = "Options"; break;
        case "autoappr": $new = "Auto-approbation"; break;
        case "active": $new = "Activé"; break;
        case "inactive": $new = "Désactivé"; break;
        case "admincats": $new = "Category Administration"; break;
        case "generalinfo": $new = "Information génerale"; break;
        case "catname": $new = "Nom de la catégorie"; break;
        case "catdesc": $new = "Description de la catégorie"; break;
        case "color": $new = "Couleur"; break;
        case "pickcolor": $new = "Choisir une couleur !"; break;
        case "autouserappr": $new = "Approuver automatiquement les soumissions utilisateur"; break;
        case "autoadminappr": $new = "Approuver automatiquement les soumissions administrateur"; break;
        case "nocatname": $new = "Vous devez fournir un nom de catégorie !"; break;
        case "nocatdesc": $new = "Vous devez fournir une description de catégorie !"; break;
        case "nocolor": $new = "Vous devez fournir une couleur !"; break;
        case "total": $new = "Total"; break;
        case "admins": $new = "Administrateurs"; break;
        case "updatecat": $new = "Mettre à jour la catégorie"; break;
        case "catedited": $new = "Catégorie mise à jour avec succès !"; break;
        case "delcatmoreevents": $new = "Cette catégorie contient %d événement(s) et ne peut donc pas être détruite !<br>Détruisez les événements restants dans cette catégorie et recommencez SVP !"; break;
        case "delcatok": $new = "Catégorie détruite avec succès !"; break;
        
        default: $new = "<b>".$word."</b> en attente de traduction !";    break;

    }
    return $new;
}
?>