<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2019 - 2022, CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	IR Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @copyright	Copyright (c) 2019 - 2022, CodeIgniter Foundation (https://codeigniter.com/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'Der E-Mail-Validierungsmethode muss ein Array übergeben werden.';
$lang['email_invalid_address'] = 'Die E-Mail-Adresse "%s" ist ungültig.';
$lang['email_attachment_missing'] = 'Die folgende E-Mail-Anlage konnte nicht gefunden werden: %s';
$lang['email_attachment_unreadable'] = 'Die folgende E-Mail-Anlage konnte nicht geöffnet werden: %s';
$lang['email_no_from'] = 'Die "Von"-Header ist erforderlich.';
$lang['email_no_recipients'] = 'Sie müssen Empfänger angeben: An, Cc oder Bcc';
$lang['email_send_failure_phpmail'] = 'E-Mails können nicht mit PHP mail() gesendet werden. Ihr Server ist möglicherweise nicht für das Senden von E-Mails mit dieser Methode konfiguriert.';
$lang['email_send_failure_sendmail'] = 'E-Mails können nicht mit PHP Sendmail gesendet werden. Ihr Server ist möglicherweise nicht für das Senden von E-Mails mit dieser Methode konfiguriert.';
$lang['email_send_failure_smtp'] = 'E-Mails können nicht mit PHP SMTP gesendet werden. Ihr Server ist möglicherweise nicht für das Senden von E-Mails mit dieser Methode konfiguriert.';
$lang['email_sent'] = 'Ihre Nachricht wurde erfolgreich gesendet mit folgendem Protokoll: %s';
$lang['email_no_socket'] = 'Es konnte kein Socket für Sendmail geöffnet werden. Bitte überprüfen Sie Ihre Konfiguration.';
$lang['email_no_hostname'] = 'Sie haben keinen SMTP-Hostnamen angegeben.';
$lang['email_smtp_error'] = 'Der folgende SMTP-Fehler ist aufgetreten: %s';
$lang['email_no_smtp_unpw'] = 'Fehler: Sie müssen einen SMTP-Benutzernamen und ein Passwort angeben.';
$lang['email_failed_smtp_login'] = 'Fehler beim Senden des AUTH LOGIN-Befehls. Fehler: %s';
$lang['email_smtp_auth_un'] = 'Fehler bei der Authentifizierung des Benutzernamens. Fehler: %s';
$lang['email_smtp_auth_pw'] = 'Fehler bei der Authentifizierung des Passworts. Fehler: %s';
$lang['email_smtp_data_failure'] = 'Daten konnten nicht gesendet werden: %s';
$lang['email_exit_status'] = 'Exit-Status-Code: %s';