<?php

interface Power {
    public function active();
}

class Fly {
    private $price = '十亿';
}

class Force implements Power{
    private $price = '一亿';
    public function active()
    {
    }
}

class Shot {
    private $price = '一亿';
}

class Xpower implements Power {
    public function active()
    {
    }
}

class UltraBomb implements Power {
    public function active()
    {
    }
}

//class Factory {
//
//    public function makePower ($powerName) {
//        switch ($powerName) {
//            case 'Fly' : return new Fly();
//            case 'Force' : return new Force();
//            case 'Shot' : return new Shot();
//        }
//    }
//}

class Superman {

    private $power;

    public function __construct(Power $power)
    {
//        $factory = new Factory();
//
//        $this->power[] = $factory->makePower($powers);
        $this->power[] = $power;
    }
}


$gangtieman = new Superman(new Xpower());
$lvman = new Superman(new Force());

class Container
{
    protected $binds;

    protected $instances;

    public function bind($abstract, $concrete)
    {
        if ($concrete instanceof Closure) {
            $this->binds[$abstract] = $concrete;
        } else {
            $this->instances[$abstract] = $concrete;
        }
    }

    public function make($abstract, $power = '')
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }

        $parameters = [$this, $power];

        return call_user_func_array($this->binds[$abstract], $parameters);//$arr = [class, 'methodName'];
    }
}

// 创建一个容器（后面称作超级工厂）
$container = new Container;

// 向该 超级工厂添加超人的生产脚本
$container->bind('superman', function($container, $moduleName) {
    return new Superman($container->make($moduleName));
});

// 向该 超级工厂添加超能力模组的生产脚本
$container->bind('xpower', function($container) {
    return new Xpower;
});

// 同上
$container->bind('ultrabomb', function($container) {
    return new UltraBomb;
});

// ****************** 华丽丽的分割线 **********************
// 开始启动生产
$superman_1 = $container->make('superman', 'xpower');
//$superman_2 = $container->make('superman', 'ultrabomb');
//$superman_3 = $container->make('superman', 'xpower');
// ...随意添加
var_dump($superman_1);
exit;