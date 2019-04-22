<!DOCTYPE html>
<html lang="en">
<head>
  <title>Beranda</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <script type="text/javascript" src="js/query"></script>
  <script type="text/javascript" src="js/boostrap.js"></script>
</head>
<body>
    <?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:index.php?pesan=belum_login");
  }
  ?>
 <body>
<div class="w3-container top">
  <a class="w3schools-logo notranslate" href="//www.w3schools.com">w3schools<span class="dotcom">.com</span></a>
  <div class="w3-right w3-hide-small w3-wide toptext" style="font-family:'Segoe UI',Arial,sans-serif">THE WORLD'S LARGEST WEB DEVELOPER SITE</div>
</div>

<div style="display: none; position: absolute; z-index: 4; right: 52px; height: 44px; background-color: rgb(95, 95, 95); letter-spacing: normal;" id="googleSearch">
  <div class="gcse-search"></div>
</div>
<div style="display: none; position: absolute; z-index: 3; right: 111px; height: 44px; background-color: rgb(95, 95, 95); text-align: right; padding-top: 9px;" id="google_translate_element"></div>

<div class="w3-card-2 topnav notranslate" id="topnav" style="position: relative; top: 0px;">
  <div style="overflow:auto;">
    <div class="w3-bar w3-left" style="width:100%;overflow:hidden;height:44px">
      <a href="javascript:void(0);" class="topnav-icons fa fa-menu w3-hide-large w3-left w3-bar-item w3-button" onclick="open_menu()" title="Menu"></a>
      <a href="/default.asp" class="topnav-icons fa fa-home w3-left w3-bar-item w3-button" title="Home"></a>
      <a class="w3-bar-item w3-button" href="/html/default.asp" title="HTML Tutorial">HTML</a>
      <a class="w3-bar-item w3-button" href="/css/default.asp" title="CSS Tutorial">CSS</a>
      <a class="w3-bar-item w3-button" href="/js/default.asp" title="JavaScript Tutorial">JAVASCRIPT</a>
      <a class="w3-bar-item w3-button" href="/sql/default.asp" title="SQL Tutorial">SQL</a>
      <a class="w3-bar-item w3-button active" href="/php/default.asp" title="PHP Tutorial">PHP</a>
      <a class="w3-bar-item w3-button" href="/bootstrap/bootstrap_ver.asp" title="Bootstrap Tutorial">BOOTSTRAP</a>
      <a class="w3-bar-item w3-button" href="/howto/default.asp" title="How To">HOW TO</a>
      <a class="w3-bar-item w3-button" href="/python/default.asp" title="Python Tutorial">PYTHON</a>
      <a class="w3-bar-item w3-button" href="/w3css/default.asp" title="W3.CSS Tutorial">W3.CSS</a>
      <a class="w3-bar-item w3-button" href="/jquery/default.asp" title="jQuery Tutorial">JQUERY</a>
      <a class="w3-bar-item w3-button" href="/xml/default.asp" title="XML Tutorial">XML</a>
      <a class="w3-bar-item w3-button" id="topnavbtn_tutorials" href="javascript:void(0);" onclick="w3_open_nav(&quot;tutorials&quot;)" title="Tutorials">MORE <i class="fa fa-caret-down" style="display: inline;"></i><i class="fa fa-caret-up" style="display:none"></i></a>
      <a href="javascript:void(0);" class="topnav-icons fa w3-right w3-bar-item w3-button" onclick="open_search(this)" title="Search W3Schools"></a>
      <a href="javascript:void(0);" class="topnav-icons fa w3-right w3-bar-item w3-button" onclick="open_translate(this)" title="Translate W3Schools"></a>
      <a class="w3-bar-item w3-button w3-right" href="/forum/default.asp">FORUM</a>
      <a class="w3-bar-item w3-button w3-right" id="topnavbtn_exercises" href="javascript:void(0);" onclick="w3_open_nav(&quot;exercises&quot;)" title="Exercises">EXERCISES <i class="fa fa-caret-down" style="display: inline;"></i><i class="fa fa-caret-up" style="display:none"></i></a>
      <a class="w3-bar-item w3-button w3-right" id="topnavbtn_references" href="javascript:void(0);" onclick="w3_open_nav(&quot;references&quot;)" title="References">REFERENCES <i class="fa fa-caret-down" style="display: inline;"></i><i class="fa fa-caret-up" style="display: none;"></i></a>
    </div>
    <div id="nav_tutorials" class="w3-bar-block w3-card-2" style="display:none;">
      <span onclick="w3_close_nav(&quot;tutorials&quot;)" class="w3-button w3-xlarge w3-right" style="position:absolute;right:0;font-weight:bold;">×</span>
      <div class="w3-row-padding" style="padding:24px 48px">
        <div class="w3-col l3 m6">
          <h3>HTML and CSS</h3>
          <a class="w3-bar-item w3-button" href="/html/default.asp">Learn HTML</a>
          <a class="w3-bar-item w3-button" href="/css/default.asp">Learn CSS</a>
          <a class="w3-bar-item w3-button" href="/w3css/default.asp">Learn W3.CSS</a>
          <a class="w3-bar-item w3-button" href="/colors/default.asp">Learn Colors</a>
          <a class="w3-bar-item w3-button" href="/bootstrap/default.asp">Learn Bootstrap 3</a>
          <a class="w3-bar-item w3-button" href="/bootstrap4/default.asp">Learn Bootstrap 4</a>
          <a class="w3-bar-item w3-button" href="/icons/default.asp">Learn Icons</a>
          <a class="w3-bar-item w3-button" href="/graphics/default.asp">Learn Graphics</a>
          <a class="w3-bar-item w3-button" href="/graphics/svg_intro.asp">Learn SVG</a>
          <a class="w3-bar-item w3-button" href="/graphics/canvas_intro.asp">Learn Canvas</a>
          <a class="w3-bar-item w3-button" href="/howto/default.asp">Learn How To</a>
          <div class="w3-hide-large w3-hide-small">
            <h3>XML</h3>
            <a class="w3-bar-item w3-button" href="/xml/default.asp">Learn XML</a>
            <a class="w3-bar-item w3-button" href="/xml/ajax_intro.asp">Learn XML AJAX</a>
            <a class="w3-bar-item w3-button" href="/xml/dom_intro.asp">Learn XML DOM</a>
            <a class="w3-bar-item w3-button" href="/xml/xml_dtd_intro.asp">Learn XML DTD</a>
            <a class="w3-bar-item w3-button" href="/xml/schema_intro.asp">Learn XML Schema</a>
            <a class="w3-bar-item w3-button" href="/xml/xsl_intro.asp">Learn XSLT</a>
            <a class="w3-bar-item w3-button" href="/xml/xpath_intro.asp">Learn XPath</a>
            <a class="w3-bar-item w3-button" href="/xml/xquery_intro.asp">Learn XQuery</a>
          </div>
        </div>
        <div class="w3-col l3 m6">
          <h3>JavaScript</h3>
          <a class="w3-bar-item w3-button" href="/js/default.asp">Learn JavaScript</a>
          <a class="w3-bar-item w3-button" href="/jquery/default.asp">Learn jQuery</a>
          <a class="w3-bar-item w3-button" href="/angular/default.asp">Learn AngularJS</a>
          <a class="w3-bar-item w3-button" href="/js/js_json_intro.asp">Learn JSON</a>
          <a class="w3-bar-item w3-button" href="/js/js_ajax_intro.asp">Learn AJAX</a>
          <a class="w3-bar-item w3-button" href="/w3js/default.asp">Learn W3.JS</a>
          <div class="w3-hide-small"><br class="w3-hide-medium w3_hide-small"><br class="w3-hide-medium w3_hide-small"></div>
        </div>
        <div class="w3-col l3 m6">
          <h3>Server Side</h3>
          <a class="w3-bar-item w3-button" href="/sql/default.asp">Learn SQL</a>
          <a class="w3-bar-item w3-button" href="/php/default.asp">Learn PHP 5</a>
          <a class="w3-bar-item w3-button" href="/php7/default.asp">Learn PHP 7</a>          
          <a class="w3-bar-item w3-button" href="/python/default.asp">Learn Python</a>
          <a class="w3-bar-item w3-button" href="/java/default.asp">Learn Java</a>
          <a class="w3-bar-item w3-button" href="/asp/default.asp">Learn ASP</a>
          <a class="w3-bar-item w3-button" href="/nodejs/default.asp">Learn Node.js</a>
          <a class="w3-bar-item w3-button" href="/nodejs/nodejs_raspberrypi.asp">Learn Raspberry Pi</a>          
          <h3>Web Building</h3>
          <a class="w3-bar-item w3-button" href="/w3css/w3css_templates.asp">Web Templates</a>
          <a class="w3-bar-item w3-button" href="/browsers/default.asp">Web Statistics</a>
          <a class="w3-bar-item w3-button" href="/cert/default.asp">Web Certificates</a>
          <a class="w3-bar-item w3-button" href="/tryit/default.asp">Web Editor</a>
          <a class="w3-bar-item w3-button" href="/whatis/default.asp">Web Development</a>
        </div>
        <div class="w3-col l3 m6 w3-hide-medium">
          <h3>XML</h3>
          <a class="w3-bar-item w3-button" href="/xml/default.asp">Learn XML</a>
          <a class="w3-bar-item w3-button" href="/xml/ajax_intro.asp">Learn XML AJAX</a>
          <a class="w3-bar-item w3-button" href="/xml/dom_intro.asp">Learn XML DOM</a>
          <a class="w3-bar-item w3-button" href="/xml/xml_dtd_intro.asp">Learn XML DTD</a>
          <a class="w3-bar-item w3-button" href="/xml/schema_intro.asp">Learn XML Schema</a>
          <a class="w3-bar-item w3-button" href="/xml/xsl_intro.asp">Learn XSLT</a>
          <a class="w3-bar-item w3-button" href="/xml/xpath_intro.asp">Learn XPath</a>
          <a class="w3-bar-item w3-button" href="/xml/xquery_intro.asp">Learn XQuery</a>
        </div>
      </div>
      <br>
    </div>
    <div id="nav_references" class="w3-bar-block w3-card-2" style="display: none;">
      <span onclick="w3_close_nav(&quot;references&quot;)" class="w3-button w3-xlarge w3-right" style="position:absolute;right:0;font-weight:bold;">×</span>
      <div class="w3-row-padding" style="padding:24px 48px">
        <div class="w3-col l3 m6">
          <h3>HTML</h3>
          <a class="w3-bar-item w3-button" href="/tags/default.asp">HTML Tag Reference</a>
          <a class="w3-bar-item w3-button" href="/tags/ref_eventattributes.asp">HTML Event Reference</a>
          <a class="w3-bar-item w3-button" href="/colors/default.asp">HTML Color Reference</a>
          <a class="w3-bar-item w3-button" href="/tags/ref_attributes.asp">HTML Attribute Reference</a>
          <a class="w3-bar-item w3-button" href="/tags/ref_canvas.asp">HTML Canvas Reference</a>
          <a class="w3-bar-item w3-button" href="/graphics/svg_reference.asp">HTML SVG Reference</a>
          <a class="w3-bar-item w3-button" href="/charsets/default.asp">HTML Character Sets</a>
          <a class="w3-bar-item w3-button" href="/graphics/google_maps_reference.asp">Google Maps Reference</a>
          <h3>CSS</h3>
          <a class="w3-bar-item w3-button" href="/cssref/default.asp">CSS Reference</a>
          <a class="w3-bar-item w3-button" href="/cssref/css3_browsersupport.asp">CSS Browser Support</a>
          <a class="w3-bar-item w3-button" href="/cssref/css_selectors.asp">CSS Selector Reference</a>
          <a class="w3-bar-item w3-button" href="/w3css/w3css_references.asp">W3.CSS Reference</a>
          <a class="w3-bar-item w3-button" href="/bootstrap/bootstrap_ref_all_classes.asp">Bootstrap 3 Reference</a>
          <a class="w3-bar-item w3-button" href="/bootstrap4/bootstrap_ref_all_classes.asp">Bootstrap 4 Reference</a>
          <a class="w3-bar-item w3-button" href="/icons/icons_reference.asp">Icon Reference</a>
       </div>
        <div class="w3-col l3 m6">
          <h3>JavaScript</h3>
          <a class="w3-bar-item w3-button" href="/jsref/default.asp">JavaScript Reference</a>
          <a class="w3-bar-item w3-button" href="/jsref/default.asp">HTML DOM Reference</a>
          <a class="w3-bar-item w3-button" href="/jquery/jquery_ref_overview.asp">jQuery Reference</a>
          <a class="w3-bar-item w3-button" href="/angular/angular_ref_directives.asp">AngularJS Reference</a>
          <a class="w3-bar-item w3-button" href="/w3js/w3js_references.asp">W3.JS Reference</a>
        </div>
        <div class="w3-col l3 m6">
          <h3>Server Side</h3>
          <a class="w3-bar-item w3-button" href="/sql/sql_ref_keywords.asp">SQL Reference</a>
          <a class="w3-bar-item w3-button" href="/php/php_ref_overview.asp">PHP 5 Reference</a>
          <a class="w3-bar-item w3-button" href="/php7/php7_ref_overview.asp">PHP 7 Reference</a>
          <a class="w3-bar-item w3-button" href="/python/python_reference.asp">Python Reference</a>
          <a class="w3-bar-item w3-button" href="/java/java_ref_keywords.asp">Java Reference</a>
          <a class="w3-bar-item w3-button" href="/asp/asp_ref_response.asp">ASP Reference</a>
          <h3>XML</h3>
          <a class="w3-bar-item w3-button" href="/xml/dom_nodetype.asp">XML Reference</a>
          <a class="w3-bar-item w3-button" href="/xml/dom_http.asp">XML Http Reference</a>
          <a class="w3-bar-item w3-button" href="/xml/xsl_elementref.asp">XSLT Reference</a>
          <a class="w3-bar-item w3-button" href="/xml/schema_elements_ref.asp">XML Schema Reference</a>
        </div>
        <div class="w3-col l3 m6">
          <h3>Character Sets</h3>
          <a class="w3-bar-item w3-button" href="/charsets/default.asp">HTML Character Sets</a>
          <a class="w3-bar-item w3-button" href="/charsets/ref_html_ascii.asp">HTML ASCII</a>
          <a class="w3-bar-item w3-button" href="/charsets/ref_html_ansi.asp">HTML ANSI</a>
          <a class="w3-bar-item w3-button" href="/charsets/ref_html_ansi.asp">HTML Windows-1252</a>
          <a class="w3-bar-item w3-button" href="/charsets/ref_html_8859.asp">HTML ISO-8859-1</a>
          <a class="w3-bar-item w3-button" href="/charsets/ref_html_symbols.asp">HTML Symbols</a>
          <a class="w3-bar-item w3-button" href="/charsets/ref_html_utf8.asp">HTML UTF-8</a>
        </div>
      </div>
      <br>
    </div>
    <div id="nav_exercises" class="w3-bar-block w3-card-2" style="display: none;">
      <span onclick="w3_close_nav(&quot;exercises&quot;)" class="w3-button w3-xlarge w3-right" style="position:absolute;right:0;font-weight:bold;">×</span>
      <div class="w3-row-padding" style="padding:24px 48px">
        <div class="w3-col l4 m6">
          <h3>Exercises</h3>
          <a class="w3-bar-item w3-button" href="/html/html_exercises.asp">HTML Exercises</a>
          <a class="w3-bar-item w3-button" href="/css/css_exercises.asp">CSS Exercises</a>
          <a class="w3-bar-item w3-button" href="/js/js_exercises.asp">JavaScript Exercises</a>
          <a class="w3-bar-item w3-button" href="/sql/sql_exercises.asp">SQL Exercises</a>
          <a class="w3-bar-item w3-button" href="/php/php_exercises.asp">PHP Exercises</a>
          <a class="w3-bar-item w3-button" href="/python/python_exercises.asp">Python Exercises</a>
          <a class="w3-bar-item w3-button" href="/java/java_exercises.asp">Java Exercises</a>
          <a class="w3-bar-item w3-button" href="/jquery/jquery_exercises.asp">jQuery Exercises</a>
          <a class="w3-bar-item w3-button" href="/bootstrap/bootstrap_exercises.asp">Bootstrap Exercises</a>
        </div>
        <div class="w3-col l4 m6 w3-hide-medium">
          <h3>Quizzes</h3>
          <a class="w3-bar-item w3-button" href="/html/html_quiz.asp" target="_top">HTML Quiz</a>
          <a class="w3-bar-item w3-button" href="/css/css_quiz.asp" target="_top">CSS Quiz</a>
          <a class="w3-bar-item w3-button" href="/js/js_quiz.asp" target="_top">JavaScript Quiz</a>
          <a class="w3-bar-item w3-button" href="/sql/sql_quiz.asp" target="_top">SQL Quiz</a>
          <a class="w3-bar-item w3-button" href="/php/php_quiz.asp" target="_top">PHP Quiz</a>
          <a class="w3-bar-item w3-button" href="/python/python_quiz.asp" target="_top">Python Quiz</a>
          <a class="w3-bar-item w3-button" href="/bootstrap/bootstrap_quiz.asp" target="_top">Bootstrap Quiz</a>
          <a class="w3-bar-item w3-button" href="/jquery/jquery_quiz.asp" target="_top">jQuery Quiz</a>
          <a class="w3-bar-item w3-button" href="/xml/xml_quiz.asp" target="_top">XML Quiz</a>
        </div>
        <div class="w3-col l4 m12">
         <h3 class="w3-margin-top">Certificates</h3>
         <a class="w3-bar-item w3-button" href="/cert/cert_html_new.asp" target="_top">HTML Certificate</a>
         <a class="w3-bar-item w3-button" href="/cert/cert_css.asp" target="_top">CSS Certificate</a>
         <a class="w3-bar-item w3-button" href="/cert/cert_javascript.asp" target="_top">JavaScript Certificate</a>
         <a class="w3-bar-item w3-button" href="/cert/cert_sql.asp" target="_top">SQL Certificate</a>
         <a class="w3-bar-item w3-button" href="/cert/cert_python.asp" target="_top">Python Certificate</a>
         <a class="w3-bar-item w3-button" href="/cert/cert_jquery.asp" target="_top">jQuery Certificate</a>
         <a class="w3-bar-item w3-button" href="/cert/cert_php.asp" target="_top">PHP Certificate</a>
         <a class="w3-bar-item w3-button" href="/cert/cert_bootstrap.asp" target="_top">Bootstrap Certificate</a>
         <a class="w3-bar-item w3-button" href="/cert/cert_xml.asp" target="_top">XML Certificate</a>
        </div>
      </div>
      <br>
    </div>
  </div>
</div>

<div class="w3-sidebar w3-collapse" id="sidenav" style="top: 144px; display: none;">
  <div id="leftmenuinner" style="padding-top: 0px;">
    <div class="w3-light-grey" id="leftmenuinnerinner">
<!--  <a href='javascript:void(0)' onclick='close_menu()' class='w3-button w3-hide-large w3-large w3-display-topright' style='right:16px;padding:3px 12px;font-weight:bold;'>&times;</a>-->
<h2 class="left"><span class="left_h2">PHP</span> Tutorial</h2>
<a target="_top" href="default.asp">PHP HOME</a>
<a target="_top" href="php_intro.asp">PHP Intro</a>
<a target="_top" href="php_install.asp">PHP Install</a>
<a target="_top" href="php_syntax.asp">PHP Syntax</a>
<a target="_top" href="php_variables.asp">PHP Variables</a>
<a target="_top" href="php_echo_print.asp">PHP Echo / Print</a>
<a target="_top" href="php_datatypes.asp">PHP Data Types</a>
<a target="_top" href="php_string.asp">PHP Strings</a>
<a target="_top" href="php_constants.asp">PHP Constants</a>
<a target="_top" href="php_operators.asp">PHP Operators</a>
<a target="_top" href="php_if_else.asp">PHP If...Else...Elseif</a>
<a target="_top" href="php_switch.asp">PHP Switch</a>
<a target="_top" href="php_looping.asp">PHP While Loops</a>
<a target="_top" href="php_looping_for.asp">PHP For Loops</a>
<a target="_top" href="php_functions.asp">PHP Functions</a>
<a target="_top" href="php_arrays.asp">PHP Arrays</a>
<a target="_top" href="php_arrays_sort.asp">PHP Sorting Arrays</a>
<a target="_top" href="php_superglobals.asp">PHP Superglobals</a>
<br>
<h2 class="left"><span class="left_h2">PHP</span> Forms</h2>
<a target="_top" href="php_forms.asp">PHP Form Handling</a>
<a target="_top" href="php_form_validation.asp">PHP Form Validation</a>
<a target="_top" href="php_form_required.asp">PHP Form Required</a>
<a target="_top" href="php_form_url_email.asp">PHP Form URL/E-mail</a>
<a target="_top" href="php_form_complete.asp">PHP Form Complete</a>
<br>
<h2 class="left"><span class="left_h2">PHP</span> Advanced</h2>
<a target="_top" href="php_arrays_multi.asp">PHP Arrays Multi</a>
<a target="_top" href="php_date.asp">PHP Date and Time</a>
<a target="_top" href="php_includes.asp">PHP Include</a>
<a target="_top" href="php_file.asp">PHP File Handling</a>
<a target="_top" href="php_file_open.asp">PHP File Open/Read</a>
<a target="_top" href="php_file_create.asp">PHP File Create/Write</a>
<a target="_top" href="php_file_upload.asp">PHP File Upload</a>
<a target="_top" href="php_cookies.asp">PHP Cookies</a>
<a target="_top" href="php_sessions.asp" class="active">PHP Sessions</a>
<a target="_top" href="php_filter.asp">PHP Filters</a>
<a target="_top" href="php_filter_advanced.asp">PHP Filters Advanced</a>
<a target="_top" href="php_error.asp">PHP Error Handling</a>
<a target="_top" href="php_exception.asp">PHP Exception</a>
<br>  
<h2 class="left"><span class="left_h2">MySQL</span> Database</h2>
<a target="_top" href="php_mysql_intro.asp">MySQL Database</a>
<a target="_top" href="php_mysql_connect.asp">MySQL Connect</a>
<a target="_top" href="php_mysql_create.asp">MySQL Create DB</a>
<a target="_top" href="php_mysql_create_table.asp">MySQL Create Table</a>
<a target="_top" href="php_mysql_insert.asp">MySQL Insert Data</a>
<a target="_top" href="php_mysql_insert_lastid.asp">MySQL Get Last ID</a>
<a target="_top" href="php_mysql_insert_multiple.asp">MySQL Insert Multiple</a>
<a target="_top" href="php_mysql_prepared_statements.asp">MySQL Prepared</a>
<a target="_top" href="php_mysql_select.asp">MySQL Select Data</a>
<a target="_top" href="php_mysql_delete.asp">MySQL Delete Data</a>
<a target="_top" href="php_mysql_update.asp">MySQL Update Data</a>
<a target="_top" href="php_mysql_select_limit.asp">MySQL Limit Data</a>
<br>
<h2 class="left"><span class="left_h2">PHP</span> - XML</h2>
<a target="_top" href="php_xml_parsers.asp">PHP XML Parsers</a>
<a target="_top" href="php_xml_simplexml_read.asp">PHP SimpleXML Parser</a>
<a target="_top" href="php_xml_simplexml_get.asp">PHP SimpleXML - Get</a>
<a target="_top" href="php_xml_parser_expat.asp">PHP XML Expat</a>
<a target="_top" href="php_xml_dom.asp">PHP XML DOM</a>
<br>
<h2 class="left"><span class="left_h2">PHP</span> - AJAX</h2>
<a target="_top" href="php_ajax_intro.asp">AJAX Intro</a>
<a target="_top" href="php_ajax_php.asp">AJAX PHP</a>
<a target="_top" href="php_ajax_database.asp">AJAX Database</a>
<a target="_top" href="php_ajax_xml.asp">AJAX XML</a>
<a target="_top" href="php_ajax_livesearch.asp">AJAX Live Search</a>
<a target="_top" href="php_ajax_rss_reader.asp">AJAX RSS Reader</a>
<a target="_top" href="php_ajax_poll.asp">AJAX Poll</a>
<br>
<h2 class="left"><span class="left_h2">PHP</span> Examples</h2>
<a target="_top" href="php_examples.asp">PHP Examples</a>
<a target="_top" href="php_quiz.asp">PHP Quiz</a>
<a target="_top" href="php_exercises.asp">PHP Exercises</a>
<a target="_top" href="php_exam.asp">PHP Certificate</a>
<br>
<h2 class="left"><span class="left_h2">PHP</span> Reference</h2>
<a target="_top" href="php_ref_overview.asp">PHP Overview</a>
<a target="_top" href="php_ref_array.asp">PHP Array</a>
<a target="_top" href="php_ref_calendar.asp">PHP Calendar</a>
<a target="_top" href="php_ref_date.asp">PHP Date</a>
<a target="_top" href="php_ref_directory.asp">PHP Directory</a>
<a target="_top" href="php_ref_error.asp">PHP Error</a>
<a target="_top" href="php_ref_filesystem.asp">PHP Filesystem</a>
<a target="_top" href="php_ref_filter.asp">PHP Filter</a>
<a target="_top" href="php_ref_ftp.asp">PHP FTP</a>
<a target="_top" href="php_ref_http.asp">PHP HTTP</a>
<a target="_top" href="php_ref_libxml.asp">PHP Libxml</a>
<a target="_top" href="php_ref_mail.asp">PHP Mail</a>
<a target="_top" href="php_ref_math.asp">PHP Math</a>
<a target="_top" href="php_ref_misc.asp">PHP Misc</a>
<a target="_top" href="php_ref_mysqli.asp">PHP MySQLi</a>
<a target="_top" href="php_ref_simplexml.asp">PHP SimpleXML</a>
<a target="_top" href="php_ref_string.asp">PHP String</a>
<a target="_top" href="php_ref_xml.asp">PHP XML</a>
<a target="_top" href="php_ref_zip.asp">PHP Zip</a>
<a target="_top" href="php_ref_timezones.asp">PHP Timezones</a>

      <br><br>
    </div>
  </div>
</div>
<div class="w3-main w3-light-grey" id="belowtopnav" style="margin-left: 220px; padding-top: 0px;">
  <div class="w3-row w3-white">
    <div class="w3-col l10 m12" id="main">
      <div id="mainLeaderboard" style="overflow:hidden;">
        <!-- MainLeaderboard-->

        <!--<pre>main_leaderboard, all: [728,90][970,90][320,50][468,60]</pre>-->
        <div id="snhb-main_leaderboard-0"></div>
        <span class="bt-uid-tg" data-uid="5b1fcd71ec-158" style="display: none !important"></span>
       
      </div>
<h1>PHP 5 <span class="color_h1">Sessions</span></h1>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="php_cookies.asp">❮ Previous</a>
<a class="w3-right w3-btn" href="php_filter.asp">Next ❯</a>
</div>
<hr>
<p class="intro">A session is a way to store information (in variables) to be used across multiple pages.</p>
<p class="intro">Unlike a cookie, the information is not stored on the users computer.</p>
<hr>

<h2>What is a PHP Session?</h2>
<p>When you work with an application, you open it, do some changes, and 
then you close it. This is much like a Session. The computer knows who you are. 
It knows when you start the application and when you end. But on the internet 
there is one problem: the web server does not know who you are or what you do, 
because the HTTP address doesn't maintain state.</p>
<p>Session variables solve this problem by storing user information 
to be used across multiple pages (e.g. username, favorite color, etc). By 
default, session variables last until the user closes the browser.</p>
<p>So; Session variables hold information about one single user, and are available to all pages in one application.</p>

<div class="w3-panel w3-note">
<p><strong>Tip:</strong> If you need a permanent storage, you may want to store the data in a 
<a href="php_mysql_intro.asp">database</a>.</p>
</div>

<hr>

<h2>Start a PHP Session</h2>
<p>A session is started with the <code class="w3-codespan">session_start()</code> function.</p>
<p>Session variables are set with the PHP global variable: $_SESSION.</p>
<p>Now, let's create a new page called "demo_session1.php". In this page, we start a 
new PHP session and set some session variables:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code htmlHigh notranslate">
 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="commentcolor" style="color:green">// Start the session<br></span>session_start();<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="commentcolor" style="color:green">// Set session variables<br></span><span class="phpglobalcolor" style="color:goldenrod">$_SESSION</span>[<span class="phpstringcolor" style="color:brown">"favcolor"</span>] = <span class="phpstringcolor" style="color:brown">"green"</span>;<br><span class="phpglobalcolor" style="color:goldenrod">$_SESSION</span>[<span class="phpstringcolor" style="color:brown">"favanimal"</span>] = <span class="phpstringcolor" style="color:brown">"cat"</span>;<br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Session variables are set."</span>;<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
<a target="_blank" class="w3-btn w3-margin-bottom" href="showphp.asp?filename=demo_session1">Run example »</a>
</div>
<div class="w3-panel w3-note">
<p><strong><b>Note:</b></strong> The <code class="w3-codespan">session_start()</code> function must be the very 
first thing in your document. Before any HTML tags.</p>
</div>
<hr>
<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->

  <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
  <div id="snhb-mid_content-0"></div>
    
</div>
<hr>
<h2>Get PHP Session Variable Values</h2>
<p>Next, we create another page called "demo_session2.php". From this page, we 
will access the session information we set on the first page ("demo_session1.php").</p>
<p>Notice that session variables are not passed individually to each new page, 
instead they are retrieved from the session we open at the beginning of each 
page (<code class="w3-codespan">session_start()</code>).</p>
<p>Also notice that all session variable values are stored in the global $_SESSION variable:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code htmlHigh notranslate">
 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>session_start();<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="commentcolor" style="color:green">// Echo session variables that were set on previous page<br></span><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Favorite color is "</span> . <span class="phpglobalcolor" style="color:goldenrod">$_SESSION</span>[<span class="phpstringcolor" style="color:brown">"favcolor"</span>] . <span class="phpstringcolor" style="color:brown">".&lt;br&gt;"</span>;<br><span class="phpkeywordcolor" style="color:mediumblue">echo</span> <span class="phpstringcolor" style="color:brown">"Favorite animal is "</span> . <span class="phpglobalcolor" style="color:goldenrod">$_SESSION</span>[<span class="phpstringcolor" style="color:brown">"favanimal"</span>] . <span class="phpstringcolor" style="color:brown">"."</span>;<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><br>
 <span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
<a target="_blank" class="w3-btn w3-margin-bottom" href="showphp.asp?filename=demo_session2">Run example »</a>
</div>
<p>Another way to show all the session variable values for a user session is to run the 
following code:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code htmlHigh notranslate">
 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>session_start();<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="phpnumbercolor" style="color:red">
</span> print_r(<span class="phpglobalcolor" style="color:goldenrod">$_SESSION</span>);<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
<a target="_blank" class="w3-btn w3-margin-bottom" href="showphp.asp?filename=demo_session3">Run example »</a>
</div>

<div class="w3-panel w3-note">
<p><strong>How does it work? How does it know it's me?</strong><br><br>Most sessions set a user-key on 
the user's computer that 
looks something like this: 765487cf34ert8dede5a562e4f3a7e12. Then, when a 
session is opened on another page, it scans the computer for a user-key. If 
there is a match, it accesses that session, if not, it starts a new session.
</p>
</div>

<hr>

<h2>Modify a PHP Session Variable</h2>
<p>To change a session variable, just overwrite it:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code htmlHigh notranslate">
 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>session_start();<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="commentcolor" style="color:green">// to change a session variable, just overwrite it <br></span><span class="phpglobalcolor" style="color:goldenrod">$_SESSION</span>[<span class="phpstringcolor" style="color:brown">"favcolor"</span>] = <span class="phpstringcolor" style="color:brown">"yellow"</span>;<br>print_r(<span class="phpglobalcolor" style="color:goldenrod">$_SESSION</span>);<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
<a target="_blank" class="w3-btn w3-margin-bottom" href="showphp.asp?filename=demo_session4">Run example »</a>
</div>
<hr>

<h2>Destroy a PHP Session </h2>
<p>To remove all global session variables and destroy the session, use <code class="w3-codespan">session_unset()</code>
and <code class="w3-codespan">session_destroy()</code>:</p>
<div class="w3-example">
<h3>Example</h3>
<div class="w3-code htmlHigh notranslate">
 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>session_start();<br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>!DOCTYPE<span class="attributecolor" style="color:red"> html</span><span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>html<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><br><span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br><span class="commentcolor" style="color:green">// remove all session variables<br></span>session_unset(); <br><br><span class="commentcolor" style="color:green">// destroy the session <br></span>session_destroy(); <br><span class="phptagcolor" style="color:red">?&gt;</span></span><br><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/body<span class="tagcolor" style="color:mediumblue">&gt;</span></span><br><span class="tagnamecolor" style="color:brown"><span class="tagcolor" style="color:mediumblue">&lt;</span>/html<span class="tagcolor" style="color:mediumblue">&gt;</span></span>
 </div>
<a target="_blank" class="w3-btn w3-margin-bottom" href="showphp.asp?filename=demo_session5">Run example »</a>
</div>
<hr>
<form autocomplete="off" id="w3-exerciseform" action="exercise.asp?filename=exercise_advanced5" method="post" target="_blank">
<h2>Test Yourself With Exercises</h2>
<div class="exercisewindow">
<h2>Exercise:</h2>
<p>Create a session variable named "favcolor".</p>
<div class="exerciseprecontainer">
<pre>session_start();
<input name="ex1" maxlength="9" style="width: 96px;">["favcolor"] = "green";
</pre>
</div>
<br>
<button type="submit" class="w3-btn w3-margin-bottom">Submit Answer »</button>
</div>
</form>

<hr>
<div class="w3-clear nextprev">
<a class="w3-left w3-btn" href="php_cookies.asp">❮ Previous</a>
<a class="w3-right w3-btn" href="php_filter.asp">Next ❯</a>
</div>
</div>
<div class="w3-col l2 m12" id="right">

<div class="sidesection">
  <div id="skyscraper">
  
    <!--<pre>wide_skyscraper, all: [160,600][300,600][320,50][120,600][300,1050]</pre>-->
    <div id="snhb-wide_skyscraper-0"></div>
    <span class="bt-uid-tg" data-uid="5b1fcd99a8-158" style="display: none !important"></span>
  
  </div>
</div>

<div class="sidesection">
<h4><a href="/colors/colors_picker.asp">COLOR PICKER</a></h4>
<a href="/colors/colors_picker.asp">
<img src="/images/colorpicker.gif" alt="colorpicker"></a>
</div>

<div class="sidesection" id="moreAboutSubject">
</div>

<!--
<div id="sidesection_exercise" class="sidesection" style="background-color:#555555;max-width:200px;margin:auto;margin-bottom:32px">
  <div class="w3-container w3-text-white">
    <h4>Exercises</h4>
  </div>
  <div>
    <div class="w3-light-grey">
      <a target="_blank" href="/html/exercise.asp" style="padding-top:8px">HTML</a>
      <a target="_blank" href="/css/exercise.asp">CSS</a>
      <a target="_blank" href="/js/exercise_js.asp">JavaScript</a>
      <a target="_blank" href="/sql/exercise.asp">SQL</a>
      <a target="_blank" href="/php/exercise.asp">PHP</a>
      <a target="_blank" href="/python/exercise.asp">Python</a>
      <a target="_blank" href="/bootstrap/exercise_bs3.asp">Bootstrap</a>
      <a target="_blank" href="/jquery/exercise_jq.asp" style="padding-bottom:8px">jQuery</a>
    </div>
  </div>
</div>
-->

<div class="sidesection w3-light-grey" style="margin-left:auto;margin-right:auto;max-width:230px">
  <div class="w3-container w3-dark-grey">
    <h4><a href="/howto/default.asp" class="w3-hover-text-white">HOW TO</a></h4>
  </div>
  <div class="w3-container w3-left-align w3-padding-16">
    <a href="/howto/howto_js_tabs.asp">Tabs</a><br>
    <a href="/howto/howto_css_dropdown.asp">Dropdowns</a><br>
    <a href="/howto/howto_js_accordion.asp">Accordions</a><br>
    <a href="/howto/howto_js_sidenav.asp">Side Navigation</a><br>
    <a href="/howto/howto_js_topnav.asp">Top Navigation</a><br>
    <a href="/howto/howto_css_modals.asp">Modal Boxes</a><br>
    <a href="/howto/howto_js_progressbar.asp">Progress Bars</a><br>
    <a href="/howto/howto_css_parallax.asp">Parallax</a><br>
    <a href="/howto/howto_css_login_form.asp">Login Form</a><br>
    <a href="/howto/howto_html_include.asp">HTML Includes</a><br>
    <a href="/howto/howto_google_maps.asp">Google Maps</a><br>
    <a href="/howto/howto_js_rangeslider.asp">Range Sliders</a><br>
    <a href="/howto/howto_css_tooltip.asp">Tooltips</a><br>
    <a href="/howto/howto_js_slideshow.asp">Slideshow</a><br>
    <a href="/howto/howto_js_filter_lists.asp">Filter List</a><br>
    <a href="/howto/howto_js_sort_list.asp">Sort List</a><br>
  </div>
</div>

<div class="sidesection">
<h4>SHARE</h4>
<div class="w3-text-grey sharethis" style="visibility: visible;">
<script>
<!--
try{
loc=location.pathname;
if (loc.toUpperCase().indexOf(".ASP")<0) loc=loc+"default.asp";
txt='<a href="http://www.facebook.com/sharer.php?u=https://www.w3schools.com'+loc+'" target="_blank" title="Facebook"><span class="fa fa-facebook-square fa-2x"></span></a>';
txt=txt+'<a href="https://twitter.com/home?status=Currently reading https://www.w3schools.com'+loc+'" target="_blank" title="Twitter"><span class="fa fa-twitter-square fa-2x"></span></a>';
txt=txt+'<a href="https://plus.google.com/share?url=https://www.w3schools.com'+loc+'" target="_blank" title="Google+"><span class="fa fa-google-plus-square fa-2x"></span></a>';
document.write(txt);
} catch(e) {}
//-->
</script><a href="http://www.facebook.com/sharer.php?u=https://www.w3schools.com/php/php_sessions.asp" target="_blank" title="Facebook"><span class="fa fa-facebook-square fa-2x"></span></a><a href="https://twitter.com/home?status=Currently reading https://www.w3schools.com/php/php_sessions.asp" target="_blank" title="Twitter"><span class="fa fa-twitter-square fa-2x"></span></a><a href="https://plus.google.com/share?url=https://www.w3schools.com/php/php_sessions.asp" target="_blank" title="Google+"><span class="fa fa-google-plus-square fa-2x"></span></a>
<br><br>
<a href="javascript:void(0);" onclick="clickFBLike()" title="Like W3Schools on Facebook">
<span class="fa fa-thumbs-o-up fa-2x"></span></a>
<div id="fblikeframe" class="w3-modal">
<div class="w3-modal-content w3-padding-64 w3-animate-zoom" id="popupDIV"></div>
</div>
</div>
</div>

<div class="sidesection">
<h4><a target="_blank" href="//www.w3schools.com/cert/default.asp">CERTIFICATES</a></h4>
<p>
<a href="/cert/cert_html.asp">HTML</a><br>
<a href="/cert/cert_css.asp">CSS</a><br>
<a href="/cert/cert_javascript.asp">JavaScript</a><br>
<a href="/cert/cert_sql.asp">SQL</a><br>
<a href="/cert/cert_python.asp">Python</a><br>
<a href="/cert/cert_php.asp">PHP</a><br>
<a href="/cert/cert_jquery.asp">jQuery</a><br>
<a href="/cert/cert_bootstrap.asp">Bootstrap</a><br>
<a href="/cert/cert_xml.asp">XML</a></p>
<a href="//www.w3schools.com/cert/default.asp" class="w3-button w3-dark-grey" style="text-decoration:none">
Read More »</a>
</div>

<div id="stickypos" class="sidesection" style="text-align:center;position:sticky;top:50px;">
  <div id="stickyadcontainer" style="width: 948.787px;">
    <div style="position:relative;margin:auto;">
      
      <!--<pre>sidebar_sticky, desktop: [120,600][160,600][300,600][300,250]</pre>-->
      <div id="snhb-sidebar_sticky-0"></div>
      <span class="bt-uid-tg" data-uid="5b1fcdb757-158" style="display: none !important"></span>
      <script>
          if (Number(w3_getStyleValue(document.getElementById("main"), "height").replace("px", "")) > 2200) {
            if (document.getElementById("snhb-mid_content-0")) {
              snhb.queue.push(function(){  snhb.startAuction(["sidebar_sticky", "mid_content" ]); });
            }
            else {
              snhb.queue.push(function(){  snhb.startAuction(["sidebar_sticky"]); });
            }
          }
          else {
              if (document.getElementById("snhb-mid_content-0")) {
                snhb.queue.push(function(){  snhb.startAuction(["mid_content"]); });
              }
          }
      </script>  
      
    </div>
  </div>
</div>

<script>
  window.addEventListener("scroll", fix_stickyad);
  window.addEventListener("resize", fix_stickyad);
</script>

</div>
</div>
<div id="footer" class="footer w3-container w3-white">

<hr>

<div style="overflow:auto">
  <div class="bottomad">
    <!-- BottomMediumRectangle -->
    <!--<pre>bottom_medium_rectangle, all: [970,250][300,250][336,280]</pre>-->
    <div id="snhb-bottom_medium_rectangle-0" style="padding:0 10px 10px 0;float:left;width:auto;"></div>
    <!-- RightBottomMediumRectangle -->
    <!--<pre>right_bottom_medium_rectangle, desktop: [300,250][336,280]</pre>-->
    <div id="snhb-right_bottom_medium_rectangle-0" style="padding:0 10px 10px 0;float:left;width:auto;"></div>
  </div>
</div>

<hr>
<div class="w3-row-padding w3-center w3-small" style="margin:0 -16px">
<div class="w3-col l3 m3 s12">
<a class="w3-button w3-light-grey w3-block" href="javascript:void(0);" onclick="displayError();return false" style="white-space:nowrap;text-decoration:none;margin-top:1px;margin-bottom:1px">REPORT ERROR</a>
</div>
<div class="w3-col l3 m3 s12">
<a class="w3-button w3-light-grey w3-block" href="javascript:void(0);" target="_blank" onclick="printPage();return false;" style="text-decoration:none;margin-top:1px;margin-bottom:1px">PRINT PAGE</a>
</div>
<div class="w3-col l3 m3 s12">
<a class="w3-button w3-light-grey w3-block" href="/forum/default.asp" target="_blank" style="text-decoration:none;margin-top:1px;margin-bottom:1px">FORUM</a>
</div>
<div class="w3-col l3 m3 s12">
<a class="w3-button w3-light-grey w3-block" href="/about/default.asp" target="_top" style="text-decoration:none;margin-top:1px;margin-bottom:1px">ABOUT</a>
</div>
</div>
<hr>
<div class="w3-light-grey w3-padding w3-margin-bottom" id="err_form" style="display:none;position:relative">
<span onclick="this.parentElement.style.display='none'" class="w3-button w3-display-topright w3-large">×</span>     
<h2>Your Suggestion:</h2>
<form>
<div class="w3-section">      
<label for="err_email">Your E-mail:</label>
<input class="w3-input w3-border" type="text" style="margin-top:5px;width:100%" id="err_email" name="err_email">
</div>
<div class="w3-section">      
<label for="err_email">Page address:</label>
<input class="w3-input w3-border" type="text" style="width:100%;margin-top:5px" id="err_url" name="err_url" disabled="disabled">
</div>
<div class="w3-section">
<label for="err_email">Description:</label>
<textarea rows="10" class="w3-input w3-border" id="err_desc" name="err_desc" style="width:100%;margin-top:5px;resize:vertical;"></textarea>
</div>
<div class="form-group">        
<button type="button" class="w3-button w3-dark-grey" onclick="sendErr()">Submit</button>
</div>
<br>
</form>
</div>
<div class="w3-container w3-light-grey w3-padding" id="err_sent" style="display:none;position:relative">
<span onclick="this.parentElement.style.display='none'" class="w3-button w3-display-topright">×</span>     
<h2>Thank You For Helping Us!</h2>
<p>Your message has been sent to W3Schools.</p>
</div>

<div class="w3-row w3-center w3-small">
<div class="w3-col l3 m6 s12">
<div class="top10">
<h4>Top Tutorials</h4>
<a href="/html/default.asp">HTML Tutorial</a><br>
<a href="/css/default.asp">CSS Tutorial</a><br>
<a href="/js/default.asp">JavaScript Tutorial</a><br>
<a href="/howto/default.asp">How To Tutorial</a><br>
<a href="/sql/default.asp">SQL Tutorial</a><br>
<a href="/python/default.asp">Python Tutorial</a><br>
<a href="/w3css/default.asp">W3.CSS Tutorial</a><br>
<a href="/bootstrap/bootstrap_ver.asp">Bootstrap Tutorial</a><br>
<a href="/php/default.asp">PHP 5 Tutorial</a><br>
<a href="/php7/default.asp">PHP 7 Tutorial</a><br>
<a href="/jquery/default.asp">jQuery Tutorial</a><br>
<a href="/java/default.asp">Java Tutorial</a><br>
</div>
</div>
<div class="w3-col l3 m6 s12">
<div class="top10">
<h4>Top References</h4>
<a href="/tags/default.asp">HTML Reference</a><br>
<a href="/cssref/default.asp">CSS Reference</a><br>
<a href="/jsref/default.asp">JavaScript Reference</a><br>
<a href="/sql/sql_ref_keywords.asp">SQL Reference</a><br>
<a href="/python/python_reference.asp">Python Reference</a><br>
<a href="/w3css/w3css_references.asp">W3.CSS Reference</a><br>
<a href="/bootstrap/bootstrap_ref_all_classes.asp">Bootstrap Reference</a><br>
<a href="/php/php_ref_overview.asp">PHP Reference</a><br>
<a href="/colors/colors_names.asp">HTML Colors</a><br>
<a href="/jquery/jquery_ref_overview.asp">jQuery Reference</a><br>
<a href="/angular/angular_ref_directives.asp">Angular Reference</a><br>
<a href="/java/java_ref_keywords.asp">Java Reference</a><br>
</div>
</div>
<div class="w3-col l3 m6 s12">
<div class="top10">
<h4>Top Examples</h4>
<a href="/html/html_examples.asp">HTML Examples</a><br>
<a href="/css/css_examples.asp">CSS Examples</a><br>
<a href="/js/js_examples.asp">JavaScript Examples</a><br>
<a href="/howto/default.asp">How To Examples</a><br>
<a href="/sql/sql_examples.asp">SQL Examples</a><br>
<a href="/python/python_examples.asp">Python Examples</a><br>
<a href="/w3css/w3css_examples.asp">W3.CSS Examples</a><br>
<a href="/bootstrap/bootstrap_examples.asp">Bootstrap Examples</a><br>
<a href="/php/php_examples.asp">PHP Examples</a><br>
<a href="/jquery/jquery_examples.asp">jQuery Examples</a><br>
<a href="/java/java_examples.asp">Java Examples</a><br>
<a href="/xml/xml_examples.asp">XML Examples</a><br>
</div>
</div>
<div class="w3-col l3 m6 s12">
<div class="top10">
<h4>Web Certificates</h4>
<a href="/cert/default.asp">HTML Certificate</a><br>
<a href="/cert/default.asp">CSS Certificate</a><br>
<a href="/cert/default.asp">JavaScript Certificate</a><br>
<a href="/cert/default.asp">SQL Certificate</a><br>
<a href="/cert/default.asp">Python Certificate</a><br>
<a href="/cert/default.asp">jQuery Certificate</a><br>
<a href="/cert/default.asp">PHP Certificate</a><br>
<a href="/cert/default.asp">Bootstrap Certificate</a><br>
<a href="/cert/default.asp">XML Certificate</a><br>
<a href="//www.w3schools.com/cert/default.asp" class="w3-button w3-margin-top w3-dark-grey" style="text-decoration:none">
Get Certified »</a>

</div>
</div>        
</div>        

<hr>
<div class="w3-center w3-small w3-opacity">
W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding.
Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.
While using this site, you agree to have read and accepted our <a href="/about/about_copyright.asp">terms of use</a>,
<a href="/about/about_privacy.asp">cookie and privacy policy</a>.
<a href="/about/about_copyright.asp">Copyright 1999-2019</a> by Refsnes Data. All Rights Reserved.<br>
 <a href="//www.w3schools.com/w3css/">Powered by W3.CSS</a>.<br><br>
<a href="//www.w3schools.com">
<img style="width:150px;height:28px;border:0" src="/images/w3schoolscom_gray.gif" alt="W3Schools.com"></a>
</div>
<br><br>
</div>

</div>
<iframe name="__cmpLocator" style="display: none;"></iframe><script src="/lib/w3schools_footer.js"></script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
<![endif]-->


</body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="bgc-lightgray s " data-example-id="nav-pills-with-dropdown">
    <ul class="nav nav-pills ltk-kanan ">
      <li role="presentation" class="active"><a href="index.php?page=beranda" title="Beranda">Beranda</a></li>
      <li role="presentation" class="active"><a href="index.php?page=profilku" title="Profilku">Profilku</a></li>
      <li role="presentation" class="active"><a href="index.php?page=Kontak" title="Kontak">Kontak</a></li>
      <li role="presentation" class="active"><a href="index.php?page=daftar_kontak" title="Daftar Kontak">Daftar Kontak</a></li>
      <li role="presentation" class="active"><a href="index.php?page=multimedia" title="Multimedia">Multimedia</a></li>
      <li role="presentation" class="active"><a href="index.php?page=Testkoneksi" title="Testkoneksi">Tes Koneksi</a></li>
      <li role="presentation" class="active"><a href="logout.php" title="Logout">Log Out</a></li>
    </ul>
  </div>
</nav> 
   <div class="content-buatan">
    <div class="main">
    <?php 
    if ( $_GET['page'] == 'beranda') {

        include "config.php"; // Load file config.php 
         include "profilku.php"; // Load file config.php 
         include "multimedia.php"; // Load file config.php 
         include "daftar kontak.php"; // Load file config.php 
         include "kontak.php"; // Load file config.php 
    }
    else
    {
        include "config.php"; // Load file config.php 
         
    }
    ?>

  </div>
</body>
</html>