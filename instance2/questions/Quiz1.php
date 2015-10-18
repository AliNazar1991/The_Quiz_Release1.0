<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!-- Date: 2014-03-11 -->
		<script>
		function changequiz(){
			$(function(){
						var quiz="";
				var counter=0;
				while(true){
				var randomIndex = Math.floor(Math.random()*filearray.length);
				quiz = filearray[randomIndex];
					
					if($.inArray(quiz,questionsanswered) != -1){
						counter++;
						if(counter == 20){
							quiz="finished.php";
							break;
						}
					}else{
						questionsanswered.push(quiz);
						break;
					}
				}	
				numberofquestions++;
				// load the file in the div
      			$("#includedContent").load(foldername+"/"+quiz);
			});
		}
		</script>
			
	</head>
	
	<body>
		<script type="text/javascript">
		if (window.XMLHttpRequest)
  				{
  				xmlhttp=new XMLHttpRequest();
  				}
				else // code for IE5 and IE6
  				{
  				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  				}
  				
				xmlhttp.open("GET","../MyQuestions/MyQuestions.xml",false);
				xmlhttp.send();
				xmlDoc=xmlhttp.responseXML;
				var x=xmlDoc.getElementsByTagName("QUIZ1");
				var question=(x[0].getElementsByTagName("QUESTION")[0].childNodes[0].nodeValue);
				var rightanswer=(x[0].getElementsByTagName("RIGHTANSWER")[0].childNodes[0].nodeValue);
				var wronganswer1=(x[0].getElementsByTagName("WRONGANSWER1")[0].childNodes[0].nodeValue);
				var wronganswer2=(x[0].getElementsByTagName("WRONGANSWER2")[0].childNodes[0].nodeValue);
				document.getElementById("question").innerHTML=question;
				document.getElementById("RightAnswer").innerHTML=rightanswer;
				document.getElementById("WrongAnswer1").innerHTML=wronganswer1;
				document.getElementById("WrongAnswer2").innerHTML=wronganswer2;
		</script>
   			<div id="question"><b></b></div><br>
   				
				<input type=radio name="q1" value="a" onclick="changequiz(),increasexp(100)" /><div id="RightAnswer" style="display:inline"></div><br>
				<input type=radio name="q1" value="b" onclick="changequiz(),wronganswer('wrong')"/><div id="WrongAnswer1" style="display:inline"></div><br> 
				<input type=radio name="q1" value="c" onclick="changequiz(),wronganswer('wrong')"/><div id="WrongAnswer2" style="display:inline"></div>    
	
	</body>
</html>