/** Path: plugin block_navigation .' **/
.block_navigation .block_tree {
    margin: 0;
    list-style: none;
}

.block_navigation .block_tree .depth_1 > .tree_item.branch,
.block_navigation .block_tree .depth_1 > .tree_item.emptybranch {
    padding-left: 0;
    background-image: none;
}

.block_navigation .block_tree .tree_item {
    margin: 3px 0;
    background-position: 0 50%;
    background-repeat: no-repeat;
}

.block_navigation .block_tree .tree_item.branch {
    padding-left: 21px;
    cursor: pointer;
    background-image: url('/theme/image.php?theme=clean&component=core&image=t%2Fexpanded');
}

.block_navigation .block_tree .tree_item.emptybranch {
    padding-left: 21px;
    background-image: url('/theme/image.php?theme=clean&component=core&image=t%2Fcollapsed_empty');
}

.block_navigation .block_tree .tree_item.loadingbranch {
    background-image: url('/theme/image.php?theme=clean&component=core&image=i%2Floading_small');
}

.block_navigation .block_tree .tree_item img {
    width: 16px;
    height: 16px;
    margin-top: 3px;
    margin-right: 5px;
    vertical-align: top;
}

.block_navigation .block_tree .tree_item.active_tree_node {
    font-weight: bold;
}

.block_navigation .block_tree .tree_item.hasicon {
    white-space: nowrap;
}

.block_navigation .block_tree .tree_item.hasicon .item-content-wrap {
    display: inline-block;
    white-space: normal;
}

.block_navigation .block_tree ul {
    margin: 0;
}

.block_navigation .block_tree ul ul {
    margin: 0 0 0 16px;
    list-style: none;
}

.jsenabled .block_navigation .block_tree li.collapsed ul {
    display: none;
}

.jsenabled .block_navigation .block_tree li.collapsed .tree_item.branch {
    background-image: url('/theme/image.php?theme=clean&component=core&image=t%2Fcollapsed');
}

.jsenabled .block_navigation.dock_on_load {
    display: none;
}

.dir-rtl .block_navigation .block_tree .depth_1 .tree_item {
    padding-left: 0;
}

.dir-rtl .block_navigation .block_tree .tree_item {
    background-position: 100% 50%;
}

.dir-rtl .block_navigation .block_tree .tree_item.branch {
    padding-right: 21px;
    padding-left: 0;
}

.dir-rtl .block_navigation .block_tree .tree_item.emptybranch {
    padding-right: 21px;
    padding-left: 0;
    background-image: url('/theme/image.php?theme=clean&component=core&image=t%2Fcollapsed_empty_rtl');
}

.dir-rtl .block_navigation .block_tree .tree_item img {
    margin-right: 0;
    margin-left: 5px;
}

.dir-rtl .block_navigation .block_tree ul {
    margin: 0 16px 0 0;
}

.dir-rtl.jsenabled .block_navigation .block_tree .collapsed .tree_item.branch {
    background-image: url('/theme/image.php?theme=clean&component=core&image=t%2Fcollapsed_rtl');
}


