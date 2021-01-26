<?php
function getArticleLink($id) {
    return "article_detail.ssghtml.php?id={$id}&ext=html";
}
function getArticleListByTagLink($tag) {
    return "article_list_by_tag.ssghtml.php?tag={$tag}&ext=html";
}
function getFilesByEndsWith($endsWith) {
    $fileNames = [];
    $it = new RecursiveDirectoryIterator(".");
    foreach(new RecursiveIteratorIterator($it) as $file) {
        if ( endsWith($file->getFilename(), $endsWith) ) {
            $fileNames[] = $file->getFilename();
        }
    }
    return $fileNames;
}

function getFiles() {

    $fileNames = [];

    $it = new RecursiveDirectoryIterator(".");

    foreach(new RecursiveIteratorIterator($it) as $file) {
        if ( $file->isDir() ) {
            continue;
        }

        if ( strpos($file->getRealPath(), '\.git') !== false ) {
            continue;
        }

        if ( strpos($file->getRealPath(), '\dist') !== false ) {
            continue;
        }

        $fileNames[] = $file->getRealPath();
    }

    return $fileNames;
}

function getMaxArticleId() {
    static $maxId;

    if ( $maxId !== null ) {
        return $maxId;
    }
    $keys = array_keys($GLOBALS);
    $maxId = 0;
    foreach ( $keys as $key ) {
        if ( startsWith($key, "article") ) {
            $no = intval(str_replace("article", "", $key));
            if ( $no > $maxId ) {
                $maxId = $no;
            }
        }
    }
    return $maxId;
}