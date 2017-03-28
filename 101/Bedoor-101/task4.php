<!DOCTYPE html>  
    <html>  
     <head>  
       <meta charset="utf-8">  
       <title> Bedoor WebPage </title>  
       <style>  
         header{  
           background: blue;  
		   Color: white;
           padding: 9em;  
           text-align: center;  
         }  
       </style>  
     </head>  
       
     <body>  
       <header>  
         <h1>  
               <?php  
               echo "<h1>Hello " . $_GET["name"] . "</h1>";
             ?>  
      </h1>  
 </header>  
  </body>  
  </html> 
