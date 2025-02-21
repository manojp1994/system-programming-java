/** Path: plugin gradereport_grader .' **/
/**
 * Container.
 */
.path-grade-report-grader .gradeparent {
    position: relative;
}

/**
 * Tooltip and overlay.
 */
.path-grade-report-grader .gradeparent .grader-information-tooltip {
    min-width: 200px;
}
.path-grade-report-grader .gradeparent .graderreportoverlay {
    background-color: white;
    width: auto;
    padding: 10px;
    font-size: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/**
 * The table.
 */
.path-grade-report-grader .gradeparent table {
    border: 1px solid #ccc;
    border-collapse: separate;
    border-spacing: 0;
    border-bottom-width: 0;
    border-right-width: 0;
    margin-bottom: 2em;
}
.dir-rtl.path-grade-report-grader .gradeparent table {
    border-left-width: 0;
    border-right-width: 1px;
    max-width: initial;
}

/**
 * All the cells.
 */
.path-grade-report-grader .gradeparent .cell {
    border: 1px solid #ccc;
    border-top-width: 0;
    border-left-width: 0;
    padding: 4px 5px;
    vertical-align: middle;
    text-align: right;
    white-space: nowrap;
}
.dir-rtl.path-grade-report-grader .gradeparent .cell {
    border-left-width: 1px;
    border-right-width: 0;
    text-align: left;
}

/**
 * Stripped table.
 */
.path-grade-report-grader .gradeparent tr:nth-of-type(even) .cell {
    background-color: #f9f9f9;
}

/**
 * All the floating divs.
 */
.path-grade-report-grader .gradeparent .floater {
    display: none;
}
.path-grade-report-grader .gradeparent .floating {
    display: block;
}

/**
 * All the headers + floating cells.
 */
.path-grade-report-grader .gradeparent .heading .cell,
.path-grade-report-grader .gradeparent .avg .cell,
.path-grade-report-grader .gradeparent .user.cell {
    font-size: 14px;
    font-weight: normal;
    text-align: left;
}
.dir-rtl.path-grade-report-grader .gradeparent .heading .cell,
.dir-rtl.path-grade-report-grader .gradeparent .avg .cell,
.dir-rtl.path-grade-report-grader .gradeparent .user.cell {
    text-align: right;
}

/**
 * All the floating cells.
 */
.path-grade-report-grader .gradeparent .floater .cell {
    background-color: #f9f9f9;
}

/**
 * The user cells.
 */
.path-grade-report-grader .gradeparent .user.cell {
    min-width: 200px;
    width: 200px;
    white-space: normal;
    vertical-align: top;
}
.path-grade-report-grader .gradeparent .user.cell .userpicture {
    margin: 0 4px;
    border: none;
    vertical-align: middle;
}

/**
 * The additional user fields.
 */
.path-grade-report-grader .gradeparent .userfield {
    font-weight: normal;
    text-align: left;
}
.dir-rtl.path-grade-report-grader .gradeparent .userfield {
    text-align: right;
}

/**
 * The footer's header.
 */
.path-grade-report-grader .gradeparent .range .header,
.path-grade-report-grader .gradeparent .avg .header {
    font-weight: bold;
}

/**
 * The footer's floating cells.
 */
.path-grade-report-grader .gradeparent .avg.floating .cell {
    border-top-width: 1px;
}

/**
 * The footer's cells.
 */
.path-grade-report-grader .gradeparent .avg .cell {
    text-align: right;
}
.dir-rtl.path-grade-report-grader .gradeparent .avg .cell {
    text-align: left;
}

/**
 * Content styling.
 */
.path-grade-report-grader .gradeparent .heading .cell .iconsmall {
    /* Fixes inconsistencies in cell height on IE. */
    padding-top: 0;
    padding-bottom: 0;
}
.path-grade-report-grader .gradeparent .sorticon {
    margin-left: 3px;
}
.dir-rtl.path-grade-report-grader .gradeparent .sorticon {
    margin-left: 0;
    margin-right: 3px;
}
.path-grade-report-grader .gradeparent .gradevalue {
    display: inline-block;
}
.path-grade-report-grader span.gradepass {
    color: #298721;
}
.path-grade-report-grader span.gradefail {
    color: #890d0d;
}
.path-grade-report-grader .gradeparent tr:nth-child(n) td.overridden:nth-child(n) {
    /* Made very specific to override the default stripped style of the table. */
    background-color: #efd9a4;
}
.path-grade-report-grader .gradeparent tr:nth-child(n) td.ajaxoverridden:nth-child(n) {
    /* Made very specific to override the default stripped style of the table. */
    background-color: #ffe3a0;
}
.path-grade-report-grader .gradeparent .excludedfloater {
    font-weight: bold;
    color: red;
    font-size: 9px;
    float: left;
}
.dir-rtl.path-grade-report-grader .gradeparent .excludedfloater {
    float: right;
}

.path-grade-report .gradeparent .floater .controls.cell,
.path-grade-report-grader .gradeparent .controls {
    background-color: #f3ead8;
}
.path-grade-report-grader .gradeparent .category {
    text-align: left;
}
.dir-rtl.path-grade-report-grader .gradeparent .category {
    text-align: right;
}

/**
 * Editing fields.
 */
.path-grade-report-grader .gradeparent select {
    margin: 0;
    padding: 0;
}
.path-grade-report-grader .gradeparent .text {
    border: 1px solid #666;
    width: auto;
    margin: 0;
    padding: 0;
    text-align: center;
}
.path-grade-report-grader .gradeparent .quickfeedback {
    border: 1px dashed #000;
    width: auto;
    margin: 0;
    padding: 0;
    margin-left: 10px;
}
.dir-rtl.path-grade-report-grader .gradeparent .quickfeedback {
    margin-left: 0;
    margin-right: 10px;
}

.path-grade-report-grader .yui3-overlay {
  border: 0;
  background: none;
  background-color: initial;
  min-width: 200px;
}

.path-grade-report-grader .yui3-overlay {
    background-color: white;
    width: auto;
    padding: 10px;
    font-size: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
}


