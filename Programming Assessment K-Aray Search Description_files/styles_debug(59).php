/** Path: plugin report_eventlist .' **/
.report-eventlist-name {
    color: #888;
    font-size: 0.75em;
}

.report-eventlist-datatable-table > div > table {
    width: 100%;
}

#page-admin-report-eventlist-index dt {
    float: left;
    text-align: right;
    width: 20em;

}

#page-admin-report-eventlist-index dd {
    display: block;
    text-align: left;
    margin-left: 21em;
}

#page-admin-report-eventlist-index dd + dd {
    clear: left;
}

@media (max-width : 767px) {
    #page-admin-report-eventlist-index dt {
        width: 100%;
        text-align: left;
    }

    #page-admin-report-eventlist-index dd {
        margin-left: 0;
    }

    #page-admin-report-eventlist-index dd + dd {
        margin-left: 0;
    }
}

#page-admin-report-eventlist-index.dir-rtl dt {
    float: right;
    text-align: left;
    width: 20em;
}

#page-admin-report-eventlist-index.dir-rtl dd {
    display: block;
    text-align: right;
    margin-right: 22em;
}

#page-admin-report-eventlist-index.dir-rtl dd + dd {
    clear: right;
}

@media (max-width : 767px) {
    #page-admin-report-eventlist-index.dir-rtl dt {
        width: 100%;
        text-align: right;
    }

    #page-admin-report-eventlist-index.dir-rtl dd {
        margin-right: 0em;
    }

    #page-admin-report-eventlist-index.dir-rtl dd + dd {
        margin-right: 0em;
    }
}

