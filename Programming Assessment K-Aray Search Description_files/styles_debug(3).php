/** Path: plugin qtype_calculatedsimple .' **/
.que.calculatedsimple .answer {
    padding: 0.3em;
    width: auto;
    display: inline;
}
.que.calculatedsimple .answer input[type="text"] {
    width: 30%;
}

/* Editing form. */
body#page-question-type-calculatedsimple div[id^=fgroup_id_][id*=answeroptions_] {
    background: #EEE;
    margin-top: 0;
    margin-bottom: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #BBB;
    border-bottom: 0;
}

body#page-question-type-calculatedsimple div[id^=fgroup_id_][id*=answeroptions_] .fgrouplabel label{
    font-weight: bold;
}

body#page-question-type-calculatedsimple div[id^=fgroup_id_][id*=answeroptions_] label[for^='id_answer_'],
body#page-question-type-calculatedsimple div[id^=fgroup_id_][id*=answertolerance_] label[for^='id_tolerance_'],
body#page-question-type-calculatedsimple div[id^=fgroup_id_][id*=answerdisplay_] label[for^='id_correctanswerlength_'] {
    position: absolute;
    left: -10000px;
    font-weight: normal;
    font-size: 1em;
}

body#page-question-type-calculatedsimple div[id^=fgroup_id_][id*=answertolerance_],
body#page-question-type-calculatedsimple div[id^=fgroup_id_][id*=answerdisplay_] {
    background: #EEE;
    margin-bottom: 0;
    margin-top: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #BBB;
    border-top: 0;
    border-bottom: 0;
}

body#page-question-type-calculatedsimple div[id^=fitem_id_][id*=feedback_] {
    background: #EEE;
    margin-bottom: 2em;
    margin-top: 0;
    padding-bottom: 5px;
    padding-top: 5px;
    border: 1px solid #BBB;
    border-top: 0;
}


