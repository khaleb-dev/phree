
	$(document).ready(function(){

		//Sign Up Form
			//signup = '<form action="" method="POST" class="sform fancy"><div class="rounded ex close_form"><span onclick="kill_it()" class="times-circle" title="Close"><i class="fas fa-times-circle"></i></span></div><div class="cell"><label for="surname">Surname</label><input type="text" class="pull input" id="surname" placeholder="Enter Surname" autofocus /><br /><label for="othernames">Other Names</label><input type="text" class="pull input" id="othernames" placeholder="Enter Other Names"/><br /><label for="email">Email: </label><input type="email" name="email" class="pull input" id="email" placeholder="username@domain.com"/><br /><label for="mobile">Phone Number: </label><input type="number" class="pull input" name="mobile" placeholder="+234 (0) 801 234 5678"/><br /></div><div class="cell" style="background-color: #faebd7;"><button type="button" class="rounded btn button" onClick="validator()">Sign Up</button></div></form>'

			//$('#sdata').fadeIn(500).html()

		//Newsletter Form
			getnewsletter = '<div><form style="border-radius: 0px 0px 20px 0px;"><div><span onclick="killIt()" class="times-circle" title="Close" style="color: red;"><i class="fas fa-times-circle"></i></span></div><br><br><div style="background-color: #dee0e6; text-align: center;"><h1>NEWSLETTER</h1><h3>Sign Up Now!!!</h3></div><div><input type="email" name="newsletter" class="pull input" id="newsletter" placeholder="Email: username@domain.com"/><br /></div><div class="cell" style="background-color: #faebd7; border-radius: 0px 0px 20px 0px;"><button type="button" class="nbutton" onClick="validator()">Sign Up</button></div></form></div>';

			$('#nwlr').fadeIn(2000).html(getnewsletter).css({
			'box-shadow':'#333 0 0 8px' ,  
			'position':'fixed' , 'top':'300', 'left':'500px' , 
			'background-color':'#778890' , 'z-index':'1000' ,  
			'height':'300px' , 'width':'300px' ,  
			'border-radius':'20px 0px 20px 0px'
			});

			$('.nbutton').css({
			'background-color':'#ffa07a' , 
			'color':'white' , 'padding':'14px 20px' , 'width':'100%' , 'height':'auto' , 
			'border':'none' , 'cursor':'pointer'
			});
	});

			function killIt() {
			$('#nwlr').fadeOut(3000);
			}