<!--PAGE LANGUAGE:  ENGLISH-->  

<!-- Translators:   Look for untranslated text inside HTML tags.  In other words <a tag>any content text between markers like these</a tag>.  Don't worry about translating these comments.  Be sure NOT to translate english page names, file names, div names, div class names, or html syntax.-->


<?php require_once ("includes/brikchain-inc.php");?>

<!--Once translation is completed, you can remove the line below to take the translation notice off the page-->
<!--<?php require_once ("translate-please.php");?>-->

<!--TOP PAGE BANNER-->

<div class="splash-content-block">
	<div class="splash-text-box">
		<div class="splash-heading"><br>Brikchain Explorer</div>
		<div class="splash-sub">Browse the ecobricks & transactions of the full brikcoin blockchain.</div>
	</div>
	<div class="splash-image"><img src="webp/brikchain-450px.webp" style="width: 80%;"></div>	
</div>
<div id="splash-bar"></div>



<!-- PAGE CONTENT-->

<a name="top"></a>
<div id="main-content">
<!-- The flexible grid (content) -->
	<div class="row">
		<div class="main">

			<div class="lead-page-paragraph">
				<br>
				<p><b>Search and explore the full chain of authenticated ecobricks, blocks and transactions that underly the brikcoin manual blockchain.</b></p>
			</div>

			<div class="page-paragraph">
				  
				<p>Every ecobrick that is authenticated on the <a href="/gobrik">GoBrik platform</a> is permanently recorded as a non-fungible-brik in the Brikcoin Manual Blockchain.  With each authentication, the corresponding value of  ecobrick sequestered plastic (<a href="aes">AES plastic</a>) is issued in <a href="brikcoins">Brikcoins</a>.
				
				<p>All blocks and transaction are recorded for a full and searcable public accounting and to generate the yearly value of 1Kg of AES value for <a href="https://gobrikc.om/#offset" target="_blank" rel="noopener" >plastic offseting</a>.  All authenticated ecobricks are recorded assist exchange of physical bricks as non-fungible-tokens and as a historical record of each brik.</p>
				
				<p>Use the tools below to search by either transition or by ecobrick.</p>

			</div>


		</DIV>
		

		<div class="side">

		<div id="side-module-desktop-mobile">
				<img src="webp/for-earth500px.webp" width="90%" alt="Following the Earth's example through eco bricking">
				<br><h4>Earth Enterprise</h4>
				<h5>The Brikchain is maintained by the Global Ecobrick Alliance, a not-for-profit, for-Earth enterprise dedicated to accelerating plastic transition.</h5><br>
				<a class="module-btn" href="/about">About the GEA</a>
                <br>
		</div>   
         
	</div>
</div>


<br>

<div id="main-content">
<div class="page-paragraph">
	<h4>Brikcoin Blocks & Transactions</h4>
	<h6>An overview of all brikcoins generated and exchanged.</h6>
</div>
<div>
<div id="main-content">
	<div class="overflow">
		<table id="brikchain" class="display" style="width:100%">
			<thead>
				<tr>
					
					<th>Issued</th>
					<th>Sender</th>	
					<th>Type</th>
					<th>Amount</th>
					<th>Transac.</th>
					<th>Ecobrick</th>

				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Issued</th>
					<th>Sender</th>	
					<th>Type</th>
					<th>Amount</th>
					<th>Transac.</th>
					<th>Ecobrick</th>
				</tr>
			</tfoot>
		</table>
	</div>




	<!--FOOTER STARTS HERE-->

	<?php require_once ("footers/footer-$lang.php");?>

	<!--FOOTER ENDS HERE-->

</div>
</body>
</html>

