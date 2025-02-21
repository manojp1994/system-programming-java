/** Path: plugin editor_atto .' **/
.editor_atto_content_wrap {
    background-color: white;
    color: #333;
}
.editor_atto_content {
    padding: 4px;
    resize: vertical;
    overflow: auto;
}

.editor_atto_content_wrap,
.editor_atto + textarea {
    width: 100%;
    padding: 0;
    border: 1px solid #BBB;
    border-top: none;
}

.editor_atto + textarea {
    border-radius: 0;
    resize: vertical;
    margin-top: -1px;
}

div.editor_atto_toolbar {
    display: block;
    background: #F2F2F2;
    min-height: 35px;
    border: 1px solid #BBB;
    width: 100%;
    padding: 0 0 9px 0;
}

div.editor_atto_toolbar button {
    padding: 4px 9px;
    background: none;
    border: 0;
    margin: 0;
    border-radius: 0;
    cursor: pointer;
    line-height: initial;
 }

div.editor_atto_toolbar button + button {
   border-left: 1px solid #CCC;
}

div.editor_atto_toolbar button[disabled] {
    opacity: .45;
    background: none;
    cursor: default;
}

.editor_atto_toolbar button:hover {
    background-image: radial-gradient(ellipse at center, #ffffff 60%,#dfdfdf 100%);
    background-color: #ebebeb;
}

.editor_atto_toolbar button:active, .editor_atto_toolbar button.highlight {
    background-image: radial-gradient(ellipse at center, #ffffff 40%,#dfdfdf 100%);
    background-color: #dfdfdf;
}

/* Make firefox button sizes match other browsers */
div.editor_atto_toolbar button::-moz-focus-inner {
    border:0;
    padding:0;
}

div.editor_atto_toolbar button img.icon {
    padding: 0px;
    margin: 2px 0;
    /* The following is dedicated to the beloved IE8, clashing with Bootstrap. God bless you IE. */
    vertical-align: text-bottom;
    width: auto;
    height: auto;
}

div.editor_atto_toolbar div.atto_group {
    display: inline-block;
    border: 1px solid #CCC;
    border-bottom: 1px solid #B3B3B3;
    border-radius: 4px;
    margin: 9px 0 0 9px;
    background: #FFF;
}

.editor_atto_content img {
    resize: both; overflow: auto;
}

.atto_hasmenu {
    /* IE8 places the images on top of each other if that is not set. */
    white-space: nowrap;
}

.atto_menuentry img {
    width: 16px;
    height: 16px;
}

.atto_menuentry {
    clear: left;
}

.atto_menuentry h1,
.atto_menuentry h2,
.atto_menuentry p {
    margin: 4px;
}


.atto_form label.sameline {
    display: inline-block;
    min-width: 10em;
}
.atto_form textarea.fullwidth,
.atto_form input.fullwidth {
    width: 100%;
}
.atto_form {
    padding-left: 30px;
    padding-right: 30px;
}
.atto_form label {
    display: block;
    margin: 0 0 5px 0;
}

/* RTL Rules */
body.dir-rtl div.editor_atto_toolbar button + button {
    border-left: 0;
    border-right: 1px solid #CCC;
}

body.dir-rtl div.editor_atto_toolbar img.icon {
    padding: 0;
}

body.dir-rtl div.editor_atto_toolbar div.atto_group {
    margin: 9px 9px 0 0;
}

.atto_control {
    position: absolute;
    right: -6px;
    bottom: -6px;
    display: none;
    cursor: pointer;
}
.atto_control img {
    background-color: white;
}
div.editor_atto_content:focus .atto_control,
div.editor_atto_content:hover .atto_control {
    display: block;
}

.editor_atto_menu.yui3-menu-hidden {
    display: none;
}

/* Get broken images back in firefox */
.editor_atto_content img:-moz-broken {
    -moz-force-broken-image-icon:1;
    min-width:24px;
    min-height:24px;
}

/* Atto menu styling */
.moodle-dialogue-base .editor_atto_menu .moodle-dialogue-content .moodle-dialogue-bd {
    padding: 0;
    z-index: 1000;
}

.editor_atto_menu .dropdown-menu > li > a {
  padding: 3px 14px;
}

.editor_atto_menu .open ul.dropdown-menu {
    padding-top: 5px;
    padding-bottom: 5px;
}
.editor_atto_wrap {
    position: relative;
}
.dir-rtl .editor_atto_wrap textarea {
    direction: ltr;
}
.editor_atto_notification{
    position: absolute;
    bottom: -1.5em;
    height: 1.5em;
    margin-top: 1px;
    cursor: pointer;
}
.editor_atto_notification .atto_info,
.editor_atto_notification .atto_warning {
    display: inline-block;
    background-color: #F2F2F2;
    padding: 0.5em;
    padding-left: 1em;
    padding-right: 1em;
    border-bottom-left-radius: 1em;
    border-bottom-right-radius: 1em;
}
.editor_atto_notification .atto_info {
    background-color: #F2F2F2;
}
.editor_atto_notification .atto_warning {
    background-color: #FFD700;
}
.editor_atto_toolbar,
.editor_atto_content_wrap,
.editor_atto + textarea {
    box-sizing: border-box;
}
.dir-rtl .editor_atto_notification .atto_info,
.dir-rtl .editor_atto_notification .atto_warning {
    border-bottom-right-radius: 1em;
    border-bottom-left-radius: 1em;
}
.dir-ltr .editor_atto_notification {
    right: 0;
}
.dir-rtl .editor_atto_notification {
    left: 0;
}


