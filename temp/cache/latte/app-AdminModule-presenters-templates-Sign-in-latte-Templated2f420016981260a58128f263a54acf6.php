<?php
// source: D:\+++Software+++\wamp\www\skeleton\app\AdminModule\presenters/templates/Sign/in.latte

class Templated2f420016981260a58128f263a54acf6 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('9428f478c9', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block signIn
//
if (!function_exists($_b->blocks['signIn'][] = '_lbdf7fa028b0_signIn')) { function _lbdf7fa028b0_signIn($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div id="signInwrapper">
    <div id="signHeading">
        <img src=" <?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/logo_sud.png" width="45" height="26">   
    </div>
    <form<?php echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin($form = $_form = $_control["signInForm"], array (
), FALSE) ?>>    
 <table class="signInFormInside">
  <tr>
    <th class="signInBox" colspan="2">
        <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/user.png">
            <?php echo $_form["username"]->getControl() ?>

            <br>            
        <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/password.png">    
            <?php echo $_form["password"]->getControl() ?>

    </th>
  </tr>
  <tr>
    <td class="left"><?php echo $_form["remember"]->getControl() ?> </td>
    <td class="right"><?php echo $_form["send"]->getControl() ?></td>
  </tr>
</table>
<?php $iterations = 0; foreach ($flashes as $flash) { ?>  <div class="signflash"><?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>               
<?php $iterations++; } ?>
    <?php echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd($_form, FALSE) ?></form>
</div>
  
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['signIn']), $_b, get_defined_vars()) ; 
}}