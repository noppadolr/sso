
        <nav class="navbar navbar-default">
          <div class="container-fluid">
                    <!--  lgog -->
                    <div class="navbar-header">
                    <button type="button" name="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
                      <span class="icon-bar">  </span>
                      <span class="icon-bar">  </span>
                      <span class="icon-bar">  </span>

                    </button>
                      <a href="{{ route('home') }}" class="navbar-brand"><strong style="color: #0000ff; font-size: 18pt;">สำนักงานสาธารณสุขอำเภอสบเมย</strong></a>
                    </div>
<!-- Menu items -->
                    <div class="collapse navbar-collapse" id="mainNavbar">

                      <ul class="nav navbar-nav navbar-right" >
                        <li class="active"> <a href="{{ route('home') }}">หน้าหลัก</a></li>


                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลสำนักงาน <span class="caret "></span> </a>
                           <ul class="dropdown-menu ">
                             <li><a href="{{route('vision')}}">วิสัยทัศน์/พันธกิจ</a> </li>
                             <li> <a href="{{ route('ourjob') }}">ภารกิจ/หน้าที่</a> </li>
                             <li><a href="#">โครงสร้างสำนักงาน</a> </li>
                             <li><a href="{{route('ita')}}"> ITA/แผนธรรมาภิบาล  </a></li>
                             <li><a href="{{'plan'}}">ยุทธศาสตร์/แผนงาน/โครงการ</a> </li>
                             <li><a href="#">ภาพกิจกรรม</a> </li>
                           </ul>
                         </li>


                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">ทำเนียบ <span class="caret"></span> </a>
                            <ul class="dropdown-menu">
                              <li><a href="{{ route('bossman')}}">ทำเนียยผู้บริหาร</a> </li>
                              <li><a href="{{route('officeman')}}">ทำเนียบบุคลากร</a> </li>
                              <li><a href="{{route('healthoffice')}}">ทำเนียบสถานบริการ</a> </li>

                            </ul>
                        </li>

                        <li> <a href="{{route('download')}}">ดาวน์โหลด</a></li>

                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">ระบบข้อมูล <span class="caret "></span></a>
                          <ul class="dropdown-Menu">
                            <li> <a href="https://msn.hdc.moph.go.th/hdc/main/index_pk.php"target="_blank">HDC สสจ.แม่ฮ่องสอน</a> </li>
                            <li> <a href="http://dhdc5806.sobmoei.net/frontend/web/qc/default/index"  target="_blank">DHDC สบเมย</a> </li>
                            <li> <a href="http://web.mypcu.in.th/smh.php"  target="_blank">Mydata สบเมย</a> </li>
                            
                            <li> <a href="http://203.157.193.21/eh/frontend/web/index.php"  target="_blank">EH สสจ.แม่ฮ่องสอน</a> </li>
                            <li> <a href="http://stat.dopa.go.th/stat/statnew/upstat_age.php"  target="_blank">ระบบสถิติทางการทะเบียน</a> </li>




                          </ul>

                        </li>



                        <li > <a href="{{Route('contact')}}">ติดต่อสำนักงาน</a></li>
                      </ul>
                    </div>
          </div>
        </nav>
