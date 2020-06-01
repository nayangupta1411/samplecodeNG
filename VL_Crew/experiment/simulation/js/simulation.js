
    function showInsertion(){
      document.getElementById('Insertionshow').style.display = "block"
    }
   function myFunction1() {
       var elmnt = document.getElementById("Insertionshow");
       elmnt.scrollIntoView();
    }


  
    function showDeletion(){
      document.getElementById('Deletionshow').style.display = "block"
    }
   function myFunction2() {
       var elmnt = document.getElementById("Deletionshow");
       elmnt.scrollIntoView();
    }


  



    function fun1(){
      var x= document.getElementById("en1");
      var y= document.getElementById("tex1")
      
      y.innerHTML = x.value;
      
      var a= document.getElementById("en2");
      var b= document.getElementById("tex2")
      b.innerHTML = a.value;
   
      var c= document.getElementById("en3");
      var d= document.getElementById("tex3")
      d.innerHTML = c.value;
      var m= document.getElementById("en4");
      var n= document.getElementById("tex4")
      n.innerHTML = m.value;
    
      var k= document.getElementById("en5");
      var l= document.getElementById("tex5")
      l.innerHTML = k.value;
      var p= document.getElementById("en6");
      var q= document.getElementById("tex6")
      q.innerHTML = p.value;
      
      } 

       function fun2(e)
       {
      var aa= document.getElementById("en1");
      var ab= document.getElementById("me1");
      var ac= document.getElementById("en2");
      var ad= document.getElementById("me2");
      var ae= document.getElementById("en3");
      var af= document.getElementById("me3");
      var ag= document.getElementById("en4");
      var ah= document.getElementById("me4");
     ab.innerHTML = aa.value;
     ad.innerHTML = ac.value;
     af.innerHTML = ae.value;
     ah.innerHTML = ag.value;
     }
      function fun3(e)
       {
      var a1= document.getElementById("en1");
      var a2= document.getElementById("mq1");
      var a3= document.getElementById("en2");
      var a4= document.getElementById("mq2");
      var a5= document.getElementById("en3");
      var a6= document.getElementById("mq3");
      var a7= document.getElementById("en4");
      var a8= document.getElementById("mq4");
        var a9= document.getElementById("en5");
      var a10= document.getElementById("mq5");
        var a11= document.getElementById("en6");
      var a12= document.getElementById("me6");
     a2.innerHTML = a1.value;
     a4.innerHTML = a3.value;
     a6.innerHTML = a5.value;
     a8.innerHTML = a7.value;
      a10.innerHTML = a9.value;
       a12.innerHTML = a11.value;
     }
     