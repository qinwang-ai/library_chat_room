drop database if exists `sign`;
create database `sign` 
	default character set utf8 
	default collate utf8_general_ci;
use sign;

-- 用户表
drop table if exists `user`;
create table `user` (
  `user_id` int unsigned not null auto_increment comment '主键',
  `type` varchar(32) not null comment '第几次活动',
  `name` varchar(32) not null comment '姓名',
  `sex` varchar(40) null comment '性别',
  `num` varchar(40) null comment '学号',
  `level` varchar(40) null comment '年级',
  `school` varchar(64) null comment '学院',
  `phone` varchar(64) null comment '手机号',
  `qq` varchar(64) null comment 'QQ号码',
  `add_time` datetime null comment '用户创建时间',
  `login_time` datetime null comment '最近登录时间',
  primary key (`user_id`)
) engine=innodb default charset=utf8 comment='用户表';


