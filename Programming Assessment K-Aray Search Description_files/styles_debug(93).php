/** Path: plugin workshopallocation_manual .' **/
/**
 * Manual allocator
 */

.path-mod-workshop .manual-allocator .allocations {
    margin: 0px auto;
    width: 100%;
}

.path-mod-workshop .manual-allocator .allocations tbody tr:nth-of-type(odd) {
    background-color: #eee;
}

.path-mod-workshop .manual-allocator .allocations tbody tr:nth-of-type(odd).highlightreviewerof,
.path-mod-workshop .manual-allocator .allocations tbody tr:nth-of-type(odd).highlightreviewedby {
    background-color: inherit;
}

.path-mod-workshop .manual-allocator .allocations .peer .image {
    margin-right: 5px;
    vertical-align: middle;
}

.path-mod-workshop .manual-allocator .allocations .reviewedby .image,
.path-mod-workshop .manual-allocator .allocations .reviewerof .image {
    margin-right: 3px;
    vertical-align: middle;
}

.path-mod-workshop .manual-allocator .allocations .highlightreviewedby .reviewedby,
.path-mod-workshop .manual-allocator .allocations .highlightreviewerof .reviewerof {
    background-color: #fff3d2;
}

.path-mod-workshop .manual-allocator .allocations tr td {
    vertical-align: top;
    padding: 5px;
}

.path-mod-workshop .manual-allocator .allocations tr td ul {
    margin: 0px;
}

.path-mod-workshop .manual-allocator .allocations tr td ul li {
    list-style: none;
}

.path-mod-workshop .manual-allocator .allocations tr td.peer {
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
}

.path-mod-workshop .manual-allocator .allocations .reviewedby .info,
.path-mod-workshop .manual-allocator .allocations .peer .info,
.path-mod-workshop .manual-allocator .allocations .reviewerof .info {
    font-size: 80%;
    color: #888;
    font-style: italic;
}

.path-mod-workshop .manual-allocator .allocations .peer .submission {
    font-size: 90%;
    margin-top: 1em;
}


