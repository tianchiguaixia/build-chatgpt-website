<?php

// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'sfkqzczs'";
// 执行SQL语句
$result = $mysql->query($sql);

// 判断是否存在
if (mysqli_num_rows($result) > 0) {
    // echo "已经存在";
} else {
    // 增加列
    $sql = "ALTER TABLE chat_admin ADD sfkqzczs INT NOT NULL DEFAULT 0";
    if ($mysql->query($sql)) {
        // echo "增加成功";
    } else {
        // echo "Error adding column: " . mysqli_error($conn);
        // echo '增加失败';
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'fanli'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD fanli INT NOT NULL DEFAULT 0";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'cishuoryongjin'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD cishuoryongjin INT NOT NULL DEFAULT 1";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_yonghu LIKE 'ketixian'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_yonghu ADD ketixian INT NOT NULL DEFAULT 0";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_yonghu LIKE 'yqzscs'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_yonghu ADD yqzscs INT NOT NULL DEFAULT 0";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'dsktxye'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD dsktxye INT NOT NULL DEFAULT 50";
    if ($mysql->query($sql)) {
    } else {
    }
}
$sql = "SHOW TABLES LIKE 'chat_tixian'";
$result = $mysql->query($sql);
if(mysqli_num_rows($result) == 0) {
    //表不存在，创建表
    $sql = "create table chat_tixian(

    id int unsigned  primary key not null auto_increment,

    txyh varchar(100) not null default '', 

    txsjh varchar(100) not null default '',

    txje varchar(100) not null default '',

    sfcl varchar(100) not null default '0',

    time varchar(100) not null default ''

)charset =utf8;";
    $mysql->query($sql);
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'kamilj'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD kamilj varchar(100) NOT NULL DEFAULT '卡密充值购买链接'";
    if ($mysql->query($sql)) {
    } else {
    }
}
$sql = "SHOW TABLES LIKE 'chat_kami'";
$result = $mysql->query($sql);
if(mysqli_num_rows($result) == 0) {
    //表不存在，创建表
    $sql = "create table chat_kami(

    id int unsigned  primary key not null auto_increment,

    hyhscs varchar(100) not null default '1', 

    kami varchar(100) not null default '',

    huiyuan varchar(100) not null default '',

    cishu varchar(100) not null default '0',

    time varchar(100) not null default '',
    
    sfsy varchar(100) not null default '0'

)charset =utf8;";
    $mysql->query($sql);
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'kamikaqim'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD kamikaqim varchar(100) NOT NULL DEFAULT '关闭'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'tiaobanurl'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD tiaobanurl varchar(100) NOT NULL DEFAULT ''";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'youurl'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD youurl varchar(100) NOT NULL DEFAULT ''";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'mtmfcs'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD mtmfcs int NOT NULL DEFAULT '0'";
    if ($mysql->query($sql)) {
    } else {
    }
}
$sql = "SHOW TABLES LIKE 'chat_weijinci'";
$result = $mysql->query($sql);
if(mysqli_num_rows($result) == 0) {
    //表不存在，创建表
    $sql = "create table chat_weijinci(

    id int unsigned primary key not null,

    weijinci longtext not null default ''

)charset =utf8;";
    $mysql->query($sql);
}

$sql = "INSERT INTO chat_weijinci (id,weijinci) VALUES ('0','我是违禁词1,我是违禁词2,我是违禁词3')";
$mysql->query($sql);
// 查询列
$sql = "SHOW COLUMNS FROM chat_yonghu LIKE 'shangjiyaoqingma'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_yonghu ADD shangjiyaoqingma varchar(100) NOT NULL DEFAULT ''";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_yonghu LIKE 'orshangji'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_yonghu ADD orshangji varchar(100) NOT NULL DEFAULT ''";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_yonghu LIKE 'zongxiaofei'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_yonghu ADD zongxiaofei int NOT NULL DEFAULT '0'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_tiwen LIKE 'yonghu'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_tiwen ADD yonghu varchar(100) NOT NULL DEFAULT ''";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'anhei'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD anhei varchar(100) NOT NULL DEFAULT '1'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'gglx'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD gglx varchar(100) NOT NULL DEFAULT '3'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'yxqq'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD yxqq varchar(100) NOT NULL DEFAULT '你的QQ(例如:123456)'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'yxmm'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD yxmm varchar(100) NOT NULL DEFAULT '你的QQ邮箱授权密码(不是你的QQ登陆密码)'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'yzmlx'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD yzmlx varchar(100) NOT NULL DEFAULT '0'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'sfkqddts'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD sfkqddts varchar(100) NOT NULL DEFAULT '1'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'api'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD api varchar(100) NOT NULL DEFAULT 'https://api.openai.com/'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_yonghu LIKE 'huihuacs'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_yonghu ADD huihuacs varchar(100) NOT NULL DEFAULT '0'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'huitukey'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD huitukey varchar(100) NOT NULL DEFAULT ''";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'huitusig'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD huitusig varchar(100) NOT NULL DEFAULT ''";
    if ($mysql->query($sql)) {
    } else {
    }
}
$sql = "SHOW TABLES LIKE 'chat_huitutaocan'";
$result = $mysql->query($sql);
if(mysqli_num_rows($result) == 0) {
    //表不存在，创建表
    $sql = "create table chat_huitutaocan(

    id int unsigned  primary key not null auto_increment,

    taocanjiage varchar(100) not null default '', 

    taocangedu varchar(100) not null default ''

)charset =utf8;";
    $mysql->query($sql);
}
$sql = "INSERT INTO chat_huitutaocan (taocanjiage, taocangedu)
SELECT '50', '150'
WHERE NOT EXISTS (
    SELECT * FROM chat_huitutaocan WHERE taocanjiage = '50' AND taocangedu = '150'
);";
$mysql->query($sql);
$sql = "INSERT INTO chat_huitutaocan (taocanjiage, taocangedu)
SELECT '100', '400'
WHERE NOT EXISTS (
    SELECT * FROM chat_huitutaocan WHERE taocanjiage = '100' AND taocangedu = '400'
);";
$mysql->query($sql);
$sql = "INSERT INTO chat_huitutaocan (taocanjiage, taocangedu)
SELECT '200', '1000'
WHERE NOT EXISTS (
    SELECT * FROM chat_huitutaocan WHERE taocanjiage = '200' AND taocangedu = '1000'
);";
$mysql->query($sql);
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'zcsdschh'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD zcsdschh varchar(100) NOT NULL DEFAULT '0'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'buzcmfhh'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD buzcmfhh varchar(100) NOT NULL DEFAULT '2'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_ip LIKE 'huitusycs'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_ip ADD huitusycs varchar(100) NOT NULL DEFAULT '0'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'sfkqaihh'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD sfkqaihh varchar(100) NOT NULL DEFAULT '开启'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_admin LIKE 'sfkqipzcyc'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_admin ADD sfkqipzcyc varchar(100) NOT NULL DEFAULT '开启'";
    if ($mysql->query($sql)) {
    } else {
    }
}
// 查询列
$sql = "SHOW COLUMNS FROM chat_order LIKE 'tworht'";
// 执行SQL语句
$result = $mysql->query($sql);
// 判断是否存在
if (mysqli_num_rows($result) > 0) {
} else {
    $sql = "ALTER TABLE chat_order ADD tworht varchar(100) NOT NULL DEFAULT ''";
    if ($mysql->query($sql)) {
    } else {
    }
}












?>

