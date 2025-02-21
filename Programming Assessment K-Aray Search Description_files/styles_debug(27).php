/** Path: plugin mod_wiki .' **/
/*
 This file is part of Moodle - http://moodle.org/

 Moodle is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.

 Moodle is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Moodle. If not, see <http://www.gnu.org/licenses/>.
*/ /**
 * Wiki module style sheet
 *
 * @package mod-wiki-2.0
 * @copyright 2009 Marc Alier, Jordi Piguillem marc.alier@upc.edu
 * @copyright 2009 Universitat Politecnica de Catalunya http://www.upc.edu
 *
 * @author Jordi Piguillem
 * @author Marc Alier
 * @author David Jimenez
 * @author Josep Arus
 * @author Kenneth Riba
 *
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
.wiki_contentbox {
    width: 80%;
    margin: auto;
    min-width: 200px;
    min-height: 100px;
}

.wiki_editor {
    width: 50%;
    margin: auto;
    margin-top: 10px;
    margin-bottom: 10px;
}

.wiki_previewbox {
    width: 50%;
    margin: auto;
    border: thin solid blue;
}

.wiki_button {
    margin: 5px;
}

.wiki_warning {
    color: red;
}

.emptycomments {
    color: red;
    display: inline;
}

.wiki-toc {
    border: 1px solid #BBB;
    background: #EEE;
    margin: 16px;
    padding: 8px;
}

.wiki-toc-title {
    color: #666;
    font-size: 1.1em;
    font-variant: small-caps;
    text-align: center;
}

.wiki-toc-section {
    padding: 0;
    margin: 2px 8px;
}

.wiki-toc-section-2 {
    padding-left: 12px;
}

.wiki-toc-section-3 {
    padding-left: 24px;
}

.wiki_form-button {
    margin-left: 0%;
}

.wiki-form-center {
    text-align: center;
    margin: auto;
    width: 320px;
}

.wiki-upload-table {
    margin: 8px auto;
    clear: both;
}

.wiki-upload-table table {
    margin: auto;
}

.wiki-upload-table h3 {
    margin: 4px 0px;
    text-align: center;
}

.wiki-upload-section {
    border: 1px solid #EEE;
    width: 400px;
    margin: 8px auto;
}

.wiki-upload-section legend {
    font-weight: bold;
    font-size: 0.9em;
    margin-left: 16px;
}

.wiki-tags {
    text-align: right;
}

.wiki-tags span {
    font-weight: bold;
}

.wiki_modifieduser p {
    line-height: 35px;
}

.wiki_modifieduser img {
    border: thin solid black;
}

.wiki_restore_yes, .wiki_deletecomment_yes,
.dir-rtl .wiki_restore_no, .dir-rtl .wiki_deletecomment_no {
    float: left;
}
.wiki_restore_no, .wiki_deletecomment_no,
.dir-rtl .wiki_restore_yes, .dir-rtl .wiki_deletecomment_yes {
    float: right;
}

.wiki_restoreform, .wiki_deletecommentform {
    width: 10%;
    margin: auto;
}

.wiki_versionuser {
    float: left;
}

.wiki_diffuserleft,.wiki_diffuserright {
    font-weight: normal;
    padding-top: 1%;
}

.wiki_diffuserleft {
    float: right;
}

.dir-rtl .wiki_diffuserleft {
    float: left;
}

.wiki_diffuserright {
    float: left;
}

.wiki_compareheading {
    font-weight: normal;
}

.wiki_restore,.wiki_diffview,.wiki_difftime,.wiki_headingtime {
    font-size: 0.8em;
    font-weight: normal;
}

.wiki_difftime,.wiki_headingtime {
    font-style: oblique;
    text-align: center;
}

.wiki_diff_oldpaging {
    float: left;
    width: 40%;
    min-width: 200px;
    margin-left: 5%;
}

.wiki_diff_newpaging {
    float: right;
    width: 40%;
    min-width: 200px;
    margin-right: 5%;
}

.wiki_diff_old,.wiki_diff_new {
    float: left;
    min-width: 200px;
    width: 40%;
}

.wiki_difftable td {
    width: 50%;
    float: left;
}

.wiki_histdate {
    text-align: left;
}

.wiki_histnewdate {
    border-top: 1px dotted gray;
}

.ouw_deleted {
    background: #FFFFAA;
    color: red;
    text-decoration: line-through;
}

.ouw_added {
    background: #CCFFCC;
    color: red;
}

a.wiki_newentry:link, a.wiki_newentry:visited {
    color: red;
    font-style: italic;
}

.wiki_newentry a {
    color: red;
    font-style: italic;
}

#intro.generalbox {
    margin-top: 10px;
    padding: 5px;
}

.wiki_navigation_container {
    margin: 0 auto;
}

.wiki_navigation_from {
    float: left;
    width: 40%;
    min-width: 200px;
    margin-left: 5%;
}

.wiki_navigation_to {
    float: left;
    width: 40%;
    min-width: 200px;
    margin-right: 5%;
}

.wiki_headingtitle {
    text-align: center;
}

.wiki_clear {
    clear: both;
}

.wiki_right {
    text-align: right;
}

.wiki_index {
    text-align: right;
}

.notunderlined {
    text-decoration: none;
}

a.wiki_edit_section {
    font-size: 0.6em;
    vertical-align: top;
    position: relative;
    float: right;
}

.midpad {
    text-align: center;
    margin-top: 0.4em;
    margin-bottom: 0.4em;
}

.block_wiki_search ul {
    margin-top: 0.5em;
    margin-bottom: 3px;
}

.wiki-attachment:before {
    content: url("/mod/wiki/pix/attachment.png");
    padding-right: 2px;
}

/** Print CSS */
#wiki_printable_content {
    text-align: left;
}

.dir-rtl #wiki_printable_content {
    text-align: right;
}

#wiki_printable_content a {
    color: black;
}

#wiki_printable_title {
    font-size: 2.2em;
    text-decoration: underline;
}

.wiki_diff_boxes {
    width: 100%;
    clear: both;
}

.wiki_diff_paging {
    width: 100%;
    clear: both;
}

.wiki_grayline {
    color: gray
}

.wikisearchresults{
    padding-left: 50px;
    padding-top: 20px;
}

.wiki-diff-container {width:95%;margin:10px auto;}
.wiki-diff-container .wiki-diff-leftside,
.wiki-diff-container .wiki-diff-rightside {width:49.5%;margin:0;padding:0;float:left;}
.wiki-diff-container .wiki-diff-rightside {margin-left:1%;}
.wiki-diff-container .wiki-diff-heading,
.wiki-diff-container .no-overflow {padding:10px;border:1px solid #DDD;}
.wiki-diff-container .wiki-diff-rightside .wiki_diffversion {text-align:right;}

.wikieditor-toolbar img{
    width: 22px;
    height: 22px;
    vertical-align: middle;
}

.path-mod-wiki .printicon {
    background: url(/theme/image.php?theme=clean&component=core&image=t%2Fprint) no-repeat scroll 2px center transparent; padding-left: 20px;
}
#page-mod-wiki-prettyview .displayprinticon {text-align: right;}

