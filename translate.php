<?php
function lang($val) {
	if($val == "ka") {
		$lang = "ka";
	}
	else {
		$lang = "en";
	}
	setcookie("lang", $lang, time() + (86400 * 365 * 2), "/"); // 86400 = 1 day
	header("Location: " . $_SERVER["SCRIPT_NAME"]);
}

function checked($val1, $val2) {
	if($val1 == $val2) {
		echo ' <span class="background fa fa-check-square"></span>';
	}
}

if(isset($_GET["lang"])) {
	lang($_GET["lang"]);
}
else if(!isset($_COOKIE["lang"])) {
	$ip = $_SERVER["REMOTE_ADDR"];
	if($ip == "127.0.0.1" || $ip == "::1") { // Localhost
		lang("en");
	}
	else { // Real
		$curl = curl_init(); // Get cURL resource
		// Set some options - we are passing in a useragent too here
		curl_setopt_array($curl, [
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => "http://ipinfo.io/$ip"
		]);
		$details = json_decode(curl_exec($curl)); // Send the request & save response to $details
		curl_close($curl); // Close request to clear up some resources
		if(@$details->country == "GE") {
			lang("ka");
		}
		else {
			lang("en");
		}
	}
}
if($_COOKIE["lang"] == "ka") {
	$lang = "ka";
}
else {
	$lang= "en";
}

// Menu
$tr["home"]["en"] = "Home";
$tr["home"]["ka"] = "მთავარი";

$tr["products"]["en"] = "Products";
$tr["products"]["ka"] = "პროდუქცია";

$tr["services"]["en"] = "Services";
$tr["services"]["ka"] = "სერვისი";

	$tr["service"]["en"] = "Service";
	$tr["service"]["ka"] = "მომსახურება";

	$tr["audit_full"]["en"] = "Common Audit";
	$tr["audit_full"]["ka"] = "ზოგადი აუდიტი";

	$tr["consultation"]["en"] = "Consultation";
	$tr["consultation"]["ka"] = "კონსულტაცია";

$tr["about"]["en"] = "About us";
$tr["about"]["ka"] = "ჩვენს შესახებ";

$tr["contact"]["en"] = "Contact";
$tr["contact"]["ka"] = "კონტაქტი";

$tr["georgian"]["en"] = "Georgian";
$tr["georgian"]["ka"] = "ქართული";

$tr["english"]["en"] = "English";
$tr["english"]["ka"] = "ინგლისური";

// Home
// Section 1 - Slider
$tr["follow"]["en"] = "follow us";
$tr["follow"]["ka"] = "გამოგვყევი";

$tr["prev"]["en"] = "PREV";
$tr["prev"]["ka"] = "უკანა";

$tr["next"]["en"] = "NEXT";
$tr["next"]["ka"] = "შემდეგი";

$tr["respond"]["en"] = "contact us";
$tr["respond"]["ka"] = "კონტაქტი";

$tr["slide_subtext"]["en"] = "For small and medium sized companies.";
$tr["slide_subtext"]["ka"] = "მცირე და საშუალო ზომის კომპანიებისთვის.";

$tr["support"]["en"] = "Support";
$tr["support"]["ka"] = "მხარდაჭერა";

$tr["audit"]["en"] = "Audit";
$tr["audit"]["ka"] = "აუდიტი";

$tr["services_big"]["en"] = "SERVICES";
$tr["services_big"]["ka"] = "მომსახურება";

$tr["slider_title1"]["en"] = "PROFESSIONALISM AND LOW PRICES";
$tr["slider_title1"]["ka"] = "პროფესიონალიზმი და დაბალი ფასები";

$tr["slider_title2"]["en"] = "24 HOURS A DAY";
$tr["slider_title2"]["ka"] = "24 საათი დღეში";

$tr["slider_title3"]["en"] = "7 DAYS A WEEK";
$tr["slider_title3"]["ka"] = "კვირაში 7 დღე";

// Section 2
$tr["about_text"]["en"] = "about";
$tr["about_text"]["ka"] = "ჩვენს";

$tr["bureau"]["en"] = "our bureau";
$tr["bureau"]["ka"] = "შესახებ";

$tr["bureau_text"]["en"] = "We have the experience and education to work with large and complex IT projects";
$tr["bureau_text"]["ka"] = "ჩვენ გაგვაჩნია დიდ და რთულ IT პროექტებთან მუშაობის გამოცდილება და განათლება";

$tr["our"]["en"] = "our";
$tr["our"]["ka"] = "ჩვენი";

$tr["our_text"]["en"] = "Server, Network and Security Systems.<br>The best decision for your business.";
$tr["our_text"]["ka"] = "სერვერული, ქსელური და უსაფრთხოების სისტემები.<br>საუკეთესო გადაწყვეტილება თქვენი ბიზნესისათვის.";

$tr["common"]["en"] = "Common";
$tr["common"]["ka"] = "ზოგადი";

$tr["service_text1"]["en"] = "Secondary servers, data servers, networking hardware and uninterruptible power supplies from the US. The latest generation access and firewall systems";
$tr["service_text1"]["ka"] = "მეორადი სერვერები, მონაცემთა სანახები, ქსელური მოწყობილობები და უწყვეტი კვების ბლოკები ამერიკიდან. უახლესი თაობის დაშვებისა და დაცვის სისტემები";

$tr["service_text2"]["en"] = "You need to know the company you own at least 5 computerized employees need IT specialist services...";
$tr["service_text2"]["ka"] = "აუცილებელია იცოდეთ, რომ კომპანიას, რომელსაც ჰყავს მინიმუმ 5 კომპიუტერიზებული თანამშრომელი, სჭირდება IT სპეციალისტის მომსახურება...";

$tr["service_text3"]["en"] = "We offer 24 hour service 7 days a week throughout Georgia... The IT services offered by us include Corporate client computer and server park, as well as network and configure and support other IT hardware";
$tr["service_text3"]["ka"] = "გთავაზობთ 24 საათიან მომსახურებას კვირაში 7 დღე საქართველოს მასშტაბით... ჩვენს მიერ შემოთავაზებული IT სერვისი და მომსახურება მოიცავს კორპორატიული კლიენტების კომპიუტერული და სერვერული პარკის, ასევე ქსელური და სხვა IT ტექნიკის კონფიგურაციასა და მხარდაჭერას";

$tr["service_text4"]["en"] = "Small and medium-sized companies are often outdated and outdated, broken down computers and other devices. These devices may be rearranged, resolved or upgraded, or the removal of unnecessary garbage. The network topology is also often unclear, making it difficult to solve network problems. Often the nonoptimal amount of small server resources is already allocated";
$tr["service_text4"]["ka"] = "მცირე და საშუალო ზომის კომპანიებში ხშირად გროვდება მოძველებული და მწყობრიდან გამოსული კომპიუტერები და სხვა მოწყობილობები. შესაძლებელია ამ მოწყობილობების გადახარისხება, გადაწყობა ან განახლება, ან სულაც არასაჭირო ნაგვის თავიდან მოცილება. ასევე ხშირად გაურკვეველია ქსელის ტოპოლოგია, რაც ართულებს ქსელში არსებული პრობლემების გადაჭრას. ხშირად გამოყოფილია ისედაც მცირე სერვერული რესურსის არაოპტიმალური რაოდენობა";

$tr["years1"]["en"] = "years of successful projects";
$tr["years1"]["ka"] = "წლის წარმატებული პროექტები";

$tr["years2"]["en"] = "in the market";
$tr["years2"]["ka"] = "ჩვენს ბაზარზე";

$tr["what"]["en"] = "what";
$tr["what"]["ka"] = "რას";

$tr["do"]["en"] = "we do";
$tr["do"]["ka"] = "ვაკეთებთ";

$tr["do_text"]["en"] = "We offer 24 hour service 7 days a week throughout Georgia...<br>The IT services offered by us include Corporate client computer and server park,<br>as well as network and configure and support other IT hardware";
$tr["do_text"]["ka"] = "გთავაზობთ 24 საათიან მომსახურებას კვირაში 7 დღე საქართველოს მასშტაბით...<br>ჩვენს მიერ შემოთავაზებული IT სერვისი და მომსახურება მოიცავს კორპორატიული კლიენტების კომპიუტერული და სერვერული პარკის,<br>ასევე ქსელური და სხვა IT ტექნიკის კონფიგურაციასა და მხარდაჭერას";

$tr["team"]["en"] = "team";
$tr["team"]["ka"] = "გუნდი";

$tr["managers"]["en"] = "Managers";
$tr["managers"]["ka"] = "მენეჯერები";

$tr["projects"]["en"] = "projects";
$tr["projects"]["ka"] = "პროექტები";

$tr["sysadmins"]["en"] = "Sysadmins";
$tr["sysadmins"]["ka"] = "სისადმინები";

$tr["servers"]["en"] = "Servers";
$tr["servers"]["ka"] = "სერვერები";

$tr["networkers"]["en"] = "Networkers";
$tr["networkers"]["ka"] = "ნეთვორქერები";

$tr["network"]["en"] = "Network";
$tr["network"]["ka"] = "ქსელი";

$tr["troubleshooters"]["en"] = "Troubleshooters";
$tr["troubleshooters"]["ka"] = "თრაბლშუთერები";

$tr["computers"]["en"] = "Computers";
$tr["computers"]["ka"] = "კომპიუტერები";

$tr["get"]["en"] = "get";
$tr["get"]["ka"] = "მოგვწერეთ";

$tr["touch"]["en"] = "in touch";
$tr["touch"]["ka"] = "ან დაგვიკავშირდით";

$tr["touch_text"]["en"] = "Contact us at any time of the week or day";
$tr["touch_text"]["ka"] = "დაგვიკავშირდით კვირისა და დღე-ღამის ნებისმიერ მომენტში";

$tr["address"]["en"] = "USA, New York, 57 Gridgum str.";
$tr["address"]["ka"] = "40 Baria street 133/2 NewYork City, US";

$tr["name"]["en"] = "Name";
$tr["name"]["ka"] = "თქვენი სახელი";

$tr["email"]["en"] = "Email";
$tr["email"]["ka"] = "თქვენი ელ. ფოსტა";

$tr["message"]["en"] = "Message";
$tr["message"]["ka"] = "შეტყობინება";

$tr["send"]["en"] = "send message";
$tr["send"]["ka"] = "გაგზავნა";

// Footer
$tr["footer_text"]["en"] = "IT Services & Support - Servers, Networking Hardware, Access Systems.";
$tr["footer_text"]["ka"] = "IT სერვისი და მომსახურება - სერვერები, ქსელური მოწყობილობები, დაშვებნის სისტემები.";

$tr["copyright"]["en"] = "All rights reserved.";
$tr["copyright"]["ka"] = "ყველა უფლება დაცულია.";

$tr["about_footer"]["en"] = "About";
$tr["about_footer"]["ka"] = "ჩვენს შესახებ";

// Products
$tr["products_text"]["en"] = "Secondary servers, data servers, networking hardware and uninterruptible power supplies from the US.<br>The latest generation access and firewall systems.";
$tr["products_text"]["ka"] = "მეორადი სერვერები, მონაცემთა სანახები, ქსელური მოწყობილობები და უწყვეტი კვების ბლოკები ამერიკიდან.<br>უახლესი თაობის დაშვებისა და დაცვის სისტემები.";

$tr["product1"]["en"] = "Server Hardware<br>in Georgia";
$tr["product1"]["ka"] = "სერვერული მოწყობილობები<br>საქართველოში";

$tr["product1_text"]["en"] = "Servers, Data Servers and Accessories";
$tr["product1_text"]["ka"] = "სერვერები, მონაცემთა სანახები და აქსესუარები";

$tr["product2"]["en"] = "Network Devices<br>in Tbilisi, Georgia";
$tr["product2"]["ka"] = "ქსელური მოწყობილობები<br>თბილისში";

$tr["product2_text"]["en"] = "Network Distributors, Routers, Brandmauers";
$tr["product2_text"]["ka"] = "ქსელის გამანაწილებლები, მარშრუტიზატორები, ბრენდმაუერები";

$tr["product3"]["en"] = "Supervisory Systems<br>in Georgia";
$tr["product3"]["ka"] = "სამეთვალყურეო სისტემები<br>საქართველოში";

$tr["product3_text"]["en"] = "Access, Firewall and Surveillance Systems";
$tr["product3_text"]["ka"] = "დაშვების, დაცვისა და სამეთვალყურეო სისტემები";

// Service
$tr["service_text"]["en"] = "We offer 24 hour service 7 days a week throughout Georgia...<br>The IT services offered by us include Corporate client computer and server park,<br>as well as network and configure and support other IT hardware.";
$tr["service_text"]["ka"] = "გთავაზობთ 24 საათიან მომსახურებას კვირაში 7 დღე საქართველოს მასშტაბით...<br>ჩვენს მიერ შემოთავაზებული IT სერვისი და მომსახურება მოიცავს კორპორატიული კლიენტების კომპიუტერული და სერვერული პარკის,<br>ასევე ქსელური და სხვა IT ტექნიკის კონფიგურაციასა და მხარდაჭერას.";

$tr["computer"]["en"] = "Computer";
$tr["computer"]["ka"] = "კომპიუტერული";

$tr["services_full"]["en"] = "Services";
$tr["services_full"]["ka"] = "მომსახურება";

	$tr["service_1_1"]["en"] = "Complete diagnostics, repair and reconfiguration of the computer park;";
	$tr["service_1_1"]["ka"] = "კომპიუტერული პარკის სრული დიაგნოსტიკა, შეკეთება და რეკონფიგურაცია;";

	$tr["service_1_2"]["en"] = "Install, configure and support operating systems (Windows, Linux, Mac OS);";
	$tr["service_1_2"]["ka"] = "ოპერაციული სისტემების (Windows, Linux, Mac OS) ინსტალაცია, კონფიგურაცია და მხარდაჭერა;";

	$tr["service_1_3"]["en"] = "Operating system antivirus software;";
	$tr["service_1_3"]["ka"] = "ოპერაციული სისტემების ანტივირუსული პროგრამებით უზრუნველყოფა;";

	$tr["service_1_4"]["en"] = "Installing any programmable software;";
	$tr["service_1_4"]["ka"] = "ნებისმიერი პრგორამული უზრუნველყოფის ინსტალაცია";

	$tr["service_1_5"]["en"] = "Recover lost files;";
	$tr["service_1_5"]["ka"] = "დაკარგული ფაილების აღდგენა;";

	$tr["service_1_6"]["en"] = "Installation of peripherals;";
	$tr["service_1_6"]["ka"] = "პერიფერიული მოწყობილებების ინსტალაცია;";

	$tr["service_1_7"]["en"] = "Email Set up mail clients (Microsoft Outlook, Mozilla Thunderbird, etc.);";
	$tr["service_1_7"]["ka"] = "ელ. ფოსტის კლიენტების გამართვა (Microsoft Outlook, Mozilla Thunderbird და ა.შ.);";

	$tr["service_1_8"]["en"] = "Google Apps for Work Configuration.";
	$tr["service_1_8"]["ka"] = "Google Apps for Work კონფიგურაცია.";

$tr["server"]["en"] = "Server";
$tr["server"]["ka"] = "სერვერული";

	$tr["service_2_1"]["en"] = "HP, Dell, IBM, Lenovo servers, installation and configuration of storages and blade systems;";
	$tr["service_2_1"]["ka"] = "HP, Dell, IBM, Lenovo სერვერები, სტორიჯებისა და Blade სისტემების მონტაჟი და კონფიგურაცია;";

	$tr["service_2_2"]["en"] = "vMware vSphere and vCenter - Virtualization;";
	$tr["service_2_2"]["ka"] = "vMware vSphere და vCenter - ვირტუალიზაცია;";

	$tr["service_2_3"]["en"] = "Microsoft Active Directory - Domain Controller;";
	$tr["service_2_3"]["ka"] = "Microsoft Active Directory - დომეინ კონტროლერი;";

	$tr["service_2_4"]["en"] = "Microsoft Exchange Server - Email Mail system;";
	$tr["service_2_4"]["ka"] = "Microsoft Exchange Server - ელ. ფოსტის სისტემა;";

	$tr["service_2_5"]["en"] = "Microsoft Sharepoint Server - Intranet;";
	$tr["service_2_5"]["ka"] = "Microsoft Sharepoint Server - ინტრანეტი;";

	$tr["service_2_6"]["en"] = "Microsoft Skype for Business (Lync) Server - Business Communicator;";
	$tr["service_2_6"]["ka"] = "Microsoft Skype for Business (Lync) Server - ბიზნეს კომუნიკატორი;";

	$tr["service_2_7"]["en"] = "Veeam and Symantec data backup systems;";
	$tr["service_2_7"]["ka"] = "Veeam და Symantec მონაცემთა რეზერვირების სისტემები;";

	$tr["service_2_8"]["en"] = "Install and configure antivirus software central control panel;";
	$tr["service_2_8"]["ka"] = "ანტივირუსული პროგრამული უზრუნველყოფის ცენტრალური მართვის პანელის ინსტალაცია და კონფიგურაცია;";

	$tr["service_2_9"]["en"] = "Network Infrastructure monitoring;";
	$tr["service_2_9"]["ka"] = "ქსელური ინფრასტრუქტურის მონიტორინგი;";

	$tr["service_2_10"]["en"] = "Monitoring systems;";
	$tr["service_2_10"]["ka"] = "მონიტორინგის სისტემები;";

	$tr["service_2_11"]["en"] = "Proxy server;";
	$tr["service_2_11"]["ka"] = "Proxy სერვერი;";

	$tr["service_2_12"]["en"] = "Print Server.";
	$tr["service_2_12"]["ka"] = "Print სერვერი.";

$tr["network_text"]["en"] = "Network";
$tr["network_text"]["ka"] = "ქსელური";

	$tr["service_3_1"]["en"] = "Tearing down the office;";
	$tr["service_3_1"]["ka"] = "ოფისის დაქსელვა;";

	$tr["service_3_2"]["en"] = "Routing and Switching (Cisco, HP, Juniper, Mikrotik, Ubiquiti);";
	$tr["service_3_2"]["ka"] = "როუტინგი და სვიჩინგი (Cisco, HP, Juniper, Mikrotik, Ubiquiti);";

	$tr["service_3_3"]["en"] = "Network Security (ASA, Fortinet, Netapp, CheckPoint, Palo Alto, TippingPoint);";
	$tr["service_3_3"]["ka"] = "ქსელის უსაფრთხოება (ASA, Fortinet, Netapp, CheckPoint, Palo Alto, TippingPoint);";

	$tr["service_3_4"]["en"] = "Wi-Fi installation and configuration.";
	$tr["service_3_4"]["ka"] = "Wi-Fi მონტაჟი და კონფიგურაცია.";

$tr["telephony"]["en"] = "Telephony";
$tr["telephony"]["ka"] = "ტელეფონია";

	$tr["service_4_1"]["en"] = "Implementation, configuration and administration of IP telephony system (Asterisk, Elastix);";
	$tr["service_4_1"]["ka"] = "IP ტელეფონიის სისტემის (Asterisk, Elastix) დანერგვა, კონფიგურაცია და ადმინისტრირება;";

	$tr["service_4_2"]["en"] = "Billing system;";
	$tr["service_4_2"]["ka"] = "ბილინგის სისტემა;";

	$tr["service_4_3"]["en"] = "Conversation monitoring.";
	$tr["service_4_3"]["ka"] = "საუბრის მონიტორინგი.";

$tr["cameras"]["en"] = "Cameras";
$tr["cameras"]["ka"] = "კამერები";

	$tr["service_5_1"]["en"] = "Installation of analog and IP cameras;";
	$tr["service_5_1"]["ka"] = "ანალოგური და IP კამერების მონტაჟი;";

	$tr["service_5_2"]["en"] = "Access and security systems.";
	$tr["service_5_2"]["ka"] = "დაშვებისა და უსაფრთხოების სისტემები.";

// Audit
$tr["audit_text"]["en"] = "Small and medium-sized companies are often outdated and outdated, broken down computers and other devices.<br>These devices may be rearranged, resolved or upgraded, or the removal of unnecessary garbage.<br>The network topology is also often unclear, making it difficult to solve network problems.<br>Often the nonoptimal amount of small server resources is already allocated.";
$tr["audit_text"]["ka"] = "მცირე და საშუალო ზომის კომპანიებში ხშირად გროვდება მოძველებული და მწყობრიდან გამოსული კომპიუტერები და სხვა მოწყობილობები.<br>შესაძლებელია ამ მოწყობილობების გადახარისხება, გადაწყობა ან განახლება, ან სულაც არასაჭირო ნაგვის თავიდან მოცილება.<br>ასევე ხშირად გაურკვეველია ქსელის ტოპოლოგია, რაც ართულებს ქსელში არსებული პრობლემების გადაჭრას.<br>ხშირად გამოყოფილია ისედაც მცირე სერვერული რესურსის არაოპტიმალური რაოდენობა.";

$tr["audit_title1"]["en"] = "We provide";
$tr["audit_title1"]["ka"] = "ჩვენ გთავაზობთ";

$tr["audit_title2"]["en"] = "IT Infrastructure Audit and Customization";
$tr["audit_title2"]["ka"] = "IT ინფრასტრუქტურის აუდიტსა და გადახარისხებას";

	$tr["audit1"]["en"] = "Existing computer park auditing, resolving and sequencing;";
	$tr["audit1"]["ka"] = "არსებული კომპიუტერული პარკის აუდიტი, გადაწყობა და გადახარისხება;";

	$tr["audit2"]["en"] = "Existing server park audit, resolving, and sorting;";
	$tr["audit2"]["ka"] = "არსებული სერვერული პარკის აუდიტი, გადაწყობა და გადახარისხება;";

	$tr["audit3"]["en"] = "Audit and optimization of existing network and security;";
	$tr["audit3"]["ka"] = "არსებული ქსელისა და უსაფრთხოების აუდიტი და ოპტიმიზაცია;";

	$tr["audit4"]["en"] = "Creating existing and new network topologies.";
	$tr["audit4"]["ka"] = "არსებული და ახალი ქსელის ტოპოლოგიის შექმნა.";

// Consultation
$tr["consultation_text"]["en"] = "You need to know the company you own at least<br>5 computerized employees need IT specialist services...";
$tr["consultation_text"]["ka"] = "აუცილებელია იცოდეთ, რომ კომპანიას, რომელსაც ჰყავს მინიმუმ<br>5 კომპიუტერიზებული თანამშრომელი, სჭირდება IT სპეციალისტის მომსახურება...";

$tr["today"]["en"] = "Today";
$tr["today"]["ka"] = "დღეს";

	$tr["p1"]["en"] = "Yes, today it may be all up to the staff to handle IT difficulties and problems, but there is always a day when there will be no business interruption without an IT specialist...";
	$tr["p1"]["ka"] = "დიახ, დღეს შესაძლოა ყველაფერი რიგზეა და თანამშრომლები უმკლავდებიან IT სირთულეებსა და პრობლემებს, მაგრამ ყოველთვის დგება ის დღე და მომენტი, როდესაც IT სპეციალისტის გარეშე თქვენი ბიზნეს პროცესი უბრალოდ ჩერდება...";

	$tr["p2"]["en"] = "Take e-mail for example - e-mail is a tool without which it is impossible to manage a business process today. Often this tool is directly tied to the company's operations.";
	$tr["p2"]["ka"] = "მაგალითისათვის ავიღოთ ელექტრონული ფოსტა - ელექტრონული ფოსტა ეს არის ინსტრუმენტი, რომლის გარეშეც დღეს შეუძლებელია ბიზნეს პროცესის მართვა. ხშირად ეს ინსტრუმენტი პირდაპირ არის მიბმული კომპანიის საქმიანობაზე.";

	$tr["p3"]["en"] = "For all companies that actively use email, sooner or later the day when your address turns out to be the so-called email. in a black list. No one is insured, though it is possible to respond quickly and take preventive measures in the future.";
	$tr["p3"]["ka"] = "ყველა კომპანიისთვის, რომელიც აქტიურად იყენებს ელექტრონულ ფოსტას, ადრე თუ გვიან დგება ის დღე, როდესაც თქვენი მისამართი აღმოჩნდება ე.წ. შავ სიაში. ამისგან არავინაა დაზღვეული, თუმცა შესაძლებელია სწრაფი რეაგირების მოხდენა და მომავალში პრევენციული ღონისძიებების გატარება.";

	$tr["p4"]["en"] = "This fact proves once again that a company that has at least 5 computerized employees needs the services of an IT specialist...";
	$tr["p4"]["ka"] = "ეს ფაქტი კიდევ ერთხელ ამტკიცებს იმას, რომ კომპანიას, რომელსაც ჰყავს მინიმუმ 5 კომპიუტერიზებული თანამშრომელი, სჭირდება IT სპეციალისტის მომსახურება...";

	$tr["p5"]["en"] = "Our team is happy to advise you on what kind of IT services you need in the current period.";
	$tr["p5"]["ka"] = "ჩვენი გუნდი სიამოვნებით გაგიწევთ კონსულტაციას, თუ რა სახის IT მომსახურება გესაჭიროებათ მიმდინარე პერიოდში.";

	$tr["p6"]["en"] = "What is needed for the continuity of the business process associated with information technologies.";
	$tr["p6"]["ka"] = "რა არის საჭირო ინფორმაციულ ტექნოლოგიებთან მიბმული ბიზნეს პროცესის უწყვეტობისათვის.";

	$tr["p7"]["en"] = "You will also be consulted on how to respond to IT problems and prevent them.";
	$tr["p7"]["ka"] = "ასევე გაგიწევთ კონსულტაციას IT პრობლემებზე რეაგირებისა და მათ პრევენციაზე.";

// About
$tr["team_text"]["en"] = "We are a team of certified and professional IT specialists. We have many years of experience<br>working with large and complex IT infrastructure. Our capabilities will exceed your requirements.";
$tr["team_text"]["ka"] = "ჩვენ ვართ სერტიფიცირებული და პროფესიონალი IT სპეციალისტების ჯგუფი. გვაქვს დიდ და რთულ<br>IT ინფრასტრუქტურასთან მუშაობის მრავალწლიანი გამოცდილება. ჩვენი შესაძლებლობები გადააჭარბებს თქვენს მოთხოვნებს.";

$tr["system"]["en"] = "System Administrators";
$tr["system"]["ka"] = "სისტემური ადმინისტრატორები";

$tr["administrators"]["en"] = "Administrators";
$tr["administrators"]["ka"] = "ადმინისტრატორები";

$tr["networks"]["en"] = "Network";
$tr["networks"]["ka"] = "ქსელის";

$tr["about1"]["en"] = 'A computer and information systems manager, or simply an information technology manager, is a kind of "facilitator" that helps an organization focus on an ever-changing IT environment. It looks at long-term and short-term concepts of technology requirements and goals for the organization';
$tr["about1"]["ka"] = 'კომპიუტერული და ინფორმაციული სისტემების მენეჯერი, ან უბრალოდ ინფორმაციული ტექნოლოგიების მენეჯერი, წარმოადგენს ერთგვარ "გამცილებელს", რომელიც ორგანიზაციას ეხმარება ინფორმაციული ტექნოლოგიების მუდმივად ცვალებად გარემოში მოახდინოს ორიენტირება. ის სახავს ორგანიზაციისათვის საჭირო ტექნოლოგიების მოთხოვნებისა და მიზნების გრძელ და მოკლე ვადიან კონცეფციებს';

$tr["about2"]["en"] = "System Administrator, or Sysadmin, is the person responsible for the content, configuration, and performance of multipurpose computers, such as servers. Sysadmin provides so-called flexibility, minimize downtime, increase computer security and increase productivity";
$tr["about2"]["ka"] = "სისტემური ადმინისტრატორი, ან იგივე სისადმინი ეს არის პირი, რომელიც პასუხისმგებელია მრავალმომხმარებლიანი კომპიუტერების, მაგალითად სერვერების შემცველობაზე, კონფიგურაციასა და გამართულად მუშაობაზე. სისადმინი უზრუნველყოფს ე.წ. Downtime მინიმუმამდე შემცირებას, კომპიუტერულ უსაფრთხოებასა და პროდუქტიულობის გაზრდას";

$tr["about3"]["en"] = "The network administrator is responsible for maintaining the actual operation of the organization's computer network. It is also responsible for network routing and security";
$tr["about3"]["ka"] = "ქსელის ადმინისტრატორი პასუხისმგებელია ორგანიზაციის კომპიუტერული ქსელის აქტუალური მუშაობის უზრუნველყოფაზე. ის ასევე პასუხისმგებელია ქსელის მარშრუტიზაციაზე და უსაფრთხოებაზე";

$tr["about4"]["en"] = "The same IT technician, a person who, besides the users, also needs all the above specialists. Its main duty is to ensure proper operation of the computer and peripheral park. Its responsibilities include developing and installing new hardware, installing and updating software and operating systems";
$tr["about4"]["ka"] = "იგივე IT ტექნიკოსი, პირი, რომელის დახმარებაც მომხმარებლების გარდა, ესაჭიროება ყველა ზემოთ ჩამოთვლილ სპეციალისტსაც. მისი მთავარი მოვალეობაა კომპიუტერული და პერიფერიული პარკის გამართულად მუშაობის უზრუნველყოფა. მის მოვალეობაში ასევე შედის ახალი ტექნიკის აწყობა და გამართვა, პროგრამული უზრუნველყოფის და ოპერაციული სისტემების ინსტალაცია და განახლება.";

$tr["edit"]["en"] = "Edit";
$tr["edit"]["ka"] = "რედაქტირებულია";

$tr["by"]["en"] = "By the IT Crowd team";
$tr["by"]["ka"] = "IT Crowd გუნდის მიერ";

$tr["notif"]["en"] = "Sent";
$tr["notif"]["ka"] = "თქვენი შეტყობინება მიღებულია";

$tr["mobile"]["en"] = "Telephone number";
$tr["mobile"]["ka"] = "ტელფონის ნომერი";

$tr["title"]["en"] = "Title";
$tr["title"]["ka"] = "სათაური";




if(isset($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$content = $_POST["content"];

	$message = "from: $name ($email) - $content";
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	// More headers
	$headers .= "From: ITCrowd.ge <service@itcrowd.ge>\r\n";
	$headers .= "X-Sender: ITCrowd.ge <service@itcrowd.ge>\r\n";
	$headers .= "X-Mailer: PHP/" . phpversion();
	// mail("service@itcrowd.ge", "ITCrowd message", wordwrap($message, 70), $headers, "-fservice@itcrowd.ge");
	$sent = "<script>notif('success', 'fa fa-check', '{$tr["notif"][$lang]}');</script>";
}