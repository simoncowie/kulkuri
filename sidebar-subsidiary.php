<?php	

/* When to show subsidiary sidebar at all. */
$kulkuri_show_sidebar_subsidiary = apply_filters( 'kulkuri_show_sidebar_subsidiary', true );
	
if( $kulkuri_show_sidebar_subsidiary ) : // Check do we show sidebar subsidiary.

	if ( is_active_sidebar( 'subsidiary' ) ) : ?>

		<aside id="sidebar-subsidiary" class="sidebar" role="complementary" aria-label="<?php echo _x( 'Subsidiary Sidebar', 'Sidebar aria label', 'kulkuri' ); ?>">
		
			<div class="wrap">
				<div class="wrap-inside">
			
					<?php dynamic_sidebar( 'subsidiary' ); ?>
		
				</div><!-- .wrap-inside -->	
			</div><!-- .div -->

		</aside><!-- #sidebar-subsidiary .sidebar -->
	
	<?php endif; // End check for sidebar. ?>

<?php endif; // End check for when to show show sidebar subsidiary. ?>