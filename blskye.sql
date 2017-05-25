-- 用户表
DROP TABLE IF EXISTS `bl_users`;
CREATE TABLE `bl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50),
  `nickname` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` int(11) DEFAULT NULL,
  `last_login` int(11) DEFAULT NULL  COMMENT '最后时间',
  `delete_time` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL COMMENT '注册时间',
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
  UNIQUE KEY `nickname` (`nickname`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- 链接表
DROP TABLE IF EXISTS `bl_link`;
CREATE TABLE `bl_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '外键，用户id',
  `delete_time` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `title`varchar(255) DEFAULT NULL COMMENT '用户自定义标题或者链接本身标题',
  `url`varchar(255) DEFAULT NULL COMMENT '链接内容',
  PRIMARY KEY (`id`)
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- 分类表
DROP TABLE IF EXISTS `bl_category`;
CREATE TABLE `bl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '外键，用户id',
  `name` varchar(50) NOT NULL COMMENT '分类名称',
  `topic_img_id` int(11) DEFAULT NULL COMMENT '外键，关联image表',
    `create_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL COMMENT '描述',
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='分类';

-- 图片表
DROP TABLE IF EXISTS `bl_image`;
CREATE TABLE `bl_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL COMMENT '图片路径',
  `from` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 来自本地，2 来自公网',
  `create_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='图片总表';
