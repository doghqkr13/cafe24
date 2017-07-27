<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
function changeGrade(){
    var select = document.getElementById("gradeclass");
    var option_value = select.options[select.selectedIndex].value;
    
    // var mainp = document.getElementById("mainpage");
    var first = document.getElementById("firstgrade");
    var second = document.getElementById("secondgrade");
    var thrid = document.getElementById("thridgrade");
    var fourth = document.getElementById("fourthgrade");
        
        if(option_value==1){
        // mainp.style.display = 'none';
        first.style.display = '';
        second.style.display = 'none';
        thrid.style.display = 'none';
        fourth.style.display = 'none';
        }else if(option_value==2){
        // mainp.style.display = 'none';
        first.style.display = 'none';
        second.style.display = '';
        thrid.style.display = 'none';
        fourth.style.display = 'none';
        }else if(option_value==3){
        // mainp.style.display = 'none';
        first.style.display = 'none';
        second.style.display = 'none';
        thrid.style.display = '';
        fourth.style.display = 'none';
        }else if(option_value==4){
        // mainp.style.display = 'none';
        first.style.display = 'none';
        second.style.display = 'none';
        thrid.style.display = 'none';
        fourth.style.display = '';    
        }else{
        // mainp.style.display = '';
        first.style.display = '';
        second.style.display = '';
        thrid.style.display = '';
        fourth.style.display = '';    
        }
}

function test(obj){
    var text = obj.innerText;
    changeTable(text);
}

function changeTable(day){
    var inday = day.charAt(0);
    var a = day.charAt(1);
    var b = day.charAt(3);
    
    var fi = document.getElementById("number"+a);
    var se = document.getElementById("number"+b);
    var num;
    
    
    switch(inday){
        case "월":
            num = 1;
            break;
        case "화":
            num = 2;
            break;
        case "수":
            num = 3;
            break;
        case "목":
            num = 4;
            break;
        case "금":
            num = 5;
            break;
            
    }

    fi.getElementsByTagName('td').item(num).style.backgroundColor = 'red';
    se.getElementsByTagName('td').item(num).style.backgroundColor = 'red';
}

function checkday(obj){
    var ch = obj.innerHTML;
    var days = ch.charAt(103);
    dayunclick(days);
}

function dayunclick(text){
    var inday = text;
    var d = document.getElementById("timetable").getElementsByTagName("a");
    for(var i=0;i<d.length;i++){
        console.log(d.item(i));
        var name = d.item(i).innerText;
        if(!name.indexOf(inday)){
            d.item(i).style.pointerEvents = 'none';
            d.item(i).style.cursor = 'default';
            d.item(i).style.color = 'black';
        }
    }
}
</script>
<style>
        .btn span.glyphicon {    			
	opacity: 0;	
}
    </style>

<html>
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="utf-8">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-brand">
  <?php
    $password = $_GET["password"];
    $text = $_GET["id"];
  
    if(($password == 1111)&&($text==201433013)){
        echo $text;
        echo "님이 접속하셨습니다.";
        echo "<a href=\"https://cafe24-kimhyerin.c9users.io/login.php\">로그아웃</a>";?>
        <form name="timer" method="get" style="color:white"><p align="right"></p></form>
        </div></nav><br><br>

    <div class="jumbotron">
        <div class="container">
    <center><h1>CAFE24 수강신청</h1></center>
    <hr style="color:red;border:10px">
 
    <div style="text-align:left">
      
    <div class="container">

	<div class="well well-sm text-center">
            <p style="font-size:15px">*최소18점, 최대21학점입니다.</p>
            <p style="font-size:15px">*3학점은 시간별2개, 2학점 이하는 시간별1개 선택입니다.</p>
        
		<h3>공강 요일 선택</h3>
		
		<div class="btn-group">
			
			<label class="btn btn-success active" onclick="checkday(this)">
				<!--<input type="checkbox" autocomplete="off">-->
				<span class="glyphicon glyphicon-ok"></span>월
			</label>

			<label class="btn btn-primary" onclick="checkday(this)">
				<!--<input type="checkbox" autocomplete="off">-->
				<span class="glyphicon glyphicon-ok"></span>화
			</label>			
		
			<label class="btn btn-info" onclick="checkday(this)">
				<!--<input type="checkbox" autocomplete="off">-->
				<span class="glyphicon glyphicon-ok"></span>수
			</label>			
		
			<label class="btn btn-default" onclick="checkday(this)">
				<!--<input type="checkbox" autocomplete="off">-->
				<span class="glyphicon glyphicon-ok"></span>목
			</label>			

			<label class="btn btn-warning" onclick="checkday(this)">
				<!--<input type="checkbox" autocomplete="off">-->
				<span class="glyphicon glyphicon-ok"></span>금
			</label>			
		
		</div>
		
		
		
		

	</div>

</div>
        
        </div>
        <div style="align:left">
        <select name="gradeclass" id="gradeclass">
        <option value="0">학년선택</option>
            <option value="1">1학년</option>
            <option value="2">2학년</option>
            <option value="3">3학년</option>
            <option value="4">4학년</option>
        </select>
        
         <button class="btn btn-default" style="height:25px;font-size:12px;margin-bottom:3px" onclick="changeGrade()"> 선택</button>
            </div>
            
            
 <!--.options[this.selectedIndex]-->
            <div style="width:60%;height:500px;overflow:auto;margin-right:30px" class="col-sm-8">
            
            <table class="table table-bordered" id ="timetable">
                
        <!--1학년-->
            <thead>
            <tr>
                <th>순번</th>
                <th>학년</th>
                <th>교과목명</th>
                <th>교수님명</th>
                <th>학점</th>
                <th>강의실</th>
                <th>강의 시간 신청</th>
            </tr>
        </thead>
        
        <tbody class="firstgrade" id="firstgrade">
     
            <tr>
                <td>1</td>
                <td>1학년</td>
                <td>정보통신개론</td>
                <td>김소라</td>
                <td>3</td>
                <td>6404</td>
                <td><a onclick="test(this)">월3/4</a>
                <br><a onclick="test(this)">수3/4</a>
                <br><a onclick="test(this)">금5/6</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>1학년</td>
                <td>통신이론</td>
                <td>정미인</td>
                <td>3</td>
                <td>6407</td>
                <td><a onclick="test(this)">월3/4</a>
                <br><a onclick="test(this)">수1/2</a>
                <br><a onclick="test(this)">금3/4</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>1학년</td>
                <td>알고리즘</td>
                <td>김어렵</td>
                <td>3</td>
                <td>6407</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수3/4
                <br><a onclick="test(this)" >금5/6</td>
            </tr>
            <tr>
                <td>4</td>
                <td>1학년</td>
                <td>전공지도</td>
                <td>김삿갓</td>
                <td>3</td>
                <td>6406</td>
                <td><a onclick="test(this)" >월7/8
                <br><a onclick="test(this)" >수7/8
                <br><a onclick="test(this)" >금7/8</td>
            </tr>
            <tr>
                <td>5</td>
                <td>1학년</td>
                <td>C1</td>
                <td>김삿갓</td>
                <td>2</td>
                <td>6406</td>
                <td><a onclick="test(this)" >화1/2
                <br><a onclick="test(this)" >목7/8
                <br><a onclick="test(this)" >금7/8</td>
            </tr>
            <tr>
                <td>6</td>
                <td>1학년</td>
                <td>논리회로설계</td>
                <td>김어렵</td>
                <td>2</td>
                <td>6406</td>
                <td><a onclick="test(this)" >화3/4
                <br><a onclick="test(this)" >목3/4
                <br><a onclick="test(this)" >금4/5</td>
            </tr>
            <tr>
                <td>7</td>
                <td>1학년</td>
                <td>영상시대의 이해</td>
                <td>김병철</td>
                <td>1</td>
                <td>M401</td>
                <td><a onclick="test(this)" >화5/6
                <br><a onclick="test(this)" >목1/2
                <br><a onclick="test(this)" >금1/2</td>
            </tr>
            <tr>
                <td>8</td>
                <td>1학년</td>
                <td>교회음악</td>
                <td>김사무엘</td>
                <td>1</td>
                <td>3301</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
        </tbody>
        <tbody class="secondgrade" id="secondgrade">
     
            <tr i>
                <td>1</td>
                <td>2학년</td>
                <td>논회실</td>
                <td>김억지</td>
                <td>3</td>
                <td>6404</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>2</td>
                <td>2학년</td>
                <td>김무진</td>
                <td>정미인</td>
                <td>3</td>
                <td>6407</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>3</td>
                <td>2학년</td>
                <td>통신프로젝트</td>
                <td>김삿갓</td>
                <td>3</td>
                <td>6407</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>2학년</td>
                <td>과정지도</td>
                <td>김태우</td>
                <td>3</td>
                <td>6406</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>5</td>
                <td>2학년</td>
                <td>C2</td>
                <td>하규리</td>
                <td>2</td>
                <td>6406</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>6</td>
                <td>2학년</td>
                <td>디지털통신</td>
                <td>정인철</td>
                <td>2</td>
                <td>6406</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>7</td>
                <td>2학년</td>
                <td>인생이야기</td>
                <td>김그란</td>
                <td>1</td>
                <td>M401</td>
               <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>8</td>
                <td>2학년</td>
                <td>취업실무</td>
                <td>최애라</td>
                <td>1</td>
                <td>3301</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
        </tbody>
        <tbody class="thridgrade" id="thridgrade">
     
            <tr i>
                <td>1</td>
                <td>3학년</td>
                <td>정보통신개론</td>
                <td>김소라</td>
                <td>3</td>
                <td>6404</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>2</td>
                <td>3학년</td>
                <td>통신이론</td>
                <td>정미인</td>
                <td>3</td>
                <td>6407</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>3</td>
                <td>3학년</td>
                <td>알고리즘</td>
                <td>김어렵</td>
                <td>3</td>
                <td>6407</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>3학년</td>
                <td>전공지도</td>
                <td>김삿갓</td>
                <td>3</td>
                <td>6406</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>5</td>
                <td>3학년</td>
                <td>C1</td>
                <td>김삿갓</td>
                <td>2</td>
                <td>6406</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>6</td>
                <td>3학년</td>
                <td>논리회로설계</td>
                <td>김어렵</td>
                <td>2</td>
                <td>6406</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>7</td>
                <td>3학년</td>
                <td>영상시대의 이해</td>
                <td>김병철</td>
                <td>1</td>
                <td>M401</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>8</td>
                <td>3학년</td>
                <td>교회음악</td>
                <td>김사무엘</td>
                <td>1</td>
                <td>3301</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
        </tbody>
        <tbody class="fourthgrade" id="fourthgrade">
     
            <tr i>
                <td>1</td>
                <td>4학년</td>
                <td>정보통신개론</td>
                <td>김소라</td>
                <td>3</td>
                <td>6404</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>2</td>
                <td>4학년</td>
                <td>통신이론</td>
                <td>정미인</td>
                <td>3</td>
                <td>6407</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>3</td>
                <td>4학년</td>
                <td>알고리즘</td>
                <td>김어렵</td>
                <td>3</td>
                <td>6407</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>4학년</td>
                <td>전공지도</td>
                <td>김삿갓</td>
                <td>3</td>
                <td>6406</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>5</td>
                <td>4학년</td>
                <td>C1</td>
                <td>김삿갓</td>
                <td>2</td>
                <td>6406</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>6</td>
                <td>4학년</td>
                <td>논리회로설계</td>
                <td>김어렵</td>
                <td>2</td>
                <td>6406</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>7</td>
                <td>4학년</td>
                <td>영상시대의 이해</td>
                <td>김병철</td>
                <td>1</td>
                <td>M401</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
            <tr>
                <td>8</td>
                <td>4학년</td>
                <td>교회음악</td>
                <td>김사무엘</td>
                <td>1</td>
                <td>3301</td>
                <td><a onclick="test(this)" >월1/2
                <br><a onclick="test(this)" >수1/2
                <br><a onclick="test(this)" >금2/3</td>
            </tr>
        </tbody>
        
    </table>
            
        </div>
            <center><div class="col-sm-4"><p>수강시간표</p>
            <table class="table table-striped table-bordered table-hover" id ="tableMyTimetable">
        <center><caption>자신의 시간표를 볼 수 있습니다.</caption></center>
        <thead>
            <tr>
                <th></th>
                <th>월</th>
                <th>화</th>
                <th>수</th>
                <th>목</th>
                <th>금</th>
            </tr>
        </thead>
        <tbody>
            <tr id="number1">
                <td>1교시</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr id="number2">
                <td>2교시</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr id="number3">
                <td>3교시</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr id="number4">
                <td>4교시</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr id="number5">
                <td>5교시</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr id="number6">
                <td>6교시</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr id="number7">
                <td>7교시</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr id="number8">
                <td>8교시</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <p>신청 학점 : </p><br>
    <button>신청 완료</button>
    
    
    
      
            </div>
        </div></div>
        
        
        <div class="container">
                       
            <div><p>내가 신청한 목록 보기 / 삭제하기</p>
            <table class="table table-hover">
        <caption>신청한 목록이 뜨는 표입니다.</caption>
            <thead>
            <tr>
                <th></th>
                <th>학년</th>
                <th>교과목명</th>
                <th>학점</th></th>
                <th>강의 시간</th>
                <th>삭제</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>정보통신개론</td>
                <td>3</td>
                <td>월3/4, 수3,4</td>
                <td><a href>삭제</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>1</td>
                <td>통신이론</td>
                <td>3</td>
                <td>수1,2/금3,4</td>
                <td><a href>삭제</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>1</td>
                <td>알고리즘</td>
                <td>3</td>
                <td>월1,2/금5,6</td>
                <td><a href>삭제</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>1</td>
                <td>C1</td>
                <td>2</td>
                <td>화1,2</td>
                <td><a href>삭제</a></td>
            </tr>
            <tr>
                <td>5</td>
                <td>2</td>
                <td>김무진</td>
                <td>2</td>
                <td>목3,4</td>
                <td><a href>삭제</a></td>
            </tr>
            

        </tbody>
    </table>


            </div>
            </body>
        </div>
        </div><div>
       <?php 
    } else {
        echo "존재하지 않는 사용자입니다.";
        echo "<a href=\"https://cafe24-kimhyerin.c9users.io/login.php\">돌아가기</a>";
    }
   ?>

  </div>
    
