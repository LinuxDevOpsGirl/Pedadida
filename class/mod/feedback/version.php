<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Feedback version information
 *
 * @package    mod
 * @subpackage feedback
 * @author     Andreas Grabs
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$module->version   = 2013050100;       // The current module version (Date: YYYYMMDDXX)
$module->requires  = 2013050100;    // Requires this Moodle version
$module->component = 'mod_feedback';   // Full name of the plugin (used for diagnostics)
$module->cron      = 0;

$feedback_version_intern = 1; //this version is used for restore older backups