/** Path: plugin tool_filetypes .' **/
/**
 * Styles for admin tool page.
 */

/* Fix bad default table wrap (caused by the long mimetype field). */
.path-admin-tool-filetypes .generaltable .c0,
.path-admin-tool-filetypes .generaltable .c1,
.path-admin-tool-filetypes .generaltable .c2,
.path-admin-tool-filetypes .generaltable th {
    white-space: nowrap;
}

/* Formatting for deleted lines. */
.path-admin-tool-filetypes .generaltable .deleted .c0 img {
    opacity: 0.2;
}

.path-admin-tool-filetypes .generaltable .deleted .c0 span {
    text-decoration: line-through;
}

/* Custom types show bold */
.path-admin-tool-filetypes .generaltable .nonstandard {
    font-weight: bold;
}

/* Spacing around the 'Defined in config.php' stripe */
.path-admin-tool-filetypes .form-overridden {
    display: inline-block;
    margin-bottom: 1em;
    padding: 4px 6px;
}


