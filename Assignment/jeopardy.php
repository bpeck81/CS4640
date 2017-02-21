<html>
<head>
<meta charset="UTF-8" />

  <title>Jeopardy</title>
  <script type="text/javascript">
    function showSpecifyQuestion(){
      var type = document.createQuestion.questionType.value;
      switch(type){
        case "Short-Answer":
          document.createQuestion.style.display="none";
          document.specifyShortAnswer.style.display="block";
        break;
        case "Multiple-Choice":
          document.createQuestion.style.display="none";
          document.specifyMultipleChoice.style.display="block";
        break;
        case "True-False":
          document.createQuestion.style.display="none";
          document.specifyTrueFalse.style.display="block";
        default:
        break;
      }
    }

    function submitShortAnswer(){
      if (document.specifyShortAnswer.Question.value == "" || document.specifyShortAnswer.textarea.value == ""){
        alert("Please fill out the entire form before submitting.");
      }
      else{
        document.specifyShortAnswer.submit();
      }
    }

    function submitMultipleChoice(){
      if (document.specifyMultipleChoice.Question.value == "" || document.specifyMultipleChoice.Answer1.value == "" ||
          document.specifyMultipleChoice.Answer2.value == "" || document.specifyMultipleChoice.Answer3.value == "" ||
          document.specifyMultipleChoice.Answer4.value == "" || document.specifyMultipleChoice.solution.value == ""){
        alert("Please fill out the entire form before submitting.");
      }
      else{
        document.specifyMultipleChoice.submit();
      }
    }

    function submitTrueFalse(){
      if (document.specifyTrueFalse.Question.value == "" || (document.specifyTrueFalse.trueFalse.value != "true" &&
          document.specifyTrueFalse.trueFalse.value != "false") ){
        alert("Please fill out the entire form before submitting.");
      }
      else{
        document.specifyTrueFalse.submit();
      }
    }


  /*  function showCreateQuestion(){
      document.createQuestion.style.display="block";
      document.specifyShortAnswer.style.display="none";
      document.specifyMultipleChoice.style.display="none";
      document.specifyTrueFalse.style.display="none";
    }*/

    function clearContents(element){
      element.value='';
    }
  </script>
  <style>
    body {
      background-color: #e3f2f9;
      align-items: center;
      font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;

    }
    h1 {
      color: gray;
      text-align: center;
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }
    h2{
      color: gray;
      text-align: center;
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }
    .center {
      margin: auto;
      width: 50%;
      border: 3px solid gray;
      padding: 10px;
    }

  </style>
</head>

<body>
<div class="center">
<form name="createQuestion" id="createQuestion">
  <h1>Let's Play Jeopardy!!</h1>
  <span style="color:#f00"><b>By Brandon Peck and Laith Hasanian (bjp9pq and lmh2sb)</b></span>
  <h3>Welcome to our jeopardy game. Select a question type below and fill out the form to create new jeopardy questions.</h3>
  <br  />
  <h2>Choose Question Type</h2>
  <br />
  Choose the type of question you would like to create.
  <br />
  <b>Question Type:</b>
  <br />
  <select name="questionType" id="questionType">
    <option value="Default">--default--</option>
    <option value="Short-Answer">Short Answer</option>
    <option value="Multiple-Choice">Multiple Choice</option>
    <option value="True-False">True/False</option>
  </select>
  <input type="button" onclick="showSpecifyQuestion()" value="enter" />
</form>

<form method="post" action="formHandler.php" id="specifyShortAnswer" name="specifyShortAnswer">
  <h1>Enter Short Answer Question</h1>
  <br />
  Question
  <br />
  <input type="text" id="Question" name="Question" />
  <br />
  Answer
  <br />
  <textarea name="textarea" id="textarea" rows="8" cols="50" value="''">
  </textarea>
  <br />
  <input type="button" onclick="clearContents(document.specifyShortAnswer.Question); clearContents(document.specifyShortAnswer.textarea);" value="clear" />
  <input type="button" onclick="submitShortAnswer()" value="submit" />
</form>
<script type="javascript"> document.specifyShortAnswer.textarea.value=''; </script>
<form method="post" action="formHandler.php" id="specifyMultipleChoice" name="specifyMultipleChoice">
  <h1>Enter Multiple Choice Question</h1>
  <br />
  Question
  <br />
  <input type="text" name="Question" />
  <br />
  Answer 1
  <br />
  <input type="text" name="Answer1" />
  <br />
  Answer 2
  <br />
  <input type="text" name="Answer2" /><br />
  Answer 3
  <br />
  <input type="text" name="Answer3" /><br />
  Answer 4
  <br />
  <input type="text" name="Answer4" />
  <br />
  Correct Answer
  <br />
  <select name="solution" id="solution">
    <option value="one">1</option>
    <option value="two">2</option>
    <option value="three">3</option>
    <option value="four">4</option>
  </select>
  <br />
  <input type="button" onclick="clearContents(document.specifyMultipleChoice.Question); clearContents(document.specifyMultipleChoice.Answer1);
  clearContents(document.specifyMultipleChoice.Answer2); clearContents(document.specifyMultipleChoice.Answer3); clearContents(document.specifyMultipleChoice.Answer4);
  clearContents(document.specifyMultipleChoice.solution);" value="clear" />
  <input type="button" onclick="submitMultipleChoice()" value="submit" />
</form>

<form method="post" action="formHandler.php" id="specifyTrueFalse" name="specifyTrueFalse">
  <h1>Enter True False Question</h1>
  <br />
  Question
  <br />
  <input type="text" name="Question" />
  <br />
  <input type="radio" name="trueFalse" value="true"/>True
  <input type="radio" name="trueFalse" value="false" />False
  <br />
  <input type="button" onclick="clearContents(document.specifyTrueFalse.Question); clearContents(document.specifyTrueFalse.trueFalse);" value="clear" />
  <input type="button" onclick="submitTrueFalse()" value="submit" />
</form>

<script type="text/javascript">
  document.specifyShortAnswer.style.display="none";
  document.specifyMultipleChoice.style.display="none";
  document.specifyTrueFalse.style.display="none";
</script>
</div>

</body>

</html>
