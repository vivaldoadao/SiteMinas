                       <div class="widget m-bottom-0">
							<h3 class="block-title"><span>Newsletter</span></h3>
							<div class="ts-newsletter">
								<div class="newsletter-introtext">
								<?php   

                                     include('app/helpers/formErrors.php');


                                    ?>
									<h4>Mantenha-se actualizado</h4>
									<p>Subscreva na nossa newsletter e receba as últimas notícias no seu E-mail</p>
								</div>

								<div class="newsletter-form">
									<form action="index.php" method="post" id="form-inserir-newslatter2">
										<div class="form-group">
											<input type="email" name="email" id="email" value="<?php echo $email;  ?>" class="form-control form-control-lg" placeholder="E-mail" autocomplete="off">
											<button type="submit" name="add-newslatterSite" class="btn btn-primary">Subscrever</button>
										</div>
								
									</form>
								</div>
							</div><!-- Newsletter end -->
						</div>