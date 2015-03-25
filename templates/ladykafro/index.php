<?php
defined('_JEXEC') or die ('Restricted access');
$app=jFactory::getApplication();
$menu= $app->getMenu();
$activeId=$menu->getActive()->id;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"xml:lang"<?php echo $this->language;?>" lang="<?php echo $this->language;?>" >
<head>
    <jdoc:include type="head"/>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css type=text/css"/>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css type=text/css"/>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
</head>
<body>
	<!--#top -->
	<div id="top">
	    <jdoc:include type="modules" name="top"/>
        <!--#mainmenu-->    
        <div class="mainmenu">
           <!--<img src="<?php echo $this->baseurl?>/templates<?php echo $this->template;?>/images/logo.png" class="logo"/>-->
        </div>
        <!--end #top-header-->
    <!--end #top-->    
	</div>
	
    <!-- #wrapper-->
    <div id="wrapper">       
        <!-- #slidesshow-->
        <div id="slideshow">
            <jdoc:include type="modules" name="slideshow"/>
        </div>
        <!--end #slidesshow-->
        
        <!--#maintop-->
        <div id="maintop">
            <jdoc:include type="component"/> 
        </div>
        <!-- end #maintop-->
        
        <!--#mainbottom-->
        <div id="mainbottom">
            <jdoc:include type="modules" name="mainbotton"/> 
        </div>
        <!-- end #mainbottom-->
        
        <!--# footer-->
        <div id="footer">
            <jdoc:include type="modules" name="footer" />
        </div>
         <!--end #footer-->
    
    </div>
    <!-- end #wrapper-->
</body>
</html>