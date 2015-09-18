<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HTML Generator</title>
</head>
<body>
	<form method="post">
    <p>Nama Barang</p>
    	<input type="text" name="nama" id="nama">
      <br><br>
      
     <p>Harga</p>
        <input type="text" name="harga" id="harga">
      <br><br>
      
    <p>flavour</p>
        <input type="text" name="flavour" id="flavour">
      <br><br>
      
      <p>img</p>
        <input type="text" name="img" id="img">
      <br><br>
      
      
      <input type="submit">
      </form>
    </form>
    
    
    <?php
	
		
		$nama=$_POST['nama'];
		$price=$_POST['harga'];
		$flav=$_POST['flavour'];
		$img=$_POST['img'];

		$template = fopen("$nama.html","w");
		
		$html = 
<<<HTML_ISI
		
		<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- Title -->
<title>Product Template - Chocolate Pattisserie</title>

<!-- CSS Links -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/skeleton.css">
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../css/nailthumb.css">
<style type="text/css" media="screen">
        .square-thumb {
            width: 350px;
            height: 350px;
        }
		
		#ourTeam {
			position:absolute;
			bottom:0;
		}
</style>

<!-- JS Links -->
<script src='../js/jquery-1.10.2.min.js' type='text/javascript'></script>
<script src='../js/scrollIt.min.js' type='text/javascript'></script>
<script src="../js/jquery.nailthumb.1.1.min.js" type="text/javascript"></script>
<script>

$(function() { $.scrollIt(); });

jQuery(document).ready(function() {
       jQuery('.square').nailthumb({width:100,height:100});
});

</script>
</head>

<body>
<section id="header">
    	<div class="container">
        <div class="row">
        <div class="five columns">
    			<img src="../img/logo.png"  style="width:100%;" border="0" alt="Null">
            </div>
        <div class="five columns">
        	<ul id="navbar">
            	<li><a href="../index.html">Home</a></li>
                <li><a href="../products.html">Products</a></li>
                <li><a href="../contactus.html">Contact Us</a></li>
            </ul>
        </div>
        </div>
        </div>
	</section>
<section class="product">
	<div class="container">
		<div class="row">
			<div class="twelve columns">
            	<h1>$flav</h1>
            </div>
			<div class="six columns" style="padding:1; margin:0.5em;">
            	<div class="nailthumb-container square-thumb">
                <img src="../img/products/Chocolate/Cherry Chocolate Cupcakes.jpg" alt="null">
                </div>
            </div>
            <div class="six columns" style="padding:1; margin:0.5em;">
            	<h1>$nama</h1>
                <p>Price IDR $price,-</p>
                <form action="#">
                <p>Quantity</p>
                <select>
                	<option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
                
                <br><br><br>
               
                <a href="#"><input type="submit" value="Add to Basket"></a>
                
                </form>
            </div>
		</div>
	</div>
</section>
<section id="ourTeam">
    	<div class="container">
    		<div class="row">
            	<div class="tweleve row">
                	<h1>Our Team</h1>
                </div>
            </div>
            <div class="row">
            	<div class="three columns">
                	<div  id="teamPerson">
                    <img src="../img/welcome.jpg" alt="Null" border="0" style="width:100%; padding-bottom:-2em;">
                	</div>
                </div>
            	<div class="three columns">
                	<div  id="teamPerson">
                    <img src="../img/welcome.jpg" alt="Null" border="0" style="width:100%; padding-bottom:-2em;"> 
                	</div>
                </div>
            	<div class="three columns">
                	<div  id="teamPerson">
                    <img src="../img/welcome.jpg" alt="Null" border="0" style="width:100%; padding-bottom:-2em;"> 
                	</div>
                </div>
            	<div class="three columns">
                	<div  id="teamPerson">
                    <img src="../img/welcome.jpg" alt="Null" border="0" style="width:100%; padding-bottom:-2em;"> 
                	</div>
                </div>
            </div>
    	</div>
    </section>
</body>
</html>		
HTML_ISI;
		
		fwrite($template, $html);
        
        fclose($template);
		
	?>
</body>
</html>