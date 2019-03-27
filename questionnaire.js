
		$("#que4no").click(function(){
			$("input[name=que41]").attr('disabled', true);
			$("input[name=que42]").attr('disabled', true);
		
		});
		$("#que4yes").click(function(){
			$("input[name=que41]").attr('disabled', false);
			$("input[name=que42]").attr('disabled', false);
		
		});
		$("#que6no").click(function(){
			$("input[name=que61]").attr('disabled', true);
		
		});
		$("#que6yes").click(function(){
			$("input[name=que61]").attr('disabled', false);
		
		
		});
		$("#que7no").click(function(){
			$("input[name=que71]").attr('disabled', false);
			
		});
		$("#que7yes").click(function(){
			$("input[name=que71]").attr('disabled', true);
			
		});
		$("#que9no").click(function(){
			$("input[name=que91]").attr('disabled', true);
			
		});
		$("#que9yes").click(function(){
			$("input[name=que91]").attr('disabled', false);
			
		});
		$("#next").click(function(){
		  const que1 = $('#question1').val();
		  const que2 = $('input[name=que2]:checked').val();
		  const que3 = $('input[name=que3]:checked').val();
		  const que4 = $('input[name=que4]:checked').val();
		  const que41 = $('input[name=que41]:checked').val();
		  const que42 = $('input[name=que42]:checked').val();
		  const que5 = $('input[name=que5]:checked').val();
		  const que6 = $('input[name=que6]:checked').val();
		  const que61 = $('input[name=que61]:checked').val();
		  const que7 = $('input[name=que7]:checked').val();
		  const que71 = $('input[name=que71]:checked').val();
		  const que8 = $('input[name=que8]:checked').val();
		  const que9 = $('input[name=que9]:checked').val();
		  const que91 = $('input[name=que91]:checked').val();
		  const que10 = $('input[name=que10]:checked').val();
		
		  $.ajax({
			url: "questionnaire.php",
			data: {industry: que1, location: que2, structure: que3, employee: que4, nEmployee: que41, payMethod: que42, reimburse: que5, sale: que6,saleMethod: que61, inventory: que7, offerService: que71, nInvoice: que8, creditCard: que9, nTransaction: que91, technology: que10},
			type: "POST",
			success: function(data){
				console.log(data);
			}
		  
		  });
		}); 
	