/** Path: plugin mod_quiz .' **/
/** Bits that can appear on any page. */
.path-mod-quiz .statedetails {
    display: block;
    font-size: 0.7em;
}

/** Attempt and review pages **/
#page-mod-quiz-attempt #page .controls,
#page-mod-quiz-summary #page .controls,
#page-mod-quiz-review #page .controls {
    text-align: center;
    margin: 8px auto;
}

#page-mod-quiz-attempt .submitbtns,
#page-mod-quiz-review .submitbtns {
    clear: left;
    text-align: left;
    padding-top: 1.5em;
}

#page-mod-quiz-attempt.dir-rtl .submitbtns,
#page-mod-quiz-review.dir-rtl .submitbtns {
    text-align: right;
}

.path-mod-quiz .mod_quiz-redo_question_button {
    margin: 0;
}
.path-mod-quiz input[type="submit"].mod_quiz-redo_question_button {
    padding: 2px 0.8em;
    font-size: 1em;
}

#page-mod-quiz-attempt .mod_quiz-blocked_question_warning .que .formulation,
#page-mod-quiz-review .mod_quiz-blocked_question_warning .que .formulation {
    background: #eee;
    border: 1px solid #dcdcdc;
}

body.jsenabled .questionflagcheckbox {
    display: none;
}

#page-mod-quiz-attempt #connection-ok,
#page-mod-quiz-attempt #connection-error {
    position: fixed;
    top: 0;
    width: 80%;
    left: 10%;
    color: #555;
    border-radius: 0 0 10px 10px;
    box-shadow: 5px 5px 20px 0 #666666;
    padding: 1em 1em 0;
    z-index: 10000;
}

#page-mod-quiz-attempt #connection-error {
    background-color: #fcc;
}
#page-mod-quiz-attempt #connection-ok {
    background-color: #cfb;
    width: 60%;
    left: 20%;
}

/** Mod quiz attempt **/
.generalbox#passwordbox {
    /* Should probably match .generalbox#intro above */
    width: 70%;
    margin-left: auto;
    margin-right: auto;
}
#passwordform {
    margin: 1em 0;
}

/* Question navigation block. */
#quiznojswarning {
    color: red;
}
#quiznojswarning {
    font-size: 0.7em;
    line-height: 1.1;
}
.jsenabled #quiznojswarning {
    display: none;
}

.path-mod-quiz #user-picture {
    margin: 0.5em 0;
}
.path-mod-quiz #user-picture img {
    width: auto;
    height: auto;
    vertical-align: bottom;
}

.path-mod-quiz #mod_quiz_navblock h3.mod_quiz-section-heading {
    padding: 0.7em 0 0;
    margin: 0;
    clear: both;
}
.path-mod-quiz #mod_quiz_navblock h3.mod_quiz-section-heading:first-child {
    padding-top: 0;
}

.path-mod-quiz .qnbutton {
    display: block;
    position: relative;
    float: left;
    width: 1.5em;
    height: 1.5em;
    overflow: hidden;
    margin: 0.3em 0.3em 0.3em 0;
    padding: 0;
    border: 1px solid #bbb;
    background: #ddd;
    text-align: center;
    vertical-align: middle;
    line-height: 1.5em !important;
    font-weight: bold;
    text-decoration: none;
}
.path-mod-quiz.dir-rtl  .qnbutton {
    float: right;
}
.path-mod-quiz .qnbutton:visited:hover,
.path-mod-quiz .qnbutton:link:hover {
    text-decoration: underline;
}

.path-mod-quiz .qnbutton .trafficlight,
.path-mod-quiz .qnbutton .thispageholder {
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}

.path-mod-quiz .qnbutton.thispage {
    border-color: #666;
}
.path-mod-quiz .qnbutton.thispage .thispageholder {
    border: 1px solid #666;
}

.path-mod-quiz .qnbutton.flagged .trafficlight {
    background: url(/theme/image.php?theme=clean&component=quiz&image=navflagged) no-repeat top right;
}

.path-mod-quiz .qnbutton.blocked,
.path-mod-quiz .qnbutton.notyetanswered,
.path-mod-quiz .qnbutton.requiresgrading,
.path-mod-quiz .qnbutton.invalidanswer {
    background-color: white;
}
.path-mod-quiz .qnbutton.correct {
    background-color: #cfc;
}
.path-mod-quiz .qnbutton.correct .trafficlight {
    border-bottom: 3px solid #080;
}
.path-mod-quiz .qnbutton.partiallycorrect {
    background-color: #ffa;
}
.path-mod-quiz .qnbutton.notanswered,
.path-mod-quiz .qnbutton.incorrect {
    background-color: #fcc;
}
.path-mod-quiz .qnbutton.blocked {
    color: #999;
}
.path-mod-quiz .qnbutton.notanswered .trafficlight,
.path-mod-quiz .qnbutton.incorrect .trafficlight {
    border-top: 3px solid #800;
}

.path-mod-quiz .othernav {
    clear: both;
    margin: 0.5em 0;
}
.path-mod-quiz .othernav a,
.path-mod-quiz .othernav input {
    display: block;
    margin: 0.5em 0;
}

/* Countdown timer. */
#quiz-timer {
    display: none;
    margin-top: 1em;
}
#quiz-time-left {
    font-weight: bold;
}
#quiz-timer.timeleft15 {
    background: #ffffff;
}
#quiz-timer.timeleft14 {
    background: #ffeeee;
}
#quiz-timer.timeleft13 {
    background: #ffdddd;
}
#quiz-timer.timeleft12 {
    background: #ffcccc;
}
#quiz-timer.timeleft11 {
    background: #ffbbbb;
}
#quiz-timer.timeleft10 {
    background: #ffaaaa;
}
#quiz-timer.timeleft9 {
    background: #ff9999;
}
#quiz-timer.timeleft8 {
    background: #ff8888;
}
#quiz-timer.timeleft7 {
    background: #ff7777;
}
#quiz-timer.timeleft6 {
    background: #ff6666;
}
#quiz-timer.timeleft5 {
    background: #ff5555;
}
#quiz-timer.timeleft4 {
    background: #ff4444;
}
#quiz-timer.timeleft3 {
    background: #ff3333;
}
#quiz-timer.timeleft2 {
    background: #ff2222;
}
#quiz-timer.timeleft1 {
    background: #ff1111;
}
#quiz-timer.timeleft0 {
    background: #ff0000;
}

/** mod quiz mod **/
#page-mod-quiz-mod #id_reviewoptionshdr .fitem {
    width: 23%;
    margin-left: 10px;
}
#page-mod-quiz-mod #id_reviewoptionshdr fieldset.fgroup {
    width: 100%;
    text-align: left;
    margin-left: 0;
}
#page-mod-quiz-mod #id_reviewoptionshdr .fitem {
    float: left;
    width: 23%;
    clear: none;
}
#page-mod-quiz-mod.dir-rtl #id_reviewoptionshdr .fitem {
    float: right;
}

#page-mod-quiz-mod #id_reviewoptionshdr .fitemtitle {
    width: 100%;
    font-weight: bold;
    text-align: left;
    height: 2.5em;
    margin-left: 0;
}
#page-mod-quiz-mod.dir-rtl #id_reviewoptionshdr .fitemtitle {
    text-align: right;
}

#page-mod-quiz-mod #id_reviewoptionshdr fieldset.fgroup {
    clear: left;
    margin: 0 0 1em;
}
#page-mod-quiz-mod #id_reviewoptionshdr fieldset.fgroup > span {
    float: left;
    clear: left;
    line-height: 1.7;
}
#page-mod-quiz-mod.dir-rtl #id_reviewoptionshdr fieldset.fgroup > span {
    float: right;
    clear: right;
}
#page-mod-quiz-mod #id_reviewoptionshdr fieldset.fgroup span label {
    margin-left: 0.4em;
}

/** Mod quiz view **/
#page-mod-quiz-view .quizinfo,
#page-mod-quiz-view #page .quizgradefeedback,
#page-mod-quiz-view #page .quizattempt {
    text-align: center;
}
#page-mod-quiz-view #page .quizattemptsummary td p {
    margin-top: 0;
}
#page-mod-quiz-view table.quizattemptsummary tr.bestrow td {
    border-color: #bce8f1;
    background-color: #d9edf7;
}
table.quizattemptsummary .noreviewmessage {
    color: gray;
}
#page-mod-quiz-view .generaltable.quizattemptsummary {
    margin-left: auto;
    margin-right: auto;
}
#page-mod-quiz-view .generalbox#feedback {
    width: 70%;
    margin-left: auto;
    margin-right: auto;
    padding-bottom: 15px;
}
#page-mod-quiz-view .generalbox#feedback h2 {
    margin: 0;
}
#page-mod-quiz-view .generalbox#feedback h3 {
    text-align: left;
}
#page-mod-quiz-view.dir-rtl .generalbox#feedback h3 {
    text-align: center;
}
#page-mod-quiz-view .generalbox#feedback .overriddennotice {
    text-align: center;
    font-size: 0.7em;
}
.quizstartbuttondiv.quizsecuremoderequired input {
    display: none;
}
.jsenabled .quizstartbuttondiv.quizsecuremoderequired input {
    display: inline;
}

body.path-mod-quiz .gradedattempt,
body.path-mod-quiz table tbody tr.gradedattempt > td {
    border-color: #bce8f1;
    background-color: #d9edf7;
}

.quizattemptcounts {
    clear: left;
    text-align: center;
    display:inline;
    margin-left:20%;
}
.dir-rtl .quizattemptcounts {
    margin-left:0;
    margin-right: 20%;
}
#page-mod-quiz-view .quizattemptcounts,
.dir-rtl #page-mod-quiz-view .quizattemptcounts {
    display: block;
    margin-left: 0;
    margin-right: 0;
}

/** Mod quiz summary **/
#page-mod-quiz-summary #content {
    text-align: center;
}
#page-mod-quiz-summary .questionflag {
    vertical-align: text-bottom;
}
#page-mod-quiz-summary #quiz-timer {
    text-align: center;
    margin-top: 1em;
}
#page-mod-quiz-summary .submitbtns {
    margin-top: 1.5em;
}
@media print {
    .quiz-secure-window * {
        display: none !important;
    }
}

/** Mod quiz review **/
table.quizreviewsummary {
    width: 100%;
}
table.quizreviewsummary th.cell {
    padding: 1px 0.5em 1px 1em;
    font-weight: bold;
    text-align: right;
    width: 10em;
    background: #f0f0f0;
}
table.quizreviewsummary td.cell {
    padding: 1px 1em 1px 0.5em;
    text-align: left;
    background: #fafafa;
}
.dir-rtl table.quizreviewsummary td.cell {
    text-align: right;
}

/** Mod quiz make comment or override grade popup. **/
#page-mod-quiz-comment .mform {
    width: 100%;
}
#page-mod-quiz-comment .mform fieldset {
    margin: 0;
}
#page-mod-quiz-comment .que {
    margin: 0;
}

/** Mod quiz report **/
#page-mod-quiz-report h2.main {
    clear: both;
}
#page-mod-quiz-report div#commands,
#page-mod-quiz-report .controls {
    text-align: center;
}
#page-mod-quiz-report .dubious {
    background-color: #fcc;
}
#page-mod-quiz-report .highlight {
    border: 1px solid #bce8f1;
    background-color: #d9edf7;
}
#page-mod-quiz-report .negcovar {
    border : medium solid pink;
}
#page-mod-quiz-report .toggleincludeauto {
    text-align: center;
}
#page-mod-quiz-report .gradetheselink {
    font-size: 0.8em;
}
#page-mod-quiz-report .mform fieldset.fgroup span label {
    margin-right: 14px;
}
#page-mod-quiz-report table th {
    white-space: normal;
}
#page-mod-quiz-report table#attempts td,
#page-mod-quiz-report table.quizresponseanalysis td {
    word-wrap: break-word;
    max-width: 20em;
}
#page-mod-quiz-report table.titlesleft td.c0 {
    font-weight: bold;
}
#page-mod-quiz-report table .numcol {
    text-align: center;
    vertical-align : middle !important;
}

#page-mod-quiz-report table#attempts {
    clear: both;
    width: 80%;
    margin: 0.2em auto;
}
#page-mod-quiz-report table#attempts .header,
#page-mod-quiz-report table#attempts .cell {
    padding: 4px;
}
#page-mod-quiz-report table#attempts .header .commands {
    display: inline;
}
#page-mod-quiz-report table#attempts .picture {
    width: 40px;
}
#page-mod-quiz-report table#attempts td {
    border-left-width: 1px;
    border-right-width: 1px;
    border-left-style: solid;
    border-right-style: solid;
    vertical-align: middle;
}
#page-mod-quiz-report table#attempts .header {
    text-align: left;
}
#page-mod-quiz-report table#attempts .picture {
    text-align: center !important;
}
#page-mod-quiz-report table#attempts.grades span.que,
#page-mod-quiz-report table#attempts span.avgcell {
    white-space: nowrap;
}
#page-mod-quiz-report table#attempts span.que .requiresgrading {
    white-space: normal;
}
#page-mod-quiz-report table#attempts .questionflag {
    vertical-align: text-bottom;
    padding-left: 6px;
}
.dir-rtl#page-mod-quiz-report table#attempts .questionflag {
    padding-right: 6px;
    padding-left: 0;
}

#page-mod-quiz-report .graph.flexible-wrap {
    text-align: center;
    overflow: auto;
}

#page-mod-quiz-report #cachingnotice {
    margin-bottom: 1em;
    padding: 0.2em;
}
#page-mod-quiz-report #cachingnotice .singlebutton {
    margin: 0.5em 0 0;
}
#page-mod-quiz-report .bold .reviewlink {
    font-weight: normal;
}

#page-mod-quiz-report tr.lastrowforattempt {
    border-bottom: lightgrey solid 0.2em;
}

/** Mod quiz edit **/
#page-mod-quiz-edit .statusbar {
    margin: 0.6em 0.4em;
}
#page-mod-quiz-edit .statusdisplay {
    background-color: #ffc;
    clear: both;
    margin: 0.3em 0;
    padding: 1px 10px;
}
#page-mod-quiz-edit .statusdisplay p {
    margin: 4px 0;
}
#page-mod-quiz-edit .maxgrade,
#page-mod-quiz-edit .totalpoints {
    display: block;
    float: right;
    margin: -2.5em 0 0;
    padding: .2em;
}
#page-mod-quiz-edit.dir-rtl .maxgrade,
#page-mod-quiz-edit.dir-rtl .totalpoints {
    float: left;
}
#page-mod-quiz-edit .maxgrade label {
    display: inline;
}

#page-mod-quiz-edit li.activity > div,
#page-mod-quiz-edit li.pagenumber {
    position: relative;
}

#page-mod-quiz-edit ul.section li.pagenumber:first-child .add-menu-outer ul.menu li:first-child,
#page-mod-quiz-edit .last-add-menu .add-menu-outer ul.menu li:first-child {
    display: none;
}

#page-mod-quiz-edit .last-add-menu {
    position: relative;
    height: 1.5em;
    margin: 0 20px;
}
#page-mod-quiz-edit .add-menu-outer {
    position: absolute;
    right: 0;
}
#page-mod-quiz-edit.dir-rtl .add-menu-outer {
    right: auto;
    left: 0;
}

#page-mod-quiz-edit .slotnumber {
    background-color: #D3D3D3;
    text-align: center;
    margin: 0.1em 0.5em;
    min-width: 2em;
    display: inline-block;
}

#page-mod-quiz-edit .section-heading {
    font-size: 24px;
    margin-left: 20px;
    margin-bottom: 0;
    height: 40px;
}
#page-mod-quiz-edit .section-heading .instancesectioncontainer {
    display: inline;
}
#page-mod-quiz-edit .section-heading .instancesectioncontainer h3 {
    display: inline;
    color: #999;
}
#page-mod-quiz-edit .section-heading .editing_section,
#page-mod-quiz-edit .section-heading .editing_delete {
    margin-left: 10px;
}
#page-mod-quiz-edit .section-heading .sectioninstance {
    position: relative;
}
#page-mod-quiz-edit .section-heading form {
    display: inline;
    position: relative;
    top: 3px;
    left: -7px;
}
#page-mod-quiz-edit .section-heading form input {
    font-size: 24px;
    font-weight: bold;
    width: 50%;
}

#page-mod-quiz-edit .section-heading .instanceshufflequestions {
    float: right;
    margin: 0.3em 20px 0 0;
}

#page-mod-quiz-edit ul.section {
    margin: 0;
    padding: 0 20px;
}
#page-mod-quiz-edit ul.slots {
    margin: 0;
}
#page-mod-quiz-edit ul.slots li.section {
    border: 0;
}
#page-mod-quiz-edit ul.slots li.section .content {
    background-color:#FAFAFA;
    padding: 1px 0;
}
#page-mod-quiz-edit ul.slots li.section {
    list-style: none;
    margin: 0;
    padding: 0;
}
#page-mod-quiz-edit ul.slots li.section li.activity {
    background: #E6E6E6;
    margin: 3px 0;
    padding: 0.2em;
}
#page-mod-quiz-edit ul.slots li.section li.activity.page {
    background: transparent;
}
#page-mod-quiz-edit ul.slots li.section li.activity.page h4 {
    display: inline;
    font-weight: normal;
    font-size: 1em;
}

#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmarkcontainer {
    background: white;
    padding: 0.2em;
    margin: 0.4em;
}
#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmarkcontainer .editicon {
    width: 13px;
}
#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmarkcontainer.infoitem {
    background: transparent;
}
#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmarkcontainer form {
    display: inline;
}
#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmarkcontainer form input {
    margin: 0;
    padding: 0.2em;
    height: 1em;
}

#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmark {
    display: inline-block;
    text-align: right;
}
#page-mod-quiz-edit.dir-rtl ul.slots li.section li.activity .instancemaxmark {
    text-align: left;
}
#page-mod-quiz-edit ul.slots li.section li.activity .page_split_join_wrapper {
    position: absolute;
}
#page-mod-quiz-edit ul.slots li.section li.activity .page_split_join {
    position: relative;
    left: -20px;
    top: -7px;
}
#page-mod-quiz-edit.dir-rtl ul.slots li.section li.activity .page_split_join {
    left: auto;
    right: -20px;
}

#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmark.decimalplaces_0 {
    min-width: 1.3em;
}
#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmark.decimalplaces_1 {
    min-width: 2em;
}
#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmark.decimalplaces_2 {
    min-width: 2.6em;
}
#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmark.decimalplaces_3 {
    min-width: 3.2em;
}
#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmark.decimalplaces_4 {
    min-width: 3.7em;
}
#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmark.decimalplaces_5 {
    min-width: 4.3em;
}
#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmark.decimalplaces_6 {
    min-width: 4.8em;
}
#page-mod-quiz-edit ul.slots li.section li.activity .instancemaxmark.decimalplaces_7 {
    min-width: 5.45em;
}

#page-mod-quiz-edit ul.slots li.section li.activity .edit_icon,
#page-mod-quiz-edit ul.slots li.section li.activity a.preview,
#page-mod-quiz-edit ul.slots li.section li.activity .editing_delete,
#page-mod-quiz-edit ul.slots li.section li.activity .editing_maxmark {
    margin: 0 2px;
}
#page-mod-quiz-edit ul.slots li.section.only-has-one-slot li.activity .editing_move,
#page-mod-quiz-edit ul.slots li.section.only-has-one-slot li.activity .editing_delete {
    visibility: hidden;
}

#page-mod-quiz-edit ul.slots li.section li.activity .question_dependency_wrapper {
    position: absolute;
    top: 0;
    right: 0;
}
#page-mod-quiz-edit.dir-rtl ul.slots li.section li.activity .question_dependency_wrapper {
    left: 0;
    right: auto;
}
#page-mod-quiz-edit ul.slots li.section li.activity .question_dependency_wrapper.question_dependency_cannot_depend {
    display: none;
}

#page-mod-quiz-edit ul.slots li.section li.activity .question_dependency_wrapper .currentlink,
#page-mod-quiz-edit ul.slots li.section li.activity .question_dependency_wrapper .cm-edit-action {
    position: relative;
    left: 20px;
    top: -1em;
}
#page-mod-quiz-edit.dir-rtl ul.slots li.section li.activity .question_dependency_wrapper .currentlink,
#page-mod-quiz-edit.dir-rtl ul.slots li.section li.activity .question_dependency_wrapper .cm-edit-action {
    right: 20px;
    left: auto;
}

#page-mod-quiz-edit ul.slots li.section li.activity .activityinstance {
    display: block;
    min-height: 1.7em;
    position: absolute;
    top: 0;
    left: 5em;
    width: 100%;
}
#page-mod-quiz-edit.dir-rtl ul.slots li.section li.activity .activityinstance {
    left: auto;
    right: 5em;
}

#page-mod-quiz-edit ul.slots li.section li.activity .mod-indent-outer {
    padding-left: 22px;
}
#page-mod-quiz-edit.dir-rtl ul.slots li.section li.activity .mod-indent-outer {
    padding-left: 0;
    padding-right: 22px;
}

#page-mod-quiz-edit ul.slots .activityinstance form {
    display: inline;
}
#page-mod-quiz-edit span.editinstructions {
    right: 0;
}
#page-mod-quiz-edit.dir-rtl span.editinstructions {
    left: 0;
    right: auto;
}

#page-mod-quiz-edit ul.slots .activityinstance span.instancename {
    overflow-x: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    word-break: break-word;
    width: 70%;
    display: inline-block;
    height: 20px;
}

#page-mod-quiz-edit ul.slots .activityinstance span.instancename img {
    margin: 0 0.2em;
}
#page-mod-quiz-edit #categoryquestions .questionname,
#page-mod-quiz-edit ul.slots li.activity div.activityinstance .questionname {
  font-weight: bold;
    color: #555;
}
#page-mod-quiz-edit ul.slots li.activity div.activityinstance .questiontext {
    color: #555;
}
#page-mod-quiz-edit ul.slots li.activity div.activityinstance .mod_quiz_random_qbank_link {
    font-size: 0.8em;
}

#page-mod-quiz-edit ul.slots .activityinstance img.activityicon {
    float: left;
    margin: .2em 0 0;
    padding: 0;
}
#page-mod-quiz-edit.dir-rtl ul.slots .activityinstance img.activityicon {
    float: right;
}

#page-mod-quiz-edit .section .activity .actions {
    white-space: nowrap;
    background: #e6e6e6;
    padding: 0.1em 0;
}

#page-mod-quiz-edit .mod_quiz_edit_forms {
    display: none;
}

#categoryquestions > tbody > tr:nth-of-type(even) {
    background: #e4e4e4;
}
#categoryquestions > tbody > tr:nth-of-type(even).highlight {
    background-color: #AAFFAA;
}
#categoryquestions .header {
    text-align: center;
    padding: 0 2px;
    border: 0 none;
}
#categoryquestions th.modifiername .sorters,
#categoryquestions th.creatorname .sorters {
    font-weight: normal;
    font-size: 0.8em;
}
#categoryquestions td.modifiername,
#categoryquestions td.creatorname {
    line-height: 1em;
}
#categoryquestions td.modifiername span.date,
#categoryquestions td.creatorname span.date {
    font-weight: normal;
    font-size: 0.8em;
}
table#categoryquestions {
    width: 100%;
    overflow: hidden;
    table-layout: fixed;
}
#categoryquestions .iconcol {
    width: 15px;
    text-align: center;
    padding: 0;
}
#categoryquestions .checkbox {
    width: 19px;
    text-align: center;
    padding: 0;
}
#categoryquestions .qtype {
    text-align: center;
}
#categoryquestions .qtype {
    width: 28px;
    padding: 0;
}
#categoryquestions .questiontext {
    position: relative;
    zoom: 1;
    padding-left: 0.3em;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.dir-rtl #categoryquestions .questiontext {
    padding-left: 0;
    padding-right: 0.3em;
}
#categoryquestions .questionname {
    white-space: nowrap;
    overflow: hidden;
    zoom: 1;
    position: relative;
}
#categoryquestions .questiontext p {
    margin: 0;
}

#page-mod-quiz-edit table#categoryquestions td,
#page-mod-quiz-edit table#categoryquestions th {
    overflow: hidden;
    white-space: nowrap;
}
.mod_quiz_qbank_dialogue {
    width: 80%;
    min-height: 200px;
}
.mod_quiz_qbank_dialogue.moodle-dialogue-fullscreen {
    width: 100%;

}
.mod_quiz_qbank_dialogue .questionbankloading {
    position: absolute;
    top: 30px;
    bottom: 0;
    left: 0;
    right: 0;
    background: #fff;
    text-align: center;
    opacity: 0.5;
    padding-top: 50px;
}
.mod_quiz_qbank_dialogue #advancedsearch label {
    font-size: 100%;
}

.modulespecificbuttonscontainer {
    padding-left: 0.3em;
    padding-right: 0.3em;
}

.quizquestionlistcontrols {
    text-align: center;
}

.categoryinfo {
    padding: 0.3em;
}

.path-mod-quiz .gradingdetails {
    font-size: small;
}

#page-mod-quiz-edit div#repaginatedialog .mform {
    margin-left: auto;
    margin-right: auto;
}
#page-mod-quiz-edit div.container div.generalbox {
    position: relative;
    display: block;
    border: 0 none;
    margin: 0;
    padding: 0;
}

#page-mod-quiz-edit .paging {
    margin-top: 0;
    margin-bottom: 0;
    padding: 0.1em 0.3em;
    display: block;
    background-color: #ddd;
}

#page-mod-quiz-edit #page-footer {
    clear: both;
    padding-top: 1em;
}

#page-mod-quiz-edit .categoryinfofield {
    font-style: italic;
}
#page-mod-quiz-edit .categorynamefield {
    font-weight: bold;
}
#page-mod-quiz-edit .questionsortoptions {
    background-color: #ddd;
}

#page-mod-quiz-edit div.questionbank .categorysortopotionscontainer {
    padding-top: 0.5em;
    margin-top: 0.3em;
}
#page-mod-quiz-edit div.questionbank .categoryquestionscontainer,
.questionbank .categorysortopotionscontainer,
.questionbank .categorypagingbarcontainer,
.questionbank .categoryselectallcontainer {
    background-color: #FFF;
}

/* Base theme needs extra support. */
#page-mod-quiz-edit ul.slots li.section ul.section {
    list-style: none;
}

/** Print formatting for attempt and review pages **/

@media print {

    #page-mod-quiz-attempt header.navbar,
    #page-mod-quiz-review header.navbar {
        display: none;
    }

    #page-mod-quiz-attempt #dock,
    #page-mod-quiz-review #dock {
        display: none;
    }

    #page-mod-quiz-attempt #page #page-header h1,
    #page-mod-quiz-review #page #page-header h1 {
        display: none;
    }

    #page-mod-quiz-attempt #region-main,
    #page-mod-quiz-review #region-main {
        width: 100%;
    }

    #page-mod-quiz-attempt #block-region-side-pre,
    #page-mod-quiz-attempt #block-region-side-post,
    #page-mod-quiz-review #block-region-side-pre,
    #page-mod-quiz-review #block-region-side-post {
        display: none;
    }

    #page-mod-quiz-attempt #page-footer,
    #page-mod-quiz-review #page-footer {
        display: none;
    }

    #page-mod-quiz-attempt .editquestion,
    #page-mod-quiz-review .editquestion,
    #page-mod-quiz-attempt .questionflag,
    #page-mod-quiz-review .questionflag {
        display: none;
    }

    #page-mod-quiz-attempt .submitbtns,
    #page-mod-quiz-review .submitbtns {
        display: none;
    }

    #page-mod-quiz-review .que .commentlink {
        display: none;
    }

    #page-mod-quiz-attempt .que,
    #page-mod-quiz-review .que {
        page-break-inside: avoid;
    }
}


