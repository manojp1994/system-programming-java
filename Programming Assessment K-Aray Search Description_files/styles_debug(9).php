/** Path: plugin qtype_shortanswer .' **/
.que.shortanswer .answer {
    padding: 0.3em;
    width: auto;
    display: inline;
}
.que.shortanswer .answer input {
    width: 80%;
}

/* Editing form. */
body#page-question-type-shortanswer div[id^=fgroup_id_][id*=answeroptions_] {
    background: #EEE;
    margin-top: 0;
    margin-bottom: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #BBB;
    border-bottom: 0;
}

body#page-question-type-shortanswer div[id^=fgroup_id_][id*=answeroptions_] .fgrouplabel label{
    font-weight: bold;
}

body#page-question-type-shortanswer div[id^=fgroup_id_][id*=answeroptions_] label[for^='id_answer_']{
    position: absolute;
    left: -10000px;
    font-weight: normal;
    font-size: 1em;
}

body#page-question-type-shortanswer div[id^=fitem_id_][id*=fraction_] {
    background: #EEE;
    margin-bottom: 0;
    margin-top: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #BBB;
    border-top: 0;
    border-bottom: 0;
}

body#page-question-type-shortanswer div[id^=fitem_id_][id*=feedback_] {
    background: #EEE;
    margin-bottom: 2em;
    margin-top: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #BBB;
    border-top: 0;
}


