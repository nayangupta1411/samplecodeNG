
  function fun2(e)
  {
    document.getElementById("my2").innerHTML="Your answer is wrong !!";
        document.getElementById("my3").innerHTML="Correct Answer: At the tail of the list";
         document.getElementById("my1").innerHTML=" ";


  }
function fun1(e)
  {
    document.getElementById("my1").innerHTML="Your answer is correct !!";
    document.getElementById("my2").innerHTML=" ";
        document.getElementById("my3").innerHTML=" ";

  }
function fun3(e)
  {
//document.getElementById("mr1").innerHTML="Your answer is correct !!";
      document.getElementById("mr2").innerHTML="";
        document.getElementById("mr3").innerHTML="";
        alert("Your answer is correct");
        windows.location = ("animation.html");

  }
function fun4(e)
  {
    document.getElementById("mr2").innerHTML="Your answer is wrong !!";
        document.getElementById("mr3").innerHTML="Correct Answer: At the head of link list";
             document.getElementById("mr1").innerHTML=" ";

  }
