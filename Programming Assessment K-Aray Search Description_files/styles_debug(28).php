/** Path: plugin mod_workshop .' **/
.path-mod-workshop .collapsibleregion {
    margin-bottom: 0.75em;
}

.path-mod-workshop .collapsibleregioncaption {
    font-weight: bold;
    font-size: 120%;
}

.path-mod-workshop div.singlebutton {
    text-align: center;
    margin: 0.75em auto;
}

.path-mod-workshop #workshop-viewlet-assignedassessments div.singlebutton,
.path-mod-workshop #workshop-viewlet-allexamples div.singlebutton,
.path-mod-workshop #workshop-viewlet-examples div.singlebutton {
    text-align: left;
}

.path-mod-workshop .groupwidget {
    text-align:center;
    margin: 0.75em auto;
}

.path-mod-workshop .perpagewidget {
    text-align:center;
    margin: 0.75em auto;
}

/**
 * Submission - one line summary display
 */
.path-mod-workshop .submission-summary {
    position: relative;
    margin-bottom: 10px;
}

.path-mod-workshop .submission-summary .title,
.path-mod-workshop .submission-summary .author,
.path-mod-workshop .submission-summary .author .fullname,
.path-mod-workshop .submission-summary .author .picture {
    display: inline;
}

.path-mod-workshop .submission-summary .title,
.path-mod-workshop .submission-summary .userdate,
.path-mod-workshop .submission-summary .grade-status {
    margin: 0px 0px 0px 40px;
}

.path-mod-workshop .submission-summary .author {
    margin-left: 1ex;
}

.path-mod-workshop .submission-summary.anonymous .title,
.path-mod-workshop .submission-summary.anonymous .author,
.path-mod-workshop .submission-summary.anonymous .userdate,
.path-mod-workshop .submission-summary.anonymous .grade-status {
    margin: 0px 0px 0px 5px;
}

.path-mod-workshop .submission-summary .userdate {
    font-size: x-small;
    color: #333;
}

.path-mod-workshop .submission-summary .userdate span {
    font-style: italic;
}

.path-mod-workshop .submission-summary .author .picture {
    position: absolute;
    top: 0px;
    left: 0px;
}

/**
 * Submission - full display
 */
.path-mod-workshop .submission-full {
    border: 1px solid #ddd;
    margin: 0px 0px 1em 0px;
}

.path-mod-workshop .submission-full .header {
    position: relative;
    background-color: #ddd;
    padding: 3px;
    min-height: 67px;
}

.path-mod-workshop .submission-full .header .title,
.path-mod-workshop .submission-full .header .author,
.path-mod-workshop .submission-full .header .userdate {
    margin: 0px 0px 0px 80px;
}

.path-mod-workshop .submission-full.anonymous .header .title,
.path-mod-workshop .submission-full.anonymous .header .author,
.path-mod-workshop .submission-full.anonymous .header .userdate {
    margin: 0px 0px 0px 5px;
}

.path-mod-workshop .submission-full .header .userdate.created {
    padding-right: 10px;
}

.path-mod-workshop .submission-full .header .userdate.modified {
    padding-left: 10px;
    margin-left: 0px;
    border-left: 1px solid #000;
}

.path-mod-workshop .submission-full .header .userdate {
    font-size: x-small;
    color: #333;
    display: inline;
}

.path-mod-workshop .submission-full .header .userdate span {
    font-style: italic;
}

.path-mod-workshop .submission-full .header .author .picture {
    position: absolute;
    top: 3px;
    left: 3px;
}

.path-mod-workshop .submission-full .content,
.path-mod-workshop .submission-full .attachments {
    padding: 5px 10px;
}

.path-mod-workshop .submission-full .attachments .files img.icon {
    margin-right: 5px;
}

.path-mod-workshop .submission-full .attachments .images div {
    display: inline-block;
    margin: 5px;
    padding: 5px;
    border: 1px solid #ddd;
}

/**
 * Example submission - summary display
 */
.path-mod-workshop .submission-summary.example .title,
.path-mod-workshop .submission-summary.example .userdate {
    margin: 0px 0px 0px 0px;
}

/**
 * Example submission - full display
 */
.path-mod-workshop .submission-full.example .header {
    min-height: 0px;
}

.path-mod-workshop .submission-full.example .header .title {
    margin: 0px 0px 0px 0px;
}

/**
 * Elements generated by the workshop renderer
 */
.path-mod-workshop .message {
    padding: 5px 5em 5px 15px;
    margin: 0px auto 20px auto;
    width: 100%;
    font-size: 80%;
    position: relative;
}

.path-mod-workshop .message .singlebutton {
    text-align: left;
    margin: 0px;
}

.path-mod-workshop .message.ok {
    color: #547c22;
    background-color: #e7f1c3;
}

.path-mod-workshop .message.error {
    color: #dd0221;
    background-color: #ffd3d9;
}

.path-mod-workshop .message.info {
    color: #1666a9;
    background-color: #d2ebff;
}

/**
 * Allocators
 */

.path-mod-workshop .allocation-init-results {
    margin: 10px auto;
    width: 100%;
    font-size: 80%;
}

.path-mod-workshop .allocation-init-results .indent {
    margin-left: 20px;
}

.path-mod-workshop .allocation-init-results .ok {
    color: #547c22;
    background-color: #e7f1c3;
}

.path-mod-workshop .allocation-init-results .error {
    color: #dd0221;
    background-color: #ffd3d9;
}

.path-mod-workshop .allocation-init-results .info {
    color: #1666a9;
    background-color: #d2ebff;
}

.path-mod-workshop .allocation-init-results .debug {
    color: black;
    background-color: #ddd;
}

/**
 * User plan
 */
.path-mod-workshop .userplan {
    width: 100%;
    margin: 1em auto 1em auto;
    font-size: 80%;
    border: 1px solid #ddd;
}

.path-mod-workshop .userplan th {
    vertical-align: bottom;
    white-space: normal;
    color: #999;
    border-top: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 3px;
}

.path-mod-workshop .userplan th.active {
    vertical-align: top;
    color: black;
    font-size: 140%;
    border: 1px solid #ddd;
    border-bottom: 0;
    background: #e7f1c3;
}

.path-mod-workshop .userplan td {
    width: 20%;
    vertical-align: top;
    border-right: 1px solid #ddd;
    background-color: #f5f5f5;
}

.path-mod-workshop .userplan td,
.path-mod-workshop .userplan td a,
.path-mod-workshop .userplan td a:link,
.path-mod-workshop .userplan td a:hover,
.path-mod-workshop .userplan td a:visited,
.path-mod-workshop .userplan td a:active {
    color: #999;
}

.path-mod-workshop .userplan td.active,
.path-mod-workshop .userplan td.active a,
.path-mod-workshop .userplan td.active a:link,
.path-mod-workshop .userplan td.active a:hover,
.path-mod-workshop .userplan td.active a:visited,
.path-mod-workshop .userplan td.active a:active {
    color: black;
}

.path-mod-workshop .userplan td.lastcol {
    border-right: 0;
}

.path-mod-workshop .userplan td.active {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    background-color: #e7f1c3;
}

.path-mod-workshop .userplan th .actions {
    display: inline;
}
.path-mod-workshop .userplan tr.phasetasks li {
    background-image: url(/theme/image.php?theme=clean&component=mod_workshop&image=userplan%2Ftask-todo);
    background-position: top left;
    background-repeat: no-repeat;
    list-style-type: none;
    min-height: 16px;
    margin: .3em 0;
}

.path-mod-workshop .userplan tr.phasetasks li.completed {
    background-image: url(/theme/image.php?theme=clean&component=mod_workshop&image=userplan%2Ftask-done);
}

.path-mod-workshop .userplan tr.phasetasks li.fail {
    background-image: url(/theme/image.php?theme=clean&component=mod_workshop&image=userplan%2Ftask-fail);
}

.path-mod-workshop .userplan tr.phasetasks li.info {
    background-image: url(/theme/image.php?theme=clean&component=mod_workshop&image=userplan%2Ftask-info);
}

.path-mod-workshop .userplan tr.phasetasks .tasks {
    list-style:none;
    margin: 3px;
    padding: 0px;
}

.path-mod-workshop .userplan tr.phasetasks .title {
    padding: 0px 10px 0px 20px;
}

.path-mod-workshop .userplan tr.phasetasks .details {
    padding: 0px 10px 0px 25px;
    font-size: 80%;
}

/**
 * Assessment - full display
 */
.path-mod-workshop .assessment-full {
    border: 1px solid #ddd;
    margin: 0px auto 1em auto;
}

.path-mod-workshop .assessment-full .header {
    position: relative;
    background-color: #ddd;
    padding: 3px;
    min-height: 35px;
}

.path-mod-workshop .assessment-full .header .title {
    font-weight: bold;
}

.path-mod-workshop .assessment-full .header .title,
.path-mod-workshop .assessment-full .header .reviewer,
.path-mod-workshop .assessment-full .header .grade,
.path-mod-workshop .assessment-full .header .weight {
    margin: 0px 0px 0px 40px;
}

.path-mod-workshop .assessment-full.anonymous .header .title,
.path-mod-workshop .assessment-full.anonymous .header .reviewer,
.path-mod-workshop .assessment-full.anonymous .header .grade,
.path-mod-workshop .assessment-full.anonymous .header .weight {
    margin: 0px 0px 0px 5px;
}

.path-mod-workshop .assessment-full .header .reviewer .picture {
    position: absolute;
    top: 3px;
    left: 3px;
}

.path-mod-workshop .assessment-full .header .actions {
    position: absolute;
    top: 5px;
    right: 5px;
    text-align: right;
}

.path-mod-workshop .assessment-full .header .actions .singlebutton,
.path-mod-workshop .assessment-full .header .actions .singlebutton form,
.path-mod-workshop .assessment-full .header .actions .singlebutton form div {
    display: inline;
}

.path-mod-workshop .assessment-full .assessment-form-wrapper,
.path-mod-workshop .assessment-full .overall-feedback-wrapper {
    margin-top: 0.5em;
    padding: 0px 1em;
}

.path-mod-workshop .assessment-summary.graded .singlebutton input[type="submit"],
.path-mod-workshop .example-summary.graded .singlebutton input[type="submit"] {
    background-color: #e7f1c3;
}

.path-mod-workshop .assessment-summary.notgraded .singlebutton input[type="submit"],
.path-mod-workshop .example-summary.notgraded .singlebutton input[type="submit"] {
    background-color: #ffd3d9;
}

/**
 * Overall feedback
 */
.path-mod-workshop .assessment-full .overallfeedback .content,
.path-mod-workshop .assessment-full .overallfeedback .attachments {
    padding: 5px 10px;
}

.path-mod-workshop .assessment-full .overallfeedback .attachments .files img.icon {
    margin-right: 5px;
}

.path-mod-workshop .assessment-full .overallfeedback .attachments .images div {
    display: inline-block;
    margin: 5px;
    padding: 5px;
    border: 1px solid #ddd;
}

/**
 * Assessment form
 */
.path-mod-workshop .assessmentform .description {
    margin: 0px 1em;
}

/**
 * Grading report
 */
.path-mod-workshop .grading-report {
    width: 100%;
    margin: 1em auto 1em auto;
    font-size: 80%;
    border: 1px solid #ddd;
}

.path-mod-workshop .grading-report .userpicture {
    margin: 0px 3px;
    vertical-align: middle;
}

.path-mod-workshop .grading-report del {
    color: red;
    font-size: 90%;
    text-decoration: line-through;
}

.path-mod-workshop .grading-report ins {
    color: green;
    font-weight: bold;
    text-decoration: underline;
}

.path-mod-workshop .grading-report th {
    white-space: normal;
}

.path-mod-workshop .grading-report td {
    vertical-align: top;
    border: 1px solid #ddd;
}

.path-mod-workshop .grading-report tr.published td.submission {
    background-color: #d2ebff;
}

.path-mod-workshop .grading-report tr.published td.submission a {
    font-weight: bold;
}

.path-mod-workshop .grading-report .assessmentdetails {
    white-space: nowrap;
}

.path-mod-workshop .grading-report .receivedgrade span.grade,
.path-mod-workshop .grading-report .givengrade span.gradinggrade {
    font-weight: bold;
}

.path-mod-workshop .grading-report .submissiongrade.cell,
.path-mod-workshop .grading-report .gradinggrade.cell {
    text-align: center;
    font-size: 200%;
    white-space: nowrap;
}

.path-mod-workshop .grading-report .givengrade.null .user,
.path-mod-workshop .grading-report .receivedgrade.null .user {
    color: #ee0000;
}

/**
 * Final grades
 */
.path-mod-workshop #workshop-viewlet-yourgrades .finalgrades {
    text-align: center;
}

.path-mod-workshop #workshop-viewlet-yourgrades .finalgrades .grade {
    border: 1px solid #ddd;
    margin: 1em;
    padding: 2em;
    display: inline-block;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    border-radius: 15px;
}

.path-mod-workshop #workshop-viewlet-yourgrades .finalgrades .grade.submissiongrade {
    background-color: #d2ebff;
}

.path-mod-workshop #workshop-viewlet-yourgrades .finalgrades .grade.assessmentgrade {
    background-color: #eee;
    /*background-color: #e7f1c3;*/
}

.path-mod-workshop #workshop-viewlet-yourgrades .finalgrades .grade .gradevalue {
    font-weight: bold;
    font-size: x-large;
    margin: 10px;
}

/**
 * Edit assessment form
 */
#mod-workshop-editform fieldset.fgroup * {
    vertical-align: top;
}

/**
 * Feedback
 */
.path-mod-workshop .feedback {
    border: 1px solid #ddd;
    margin: 0px auto 1em auto;
    width: 100%;
}

.path-mod-workshop .feedback .header {
    position: relative;
    background-color: #ddd;
    padding: 3px;
    min-height: 35px;
}

.path-mod-workshop .feedback .header .title {
    margin: 0px 0px 0px 40px;
}

.path-mod-workshop .feedback .header .picture {
    position: absolute;
    top: 3px;
    left: 3px;
}

.path-mod-workshop .feedback .content {
    padding: 5px 10px;
}

/**
 * Misc
 */
.path-mod-workshop div.buttonsbar {
    text-align: center;
}

.path-mod-workshop div.buttonsbar .singlebutton {
    display: inline;
}

.path-mod-workshop .toolboxaction {
    margin-right: 1em;
}

.path-mod-workshop .toolboxaction,
.path-mod-workshop .toolboxaction .singlebutton,
.path-mod-workshop .toolboxaction .singlebutton form,
.path-mod-workshop .toolboxaction .singlebutton form div {
    display: inline;
}

.path-mod-workshop div.buttonwithhelp div {
    display: inline;
}

.path-mod-workshop #evaluationmethodchooser {
    margin: 2em auto;
    text-align: center;
}

.path-mod-workshop .workshop-risk-dataloss { vertical-align: text-bottom; }


