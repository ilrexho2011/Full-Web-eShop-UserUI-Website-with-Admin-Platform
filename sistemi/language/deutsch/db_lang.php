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

$lang['db_invalid_connection_str'] = 'Die Datenbankeinstellungen konnten anhand der von Ihnen übermittelten Verbindungszeichenfolge nicht ermittelt werden.';
$lang['db_unable_to_connect'] = 'Die Verbindung zur Datenbank konnte nicht hergestellt werden, bitte überprüfen Sie Ihre Einstellungen.';
$lang['db_unable_to_select'] = 'Die angegebene Datenbank konnte nicht ausgewählt werden: %s';
$lang['db_unable_to_create'] = 'Die angegebene Datenbank konnte nicht erstellt werden: %s';
$lang['db_invalid_query'] = 'Die übermittelte Abfrage ist ungültig.';
$lang['db_must_set_table'] = 'Sie müssen die Datenbanktabelle angeben, die für Ihre Abfrage verwendet werden soll.';
$lang['db_must_use_set'] = 'Sie müssen die "set"-Methode verwenden, um die Daten zu aktualisieren.';
$lang['db_must_use_index'] = 'Sie müssen einen Index angeben, um eine Batch-Update-Abfrage durchzuführen.';
$lang['db_batch_missing_index'] = 'Die folgenden Zeilen fehlen den angegebenen Index: %s';
$lang['db_must_use_where'] = 'Sie müssen eine "where"-Klausel verwenden, um die Datensätze zu löschen.';
$lang['db_del_must_use_where'] = 'Löschungen sind nicht zulässig, es sei denn, sie enthalten eine „Where“- oder „Like“-Klausel.';
$lang['db_field_param_missing'] = 'Zum Abrufen von Feldern ist der Name der Tabelle als Parameter erforderlich.';
$lang['db_unsupported_function'] = 'Diese Funktion ist für die von Ihnen verwendete Datenbank nicht verfügbar.';
$lang['db_transaction_failure'] = 'Transaktionsfehler: Rollback durchgeführt.';
$lang['db_unable_to_drop'] = 'Die angegebene Datenbank konnte nicht gelöscht werden.';
$lang['db_unsupported_feature'] = 'Nicht unterstützte Funktion der von Ihnen verwendeten Datenbankplattform.';
$lang['db_unsupported_compression'] = 'Das von Ihnen gewählte Dateikomprimierungsformat wird von Ihrem Server nicht unterstützt.';
$lang['db_filepath_error'] = 'Es konnten keine Daten in den von Ihnen angegebenen Dateipfad geschrieben werden.';
$lang['db_invalid_cache_path'] = 'Der von Ihnen übermittelte Cache-Pfad ist ungültig oder nicht beschreibbar.';
$lang['db_table_name_required'] = 'Für diesen Vorgang ist ein Tabellenname erforderlich.';
$lang['db_column_name_required'] = 'Für diesen Vorgang ist ein Spaltenname erforderlich.';
$lang['db_column_definition_required'] = 'Für diesen Vorgang ist eine Spaltendefinition erforderlich.';
$lang['db_unable_to_set_charset'] = 'Die Client-Zeichencodierung konnte nicht auf %s gesetzt werden.';
$lang['db_error_heading'] = 'Ein Datenbankfehler ist aufgetreten';
