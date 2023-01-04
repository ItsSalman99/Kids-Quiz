



<!doctype html>
<html lang="en">

<head>
	@include('Admin.Partials.styles')
</head>

<body class="bg-login">
	<!--wrapper-->
    <input  type="text" value="{{json_encode($data)}}" id="data"> 
 
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
							<img src="{{asset('backoffice/assets/images/icons/korean.png')}}" class="logo-icon" alt="logo icon">
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<!-- <img src="{{asset('backoffice/assets/images/icons/korean.png')}}" class="logo-icon" alt="logo icon"> -->
									</div>

									<div class="form-body">
										<table class="table table-hover">
                                    <tr>
                                        <td>    Exam Name :{{$exam->exam_name}} </td> <td>Exam Time <td> <td>{{$exam->exam_duration}}</td>
</tr>                                                   
                             

     
										</table>
                                        <h4 id="question"></h4>
                                        <input type="radio" value=""  id="checkbox1" name="radio" class="radio">
                                        <label id="option1"></label>
                                        <br>
                                        <input type="radio" value=""  id="checkbox2" name="radio" class="radio">
                                        <label id="option2"></label>
                                        <br>
                                        <input type="radio" value=""  id="checkbox3" name="radio" class="radio">
                                        <label id="option3"></label>
                                        <br>
                                        <input type="radio" value=""  id="checkbox4" name="radio" class="radio">
                                        <label id="option4"></label>
                                        <br>
								
                               
                                    <button type="button" id="prev" class="btn btn-primary btn-sm float-end" onclick="prev()" > Prev </button>
                                    <button type="button" id="next" class="btn btn-primary btn-sm float-end" onclick="next()" > Next </button>
                                    <button type="button" id="finish" class="btn btn-primary btn-sm float-end" onclick="next()" > Finshed </button>
                                    <br>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			 
			</div>
		</div>
	</div>
    <script>
        var index  = 0;
        var ans = [];
        function append_quiz(){
            var quiz = document.getElementById('data').value;
            var questions = JSON.parse(quiz);
            var quiz_box  = document.getElementById('question');
            var option1  = document.getElementById('option1');
            var option2  = document.getElementById('option2');
            var option3  = document.getElementById('option3');
            var option4  = document.getElementById('option4');
            quiz_box.innerHTML = "Q"+ (index+1)+ ") "+ questions[index]['Question'];
            option1.innerHTML  = questions[index]['option1'];
            option2.innerHTML  = questions[index]['option2'];
            option3.innerHTML  = questions[index]['option3'];
            option4.innerHTML  = questions[index]['option4'];
            checkbox1.value  = questions[index]['option1'];
            checkbox2.value  = questions[index]['option2'];
            checkbox3.value  = questions[index]['option3'];
            checkbox4.value  = questions[index]['option4'];
  
            if(index == 0){
                document.getElementById('prev').style.display="none";

            }
            
             if(index != 0){
                document.getElementById('prev').style.display="block";
            }
           var lenght = --questions.length;
            if(lenght == index){
             
                document.getElementById('next').style.display="none";
                document.getElementById('finish').style.display="block";
                
            }
            if(lenght != index){
                document.getElementById('next').style.display="block";
                document.getElementById('finish').style.display="none";
            }
            
           

               
        }

        function next(){
            
            index++;
            append_quiz();
            // unchcek()
        }

        function prev(){
            index--;
            append_quiz();
            // unchcek()
        }

        // function unchcek(){
        //     var answers =   document.getElementsByClassName('radio');
        //     answers[0].checked = false
        //     answers[1].checked = false
        //     answers[2].checked = false
        //     answers[3].checked = false
        // }
        append_quiz();
        var quiz = document.getElementById('data').value;
        var answers =   document.getElementsByClassName('radio');
        var questions = JSON.parse(quiz);
            for(let i = 0 ; i < answers.length ; i++){
                answers[i].addEventListener('click',function(){
                    if(this.checked){
                       
                        if(ans != ''){
                            for(let k = 0 ; k < ans.length ; k++){
                                if(ans[k]['question'] == questions[index]['Question']){
                                   
                                                                       
                                        
                                     console.log(ans[k]['Ans'] = this.value)
                                //   / ans.push({"question" : questions[index]['Question'],"Ans" : this.value});
                                    
                                }
                                if(ans[k]['question'] != questions[index]['Question']){
                                   
                          ans.push({"question" : questions[index]['Question'],"Ans" : this.value});
                         
                                }
                            }
                        }
                      
                        if(ans == ''){
                         
                            ans.push({"question" : questions[index]['Question'],"Ans" : this.value});
                           
                        }

                        console.log(ans);
                        
                        }

                        
                        
                      
                       
                  
                     
                    
                })
            }
        

        


        </script>
</body>

</html>