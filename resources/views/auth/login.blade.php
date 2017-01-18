<form method="POST" action="/api/login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <br>
    <div>
        密码
        <input type="password" name="password" id="password">
    </div>

    <br>
    <div>
        <input type="checkbox" name="remember"> 记住我
    </div>

    <br>
    <div>
        <button type="submit">登录</button>
        <a type="button" href="http://172.16.21.233:8888/register" target="_blank">注册</a>
    </div>
</form>
