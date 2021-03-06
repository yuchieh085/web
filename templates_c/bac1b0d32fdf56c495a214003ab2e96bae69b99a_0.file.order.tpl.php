<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-11 10:48:58
  from 'E:\xampp\htdocs\web\templates\tpl\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e68519a871660_10845600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bac1b0d32fdf56c495a214003ab2e96bae69b99a' => 
    array (
      0 => 'E:\\xampp\\htdocs\\web\\templates\\tpl\\order.tpl',
      1 => 1583894936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e68519a871660_10845600 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['op']->value == "op_list") {?>
  <table class="table table-striped table-bordered table-hover table-sm">
    <thead>
      <tr class="text-center thead-light">
        <th scope="col">日期</th>
        <th scope="col">姓名</th>
        <th scope="col">電話</th>
        <th scope="col" >桌號</th>
        <th scope="col" class="text-right">合計</th>
        <th scope="col">功能</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
        <tr class="text-center">
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['tel'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['row']->value['kind_title'];?>
</td>
          <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['total'];?>
</td>
          <td>
            <a href="cart.php?op=order_form&sn=<?php echo $_smarty_tpl->tpl_vars['row']->value['sn'];?>
"><i class="fas fa-edit"></i></a>
            <a href="javascript:void(0)" onclick="op_delete(<?php echo $_smarty_tpl->tpl_vars['row']->value['sn'];?>
);"><i class="fas fa-trash-alt"></i></a>
          </td>
        </tr>
      <?php
}
} else {
?>
        <tr>
          <td colspan=6>目前沒有資料</td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
  <?php echo $_smarty_tpl->tpl_vars['bar']->value;?>

    
  <!-- sweetalert2 -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.css">
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>
    function op_delete(sn){
      Swal.fire({
        title: '你確定嗎？',
        text: "您將無法還原！",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '是的，刪除它！',
        cancelButtonText: '取消'
      }).then((result) => {
        if (result.value) {
            document.location.href="prod.php?op=op_delete&sn="+sn;
        }
      })
    }
  <?php echo '</script'; ?>
>
<?php }
}
}
