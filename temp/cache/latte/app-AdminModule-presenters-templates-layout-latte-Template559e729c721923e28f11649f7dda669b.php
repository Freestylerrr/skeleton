<?php
// source: E:\+++Software+++\wamp\www\skeleton\app\AdminModule\presenters/templates/@layout.latte

class Template559e729c721923e28f11649f7dda669b extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('ca70c3680c', 'html')
;
// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Neon Admin Panel">
	<meta name="author" content="">	
        <title>SUD admin</title>
	 <!-- jQuery -->
    <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/jquery.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
   <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/dropit.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>     
    <!-- Nette JavaScript -->
    <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/main.js"></script>
    <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/netteForms.js"></script>
    <!-- Custom CSS -->
    <link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/bootstrap.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body> 
<?php if ($user->loggedIn) { ?>
<span id="top-panel">   
    <div id="logo-top">Your company logo will be here ... </div>
    <div class="container1">                                        
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><?php echo Latte\Runtime\Filters::escapeHtml($user->identity->name, ENT_NOQUOTES) ?>
 <?php echo Latte\Runtime\Filters::escapeHtml($user->identity->surname, ENT_NOQUOTES) ?>

            
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Profile</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Messages</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("logout!"), ENT_COMPAT) ?>
">Sign Out</a></li>
        </ul>
      </div>
    </div>
</span>
           <div id="left-menu">
          <ul>
              <li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
">Dashboard</a></li>
              <li><a href="#">Articles</a></li>                
              <li><a href="#">Section</a></li>                        
              <li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Users:"), ENT_COMPAT) ?>
">Users</a></li>
              <li><a href="#">Global settings</a></li>
          </ul>
   </div>       
<div id="wrapper">
<div id="page-wrapper">  
<div id="page-wrapper-border">
<?php Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'content', $template->getParameters()) ?>
                                    
</div> 
</div>
</div>
     
<?php } else { Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'signIn', $template->getParameters()) ;} ?>

</body>
</html>
<?php
}}