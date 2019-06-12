<?php
		function calculateRating($rating1,$rating2,$rating3,$rating4,$rating5){
		$rating_1 = floor((5*$rating5 + 4*$rating4 + 3*$rating3 + 2*$rating2 + 1*$rating1)/($rating1+ $rating2+$rating3 + $rating4 + $rating5));
		echo $rating_1;
			if ($rating_1 == 1)
			{
				?>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star "></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
			<?php
			}
			if ($rating_1 == 2)
			{
				?>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star "></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
			<?php
			}
			if ($rating_1 == 3)
			{
				?>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star  checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
			<?php
			}
			if ($rating_1 == 4)
			{
				?>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star  checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
			<?php
			}
			if ($rating_1 == 5)
			{
				?>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star  checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<?php
		}
}    
			?>