<?PHP

// New language structure
$lang_info = array (
	'name' => 'Danish'
	,'nativename' => 'Dansk' // Language name in native language. E.g: 'Fran�ais' for 'French'
	,'locale' => array('da','dansk') // Standard locale alternatives for a specific language. For reference, go to: http://www.php.net/manual/en/function.setlocale.php
	,'charset' => 'ISO-8859-1' // For reference, go to : http://www.w3.org/International/O-charset-lang.html
	,'direction' => 'ltr' // 'ltr' for Left to Right. 'rtl' for Right to Left languages such as Arabic.
	,'author' => 'Bj�rn Nielsen'
	,'author_email' => 'Bedsize@hotmail.com'
	,'author_url' => 'http://www.netlinks.dk'
	,'transdate' => '06/23/2004'
);

$lang_general = array (
	'yes' => 'Ja'
	,'no' => 'Nej'
	,'back' => 'Tilbage'
	,'continue' => 'Forts�t'
	,'close' => 'Luk'
	,'errors' => 'Fejl'
	,'days' => 'Dage'
	,'months' => 'M�neder'
	,'years' => '�r'
	,'hours' => 'Timer'
	,'minutes' => 'Minutter'
	,'everyday' => 'Every Day'
	,'everymonth' => 'Alle M�neder'
	,'everyyear' => 'Alle �r'
);

// Date formats, For reference, go to : http://www.php.net/manual/en/function.strftime.php
$lang_date_format = array (
	'full_date' => '%A, %B %d, %Y' // e.g. Wednesday, June 05, 2002
	,'full_date_time_24hour' => '%A, %B %d, %Y At %H:%M' // e.g. Wednesday, June 05, 2002
	,'full_date_time_12hour' => '%A, %B %d, %Y At %I:%M %p' // e.g. Wednesday, June 05, 2002
	,'day_month_year' => '%d %m %Y'
	,'local_date' => '%c'
	,'mini_date' => '%a, %d %b, %Y'
	,'month_year' => '%B %Y'
	,'day_of_week' => array('S�ndag','Mandag','Tirsdag','Onsdag','Torsdag','Fredag','L�rdag')
	,'months' => array('Januar','Februar','Marts','April','Maj','Juni','Juli','August','September','Oktober','November','December')
);

$lang_system = array (
	'system_caption' => 'System Besked'
  ,'page_access_denied' => 'Du har ikke rettigheder nok til at tilg� denne side'
  ,'operation_denied' => 'Du har ikke rettigheder nok til at udf�re denne funktion'
	,'section_disabled' => 'Denne sektion er lukket'
  ,'non_exist_cat' => 'Den valgte katagori findes ikke!'
  ,'non_exist_event' => 'Den valgte begivenhed findes ikke!'
  ,'param_missing' => 'De valgte parametre er ukorrekte!'
  ,'no_events' => 'Ingen begivenheder!'
);


// ======================================================
// Add Event view
// ======================================================

$lang_add_event_view = array(
	'section_title' => 'Tilf�j Begivenhed'
	,'edit_event' => 'Rediger Begivenhed [id%d] \'%s\''
	,'update_event_button' => 'Opdater Begivenhed'

// Event details
	,'event_details_label' => 'Begivenheds Detalier'
	,'event_title' => 'Begivenheds Titel'
	,'event_desc' => 'Begivenheds uddybning'
	,'event_cat' => 'Katagori'
	,'choose_cat' => 'V�lg en Katagori'
	,'event_date' => 'Begivenheds Dato'
	,'day_label' => 'Dag'
	,'month_label' => 'M�ned'
	,'year_label' => '�r'
	,'start_date_label' => 'Start Tidspunkt'
	,'start_time_label' => 'KL.'
	,'end_date_label' => 'Varighed'
	,'all_day_label' => 'Hele Dagen'
// Contact details
	,'contact_details_label' => 'Kontakt Detalier'
	,'contact_info' => 'Kontakt Info'
	,'contact_email' => 'Kontakt Email'
	,'contact_url' => 'Kontakt URL'
// Other details
	,'other_details_label' => 'Andre Detalier'
	,'picture_file' => 'Billed Fil'
	,'file_upload_info' => '(%d KBytes begr�nsning - Gyldige formater : %s )' 
	,'del_picture' => 'Slet aktuelle Billede ?'
// Administrative options
	,'admin_options_label' => 'Administrative Muligheder'
	,'auto_appr_event' => 'Auto-Godkend Begivenhed'

// Error messages
	,'no_title' => 'Du skal skrive en begivenheds titel !'
	,'no_desc' => 'Du skal skrive en beskrivelse af denne begivenhed !'
	,'no_cat' => 'Du skal v�lge en katagori fra drop down menuen !'
	,'date_invalid' => 'Du skal v�lge en gyldig dato for denne begivenhed !'
	,'end_days_invalid' => 'Datoen du har valgt i \'Days\' feltet er ikke gyldig !'
	,'end_hours_invalid' => 'Den v�rdi du har valgt i \'Hours\' feltet er ikke gyldig !'
	,'end_minutes_invalid' => 'Den v�rdi du har valgt i \'Minutes\' feltet er ikke gyldig !'

	,'file_too_large' => 'Den vedh�ftede fil er for stor ! (%d KBytes limit)'
	,'file_invalid' => 'Den vedh�ftede fil er ikke gyldig ! (Valid extensions: %s)'

// Misc. messages
	,'submit_event_pending' => 'Din begivenhed venter godkendelse. Mange tak! for din tilf�jelse!'
	,'submit_event_approved' => 'Din begivenhed er automatisk accepteret. Mange tak! for din tilf�jelse!!'
);

// ======================================================
// Category Events view
// ======================================================

$lang_event_view = array(
	'section_title' => 'Begivenhed: \'%s\''
	,'cat_name' => 'Katagori'
	,'event_start_date' => 'Dato'
	,'event_end_date' => 'Indtil'
	,'contact_info' => 'Kontakt Info'
	,'contact_email' => 'Email'
	,'contact_url' => 'URL'
	,'no_event' => 'Der er ingen begivenhed at vise.'
	,'stats_string' => '<strong>%d</strong> Begivenheder ialt'
);

// ======================================================
// Categories view
// ======================================================

$lang_cats_view = array(
	'section_title' => 'Vis Katagorier'
	,'cat_name' => 'Katagori navn'
	,'total_events' => 'Alle begivenheder'
	,'upcoming_events' => 'Fremtidige begivenheder'
	,'no_cats' => 'Der er ingen katagorier at vise.'
	,'stats_string' => 'Der er <strong>%d</strong> Begivenheder i <strong>%d</strong> Karagorierne'
);

// ======================================================
// Category Events view
// ======================================================

$lang_cat_events_view = array(
	'section_title' => 'Begivenheder under \'%s\''
	,'event_name' => 'Begivenheds navn'
	,'event_date' => 'Dato'
	,'no_events' => 'Der er ingen begivenheder under denne katagori.'
	,'stats_string' => '<strong>%d</strong> Begivenheder ialt'
);

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

// To Be Done

// ======================================================
// admin_categories.php
// ======================================================

// To Be Done

// ======================================================
// settings.php
// ======================================================

if (defined('SETTINGS_PHP')) 

$lang_settings_data = array(
	'section_title' => 'Kalender Indstillinger'
// General Settings
	,'general_settings_label' => 'Generalle indstillinger'
	,'calendar_name' => 'Kalenderns navn'
	,'calendar_description' => 'Kalender beskrivelse'
	,'calendar_admin_email' => 'Administrators Email'
	,'cookie_name' => 'Navn p� den cookie der bruges af scriptet'
	,'cookie_path' => 'Stien p� den cookie der bruges af scriptet'
	,'debug_mode' => 'Brug fejlfindings tilstand'
// Environment Settings
	,'env_settings_label' => 'Milj� indstillinger'
	,'lang' => 'Sprog'
		,'lang_name' => 'Sprog'
		,'lang_native_name' => 'Native navn'
		,'lang_trans_date' => 'Oversat den'
		,'lang_author_name' => 'Forfatter'
		,'lang_author_email' => 'E-mail'
		,'lang_author_url' => 'Website'
	,'charset' => 'Karakter s�t'
	,'theme' => 'Tema'
		,'theme_name' => 'Tema navn'
		,'theme_date_made' => 'Lavet den'
		,'theme_author_name' => 'Forfatter'
		,'theme_author_email' => 'E-mail'
		,'theme_author_url' => 'Website'
	,'timezone' => 'Tidszone'
	,'time_format' => 'Tids visnings format'
		,'24hours' => '24 timers'
		,'12hours' => '12 timers'
	,'auto_daylight_saving' => 'Skift automatisk til sommertid'
	,'main_table_width' => 'Breden p� Main Table (Pixels eller %)'
	,'day_start' => 'Ugen starter om'
	,'default_view' => 'Som Standart'
	,'search_view' => 'Brug S�ge funktion'
	,'archive' => 'Vis tidligere begivenheder'
	,'events_per_page' => 'Antal begivenheder pr. side'
// Event View
	,'event_view_label' => 'Vis Begivenheder'
	,'popup_event_mode' => 'Pop-up Begivenhed'
	,'popup_event_width' => 'Breden p� Pop-up vinduet'
	,'popup_event_height' => 'H�jden p� Pop-up vinduet'
// Add Event View
	,'add_event_view_label' => 'Vis tilf�j Begivenhed'
	,'add_event_view' => 'Aktiv'
	,'addevent_allow_html' => 'Tillad <b>BB Code</b> I beskrivelse'
	,'addevent_allow_contact' => 'Tillad kontakt'
	,'addevent_allow_email' => 'Tillad Email'
	,'addevent_allow_url' => 'Tillad URL'
	,'addevent_allow_picture' => 'Tillad Billeder'
	,'new_post_notification' => 'Besked ved nyt Indl�g'
// Calendar View
	,'calendar_view_label' => 'Vis Kalender(M�nedeligt)'
	,'monthly_view' => 'Aktiv'
	,'cal_view_max_chars' => 'Maksimale antal tegn i en beskrivelse'
// Flyer View
	,'flyer_view_label' => 'Vis Flyver'
	,'flyer_view' => 'Aktiv'
	,'flyer_show_picture' => 'Vis billeder i Flyver'
	,'flyer_view_max_chars' => 'Maksimale antal tegn i en beskrivelse'
// Weekly View
	,'weekly_view_label' => 'Vis Ugentligt'
	,'weekly_view' => 'Aktiv'
	,'weekly_view_max_chars' => 'Maksimale antal tegn i en beskrivelse'
// Daily View
	,'daily_view_label' => 'Vis Dagligt'
	,'daily_view' => 'Aktiv'
	,'daily_view_max_chars' => 'Maksimale antal tegn i en beskrivelse'
// Categories View
	,'categories_view_label' => 'Vis Katagori'
	,'cats_view' => 'Aktiv'
	,'cats_view_max_chars' => 'Maksimale antal tegn i en beskrivelse'
// Mini Calendar
	,'mini_cal_label' => 'Mini Kalender'
	,'mini_cal_def_picture' => 'Standart Billed'
	,'mini_cal_display_picture' => 'Vis Billed'
	,'mini_cal_diplay_options' => array('Ingen','Standart Billed', 'Dagligt Billed','Ugentligt Billed','Tilf�ldigt Billed')
// Picture Settings
	,'picture_settings_label' => 'Billed Indstillinger'
	,'max_upl_size' => 'Maksimale st�rrelse p� uploadede billeder (i KBytes)'
	,'allowed_file_extensions' => 'Tilladte billed formater for uploadede billeder'
// Form Buttons
	,'update_config' => 'GEM ny konfiguration'
	,'restore_config' => 'GENDAN standart indstillinger '
);

// ======================================================
// cal_mini.inc.php
// ======================================================

$lang_mini_cal = array(
	'def_pic' => 'Standart Billed'
	,'daily_pic' => 'Dagens Billed (%s)'
	,'weekly_pic' => 'Ugens Billed (%s)'
	,'rand_pic' => 'Tilf�ldigt Billed (%s)'
	,'post_event' => 'Tilf�j ny begivenhed'
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

// To Be Done

// ======================================================
// logout.php
// ======================================================

// To Be Done

// ======================================================
// admin_events.php
// ======================================================

// To Be Done

// old structure	

$maand[0]="Hver M�ned";
$maand[1]="Januar";
$maand[2]="Februar";
$maand[3]="Marts";
$maand[4]="April";
$maand[5]="Maj";
$maand[6]="Juni";
$maand[7]="Juli";
$maand[8]="August";
$maand[9]="September";
$maand[10]="Oktober";
$maand[11]="November";
$maand[12]="December";

$week[1]="S�ndag";
$week[2]="Mandag";
$week[3]="Tirsdag";
$week[4]="Onsdag";
$week[5]="Torsdag";
$week[6]="Fredag";
$week[7]="L�rdag";

function translate($word){

    switch ($word) {
        // Language parameters
        case "lang_name": $new = "Dansk";    break;
        case "lang_nativename": $new = "Dansk";    break;
        case "lang_charset": $new = "ISO-8859-1";    break;
				// Translations
        case "yes": $new = "Ja";    break;
        case "no": $new = "Nej";    break;
        case "welcometo": $new = "Velkommen til";    break;
        case "admin": $new = "Administration";    break;
        case "adminoptions": $new = "Administrative Muligheder";    break;
        case "cate": $new = "Vis Katagorier"; break;
        case "day": $new = "Vis Daglig"; break;
        case "week": $new = "Uge"; break;
        case "weeklyview": $new = "Vis Ugentlig"; break;
        case "cal": $new = "Vis Kalender"; break;
        case "nocats": $new = "Endnu ingen Katagorier"; break;
        case "addcat": $new = "Tilf�j Katagori"; break;
        case "cats": $new = "Katagorier"; break;
        case "addevent": $new = "Tilf�j Begivenhed"; break;
        case "outof": $new = "Historiske Begivenheds"; break;
        case "upcomingevents": $new = "Fremtidige Begivenheds"; break;
        case "totalevents": $new = "Totale Begivenheds"; break;
        case "events": $new = "Begivenheder"; break;
        case "errors": $new = "FEJL"; break;
        case "weeklyevents": $new = "Ugentlige Begivenheder"; break;
        case "eventdetails": $new = "Begivenheds detalier"; break;
        case "eventitle": $new = "Begivenheds titel"; break;
        case "description": $new = "Begivenheds beskrivelse"; break;
        case "choosecat": $new = "V�lg Katagori"; break;
        case "selectyear": $new = "�r"; break;
        case "selectmonth": $new = "M�ned"; break;
        case "selectday": $new = "Dag"; break;
        case "everyyear": $new = "Hvert �r"; break;
        case "everymonth": $new = "Hver m�ned"; break;
        case "bdate": $new = "Dato"; break;
        case "notitle": $new = "Du mangler at skrive en titel til begivenheden !"; break;
        case "nodescription": $new = "Du mangler at skrive en beskrivelse til begivenheden"; break;
        case "noday": $new = "Du skal v�lge en dag !"; break;
        case "nomonth": $new = "Du skal v�lge en m�ned !"; break;
        case "noyear": $new = "Du skal v�lge et �r !"; break;
        case "nocat": $new = "Du skal v�lge en katagori !"; break;
        case "novaliddate": $new = "Skriv venligst en gyldig dato !"; break;
        case "kblimit": $new = "KBytes gr�nse"; break;
        case "back": $new = "Tilbage"; break;
        case "action": $new = "Action"; break;
        case "nononapproved": $new = "Ingen begivenheder mangler godkendelse"; break;
        case "nonapproved": $new = "Begivenheder der mangler godkendelse"; break;
        case "autoapprove": $new = "Auto godkend begivenhed"; break;
        case "cat": $new = "Katagori"; break;
        case "view": $new = "Se begivenhed"; break;
        case "edit": $new = "Rediger begivenhed"; break;
        case "updateevent": $new = "Opdater begivenhed"; break;
        case "approve": $new = "Godkend denne begivenhed"; break;
        case "appreventok": $new = "Begivenhed godkendt"; break;
        case "cantapprevent": $new = "Den valgte begivenhed kan ikke godkendes"; break;
        case "moreinfo": $new = "Mere info"; break;
        case "editcat": $new = "Rediger Katagori"; break;
        case "delcat": $new = "Slet Katagori"; break;
        case "edit": $new = "Rediger"; break;
        case "del": $new = "Slet"; break;
        case "name": $new = "Navn"; break;
        case "update": $new = "Opdater"; break;
        case "reallydelcat": $new = "Sikker p� du vil slette denne begivenhed? Alle begivenheder der vedr�re denne katagori vil blive permanent slettet !"; break;
        case "noback": $new = "Oops, Nej, Tilbage !"; break;
        case "deleventok": $new = "Begivenhed slettet"; break;
        case "cantdelevent": $new = "Den valgte begivenhed kan ikke slettes"; break;
        case "surecat": $new = "JA, Slet det nu !"; break;
        case "noevents": $new = "Ingen begivenheder"; break;
        case "numbevents": $new = "Begivenheder i "; break;
        case "upevent": $new = "Opdater begivenhed"; break;
        case "delev": $new = "Slet begivenhed"; break;
        case "currentpic": $new = "Aktuelle billed"; break;
        case "delpic": $new = "Slet dette billede"; break;
        case "nooutofdate": $new = "Ingen for�llede begivenheder."; break;
        case "delalloodev": $new = "Slet alle for�llede begivenheder"; break;
        case "delevok": $new = "Er du nu helt sikker p� du vil slette denne begivenhed?"; break;
        case "delalloodevok": $new = "Slet dem alle !"; break;
        case "prevm": $new = "Forrige m�ned"; break;
        case "nextm": $new = "N�ste m�nede"; break;
        case "today": $new = "Idag"; break;
        case "eventstoday": $new = "Begivenheder idag"; break;
        case "readmore": $new = "L�s mere"; break;
        case "nextday": $new = "N�ste Dag"; break;
        case "prevday": $new = "Forrige Dag"; break;
        case "askedday": $new = "Valgt Dag"; break;
        case "nextweek": $new = "N�ste Uge"; break;
        case "prevweek": $new = "Forrige Uge"; break;
        case "weeknr": $new = "Uge nummer"; break;
        case "eventsthisweek": $new = "Begivenheder fra "; break;
        case "till": $new = "indtil"; break;
        case "thankyou": $new = "Tak for dit indlag, kan ses om et �jeblik!"; break;
        case "eventedited": $new = "Begivenhed Opdateret!"; break;
				case "op": $new = "on"; break;
       	# here start the new not yet translated language vars
        case "disabled": $new = "Denne sektion er fjernet!"; break;
       	case "searchbutton": $new = "S�g nu"; break;
       	case "searchtitle": $new = "S�g"; break;
       	case "searchcaption": $new = "Skriv nogle n�jleord"; break;
       	case "searchresults": $new = "S�ge resultater"; break;
       	case "searchagain": $new = "S�g igen"; break;
      	case "onedate": $new = "een Dato"; break;
        case "moredates": $new = "Flere Datoer"; break;
      	case "moredatesexplain": $new = "Flere Datoer: 'dd-mm-yyyy;dd-mm-yyyy' hvis dag er een, skriv 01, det samme for m�neder! osv.-';' !"; break;
      	case "email": $new = "Email"; break;
      	case "results": $new = "Resultater"; break;
      	case "noresults": $new = "Ingen resultater"; break;
        case "wronglogin": $new = "Kontroller dine Logp� informationer og pr�v igen!"; break;
        case "userman": $new = "Bruger indstillinger"; break;
        case "users": $new = "Brugere"; break;
        case "logout": $new = "Logud"; break;
        case "deluser": $new = "Slet Bruger"; break;
        case "addnewuser": $new = "Tilf�j Bruger"; break;
        case "loginscreen": $new = "Logp� side"; break;
        case "login": $new = "Logp�"; break;
        case "password": $new = "Kodeord"; break;
        case "rememberme": $new = "Husk mig!"; break;
				case "loginmsg": $new = "Skriv dit Brugernavn og kodeord for at logp�"; break;
				case "nologinname": $new = "Skriv dit logp� navn!"; break;
        case "userwarning": $new = "HUSK! dit kodeord du kan ikke fjerne det !"; break;
        case "userdelok": $new = "Sikker p� du vil slette denne bruger ?"; break;
        case "contact": $new = "Kontakt"; break;
        case "contactinfo": $new = "Kontakt info"; break;
        case "otherdetails": $new = "Andre Detalier"; break;
        case "picture": $new = "Billede"; break;
        case "filetolarge": $new = "Vedh�ftede fil er for stor !"; break;
        case "extensionnovalid": $new = "Fil format er ikke gyldig !"; break;
        case "flyerlink": $new = "Vis Flyver"; break;
        case "mailtitle": $new = "Kontroller din kalender �jeblikkeligt !"; break;
        case "mailbody": $new = "Nogen har tilf�jet en begivenhed !"; break;
        case "continuebutton": $new = "Tryk for at forts�tte"; break;
        case "returnbutton": $new = "Tilbage til forside"; break;
        case "in": $new = "in"; break;
        case "uploadapplnk": $new = "Godkend Begivenhed"; break;
        case "settingslnk": $new = "Indstillinger"; break;
        case "categorieslnk": $new = "Katagorier"; break;
        case "userslnk": $new = "Brugerer"; break;
        case "groupslnk": $new = "Grupper"; break;
        case "myprofile": $new = "Min Profil"; break;
        case "status": $new = "Status"; break;
        case "options": $new = "Indstillingewr"; break;
        case "autoappr": $new = "Auto Godkend"; break;
        case "active": $new = "Aktiv"; break;
        case "inactive": $new = "Ikke Aktiv"; break;
        case "admincats": $new = "Katagori Administration"; break;
        case "generalinfo": $new = "General Information"; break;
        case "catname": $new = "Katagori navn"; break;
        case "catdesc": $new = "Katagori beskrivelse"; break;
        case "color": $new = "Farve"; break;
        case "pickcolor": $new = "V�lg en farve!"; break;
        case "autouserappr": $new = "Auto godkend Bruger tilf�jelser"; break;
        case "autoadminappr": $new = "Auto godkend Admin tilf�jelser"; break;
        case "nocatname": $new = "Du skal skrive et navn p� Katagorien!"; break;
        case "nocatdesc": $new = "Du skal lave en beskrivelse!"; break;
        case "nocolor": $new = "Du skal v�lge en farve!"; break;
        case "total": $new = "Total"; break;
        case "admins": $new = "Admins"; break;
        case "updatecat": $new = "Opdater Katagori"; break;
        case "catedited": $new = "Katagori er opdateret!"; break;
        case "delcatmoreevents": $new = "Denne katagori indeholder %d begivenhed(er) og kan derfor ikke slettes!<br>Slet de resterende Begivenheder i denne Katagori og pr�v igen!"; break;
        case "delcatok": $new = "Katagori er slettet"; break;
        
        default: $new = "<b>".$word."</b> Mangler overs�ttelse !";    break;

    }
    return $new;
}
?>