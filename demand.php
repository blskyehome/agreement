<?php
$title='需求分析';
$h2='起草人：王昊天';
$h3='版本号v0.1';

?>
<?php require_once __DIR__.'/common/header.php'?>
    <div class="row" style="background: white;">
        <!-- Begin Main resume body -->
        <!-- Begin Resume Expereinces -->
        <div class="col-md-1"></div>
        <div class="toplinebl col-md-10">
            <h3>引言</h3>
            <ol class="qualifications">
                <li><h4>项目目的</h4>
                    <p><ol type="A">
                        <li>提高编程能力、团队协作水平</li>
                        <li>构建一个属于自己团队软件的生态圈</li>
                    </ol></p></li>
                <li><h4>项目背景</h4><p>
                        在使用网上提供软件后，感觉功能达不到自己的需求，所以打算自己在此项目中实现或者说是整合一些自己所需要的功能
                    </p></li>
            </ol>
            <h3>项目概述</h3>
            <ol class="qualifications">
               <li><h4>项目模块</h4>
                   <ol type="A">
                       <li><h5>'热恋'(热链)</h5>
                        <ol type="a"><li>功能描述：用户可以通过该功能，添加自己要收藏的链接，收藏后可以安排到不同的分组，也可以管理自己链接的公开度、分享等功能</li></ol>
                       </li>
                       <li><h5>用户中心</h5>
                           <ol type="a"><li>功能描述：用户可以上传管理自己的头像，用户昵称绑定手机号，修改个人其他信息等</li></ol>
                       </li>
                   </ol>
               </li>
                <li><h4>开发周期</h4>
                    <ol type="A">
                        <li>
                                    <h6>第一阶段(2017-05-20至2017-05-23)</h6><p>撰写项目详细需求、数据库架构</p>
                                </li>
                                <li>
                                    <h6>第二阶段(2017-05-24至2017-05-25)</h6><p>开发环境、数据库环境搭建、仓库初始化</p>
                                </li>
                                <li>
                                    <h6>第三阶段(2017-05-26至2017-05-27)</h6><p>根据数据库架构创建数据库，并进行第一次完善</p>
                                </li>
                                <li>
                                    <h6>第四阶段(2017-05-28至2017-06-10)</h6><p>根据需求分析前端以及后端完成“用户中心”模块</p>
                                </li>
                                <li>
                                    <h6>第四阶段(2017-06-11至2017-06-28)</h6><p>根据需求分析前端以及后端完成“热恋”模块</p>
                                </li>

                    </ol>
                </li>
                <li><h4>技术架构</h4>
                    <ol type="A">
                        <li>
                            <h5>服务端(通过PHP构建复用性好、结构层次清晰、多端适配、
                                扩展性强的MVC结构的服务端RESTFul API)</h5>
                           <p>采用PHP 国内最流行的框架 ThinkPHP5 、数据库 MySQL </p>
                            <p>Ubuntu服务器</p>
                        </li>
                        <li>
                            <h5>客户端(多客户端)</h5>
                            <ol type="a">
                                <li class="important">web PC端</li>
                                <li class="important">web 手机端</li>
                                <li class="important">chrome extensions</li>
                                <li>微信小程序</li>
                                <li>桌面电脑端(通过electron构建)</li>
                                <li>Android App</li>
                                <li>iOS App</li>
                            </ol>
                        </li>

                    </ol>
                </li>
                <li><h4>工具</h4>
                    <ol type="A">
                        <li><h5>PHPStorm</h5></li>
                        <li><h5>XAMPP</h5></li>
                        <li><h5>PostMan</h5></li>
                        <li><h5>Axure</h5></li>

                    </ol>
                </li>
                <li><h4>相关技术</h4>
                    <ol type="A">
                        <li><h5>语言</h5>
                        <p>html css js PHP Java etc.</p></li>
                        <li><h5>框架(或类库)</h5><p>jQuery Bootstrap ThinkPHP Amaze UI electron etc.</p></li>
                    </ol>
                </li>
            </ol>


            <h3>功能需求</h3>
            <ol class="qualifications">
                <li>
                    <h4>流程图（画出系统的整体流程图）</h4>
                    <img style="width: 100%" src="images/flow.png" alt="">
                </li>
                <li>
                    <h4>数据库架构</h4>
                    <p></p></li>
                <li>
                    <h4>功能详细</h4>
                    <ol type="A">
                        <li>
                            <h5>用户中心</h5>
                            <ol type="a"><li>头像管理</li>
                            <li>昵称修改</li>
                            <li>密码修改</li>
                            <li>更改邮箱</li>
                            <li>个性签名</li>
                                <li>粉丝/关注</li>
                            </ol>
                        </li>
                        <li>
                            <h5>"热恋"热链</h5>
                            <ol type="a">
                                <li>用户链接增删</li>
                                <li>通过谷歌扩展插件实现一键添加链接</li>
                                <li>链接分类管理</li>
                                <li>链接公开度管理</li>
                                <li>链接访问量统计</li>
                                <li class="gray">链接点赞功能</li>
                            </ol>
                        </li>
                    </ol></li>
            </ol>
        </div>
        <div class="col-md-1"></div>
    </div>
<?php require_once __DIR__.'/common/footer.php'?>