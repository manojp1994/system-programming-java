/** Path: plugin qtype_calculated .' **/
.que.calculated .answer {
    padding: 0.3em;
    width: auto;
    display: inline;
}
.que.calculated .answer input[type="text"] {
    width: 30%;
}

/* Numeric INPUT text boxes should be left aligned in RTL mode
*/
#page-question-type-calculated.dir-rtl input[name^="answer"],
#page-question-type-calculated.dir-rtl input[name^="unit"],
#page-question-type-calculated.dir-rtl input[name^="multiplier"],
#page-question-type-calculated.dir-rtl input[name^="calcmax"],
#page-question-type-calculated.dir-rtl input[name^="calcmin"],
#page-question-type-calculated.dir-rtl input[name^="number"],
#page-question-type-calculated.dir-rtl input[name^="tolerance"]
{
    direction: ltr;
    text-align: left;
}

/* Editing form. */
body#page-question-type-calculated div[id^=fgroup_id_][id*=answeroptions_],
body#page-question-type-calculatedmulti div[id^=fgroup_id_][id*=answeroptions_] {
    background: #EEE;
    margin-top: 0;
    margin-bottom: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #BBB;
    border-bottom: 0;
}

body#page-question-type-calculated div[id^=fgroup_id_][id*=answeroptions_] .fgrouplabel label,
body#page-question-type-calculatedmulti div[id^=fgroup_id_][id*=answeroptions_] .fgrouplabel label {
    font-weight: bold;
}

body#page-question-type-calculated div[id^=fgroup_id_][id*=answeroptions_] label[for^='id_answer_'],
body#page-question-type-calculated div[id^=fgroup_id_][id*=answertolerance_] label[for^='id_tolerance_'],
body#page-question-type-calculated div[id^=fgroup_id_][id*=answerdisplay_] label[for^='id_correctanswerlength_'],
body#page-question-type-calculatedmulti div[id^=fgroup_id_][id*=answeroptions_] label[for^='id_answer_'],
body#page-question-type-calculatedmulti div[id^=fgroup_id_][id*=answerdisplay_] label[for^='id_correctanswerlength_'] {
    position: absolute;
    left: -10000px;
    font-weight: normal;
    font-size: 1em;
}

body#page-question-type-calculated div[id^=fgroup_id_][id*=answertolerance_],
body#page-question-type-calculated div[id^=fgroup_id_][id*=answerdisplay_],
body#page-question-type-calculatedmulti div[id^=fgroup_id_][id*=answertolerance_],
body#page-question-type-calculatedmulti div[id^=fgroup_id_][id*=answerdisplay_] {
    background: #EEE;
    margin-bottom: 0;
    margin-top: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #BBB;
    border-top: 0;
    border-bottom: 0;
}

body#page-question-type-calculated div[id^=fitem_id_][id*=feedback_],
body#page-question-type-calculatedmulti div[id^=fitem_id_][id*=feedback_] {
    background: #EEE;
    margin-bottom: 2em;
    margin-top: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #BBB;
    border-top: 0;
}


