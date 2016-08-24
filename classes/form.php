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
 * Site wide http -> https search-replace form.
 *
 * @package    tool_httpsreplace
 * @copyright Copyright (c) 2016 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once("$CFG->libdir/formslib.php");

/**
 * Site wide http -> https search-replace form.
 */
class tool_httpsreplace_form extends moodleform {

    function definition() {
        global $CFG, $DB;

        $mform = $this->_form;

        $mform->addElement('header', 'confirmhdr', get_string('confirm'));
        $mform->setExpanded('confirmhdr', true);
        $mform->addElement('checkbox', 'sure', get_string('disclaimer', 'tool_httpsreplace'));
        $mform->addRule('sure', get_string('required'), 'required', null, 'client');

        $this->add_action_buttons(false, get_string('doit', 'tool_httpsreplace'));
    }

}
