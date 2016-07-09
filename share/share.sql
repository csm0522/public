-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: 2016-06-20 13:22:34
-- 服务器版本： 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `share`
--

-- --------------------------------------------------------

--
-- 表的结构 `t_artical`
--

CREATE TABLE `t_artical` (
  `AriticalId` int(100) NOT NULL,
  `UserId` int(100) DEFAULT NULL,
  `Title` text,
  `Content` text,
  `upLoadType` int(2) DEFAULT NULL COMMENT '1：作品 2：文章',
  `CreateTime` text,
  `type` int(10) NOT NULL COMMENT '1:UI;2:平面;3:漫画;4:网页;5:3D;6:创意短片;7:摄影;8:其他;',
  `ArticalType` int(11) NOT NULL COMMENT '1:原创教程 2:观点 3:设计资讯 4:其他',
  `IndexImgPath` varchar(100) NOT NULL COMMENT '封面图片路径',
  `intro` text NOT NULL COMMENT '简介',
  `clickNum` int(100) NOT NULL COMMENT '作品文章点击量',
  `RepUserid` int(11) DEFAULT NULL,
  `RepTag` int(11) NOT NULL DEFAULT '0' COMMENT '0审核通过，1=审核不通过，2＝有人举报'
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_artical_comment`
--

CREATE TABLE `t_artical_comment` (
  `ACommendId` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `AriticalId` int(11) DEFAULT NULL,
  `ReportUser1Id` int(11) DEFAULT NULL,
  `content` text,
  `CreatTime` char(200) DEFAULT NULL,
  `ReportTag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_company`
--

CREATE TABLE `t_company` (
  `CompanyId` int(11) NOT NULL,
  `LoginId` int(11) DEFAULT NULL,
  `CompanyName` char(100) DEFAULT NULL,
  `CompanyPhone` char(20) DEFAULT NULL,
  `CompanyEmail` char(20) DEFAULT NULL,
  `CompanyAddress` char(200) DEFAULT NULL,
  `BussinessLicense` int(11) DEFAULT NULL,
  `SignificanceTime` int(11) DEFAULT NULL,
  `Juridicalperson` char(50) DEFAULT NULL,
  `JuridicalIdentity` char(20) DEFAULT NULL,
  `JuridacalPhone` int(11) DEFAULT NULL,
  `CompanyRight` int(11) DEFAULT NULL,
  `CompanyType` text,
  `CompanyIntrolduce` text,
  `Tag` int(11) NOT NULL COMMENT '0：删除 1：正常',
  `regtime` varchar(30) DEFAULT NULL COMMENT '注册时间',
  `LoginIp` varchar(30) DEFAULT NULL COMMENT '最后登陆地址',
  `loginnum` int(11) DEFAULT NULL COMMENT '登陆次数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_concern`
--

CREATE TABLE `t_concern` (
  `concernid` int(11) NOT NULL,
  `Consern_User_Id` int(11) DEFAULT NULL,
  `Beconsern_User_UserId` int(11) DEFAULT NULL,
  `ConcernType` int(11) DEFAULT NULL,
  `Concern_time` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_job`
--

CREATE TABLE `t_job` (
  `jobid` int(11) NOT NULL,
  `CompanyId` int(11) DEFAULT NULL,
  `title` char(200) DEFAULT NULL,
  `content` text,
  `Type` int(11) DEFAULT NULL,
  `JobWages` char(1) DEFAULT NULL,
  `CreatTime` text,
  `StartTime` text,
  `EndTime` text,
  `CreatAddress` text,
  `JobStatue` int(11) DEFAULT NULL,
  `JobTag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_like`
--

CREATE TABLE `t_like` (
  `likeid` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `AriticalId` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_login`
--

CREATE TABLE `t_login` (
  `LoginId` int(11) NOT NULL,
  `LoginName` char(20) DEFAULT NULL,
  `LoginPwd` char(200) DEFAULT NULL,
  `LoginStatus` int(4) DEFAULT NULL COMMENT '0:正常 1:被锁定',
  `LoginTag` int(4) DEFAULT NULL COMMENT '1:用户 2:企业 0:管理员',
  `regip` varchar(15) NOT NULL COMMENT '注册IP',
  `loginNum` int(100) NOT NULL COMMENT '登陆次数',
  `lastip` char(15) NOT NULL COMMENT '最后一次登录ip',
  `regdate` datetime NOT NULL COMMENT '注册时间',
  `lastdate` datetime NOT NULL COMMENT '最后登陆时间'
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='the login database';

--
-- 转存表中的数据 `t_login`
--

-- --------------------------------------------------------

--
-- 表的结构 `t_opinion`
--

CREATE TABLE `t_opinion` (
  `opinionid` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `AdminId` int(11) DEFAULT NULL,
  `title` char(200) DEFAULT NULL,
  `content` text,
  `phone` char(20) DEFAULT NULL,
  `email` char(100) DEFAULT NULL,
  `CreatTime` text,
  `AdminAnswer` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_system_notice`
--

CREATE TABLE `t_system_notice` (
  `noticeid` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `title` char(200) DEFAULT NULL,
  `content` text,
  `CreatTime` text,
  `EndTime` text,
  `NoticeImg` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_topic`
--

CREATE TABLE `t_topic` (
  `topicId` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `ReportUserId` int(11) DEFAULT NULL,
  `content` text,
  `type` int(11) DEFAULT NULL,
  `CreatTime` text,
  `ReportTag` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_topic`
--

-- --------------------------------------------------------

--
-- 表的结构 `t_topic_commernt`
--

CREATE TABLE `t_topic_commernt` (
  `TopicCommentId` int(11) NOT NULL,
  `topicId` int(11) DEFAULT NULL,
  `UserId` int(11) DEFAULT NULL,
  `ReportuserId` int(11) DEFAULT NULL,
  `Comment` text,
  `CreatTime` text,
  `Reporttag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `t_user`
--

CREATE TABLE `t_user` (
  `UserId` int(11) NOT NULL,
  `LoginId` int(11) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `Userphone` char(12) DEFAULT NULL,
  `UserEmail` char(100) DEFAULT NULL,
  `userIntro` text,
  `UserQualification` varchar(200) DEFAULT NULL COMMENT '学生证的存放路径',
  `QuantityStatus` int(11) DEFAULT '0' COMMENT '0:未审核;1:审核通过;2:审核不通过;',
  `UserSex` int(3) DEFAULT NULL COMMENT '0:男;1:女;2:不详',
  `tag` int(11) NOT NULL DEFAULT '1' COMMENT '0：删除 1：正常',
  `userIMG` varchar(200) NOT NULL,
  `position` int(3) NOT NULL COMMENT '1:非学生 2:学生',
  `userTX` varchar(100) NOT NULL COMMENT '头像'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `t_user`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_artical`
--
ALTER TABLE `t_artical`
  ADD PRIMARY KEY (`AriticalId`),
  ADD KEY `FK_Reference_18` (`UserId`);

--
-- Indexes for table `t_artical_comment`
--
ALTER TABLE `t_artical_comment`
  ADD PRIMARY KEY (`ACommendId`),
  ADD KEY `FK_Reference_15` (`UserId`),
  ADD KEY `FK_Reference_16` (`AriticalId`),
  ADD KEY `FK_Reference_17` (`ReportUser1Id`);

--
-- Indexes for table `t_company`
--
ALTER TABLE `t_company`
  ADD PRIMARY KEY (`CompanyId`),
  ADD KEY `FK_Reference_19` (`LoginId`);

--
-- Indexes for table `t_concern`
--
ALTER TABLE `t_concern`
  ADD PRIMARY KEY (`concernid`),
  ADD KEY `FK_Reference_13` (`Consern_User_Id`),
  ADD KEY `FK_Reference_14` (`Beconsern_User_UserId`);

--
-- Indexes for table `t_job`
--
ALTER TABLE `t_job`
  ADD PRIMARY KEY (`jobid`),
  ADD KEY `FK_Reference_5` (`CompanyId`);

--
-- Indexes for table `t_like`
--
ALTER TABLE `t_like`
  ADD PRIMARY KEY (`likeid`),
  ADD KEY `FK_Reference_11` (`UserId`),
  ADD KEY `FK_Reference_12` (`AriticalId`);

--
-- Indexes for table `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`LoginId`);

--
-- Indexes for table `t_opinion`
--
ALTER TABLE `t_opinion`
  ADD PRIMARY KEY (`opinionid`),
  ADD KEY `FK_Reference_2` (`UserId`),
  ADD KEY `FK_Reference_3` (`AdminId`);

--
-- Indexes for table `t_system_notice`
--
ALTER TABLE `t_system_notice`
  ADD PRIMARY KEY (`noticeid`),
  ADD KEY `FK_Reference_4` (`UserId`);

--
-- Indexes for table `t_topic`
--
ALTER TABLE `t_topic`
  ADD PRIMARY KEY (`topicId`),
  ADD KEY `FK_Reference_10` (`ReportUserId`),
  ADD KEY `FK_Reference_9` (`UserId`);

--
-- Indexes for table `t_topic_commernt`
--
ALTER TABLE `t_topic_commernt`
  ADD PRIMARY KEY (`TopicCommentId`),
  ADD KEY `FK_Reference_6` (`topicId`),
  ADD KEY `FK_Reference_7` (`UserId`),
  ADD KEY `FK_Reference_8` (`ReportuserId`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`UserId`),
  ADD KEY `FK_Reference_20` (`LoginId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_artical`
--
ALTER TABLE `t_artical`
  MODIFY `AriticalId` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `t_artical_comment`
--
ALTER TABLE `t_artical_comment`
  MODIFY `ACommendId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_company`
--
ALTER TABLE `t_company`
  MODIFY `CompanyId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_concern`
--
ALTER TABLE `t_concern`
  MODIFY `concernid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_job`
--
ALTER TABLE `t_job`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_like`
--
ALTER TABLE `t_like`
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `t_login`
--
ALTER TABLE `t_login`
  MODIFY `LoginId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `t_opinion`
--
ALTER TABLE `t_opinion`
  MODIFY `opinionid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_system_notice`
--
ALTER TABLE `t_system_notice`
  MODIFY `noticeid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_topic`
--
ALTER TABLE `t_topic`
  MODIFY `topicId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_topic_commernt`
--
ALTER TABLE `t_topic_commernt`
  MODIFY `TopicCommentId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- 限制导出的表
--

--
-- 限制表 `t_artical`
--
ALTER TABLE `t_artical`
  ADD CONSTRAINT `FK_Reference_18` FOREIGN KEY (`UserId`) REFERENCES `t_user` (`UserId`);

--
-- 限制表 `t_artical_comment`
--
ALTER TABLE `t_artical_comment`
  ADD CONSTRAINT `FK_Reference_15` FOREIGN KEY (`UserId`) REFERENCES `t_user` (`UserId`),
  ADD CONSTRAINT `FK_Reference_16` FOREIGN KEY (`AriticalId`) REFERENCES `t_artical` (`AriticalId`),
  ADD CONSTRAINT `FK_Reference_17` FOREIGN KEY (`ReportUser1Id`) REFERENCES `t_user` (`UserId`);

--
-- 限制表 `t_company`
--
ALTER TABLE `t_company`
  ADD CONSTRAINT `FK_Reference_19` FOREIGN KEY (`LoginId`) REFERENCES `t_login` (`LoginId`);

--
-- 限制表 `t_concern`
--
ALTER TABLE `t_concern`
  ADD CONSTRAINT `FK_Reference_13` FOREIGN KEY (`Consern_User_Id`) REFERENCES `t_user` (`UserId`),
  ADD CONSTRAINT `FK_Reference_14` FOREIGN KEY (`Beconsern_User_UserId`) REFERENCES `t_user` (`UserId`);

--
-- 限制表 `t_job`
--
ALTER TABLE `t_job`
  ADD CONSTRAINT `FK_Reference_5` FOREIGN KEY (`CompanyId`) REFERENCES `t_company` (`CompanyId`);

--
-- 限制表 `t_like`
--
ALTER TABLE `t_like`
  ADD CONSTRAINT `FK_Reference_11` FOREIGN KEY (`UserId`) REFERENCES `t_user` (`UserId`),
  ADD CONSTRAINT `FK_Reference_12` FOREIGN KEY (`AriticalId`) REFERENCES `t_artical` (`AriticalId`);

--
-- 限制表 `t_opinion`
--
ALTER TABLE `t_opinion`
  ADD CONSTRAINT `FK_Reference_2` FOREIGN KEY (`UserId`) REFERENCES `t_user` (`UserId`),
  ADD CONSTRAINT `FK_Reference_3` FOREIGN KEY (`AdminId`) REFERENCES `t_user` (`UserId`);

--
-- 限制表 `t_system_notice`
--
ALTER TABLE `t_system_notice`
  ADD CONSTRAINT `FK_Reference_4` FOREIGN KEY (`UserId`) REFERENCES `t_user` (`UserId`);

--
-- 限制表 `t_topic`
--
ALTER TABLE `t_topic`
  ADD CONSTRAINT `FK_Reference_10` FOREIGN KEY (`ReportUserId`) REFERENCES `t_user` (`UserId`),
  ADD CONSTRAINT `FK_Reference_9` FOREIGN KEY (`UserId`) REFERENCES `t_user` (`UserId`);

--
-- 限制表 `t_topic_commernt`
--
ALTER TABLE `t_topic_commernt`
  ADD CONSTRAINT `FK_Reference_6` FOREIGN KEY (`topicId`) REFERENCES `t_topic` (`topicId`),
  ADD CONSTRAINT `FK_Reference_7` FOREIGN KEY (`UserId`) REFERENCES `t_user` (`UserId`),
  ADD CONSTRAINT `FK_Reference_8` FOREIGN KEY (`ReportuserId`) REFERENCES `t_user` (`UserId`);

--
-- 限制表 `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `FK_Reference_20` FOREIGN KEY (`LoginId`) REFERENCES `t_login` (`LoginId`);
