  window.onload = function(){
            var  today = new Date();
            var  begin = new Date();
            var submit = document.querySelector('#join_img');
            var body = document.body;

            begin.setFullYear(2015,3,18);
            var  end = new Date();
            end.setFullYear(2015,3,20);
            if(today > begin && today < end){
                
            }else{
            	join_img.style.background = 'gray';
                join_img.onclick = null;
                body.style.color = 'gray';
            
               
            }
        }