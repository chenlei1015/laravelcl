{%block name="title"%}
	<div class="content">
		<h1 style="width:100%; text-align: center; margin-top: 50px;font-size: 30px;">
			注册系统
		</h1>
		<form method="POST" action="/api/register">

			<div>
				用户名
				<input type="text" name="name"">
			</div>

			<div>
				Email
				<input type="email" name="email"">
			</div>

			<div>
				密码
				<input type="password" name="password">
			</div>

			<div>
				确认密码
				<input type="password" name="password_confirmation">
			</div>

			<div>
				<button type="submit">注册</button>
			</div>
		</form>

	</div>
{%/block%}