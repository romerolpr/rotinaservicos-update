<div class="col-12 pt-0 pb-3">
	<div class="container">	
		<h2 class="tcenter sublime">Saiba mais sobre terceirização no nosso blog!</h2>

		<div class="content_blog">
			
			<div class="star_blog">
				<div class="box_blog">

					<?php 
					
					//percorre a variavel
					$countBlog = count($vetBlog) - 1;
					foreach ($vetBlog as $key => $value): 


					if($key == $countBlog):

						$pathBlog = $url.'artigos/'.$value['url'];
						$pathImageBlog = $url.'images/artigos/'.$value['cover'];
						$desc = strip_tags($value['description']);
						if (mb_strlen($desc, "UTF-8") > 140):
							$desc = mb_substr($desc, 0, 139);
							$final = strrpos($desc, " ");
							$desc = substr($desc, 0, $final);
							$desc .= "...";
						elseif (mb_strlen($desc, "UTF-8") < 120 && mb_strlen($desc, "UTF-8") > 110 ):
							$desc .= "... Saiba mais.";
						endif;
					?>

					<div class="box_box">
						<div class="content_">								
							<div>
								<a href="<?=$pathBlog?>" title="<?=$value['name']?>">
								<div class="text_blog">
									<div class="border-blog">
										<h2><?=$value['name']?></h2>
										<p><?=$desc?></p>
									</div>
								</div>
								</a>
							</div>
							<img src="<?=$pathImageBlog?>" class="picture-blog" title="<?=$value['name']?>" alt="<?=$value['name']?>">
						</div>
					</div>

					<?php endif; endforeach;?>

				</div>
			</div>
			<div class="sub_blog">

				<div class="scroll_content">
					<div class="box_blog">

						<?php
						foreach ($vetBlog as $key => $value):

						if($key < $countBlog): 

							$pathBlog = $url.'artigos/'.$value['url'];
							$pathImageBlog = $url.'images/artigos/'.$value['cover'];
							$desc = strip_tags($value['description']);
							if (mb_strlen($desc, "UTF-8") > 100):
								$desc = mb_substr($desc, 0, 99);
								$final = strrpos($desc, " ");
								$desc = substr($desc, 0, $final);
								$desc .= "...";
							elseif (mb_strlen($desc, "UTF-8") < 80 && mb_strlen($desc, "UTF-8") > 70 ):
								$desc .= "... Saiba mais.";
							endif;

						?>

						<div class="box_box">
							<div class="content_">
								<div class="text_blog">
									<div class="border-blog">
										<a href="<?=$pathBlog?>" title="<?=$value['name']?>">
										<h2><?=$value['name']?></h2>
										<p><?=$desc?></p>
										</a>
									</div>
								</div>
								<img src="<?=$pathImageBlog?>" class="picture-blog" title="<?=$value['name']?>" alt="<?=$value['name']?>">
							</div>
						</div>

						<?php endif; endforeach;?>

					</div>
				</div>

			</div>	

			<div class="box_btn">
				<div class="center">
					<span class="btn btn-blog" id="scrollContentButton"><i class="fa fa-angle-down"></i></span>
				</div>
			</div>

		</div>

	</div>	

</div>

<div class="push-blog"></div>