<html>
<head>
    <title>Vowel or Consonant</title>
</head>
<body>

<form>
    <div>Alphabet:</div>
    <input type="char" name="char"/>

  <div><br><input type="submit" value="answer"></div><br>

</form>

<?php      
    if (isset($_GET['char']))
{
  $ch = $_GET['char'];
    switch ($ch)  
    {     
        case 'a':   
            echo "Given character is vowel";  
            break;  
        case 'e':   
            echo "Given character is vowel";  
            break;  
        case 'i':   
            echo "Given character is vowel";  
            break;  
        case 'o':   
            echo "Given character is vowel";  
            break;    
        case 'u':   
            echo "Given character is vowel";  
            break;  
        case 'A':   
            echo "Given character is vowel";  
            break;  
        case 'E':   
            echo "Given character is vowel";  
            break;  
        case 'I':   
            echo "Given character is vowel";  
            break;  
        case 'O':   
            echo "Given character is vowel";  
            break;  
        case 'U':   
            echo "Given character is vowel";  
            break;  
        default:   
            echo "Given character is consonant";  
            break;  
    } 
}	
?>    
</body>
</html>