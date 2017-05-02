<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    
 <link href="protostyles.css" rel="stylesheet">
    </head>
    <h1>Build Your Roster</h1>
    <title>Build Your Roster</title>

    <style type="text/css">
input {
  display: block;   /* makes one <input> per line */
}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


    </style>
  

  <body>

        <form name="form1" method="POST" action="Test.php">

      <input type="submit" name="login" id="loginid" value="login" onclick="addRow()">
     <input type="submit" name="sign up" id="signup" value="sign up">
    
<!-- call same file on submit -->
  
  <div id="form">

 <span id="entries">

</span>
<br>

      <button  type="button" id="btnadd" value="ADD" onclick="add();">Add</button>
      <button type="button" name="btnremove" id="btnremove" onclick="remove();"value="REMOVE">Remove</button>
      <!--<input type="hidden" name="count" value="<?php //echo $count; ?>">-->

      <br>
      <br>
   <a>Minimum Play Rules</a>

      
      <br>
      <br>
<label class="switch">
  <input type="checkbox" checked>
  <div class="slider round"></div>
</label>
<a>AA Division</a>
      <br>
      <br>
  <input type="radio" name="Rule1" value="Rule1">Rule 1 Players must play a minimum of 2 innigs in the infield and 1 inning in outfield for games lasting 4+ innings<br>
  <input type="radio" name="Rule2" value="Rule1">Rule 2 Players cannot play in same position more than 2 times a game <br>

      <br>
      <br>
      
     <a>Optional Roster Rules</a>
      <br>
      <br>
 <input type="radio" name="Rule3" value="Rule3">No More than Two innings on bench<br>
 <input type="radio" name="Rule4" value="Rule4">No innings Consecutively on bench<br>
 <input type="radio" name="Rule5" value="Rule5">No innings Consecutively in outfield<br>
 





<br>
<br>
<br>
<input type="submit" name="lineup" id="lineup" onclick="warning();"value="Build Your Lineup">
     

    </div>
 
   <script>

let count=0;
function add()
{
  if(count==6)
  {
    alert("No more players allowed");
  }
  else{
    count++;
    let div=document.createElement("div");
    div.id="row"+count;
    document.getElementById("entries").appendChild(div);

  let input=document.createElement("input");
 input.setAttribute("type", "text");
  input.id="playername";
input.name="playername"+ count;

  document.getElementById("row"+count).appendChild(input);

  let select1=document.createElement("select");
  select1.multiple="multiple";
select1.id="pitcher";

select1.setAttribute("name","pitcher"+count+"[]");


let o1s1=document.createElement("option");
  o1s1.setAttribute("selected","selected");
  o1s1.text="Pitcher";

    let o2s1=document.createElement("option");
  o2s1.text="NO";

  let o3s1=document.createElement("option");
  o3s1.text="YES";
 select1.appendChild(o1s1);
 select1.appendChild(o2s1);
 select1.appendChild(o3s1);

//second select
let select2=document.createElement("select");
select2.id="inningpitching";
//select2.multiple="multiple";
select2.name="inningpitching";
let o1s2=document.createElement("option");
o1s2.text="1";

let o2s2=document.createElement("option");
o2s2.text="2";
let o3s2=document.createElement("option");
o3s2.text="3";
let o4s2=document.createElement("option");
o4s2.text="4";
let o5s2=document.createElement("option");
o5s2.text="5";
let o6s2=document.createElement("option");
o6s2.text="6";
let o7s2=document.createElement("option");
o7s2.text="Inning Pitching";
o7s2.setAttribute("selected","selected");

select2.appendChild(o7s2);
select2.appendChild(o1s2);
select2.appendChild(o2s2);
select2.appendChild(o3s2);
select2.appendChild(o4s2);
select2.appendChild(o5s2);
select2.appendChild(o6s2);

//third select
let select3=document.createElement("select");
select3.multiple="multiple";
select3.id="preferredpositions";
select3.setAttribute("name","preferred"+count+"[]");
let o1s3=document.createElement("option");
o1s3.text="Pitcher";
let o2s3=document.createElement("option");
o2s3.text="Catcher";
let o3s3=document.createElement("option");
o3s3.text="First Base";
let o4s3=document.createElement("option");
o4s3.text="Second Base";
let o5s3=document.createElement("option");
o5s3.text="Third Base";
let o6s3=document.createElement("option");
o6s3.text="Short Stop";
let o7s3=document.createElement("option");
o7s3.text="Left Field";
let o8s3=document.createElement("option");
o8s3.text="Center Field";
let o9s3=document.createElement("option");
o9s3.text="Right-Field";
let o10s3=document.createElement("option");
o10s3.text="Preferred Position(s)";

select3.appendChild(o10s3);
select3.appendChild(o1s3);
select3.appendChild(o2s3);
select3.appendChild(o3s3);
select3.appendChild(o4s3);
select3.appendChild(o5s3);
select3.appendChild(o6s3);
select3.appendChild(o7s3);
select3.appendChild(o8s3);
select3.appendChild(o9s3);

//fourth select
let select4=document.createElement("select");
select4.multiple="multiple";
select4.id="positionsToAvoid";
select4.setAttribute("name","positionsToAvoid"+count+"[]");
let o1s4=document.createElement("option");
o1s4.text="Pitcher";
let o2s4=document.createElement("option");
o2s4.text="Catcher";
let o3s4=document.createElement("option");
o3s4.text="First Base";
let o4s4=document.createElement("option");
o4s4.text="Second Base";
let o5s4=document.createElement("option");
o5s4.text="Third Base";
let o6s4=document.createElement("option");
o6s4.text="Short Stop";
let o7s4=document.createElement("option");
o7s4.text="Left Field";
let o8s4=document.createElement("option");
o8s4.text="Center Field";
let o9s4=document.createElement("option");
o9s4.text="Right-Field";
let o10s4=document.createElement("option");
o10s4.text="Positions To Avoid";

select4.appendChild(o10s4);
select4.appendChild(o1s4);
select4.appendChild(o2s4);
select4.appendChild(o3s4);
select4.appendChild(o4s4);
select4.appendChild(o5s4);
select4.appendChild(o6s4);
select4.appendChild(o7s4);
select4.appendChild(o8s4);
select4.appendChild(o9s4);





  document.getElementById("row"+count).appendChild(select4);
document.getElementById('row'+count).appendChild(select3);
document.getElementById('row'+count).appendChild(select2);
document.getElementById('row'+count).appendChild(select1);
}
}
function remove()
{
   let r=document.getElementById("row"+count);
  while(r.hasChildNodes())
  {
    r.removeChild(r.firstChild);
  }
count--;
}

function warning()
{
  if (count<6)
  {
    alert("Not enough players");
  }
}
  
  </script>
</form>
  </body>
</html>