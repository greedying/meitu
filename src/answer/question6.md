##建表语句

```sql
    CREATE TABLE `post` (
        `post_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
        `root_id` int(11) NOT NULL DEFAULT '0' COMMENT '顶层postid',
        `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '父id',
        `floor` SMALLINT(5) NOT NULL DEFAULT '0' COMMENT '层级',
        `title` varchar(20) NOT NULL DEFAULT '' COMMENT '标题',
        `content` varchar(256) NOT NULL DEFAULT '' COMMENT '内容',
        `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
        `update_time` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
        PRIMARY KEY (`post_id`),
        KEY `create_time` (`create_time`),
        KEY `parent_id` (`parent_id`),
        KEY `root_time` (`root_id`, `create_time`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='盖楼表' 
```

##查询子评论

```sql
 select title from post where parent_id = 1;
```


##新增删除sql

```sql
   insert into `post`(root_id, parent_id, floor, title, content, create_time, update_time) values (1, 2, 3, '标题', '内容', unix_timestamp(), unix_timestamp());

   delete from `post` where post_id = 1; // 如果需要删除回复，另行处理
```

##计算层级sql

```sql
  select floor from post where post_id = 1;
  // 将层级在创立的时候统计下来更合适一些
```
