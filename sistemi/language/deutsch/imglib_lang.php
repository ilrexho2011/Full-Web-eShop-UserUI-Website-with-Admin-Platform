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

$lang['imglib_source_image_required']   = 'Sie müssen in Ihren Einstellungen ein Quellbild angeben.';
$lang['imglib_gd_required']             = 'Die GD-Bildbibliothek ist erforderlich, um diese Funktion zu verwenden.';
$lang['imglib_gd_required_for_props']   = 'Ihr Server muss die GD-Bildbibliothek unterstützen, um die Bildeigenschaften zu bestimmen.';
$lang['imglib_unsupported_imagecreate'] = 'Ihr Server unterstützt nicht die GD-Funktion, die zur Verarbeitung dieses Bildtyps erforderlich ist.';
$lang['imglib_gif_not_supported']       = 'GIF-Bilder werden aufgrund von Lizenzbeschränkungen häufig nicht unterstützt. Möglicherweise müssen Sie stattdessen JPG- oder PNG-Bilder verwenden.';
$lang['imglib_jpg_not_supported']       = 'JPG-Bilder werden nicht unterstützt.';
$lang['imglib_png_not_supported']       = 'PNG-Bilder werden nicht unterstützt.';
$lang['imglib_jpg_or_png_required']     = 'Das in Ihren Einstellungen angegebene Bildgrößenänderungsprotokoll funktioniert nur mit den Bildtypen JPEG oder PNG.';
$lang['imglib_copy_error']              = 'Beim Versuch, die Datei zu ersetzen, ist ein Fehler aufgetreten. Stellen Sie sicher, dass Ihr Dateiverzeichnis beschreibbar ist.';
$lang['imglib_rotate_unsupported']      = 'Die Bilddrehung wird von Ihrem Server anscheinend nicht unterstützt.';
$lang['imglib_libpath_invalid']         = 'Der Pfad zu Ihrer Bildbibliothek ist nicht korrekt. Bitte legen Sie den richtigen Pfad in Ihren Bildeinstellungen fest.';
$lang['imglib_image_process_failed']    = 'Die Bildverarbeitung ist fehlgeschlagen. Bitte überprüfen Sie, ob Ihr Server die gewählte Bildverarbeitungsmethode unterstützt und ob der Pfad zu Ihrer Bildbibliothek korrekt ist.';
$lang['imglib_rotation_angle_required'] = 'Ein Drehwinkel ist erforderlich, um das Bild zu drehen.';
$lang['imglib_invalid_path']            = 'Der Pfad zum Bild ist nicht korrekt.';
$lang['imglib_invalid_image']           = 'Das bereitgestellte Bild ist ungültig.';
$lang['imglib_copy_failed']             = 'Die Bildkopierroutine ist fehlgeschlagen.';
$lang['imglib_missing_font']            = 'Es konnte keine Schriftart gefunden werden, die verwendet werden kann.';
$lang['imglib_save_failed']             = 'Das Bild konnte nicht gespeichert werden. Stellen Sie sicher, dass das Bild und das Dateiverzeichnis beschreibbar sind.';
