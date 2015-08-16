<?php
                $dir = 'articles/';
                function page_title($url) {
                    $fp = file_get_contents($url);
                    if (!$fp) 
                        return null;
                    $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
                    if (!$res) 
                        return null; 
                    $title = preg_replace('/\s+/', ' ', $title_matches[1]);
                    $title = trim($title);
                    return $title;
                }
                function scan_dir($dir){
                    $ignored = array('.', '..', '.svn', '.DS_Store');

                    $files = array();    
                    foreach (scandir($dir) as $file) {
                        if (in_array($file, $ignored)) continue;
                        $files[$file] = filemtime($dir . '/' . $file);
                    }
                    arsort($files);
                    $articles = array();
                    foreach ( $files as $key => $value ) {
                        $articles[] = $key;
                    }
                    $articlesTitle = array();
                    $articlesTime = array();
                    $articlesDescription = array();
                    foreach ( $articles as $key => $value ) {
                        $HTMLInString = file_get_contents($dir . $value);
                        $start = strpos($HTMLInString, '<p>');
                        $end = strpos($HTMLInString, '</p>', $start);
                        $paragraph = substr($HTMLInString, $start, $end-$start+4);

                        $HTMLtitle = page_title($dir . $value);
                        $articlesTitle[] = $HTMLtitle;
                        $articlesTime[] = date ("F d Y", filemtime($dir . $value));
                        $articlesDescription[] =  $paragraph;
                    }
                    if ( count($articles) < 5 ) {
                        for ($x = 0; $x < count($articles); $x++) {
                            echo "<div class='col-xs-12 articleSample'><h3><a href='articles/$articles[$x]'>$articlesTitle[$x]</a></h3><p> By Dylan Modesitt on $articlesTime[$x]</p> $articlesDescription[$x] <a href='articles/$articles[$x]'>Read More...</a></div>";
                        }
                    } else {
                        for ($x = 0; $x < 5; $x++) {
                            echo "<div class='col-xs-12 articleSample'><h3><a href='articles/$articles[$x]'>$articlesTitle[$x]</a></h3><p> By Dylan Modesitt on $articlesTime[$x]</p> $articlesDescription[$x] <a href='articles/$articles[$x]'>Read More...</a></div>";
                        }
                    }
                    

                }
                scan_dir($dir);
            ?>