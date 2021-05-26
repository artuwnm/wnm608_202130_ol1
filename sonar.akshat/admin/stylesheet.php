<!DOCTYPE html>
<html>
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">

    <meta charset="utf-8">
    <title>Styleguide</title>
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
</head>
    
<body>
    <div class="navbar" id="toc">
        <h1 class="title">STYLEGUIDE</h1>
        <div class="cardnav">
            <ul>
                <li><a href="#typography">Typography</a></li>
                <li><a href="#colors">Colors</a></li>
                <li><a href="#figures">Figures</a></li>
                <li><a href="#window">View Window</a></li>
                <li><a href="#buttons">Buttons</a></li>
                <li><a href="#hotdog">Hotdog</a></li>
                <li><a href="#select">Select</a></li>
                <li><a href="#checkbox">Checkbox</a></li>
                <li><a href="#table">Table</a></li>
                <li><a href="#navigation">Navigation</a></li>
                <li><a href="#input">Inputs</a></li>
            </ul>
        </div>
    </div>
    
    <div class="sec" id="typography">
        <h2 class="typo">TYPOGRAPHY</h2>
        <div class="container">
            <div class="head">
                <h1>AKTIV GROTESK</h1>
                <h2>AKTIV GROTESK</h2>
                <h3>AKTIV GROTESK</h3>
                <h4>AKTIV GROTESK</h4>
            </div>
        </div>
    </div>
    <div>
        <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nulla neque, gravida eget mi nec, molestie aliquet risus. Vestibulum posuere nunc nibh, vel mattis arcu porttitor a. Quisque mollis velit sed feugiat mollis. Morbi non euismod tortor, sed vulputate nunc. Curabitur consectetur velit vitae nulla pulvinar, quis imperdiet turpis pulvinar. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum vulputate ex vel orci dapibus, quis vehicula nunc pellentesque. Donec blandit ligula faucibus ante porttitor bibendum. Quisque dignissim congue interdum. Etiam at euismod ligula. Cras aliquet augue eget placerat iaculis.<br><br> 
        Morbi ultricies pellentesque tellus, sed ornare arcu fermentum ut. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse suscipit dui at efficitur sagittis. Aenean in mauris nulla. Mauris euismod nisl id diam venenatis, quis lobortis elit semper. Praesent et magna vitae lorem dictum rutrum. Suspendisse pulvinar ipsum volutpat nisl blandit, nec lobortis neque condimentum.</p>
    </div>
    
    <div class="sec">
        <h2 class="typo" id="colors">COLORS</h2>
        <div class="colors">
            <div class="blue">#2C23F7</div>
            <div class="lightblue">#2B6FF7</div>
            <div class="black">#000000</div>
        </div>
    </div>
    
    <div class="sec">
        <h2 id="figures" class="typo">FIGURES</h2>
        <div class="figures">
            <div class="fig">
                <figure class="figure">
                    <img src="https://via.placeholder.com/300x250?text=product" alt="">
                <figcaption>Product<br>$0.00</figcaption>
                </figure>
            </div>
            <div class="fig">
                <figure class="figure">
                    <img src="https://via.placeholder.com/300x250?text=product" alt="">
                <figcaption>Product<br>$0.00</figcaption>
                </figure>
            </div>
            <div class="fig">
                <figure class="figure">
                    <img src="https://via.placeholder.com/300x250?text=product" alt="">
                <figcaption>Product<br>$0.00</figcaption>
                </figure>
            </div>
        </div>
    </div>
    
    <div class="sec">
        <h2 class="typo" id="window">VIEW WINDOW</h2>
        <div class="view-window" style="background-image: url(https://i.gadgets360cdn.com/large/ps5_w-disc_1591912765971.jpeg?downsize=950:*&output-quality=80)"></div>
    </div>
    
    <div class="sec">
        <h2 class="typo" id="buttons">BUTTONS</h2>
        <div class="button">
            <button class="defbutton3">Default Button</button> 
            <button class="shopbtn">Secondary Button</button> 
            <button class="inlinebtn">Delete</button>
            <button class="filterbtn">Filter Button</button>
        </div>
    </div>
    
    <div class="sec">
        <h2 class="typo" id="hotdog">HOTDOG</h2>
        <div class="search">
            <form>
                <input class="hotdog" type="search" placeholder="Search">
            </form>
        </div>
    </div>
    
    <div class="sec">
        <h2 class="typo" id="select">SELECT</h2>
        <div class="select">
            <select class="sel">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>

            <select class="js-sort">
                <option value="2">Newest</option>
                <option value="1">Oldest</option>
                <option value="3">Least Expensive</option>
                <option value="4">Most Expensive</option>
            </select>
        </div>
    </div>
    
    <div class="sec">
        <h2 class="typo" id="checkbox">CHECKBOX</h2>
        <div class="check">
            <label class="container paytext">
                <input type="checkbox">
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
    
    <script>
    const makeTable = (classes='') => {
	const head = ['ID','Office','Name','Email','Phone'];
	const body = [
		['522',"Hamilton Cline",'hcline@academyart.edu','555-2424'],
		['512',"Fred McHale",'fmchale@academyart.edu','555-2424'],
		['522',"Michael Catanzaro",'mcatanzaro@academyart.edu','555-2424'],
		['514',"Andrea Pimental",'apimentel@academyart.edu','555-2424'],
		['516',"DC Scarpelli",'dscarpelli@academyart.edu','555-2424'],
	];

	document.write(`
		<table class="${classes}">
			<thead><tr>${head.reduce((r,o)=>r+`<th>${o}</th>`,'')}</tr></thead>
			<tbody>${body.reduce((r,o,i)=>r+
				`<tr>${
					[i+1,...o].reduce((r,o)=>r+`<td>${o}</td>`,'')
				}</tr>`,'')
			}</tbody>
		</table>	
		`);
	}
    </script>
    
    <div class="sec">
        <h2 class="typo" id="table">TABLE</h2>
        <div class="tablee">
            <script>makeTable("table")</script>
        </div>   
    
    </div>
    
    <div class="sec">
        <h2 class="typo" id="navigation">NAVIGATION</h2>
        <div class="nav">
            <nav class="navi">
                <ul class="navii">
                    <li><a href="#" class="nav1">Home</a></li>
                    <li><a href="#" class="nav1">About</a></li>
                    <li><a href="#" class="nav1">Store</a></li>
                    <li><a href="#" class="nav1">Contact Us</a></li>
                </ul>
            </nav> 
        </div>
        <div class="crumb">
             <ul class="crumbss">
                    <li class="crum"><a href="#" class="crumbs">Crumbs</a></li>
                    <li class="crum"><a href="#" class="crumbs">Navigation</a></li>
                    <li class="crum"><a href="#" class="crumbs">Product</a></li>
            </ul>
        </div>
    </div>
    
    <div class="sec">
        <h2 class="typo" id="input">INPUTS</h2>
        <div class="form">
            <form>
                <input type="text" class="definput" placeholder="default input">
                <input type="text" class="invalidinput" placeholder="invalid input">
                <input type="text" class="disabledinput" placeholder="disabled input">
            </form>
        </div>
    </div>
    
    <footer>
        <p>©Akshat Sonar 2021</p>
    </footer>
    
</body>
</html>