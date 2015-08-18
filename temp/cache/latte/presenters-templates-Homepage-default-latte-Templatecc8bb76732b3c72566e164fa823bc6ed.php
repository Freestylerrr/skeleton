<?php
// source: D:\+++Software+++\wamp\www\skeleton\app\AdminModule\presenters/templates/Homepage/default.latte

class Templatecc8bb76732b3c72566e164fa823bc6ed extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('3d7f7dc820', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb7cc4f7f15b_content')) { function _lb7cc4f7f15b_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h1 class="page-header">Dashboard</h1>                       
                                                                   
<div id="dashboard-main">
                          
    <table class="tg">
     <tr>
            <th class="tg"><a href=""><img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/icons/icon-48-article-add.png"><br>Add new article</a></th> 
      <th class="tg"><a href=""><img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/icons/icon-48-article.png"><br>Article manager</a></th>
      <th class="tg"><a href=""><img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/icons/icon-48-section.png"><br>Section manager</a></th>
      <th class="tg"><a href=""><img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/icons/icon-48-category.png"><br>Category manager</a></th>
      <th class="tg"><a href=""><img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/icons/icon-48-user.png"><br>User manager</a></th>
      <th class="tg"><a href=""><img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/icons/icon-48-config.png"><br>Global settings</a></th>
     </tr> 
    </table>
    
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
?>

<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}