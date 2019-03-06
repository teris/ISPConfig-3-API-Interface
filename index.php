<?php
require 'soap_config.php';


$client = new SoapClient(null, array('location' => $soap_location,
		'uri'      => $soap_uri,
		'trace' => 1,
		'exceptions' => 1));
try {
		if($session_id = $client->login($username, $password)) {
			echo '';
		}
		
?>

<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<title>Subdomain Regestration</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="container">
			<?php 
			
			if(empty($_POST)): 
			
			?>
			<form class="well form-horizontal" action=" " method="post"  id="contact_form">
				<fieldset>

				<!-- Form Name -->
				<legend>Soap SubDomainService</legend>

				<!-- Text input-->

				<div class="form-group">
					<label class="col-md-4 control-label">Vorname</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input  name="first_name" placeholder="Vorname" class="form-control"  type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->

				<div class="form-group">
					<label class="col-md-4 control-label" >Nachname</label> 
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input name="last_name" placeholder="Nachname" class="form-control"  type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">E-Mail</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input name="email" placeholder="E-Mail Adresse" class="form-control"  type="text">
						</div>
					</div>
				</div>


				<!-- Text input-->

				<div class="form-group">
					<label class="col-md-4 control-label">Telefon #</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
							<input name="phone" placeholder="(+49) 555-1212" class="form-control" type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->

				<div class="form-group">
					<label class="col-md-4 control-label">Adresse</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input name="address" placeholder="Adresse" class="form-control" type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->

				<div class="form-group">
					<label class="col-md-4 control-label">Stadt</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input name="city" placeholder="Stadt" class="form-control"  type="text">
						</div>
					</div>
				</div>

				<!-- Select Basic -->

				<div class="form-group"> 
					<label class="col-md-4 control-label">Land</label>
					<div class="col-md-4 selectContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							<select name="state" class="form-control selectpicker" >
								<option value=" " selected disabled>Bitte Land w&auml;hlen</option>
								<option>Alabama</option>
								<option>Alaska</option>
								<option >Arizona</option>
								<option >Arkansas</option>
								<option >California</option>
								<option >Colorado</option>
								<option >Connecticut</option>
								<option >Delaware</option>
								<option >District of Columbia</option>
								<option >Deutschland</option>
								<option> Florida</option>
								<option >Georgia</option>
								<option >Hawaii</option>
								<option >daho</option>
								<option >Illinois</option>
								<option >Indiana</option>
								<option >Iowa</option>
								<option> Kansas</option>
								<option >Kentucky</option>
								<option >Louisiana</option>
								<option>Maine</option>
								<option >Maryland</option>
								<option> Mass</option>
								<option >Michigan</option>
								<option >Minnesota</option>
								<option>Mississippi</option>
								<option>Missouri</option>
								<option>Montana</option>
								<option>Nebraska</option>
								<option>Nevada</option>
								<option>New Hampshire</option>
								<option>New Jersey</option>
								<option>New Mexico</option>
								<option>New York</option>
								<option>North Carolina</option>
								<option>North Dakota</option>
								<option>Ohio</option>
								<option>Oklahoma</option>
								<option>Oregon</option>
								<option>Pennsylvania</option>
								<option>Rhode Island</option>
								<option>South Carolina</option>
								<option>South Dakota</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option> Uttah</option>
								<option>Vermont</option>
								<option>Virginia</option>
								<option >Washington</option>
								<option >West Virginia</option>
								<option>Wisconsin</option>
								<option >Wyoming</option>
							</select>
						</div>
					</div>
				</div>

				<!-- Text input-->

				<div class="form-group">
					<label class="col-md-4 control-label">PLZ</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
							<input name="zip" placeholder="PLZ" class="form-control"  type="text">
						</div>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label">Webname oder Benutzername</label>  
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
							<input name="website1" placeholder="Webname oder Benutzername" class="form-control" type="text">
							<select name="website2" class="form-control selectpicker" >
							<?php
								
								foreach($domain_id as $key => $value):
									$vaule2 = $client->sites_web_domain_get($session_id, $value);
									?>
									
										<option id="<?php echo $key; ?>"><?php echo $vaule2['domain']; ?></option>
																	
									<?php
								endforeach;
							?>
							</select>	
							
						</div>
					</div>
				</div>

				<!-- Text area -->

				<div class="form-group">
					<label class="col-md-4 control-label">Projekt Beschreibung</label>
					<div class="col-md-4 inputGroupContainer">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<textarea class="form-control" name="comment" placeholder="Projekt Beschreibung"></textarea>
						</div>
					</div>
				</div>

				<!-- Success message -->
				<div class="alert alert-success" role="alert" id="success_message">Erfolg <i class="glyphicon glyphicon-thumbs-up"></i> Danke.</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label"></label>
					<div class="col-md-4">
						<button type="submit" class="btn btn-warning" >Senden <span class="glyphicon glyphicon-send"></span></button>
					</div>
				</div>

				</fieldset>
			
			<hr>
			<!-- Editierbarer Bereich  -->
				<fieldset>
					<legend>Lorem ipsum dolor sit amet</legend>
					<div class="col-md-4" >
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="col-md-5" >
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="col-md-3" >
						<b>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</b>
					</div>
					<div class="col-md-12">
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
					</div>
				</fieldset>
			<!-- Editierbarer Bereich ENDE -->
			</form>
			<?php 
			
			else: 
			//######################################################//
			?>
			<div class="alert alert-success" role="alert" id="success_message2">Erfolg <i class="glyphicon glyphicon-thumbs-up"></i> <br>Danke das du unseren Service nutzt, hier sind deine Daten:</div>
			
			<div class="alert alert-primary" role="alert">
				
			<?php
				//print_r($_POST);
					$reseller_id = 0; // this id has to be 0 if the client shall not be assigned to admin or if the client is a reseller
					$params1 = array(
						'company_name' => '',												//Firma / Organisation
						'contact_name' => $_POST['first_name'].' '.$_POST['last_name'],		// Vor und Nachname
						'customer_no' => '',												//Reseller ID
						'street' => $_POST['address'],										//Strasse
						'zip' => $_POST['zip'],												//PLZ
						'city' => $_POST['city'],											//Stadt
						'state' => $_POST['state'],											//Katon
						'country' => 'DE',													//Land	
						'telephone' => $_POST['phone'],										//Telefonnummer
						'mobile' => '',														//Handynummer
						'fax' => '',														//Faxnummer
						'email' => $_POST['email'],											//E-Mailadresse
						'internet' => '',													//Webadresse
						'icq' => '',														//ICQ
						'notes' => $_POST['comment'],										//Kommentare
						'default_mailserver' => 1,											//ID des Hauptmailservers
						'limit_maildomain' => 0,											//Maildomains
						'limit_mailbox' => 0,												//Mailadresse
						'limit_mailalias' => 0,												
						'limit_mailaliasdomain' => 0,
						'limit_mailforward' => 0,
						'limit_mailcatchall' => 0,
						'limit_mailrouting' => 0,
						'limit_mailfilter' => 0,
						'limit_fetchmail' => 0,
						'limit_mailquota' => 0,
						'limit_spamfilter_wblist' => 0,
						'limit_spamfilter_user' => 0,
						'limit_spamfilter_policy' => 0,
						'default_webserver' => 1,										//ID Hauptwebserver
						'limit_web_ip' => '',
						'limit_web_domain' => 1,										//Anzahl an Domains für Benutzer
						'limit_web_quota' => 1024,										//Speicherplatz 1024 = 1GB
						'web_php_options' => 'fast-cgi,mod',							//PHP Modus
						'limit_web_subdomain' => 0,
						'limit_web_aliasdomain' => 0,
						'limit_ftp_user' => 1,											//Anzahl für FTP Benutzer für Benutzer
						'limit_shell_user' => 0,										//shell zugriff 1 = ja 0 = nein
						'ssh_chroot' => 'no,jailkit,ssh-chroot',						//ssh Cronejobs
						'limit_webdav_user' => 0,
						'default_dnsserver' => 0,										//ID Hauptdnsserver
						'limit_dns_zone' => 0,
						'limit_dns_slave_zone' => 0,
						'limit_dns_record' => 0,
						'default_dbserver' => 1,										//ID HauptmysqlServer
						'limit_database' => 1,											//Anzahl an MySql Datenbanken
						'limit_cron' => 1,												//Anzahl an Cronejobs
						'limit_cron_type' => 'url',										// type des Ausführbaren Chrons
						'limit_cron_frequency' => 5,									//Wiederholungsrate in Minuten
						'limit_traffic_quota' => -1,									//traffic der Webdomain
						'limit_client' => 0, 											// Ist > 0, Dann ist Benutzer ein Reseller
						'parent_client_id' => 0,
						'username' => $_POST['website1'].'.'.$_POST['website2'],
						'password' => $session_id,
						'language' => 'de',												//Interfacesprache
						'usertheme' => 'default',										//Interfacelayout
						'template_master' => 0,											//ID Template
						'template_additional' => 1,										//ID Zusatztemplate
						'created_at' => 0												//Erstellt am (Datum)
					);

					$affected_rows = $client->client_add($session_id, $reseller_id, $params1);
					$client_id = $affected_rows;
					
					$params = array(
					'server_id' => 1,
					'ip_address' => '*',
					'domain' => $_POST['website1'].'.'.$_POST['website2'],
					'type' => 'vhost',
					'parent_domain_id' => 0,
					'vhost_type' => 'name',
					'hd_quota' => 1024,
					'traffic_quota' => -1,
					'cgi' => 'y',
					'ssi' => 'y',
					'suexec' => 'y',
					'errordocs' => 1,
					'is_subdomainwww' => 1,
					'subdomain' => '',
					'php' => 'y',
					'ruby' => 'n',
					'redirect_type' => '',
					'redirect_path' => '',
					'ssl' => 'n',
					'ssl_state' => '',
					'ssl_locality' => '',
					'ssl_organisation' => '',
					'ssl_organisation_unit' => '',
					'ssl_country' => '',
					'ssl_domain' => '',
					'ssl_request' => '',
					'ssl_key' => '',
					'ssl_cert' => '',
					'ssl_bundle' => '',
					'ssl_action' => '',
					'stats_password' => '',
					'stats_type' => 'webalizer',
					'allow_override' => 'All',
					'apache_directives' => '',
					'php_open_basedir' => '/',
					'pm_max_requests' => 0,
					'pm_process_idle_timeout' => 10,
					'custom_php_ini' => '',
					'backup_interval' => '',
					'backup_copies' => 1,
					'active' => 'y',
					'traffic_quota_lock' => 'n',
					'http_port' => '80',
					'https_port' => '443'
				);

				$affected_rows2 = $client->sites_web_domain_add($session_id, $client_id, $params, $readonly = false);

					echo "<br>";
					echo "Ihr Passwort: ".$session_id."</br>";
					echo "Ihr Benutzername: ".$_POST['website1'].'.'.$_POST['website2']."<br>";
					echo "<br>";
					echo "Administration: <a target='_blank' href='".$login_uri."' >Login</a><br>";
					echo "Mysql Administration: <a target='_blank' href='".$mysql_uri."'>Mysql Login</a>";
					
					//############################MAIL Versden mittels Mail PHP###############################//
					$empfaenger = $_POST['email'];
					
					$betreff = "Subdomain Regestriert";						//<-- Editierbar -->//
					
					$from = "From: ".$mail_from;
					//$from .= "Content-Type: text/html\n";
					//$from .= "Content-Transfer-Encoding: 8bit\n";
					$from .= "MIME-Version: 1.0\r\n";
					$from .= "Content-type: text/html; charset=iso-8859-1\r\n";
					
					$text = "Vielen Dank,<br>
							wir freuen uns, Ihnen einen kleinen Webspace zu verf&uuml;gung stellen zu d&uuml;rfen.<br><br>
							Hier nochmals alle Informationen:<br>
							<p>Ihr Passwort: ".$session_id."</br>
							Ihr Benutzername: ".$_POST['website1'].'.'.$_POST['website2']."<br>
							</p>
							<p>Bitte &auml;ndern Sie zuerst Ihr Passwort.<br>
							Administration: <a target='_blank' href='".$login_uri."' >Login</a></p>
							<p>Gern Helfen wir Ihnen weiter, dazu k&ouml;nnen SIe uns einfach eine E-Mail senden an: <a href='soap.help@orga-consult.eu'>soap.help@orga-consult.eu</a></p>
							<p>Wenn Sie eine MySql-Datenbank erstellt haben, k&ouml;nnen Sie diese ebenfalls <a target='_blank' href='https://mysql.orga-consult.eu'>HIER VERWALTEN</a></p>
							<p>F&uuml;r die nutzung von FTP (File Transfer Protokoll) sind folgende daten n&ouml;tig:<br>
							Port: 21<br>
							Adresse: ".$ftp_server."<br>
							Benutzername: (diesen m&uuml;ssen Sie erstellen)<br>
							Passwort: (diesen m&uuml;ssen SIe erstellen)</p>
							<p>Mit freundlichen Gr&uuml;ßen, Ihr Orga Consult e.G. Team</p>
							";
					 
					mail($empfaenger, $betreff, $text, $from);
					//############################MAIL Versden mittels Mail PHP###############################//
				
			?>
			</div>
			<?php endif; ?>
			
			
		</div><!-- /.container -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
	<script  src="js/index.js"></script>

	</body>

</html>
<?php
if($client->logout($session_id)) {
		echo '';
	}


} catch (SoapFault $e) {
	echo $client->__getLastResponse();
	die('SOAP Error: '.$e->getMessage());
}
?>