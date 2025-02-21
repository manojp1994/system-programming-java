/** Path: plugin mod_book .' **/

.path-mod-book .navtop img.icon,
.path-mod-book .navbottom img.icon {
  margin-right: 4px;
  margin-left: 4px;
  border: 0;
  padding: 0;
}


.path-mod-book .navbottom,
.path-mod-book .navtop {
    text-align: right;
}
.dir-rtl.path-mod-book .navbottom,
.dir-rtl.path-mod-book .navtop {
    text-align: left;
}
.path-mod-book .navtop {
    margin-bottom: 0.5em;
}
.path-mod-book .navbottom {
    margin-top: 0.5em;
}

/* == Fake toc block == */

.path-mod-book .block_book_toc ul {
    margin: 0 0 0 5px;
    padding-left: 0;
    padding-right: 0;
}
.dir-rtl.path-mod-book .block_book_toc ul { margin: 0 5px 0 0; }
.path-mod-book .block_book_toc li {
    clear: both;
    list-style: none;
    margin-top: .5em;
}
.path-mod-book .block_book_toc li li {
    list-style: none;
}
.path-mod-book .block_book_toc .action-list { float: right; }
.dir-rtl.path-mod-book .block_book_toc .action-list { float: left; }
.path-mod-book .block_book_toc .action-list img.smallicon {
    margin: 0 3px;
}

/* toc style NONE */
.path-mod-book .book_toc_none {
  font-size: 0.8em;
}
.path-mod-book .book_toc_none ul ul,
.dir-rtl.path-mod-book .book_toc_none ul ul {
    margin-left: 0;
    margin-right: 0;
}

/*toc style BULLETS */
.path-mod-book .book_toc_bullets {
  font-size: 0.8em;
}
.path-mod-book .book_toc_bullets ul ul {
    margin-left: 20px;
}
.dir-rtl.path-mod-book .book_toc_bullets ul ul {
    margin-left: 0;
    margin-right: 20px;
}
.path-mod-book .book_toc_bullets li li {
    list-style: circle;
}

/* toc style INDENTED*/
.path-mod-book .book_toc_indented {
  font-size: 0.8em;
}
.path-mod-book .book_toc_indented ul {
    margin-left: 5px;
}
.dir-rtl.path-mod-book .book_toc_indented ul {
    margin-left: 0;
    margin-right: 5px;
}
.path-mod-book .book_toc_indented ul ul {
    margin-left: 15px;
}
.dir-rtl.path-mod-book .book_toc_indented ul ul {
    margin-left: 0;
    margin-right: 15px;
}
.path-mod-book .book_toc_indented li li {
    list-style: none;
}

/* Text style links */
.navtop.navtext .chaptername,
.navbottom.navtext .chaptername {
    font-weight: bolder;
}
.navtop.navtext a,
.navbottom.navtext a {
    display: inline-block;
    max-width: 45%;
}
.navtop.navtext a.bookprev,
.navbottom.navtext a.bookprev {
    float: left;
    text-align: left;
}
.dir-rtl .navtop.navtext a.bookprev,
.dir-rtl .navbottom.navtext a.bookprev {
    float: right;
    text-align: right;
}

@media (max-width: 480px) {
    .path-mod-book .navbottom,
    .path-mod-book .navtop,
    .dir-rtl.path-mod-book .navbottom,
    .dir-rtl.path-mod-book .navtop {
        text-align: center;
    }
    .navtop.navtext a,
    .navbottom.navtext a {
        display: block;
        max-width: 100%;
        margin: auto;
    }
    .navtop.navtext a.bookprev,
    .navbottom.navtext a.bookprev,
    .dir-rtl .navtop.navtext a.bookprev,
    .dir-rtl .navbottom.navtext a.bookprev {
        float: none;
    }
}


