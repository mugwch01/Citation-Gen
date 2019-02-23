<?php

//$var-> & class->method/class::method/ const::val/
//try except for error handling. return code 200 for success and 404 for an error.
//remove values in input for placeholders or put empty strings at the end of development
//making logos/icons. 3d. or 2d
//extend constructors for journal and music classes .journal<vol_num>, film_music_rec<medium>

//Other classes use the same __construct and __toString by default.
class base{
  protected function __construct($Title=null,$Sub_Title=null,$Author_FN=null,$Author_INIT=null,$Author_LN=null,$Publisher=null,$City_Published=null,$Year_Published=null,$Month_Published=null,$Date_Accessed=null,$PageNum=null,$Url_Doi=null,$Isbn=null) {
    $this->Author_FN = $Author_FN;
    $this->Author_LN = $Author_LN;
    $this->Title = $Title;
    $this->City_Published = $City_Published;
    $this->Publisher = $Publisher;
    $this->Year_Published = $Year_Published;
    $this->PageNum = $PageNum;
    $this->Sub_Title = $Sub_Title;
    $this->Author_INIT = $Author_INIT;
    $this->Month_Published = $Month_Published;
    $this->Date_Accessed = $Date_Accessed;
    $this->Url_Doi = $Url_Doi;
    $this->Isbn = $Isbn;
  }
  public function __toString(){
    return "$this->Author_LN, $this->Author_FN,  $this->Title, $this->City_Published, $this->Publisher, $this->Year_Published)\n";
  }
}

class book extends base{
  //produce the footnote and the bibliographic entry
  public function __construct($Title=null,$Sub_Title=null,$Author_FN=null,$Author_INIT=null,$Author_LN=null,$Publisher=null,$City_Published=null,$Year_Published=null,$Month_Published=null,$Date_Accessed=null,$PageNum=null,$Url_Doi=null,$Isbn=null) {
    parent::__construct($Title,$Sub_Title,$Author_FN,$Author_INIT,$Author_LN,$Publisher,$City_Published,$Year_Published,$Month_Published,$Date_Accessed,$PageNum,$Url_Doi,$Isbn);
  }
  public function __toString(){
    return parent::__toString();
  }
  public function footnote(){
    return "$this->Author_FN $this->Author_LN.$this->Title. ($this->City_Published: $this->Publisher, $this->Year_Published), $this->PageNum.\n";
  }
  public function bibliographic_entry(){
    return "$this->Author_LN, $this->Author_FN. $this->Title. ($this->City_Published: $this->Publisher, $this->Year_Published).\n";
  }
}

class website extends base{
  //title of article or page = $title & title of website=$Sub_Title
  public function __construct($Title=null,$Sub_Title=null,$Author_FN=null,$Author_INIT=null,$Author_LN=null,$Publisher=null,$City_Published=null,$Year_Published=null,$Month_Published=null,$Date_Accessed=null,$PageNum=null,$Url_Doi=null,$Isbn=null) {
    parent::__construct($Title,$Sub_Title,$Author_FN,$Author_INIT,$Author_LN,$Publisher,$City_Published,$Year_Published,$Month_Published,$Date_Accessed,$PageNum,$Url_Doi,$Isbn);
  }
  public function __toString(){
    return parent::__toString();
  }
  public function footnote(){
    return "$this->Author_FN $this->Author_LN,\"$this->Title,\" $this->Sub_Title, last modified $this->Month_Published, $this->Year_Published. $this->Url_Doi.\n";
  }
  public function bibliographic_entry(){
    return "$this->Author_LN, $this->Author_FN. \"$this->Title.\" $this->Sub_Title. $this->Month_Published, $this->Year_Published. $this->Url_Doi.\n";
  }
}

class lecture extends base{
  public function __construct($Title=null,$Sub_Title=null,$Author_FN=null,$Author_INIT=null,$Author_LN=null,$Publisher=null,$City_Published=null,$Year_Published=null,$Month_Published=null,$Date_Accessed=null,$PageNum=null,$Url_Doi=null,$Isbn=null) {
    parent::__construct($Title,$Sub_Title,$Author_FN,$Author_INIT,$Author_LN,$Publisher,$City_Published,$Year_Published,$Month_Published,$Date_Accessed,$PageNum,$Url_Doi,$Isbn);
  }
  public function __toString(){
    return parent::__toString();
  }
  public function footnote(){
    return "$this->Author_FN $this->Author_LN, \"$this->Title,\" (lecture, $this->Publisher, $this->City_Published $this->Month_Published, $this->Year_Published.\n";
  }
  public function bibliographic_entry(){
    return "$this->Author_LN, $this->Author_FN. \"$this->Title.\" $this->Sub_Title, $this->City_published, $this->Month_Published, $this->Year_Published.\n";
  }
}

class journal extends base{
  //needs extra fields: vol_num. journal title=Sub_Title;
  public function __construct($Title=null,$Sub_Title=null,$Author_FN=null,$Author_INIT=null,$Author_LN=null,$Publisher=null,$City_Published=null,$Year_Published=null,$Month_Published=null,$Date_Accessed=null,$PageNum=null,$Url_Doi=null,$Isbn=null) {
    parent::__construct($Title,$Sub_Title,$Author_FN,$Author_INIT,$Author_LN,$Publisher,$City_Published,$Year_Published,$Month_Published,$Date_Accessed,$PageNum,$Url_Doi,$Isbn);
  }
  public function __toString(){
    return parent::__toString();
  }
  public function footnote(){
    return "$this->Author_FN $this->Author_LN, \"$this->Title,\" $this->Sub_Title Vol_num, $this->Year_Published: $this->PageNum.\n";
  }
  public function bibliographic_entry(){
    return "$this->Author_LN, $this->Author_FN. \"$this->Title,\" $this->Sub_Title Vol_num, $this->Year_Published: $this->PageNum.\n";
  }
}

class magazine extends base{
  public function __construct($Title=null,$Sub_Title=null,$Author_FN=null,$Author_INIT=null,$Author_LN=null,$Publisher=null,$City_Published=null,$Year_Published=null,$Month_Published=null,$Date_Accessed=null,$PageNum=null,$Url_Doi=null,$Isbn=null) {
    parent::__construct($Title,$Sub_Title,$Author_FN,$Author_INIT,$Author_LN,$Publisher,$City_Published,$Year_Published,$Month_Published,$Date_Accessed,$PageNum,$Url_Doi,$Isbn);
  }
  public function __toString(){
    return parent::__toString();
  }
  public function footnote(){
    return "$this->Author_FN $this->Author_LN, \"$this->Title,\" $this->Sub_Title, $this->Month_Published, $this->Year_Published. $this->Url_Doi.\n";
  }
  public function bibliographic_entry(){
    return "$this->Author_LN, $this->Author_FN. \"$this->Title.\" $this->Sub_Title, $this->Month_Published, $this->Year_Published. $this.Url_Doi.\n";
  }
}

class film_music_rec extends base{
  //medium additional field. add to constructor? and to the end of citation
  public function __construct($Title=null,$Sub_Title=null,$Author_FN=null,$Author_INIT=null,$Author_LN=null,$Publisher=null,$City_Published=null,$Year_Published=null,$Month_Published=null,$Date_Accessed=null,$PageNum=null,$Url_Doi=null,$Isbn=null) {
    parent::__construct($Title,$Sub_Title,$Author_FN,$Author_INIT,$Author_LN,$Publisher,$City_Published,$Year_Published,$Month_Published,$Date_Accessed,$PageNum,$Url_Doi,$Isbn);
  }
  public function __toString(){
    return parent::__toString();
  }
  public function footnote(){
    return "$this->Author_FN $this->Author_LN, \"$this->Title,\" $this->Year_Published, $this->Sub_Title, $this.Publisher, medium.\n";
  }
  public function bibliographic_entry(){
    return "$this->Author_LN, $this->Author_FN. \"$this->Title,\" $this->Year_Published, $this->Sub_Title, $this.Publisher, medium.\n";
  }
}

//=======================================

function main($Type,$Title=null,$Sub_Title=null,$Author_FN=null,$Author_INIT=null,$Author_LN=null,$Publisher=null,$City_Published=null,$Year_Published=null,$Month_Published=null,$Date_Accessed=null,$PageNum=null,$Url_Doi=null,$Isbn=null){
  //look at the Type of literature and call the right function to produce the citations and to add to database

  if ($Type == 'presentation'){ //lecture and presentation cited the same
    $Type = 'lecture';
  }
  if ($Type == 'newspaper'){  //newspaper same as journal
    $Type = 'journal';
  }
  if ($Type == 'interview'){ //interviews treated like an article
    $Type = 'journal';
  }

  switch ($Type) {
    case 'book':
      $obj = new book($Title,$Sub_Title,$Author_FN,$Author_INIT,$Author_LN,$Publisher,$City_Published,$Year_Published,$Month_Published,$Date_Accessed,$PageNum,$Url_Doi,$Isbn);
      $ftnt = $obj->footnote();
      $be = $obj->bibliographic_entry();
      $var_conc = $ftnt . '&' . $be;
      return $var_conc;
      break;
    case 'website':
      $obj = new website($Title,$Sub_Title,$Author_FN,$Author_INIT,$Author_LN,$Publisher,$City_Published,$Year_Published,$Month_Published,$Date_Accessed,$PageNum,$Url_Doi,$Isbn);
      $ftnt = $obj->footnote();
      $be = $obj->bibliographic_entry();
      $var_conc = $ftnt . '&' . $be;
      return $var_conc;
    case 'lecture':
      $obj = new lecture($Title,$Sub_Title,$Author_FN,$Author_INIT,$Author_LN,$Publisher,$City_Published,$Year_Published,$Month_Published,$Date_Accessed,$PageNum,$Url_Doi,$Isbn);
      $ftnt = $obj->footnote();
      $be = $obj->bibliographic_entry();
      $var_conc = $ftnt . '&' . $be;
      return $var_conc;
    case 'journal':
      $obj = new journal($Title,$Sub_Title,$Author_FN,$Author_INIT,$Author_LN,$Publisher,$City_Published,$Year_Published,$Month_Published,$Date_Accessed,$PageNum,$Url_Doi,$Isbn);
      $ftnt = $obj->footnote();
      $be = $obj->bibliographic_entry();
      $var_conc = $ftnt . '&' . $be;
      return $var_conc;
    case 'magazine':
      $obj = new magazine($Title,$Sub_Title,$Author_FN,$Author_INIT,$Author_LN,$Publisher,$City_Published,$Year_Published,$Month_Published,$Date_Accessed,$PageNum,$Url_Doi,$Isbn);
      $ftnt = $obj->footnote();
      $be = $obj->bibliographic_entry();
      $var_conc = $ftnt . '&' . $be;
      return $var_conc;
    case 'film_music_rec': //album title = Sub_Title;
      $obj = new film_music_rec($Title,$Sub_Title,$Author_FN,$Author_INIT,$Author_LN,$Publisher,$City_Published,$Year_Published,$Month_Published,$Date_Accessed,$PageNum,$Url_Doi,$Isbn);
      $ftnt = $obj->footnote();
      $be = $obj->bibliographic_entry();
      $var_conc = $ftnt . '&' . $be;
      return $var_conc;
    default:
        echo "Invalid Type: $Type";
      }
    }

//==================================

function processor(){
  //extracting http_post into var and calling main  
  return main($_POST['$Type'],$_POST['$Title'],$_POST['$Sub_Title'],$_POST['$Author_FN'],$_POST['$Author_INIT'],$_POST['$Author_LN'],$_POST['$Publisher'],$_POST['$City_Published'],substr($_POST['$Month_Published'], 0, 4),$_POST['$Month_Published'],$_POST['$Date_Accessed'],$_POST['$PageNum'],$_POST['$Url_Doi'],$_POST['$Isbn']);
}

/* -- possible?? creating a new class obj dynamically?
function convertor($T){
  $obj = new $T($Title,$Sub_Title,$Author_FN,$Author_INIT,$Author_LN,$Publisher,$City_Published,$Year_Published,$Month_Published,$Date_Accessed,$PageNum,$Url_Doi,$Isbn);
  $ftnt = $obj->footnote();
  $be = $obj->bibliographic_entry();
  $obj->db_post(); //saving in db
  $var_conc = $ftnt . '&' . $be;
  return $var_conc;
}
*/

//===================================
?>
