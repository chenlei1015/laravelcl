{%extends file="../common/layout.tpl"%}
{%block name="content"%}
	<div class="loginmsg">
		<p>登录信息:
			<div>
				{%if $info.user%}
					<p1>欢迎{%$info.user.name%}</p1>
				{%else%}
					<p1>尚未登录</p1>
				{%/if%}
			</div>
		</p>
		<a type="button" href="http://172.16.21.233:8888/login">登录</a>
		<a type="button" href="http://172.16.21.233:8888/api/logout">退出</a>
	</div>
{%/block%}