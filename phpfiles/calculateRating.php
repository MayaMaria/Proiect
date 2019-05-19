<?php
			$rating_1 = floor((5*$rating5_1 + 4*$rating4_1 + 3*$rating3_1 + 2*$rating2_1 + 1*$rating1_1)/($rating1_1+ $rating2_1+$rating3_1 + $rating4_1 + $rating5_1));
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
			?>