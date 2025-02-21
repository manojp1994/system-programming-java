/** Path: plugin qtype_numerical .' **/
.que.numerical .answer {
    padding: 0.3em;
    width: auto;
    display: inline;
}
.que.numerical .answer input[type="text"] {
    width: 30%;
}

/* Numeric INPUT text boxes should be left aligned in RTL mode
*/
#page-question-type-numerical.dir-rtl input[name="unitpenalty"],
#page-question-type-numerical.dir-rtl input[name^="answer"],
#page-question-type-numerical.dir-rtl input[name^="tolerance"],
#page-question-type-numerical.dir-rtl input[name^="multiplier"],
#page-question-type-numerical.dir-rtl input[name^="unit"]
{
    direction: ltr;
    text-align: left;
}

/* Editing form. */
body#page-question-type-numerical div[id^=fgroup_id_][id*=answeroptions_] {
    background: #EEE;
    margin-top: 0;
    margin-bottom: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #BBB;
    border-bottom: 0;
}

body#page-question-type-numerical div[id^=fgroup_id_][id*=answeroptions_] .fgrouplabel label{
    font-weight: bold;
}

body.path-question-type div#fgroup_id_penaltygrp label[for^=id_unitpenalty],
body.path-question-type div[id^=fgroup_id_units_] label[for^='id_unit_'],
body#page-question-type-numerical div[id^=fgroup_id_][id*=answeroptions_] label[for^='id_answer_']{
    position: absolute;
    left: -10000px;
    font-weight: normal;
    font-size: 1em;
}

body#page-question-type-numerical div[id^=fitem_id_][id*=fraction_] {
    background: #EEE;
    margin-bottom: 0;
    margin-top: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #BBB;
    border-top: 0;
    border-bottom: 0;
}

body#page-question-type-numerical div[id^=fitem_id_][id*=feedback_] {
    background: #EEE;
    margin-bottom: 2em;
    margin-top: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #BBB;
    border-top: 0;
}


