<h1 style="text-align: center;"> 《课程网站》说明书</h1>

## 一、项目简介
&emsp;&emsp;该网站项目为一个基于B/S模式的课程网站系统，便于教师教学以及学生学习。教师可通过网站发布课程信息、通知和相关资源，学生则可以进行浏览以便跟进课程进度和下载课程资源。

## 二、网站部署技术要求
> 部署环境：Windows8.1  
> Web服务器：Apache2.4.4  
> 后台语言：PHP5.4.12  
> 前端技术：XHTML1.0 + CSS2 + JS  
> 数据库：MySQL5.0  

## 三、网站部署安装说明
&emsp;&emsp;本项目为网站形式，无须编译处理，与操作系统环境无关。若出现乱码，语言编码请选择UTF-8（本项目统一utf-8编码）。  
1. 确保电脑装了第二点所列举的环境，建议安装wampserver集成环境  
2. 将本文件夹放置于服务器根目录  
3. 在数据库中建立数据库mainpage，将文件夹根目录的mainpage.sql导入  
4. 修改model/setting.php中的各项设置（一般除数据库用户名和密码外无须更改）  
4. 默认管理员账户：admin  密码：admin  
5. 在IE9+或其他高级浏览器中访问项目根目录的index.php文件即可访问网站      
6. 项目目录结构  
![目录结构](http://h.picphotos.baidu.com/album/whcrop%3D572%2C259%3Bq%3D90%3Bg%3D0/sign=105b36cf9b2f07085f507c42865485ac/6d81800a19d8bc3e26b8224a878ba61ea9d345f9.jpg)


