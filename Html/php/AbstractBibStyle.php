<?php /** default bibliography btyle of bibtexbrowser 

see [[http://www.monperrus.net/martin/bibtexbrowser/]] 

*/

/**
this function transforms a $bibentry into an HTML string
 * it is called by function bib2html if the user did not choose a specific style
 * the default usable CSS styles are
 * .bibtitle { font-weight:bold; }
 * .bibbooktitle { font-style:italic; }
 * .bibauthor { }
 * .bibpublisher { }
*/

/** Bibtexbrowser style contributed by Janos Tapolcai
see: [[http://www.monperrus.net/martin/bibtexbrowser]]

It looks like the IEEE transaction style.

Add the following line in "bibtexbrowser.local.php"
<code>
include( 'bibtexbrowser-style-janos.php' );
define('BIBLIOGRAPHYSTYLE','JanosBibliographyStyle');
</code>

[[http://www.monperrus.net/martin/bibtexbrowser-style-janos.php.txt]]

*/
function AbstractBibliographyStyle(&$bibentry) {
    
    $title = $bibentry->getTitle();
  $type = $bibentry->getType();

  $entry=array();

  // author
  if ($bibentry->hasField('author')) {
    $entry[] = $bibentry->formattedAuthors();
  }

  // title
  $title = '"'.$title.'"';
  if ($bibentry->hasField('url')) $title = ' <a'.(BIBTEXBROWSER_BIB_IN_NEW_WINDOW?' target="_blank" ':'').' href="'.$bibentry->getField("url").'">'.$title.'</a>';
  $entry[] = $title;


  // now the origin of the publication is in italic
  $booktitle = '';

  if (($type=="misc") && $bibentry->hasField("note")) {
    $booktitle = $bibentry->getField("note");
  }

  if ($type=="inproceedings") {
      $booktitle = ' '.$bibentry->getField(BOOKTITLE);
  }

  if ($type=="incollection") {
      $booktitle = 'Chapter in '.$bibentry->getField(BOOKTITLE);
  }

  if ($type=="article") {
      $booktitle = ' '.$bibentry->getField("journal");
  }
  
  // CUSTOMIZATION
  if ($type=="unpublished") {
      $booktitle = ' Working Paper';
  }
  // END CUSTOM


  //// ******* EDITOR
  $editor='';
  if ($bibentry->hasField(EDITOR)) {
    $editors = $bibentry->getFormattedEditors();
  }

  if ($booktitle!='') {
    if ($editor!='') $booktitle .=' ('.$editor.')';
    $entry[] = '<i>'.$booktitle.'</i>';
  }


  $publisher='';
  if ($type=="phdthesis") {
      $publisher = 'PhD thesis, '.$bibentry->getField(SCHOOL);
  }

  if ($type=="mastersthesis") {
      $publisher = 'Master\'s thesis, '.$bibentry->getField(SCHOOL);
  }
  if ($type=="techreport") {
      $publisher = 'Technical report, '.$bibentry->getField("institution");
  }
  if ($bibentry->hasField("publisher")) {
    $publisher = $bibentry->getField("publisher");
  }

  if ($publisher!='') $entry[] = $publisher;

  if ($bibentry->hasField('volume')) $entry[] =  "vol. ".$bibentry->getField("volume");
  if ($bibentry->hasField('number')) $entry[] =  'no. '.$bibentry->getField("number");

  if ($bibentry->hasField('address')) $entry[] =  $bibentry->getField("address");

  if ($bibentry->hasField('pages')) $entry[] = str_replace("--", "-", "pp. ".$bibentry->getField("pages"));


  if ($bibentry->hasField(YEAR)) $entry[] = $bibentry->getYear();

  $result = implode(", ",$entry).'.';
  
   // CUSTOMIZATION
  if ($bibentry->hasField('abstract')) {
      $result.= '<br/><div class="abstract"><i>Abstract:</i> '.cleanMendeleyBibTex($bibentry->getField("abstract")).'</span>';
  }
  // END CUSTOM

  // some comments (e.g. acceptance rate)?
  if ($bibentry->hasField('comment')) {
      $result .=  " (".$bibentry->getField("comment").")";
  }

  // add the Coin URL
  $result .=  "\n".$bibentry->toCoins();

  return $result;
}

function cleanMendeleyBibTex($dirtystring){
    // Create arrays that match looked-for strings with strings to replace them.  Order matters!
    $pattern =     array('\{','\}','\\_','$\backslash$','\backslash ','\backslash','\$','{}','textit',  '<',  '>');
    $replacement = array('{', '}', '_',          '\\',         '\\',        '\\', '$',  '',  'emph','\lt','\gt');
    for ($i=0; $i<count($pattern); $i++) {
        $pattern[$i] = '/'.preg_quote($pattern[$i],'/').'/';
//        echo $pattern[$i] .' to '.$replacement[$i].'<br>';
    }
    /* Demo/test
    $str = 'A buyer procures a network to span a given set of nodes; each seller bids to supply certain edges, then the buyer purchases a minimal cost spanning tree. Irrespective of the pattern of bidding licenses and costs, an efficient tree is constructed in any equilibrium of the Bertrand game. If each seller can only bid for a single edge, or for a set of mutually disconnected edges, we evaluate the $\backslash$textit\{price of imperfect competition\} (PIC), namely the ratio of the total cost that could be charged to the buyer in some equlibrium, to the true minimal cost. If costs satisfy the triangle inequality we show that the PIC is at most 2 for an odd number of nodes, and at most \$2\backslash frac\{n-1\}\{n-2\}\$ for an even number \$n\$ of nodes. Surprisingly, this worst case ratio does not improve when the cost pattern is ultrametric (a much mroe demanding substitutability requirement), although the overhead is much lower on average under typical probabilistic assumptions.';
    echo 'Old string: <br>';
    echo $str;
    echo '<br>New string: <br>';
    echo preg_replace($pattern,$replacement,$str);
    */
    $texified = preg_replace($pattern,$replacement,$dirtystring);
    $emphpattern = '/\\\\emph{([^}]*)}/';
    //echo preg_replace($emphpattern, '<i>$1</i>', $str);
    $emphasized = preg_replace($emphpattern,'<i>$1</i>',$texified);
    return $emphasized;
}
    
/*    
  $title = $bibentry->getTitle();
  $type = $bibentry->getType();

  // later on, all values of $entry will be joined by a comma
  $entry=array();

  // title
  // usually in bold: .bibtitle { font-weight:bold; }
  $title = '<span class="bibtitle">'.$title.'</span>';
  if ($bibentry->hasField('url')) $title = ' <a'.(BIBTEXBROWSER_BIB_IN_NEW_WINDOW?' target="_blank" ':'').' href="'.$bibentry->getField("url").'">'.$title.'</a>';
  

  // author
  if ($bibentry->hasField('author')) {
    $coreInfo = $title . ' <span class="bibauthor">('.$bibentry->getFormattedAuthorsImproved().')</span>';}
  else $coreInfo = $title;

  // core info usually contains title + author
  $entry[] = $coreInfo;

  // now the book title
  $booktitle = '';
  if ($type=="inproceedings") {
      $booktitle = 'In '.$bibentry->getField(BOOKTITLE); }
  if ($type=="incollection") {
      $booktitle = 'Chapter in '.$bibentry->getField(BOOKTITLE);}
  if ($type=="inbook") {
      $booktitle = 'Chapter in '.$bibentry->getField('chapter');}
  if ($type=="article") {
      $booktitle = 'In '.$bibentry->getField("journal");}

  //// we may add the editor names to the booktitle
  $editor='';
  if ($bibentry->hasField(EDITOR)) {
    $editor = $bibentry->getFormattedEditors();
  }
  if ($editor!='') $booktitle .=' ('.$editor.')';
  // end editor section

  // is the booktitle available
  if ($booktitle!='') {
    $entry[] = '<span class="bibbooktitle">'.$booktitle.'</span>';
  }


  $publisher='';
  if ($type=="phdthesis") {
      $publisher = 'PhD thesis, '.$bibentry->getField(SCHOOL);
  }
  if ($type=="mastersthesis") {
      $publisher = 'Master\'s thesis, '.$bibentry->getField(SCHOOL);
  }
  if ($type=="bachelorsthesis") {
      $publisher = 'Bachelor\'s thesis, '.$bibentry->getField(SCHOOL);
  }
  if ($type=="techreport") {
      $publisher = 'Technical report, '.$bibentry->getField("institution");
  }
  
  if ($type=="misc") {
      $publisher = $bibentry->getField('howpublished');
  }

  if ($bibentry->hasField("publisher")) {
    $publisher = $bibentry->getField("publisher");
  }

  if ($publisher!='') $entry[] = '<span class="bibpublisher">'.$publisher.'</span>';


  if ($bibentry->hasField('volume')) $entry[] =  "volume ".$bibentry->getField("volume");


  if ($bibentry->hasField(YEAR)) $entry[] = $bibentry->getYear();

  $result = implode(", ",$entry).'.';
  
  // CUSTOMIZATIONS
  if ($bibentry->hasField('abstract')) {
      $result.= " (".$bibentry->getField("abstract").")";
  }

  // some comments (e.g. acceptance rate)?
  if ($bibentry->hasField('comment')) {
      $result .=  " (".$bibentry->getField("comment").")";
  }
  if ($bibentry->hasField('note')) {
      $result .=  " (".$bibentry->getField("note").")";
  }

  // add the Coin URL
  $result .=  "\n".$bibentry->toCoins();

  return $result;
}
*/

?>