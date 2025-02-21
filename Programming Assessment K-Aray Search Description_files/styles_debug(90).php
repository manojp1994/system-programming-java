/** Path: plugin assignfeedback_editpdf .' **/
.assignfeedback_editpdf_widget .toolbar ul {
    display: none;
}

.assignfeedback_editpdf_widget .toolbar li {
    list-style-type: none;
}
.assignfeedback_editpdf_widget .drawingcanvas {
    position: relative;
    min-width: 817px;
    min-height: 400px;
    cursor: crosshair;
    background-repeat: no-repeat;
    background-color: #ccc;
}
.assignfeedback_editpdf_widget .drawingregion {
    overflow: auto;
    width: 842px; /* A4 portrait should not need a horizontal scrollbar */
}

.assignfeedback_editpdf_widget {
    user-select: none;
    -moz-user-select: none;
    -webkit-user-select: none;
    -o-user-select: none;
}

.assignfeedback_editpdf_widget .pageheader {
    background-color: #ebebeb;
    border-bottom: 1px solid #cccccc;
    padding: 0px;
    padding-left: 20px;
    padding-right: 20px;
    min-height: 50px;
}

.moodle-dialogue-base .moodle-dialogue.assignfeedback_editpdf_widget .moodle-dialogue-bd {
    padding: 0px;
}

.assignfeedback_editpdf_unsavedchanges.haschanges{
    display: block;
}
.assignfeedback_editpdf_unsavedchanges {
    display: none;
    margin-top: 1em;
}
.yui3-colourpicker-hidden,
.yui3-commentsearch-hidden,
.yui3-commentmenu-hidden {
    display: none;
}
.assignfeedback_editpdf_widget .pageheader button img {
    padding-top: 3px;
    vertical-align: top;
}
.assignfeedback_editpdf_widget .pageheader button:active {
    background-color: #ccc;
}
.assignfeedback_editpdf_widget .pageheader select,
.assignfeedback_editpdf_widget .pageheader button {
    background: none;
    padding: 4px 7px;
    border: 0px;
    border-radius: 0px;
    margin: 0px;
    height: 30px;
    line-height: 30px;
    vertical-align: top;
    cursor: pointer;
}
.assignfeedback_editpdf_widget .pageheader select {
    vertical-align: top;
    -webkit-appearance: none;
    -moz-appearance: menulist-text;
    background-color: #fff;
    padding: 0px 10px;
}
.assignfeedback_editpdf_widget .pageheader select::-ms-expand {
    display: none;
}

.assignfeedback_editpdf_widget .pageheader .navigation button + button,
.assignfeedback_editpdf_widget .pageheader .toolbar button + button,
.assignfeedback_editpdf_widget .pageheader .navigation select + button,
.assignfeedback_editpdf_widget .pageheader .toolbar select + button {
    border-left: 1px solid #cccccc;
    border-right: 0px;
}

.assignfeedback_editpdf_widget .pageheader .navigation button {
    border-right: 1px solid #cccccc;
}
.assignfeedback_editpdf_widget .pageheader .toolbar,
.assignfeedback_editpdf_widget .pageheader .navigation-search,
.assignfeedback_editpdf_widget .pageheader .navigation {
    border: 1px solid #cccccc;
    border-bottom-color: #b3b3b3;
    border-radius: 4px;
    margin: 10px 4px;
    background-color: white;
    height: 30px;
    line-height: 30px;
    padding: 0px;
}

.assignfeedback_editpdf_commentsearch ul {
    max-height: 400px;
    overflow-y: auto;
    padding: 1em;
}
.assignfeedback_editpdf_commentsearch ul li pre {
    background-color: #efefef;
}
.assignfeedback_editpdf_commentsearch ul li pre:hover {
    background-color: #ddd;
}
.assignfeedback_editpdf_commentsearch ul li {
    line-height: 0px;
    margin: 2px;
}
.assignfeedback_editpdf_commentsearch a pre {
    font-family: helvetica;
    margin: 0px;
    padding: 4px;
}

.assignfeedback_editpdf_widget .navigation-search,
.assignfeedback_editpdf_widget .navigation {
    float: left;
}

.dir-rtl .assignfeedback_editpdf_widget .navigation-search,
.dir-rtl .assignfeedback_editpdf_widget .navigation {
    float: right;
}
.assignfeedback_editpdf_widget .toolbar button {
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
}
.assignfeedback_editpdf_widget .toolbar {
    float: right;
}
.dir-rtl .assignfeedback_editpdf_widget .toolbar {
    float: left;
}
.assignfeedback_editpdf_widget .navigation,
.assignfeedback_editpdf_widget .navigation-search,
.assignfeedback_editpdf_widget .toolbar {
    display: inline-block;
}

.assignfeedback_editpdf_colourpicker ul {
    margin: 0px;
}

.assignfeedback_editpdf_commentmenu li.quicklist_comment {
    width: 150px;
}
.assignfeedback_editpdf_commentmenu li.quicklist_comment a {
    white-space: nowrap;
    display: inline-block;
    max-width: 130px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.assignfeedback_editpdf_commentmenu a.delete_quicklist_comment {
    float: right;
}
.dir-rtl .assignfeedback_editpdf_commentmenu a.delete_quicklist_comment {
    float: left;
}
.assignfeedback_editpdf_dropdown button {
    border: 0px;
    background: none;
    padding: 6px 7px;
    border-radius: 0px;
    border-top: 1px solid #cccccc;
}
.assignfeedback_editpdf_dropdown li:first-child button {
    border-top: 0px;
}
.moodle-dialogue-base .moodle-dialogue.assignfeedback_editpdf_dropdown .moodle-dialogue-wrap {
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    margin-left: 0px;
    margin-right: 0px;
    margin-top: 0px;
    border-radius: 4px;
}
.moodle-dialogue-base .moodle-dialogue.assignfeedback_editpdf_dropdown .moodle-dialogue-bd {
    padding: 0px;
}
.assignfeedback_editpdf_dropdown .moodle-dialogue-hd,
.assignfeedback_editpdf_dropdown .moodle-dialogue-ft {
    display: none;
}
.assignfeedback_editpdf_menu li hr {
    margin: 0px;
}
.assignfeedback_editpdf_menu li a {
    text-decoration: none;
    color: #555;
    margin: 10px;
}
.assignfeedback_editpdf_menu li:hover,
.assignfeedback_editpdf_menu li:hover a,
.assignfeedback_editpdf_menu li a:hover {
    background-color: #ebebeb;
    background-image: radial-gradient(ellipse at center, #ffffff 60%,#dfdfdf 100%);
}
ul.assignfeedback_editpdf_menu {
    margin: 0px;
}
.assignfeedback_editpdf_menu li {
    list-style-type: none;
    margin: 0px;
    border-radius: 4px;
}
.assignfeedback_editpdf_menu li img {
    height: auto;
}
.assignfeedback_editpdf_menu li button {
    margin: 0px;
    background: none;
}

.assignfeedback_editpdf_widget .pageheader button:hover {
    background-color: #ebebeb;
    background-image: radial-gradient(ellipse at center, #ffffff 60%,#dfdfdf 100%);
}

.assignfeedback_editpdf_widget .pageheader button.assignfeedback_editpdf_selectedbutton:hover,
.assignfeedback_editpdf_widget .pageheader button.assignfeedback_editpdf_selectedbutton {
    background-color: #dfdfdf;
    background-image: radial-gradient(ellipse at center, #ffffff 40%,#dfdfdf 100%);
}

.assignfeedback_editpdf_widget .commentdrawable img {
    padding: 1px;
}

.assignfeedback_editpdf_widget .commentdrawable a {
    float: right;
    position: relative;
    left: -17px;
    top: 2px;
    height: 14px;
    background-color: white;
    border-left: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    line-height: 14px;
}

.dir-rtl .assignfeedback_editpdf_widget .commentdrawable a {
    float: left;
    left: none;
    right: -17px;
    border-left: 0px;
    border-right: 1px solid #ccc;
}

.assignfeedback_editpdf_widget .commentdrawable textarea {
    padding: 4px;
    padding-right: 20px;
    resize: none;
    overflow: hidden;
    color: black;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    font-family: helvetica;
    min-height: 1.2em;
}

.assignfeedback_editpdf_widget .commentdrawable {
    display: inline-block;
}

.dir-rtl .assignfeedback_editpdf_widget .commentdrawable textarea {
    padding-left: 20px;
    padding-right: 4px;
}
.assignfeedback_editpdf_widget .drawingcanvas .loading .progressbarlabel {
    text-align: center;
}
.hideoverflow {
    overflow: hidden;
    position: relative;
}


