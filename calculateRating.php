<?php
			$rating = floor((5*$rating5 + 4*$rating4 + 3*$rating1 + 2*$rating2 + 1*$rating1)/($rating1+ $rating2+$rating3 + $rating4 + $rating5));
			echo $rating;
			if ($rating == 1)
			{
				?>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star "></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
			<?php
			}
			if ($rating == 2)
			{
				?>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star  checked"></span>
				<span class="fa fa-star "></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
			<?php
			}
			if ($rating == 3)
			{
				?>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star  checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
			<?php
			}
			if ($rating == 4)
			{
				?>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star  checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
			<?php
			}
			if ($rating == 5)
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