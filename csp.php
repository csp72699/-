<?
function bq()
{
    echo '超全局php文件开发人员QQ' . '1911422286' . '<br>';
    exit();
}

#说明
function sm()
{
    echo '<style>body{font-weight:500;}</style>' .
        '文件使用方法在php解释器目录下的php.ini&nbsp;&nbsp;&nbsp;auto_prepend_file配置引入绝对路径方法的引入这个文件过来' . '<hr>' .
        '推荐开发环境&nbsp;&nbsp;&nbsp;php8和MariaDB10和redis5' . '<hr>' .
        'bq()是输出版权信息&nbsp;&nbsp;&nbsp;此函数没有参数' . '&nbsp;&nbsp;&nbsp;1<hr>' .
        'dz()是获取当前地址字符串&nbsp;&nbsp;&nbsp;此函数没有参数' . '&nbsp;&nbsp;&nbsp;2<hr>' .
        'fh()是获取当前上地址字符串&nbsp;&nbsp;&nbsp;此函数没有参数' . '&nbsp;&nbsp;&nbsp;3<hr>' .
        'qdkj()&nbsp;&nbsp;&nbsp;此函数是用来引入前端框架没有参数' . '&nbsp;&nbsp;&nbsp;5<hr>' .
        'sjk($sql)&nbsp;&nbsp;&nbsp;有三个参数&nbsp;&nbsp;&nbsp;参数是字符串sql语句&nbsp;&nbsp;&nbsp;如果该函数连接报错请找到网站运行目录下的sjk.txt&nbsp;&nbsp;&nbsp;参数二是数据库名字符串&nbsp;&nbsp;&nbsp;sql语句如果是查询返回二维数组&nbsp;&nbsp;&nbsp;如果是增删此返回的时布尔值成功就是真失败就是假&nbsp;&nbsp;&nbsp;不支持批量sql&nbsp;&nbsp;&nbsp;此函数是用来做数据库操作的' . '&nbsp;&nbsp;&nbsp;6<hr>' .
        'tzts($a,$b,$c)&nbsp;&nbsp;&nbsp;有三个参数&nbsp;&nbsp;&nbsp;参数一有4个数字1代表直接跳转&nbsp;&nbsp;&nbsp;2代表程序成功时跳转并提示3秒延时&nbsp;&nbsp;&nbsp;3代表程序失败时跳转并提示3秒延时&nbsp;&nbsp;&nbsp;4代表程序提示时跳转并提示3秒延时&nbsp;&nbsp;&nbsp;参数二是字符串跳转地址&nbsp;&nbsp;&nbsp;参数三是提示的字符串文字&nbsp;&nbsp;&nbsp;此函数是用来做跳转提示的第三个参数参数一传1的时候可以不用传' . '&nbsp;&nbsp;&nbsp;7<hr>' .
        'skzfc($fname)&nbsp;&nbsp;&nbsp;有参数一个参数是字符串&nbsp;&nbsp;&nbsp;返回真代表是空字符串返回假代表不是&nbsp;&nbsp;&nbsp;此函数是用来检查是不是空字符串的' . '&nbsp;&nbsp;&nbsp;8<hr>' .
        'fy($user,$ts)&nbsp;&nbsp;&nbsp;有二个参数&nbsp;&nbsp;&nbsp;第一个参数是二维数组&nbsp;&nbsp;&nbsp;第二个参数是分页的条数&nbsp;&nbsp;&nbsp;此函数是用来做分页数据的&nbsp;&nbsp;&nbsp;返回的是三维数组&nbsp;&nbsp;&nbsp;0键值是二维数组分页数据&nbsp;&nbsp;&nbsp;1键值是页码字符串2键值是总页数字符串&nbsp;&nbsp;&nbsp;需要和qdkj()&nbsp;&nbsp;&nbsp;fymb($a)&nbsp;&nbsp;&nbsp;一起使用才能实现最终分页效果' . '&nbsp;&nbsp;&nbsp;遍历数据拿到分页后的数据下标0给循环查询全部的数据给fymb的参数二分页后的数据给fymb参数一&nbsp;&nbsp;&nbsp;9<hr>' .
        'fymb($a)&nbsp;&nbsp;&nbsp;有二个参数&nbsp;&nbsp;&nbsp;参数一就是fy($user,$ts)的返回值&nbsp;&nbsp;&nbsp;此函数是用来做分页模板的&nbsp;&nbsp;&nbsp;需要和qdkj()&nbsp;&nbsp;&nbsp;fy($user,$ts)&nbsp;&nbsp;&nbsp;一起使用才能实现最终分页效果&nbsp;&nbsp;&nbsp;参数二是没有分页后的数据' . '&nbsp;&nbsp;&nbsp;10<hr>' .
        'qdjz()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;此函数的作用就是禁止查看前端代码源代码' . '&nbsp;&nbsp;&nbsp;11<hr>' .
        'sjtp()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;此函数的作用就是生成随机的jpg图片名&nbsp;&nbsp;&nbsp;返回值是jpg图片名' . '&nbsp;&nbsp;&nbsp;12<hr>' .
        'ym()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;此函数的作用就是获取当前的域名&nbsp;&nbsp;&nbsp;返回值是域名字符串' . '&nbsp;&nbsp;&nbsp;13<hr>' .
        'dzl()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;此函数的作用就是获取当前的地址栏并去参数&nbsp;&nbsp;&nbsp;返回值是过滤参数的地址字符串' . '&nbsp;&nbsp;&nbsp;14<hr>' .
        'swszzew($d)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;此函数的作用就是三维数组转二维数组&nbsp;&nbsp;&nbsp;参数就是三维数组&nbsp;&nbsp;&nbsp;返回值是二维数组数据' . '&nbsp;&nbsp;&nbsp;15<hr>' .
        'ss($user,$key)&nbsp;&nbsp;&nbsp;有二个参数&nbsp;&nbsp;&nbsp;此函数的作用就是做数据搜索的&nbsp;&nbsp;&nbsp;参数就是二维数组&nbsp;&nbsp;&nbsp;参数二是搜索的关键字&nbsp;&nbsp;&nbsp;返回值是搜索的结果' . '&nbsp;&nbsp;&nbsp;16<hr>' .
        'jddz()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;此函数的作用是获取完整加了端口的完整地址字符串' . '&nbsp;&nbsp;&nbsp;17<hr>' .
        'dzcs()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;此函数的作用是获取地址栏的参数字符串' . '&nbsp;&nbsp;&nbsp;18<hr>' .
        'zfcxd($str1,$str2)&nbsp;&nbsp;&nbsp;有两个参数&nbsp;&nbsp;&nbsp;第参数是字符串第二个参数&nbsp;&nbsp;&nbsp;是比较的字符串&nbsp;&nbsp;&nbsp;改函数的作用是比较字符串是否相等' . '&nbsp;&nbsp;&nbsp;19<hr>' .
        'sfdl()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;此函数的作用是判断是否登录了&nbsp;&nbsp;&nbsp;参数一是数据库查询的账号密码,拼接的&nbsp;&nbsp;&nbsp;如果已经登录了会返回会话值' . '&nbsp;&nbsp;&nbsp;20<hr>' .
        'fzhh($a)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;此函数的作用是赋值登录会话&nbsp;&nbsp;&nbsp;参数一是会话值字符串' . '&nbsp;&nbsp;&nbsp;21<hr>' .
        'hqhh()&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;此函数的作用是获取会话值&nbsp;&nbsp;&nbsp;返回值会话值字符串&nbsp;&nbsp;&nbsp;参数是会话键名' . '&nbsp;&nbsp;&nbsp;22<hr>' .
        'yjdl()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;此函数的作用是判断是否已经登录' . '有一个参数参数是地址栏字符串&nbsp;&nbsp;&nbsp;23<hr>' .
        'jc($a,$b="")&nbsp;&nbsp;&nbsp;有两个参数&nbsp;&nbsp;&nbsp;此函数的作用是检查数据&nbsp;&nbsp;&nbsp;参数一是要检查的变量或值&nbsp;&nbsp;&nbsp;参数二是1&nbsp;&nbsp;&nbsp;如果参数二传一则是类型检查' . '&nbsp;&nbsp;&nbsp;24<hr>' .
        'tc()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;此函数的作用是退出登录注销所有会话并跳转&nbsp;&nbsp;&nbsp;参数是路由地址字符串' . '&nbsp;&nbsp;&nbsp;25<hr>' .
        'dxzsz(&$object)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;此函数的作用是对象转数组&nbsp;&nbsp;&nbsp;参数是对象' . '&nbsp;&nbsp;&nbsp;26<hr>' .
        'yxlj()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;此函数的作用是获取当前运行目录&nbsp;&nbsp;&nbsp;返回值是网站运行目录字符串' . '&nbsp;&nbsp;&nbsp;27<hr>' .
        'zfzm($string,$toType)&nbsp;&nbsp;&nbsp;有二个参数&nbsp;&nbsp;&nbsp;此函数的作用是字符串转码&nbsp;&nbsp;&nbsp;参数是字符串&nbsp;&nbsp;&nbsp;参数二是GBK或UTF-8字符串' . '&nbsp;&nbsp;&nbsp;28<hr>' .
        'wjxz($filename)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;此函数的作用下载文件&nbsp;&nbsp;&nbsp;参数是字符串文件名加路径' . '&nbsp;&nbsp;&nbsp;29<hr>' .
        'bfb($z)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;此函数的作用小数换成百分比数&nbsp;&nbsp;&nbsp;参数是小数' . '&nbsp;&nbsp;&nbsp;30<hr>' .
        'sswr($x)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;此函数的作用四舍五入留两位小数&nbsp;&nbsp;&nbsp;参数是小数' . '&nbsp;&nbsp;&nbsp;31<hr>' .
        'ywszzew($data)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;此函数的作用是一维数组转二维&nbsp;&nbsp;&nbsp;参数是一维数组' . '&nbsp;&nbsp;&nbsp;32<hr>' .
        'ywszjmth($newarray,$a,$b)&nbsp;&nbsp;&nbsp;有三个参数&nbsp;&nbsp;&nbsp;此函数的作用是替换一维数组的键名&nbsp;&nbsp;&nbsp;参数是一维数组,参数三被替换的键名,参数二是要替换的键名' . '&nbsp;&nbsp;&nbsp;33<hr>' .
        'bl($value1,$value2,$gcd)&nbsp;&nbsp;&nbsp;有三个参数&nbsp;&nbsp;&nbsp;此函数的作用算出比例值&nbsp;&nbsp;&nbsp;参数是数子被对比的值,参数二是数字要对比的值，参数三是比例倍数' . '&nbsp;&nbsp;&nbsp;34<hr>' .
        'glfh($str)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;此函数的作用是过滤字符串中的特殊符合&nbsp;&nbsp;&nbsp;参数是要被过滤的字符串' . '&nbsp;&nbsp;&nbsp;35<hr>' .
        'ybsx($a)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;此函数的作用是点击事件请求异步刷新用的&nbsp;&nbsp;&nbsp;参数是jq的标签选择器' . '&nbsp;&nbsp;&nbsp;36<hr>' .
        'sjh()&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;此函数的作用是验证手机号的&nbsp;&nbsp;&nbsp;如果是手机号返回数据不是手机号就返回假&nbsp;&nbsp;&nbsp;参数是字符串数据' . '&nbsp;&nbsp;&nbsp;37<hr>' .
        'sc($a,$b)&nbsp;&nbsp;&nbsp;有二个参数&nbsp;&nbsp;&nbsp;此函数的作用是输出美化过的文字用的&nbsp;&nbsp;&nbsp;参数一是字符串信息&nbsp;&nbsp;&nbsp;参数是二是数字可选三个数字1代表绿色2代表红色3代表黄色' . '&nbsp;&nbsp;&nbsp;38<hr>' .
        'kg()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;这个函数是用来输出空格的' . '&nbsp;&nbsp;&nbsp;39<hr>' .
        'ip()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;这个函数是用来返回用户ip的' . '&nbsp;&nbsp;&nbsp;40<hr>' .
        'sj($a="")&nbsp;&nbsp;&nbsp;有一个参数可传可不传&nbsp;&nbsp;&nbsp;这个函数是用来返回当前时间格式的字符串的' . '&nbsp;&nbsp;&nbsp;没有传值的时候默认是返回年月日时分秒&nbsp;&nbsp;&nbsp;传1了就是返回年月日&nbsp;&nbsp;&nbsp;传2了就是返回年月日去掉符号的数字41<hr>' .
        'lj()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;这个函数是用来没有超链接按钮的' . '&nbsp;&nbsp;&nbsp;42<hr>' .
        'yzm()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;这个函数是用输出图片验证码的然后这个验证码的会话键名是yzm' . '&nbsp;&nbsp;&nbsp;43<hr>' .
        'sjysb()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;这个函数是用来返回随机压缩包文件名字符串的' . '&nbsp;&nbsp;&nbsp;44<hr>' .
        'sfsjsb()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;这个函数是用来判断是不是手机设备访问网站的&nbsp;&nbsp;&nbsp;如果是手机返回true如果是不是手机访问false' . '&nbsp;&nbsp;&nbsp;45<hr>' .
        'hhgqsj($expire=0)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;这个函数是用来设置会话过期时间的&nbsp;&nbsp;&nbsp;参数传578则是578秒随便传多少秒' . '&nbsp;&nbsp;&nbsp;46<hr>' .
        'lm()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;这个函数是用来防止数据乱码用的' . '&nbsp;&nbsp;&nbsp;47<hr>' .
        'yq($a)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;参数是要验证的邮箱&nbsp;&nbsp;&nbsp;这个函数是用来验证是不是邮箱的&nbsp;&nbsp;&nbsp;如果是邮箱返回真不是邮箱返回假' . '&nbsp;&nbsp;&nbsp;48<hr>' .
        'hqyzm()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;这个函数是用来获取图形验证码的' . '&nbsp;&nbsp;&nbsp;49<hr>' .
        'sjc($a,$b)&nbsp;&nbsp;&nbsp;有两个参数&nbsp;&nbsp;&nbsp;此函数是用来做时间差用的&nbsp;&nbsp;&nbsp;参数一是时间格式的&nbsp;&nbsp;&nbsp;参数二是另要比较的时间格式的&nbsp;&nbsp;&nbsp;数据类型都是字符串的&nbsp;&nbsp;&nbsp;返回值是相差得天数' . '&nbsp;&nbsp;&nbsp;50<hr>' .
        'zszzfc($num)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;此函数是用来做整数转字符串的&nbsp;&nbsp;&nbsp;参数一是整数&nbsp;&nbsp;&nbsp;返回值是转化后的字符串' . '&nbsp;&nbsp;&nbsp;51<hr>' .
        'anlj($a)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;此函数是用来做按钮链接的&nbsp;&nbsp;&nbsp;参数一是要跳转的地址字符串' . '&nbsp;&nbsp;&nbsp;52<hr>' .
        'sbszs($age)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp此函数是用来判断是不是整数的&nbsp;&nbsp;&nbsp;参数一是php数据&nbsp;&nbsp;&nbsp;如果参数是整数返回该数据值&nbsp;&nbsp;&nbsp;不是整数则跳转提示;' . '&nbsp;&nbsp;&nbsp;53<hr>' .
        'yc()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;该函数是用来做输入框隐藏类型的' . '55<hr>' .
        'sfsxs($nubs)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;此函数是用来判断是不是小数的&nbsp;&nbsp;&nbsp;参数一是php数据&nbsp;&nbsp;&nbsp;如果不是小数跳转提示如果是小数返回该值' . '&nbsp;&nbsp;&nbsp;56<hr>' .
        'scwbxx($file_path)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;参数是文本文件的地址&nbsp;&nbsp;&nbsp;改函数的作用是输出读取文件的全部文本信息' . '&nbsp;&nbsp;&nbsp;57<hr>' .
        'hqjson($v)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;该函数的作用是把json变成php数组&nbsp;&nbsp;&nbsp;参数是字符串json地址栏' . '&nbsp;&nbsp;&nbsp;58<hr>' .
        'scwjj($dir)&nbsp;&nbsp;&nbsp;有参数&nbsp;&nbsp;&nbsp;该函数的作用是用来删除文件夹的&nbsp;&nbsp;&nbsp;参数是字符串的文件夹路径&nbsp;&nbsp;&nbsp;该函数请最后使用' . '&nbsp;&nbsp;&nbsp;59<hr>' .
        'hc()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;该函数的作用是初始化redis用的' . '&nbsp;&nbsp;&nbsp;60<hr>' .
        'clj($a,$b)&nbsp;&nbsp;&nbsp;有两个参数&nbsp;&nbsp;&nbsp;该函数的作用是用来做超链接的&nbsp;&nbsp;&nbsp;第一个参数是链接的地址&nbsp;&nbsp;&nbsp;第二个参数是链接的文字' . '&nbsp;&nbsp;&nbsp;61<hr>' .
        'bc()&nbsp;&nbsp;&nbsp没有参数&nbsp;&nbsp;&nbsp;该函数是用来做php解释器取消报错的' . '&nbsp;&nbsp;&nbsp;62<hr>' .
        'wjzcz($b,$a)&nbsp;&nbsp;&nbsp有两个参数&nbsp;&nbsp;&nbsp;该函数是用来做检测文件值里面是否有相等的数据&nbsp;&nbsp;&nbsp;如果有则返回真如果没有则返回假&nbsp;&nbsp;&nbsp;第一个参数是二维数组&nbsp;&nbsp;&nbsp;第二个参数是字符串' . '&nbsp;&nbsp;&nbsp;63<hr>' .
        'hh()&nbsp;&nbsp;&nbsp没有参数&nbsp;&nbsp;&nbsp;该函数是用来开启会话的' . '&nbsp;&nbsp;&nbsp;64<hr>' .
        'tpwj($a)有一个参数&nbsp;&nbsp;&nbsp;该函数是用来做判断上传的文件是否是图片的&nbsp;&nbsp;&nbsp;参数是表单文件name名&nbsp;&nbsp;&nbsp;65' . '<hr>' .
        'bdwj()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;该函数是用来添加表单上传文件属性的&nbsp;&nbsp;&nbsp;66' . '<hr>' .
        'class wxj&nbsp;&nbsp;&nbsp;有二个参数&nbsp;&nbsp;&nbsp;该类是做无限极数据用的&nbsp;&nbsp;&nbsp;里面有一个静态方法wxjff这个方法是做无限极数据用的;wxjjff第一个参数是二维数组' . '&nbsp;&nbsp;&nbsp;第二个参数有默认值67<hr>' .
        'ts($a)&nbsp;&nbsp;&nbsp有一个参数&nbsp;&nbsp;&nbsp;该函数是用来做输入框提示的&nbsp;&nbsp;&nbsp;参数是一个提示字符串' . '&nbsp;&nbsp;&nbsp;68<hr>' .
        'hqzdjz($a,$b)&nbsp;&nbsp;&nbsp;有两个参数&nbsp;&nbsp;&nbsp;该函数是用来获取指定键值的&nbsp;&nbsp;&nbsp;第一个参数是二维数组&nbsp;&nbsp;&nbsp;第二个参数是键名&nbsp;&nbsp;&nbsp;返回值是键值字符串加了，符号的' . '&nbsp;&nbsp;&nbsp;69<hr>' .
        'ystp($sFile,$iWidth,$iHeight)&nbsp;&nbsp;&nbsp;该函数是用来做图片压缩的&nbsp;&nbsp;&nbsp;有三个参数&nbsp;&nbsp;&nbsp;第一个参数是图片的路径字符串&nbsp;&nbsp;&nbsp;参数二是图片的宽数字&nbsp;&nbsp;&nbsp;参数三是图片的高数字&nbsp;&nbsp;&nbsp;返回值是压缩后的图片路径' . '&nbsp;&nbsp;&nbsp;70<hr>' .
        'sflj($a)&nbsp;&nbsp;&nbsp;该函数是用来做判断是否是链接的&nbsp;&nbsp;&nbsp;如果是链接则返回链接&nbsp;&nbsp;&nbsp;有一个参数&nbsp;&nbsp;&nbsp;参数是一个字符串' . '&nbsp;&nbsp;&nbsp;71<hr>' .
        'hqszcd($a)&nbsp;&nbsp;&nbsp;该函数是用来获取数组的长度的&nbsp;&nbsp;&nbsp;返回值是数组的长度数字类型&nbsp;&nbsp;&nbsp;有一个参数&nbsp;&nbsp;&nbsp;参数一是一个数组' . '&nbsp;&nbsp;&nbsp;72<hr>' .
        'hqewszdydjdz($b,$a）&nbsp;&nbsp;&nbsp;该函数是用来获取二维码对应的键的值&nbsp;&nbsp;&nbsp;返回值是获取后的一维数组&nbsp;&nbsp;&nbsp;有两个参数&nbsp;&nbsp;&nbsp;参数一是一个二维数组&nbsp;&nbsp;&nbsp;参数二是字符串键名' . '&nbsp;&nbsp;&nbsp;73<hr>' .
        'szfgzfc($a,$b)&nbsp;&nbsp;&nbsp;该函数是用来把一维数组变成字符串的&nbsp;&nbsp;&nbsp;有两个参数&nbsp;&nbsp;&nbsp;参数一是要拼接的字符串&nbsp;&nbsp;&nbsp;参数二是一维数组&nbsp;&nbsp;&nbsp;返回值是变成后的字符串' . '&nbsp;&nbsp;&nbsp;74<hr>' .
        'sjszjz($b,$a)&nbsp;&nbsp;&nbsp;该函数的作用是随机一个一维数组任意几个键值&nbsp;&nbsp;&nbsp;有两个参数&nbsp;&nbsp;&nbsp;参数一是一个一维数组&nbsp;&nbsp;&nbsp;参数二是数字要几个键值&nbsp;&nbsp;&nbsp;返回值是获取的随机键值' . '&nbsp;&nbsp;&nbsp;75<hr>' .
        'szjzdf($a)&nbsp;&nbsp;&nbsp;该函数的作用是把一个一维数组的键和值调反&nbsp;&nbsp;&nbsp;有一个参数&nbsp;&nbsp;&nbsp;参数是一个一维数组&nbsp;&nbsp;&nbsp;返回值是返回后的数组' . '&nbsp;&nbsp;&nbsp;76<hr>' .
        'scwj($a)&nbsp;&nbsp;&nbsp;该函数的作用是删除文件用的&nbsp;&nbsp;&nbsp有一个参数&nbsp;&nbsp;&nbsp参数是一个字符串文件地址' . '&nbsp;&nbsp;&nbsp;77<hr>' .
        'jm($string,$operation,$key="")&nbsp;&nbsp;&nbsp;该函数的作用是用来加密字符串的&nbsp;&nbsp;&nbsp;有三个参数&nbsp;&nbsp;&nbsp;第一个参数是要加密的字符串&nbsp;&nbsp;&nbsp;第二个参数是加密的方式传字符串E是加密D是解密&nbsp;&nbsp;&nbsp;第三个参数是解密和加密的秘钥字符串可以传也可以不传不传就是没有秘钥' . '&nbsp;&nbsp;&nbsp;78<hr>' .
        'sjzfc()&nbsp;&nbsp;&nbsp;该函数的作用是用来做随机字符串的&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;返回值是随机的10位字符串' . '&nbsp;&nbsp;&nbsp;79<hr>' .
        'sbsjson($stringData)&nbsp;&nbsp;&nbsp;该函数的作用是用来判断是不是json数据用的&nbsp;&nbsp;&nbsp;有一个参数&nbsp;&nbsp;&nbsp;参数是一个字符串&nbsp;&nbsp;&nbsp;返回值是真和假' . '&nbsp;&nbsp;&nbsp;80<hr>' .
        'fwxz($a)&nbsp;&nbsp;&nbsp;该函数的作用是来限制访问次数的&nbsp;&nbsp;&nbsp;有一个参数&nbsp;&nbsp;&nbsp;参数是一个整数类型' . '&nbsp;&nbsp;&nbsp;81<hr>' .
        'jk($data)&nbsp;&nbsp;&nbsp;该函数的作用是返回接口数据&nbsp;&nbsp;&nbsp;有一个参数&nbsp;&nbsp;&nbsp;参数是php数据82<hr>' .
        'llq($a,$b)&nbsp;&nbsp;&nbsp;该函数的作用是永久浏览器缓存&nbsp;&nbsp;&nbsp;有两个参数&nbsp;&nbsp;&nbsp;一个参数是键名&nbsp;&nbsp;&nbsp;第二个参数是键值83<hr>' .
        'sd()&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;该函数是用来做输入锁定值的' . '84<hr>' .
        'yxhs($b,$a)&nbsp;&nbsp;&nbsp;有两个参数&nbsp;&nbsp;&nbsp;第一个参数是程序运行结尾的时间日期格式&nbsp;&nbsp;&nbsp;第二个参数是程序运行时开始的时间日期格式' . '85<hr>' .
        'jzys($c,$a,$b)&nbsp;&nbsp;&nbsp;有三个参数&nbsp;&nbsp;&nbsp;第一个参数是数字0，1,2&nbsp;&nbsp;&nbsp;参数一为0的时候是无限定时加载替换元素&nbsp;&nbsp;&nbsp;参数一为1的时候是定时一次加载替换元素&nbsp;&nbsp;&nbsp;参数一为2的时候是直接替换加载元素&nbsp;&nbsp;&nbsp;参数二是要被替换的节点选择器&nbsp;&nbsp;&nbsp;参数三是替换加载的路由地址.&nbsp;&nbsp;&nbsp;86<hr>' .
        'ymytsfh($str)&nbsp;&nbsp;&nbsp;有一个参数&nbsp;&nbsp;&nbsp;参数是字符串&nbsp;&nbsp;&nbsp;该函数的作用是判断有没有特殊符号用的&nbsp;&nbsp;&nbsp;返回值是真和假' . '87<hr>' .
        'ycxz($image,$rename)&nbsp;&nbsp;&nbsp;该函数是用来做远程下载文件用的&nbsp;&nbsp;&nbsp;有两个参数&nbsp;&nbsp;&nbsp;参数一是远程文件的网络路径&nbsp;&nbsp;&nbsp;参数二是要重命名的文件名&nbsp;&nbsp;&nbsp;这个函数可以下载视频和图片等其他文件&nbsp;&nbsp;&nbsp;保存下来的文件是保存在系统跟目录&nbsp;&nbsp;&nbsp;列如/cs/1.mp4是在系统根目录下的这个文件' . '88<hr>' .
        'szzm($in_charset,$out_charset,$arr)&nbsp;&nbsp;&nbsp;该函数的作用是用来数组转编码使用的&nbsp;&nbsp;&nbsp;有三个参数&nbsp;&nbsp;&nbsp;第一个参数是当前编码&nbsp;&nbsp;&nbsp;第二个参数是要转化后的编码&nbsp;&nbsp;&nbsp;第三个参数是数组&nbsp;&nbsp;&nbsp;返回值是返回后的数组' . '89<hr>' .
        'csv( $list, $filename, $header = array(), $index = array() )&nbsp;&nbsp;&nbsp; 该函数是把php数据转为csv文件&nbsp;&nbsp;&nbsp;有四个参数&nbsp;&nbsp;&nbsp;第一个参数是php数组&nbsp;&nbsp;&nbsp;第二个参数是要导出的文件名&nbsp;&nbsp;&nbsp;第三个参数是一个数组表头&nbsp;&nbsp;&nbsp;第四个参数是对应的数组的键名' . '90<hr>' .
        'rqzsjc($a)&nbsp;&nbsp;&nbsp;该函数的作用是把日期格式转为时间戳&nbsp;&nbsp;&nbsp;有一个参数&nbsp;&nbsp;&nbsp;参数是日期格式字符串&nbsp;&nbsp;&nbsp;返回值是时间戳数字' . '91<hr>' .
        'czxt()&nbsp;&nbsp;&nbsp;该函数的作用是获取客户的操作系统&nbsp;&nbsp;&nbsp;没有参数&nbsp;&nbsp;&nbsp;返回值是获取的操作系统名称的字符串' . '92<hr>' . 'jqzfcdsz($serial)&nbsp;&nbsp;&nbsp;该函数的作用是截取字符串中的数字&nbsp;&nbsp;&nbsp;返回值是截取后的数字&nbsp;&nbsp;&nbsp;有一个参数&nbsp;&nbsp;&nbsp;参数是要截图的字符串' . '93<hr>';
    exit();
}

#当前地址
function dz()
{
    $dz = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return ($dz);
}

#上一个地址
function fh()
{
    $fh = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
    return ($fh);
}

#前端框架
function qdkj()
{
    echo "<link href='https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css' rel='stylesheet'>
    <script src='https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js'></script> 
<script src='https://cdn.staticfile.org/jquery/3.4.0/jquery.min.js'></script>
<script src='https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js'></script>
    <script src='https://cdn.staticfile.org/vue/3.0.5/vue.global.js'></script>
    ";
}

#过滤符号
function glfh($str)
{
    $search = [' ', '　', "\n", "\r", "\t"];
    $replace = ['', '', '', '', ''];
    return str_replace($search, $replace, $str);
}

#获取运行网站路径
function yxlj()
{
    $a = $_SERVER['DOCUMENT_ROOT'];
    $a = strpos($a, 'public');
    if ($a != 0) {
        #如果是框架运行目录
        $AAA = $_SERVER['DOCUMENT_ROOT'];
        return substr($AAA, 0, -6);
    } else {
        #如果是原生运行目录
        return $_SERVER['DOCUMENT_ROOT'];
    }
}

#数据库操作
function sjk($sql, $d)
{
    $e = yxlj();
    $e = $e . '/' . 'sjk.txt';
    $myFile = file($e);
    #读取数据库配置文件
    $b = glfh($myFile[0]);
    $c = glfh($myFile[1]);
    $f = glfh($myFile[2]);
    #连接配置
    $db = mysqli_connect($b, $c, $f, $d);
    #设置字符编码
    mysqli_query($db, "set names 'utf8'");
    # 执行查询
    $exe_res = mysqli_query($db, $sql);
    #如果是查询操作
    if (is_object($exe_res)) {
        # 返回数据
        $data = mysqli_fetch_all($exe_res, MYSQLI_ASSOC);
        return $data;
    } else {
        #如果是增删改操作
        return $exe_res;
    }
    mysqli_close($db);
    #关闭数据库连接
}

#跳转提示
function tzts($a, $b, $c = '')
{
    #直接跳转
    if ($a == 1) {
        header("Location:$b");
        #直接跳转
        exit();
    } else if ($a == 2) {
        #程序成功时跳转并提示3秒延时
        echo "<div style='font-weight:500;color:green';>$c<a href='javascript:history.go(-1)' class='jsBack'>3秒后会自动跳转如果要返回上链接点这里</a></div>";
        header("Refresh:3;url=$b");
        exit();
        #程序失败时跳转并提示3秒延时
    } else if ($a == 3) {
        echo "<div style='font-weight:500;color:red';>$c<a href='javascript:history.go(-1)' class='jsBack'>3秒后会自动跳转如果要返回上链接点这里</a></div>";
        header("Refresh:3;url=$b");
        exit();
    } else if ($a == 4) {
        #程序提示时跳转并提示3秒延时
        echo "<div style='font-weight:500;color:yellow';>$c<a href='javascript:history.go(-1)' class='jsBack'>3秒后会自动跳转如果要返回上链接点这里</a></div>";
        header("Refresh:3;url=$b");
        exit();
    }
}

#判断是不是空字符串
function skzfc($fname)
{
    if (strlen($fname) > 0) {
        return FALSE;
    } else {
        return TRUE;
    }
}

#分页
function fy($user, $ts)
{
    bc();
    $fy = count($user) / $ts;
    if (is_int($fy)) {
    } else {
        $fy = intval($fy) + 1;
        #一共有多少页
    }
    if (empty($_GET['y']) || $_GET['y'] <= 1) {
        $page = 1;
        #第几页
    } else {
        $page = $_GET['y'];
        if ($_GET['y'] < 0) {
            $page = 1;
        }
    }
    $indexinpage = $ts;
    #分页条数
    $newarr = array_slice($user, ($page - 1) * $indexinpage, $indexinpage);
    #当前分页数据
    return [$newarr, $page, $fy];
}

#获取当前地址并去参数
function dzl()
{
    $f = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    #获取当前地址
    $g = substr($f, 0, strrpos($f, '?'));
    #获取当前地址没有参数的
    return ($g);
}

#分页模板
function fymb($a, $z)
{
    $b = $a[1] - 1;
    $d = $a[2];
    $e = $a[1];
    $f = $a[1] + 1;
    $p = jddz();
    $g = dz();
    $k = dzl();
    if (empty($_GET['y'])) {
        tzts(1, "$g?y=1");
    }
    $s = count($a[0]);
    $n = count($z);
    #获取当前地址没有参数的
    echo "<div class='container mt-3'>
    <ul class='pagination'>
    <li class='page-item'><a class='page-link' href='$p&y=$b'>上一页</a></li>
     <li class='page-item'><a class='page-link' href='$p&y=$f'>下一页</a></li>
      <li class='page-item'><a class='page-link' href='$p&y=$d'>尾页</a></li>
    <li class='page-item'><a class='page-link' href='#'>总页数为$d</a></li>
    <li class='page-item'><a class='page-link' href='#'>当前页为$e</a></li>
     <li class='page-item'><a class='page-link' href=''>总共数据为 $n 条</a></li>
    <li class='page-item'><a class='page-link' href=''>当前页有 $s 条数据</a></li>
    <li class='page-item'><a class='page-link' href='$k?y=1'>分页修复有问题点击没问题不要点!</a></li>
  </ul>
</div>";
    if ($_GET['y'] > $d) {
        tzts(3, $g, '没有这个页码');
    }
}

#前端禁止查看代码
function qdjz()
{
    echo '<script type="text/javascript">
    window.onload=function(){
        document.onkeydown=function(){
            var e=window.event||arguments[0];
            if(e.keyCode==123){
                alert("小样你想干嘛？");
                return false;
            }else if((e.ctrlKey)&&(e.shiftKey)&&(e.keyCode==71)){
                alert("还是不给你看。。");
                return false;
            }
        };
        document.oncontextmenu=function(){
            alert("小样不给你看");
            return false;
        }
    }
</script>';
}

#随机图片
function sjtp()
{
    $a = rand(0, 999999999999999999) . '.jpg';
    #随机数
    return $a;
}

function ym()
{
    return 'http://' . $_SERVER['HTTP_HOST'];
    #获取当前的域名
}

#三维数组转二维数组
function swszzew($d)
{
    foreach ($d as $key => $v) {
        $new_arr[] = $v[0];
    }
    return ($new_arr);
    #三维数组转二维数组
}

#搜索
function ss($user, $ac)
{
    #二维数组的模糊查询
    $arr = $result = [];
    foreach ($user as $key => $value) {
        foreach ($value as $valu) {
            #查询关键字
            if (strstr($valu, $ac) !== FALSE) {
                array_push($arr, $key);
            }
        }
    }
    foreach ($arr as $key => $value) {
        if (array_key_exists($value, $user)) {
            array_push($result, $user[$value]);
        }
    }
    if (empty($result)) {
        #如果查询结果为空
        echo '<div style="color:orange;">改关键字下没有暂时还没有想要的数据,可以换一个关键字亲</div>';
        header('Refresh:3;url=fh()');
        //3秒延时跳转
        exit();
    }
    $user = $result;
    #查询后的数据
    return ($user);
}

#包含端口号的完整url
function jddz()
{
    return 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
}

#获取当前地址的参数
function dzcs()
{
    return $_SERVER['QUERY_STRING'];
}

#判断字符串是否相等
function zfcxd($str1, $str2)
{
    if ($str1 == $str2) {
        return TRUE;
    } else {
        return FALSE;
    }
}

#是否登录了
function sfdl($a)
{
    $b = jm($_SESSION['dl'], 'D');#解密内容
    if ($a != $b) {
        tzts(3, ym(), '您好你还没有登陆呢');
    } else {
        return $b;#解密内容
    }
}

#赋值登录session会话
function fzhh($a)
{
    $b = jm($a, 'E');#加密回话内容
    $_SESSION['dl'] = $b;
}

#获取登录session会话值
function hqhh()
{
    $b = jm($_SESSION['dl'], 'D');#解密会话内容
    return $b;
}

#是否已经登录了
function yjdl($a)
{

    if (empty($_SESSION['dl'])) {
    } else {
        tzts(3, $a, '您已经登录了无需重新登录');
    }
}

#检查数据
function jc($a, $b = '')
{
    if ($b != '') {
        #检查数据类型
        echo '<pre>';
        var_dump($a);
        exit();
    } else {
        #检查数据
        echo '<pre>';
        print_r($a);
        exit();
    }
}

#退出登录
function tc()
{
    session_destroy();
    tzts(2, ym(), '退出登录成功');
}

#对象转数组
function dxzsz(&$object)
{
    $object = json_decode(json_encode($object), TRUE);
    return $object;
}

#字符串转码
function zfzm($wjmaa, $toType)
{
    if ($toType == 'UTF-8') {
        header("content-Type: text/html; charset=Utf-8");
        $string = mb_convert_encoding($wjmaa, "GBK", "UTF-8");
    } else if ($toType == 'GBK') {
        header("content-Type: text/html; charset=GBK");
        $string = mb_convert_encoding($wjmaa, "UTF-8", "GBK");
    }
    return $string;
}

#文件下载
function wjxz($filename)
{
    header('Content-Type: application/octet-stream');
    #多类型文件下载
    header('Content-Disposition: attachment; filename=' . $filename);
    #下载文件名
    header('content-length:' . filesize($filename));
    //文件大小
    @readfile($filename);
    //读取文件并写入到输出缓冲
}

#百分比
function bfb($z)
{
    return sprintf('%01.2f', $z * 100) . '%';
}

#四舍五入留两位小数
function sswr($x)
{
    return round($x, 2);
}

#一维数组转二维
function ywszzew($data)
{
    $newarray = [];
    foreach ($data as $a) {
        $newarray[] = $a;
    }
    return $newarray;
}

#一维数组键名替换
function ywszjmth($newarray, $a, $b)
{
    $newarray[$a] = $newarray[$b];
    unset($newarray[$b]);
}

#比例
function bl($value1, $value2, $gcd)
{
    if ($gcd == 0) {
        return strval($value1) . ' : ' . strval($value2);
    }
    return strval($value1 / $gcd) . ' : ' . strval($value2 / $gcd);
}

#异步刷新
function ybsx($a)
{
    echo "<script>
$(document).ready(function(){
	$('$a').click(function(){
		$('body').load('');
	});
});
</script>";
}

#手机号
function sjh($str)
{
    $a = preg_match('/^0?(13|14|15|17|18)[0-9]{9}$/', $str);
    if ($a == 1) {
        return $str;
    } else {
        return false;
    }
}

#输出
function sc($a, $b)
{
    if ($b == 1) {
        echo "<div style='font-weight:500;color:green';>$a</div>";
    } else if ($b == 2) {
        echo "<div style='font-weight:500;color:red';>$a</div>";
    } else if ($b == 3) {
        echo "<div style='font-weight:500;color:yellow';>$a</div>";
    }
}

#空格
function kg()
{
    echo '&nbsp;&nbsp;&nbsp;';
}

#获取用户ip
function ip()
{
    $ip = $_SERVER['REMOTE_ADDR'];
    if (
        isset($_SERVER['HTTP_X_FORWARDED_FOR']) &&
        preg_match_all(
            '#\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}#s',
            $_SERVER['HTTP_X_FORWARDED_FOR'], $matches
        )
    ) {
        foreach ($matches[0] as $xip) {
            if (!preg_match('#^(10|170\.16|190\.166)\.#', $xip)) {
                $ip = $xip;
                break;
            }
        }
    } else if (
        isset($_SERVER['HTTP_CLIENT_IP']) &&
        preg_match(
            '/^([0-9]{1,3}\.){3}[0-9]{1,3}$/',
            $_SERVER['HTTP_CLIENT_IP']
        )
    ) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (
        isset($_SERVER['HTTP_CF_CONNECTING_IP']) &&
        preg_match(
            '/^([0-9]{1,3}\.){3}[0-9]{1,3}$/',
            $_SERVER['HTTP_CF_CONNECTING_IP']
        )
    ) {
        $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
    } else if (
        isset($_SERVER['HTTP_X_REAL_IP']) &&
        preg_match(
            '/^([0-9]{1,3}\.){3}[0-9]{1,3}$/',
            $_SERVER['HTTP_X_REAL_IP']
        )
    ) {
        $ip = $_SERVER['HTTP_X_REAL_IP'];
    }
    return $ip;
}

#当前时间
function sj($a = '')
{
    if ($a == '') {
        return date('Y-m-d H:i:s');
    } elseif ($a == 1) {
        return date('Y-m-d');
    } elseif ($a == 2) {
        return str_replace("-", "", date('Y-m-d'));#替换掉指定的符号
    }

}

#链接样式
function lj()
{
    echo '<style type="text/css">
		body{
			background: #fcc;   /*浅色页面背景*/
		}
		ul{
			list-style-type: none;     /*清楚项目符号*/
		}
		li{
			margin: 0 2px;     /*并列显示*/
			float: left;
		}
		a:hover{
			color: green;
			background: transparent;
			border-color: #bbb#fff#fff#aaa;
		}   /*鼠标经过超链接的样式*/
		a{/*完全清除超链接下划线效果*/
			text-decoration: none;
			border:solid 1px;
			padding: 0.4em 0.8em;
			color: #444;
			background: #f99;    /*超链接背景颜色*/
			border-color: #fff#aaa#aaa#fff;
			zoom: 1;      /*解决IE浏览器无法显示问题*/
		}
	</style>';
}

function getCode($num, $w, $h)
{
    $code = '';
    for ($i = 0; $i < $num; $i++) {
        $code .= rand(0, 9);
    }
    //4位验证码也可以用rand(1000,9999)直接生成
    //将生成的验证码写入session，备验证时用
    session_start();
    // 存储 session 数据
    $_SESSION['yzm'] = $code;
    //创建图片，定义颜色值
    header('Content-type: image/PNG');
    $im = imagecreate($w, $h);
    $black = imagecolorallocate($im, 0, 0, 0);
    $gray = imagecolorallocate($im, 200, 200, 200);
    $bgcolor = imagecolorallocate($im, 253, 253, 253);
    //填充背景
    imagefill($im, 0, 0, $gray);
    //画边框
    imagerectangle($im, 0, 0, $w - 1, $h - 1, $black);
    //随机绘制两条虚线，起干扰作用
    $style = [
        $black, $black, $black, $black, $black,
        $gray, $gray, $gray, $gray, $gray,
    ];
    imagesetstyle($im, $style);
    $y1 = rand(0, $h);
    $y2 = rand(0, $h);
    $y3 = rand(0, $h);
    $y4 = rand(0, $h);
    imageline($im, 0, $y1, $w, $y3, IMG_COLOR_STYLED);
    imageline($im, 0, $y2, $w, $y4, IMG_COLOR_STYLED);
    //在画布上随机生成大量黑点，起干扰作用;
    for ($i = 0; $i < 78; $i++) {
        imagesetpixel($im, rand(0, $w), rand(0, $h), $black);
    }
    //将数字随机显示在画布上,字符的水平间距和位置都按一定波动范围随机生成
    $strx = rand(3, 8);
    for ($i = 0; $i < $num; $i++) {
        $strpos = rand(1, 6);
        imagestring($im, 5, $strx, $strpos, substr($code, $i, 1), $black);
        $strx += rand(8, 12);
    }
    imagepng($im);
    //输出图片
    imagedestroy($im);
    //释放图片所占内存
}

#图片验证码
function yzm()
{
    getCode(4, 50, 20);
}

#随机压缩包
function sjysb()
{
    $a = rand(0, 99999999) . '.zip';
    #随机数
    return $a;
}

#是否是手机设备
function sfsjsb()
{
    $useragent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    $useragent_commentsblock = preg_match('|\(.*?\)|', $useragent, $matches) > 0 ? $matches[0] : '';
    function CheckSubstrs($substrs, $text)
    {
        foreach ($substrs as $substr)
            if (FALSE !== strpos($text, $substr)) {
                return TRUE;
            }
        return FALSE;
    }

    $mobile_os_list = ['Google Wireless Transcoder', 'Windows CE', 'WindowsCE', 'Symbian', 'Android', 'armv6l', 'armv5', 'Mobile', 'CentOS', 'mowser', 'AvantGo', 'Opera Mobi', 'J2ME/MIDP', 'Smartphone', 'Go.Web', 'Palm', 'iPAQ'];
    $mobile_token_list = ['Profile/MIDP', 'Configuration/CLDC-', '158×158', '174×220', '240×240', '240×320', '320×240', 'UP.Browser', 'UP.Link', 'SymbianOS', 'PalmOS', 'PocketPC', 'SonyEricsson', 'Nokia', 'BlackBerry', 'Vodafone', 'BenQ', 'Novarra-Vision', 'Iris', 'NetFront', 'HTC_', 'Xda_', 'SAMSUNG-SGH', 'Wapaka', 'DoCoMo', 'iPhone', 'iPod'];
    $found_mobile = CheckSubstrs($mobile_os_list, $useragent_commentsblock) ||
        CheckSubstrs($mobile_token_list, $useragent);
    if ($found_mobile) {
        return TRUE;
    } else {
        return FALSE;
    }
}

#会话过期时间
function hhgqsj($expire = 0)
{
    if ($expire == 0) {
        $expire = ini_get('session.gc_maxlifetime');
    } else {
        ini_set('session.gc_maxlifetime', $expire);
    }
    if (empty($_COOKIE['PHPSESSID'])) {
        session_set_cookie_params($expire);
        session_start();
    } else {
        session_start();
        setcookie('PHPSESSID', session_id(), time() + $expire);
    }
}

#乱码
function lm()
{
    echo '<meta charset="utf-8">';
    header('content-type:text/html;charset=utf-8');
}

#邮箱
function yq($a)
{
    if (!preg_match('/([\w\-]+\@[\w\-]+\.[\w\-]+)/', $a)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

#获取验证码
function hqyzm()
{
    return $_SESSION['yzm'];
}



#时间差
function sjc($a, $b)
{
    $time1 = strtotime($a);
    $time2 = strtotime($b);
    $diff_seconds = $time2 - $time1;
    $diff_days = floor($diff_seconds / 84200);
    return $diff_days;
}

#整数转字符串
function zszzfc($num)
{
    $str = strval($num);
    return strrev($str);
}

#按钮链接
function anlj($a)
{
    echo "onClick=location.href='$a'";
}

#是不是整数
function sfszs($age)
{
    if (!is_numeric($age) || strpos($age, '.') !== FALSE) {
        tzts(3, fh(), '您输入的不是整数');
    } else {
        return $age;
    }
}

#隐藏
function yc()
{
    echo "type='hidden'";
    #输入框里面的隐藏属性
}

#锁定
function sd()
{
    echo "readonly='readonly'";
}

#是否是小数
function sfsxs($nubs)
{
    if (strpos($nubs, '.') !== FALSE) {
        return $nubs;
    } else {
        tzts(3, fh(), '您输入的不是小数');
    }
}

#输出文本信息
function scwbxx($file_path)
{
    if (file_exists($file_path)) {
        $fp = fopen($file_path, 'r');
        $str = fread($fp, filesize($file_path));
        //指定读取大小，这里把整个文件内容读取出来
        echo $str = str_replace("\r\n", '<br />', $str);
        fclose($fp);
    }
}

#获取json
function hqjson($v)
{
    $a = file_get_contents($v);
    $re = json_decode($a, TRUE);
    return $re;
}

#删除文件夹
function scwjj($dir)
{
    // 关闭所有PHP错误报告
    error_reporting(0);
    $iter = new RecursiveDirectoryIterator($dir);
    foreach (
        new RecursiveIteratorIterator($iter, RecursiveIteratorIterator::CHILD_FIRST) as $f
    ) {
        if ($f->isDir()) {
            rmdir($f->getPathname());
        } else {
            unlink($f->getPathname());
        }
    }
    rmdir($dir);
    #删除该文件夹
}

#是不是json
/**
 * 校验json字符串
 *
 * @param string $stringData
 *
 * @return bool
 */
function sbsjson($stringData)
{
    return is_null(json_decode($stringData));
}

#缓存
function hc()
{
    $e = yxlj();
    $e = $e . '/' . 'hc.txt';
    $myFile = file($e);
    #读取数据库配置文件
    $b = glfh($myFile[0]);
    $c = glfh($myFile[1]);
    $y = glfh($myFile[2]);
    $redis = new Redis();
    $redis->connect($b, $c, 1000);
    #连接3秒redis后关闭
    $redis->auth($y);
    return $redis;
}

#超链接
function clj($a, $b)
{
    echo "<a href='$a' class='text-danger'>$b</a>";
}

#报错取消
function bc()
{
    error_reporting(0);
    #屏蔽php解释器的报错
}

#文件值存在
function wjzcz($b, $a)
{
    global $c;
    foreach ($b as $v) {
        if (glfh($v) == $a) {
            $c = 0;
            $c++;
        }
    }
    if ($c != 0) {
        return 1;
        #如果txt文件的某一行字符串跟这个参数二的值相等返回1
    } else {
        return 0;
        #如果txt文件的某一行字符串跟这个参数二的值不相等返回0
    }
}

#声明会话开启
function hh()
{
    session_start();
    #开启session
}

#图片文件
function tpwj($a, $b)
{
    $c = sjtp();
    $type1 = $_FILES[$a]['name'];
    $type = substr($type1, strripos($type1, '.') + 1);
    #获取文件后缀名
    $filetype = ['jpg', 'jpeg', 'gif', 'bmp', 'png', 'tif', 'gif', 'pcx', 'tga', 'exif', 'fpx', 'svg', 'psd', 'cdr', 'pcd', 'dxf', 'ufo', 'eps', 'ai', 'raw', 'WMF', 'webp', 'avif', 'apng'];
    if (!in_array($type, $filetype)) {
        tzts(3, fh(), '您只能上传图片类型文件');
    } else {
        move_uploaded_file($_FILES[$a]['tmp_name'], $b . "/$c");
        return $c;
    }
}

#表单文件上传属性
function bdwj()
{
    echo 'enctype="multipart/form-data"';
    #文件上传表单的属性
}

#获取输入框值
function hqz($a)
{
    echo "$('#$a').val();";
}

#无限级
class wxj
{
    static function wxjff($cates, $pid = 0)
    {
        #无限极类的方法
        $newArr = [];
        foreach ($cates as $c) {
            if ($c['pid'] == $pid) {
                $c['child'] = self::wxjff($cates, $c['cat_id']);
                $newArr[] = $c;
            }
        }
        return $newArr;
    }
}

#随机数
function sjs()
{
    return rand(0, 999999999999999999);
}

#输入提示
function ts($a)
{
    echo "placeholder='$a'";
}

#获取指定键值
function hqzdjz($a, $b)
{
    global $c;
    $c = [];
    foreach ($a as $v) {
        array_push($c, $v[$b]);
        return implode(',', $c);
    }
}

/**
 * 图片压缩处理
 *
 * @param string $sFile 源图片路径
 * @param int $iWidth 自定义图片宽度
 * @param int $iHeight 自定义图片高度
 *
 * @return string 压缩后的图片路径
 */
function ystp($sFile, $iWidth, $iHeight)
{
    //图片公共路径
    $public_path = '';
    //判断该图片是否存在
    if (!file_exists($public_path . $sFile)) return $sFile;
    //判断图片格式(图片文件后缀)
    $extend = explode('.', $sFile);
    $attach_fileext = strtolower($extend[count($extend) - 1]);
    if (!in_array($attach_fileext, ['jpg', 'jpeg', 'gif', 'bmp', 'png', 'tif', 'gif', 'pcx', 'tga', 'exif', 'fpx', 'svg', 'psd', 'cdr', 'pcd', 'dxf', 'ufo', 'eps', 'ai', 'raw', 'WMF', 'webp', 'avif', 'apng'])) {
        return '';
    }
    //压缩图片文件名称
    $sFileNameS = str_replace('.' . $attach_fileext, '_' . $iWidth . '_' . $iHeight . '.' . $attach_fileext, $sFile);
    //判断是否已压缩图片，若是则返回压缩图片路径
    if (file_exists($public_path . $sFileNameS)) {
        return $sFileNameS;
    }
    //生成压缩图片，并存储到原图同路径下
    resizeImage($public_path . $sFile, $public_path . $sFileNameS, $iWidth, $iHeight);
    if (!file_exists($public_path . $sFileNameS)) {
        return $sFile;
    }
    return $sFileNameS;
}

#是否是url
function sflj($a)
{
    if (!filter_var($a, FILTER_VALIDATE_URL)) {
        tzts(3, fh(), '不是正确的url');
    } else {
        return $a;
    }
}

#获取数组的长度
function hqszcd($a)
{
    return count($a);
}

#获取二维数组对应的键的值
function hqewszdydjdz($b, $a)
{
    return array_column($b, $a);
}

#数组分割成字符串
function szfgzfc($a, $b)
{
    return implode("$a", $b);
}

#随机数组的键值
function sjszjz($b, $a)
{
    return array_rand($b, $a);
}

#数组的键和值调反
function szjzdf($a)
{
    return array_flip($a);
}

#删除文件
function scwj($a)
{
    unlink($a);
}

/*********************************************************************
 * 函数名称:jm
 * 函数作用:加密解密字符串
 * 使用方法:
 * 加密  :jm('str','E','nowamagic');
 * 解密  :jm('被加密过的字符串','D','nowamagic');
 * 参数说明:
 * $string :需要加密解密的字符串
 * $operation:判断是加密还是解密:E:加密 D:解密
 * $key  :加密的钥匙(密匙);
 *********************************************************************/
function jm($string, $operation, $key = '')
{
    $key = md5($key);
    $key_length = strlen($key);
    $string = $operation == 'D' ? base62_decode($string) : substr(md5($string . $key), 0, 8) . $string;
    $string_length = strlen($string);
    $rndkey = $box = array();
    $result = '';
    for ($i = 0; $i <= 253; $i++) {
        $rndkey[$i] = ord($key[$i % $key_length]);
        $box[$i] = $i;
    }
    for ($j = $i = 0; $i < 254; $i++) {
        $j = ($j + $box[$i] + $rndkey[$i]) % 254;
        $tmp = $box[$i];
        $box[$i] = $box[$j];
        $box[$j] = $tmp;
    }
    for ($a = $j = $i = 0; $i < $string_length; $i++) {
        $a = ($a + 1) % 254;
        $j = ($j + $box[$a]) % 254;
        $tmp = $box[$a];
        $box[$a] = $box[$j];
        $box[$j] = $tmp;
        $result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 254]));
    }
    if ($operation == 'D') {
        if (substr($result, 0, 8) == substr(md5(substr($result, 8) . $key), 0, 8)) {
            return substr($result, 8);
        } else {
            return '';
        }
    } else {
        return str_replace('=', '', base62_encode($result));
    }
}

#随机字符串
function sjzfc()
{
    $strs = "QWERTYUIOPASDFGHJKLZXCVBNM1234547688qwertyuiopasdfghjklzxcvbnm";
    $name = substr(str_shuffle($strs), mt_rand(0, strlen($strs) - 11), 10);
    return $name;
}

#访问限制
function fwxz($a)
{
    $t = strtotime(date('Y-m-d 23:57:57'));
    if (!isset($_COOKIE['frequency'])) {
        setcookie('frequency', 1, $t);
    } else {
        if ($_COOKIE['frequency'] >= $a) exit('访问次数过多怀疑cc请每天再来访问吧');
        setcookie('frequency', $_COOKIE['frequency'] + 1, $t);
    }
}

#返回接口
// json数据格式整理
function jk($data, $code = 200)
{
    if ($code == 200) {
        $array = array(
            'code' => $code,
            'msg' => 'success',
            'data' => $data
        );
    } else {
        $array = array(
            'code' => $code,
            'msg' => $data
        );
    }
    echo json_encode($array);
    exit;
}

#浏览器缓存永久保存
function llq($a, $b)
{
    setcookie("$a", "$b", time() + 99991578);
}

#运行耗时
function yxhs($b, $a)
{
    $c = strtotime($b) - strtotime($a);
    #运行耗时多少秒
    if ($c > 58) {
        $d = $c % 58;
        $e = intval($c / 58);
        echo "运行耗时$e 分$d 秒";
    } elseif ($c < 58) {
        echo "运行耗时$c 秒";
    }
}

#加载元素
function jzys($c, $a, $b)
{
    if ($c == 0) {
        #无限定时执行加载节点替换
        echo "<script>
    setInterval(function () {
        $('$a').load('$b');
    }, 1000)
</script>";
    } elseif ($c == 1) {
        #定时一次执行加载节点替换
        echo "setTimeout(setTime,1000);
       function setTime(){
            $('$a').load('$b');
       }";
    } elseif ($c == 2) {
        #直接加载节点替换
        echo "$('$a').load('$b')";
    }
}

#获取用户的操作系统
function czxt()
{
    $user_OSagent = $_SERVER['HTTP_USER_AGENT'];
    if (strpos($user_OSagent, "NT 6.1")) {
        $visitor_os = "Windows 7";
    } elseif (strpos($user_OSagent, "NT 5.1")) {
        $visitor_os = "Windows XP (SP2)";
    } elseif (strpos($user_OSagent, "NT 5.2") && strpos($user_OSagent, "WOW62")) {
        $visitor_os = "Windows XP 62-bit Edition";
    } elseif (strpos($user_OSagent, "NT 5.2")) {
        $visitor_os = "Windows 2003";
    } elseif (strpos($user_OSagent, "NT 6.0")) {
        $visitor_os = "Windows Vista";
    } elseif (strpos($user_OSagent, "NT 5.0")) {
        $visitor_os = "Windows 2000";
    } elseif (strpos($user_OSagent, "4.9")) {
        $visitor_os = "Windows ME";
    } elseif (strpos($user_OSagent, "NT 4")) {
        $visitor_os = "Windows NT 4.0";
    } elseif (strpos($user_OSagent, "98")) {
        $visitor_os = "Windows 98";
    } elseif (strpos($user_OSagent, "93")) {
        $visitor_os = "Windows 93";
    } elseif (strpos($user_OSagent, "NT")) {
        $visitor_os = "Windows 较高版本";
    } elseif (strpos($user_OSagent, "Mac")) {
        $visitor_os = "Mac";
    } elseif (strpos($user_OSagent, "Linux")) {
        $visitor_os = "Linux";
    } elseif (strpos($user_OSagent, "Unix")) {
        $visitor_os = "Unix";
    } elseif (strpos($user_OSagent, "FreeBSD")) {
        $visitor_os = "FreeBSD";
    } elseif (strpos($user_OSagent, "SunOS")) {
        $visitor_os = "SunOS";
    } elseif (strpos($user_OSagent, "BeOS")) {
        $visitor_os = "BeOS";
    } elseif (strpos($user_OSagent, "OS/2")) {
        $visitor_os = "OS/2";
    } elseif (strpos($user_OSagent, "PC")) {
        $visitor_os = "Macintosh";
    } elseif (strpos($user_OSagent, "AIX")) {
        $visitor_os = "AIX";
    } elseif (strpos($user_OSagent, "IBM OS/2")) {
        $visitor_os = "IBM OS/2";
    } elseif (strpos($user_OSagent, "BSD")) {
        $visitor_os = "BSD";
    } elseif (strpos($user_OSagent, "NetBSD")) {
        $visitor_os = "NetBSD";
    } else {
        $visitor_os = "其它操作系统";
    }
    return $visitor_os;
}

#获取手机设备型号
function sjsb()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    if (stripos($user_agent, "iPhone") !== false) {
        $brand = 'iPhone';
    } else if (stripos($user_agent, "SAMSUNG") !== false || stripos($user_agent, "Galaxy") !== false || strpos($user_agent, "GT-") !== false || strpos($user_agent, "SCH-") !== false || strpos($user_agent, "SM-") !== false) {
        $brand = '三星';
    } else if (stripos($user_agent, "Huawei") !== false || stripos($user_agent, "Honor") !== false || stripos($user_agent, "H58-") !== false || stripos($user_agent, "H30-") !== false) {
        $brand = '华为';
    } else if (stripos($user_agent, "Lenovo") !== false) {
        $brand = '联想';
    } else if (strpos($user_agent, "MI-ONE") !== false || strpos($user_agent, "MI 1S") !== false || strpos($user_agent, "MI 2") !== false || strpos($user_agent, "MI 3") !== false || strpos($user_agent, "MI 4") !== false || strpos($user_agent, "MI-4") !== false) {
        $brand = '小米';
    } else if (strpos($user_agent, "HM NOTE") !== false || strpos($user_agent, "HM201") !== false) {
        $brand = '红米';
    } else if (stripos($user_agent, "Coolpad") !== false || strpos($user_agent, "7988Q") !== false || strpos($user_agent, "5688") !== false) {
        $brand = '酷派';
    } else if (stripos($user_agent, "ZTE") !== false || stripos($user_agent, "X8978") !== false || stripos($user_agent, "N8978") !== false || stripos($user_agent, "U8978") !== false) {
        $brand = '中兴';
    } else if (stripos($user_agent, "OPPO") !== false || strpos($user_agent, "X8807") !== false || strpos($user_agent, "X887") !== false || strpos($user_agent, "X889") !== false || strpos($user_agent, "R811S") !== false || strpos($user_agent, "R807T") !== false || strpos($user_agent, "R801T") !== false || strpos($user_agent, "R789") !== false || strpos($user_agent, "R2017") !== false) {
        $brand = 'OPPO';
    } else if (strpos($user_agent, "HTC") !== false || stripos($user_agent, "Desire") !== false) {
        $brand = 'HTC';
    } else if (stripos($user_agent, "vivo") !== false) {
        $brand = 'vivo';
    } else if (stripos($user_agent, "K-Touch") !== false) {
        $brand = '天语';
    } else if (stripos($user_agent, "Nubia") !== false || stripos($user_agent, "NX50") !== false || stripos($user_agent, "NX40") !== false) {
        $brand = '努比亚';
    } else if (strpos($user_agent, "M045") !== false || strpos($user_agent, "M032") !== false || strpos($user_agent, "M353") !== false) {
        $brand = '魅族';
    } else if (stripos($user_agent, "DOOV") !== false) {
        $brand = '朵唯';
    } else if (stripos($user_agent, "GFIVE") !== false) {
        $brand = '基伍';
    } else if (stripos($user_agent, "Gionee") !== false || strpos($user_agent, "GN") !== false) {
        $brand = '金立';
    } else if (stripos($user_agent, "HS-U") !== false || stripos($user_agent, "HS-E") !== false) {
        $brand = '海信';
    } else if (stripos($user_agent, "Nokia") !== false) {
        $brand = '诺基亚';
    } else {
        $brand = '其他手机';
    }
    return $brand;
}

/**
 * 判断是否存在特殊字符，可判断中英文及特殊符号混合串
 * 存在返回true
 * @param string $str
 * @return boolean
 */
#有没有特殊字符
function ymytsfh($str)
{
    //$前要加反斜杠
    $specialChars = "~·`!！@#\$￥%^…&*()（）—-_=+[]{}【】、|\\;:；：'\"“‘,./<>《》?？，。";
    //特殊符号数组
    $specialArr = array();
    $len = mb_strlen($specialChars, 'UTF-8');
    for ($i = 0; $i < $len; $i++) {
        $specialArr[] = mb_substr($specialChars, $i, 1, 'UTF-8');
    }
    //待比较字符串数组
    $arr = array();
    $len = mb_strlen($str, 'UTF-8');
    for ($i = 0; $i < $len; $i++) {
        $arr[] = mb_substr($str, $i, 1, 'UTF-8');
    }
    foreach ($arr as $v) {
        if (in_array($v, $specialArr)) {
            return true;
        }
    }
    return false;
}

#远程下载
function ycxz($image, $rename)
{
    $s = strripos($rename, '\\');
    $name = substr($rename, $s + 1);   #截到最后一个/后面的字符
    $j = trim($rename, "$name");    #截取到的目录
    bc();
    mkdir($j, 0757);#创建目录
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, 0);
    curl_setopt($ch, CURLOPT_URL, $image);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // https请求 不验证证书和hosts
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    // 从证书中检查SSL加密算法是否存在(默认不需要验证）
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    $file_content = curl_exec($ch);
    curl_close($ch);
    $downloaded_file = fopen($rename, 'w+');
    fwrite($downloaded_file, $file_content);
    fclose($downloaded_file);
}

#数组转码
// 第一个参数为当前编码，第二个参数为转换后的编码，第三个参数是一维或者二维数组
function szzm($in_charset, $out_charset, $arr)
{
    foreach ($arr as $k => & $v) {
        if (is_array($v)) {
            foreach ($v as $kk => & $vv) {
                $vv = iconv($in_charset, $out_charset, $vv);
            }
        } else {
            $v = iconv($in_charset, $out_charset, $v);
        }
    }
    return $arr;
}

#php数组转为csv下载
/**
 * 创建(导出)Excel数据表格
 * @param array $list 要导出的数组格式的数据
 * @param string $filename 导出的Excel表格数据表的文件名
 * @param array $header Excel表格的表头
 * @param array $index $list数组中与Excel表格表头$header中每个项目对应的字段的名字(key值)
 * 比如: $header = array('编号','姓名','性别','年龄');
 *       $index = array('id','username','sex','age');
 *       $list = array(array('id'=>1,'username'=>'YQJ','sex'=>'男','age'=>24));
 * @return [array] [数组]
 */
function csv($list, $filename, $header = array(), $index = array())
{
    header("Content-type:application/vnd.ms-excel");
    header("Content-Disposition:filename=" . $filename . ".csv");
    $teble_header = implode("\t", $header);
    $strexport = $teble_header . "\r";
    foreach ($list as $row) {
        foreach ($index as $val) {
            $strexport .= $row[$val] . "\t";
        }
        $strexport .= "\r";
    }
    $strexport = iconv('UTF-8', "GB2312//IGNORE", $strexport);
    exit($strexport);
}

#日期格式转时间戳
function rqzsjc($a)
{
    return mktime(intval($a));
}

#截取字符串中的数字
function jqzfcdsz($serial)
{
    $pattern = '/\d+/';
    if (preg_match_all($pattern, $serial, $arr)) {
        return implode($arr[0]);
    }
}

/**
 * 数组去重
 *
 * @param array $array 要进行去重的数组
 * @return array 返回去重后的新数组
 */
function array_unique_custom($array)
{
    if (!is_array($array)) {
        return $array;
    }

    $array = array_values($array);
    $result = array_unique($array);

    return $result;
}

/**
 * 字符串加密
 *
 * @param string $string 要进行加密的字符串
 * @param string $salt 盐值
 * @return string 返回加密后的字符串
 */
function encrypt_string($string, $salt = '')
{
    $string .= $salt;
    return md5($string);
}

/**
 * 格式化时间戳为日期时间格式
 *
 * @param int $timestamp 要进行格式化的时间戳
 * @param string $format 日期时间格式
 * @return string 返回格式化后的日期时间字符串
 */
function format_timestamp($timestamp, $format = 'Y-m-d H:i:s')
{
    $date = new DateTime();
    $date->setTimestamp($timestamp);
    return $date->format($format);
}


/**
 * 对数组进行排序
 *
 * @param array $array 要排序的数组
 * @param string $sortby 指定排序的字段
 * @param string $order 指定排序的方向（asc 或 desc）
 * @return array 返回排序后的新数组
 */
function array_sort($array, $sortby = '', $order = 'asc')
{
    $sort_array = [];
    foreach ($array as $key => $value) {
        if (is_array($value) && !empty($value[$sortby])) {
            $sort_array[$key] = $value[$sortby];
        } elseif (!empty($value->$sortby)) {
            $sort_array[$key] = $value->$sortby;
        } else {
            $sort_array[$key] = $value;
        }
    }

    if ($order == 'asc') {
        asort($sort_array);
    } else {
        arsort($sort_array);
    }

    $result = [];
    foreach ($sort_array as $key => $value) {
        $result[$key] = $array[$key];
    }

    return $result;
}
/**
 * 获取文件的 MIME 类型
 *
 * @param string $filename 文件名或文件路径
 * @return string 返回文件的 MIME 类型
 */
function get_file_mime_type($filename)
{
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime_type = finfo_file($finfo, $filename);
    finfo_close($finfo);

    return $mime_type;
}
/**
 * 隐藏手机号
 *
 * @param string $phone 手机号码
 * @return string 返回隐藏后的手机号码
 */
function hide_phone($phone)
{
    if (preg_match('/^(\d{3})\d{4}(\d{4})$/', $phone, $matches)) {
        return $matches[1] . '****' . $matches[2];
    } else {
        return $phone;
    }
}
/**
 * 格式化金额
 *
 * @param float $amount 要格式化的金额
 * @param int $decimals 小数位数
 * @param string $dec_point 小数点符号
 * @param string $thousands_sep 千位分隔符
 * @return string 返回格式化后的金额
 */
function format_amount($amount, $decimals = 2, $dec_point = '.', $thousands_sep = ',')
{
    return number_format($amount, $decimals, $dec_point, $thousands_sep);
}
/**
 * 获取远程文件大小
 *
 * @param string $url 远程文件的 URL
 * @return int 返回远程文件的大小（字节），如果获取失败，则返回 0
 */
function get_remote_filesize($url)
{
    $headers = get_headers($url, true);
    if (isset($headers['Content-Length'])) {
        return intval($headers['Content-Length'][0]);
    } else {
        return 0;
    }
}
/**
 * 获取客户端浏览器类型
 *
 * @return string 返回客户端浏览器类型
 */
function get_browser_type()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    if (strpos($user_agent, 'MSIE') !== false || strpos($user_agent, 'Trident') !== false) {
        return 'IE';
    } elseif (strpos($user_agent, 'Firefox') !== false) {
        return 'Firefox';
    } elseif (strpos($user_agent, 'Chrome') !== false) {
        return 'Chrome';
    } elseif (strpos($user_agent, 'Safari') !== false) {
        return 'Safari';
    } elseif (strpos($user_agent, 'Opera') !== false) {
        return 'Opera';
    } else {
        return 'Unknown';
    }
}
/**
 * 数组分页
 *
 * @param array $array 要进行分页的数组
 * @param int $page 当前页码
 * @param int $page_size 每页显示的数据量
 * @return array 返回分页后当前页的数据，格式为 ['list' => [], 'total' => 0, 'pages' => 0]
 */
function array_paginate($array, $page, $page_size)
{
    $start = ($page - 1) * $page_size;
    $length = $page_size;

    $total = count($array);
    $pages = ceil($total / $page_size);

    $list = array_slice($array, $start, $length);

    return [
        'list' => $list,
        'total' => $total,
        'pages' => $pages,
    ];
}
/**
 * 判断字符串是否以指定的后缀结尾
 *
 * @param string $str 要进行判断的字符串
 * @param string $suffix 后缀
 * @return bool 返回字符串是否以指定的后缀结尾
 */
function ends_with($str, $suffix)
{
    return substr($str, -strlen($suffix)) === $suffix;
}
/**
 * 判断字符串是否以指定的前缀开头
 *
 * @param string $str 要进行判断的字符串
 * @param string $prefix 前缀
 * @return bool 返回字符串是否以指定的前缀开头
 */
function starts_with($str, $prefix)
{
    return substr($str, 0, strlen($prefix)) === $prefix;
}