/** Path: plugin mod_chat .' **/
/** General Styles **/
.path-mod-chat .chat-event .picture,
.path-mod-chat .chat-message .picture {width:40px;}
.path-mod-chat .chat-event .text {text-align: left;}
.path-mod-chat #messages-list,
.path-mod-chat #users-list {list-style-type:none;padding:0;margin:0}
.path-mod-chat #chat-header {overflow: hidden;}
.path-mod-chat #chat-input-area table.generaltable td.cell {padding:1px;}

/** shrink the text box so the theme link is always accessible */
@media all and (max-device-width: 320px) {
    .path-mod-chat #input-message {width: 150px;}
}
@media all and (min-device-width: 321px) and (max-device-width: 640px) {
    .path-mod-chat #input-message {width: 175px;}
}

/** styles for view.php **/
#page-mod-chat-view .chatcurrentusers .chatuserdetails {vertical-align: middle;}

/** Styles for basic chat **/
#page-mod-chat-gui_basic #participants ul {margin:0;padding:0;list-style-type:none;}
#page-mod-chat-gui_basic #participants ul li {list-style-type:none;display:inline;margin-right:10px;}
#page-mod-chat-gui_basic #participants ul li .userinfo {display:inline;}
#page-mod-chat-gui_basic #messages {padding:0;margin:0}
#page-mod-chat-gui_basic #messages dl {padding:0;margin:6px 0}
#page-mod-chat-gui_basic #messages dt {margin-left:0;margin-right:5px;padding:0;display:inline;}
#page-mod-chat-gui_basic #messages dd {padding:0;margin:0}

/** Styles for header **/
#page-mod-chat-gui_header_js-jsupdate .chat-event,
#page-mod-chat-gui_header_js-jsupdate .chat-message {width:100%;}

/** YUI Overrides **/
.path-mod-chat .yui-layout-unit-top {background: #FFE39D;}
.path-mod-chat .yui-layout-unit-right {background: #FFD46B;}
.path-mod-chat .yui-layout-unit-bottom {background: #FFCB44;}
.path-mod-chat .yui-layout .yui-layout-hd {border:0;}
.path-mod-chat .yui-layout .yui-layout-unit div.yui-layout-bd {border:0;background: transparent;}
.path-mod-chat .yui-layout .yui-layout-unit div.yui-layout-unit-right {background: white;}


