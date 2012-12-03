<div class="wrap">
	
	<?php screen_icon( 'themes' ); ?>
	<h2>Mailing List Subscribers</h2>
	
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
			<form method="post" action="?page=<?=$_GET['page'];?>">
            
            			<?php 
						
						if ($_GET['rem']) $_POST['rem'][] = $_GET['rem'];
						
						if (is_array($_POST['rem'])) {
							foreach ($_POST['rem'] as $id) { $wpdb->query("delete from ".$wpdb->prefix."sml where id = '".$id."' limit 1");	 }
							$message = "Subscribers have been removed successfully.";
						}
						
						
						if ($message) { echo '<div style="padding: 5px;" class="updated"><p>'.$message.'</p></div>'; }
						
            			?>
					
						<table cellspacing="0" class="wp-list-table widefat fixed subscribers">
                          <thead>
                            <tr>
                                <th style="" class="manage-column column-cb check-column" id="cb" scope="col"><input type="checkbox"></th>
                                <th style="" class="manage-column column-name" id="name" scope="col">Name<span class="sorting-indicator"></span></th>
                                <th style="" class="manage-column column-email" id="email" scope="col"><span>Email Address</span><span class="sorting-indicator"></span></th>
                            </thead>
                        
                            <tfoot>
                            <tr>
                                <th style="" class="manage-column column-cb check-column" scope="col"><input type="checkbox"></th>
                                <th style="" class="manage-column column-name" scope="col"><span>Name</span><span class="sorting-indicator"></span></th>
                                <th style="" class="manage-column column-email" scope="col"><span>Email Address</span><span class="sorting-indicator"></span></th>
                            </tfoot>
                        
                            <tbody id="the-list">
                            
                            <?php 
                            
								$results = $wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."sml");
								if (count($results)<1) echo '<tr class="no-items"><td colspan="3" class="colspanchange">No mailing list subscribers have been added.</td></tr>';
								else {
									foreach($results as $row) {
	
										echo '<tr>
													<th class="check-column"><input type="checkbox" name="rem[]" value="'.$row->id.'"></th>
													<td>'.$row->sml_name.'<br>
													<div class="row-actions">
														<span class="delete"><a onclick="if ( confirm(\You are about to delete this subscriber \'Documentation\'\n  \'Cancel\' to stop, \'OK\' to delete.\' ) ) { return true;}return false;" 
														href="?page='.$_GET['page'].'&rem='.$row->id.'" class="submitdelete">Delete</a></span>
													</div></td>
													<td>'.$row->sml_email.'</td>
											  </tr>';
											  
											  
											  
	
									}
								}
							
							?>
                            
                                
                            </tbody>
                        </table>
                        <br class="clear">
						<input class="button" name="submit" type="submit" value="Remove Selected" /> <a class="button" href="<?php echo plugins_url( 'export-csv.php', __FILE__ ); ?>">Export as CSV</a>
				</form>
				<br class="clear">
			</div> 
			
			
			<div id="postbox-container-1" class="postbox-container">
                    <div class="meta-box-sortables">
                        <div class="postbox">
                        	
                       	  <h3><span><?php echo PLUGIN_NAME; ?> v<?php echo PLUGIN_VER; ?></span></h3>
                            <div class="inside">
                            	<p>This plugin allows users to enter their name and email address on a simple unstyled form to subscribe to a simple mailing list which is available to view and modify in the wordpress admin area. </p>
                                <p>The subscribe form can be displayed on any wordpress page using the shortcode <strong>[smlsubfrom]</strong> or from your wordpress theme by calling the php function <strong>&lt;?php echo smlsubfrom(); ?&gt;</strong>.</p>
                                <p>I developed this plugin as I could not find any plugin that simply allows users to submit their name and email address to a simple list viewable in the wordpress admin, all the plugins that I found had lots of extra features such as sending out mass emails and double opt-in which my clients do not need.</p>  
                                
                                <p style="border-top: solid 1px #ccc"><img style="margin-top:15px" src="<?php echo plugins_url( 'webfwdlogo.png', __FILE__ ); ?>"></p>

                                
                                
                                <p><em>We are an internet based service provider just a few miles north of Birmingham UK, we develop time-saving systems for businesses that are accessible from all devices. We have our own high speed resilient data centre which consist of web, database and streaming servers. We also provide IT support, consultancy and produce documents for businesses.</em></p>
                                <p><a class="button" href="http://www.webfwd.co.uk/" target="_blank">Visit our Website</a></p>
                            </div>
                      </div> 
                    </div> 
                </div> 
            </div>
            <br class="clear">
	</div>
	
</div> 