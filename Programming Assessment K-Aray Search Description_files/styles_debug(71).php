/** Path: plugin gradingform_guide .' **/
.gradingform_guide-regrade {padding:10px;background:#FFDDDD;border:1px solid #F00;margin-bottom:10px;}
.gradingform_guide-restored {padding:10px;background:#FFFFDD;border:1px solid #FF0;margin-bottom:10px;}
.gradingform_guide-error {color:red;font-weight:bold;}

.gradingform_guide_editform .status {font-weight:normal;text-transform:uppercase;font-size:60%;padding:0.25em;border:1px solid #EEE;}
.gradingform_guide_editform .status.ready {background-color:#e7f1c3;border-color:#AAEEAA;}
.gradingform_guide_editform .status.draft {background-color:#f3f2aa;border-color:#EEEE22;}

.gradingform_guide.editor .criterion .controls,
.gradingform_guide .criterion .description,
.gradingform_guide .criterion .remark {vertical-align: top;}

.gradingform_guide.editor .criterion .controls,
.gradingform_guide.editor .criterion .description,
.gradingform_guide.editor .criterion .remark {padding:3px;}

.gradingform_guide .criteria {height:100%;}
.gradingform_guide .criterion {border:1px solid #DDD;overflow: hidden;}
.gradingform_guide .criterion.even {background:#F0F0F0;}

.gradingform_guide .criterion .description {width:100%;}
.gradingform_guide .criterion .description .criterionmaxscore input {width:20px;}
.gradingform_guide .criterion .description .criterionname {font-weight:bold;}
.gradingform_guide .criterion label {font-weight:bold; padding-right: 5px}

.gradingform_guide .plainvalue.empty {font-style: italic; color: #AAA;}
.gradingform_guide .plainvalue.editname {font-weight:bold;}

/* Make invisible the buttons 'Move up' for the first criterion and 'Move down' for the last, because those buttons will make no change */
.gradingform_guide.editor .criterion.first.last .controls .delete input,
.gradingform_guide.editor .criterion.first .controls .moveup input,
.gradingform_guide.editor .criterion.last .controls .movedown input {display:none;}

/* replace buttons with images */
.gradingform_guide.editor .delete input,
.gradingform_guide.editor .moveup input,
.gradingform_guide.editor .movedown input{text-indent: -1000em;cursor:pointer;border:none;}
.gradingform_guide.editor .criterion .controls .delete input {width:20px;height:16px;background: transparent url(/theme/image.php?theme=clean&component=core&image=t%2Fdelete) no-repeat center top;margin-top:4px;}
.gradingform_guide.editor .moveup input {width:20px;height:15px;background: transparent url(/theme/image.php?theme=clean&component=core&image=t%2Fup) no-repeat center top;margin-top:4px;}
.gradingform_guide.editor .movedown input {width:20px;height:15px;background: transparent url(/theme/image.php?theme=clean&component=core&image=t%2Fdown) no-repeat center top;margin-top:4px;}

.gradingform_guide.editor .addcriterion input,
.gradingform_guide.editor .addcomment input {background: transparent url(/theme/image.php?theme=clean&component=core&image=t%2Fadd) no-repeat;display:block;color:#555555;font-weight:bold;text-decoration:none;}
.gradingform_guide.editor .addcriterion input,
.gradingform_guide.editor .addcomment input {background-position: 5px 8px;height:30px;line-height:29px;margin-bottom:14px;padding-left:20px;padding-right:10px;}

.gradingform_guide .options .optionsheading {font-weight:bold;font-size:1.1em;padding-bottom:5px;}
.gradingform_guide .options .option {padding-bottom:2px;}
.gradingform_guide .options .option label {margin-left: 5px;}
.gradingform_guide .options .option .value {margin-left: 5px;font-weight:bold;}

.gradingform_guide .criterion .description.error {background:#FFDDDD;}

/* special classes for elements created by guideeditor.js */
.gradingform_guide.editor .hiddenelement {display:none;}
.gradingform_guide.editor .pseudotablink {background-color:transparent;border:0 solid;height:1px;width:1px;color:transparent;padding:0;margin:0;position:relative;float:right;}

.jsenabled .gradingform_guide .markingguidecomment {cursor: pointer;}
.jsenabled .gradingform_guide .markingguidecomment:before {
    content: url(/theme/image.php?theme=clean&component=core&image=t%2Fadd);
    padding-right:2px;
}
.dir-rtl.jsenabled .gradingform_guide .markingguidecomment:before {
    padding-right: 0;
    padding-left: 2px;
}
.gradingform_guide .commentheader  {font-weight:bold;font-size:1.1em;padding-bottom:5px;}

.jsenabled .gradingform_guide .criterionnamelabel {display: none;}
.jsenabled .gradingform_guide .criterionshortname {font-weight:bold;}
.gradingform_guide table {width: 100%}
.gradingform_guide .descriptionreadonly {
    vertical-align: top;
}
.gradingform_guide .criteriondescriptionmarkers {width: 300px;}
.gradingform_guide .markingguideremark {
    margin: 0;
    width: 100%;
    -moz-box-sizing: border-box;
         box-sizing: border-box;
}
.gradingform_guide .criteriondescriptionscore {display: inline;}
.gradingform_guide .score label {
    display: block;
}
.gradingform_guide .score input {
    margin: 0;
    width: auto;
}


