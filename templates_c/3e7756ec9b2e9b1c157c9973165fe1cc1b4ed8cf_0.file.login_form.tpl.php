<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-13 09:58:52
  from 'E:\ugm\xampp\htdocs\web\templates\tpl\login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e450fcc925422_20817212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e7756ec9b2e9b1c157c9973165fe1cc1b4ed8cf' => 
    array (
      0 => 'E:\\ugm\\xampp\\htdocs\\web\\templates\\tpl\\login_form.tpl',
      1 => 1581584330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e450fcc925422_20817212 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .form-signin {
        width: 100%;
        max-width: 400px;
        padding: 15px;
        margin: 0 auto;
    }
</style>
<div class="container mt-5">
    <form class="form-signin" action="user.php" method="post">
        <h1 class="h3 mb-3 font-weight-normal">會員登入</h1>
        <div class="mb-3">
            <label for="name" class="sr-only">帳號</label>
            <input
                type="text"
                name="name"
                id="name"
                class="form-control"
                placeholder="請輸入帳號"
                required
            />
        </div>
        <div class="mb-3">
            <label for="pass" class="sr-only">密碼</label>
            <input
                type="password"
                name="pass"
                id="pass"
                class="form-control"
                placeholder="請輸入密碼"
                required
            />
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember" id="remember" /> 記住我
            </label>
        </div>
        <input type="hidden" name="op" id="op" value="login" />
        <button class="btn btn-lg btn-primary btn-block" type="submit">
            會員登入
        </button>
        <div>您還沒還沒註冊嗎？請 <a href="user.php?op=reg_form">點選此處註冊您的新帳號</a>。</div>
    </form>
</div>
<!-- 表單返回頁，記得在表單加「 target='returnWin' 」 -->
<iframe name="returnWin" style="display: none;" onload="this.onload=function(){window.location='<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
ok.html'}"></iframe>
<div class="container mt-5">
    <h1 class="text-center">聯絡我們</h1>
    <form role="form" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLScUepSPrqEnh9giCYvklI77zvs-6e7VRejCDE9LGYsklyJxHw/formResponse" method="post" id="myForm" target="returnWin">
			<div class="row">
				<!--姓名-->              
				<div class="col-sm-4">
					<div class="form-group">
						<label>
							<span class="title">姓名</span>
						</label>
						<input type="text" class="form-control" name="entry.1689282052" id="name" value="">
					</div>
				</div>          
				<!--電話-->              
				<div class="col-sm-4">
					<div class="form-group">
						<label>
							<span class="title">電話</span>
						</label>
						<input type="text" class="form-control" name="entry.238838802" id="tel" value="">
					</div>
				</div>          
				<!--email-->              
				<div class="col-sm-4">
					<div class="form-group">
						<label>
							<span class="title">email</span>
						</label>
						<input type="text" class="form-control" name="entry.263970123" id="email" value="">
					</div>
			</div> 
		</div>
		<div class="row">
			<div class="col-sm-12">  
				<!-- 備註 -->
				<div class="form-group">
					<label class="control-label">備註</label>
					<textarea class="form-control" rows="4" id="contact" name="entry.1638206565"></textarea>
				</div>
			</div>
		</div>
			<div class="text-center pb-3">
				<button type="submit" class="btn btn-primary">送出</button>
			</div>
    </form>
</div><?php }
}
