<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="login-style.css">
  <link rel="shortcut icon" type="image/png" href="images/conso-icon.png">
  <title>SWADES'20 | LOGIN</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>
<body>



<nav class="navbar sticky-top navbar-expand-lg navbar-dark " >
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
    <form class="form-inline my-2 my-lg-0">
     
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Welcome : <i><?php echo $login_session; ?></button>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="logout.php">Log Out</a></button>

    </form>
   
  </div>
</nav>
<div class="start-test">
 <button class="start-test" type="start-test" onclick="myFunction()">start test</button>
</div>
<div class="start-test instructions">
  <h5>Instructions</h5>
   <ol>
     <li>Before starting the test, make sure you are connected with high speed internet connection.</li>
     <li>Once you start the test, do not refresh.</li>
     <li>All the Questions are compulsory.</li>
     <li>The Question Paper is divided in 2 parts(PART 1 AND PART 2).</li>
     <li>PART 1 contains two case studies and 4 multiple choice questions are asked on each case study.</li>
     <li>PART 2 contains two descriptive type questions.</li>
     <li>+4 marks will be awarded for each correct answer and -1 for each wrong answer in PART 1.</li>
     <li>+10 marks (best answer) for each answer in PART 2. Relative marking will be done.</li>
     <li>Total time for the exam is 45 minutes.</li>
     <li>Submit the paper before the time overs otherwise your responses will be submitted automatically.</li>
   </ol>
   <br>
   <h5 class="maximummarks">M.M.:- 52</h5>
    <br>
 </div>
    <p id="demo"></p>
<div id="txt"></div>

  </div>




<div id="test" style="display: none;">

 <form action="sub.php" method='post' >
  <p class="allthebest">----ALL THE BEST----</p>
<h3>PART 1: MULTIPLE CHOICE QUESTIONS:</h3>
<h4>The Reforestation</h4></br>
<h5>### Case study for Q1 to Q4.</h5>
The Qiang people live in the Sichuan province of China. This area is important for its mountain forests, which are a major source of water for the Yangtze river which runs through China. Deforestation and popu¬lation growth over four decades have caused the forests to shrink by up to 40%. The loss of so much forest has also meant that many species of plants and animals (biodiversity) has been lost.</br>
By the 1980’s so much of the forest had disappeared that the Government realized that something had to be done, and funded a reforestation program. However, before the government set up a specific program of action, it sent teams of scientists to the villages to figure out how they could work together. The government knew that if the villagers didn’t believe in their program, and know how it could benefit them, then there was no chance of success.</br>
They decided that they would need to rely on the native knowledge of the Qiang people to help decide what to plant and how ta plant it, and incorporate their methods of forest management. It turned out that col¬lection of plants for herbal medicines was a major source of income for the Qiang people. The government decided to blend the cultivation of these plants with the project of reforestation. This guaranteed that the farmers would participate. The final solution was to plant trees in terraces, or strips. Horizontal bands of original vegetation, the native plants collected for medicines, were alternated with bands of tree seedlings.</br>
This system of alternating bands protected the soil from erosion and water runoff, brought the forest back to life, and increased the diversity of species in the forests. Because wooded areas were being opened up for cultivation by Iocals, they no longer had to go into the areas of protected forest to grow and collect medicinal plants. This means that protected areas will actually remain protected. It has allowed for the replanting and restoration of forest. The terraces have also created the ideal conditions for cultivating medicinal plants, so that the income and standard of living of villagers has gone up. The project has also given a higher status to medicinal knowledge, which will help ensure that the knowledge is passed down to future generations.</br>
In the past attempts at reforestation in China had involved banning locals from entering the forests. If the government had done this, the project would not have been sustainable, because Qiang people tradition¬ally cultivate medicinal plants in surrounding woodland and around their homes, and they were not about to change their way of life and means of supporting themselves. This project focused not only on replanting trees, but on opening up woodlands to locals, so that they could cultivate under the tree canopy as they had always done.</br>
<h5>***Answer the following question after going through the above case study.</h5>
</br>
  
      Q1. Why did china government fail in reforestation in past attempts?</br>
      </br>
      <input type="checkbox" name="answer1" value="a">a)  They were not using different variety of plants.</br>
      <input type="checkbox" name="answer1" value="b">b)  They were not planting medicinal plants.</br>
      <input type="checkbox" name="answer1" value="c">c)  They banned locals from entering the forest.</br>
      <input type="checkbox" name="answer1" value="d">c)  The soil was not fertile.
      </br>

      </br>
      </br></br>
      Q.2  Which of the following is the main reason of successful reforestation?</br></br>
      <input type="checkbox" name="answer2" value="a">a)  Banning people from entering in the forest.</br>
<input type="checkbox" name="answer2" value="b">b)  Giving knowledge of reforestation to the local people of Qiang.</br>
<input type="checkbox" name="answer2" value="c">c)  They had a major source of water Yangtze river.</br>
<input type="checkbox" name="answer2" value="d">d)  The system of alternating bands.
  </br>
   
      </br>
      </br></br>
      Q3. How did the system of alternating bands help in reforestation?</br></br>
<input type="checkbox" name="answer3" value="a">a)  It increased the biodiversity.</br>
<input type="checkbox" name="answer3" value="b">b)  It protected the soil from erosion and water runoff.</br>
<input type="checkbox" name="answer3" value="c">c)  It brought the villagers to plant medicinal plants.</br>
<input type="checkbox" name="answer3" value="d">d)  They used the system of alternating bands to cover the maximum area of forest.</br>  

      </br></br>
      </br>
      Q4. UNFCC has developed many protocols for CDM projects as well as carbon credits but most of them fall in the energy sectors. Very few are given in reforestation and afforestation projects. Why this parity?</br></br>
<input type="checkbox" name="answer4" value="a">a)  CDM methodologies are complex and time consuming.</br>
<input type="checkbox" name="answer4" value="b">b)  Low upfront-financing in reforestation and afforestation.</br>
<input type="checkbox" name="answer4" value="c">c)  Because energy cannot be produced from reforestation.</br>
<input type="checkbox" name="answer4" value="d">d)  UNFCC wants to focus on energy projects only.</br>
  
    
</br>
</br>
</br>
<h4>A Netflix Study</h4></br>
<h5>### Case study for Q5 to Q8.</h5>
Reed Hastings often told the story of his inspiration for Netflix: a $40 late fee from Blockbuster. He said, “It was all my fault. I didn’t want to tell my wife about it. And I said to myself, ‘I’m going to compromise the integrity of my marriage over a late fee?’” Still chagrined over the late fee, Hastings, a dot-com multimillionaire, formed Netflix, a company that would rent DVDs through the mail for a monthly subscription price, with no postage charges or late fees. Hastings’s model for Netflix seemed simple enough. Netflix subscribers would create a wish list of DVDs on the company’s website, and Netflix would send a new title from the list when the previous rental was returned.</br>
Behind the simple model however, Netflix’s success had been built on attending to every detail of its operations and adapting to the company’s various constituencies. For subscribers, Netflix designed a recommendations engine that customers liked and that allowed Netflix to shift subscriber interest from new releases. By attending to United States Postal Service (USPS) processes, Netflix had located its 41 warehouses, created processing procedures, and even designed its envelope in such a way as to minimize both operating costs and turnaround times. By working with the film studios, Netflix had reached agreements through which it reduced its risk in holding large numbers of DVDs from new releases.</br>
The attention to detail paid off. Nine years after its April 1998 launch in the San Francisco Bay Area, Netflix generated net income of $49 million on revenues of $996.7 million. The firm boasted 6.3 million subscribers and carried an inventory of 70,000 titles on 42 million discs. Netflix’s website, in 2006, was rated the best website for retail satisfaction for the third year in a row.</br>
In spite of the company’s operational success, Netflix faced two big challenges in 2007. First, in 2006 Blockbuster had made a major move into online rental. In Blockbuster’s new service, subscribers could bring mailers directly to a Blockbuster store and immediately rent a DVD, getting the instant gratification denied to Netflix subscribers. By January 2007, Blockbuster had grown its online business to two million customers.</br>
Second, a number of firms were beginning to offer video on demand (VoD). Netflix announced its own internet service in January 2007. The service complemented the existing subscriber service, generating no new fees. Netflix had budgeted $40 million to develop the system, but some analysts questioned whether that was sufficient to cover server data centres and licensing fees. Others argued that VoD would kill off the DVD rental business in general and that, for all its operational savvy, Netflix’s time had passed.</br>
<h5>***Answer the following question after going through the above case study.</h5>
</br>
Q 5 Which of the following is the customer retention strategy used by Netflix?</br></br>
   <input type="checkbox" name="answer5" value="a">a) Netflix gives discount to the users.</br>
      <input type="checkbox" name="answer5" value="b">b)  Customer can create the wish list on Netflix and according to the wish list Netflix will recommend the further movies/web series.</br>
     <input type="checkbox" name="answer5" value="c">c) Building and enhancing the customers brand loyalty in Netflix.</br>
     <input type="checkbox" name="answer5" value="d">d) Netflix satisfies its customer by offering video on demand (VoD).</br>
     </br></br></br>
Q6. What was the value proposition of Netflix?</br></br>

<input type="checkbox" name="answer6" value="a">a)  Subscribers could rent unlimited titles with no late fees, no postage or handling fees.</br>
<input type="checkbox" name="answer6" value="b">b)  DVDs on rent on monthly subscription with no late fees, no postage.</br>
<input type="checkbox" name="answer6" value="c">c)  DVDs at your door step on rent.</br>
<input type="checkbox" name="answer6" value="d">d)  Pay less, watch more.</br>
</br></br></br>
Q7. Which is the major revenue stream of Netflix?</br></br>
<input type="checkbox" name="answer7" value="a">a)  International streaming.</br>
<input type="checkbox" name="answer7" value="b">b)  3 different plans.</br>
<input type="checkbox" name="answer7" value="c">c)  Subscriptions.</br>
<input type="checkbox" name="answer7" value="d">d)  US streaming.</br>
</br></br></br>
Q8. As you know the business model canvas of Netflix, Suppose you are the owner of Netflix, and international streaming is not in your revenue streams. The company is in loss, now to get company out of this situation you have to remove one value proposition from your business model canvas. Which of the following value proposition you will remove to get the most profit?</br></br>
<input type="checkbox" name="answer8" value="a">a)  Personalisation.</br>
<input type="checkbox" name="answer8" value="b">b)  Freemium.</br>
<input type="checkbox" name="answer8" value="c">c)  Content library.</br>
<input type="checkbox" name="answer8" value="d">d)  No ads.</br>  

  </br>
  </br>
  </br>
  </br>
<h3>PART 2:DESCRIPTIVE QUESTIONS:</h3>
<h5>***Answer each question in at least 200 words and maximum 400 words.</h5></br></br>
Q1 “Business entrepreneurs tend to focus on new needs, while social entrepreneurs tend to focus on existing environmental and social problems more effectively on long-term goals through new approaches. ”<br>
Explain the above statement, supporting your idea of social entrepreneurship. As a social entrepreneur, what is success for you? </br></br>
<textarea name="des1">Enter Your Answer ...</textarea> 
</br>
</br>

Q2  “Good intentions are certainly enough for a philanthropist, however not for a social entrepreneur.”<br>
With reference to the above statement, what key factors can motivate the youth to take a step towards social entrepreneurship?</br>
</br> 
<textarea name="des2">Enter Your Answer ...</textarea> 
</br></br>


<input type="submit" value="Submit" name="submit">
</form>
</div>










<script>

  var x;

function myFunction() {
   document.querySelector("#test").style.display = "block";
   x= setTimeout(Func, 2700000);

}
 function Func(){
  window.open("sub.php","_self")
  $.get("index.php");
 }



</script>


</body>
</html>