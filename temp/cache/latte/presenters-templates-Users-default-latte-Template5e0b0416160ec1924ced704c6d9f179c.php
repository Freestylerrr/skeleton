<?php
// source: E:\+++Software+++\wamp\www\skeleton\app\AdminModule\presenters/templates/Users/default.latte

class Template5e0b0416160ec1924ced704c6d9f179c extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('8800f4c9b6', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb06e28974c3_content')) { function _lb06e28974c3_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="right-button-panel">
    <div class="user-heading"><h1>User Manager</h1></div>
    <div class="right-button-panel-icons">
<a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Users:add"), ENT_COMPAT) ?>
"><img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/icons/icon-48-article-add.png"><br>Add user</a>

    </div>
</div>

<table class="users" >
 
    <tr class="users-table-heading">
        <th>Name</th>
        <th>Username</th>
        <th>Role</th>
        <th>Email</th>
        <th>Last visit</th>
        <th>ID</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    
<?php if (!empty($users)) { $iterations = 0; foreach ($users as $item) { ?>    <tr>   
     <td><?php echo Latte\Runtime\Filters::escapeHtml($item->name, ENT_NOQUOTES) ?>
 <?php echo Latte\Runtime\Filters::escapeHtml($item->surname, ENT_NOQUOTES) ?></td>     
     <td><?php echo Latte\Runtime\Filters::escapeHtml($item->username, ENT_NOQUOTES) ?></td>     
     <td><?php echo Latte\Runtime\Filters::escapeHtml($item->role, ENT_NOQUOTES) ?></td>
     <td><?php echo Latte\Runtime\Filters::escapeHtml($item->email, ENT_NOQUOTES) ?></td>
          <td><?php echo Latte\Runtime\Filters::escapeHtml($item->lastvisit, ENT_NOQUOTES) ?></td>
     <td><?php echo Latte\Runtime\Filters::escapeHtml($userId=$item->id, ENT_NOQUOTES) ?></td>
          <td><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Users:edit", array('userId'=>$userId)), ENT_COMPAT) ?>
">Edit</a></td>
     <td><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("DeleteUser!", array($userId)), ENT_COMPAT) ?>
">Delete</a></td>
         </tr>
<?php $iterations++; } } else { ?>
    <th>
     <h2>No users added yet</h2>
    </th>
<?php } ?>

    
</table>
  
  


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
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}