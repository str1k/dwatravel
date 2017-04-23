<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin">Dwatravel Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="/admin_home"><i class="fa fa-fw fa-file"></i> หน้าแรก</a>
                    </li>
                    <li>
                        <a href="/admin_cover"><i class="fa fa-fw fa-file"></i> จัดการ Slider</a>
                    </li>
                    <li>
                        <a href="/admin_booking"><i class="fa fa-fw fa-file"></i> จองทัวร์และชำระเงิน</a>
                    </li>
                    <li>
                        <a href="/admin_about-us"><i class="fa fa-fw fa-file"></i> เกี่ยวกับเรา</a>
                    </li>
                    <li>
                        <a href="/admin_contact-us"><i class="fa fa-fw fa-file"></i> ติดต่อเรา</a>
                    </li>
                    <li>
                        <a href="/admin_all_tour"><i class="fa fa-fw fa-file"></i>โปรแกรมท่องเที่ยวทั้งหมด</a>
                    </li>
                    <!--<li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>จัดการโปรแกรมท่องเที่ยว<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="/admin_all_tour">โปรแกรมท่องเที่ยวทั้งหมด</a>
                            </li>
                        </ul>
                    </li>-->
                    <li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#editCountry"><i class="fa fa-fw fa-arrows-v"></i>จัดการประเทศ สถานที่ สายการบิน และ แท็ก<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="editCountry" class="collapse">
                            <li>
                                <a href="/admin_country">แก้ไขประเทศ</a>
                            </li>
                            <li>
                                <a href="/admin_locate">แก้ไขสถานที่</a>
                            </li>
                            <li>
                                <a href="/admin_airline">แก้ไขสายการบิน</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>