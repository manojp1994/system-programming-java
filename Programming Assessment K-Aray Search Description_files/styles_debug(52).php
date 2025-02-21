/** Path: plugin filter_poodll .' **/
/* playlist style */
div.poodllplaylist {
    width:397px;
    height:150px;
    overflow-y:auto;
    overflow-x:hidden;
    border:1px solid #ccc;
    padding:1px 1px 12px 1px;
    background-color:#495171;
    margin-top:5px;
    float:left;
}
 
/* playlist entry */
 div.poodllplaylist a {
    display:block;
    width:380px;
    height:18px;
    padding:3px;
    background-color:#fff;
    border:1px solid #ccc;
    font:11px "bitstream vera sans", "lucida grande",verdana;
    text-decoration:none;
    margin-top:0px;
    color:#666;
}
 
/* different states of a playlist entry */
div.poodllplaylist a:hover {
    background-color:#c0c4d5;
	color:#0;
}
 
div.poodllplaylist a.progress {
    background-color:#efefef;
	color:#0;
}
 
div.poodllplaylist a.playing {
    border:1px solid #666;
    background-color:#c0c4d5;
	color:#0;
}
 
div.poodllplaylist a.paused {
    border:1px solid #666;
    background-color:#c0c4d5;
	color:#0;
}
 
/* elements inside playlist entry */
div.poodllplaylist a img {
    border:0;
    float:left;
    margin-right:10px;
}
 
div.poodllplaylist a strong {
    color:blue;
    padding-bottom:5px;
}
 
div.poodllplaylist a em {
    border:0;
    float:left;
    margin-right:10px;
    background:url(/media/img/demos/clock.gif) no-repeat 0 50%;
    padding-left:20px;
    color:#333;
    font-style:normal;
    margin-top:10px;
}

/* root element should be positioned relatively so that
    child elements can be positioned absolutely */
.fpjscontrols {
    position:relative;
    height:40px;

    /* black background with a gradient */
    background:#000 url(/filter/poodll/flowplayer/fpjscontrols.png) repeat-x 0 -4px;
    width:400px;
}

/* play/pause button */
.fpjscontrols .play, .fpjscontrols .pause {
    position:absolute;
    width: 46px;
    height: 40px;
    display:block;
    text-indent:-9999em;
    background:url(/filter/poodll/flowplayer/fpjscontrols.png) no-repeat 10px -61px;
    cursor:pointer;
    border-right:1px solid #000;
}

.fpjscontrols .play:hover {
    background-position:10px -105px;
}

/* pause state */
.fpjscontrols .pause {
    background-position:11px -148px;
}

.fpjscontrols .pause:hover {
    background-position:11px -192px;
}

/* the timeline (or "scrubber")  */
.fpjscontrols .track {
    left:47px;
    position:absolute;
    cursor:pointer;
    width:185px;
    border-left:1px solid #999;
    height:40px;
}

/* the draggable playhead */
.fpjscontrols .playhead {
    position:absolute;
    cursor:pointer;
    background-color:#4ff;
    opacity:0.3;
    filter: alpha(opacity=30);
    width:3px;
    height:40px;
    border-right:1px solid #444;
}

/* buffer- and progress bars. upon runtime the width of these elements grows */
.fpjscontrols .progress, .fpjscontrols .buffer {
    position:absolute;
    background-color:#4ff;
    filter: alpha(opacity=10);
    opacity:0.1;
    width:0px;
    height:40px;
}

.fpjscontrols .buffer {
    background-color:#fff;
    opacity:0.1;
    filter: alpha(opacity=10);
}

/* time display */
.fpjscontrols .time {
    position:absolute;
    width:129px;
    left:230px;
    padding:12px 0;
    text-align:center;
    border:1px solid #999;
    border-width:0 1px;
    font-size:12px;
    color:#fff;
}

/* total duration in time display */
.fpjscontrols .time strong {
    font-weight:normal;
    color:#666;
}

/* mute / unmute buttons */
.fpjscontrols .mute, .fpjscontrols .unmute {
    position:absolute;
    left:360px;
    width:40px;
    height:40px;
    text-align:center;
    padding:8px 0;
    cursor:pointer;
    text-indent:-9999em;
    background:url(/filter/poodll/flowplayer/fpjscontrols.png) no-repeat 5px -323px;
}

.fpjscontrols .mute:hover {
    background-position:5px -367px;
}

/* unmute state */
.fpjscontrols .unmute {
    background-position:5px -235px;
}

.fpjscontrols .unmute:hover {
    background-position:5px -279px;
}

/* For HTML5 Uploads */
.p_progress p
{
	display: none;
	width: 240px;
	padding: 2px 5px;
	margin: 2px 0;
	border: 1px inset #446;
	border-radius: 5px;
	background: #eee url("/filter/poodll/progress.png") 100% 0 repeat-y;
}

.p_progress p.success
{
	background: #0c0 none 0 0 no-repeat;
}

.p_progress p.failed
{
	background: #c00 none 0 0 no-repeat;
}

.p_messages 
{
	float: left;
}

.p_btn {
display: inline-block;
cursor: pointer;
padding: 7px 10px;
font-weight: 700;
line-height: 1;
color: white;
background: #345;
border: 0;
-moz-border-radius: 4px;
-webkit-border-radius: 4px;
border-radius: 4px;
}

.w_btn {
display: inline-block;
float: right;
}

.whiteboard-wrapper .p_btn {
float: right;
}

.p_btn_wrapper {
display: inline-block;
margin: 0;
position: relative;
overflow: hidden;
cursor: pointer;
}

.p_btn_wrapper [type="file"] {
position: absolute;
top: 0;
left: 0;
height: 45px;
filter: alpha(opacity=0);
-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
opacity: 0;
cursor: pointer;
}


.p_scrollbox {
	position: relative;
}

.xaxis{
	white-space: pre;
	display: inline-block;
}

.p_scrollboxcontainer {
    overflow: hidden;
    border : 1px solid black;
    padding: 3px;
    position: relative;
}

.p_scroll_btn_wrapper {
position: absolute;
z-index: 10;
top: 50%;
left: 50%;
}

.p_scroll_btn_wrapper .p_btn {
background: #E20022;
position: relative;
top: -50%;
left: -50%;

}


.os_version_warning { 
	border: 1px solid #ff0000; 
	font-size:14px; 
	font-weight:bold; 
	margin:10px; 
}
.fs-container {
	margin: auto;
	margin-top: 8px;
}
.literally {
    width: 100%;
    height: 100%;
}

/* Drawingboard.js */
.drawing-board,.drawing-board *{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}.drawing-board-utils-hidden,.drawing-board-controls-hidden{display:none!important}.drawing-board{position:relative;display:block}.drawing-board-canvas-wrapper{position:relative;margin:0;border:1px solid #ddd}.drawing-board-canvas{position:absolute;top:0;left:0;z-index:10;width:auto}.drawing-board-canvas{cursor:crosshair;z-index:20}.drawing-board-cursor{position:absolute;top:0;left:0;pointer-events:none;border-radius:50%;background:#ccc;background:rgba(0,0,0,.2);z-index:30}.drawing-board-control>button,.drawing-board-control-colors-rainbows,.drawing-board-control-size .drawing-board-control-inner,.drawing-board-control-size-dropdown{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;overflow:hidden;border:0;background-color:#eee;padding:2px 4px;border:1px solid #ccc;box-shadow:0 1px 3px -2px #121212,inset 0 2px 5px 0 rgba(255,255,255,.3);-webkit-box-shadow:0 1px 3px -2px #121212,inset 0 2px 5px 0 rgba(255,255,255,.3);height:28px}.drawing-board-control>button{cursor:pointer;min-width:28px;line-height:14px}.drawing-board-control>button:hover,.drawing-board-control>button:focus{background-color:#ddd}.drawing-board-control>button:active,.drawing-board-control>button.active{box-shadow:inset 0 1px 2px 0 rgba(0,0,0,.2);-webkit-box-shadow:inset 0 1px 2px 0 rgba(0,0,0,.2);background-color:#ddd}.drawing-board-control>button[disabled]{color:gray}.drawing-board-control>button[disabled]:hover,.drawing-board-control>button[disabled]:focus,.drawing-board-control>button[disabled]:active,.drawing-board-control>button[disabled].active{background-color:#eee;box-shadow:0 1px 3px -2px #121212,inset 0 2px 5px 0 rgba(255,255,255,.3);-webkit-box-shadow:0 1px 3px -2px #121212,inset 0 2px 5px 0 rgba(255,255,255,.3);cursor:default}.drawing-board-controls{margin:0 auto;text-align:center;font-size:0;display:table;border-spacing:9.33333px 0;position:relative;min-height:28px}.drawing-board-controls[data-align=left]{margin:0;left:-9.33333px}.drawing-board-controls[data-align=right]{margin:0 0 0 auto;right:-9.33333px}.drawing-board-canvas-wrapper+.drawing-board-controls,.drawing-board-controls+.drawing-board-canvas-wrapper{margin-top:5px}.drawing-board-controls-hidden{height:0;min-height:0;padding:0;margin:0;border:0}.drawing-board-control{display:table-cell;border-collapse:separate;vertical-align:middle;font-size:16px;height:100%}.drawing-board-control-inner{position:relative;height:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.drawing-board-control>button{margin:0;vertical-align:middle}.drawing-board-control-colors{font-size:0;line-height:0}.drawing-board-control-colors-current{border:1px solid #ccc;cursor:pointer;display:inline-block;width:26px;height:26px}.drawing-board-control-colors-rainbows{display:inline-block;margin-left:5px;position:absolute;left:0;top:33px;margin-left:0;z-index:100;width:250px;height:auto;padding:4px}.drawing-board-control-colors-rainbow{height:18px}.drawing-board-control-colors-picker:first-child{margin-right:5px}.drawing-board-control-colors-picker{display:inline-block;width:18px;height:18px;cursor:pointer}.drawing-board-control-colors-picker[data-color="rgba(255, 255, 255, 1)"]{width:16px;height:17px;border:1px solid #ccc;border-bottom:0}.drawing-board-control-colors-picker:hover{width:16px;height:16px;border:1px solid #555}.drawing-board-control-drawingmode>button{margin-right:2px}.drawing-board-control-drawingmode>button:last-child{margin-right:0}.drawing-board-control-drawingmode-pencil-button{overflow:hidden;*text-indent:-9999px;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAe9JREFUeNpiZAACVlFRBhYREQZcQPnbNwa3N28YlL5+ZfgLFfvPwGD9m4FhIgsDHuAO0gTUDNKIBvyBmqt/MTDMY8Gl0f31azD7L6oUIxCnAzWmAPHBfwwM01AMUAV6JfPQIVwOYgVqqPnFyOjz6///O38YGKpAgmAD1OXlGdTk5PD5hgeouZudj8/uy9evP/78/dsFFPsJNiAoKIiBABAHap4oLi9v8fTNm48//v7NBwbgWZgkE7rqt8DY+A8JZRBW+cfIuEDT0NDlzadP3z98/doPFDuCrB7TAGFhBqCNIGwM9OcKUzs7+xdv3355+f79VqDYAiTDwZgJh7ONgYpnOvn4GL949erT7UePdgL5JVCD4fgBLBBxaX74+PG789evnwby0/8jKXgExIeB+CG6Af///1e9Ki9vFSAkZPzoyZPPJy9evA9MB77/sWiEARZkzV+/fvXYtGnTpG3btj28EBT0BqjZ5D8OjXCwPksUhA1Wpggf/PHjx/9169Y9EBERaUlgZmaIAcrLE4rk5sIqBqDmlefnRPzfWGX5EaSZm5ubgRloADGA5QZ3RgK7gESY4PMNn9ZtObPpzZvfU4DiYkiB/RcHG+S7fyxAMH/lFU2GOZd2bLx18/cEUMoD4j9I+DcS/RtJHGTYf4AAAwAxaOMYHjxKFwAAAABJRU5ErkJggg==');background-position:50% 50%;background-repeat:no-repeat}.drawing-board-control-drawingmode-pencil-button:before{content:"";display:block;width:0;height:100%}.drawing-board-control-drawingmode-eraser-button{overflow:hidden;*text-indent:-9999px;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAkpJREFUeNp0kk+IElEcx39vFBc9+OfQRTAwzFt4CaYOKStj6MoeculStzoIQSB4kCVckmDx4iGCXWYJIqjoVOzO1l4qT1F7WfBWHvxzDPyTB3XUmXn93suRybUffHmP997n9/cRsFgwGARJkiAcDsPlwgEIeEZQAhCRAkgAlOD6SQP4rgMFDWVnYCAQgFgsBqFQCBwOByzZNQOotPHx1RNCCCipu6bfb+zSnslkeOQVILPrBkAirbws9btdTEWAzZPXpfepOzaeGMBXwe/3w3+MwTc3Dl+UeghTiskbBvR6Pbh18mZHB0jjmxvCKhIfR37s3r+Sevf8ca/T4TBF2HTSODuDxP7uNjrZFFbBk8lEzOVyspa4ykGYw2zfbTb/7ilvok1YhlVVFfP5vDydTkHXdXDdlhZOOnPY4/HA0YPtp3h6LFjh8XgsFgoFGTPgsKm1zDr8ajTQh8Fh5eGjZzjGI8yjKlgjF4tFGdd/YKYmRja24hw+zu3sYe2HiH3hYzQjl8tleTQanWtou93G6Qngdrth6+1+9h6hTULJZ/PeziJXKhV5OByeg1ut1gJOp9NZTdNOcQ419ot+ggp1qoLdBFmqVmNpm3A8Huewy+Wq1RH8QH9zmBlJJpMRdCIqiiIPBgN+2MCGsW/r8/kgGo1m0fmpzWarseayHlmNeL1eFiWC0cRqtSr3+/3FpSiKHMZtjU1glbFyfKgLTqfzEka9OJvNeDnzz1JnCaFmqOl8ZdJY1SiDOXCiXKg1NtG5DIt0y6ov3dE/AgwAENFWYYLj4mYAAAAASUVORK5CYII=');background-position:50% 50%;background-repeat:no-repeat}.drawing-board-control-drawingmode-eraser-button:before{content:"";display:block;width:0;height:100%}.drawing-board-control-drawingmode-filler-button{overflow:hidden;*text-indent:-9999px;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAnNJREFUeNp0k0trE1EUx89MJpNJooYYXBgDNtCKdRPwlbqoCKUtaNVNA0Uo7UbMxoVPEARTXEi+QWfnwn6DEAlEkrSLttTGRiULEQlJ8yChmbzI++E50yTUJA78uMy953/u/557LmOz2WDEZ2m1WrckSRJSqdR2tVrdHQyYebwHtVoNuFHqTqczhQnWKaBYLDoKhcIuzgHDMKBSqeD20qd+LNdsNocSoFhRr9ctpVLJigl4xIIJQizLAmG4cAPa7bYcy9Iug5TL5UYikbD6/X7Rbre/IUcYe3WUW5ZsnQQzW9LpNOPz+UQc5aBM5mgdh7vI9FCCAesW2tnr9YqZTAby+bw8f3AQRP6853n+Ph5hemSCntjj8YjZbFYWx2IxeS2RSEMwuA87O79eqdXquVolK+GxnP0EPbHb7RZJSGABIR6PA11zJHKIR2MhHA5DIPDj7eH3j95KpfK60Wg8Yntil8slkqgnpioLghacTidoNDpEC3q9HnheCc3s1jZeLcW943pirPw/4lKpBkqlDubnl/riycnLsLy88EKj0fhzuRyZv8RFo1E6wpBYkiqy7Z54YmIcVlYeyOKC4mYwJ0nHRaQuM5vNT6hB/iceG7sIq6sPnwmC4MerDkby40AOCCoiddie1Wp92W7zQ2KTyQSLizNP8T0EsPLBbxEDnCj0GkM2qIEwyZRCobizsfH5A1ZXFhuN52F29vpz3HkL574mk8lj24Y5wsHkvjjoX0BOIWc5jruHzbK2ufmzEwpFO3jnDhQv4JoROYdoERVyGjEgZ8iBDlF3FzXo4go6utZ9lftY4N/dXisjR0i1G0ublv8KMAA0ZoUlicxrhwAAAABJRU5ErkJggg==');background-position:50% 50%;background-repeat:no-repeat}.drawing-board-control-drawingmode-filler-button:before{content:"";display:block;width:0;height:100%}.drawing-board-control-navigation>button{font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:700;margin-right:2px}.drawing-board-control-navigation>button:last-child{margin-right:0}.drawing-board-control-size[data-drawing-board-type=range] .drawing-board-control-inner{width:75px}.drawing-board-control-size[data-drawing-board-type=dropdown] .drawing-board-control-inner{overflow:visible}.drawing-board-control-size-range-input{position:relative;width:100%;z-index:100;margin:0;padding:0;border:0}.drawing-board-control-size-range-current,.drawing-board-control-size-dropdown-current span,.drawing-board-control-size-dropdown span{display:block;background:#333;opacity:.8}.drawing-board-control-size-range-current{display:inline-block;opacity:.15;position:absolute;pointer-events:none;left:50%;top:50%;z-index:50}.drawing-board-control-size-dropdown-current{display:block;height:100%;width:40px;overflow:hidden;position:relative}.drawing-board-control-size-dropdown-current span{position:absolute;left:50%;top:50%}.drawing-board-control-size-dropdown{position:absolute;left:-6px;top:33px;height:auto;list-style-type:none;margin:0;padding:0;z-index:100}.drawing-board-control-size-dropdown li{display:block;padding:4px;margin:3px 0;min-height:16px}.drawing-board-control-size-dropdown li:hover{background:#ccc}.drawing-board-control-size-dropdown span{margin:0 auto}.drawing-board-control-download-button{overflow:hidden;*text-indent:-9999px;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAoBJREFUeNqMkr9PU1EUx7/vR1tQ3yu10hAmTawtBSYSy2YccFOcnDQm/gewOLnj5GYMg4sdXFxkMca4OBAwdUBe/ZkIGFp+9tHXvh/3/fTcAm01aLzJybnn3nM+95tzrnDl6Tb+sibuTmWUWj3C6/Juk+LySUmyvt0FCKKA02ryOCy6LBiu15ngMbZ5DDCNBqIw6gKM+n4nECUJru3glKry8CpjQaHVYmC2rVH82DIMMMdGGARdwJ+SPNdFS9chx+MXDNMp/NzagWNatk/nQU/hiYAoih6FYTBCBs9zUXMCbAhx2OYOv351lPOJ3EwH4LteL6Dcp/Rfu3FrstDyIizt+agpaYxNDU0M9gl4v7Ck+TYrCYLQqZHUyTtdQBiutPSGUflczSXHs5lVKwZdSOBMvwztxVvN0RtzsiyXBFHsAvL5PBSnCpXV2getILFiE2SjspYbuZzPiDSZ2vOXmlvX5yQqTmMfg9ZXqtls1wnT09OHEyAq0aFLg/gSXsSWq9wWk+p9PrCoYTwcijdLOfE7UsEufN9HGIYnT4EnTGIXe1KqtNNIvuNnGamxfi7SgQD/nIJCTbzOPQ/SQh1pud7T4M6W/8qFIw/5WAr5m7Ozsw9UVc069Fls2yJzSC5/lnc9RhaHZVnfSqUnEgXP2oBqtYqBgYG2+mKxmOVADnAcB4yxHgD1RzehKKns/LyV4gUHBweQy+UyRkdH6UKJ6fQDFxcXoWkaXJeRuTgUGCdLQJ9bx72lGZimGWs2m+083oN+2iiFQiGxvLy8RrDzudyltgrG3N8U2G8CrPz4sGYYRqJSqWR4H/jNWbJhUjAWi8XG8R/L87yPpGCVttVfAgwAVpZR+8tZC08AAAAASUVORK5CYII=');background-position:50% 50%;background-repeat:no-repeat}.drawing-board-control-download-button:before{content:"";display:block;width:0;height:100%}

/* literally canvas */
.literally{position:relative;background-color:#ddd;min-height:400px;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-ms-touch-action:none;user-select:none}.literally,.literally *{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}.literally>*{position:absolute}.literally .lc-picker{top:0;left:0;bottom:0;width:60px;background-color:#aaa}.literally .lc-drawing{top:0;right:0;bottom:65px;left:60px;cursor:default}.literally .lc-drawing>*{position:absolute;top:0;right:0;bottom:0;left:0}.literally .lc-options{right:0;bottom:0;left:60px;height:65px;background-color:#aaa}.literally .lc-picker{z-index:2;border-right:1px solid #555}.literally .lc-picker .toolbar-button{height:30px;line-height:30px;padding:0;cursor:pointer;text-align:center}.literally .lc-picker .toolbar-button{background:#f5f5f5;background-image:-webkit-linear-gradient(top, #f5f5f5, #d6d6d6);background-image:-moz-linear-gradient(top, #f5f5f5, #d6d6d6);background-image:-ms-linear-gradient(top, #f5f5f5, #d6d6d6);background-image:-o-linear-gradient(top, #f5f5f5, #d6d6d6);background-image:linear-gradient(to bottom, #f5f5f5, #d6d6d6);text-decoration:none;cursor:pointer}.literally .lc-picker .toolbar-button.selected:not(.disabled){background:#7dc2ef;background-image:-webkit-linear-gradient(top, #7dc2ef, #72aad0);background-image:-moz-linear-gradient(top, #7dc2ef, #72aad0);background-image:-ms-linear-gradient(top, #7dc2ef, #72aad0);background-image:-o-linear-gradient(top, #7dc2ef, #72aad0);background-image:linear-gradient(to bottom, #7dc2ef, #72aad0)}.literally .lc-picker .toolbar-button:hover:not(.disabled){background:#3cb0fd;background-image:-webkit-linear-gradient(top, #3cb0fd, #3498db);background-image:-moz-linear-gradient(top, #3cb0fd, #3498db);background-image:-ms-linear-gradient(top, #3cb0fd, #3498db);background-image:-o-linear-gradient(top, #3cb0fd, #3498db);background-image:linear-gradient(to bottom, #3cb0fd, #3498db)}.literally .lc-picker .toolbar-button:active:not(.disabled){background:#3498db;background-image:-webkit-linear-gradient(top, #3498db, #3cb0fd);background-image:-moz-linear-gradient(top, #3498db, #3cb0fd);background-image:-ms-linear-gradient(top, #3498db, #3cb0fd);background-image:-o-linear-gradient(top, #3498db, #3cb0fd);background-image:linear-gradient(to bottom, #3498db, #3cb0fd)}.literally .lc-picker .toolbar-button.disabled{cursor:default;background-image:none;background-color:#ddd}.literally .lc-picker .toolbar-button.disabled *{opacity:0.5}.literally .lc-picker .thin-button{width:30px;height:30px;border-bottom:1px solid #555;border-right:1px solid #555;cursor:pointer;float:left;position:relative}.literally .lc-picker .thin-button:nth-child(2n){border-right:none;width:29px}.literally .lc-picker .fat-button{clear:both;width:100%;border-bottom:1px solid #555}.literally .lc-picker .lc-pick-tool img{position:absolute;top:0;right:0;bottom:0;left:0;margin:auto;width:80%}.literally .lc-picker .color-well-label{border-bottom:1px solid #555;padding-bottom:4px;font-size:10px;line-height:1.2em;height:auto}.literally .lc-picker .color-well-label label{margin-bottom:2px}.literally .lc-picker .color-well-container{position:relative;z-index:2;width:30px;height:30px;border:1px solid #555;clear:both;margin:auto;overflow:visible}.literally .lc-picker .color-well-container .color-well-checker{position:absolute;width:50%;height:50%;background-color:black}.literally .lc-picker .color-well-container .color-well-color{position:absolute;top:0;right:0;bottom:0;left:0}.literally .lc-picker .color-picker-popup{position:absolute;z-index:1;left:39px;bottom:-30px;background-color:white;border:1px solid #555}.literally .lc-picker .color-picker-popup .color-row{clear:both}.literally .lc-picker .color-picker-popup .color-row .color-cell{cursor:pointer;width:20px;height:20px;line-height:20px;float:left}.literally .lc-picker .color-picker-popup .color-row .color-cell:hover,.literally .lc-picker .color-picker-popup .color-row .color-cell.selected{border:1px solid #555;line-height:18px}.literally .lc-picker .color-picker-popup .color-row .color-cell.transparent-cell{width:100%}.literally .lc-options{z-index:1;border-top:1px solid #555}.literally .lc-options .lc-stroke-widths{margin:0;padding:0}.literally .lc-options .lc-stroke-widths li{height:64px;padding:0 0 0 10px;list-style-type:none;display:table-cell;text-align:center;vertical-align:bottom}.literally .lc-options .lc-stroke-widths li .stroke-width-button{border:1px solid #555;margin:0 0 5px 0;padding:5px 5px 4px 5px}.literally .lc-options .lc-stroke-widths li .stroke-width-button{background:#f5f5f5;background-image:-webkit-linear-gradient(top, #f5f5f5, #d6d6d6);background-image:-moz-linear-gradient(top, #f5f5f5, #d6d6d6);background-image:-ms-linear-gradient(top, #f5f5f5, #d6d6d6);background-image:-o-linear-gradient(top, #f5f5f5, #d6d6d6);background-image:linear-gradient(to bottom, #f5f5f5, #d6d6d6);text-decoration:none;cursor:pointer}.literally .lc-options .lc-stroke-widths li .stroke-width-button.selected:not(.disabled){background:#7dc2ef;background-image:-webkit-linear-gradient(top, #7dc2ef, #72aad0);background-image:-moz-linear-gradient(top, #7dc2ef, #72aad0);background-image:-ms-linear-gradient(top, #7dc2ef, #72aad0);background-image:-o-linear-gradient(top, #7dc2ef, #72aad0);background-image:linear-gradient(to bottom, #7dc2ef, #72aad0)}.literally .lc-options .lc-stroke-widths li .stroke-width-button:hover:not(.disabled){background:#3cb0fd;background-image:-webkit-linear-gradient(top, #3cb0fd, #3498db);background-image:-moz-linear-gradient(top, #3cb0fd, #3498db);background-image:-ms-linear-gradient(top, #3cb0fd, #3498db);background-image:-o-linear-gradient(top, #3cb0fd, #3498db);background-image:linear-gradient(to bottom, #3cb0fd, #3498db)}.literally .lc-options .lc-stroke-widths li .stroke-width-button:active:not(.disabled){background:#3498db;background-image:-webkit-linear-gradient(top, #3498db, #3cb0fd);background-image:-moz-linear-gradient(top, #3498db, #3cb0fd);background-image:-ms-linear-gradient(top, #3498db, #3cb0fd);background-image:-o-linear-gradient(top, #3498db, #3cb0fd);background-image:linear-gradient(to bottom, #3498db, #3cb0fd)}.literally .lc-options .lc-stroke-widths li .stroke-width-button.disabled{cursor:default;background-image:none;background-color:#ddd}.literally .lc-options .lc-stroke-widths li .stroke-width-button.disabled *{opacity:0.5}.literally .lc-options .lc-font-settings{line-height:32.5px;padding-left:4px;background-color:#f5f5f5}.literally .lc-options .lc-font-settings input{margin:0 0.5em 0 0}.literally .lc-options .lc-font-settings input[type=checkbox]{margin:0 0.5em 0 0.5em}


